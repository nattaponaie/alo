{{--@extends('admin.product.product-image')--}}

{{--@section('scripts')--}}
    {{--<script src="{{ url('/js/jquery.js') }}"></script>--}}
    {{--<script src="{{ url('/js/ajax-crud-modal-form.js') }}"></script>--}}
{{--@endsection--}}

{{--@section('content2')--}}

    <div class="container">
        {{--<div class="float-right">--}}
        {{--<a href="#modalForm" data-toggle="modal" data-href="{{url('view-images/create')}}"--}}
        {{--class="btn btn-primary">New</a>--}}
        {{--</div>--}}
        <h1 style="font-size: 1.3rem">จัดการไฟล์รูปภาพสินค้า</h1>
        <hr/>
        <div class="row">
            <div class="col-sm-4 form-group">
                {!! Form::select('select_products'
                    ,$select_products_array
                    ,request()->session()->get('select_products')
                    ,['class'=>'form-control','onChange'=>'ajaxLoad("'.url("view-images").'?select_products="+this.value)'])
                !!}
            </div>
            <div class="col-sm-5 form-group">
                <div class="input-group">
                    <input class="form-control" id="search-product"
                           value="{{ request()->session()->get('search-product-id') }}"
                           onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('view-images')}}?search-product-id='+this.value)"
                           placeholder="รหัสสินค้า" name="search-product-id"
                           type="text"/>
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-warning"
                                onclick="ajaxLoad('{{url('view-images')}}?search-product-id='+$('#search-product').val())"
                        >
                            ค้นหา
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 form-group">
                <button type="submit" class="btn btn-warning"
                        data-toggle="modal"
                        href="#modalUploadImage">เพิ่มรูปใหม่
                </button>
            </div>
        </div>
        <table class="table table-bordered bg-light">
            <thead class="bg-dark" style="color: white">
            <tr>
                <th width="60px" style="vertical-align: middle;text-align: center">No</th>
                <th style="vertical-align: middle">
                    <a href="javascript:ajaxLoad('{{url('view-images?field=product_id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                        รหัสสินค้า
                    </a>
                    {{request()->session()->get('field')=='product_id'?(request()->session()->get('sort')=='asc'?'&#x25B4;':'&#x25BE;'):''}}
                </th>
                <th style="vertical-align: middle">
                    <a href="javascript:ajaxLoad('{{url('view-images?field=resized_name&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                        รูป
                    </a>
                    {{request()->session()->get('field')=='resized_name'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                </th>
                <th width="130px" style="vertical-align: middle">Action</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i=1;
            @endphp
            @foreach($image_products as $image_product)
                <tr>
                    <th style="vertical-align: middle;text-align: center">{{$i++}}</th>
                    <td style="vertical-align: middle">{{ $image_product->product_id }}</td>
                    <td style="vertical-align: middle"><img src="/images/products/{{ $image_product['product_id'] }}/{{ $image_product['resized_name'] }}"></td>
                    <td style="vertical-align: middle" align="center">
                        <input type="hidden" name="_method" value="delete"/>
                        <a class="btn btn-danger btn-sm" title="Delete" data-toggle="modal"
                           href="#modalDelete"
                           data-image_id="{{$image_product->id}}"
                           data-product_id="{{$image_product->product_id}}"
                           data-token="{{csrf_token()}}">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <nav>
            <ul class="pagination justify-content-end">
                {{$image_products->links('vendor.pagination.bootstrap-4')}}
            </ul>
        </nav>
    </div>


    {{--<select name="product_id">--}}
        {{--@foreach($all_products as $product)--}}
            {{--<option value="{{$product['product_id']}}">{{$product['product_name']}}</option>--}}
        {{--@endforeach--}}
    {{--</select>--}}

    {{--<div class="table-responsive-sm">--}}
        {{--<table class="table">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th scope="col">Image</th>--}}
                {{--<th scope="col">Filename</th>--}}
                {{--<th scope="col">Original Filename</th>--}}
                {{--<th scope="col">Resized Filename</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
            {{--@foreach($image_products as $image_product)--}}
                {{--<tr>--}}
                    {{--<td><img src="/images/products/{{ $image_product['product_id'] }}/{{ $image_product['resized_name'] }}"></td>--}}
                    {{--<td>{{ $image_product['filename'] }}</td>--}}
                    {{--<td>{{ $image_product['original_name'] }}</td>--}}
                    {{--<td>{{ $image_product['resized_name'] }}</td>--}}
                {{--</tr>--}}
            {{--@endforeach--}}
            {{--</tbody>--}}
        {{--</table>--}}
    {{--</div>--}}
{{--@stop--}}