<aside class="widget woocommerce widget_product_categories electro_widget_product_categories">
    <ul class="product-categories category-single">
        <li class="product_cat">
            <!-- <ul class="show-all-cat">
                <li class="product_cat"><span class="show-all-cat-dropdown">สินค้าทั้งหมด</span>
                    <ul>
                        <li class="cat-item"><a href="index.php?page=product-category">GPS &amp; Navi</a> <span class="count">(0)</span></li>
                        <li class="cat-item"><a href="index.php?page=product-category">Home Entertainment</a> <span class="count">(1)</span></li>
                        <li class="cat-item"><a href="index.php?page=product-category">Cameras &amp; Photography</a> <span class="count">(5)</span></li>
                        <li class="cat-item"><a href="index.php?page=product-category">Smart Phones &amp; Tablets</a> <span class="count">(20)</span></li>
                        <li class="cat-item"><a href="index.php?page=product-category">Video Games &amp; Consoles</a> <span class="count">(3)</span></li>
                        <li class="cat-item"><a href="index.php?page=product-category">TV &amp; Audio</a> <span class="count">(1)</span></li>
                        <li class="cat-item"><a href="index.php?page=product-category">Gadgets</a> <span class="count">(3)</span></li>
                        <li class="cat-item"><a href="index.php?page=product-category">Car Electronic &amp; GPS</a> <span class="count">(0)</span></li>
                        <li class="cat-item"><a href="index.php?page=product-category">Accessories</a> <span class="count">(11)</span></li>
                        <li class="cat-item"><a href="index.php?page=product-category">Printers &amp; Ink</a> <span class="count">(1)</span></li>
                        <li class="cat-item"><a href="index.php?page=product-category">Software</a> <span class="count">(0)</span></li>
                        <li class="cat-item"><a href="index.php?page=product-category">Office Supplies</a> <span class="count">(0)</span></li>
                        <li class="cat-item"><a href="index.php?page=product-category">Computer Components</a> <span class="count">(1)</span></li>
                    </ul>
                </li>
            </ul> -->
            <ul>

                @foreach($categories as $category)
                    @if($category["cat_sub"] > 0)
                        <ul class="show-all-cat">
                            <li class="product_cat"><span class="show-all-cat-dropdown">{{$category["cat_name"]}}</span>
                                <ul>
                                    @foreach ($sub_categories as $sub_category)
                                        @if($sub_category["cat_id"] == $category["cat_id"])
                                            <li class="cat-item">
                                                <a href="{{route('product-category', $sub_category["sub_id"])}}">{{$sub_category["sub_cat_name"]}}</a>
                                                <span class="count">({{$sub_category["sub_amount"]}})</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    @else
                        <li class="cat-item"><a href="index.php?page=product-category">{{$category["cat_name"]}}</a> <span class="count">({{$category["cat_sub"]}})</span>
                    @endif
                @endforeach

            </ul>
        </li>
    </ul>
</aside>
