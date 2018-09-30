<?php

namespace App\Http\Controllers;

use App\ProductImage;
use App\Product;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;
use Illuminate\Filesystem\Filesystem;

class UploadImagesController extends Controller
{

    private $photos_path;

    public function __construct()
    {
        $this->photos_path = public_path('/images/products');
    }

    public function index()
    {
        return view('admin.product.product-image');
    }

    public function showUpload()
    {
        $all_products = Product::all()->toArray();
        return view('admin.product.upload-product-image', compact('all_products'));
    }

    public function showImages(Request $request)
    {
        $products = Product::all()->toArray();
        $select_products_array['-1'] = 'สินค้า';
        foreach($products as $product)
        {
            $select_products_array[$product['product_id']] = $product['product_name'];
        }

        $request->session()->put('search-product-id', $request->has('search-product-id') ? $request->get('search-product-id') : ($request->session()->has('search-product-id') ? $request->session()->get('search-product-id') : ''));
        $request->session()->put('select_products', $request->has('select_products') ? $request->get('select_products') : ($request->session()->has('select_products') ? $request->session()->get('select_products') : -1));
        $request->session()->put('field', $request->has('field') ? $request->get('field') : ($request->session()->has('field') ? $request->session()->get('field') : 'updated_at'));
        $request->session()->put('sort', $request->has('sort') ? $request->get('sort') : ($request->session()->has('sort') ? $request->session()->get('sort') : 'desc'));

//        $request->session()->put('field','product_id');

        $image_products = new ProductImage();
        if ($request->session()->get('select_products') != -1)
            $image_products = $image_products->where('product_id', $request->session()->get('select_products'));

        $image_products = $image_products->where('product_id', 'like', '%' . $request->session()->get('search-product-id') . '%')
            ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
            ->paginate(5);

        $data = array('image_products' => $image_products
            ,'select_products_array' => $select_products_array
            ,'products' => $products);

        if ($request->ajax())
            return view('admin.product.view-product-image')->with($data);
        else
            return view('admin.product.product-image')->with($data);
    }

    /**
     * Saving images uploaded through XHR Request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photos = $request->file('file');

        if (!is_array($photos)) {
            $photos = [$photos];
        }

        if (!is_dir($this->photos_path)) {
            mkdir($this->photos_path, 0777);
        }

        if (!is_dir($this->photos_path . '/' . $request->product_id)) {
            mkdir($this->photos_path. '/' . $request->product_id, 0777);
        }

        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $name = sha1(date('YmdHis') . str_random(30));
//            $save_name = $name . '.' . $photo->getClientOriginalExtension();
//            $resize_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();
            $save_name = $request->product_id . '-original-' . $name . '.' . $photo->getClientOriginalExtension();
            $resize_name = $request->product_id . '-resized-' . $name . str_random(2) . '.' . $photo->getClientOriginalExtension();


            Image::make($photo)
                ->resize(600, 600, function ($constraints) {
                    $constraints->aspectRatio();
                })
                ->save($this->photos_path . '/' . $request->product_id . '/' . $resize_name);

            $photo->move($this->photos_path . '/' . $request->product_id, $save_name);

            $upload = ['filename' => $save_name,
                'resized_name' => $resize_name,
                'original_name' => basename($photo->getClientOriginalName()),
                'product_id' => $request->product_id];
            DB::table('product_images')->insert($upload);
        }
    }

    public function delete($image_id,$product_id)
    {
        $image = ProductImage::where('id', $image_id)->first();
        \File::delete(public_path('images/products/'. $product_id . '/' .$image['filename']));
        \File::delete(public_path('images/products/'. $product_id . '/' .$image['resized_name']));
        ProductImage::where('id', $image_id)->delete();

        $fileSystem = new Filesystem();
        $directory = public_path('images/products/'. $product_id);
        // Get all files in this directory.
        $files = $fileSystem->files(public_path('images/products/'. $product_id));

        // Check if directory is empty.
        if (empty($files)) {
            // Yes, delete the directory.
            $fileSystem->deleteDirectory($directory);
        }

        return redirect('view-images');
    }
}