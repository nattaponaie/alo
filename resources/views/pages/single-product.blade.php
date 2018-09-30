@extends('layouts.template-center')
@section('content')
<div id="content" class="site-content" tabindex="-1">
	<div class="container">

		<nav class="woocommerce-breadcrumb">
			<a href="index.php">หน้าแรก</a>
			<span class="delimiter"><i class="fa fa-angle-right"></i></span>
			<a href="shop">สินค้า</a>
			<span class="delimiter"><i class="fa fa-angle-right"></i></span>
			<a href="product-category={{$product["sub_id"]}}">{{$sub_category["sub_cat_name"]}}</a>
			<span class="delimiter"><i class="fa fa-angle-right"></i>
			</span>{{$product["product_name"]}}
		</nav><!-- /.woocommerce-breadcrumb -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main">		

				<div class="product">

					<div class="single-product-wrapper">
						<div class="product-images-wrapper">
							@if($product["onsale"] == 1)
								<span class="onsale">Sale!</span>
							@endif

							@include("inc.blocks.single-product.images-block")
						</div><!-- /.product-images-wrapper -->

						@include("inc.blocks.single-product.single-product-summary")

					</div><!-- /.single-product-wrapper -->


					<div class="woocommerce-tabs wc-tabs-wrapper">
						<ul class="nav nav-tabs electro-nav-tabs tabs wc-tabs" role="tablist">

							<li class="nav-item reviews_tab">
								<a href="#tab-reviews" data-toggle="tab">รีวิว</a>
							</li>

							<li class="nav-item accessories_tab">
								<a href="#tab-accessories" data-toggle="tab">อุปกรณ์เสริม</a>
							</li>

							<!-- <li class="nav-item description_tab">
								<a href="#tab-description" class="active" data-toggle="tab">Description</a>
							</li>

							<li class="nav-item specification_tab">
								<a href="#tab-specification" data-toggle="tab">Specification</a>
							</li> -->

						</ul>

						<div class="tab-content">

							<div class="tab-pane active in panel entry-content wc-tab" id="tab-reviews">
								@include("inc.blocks.single-product.woocommerce-tabs.reviews-tab")
							</div>

							<div class="tab-pane panel entry-content wc-tab" id="tab-accessories">
								@include("inc.blocks.single-product.woocommerce-tabs.accessories-tab")
							</div>

							<!-- <div class="tab-pane active in panel entry-content wc-tab" id="tab-description">
								<?php //require_once 'inc/blocks/single-product/woocommerce-tabs/description-tab.php'; ?>
							</div>

							<div class="tab-pane panel entry-content wc-tab" id="tab-specification">
								<?php //require_once 'inc/blocks/single-product/woocommerce-tabs/specification-tab.php'; ?>
							</div> -->
						</div>
					</div>

					@include("inc.blocks.single-product.related-products")
				</div><!-- /.product -->

			</main><!-- /.site-main -->
		</div><!-- /.content-area -->
	</div><!-- /.container -->
</div><!-- /.site-content -->
@stop

