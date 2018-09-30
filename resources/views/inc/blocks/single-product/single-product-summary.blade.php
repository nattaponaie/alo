<div class="summary entry-summary">

	<span class="loop-product-categories">
		<a href="product-category={{$sub_category["sub_id"]}}" rel="tag">{{$sub_category["sub_cat_name"]}}</a>
	</span><!-- /.loop-product-categories -->

	<h1 itemprop="name" class="product_title entry-title">{{$product["product_name"]}}</h1>

	<div class="woocommerce-product-rating">
		<div class="star-rating" title="Rated 4.33 out of 5">
			<span style="width:50.6%">
				<strong itemprop="ratingValue" class="rating">4.33</strong> 
				out of <span itemprop="bestRating">5</span>				based on
				<span itemprop="ratingCount" class="rating">3</span>
				customer ratings			
			</span>
		</div>

		<a href="#reviews" class="woocommerce-review-link">
			(<span itemprop="reviewCount" class="count">3</span> customer reviews)
		</a>	
	</div><!-- .woocommerce-product-rating -->

	<!-- <div class="brand">
		<a href="index.php?page=product-category">
			<img src="assets/images/single-product/brand.png" alt="Gionee" />
		</a>		
	</div>-->

	@if($product["product_stock"] > 0)
		<div class="availability in-stock">
			สถานะสินค้า: <span>มีสินค้า</span>
		</div><!-- .availability -->
	@else
		<div class="availability out-of-stock">
			สถานะสินค้า: <span>สินค้าหมด</span>
		</div><!-- .out of stock -->
	@endif

	<hr class="single-product-title-divider" />
	
	<div class="action-buttons">
		
		<a href="#" class="add_to_wishlist" >
		        เพิ่มในรายการที่ชอบ
		</a>


		<a href="#" class="add-to-compare-link" data-product_id="2452">Compare</a>
	</div><!-- .action-buttons -->

	<div itemprop="description">

		{{--<?php--}}
		{{--$sql = "SELECT * FROM product_qualification WHERE product_id = '$productID'";--}}
	    {{--$stmt = $pdo->prepare($sql);--}}
	    {{--$stmt->execute();--}}
	    {{--$productQualifications = $stmt->fetchAll();--}}

	    {{--?><ul><?php--}}
	    {{--foreach ($productQualifications as $productQualification) {--}}
	    	{{--?><li><?php--}}
	    	{{--echo $productQualification["product_detail"];--}}
	    	{{--?></li><?php--}}
	    {{--}--}}
	    {{--?></ul><?php--}}
	    {{--?>--}}

		<p>{{$product["product_desc"]}}</p>
		<!-- <ul>
			<li>4.5 inch HD Touch Screen (1280 x 720)</li>
			<li>Android 4.4 KitKat OS</li>
			<li>1.4 GHz Quad Core™ Processor</li>
			<li>20 MP front and 28 megapixel CMOS rear camera</li>
		</ul> -->

		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p> -->
		<p><strong>รหัสสินค้า</strong>: {{$product["product_id"]}}</p>
	</div><!-- .description -->

	<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

		@if($product["onsale"] == 1)
			<p class="price"><span class="electro-price"><ins><span class="amount">฿{{$product["product_old_price"]}}</span></ins> <del><span class="amount">&#36;{{$product["product_price"]}}</span></del></span></p>
		@else
			<p class="price"><span class="electro-price"><ins><span class="amount">฿{{$product["product_price"]}}</span></ins></span></p>
		@endif

		<meta itemprop="price" content="{{$product["product_price"]}}" />
		<meta itemprop="priceCurrency" content="บาท" />
		<link itemprop="availability" href="http://schema.org/InStock" />

	</div><!-- /itemprop -->

	@include("inc.blocks.single-product.variations-form")


</div><!-- .summary -->