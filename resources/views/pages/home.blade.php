
<div id="content" class="site-content" tabindex="-1">
    <div class="container">

        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                @include('inc.blocks.homepage.home-v2-slider')
                @include('inc.blocks.homepage.home-v2-ads-block')
                @include('inc.blocks.homepage.product-carousel-tab')
                @include('inc.blocks.homepage.deals-of-the-week-carousel')
                @include('inc.blocks.homepage.best-seller-home-v2')
                @include('inc.blocks.homepage.home-banner-v2')
                @include('inc.blocks.homepage.home-v2-categories-products-carousel')
            </main><!-- #main -->
        </div><!-- #primary -->

        <div id="sidebar" class="sidebar" role="complementary" style="margin-top: 42.5%;">
            @include('inc.components.sidebar.home-v2.home-v2-ad-block')
            @include('inc.components.sidebar.home-v2.latest-products')
            @include('inc.components.sidebar.home-v2.electro-features')
            @include('inc.components.sidebar.home-v2.products-carousel-widget')
        </div>

    </div><!-- .container -->
</div><!-- #content -->
