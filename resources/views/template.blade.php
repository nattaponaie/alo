<?php
/**
 * User: FearNothing
 * Date: 2/21/2018
 * Time: 3:50 PM
 */
?>

<?php
define( 'ELECTRO_ROOT', dirname(__FILE__) );
// session_start();
// require_once ELECTRO_ROOT . '/database/connect.php';
?>

<?php
// Define the root folder and base URL for the application
function baseURL(){
    return sprintf(
        "%s://%s%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
        dirname($_SERVER['REQUEST_URI'])
    );
}

define('BASE_URL', baseURL());
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$bodyClass = 'page home page-template-default';
$headerclass = 'v1';

switch($page){

    case 'about':
        $bodyClass = 'about full-width page page-template-default';
        break;
    case 'home-v2':
        $bodyClass = 'home-v2';
        break;
    case 'home-v3-full-color':
        $bodyClass = 'home page-template page-template-template-homepage-v3 full-color-background';
        break;
    case 'single-product':
        $bodyClass = 'single-product full-width';
        break;
    case 'single-product-sidebar':
    case 'single-product-sidebar-accessories':
    case 'single-product-sidebar-specification':
    case 'single-product-sidebar-reviews':
        $bodyClass = 'single-product';
        break;
    case 'single-product-extended':
        $bodyClass = 'single-product full-width extended';
        break;
    case 'blog':
        $bodyClass = 'blog';
        break;
    case 'blog-fw':
        $bodyClass = 'blog full-width';
        break;
    case 'blog-v3':
        $bodyClass = 'blog blog-list right-sidebar';
        break;
    case 'contact-v2':
    case 'terms-and-conditions':
        $bodyClass = 'page full-width';
        break;
    case 'blog-single':
        $bodyClass = 'single-post right-sidebar';
        break;
    case 'blog-v1':
    case 'shop-right-side-bar':
        $bodyClass = 'right-sidebar';
        break;
    case 'blog-v2':
        $bodyClass = 'right-sidebar blog-grid';
        break;
    case 'contact-v1':
        $bodyClass = 'page-template-default contact-v1';
        break;
    case 'cat-3-col':
    case 'cat-4-col':
    case 'shop':
        $bodyClass = 'left-sidebar';
        break;
    case 'login-and-register':
    case 'home-v2':
        $bodyClass = 'left-sidebar';
        break;
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>A.S. Power Tech &#8211; ตู้ลำโพงเอี่ยมละออ @yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-electro.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl-carousel.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/colors/red.css')}}" media="all" />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="{{asset('images/fav-icon.png')}}">
    @yield('stylesheet')
</head>
<body class="left-sidebar">
    <div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

        @include('inc.header.top-bar')
        @include('inc.header.header')
        @yield('content')
        @include('inc.footer.brands-carousel')
        @include('inc.footer.footer')

    </div><!-- #page -->

    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/tether.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-hover-dropdown.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/echo.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/electro.js')}}"></script>
    @yield('scripts')
</body>
</html>
