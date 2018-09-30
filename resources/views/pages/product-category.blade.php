@extends('layouts.template-center')
@section('content')
<div id="content" class="site-content" tabindex="-1">
    <div class="container">
        <nav class="woocommerce-breadcrumb" >
            <a href="index.php">หน้าแรก</a>
            <span class="delimiter">
        	<i class="fa fa-angle-right"></i>
        	<a href="shop"></span>สินค้า</a>
        </nav>

        <div id="primary" class="content-area">
        	<main id="main" class="site-main">

        		 <section>
                    <header>
                        <h2 class="h1">{{$sub_categories["sub_cat_name"]}}</h2>
                    </header>

                    <div class="woocommerce columns-4">
                        <ul class="product-loop-categories">
                            @include('inc.components.product-category-item')
                        </ul>
                    </div>
                </section>

                @include('inc.blocks.product-category-carousel')
        	</main><!-- /.site-main -->
        </div><!-- /.content-area -->
    </div>
</div>
@stop