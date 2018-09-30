<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type"  content="text/html charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>A.S. Power Tech &#8211; ตู้ลำโพงเอี่ยมละออ @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin-style.css')}}" media="all" />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="{{asset('images/fav-icon.png')}}">
    @yield('stylesheet')
</head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
<div class="container-fluid display-table">
    <div class="row display-table-row">
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
            <div class="logo">
                <a hef="home.html"><img src="" alt="merkery_logo" class="hidden-xs hidden-sm">
                    <img src="/images/fav-icon.png" alt="aiemlaor_logo" class="visible-xs visible-sm circle-logo">
                </a>
            </div>
            <div class="navi">
                <ul>
                    <li class="active"><a href="create-product"><i class="fa fa-cube" aria-hidden="true"></i><span class="hidden-xs hidden-sm">สินค้า &#9662;</span></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-file-picture-o" aria-hidden="true"></i><span class="hidden-xs hidden-sm">รูปภาพสินค้า</span></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="view-images">จัดการรูป</a>
                            <a class="dropdown-item" href="upload-image">อัพโหลดรูปภาพใหม่</a>
                        </div>
                    </li>
                    <li><a href="create-category"><i class="fa fa-edit" aria-hidden="true"></i><span class="hidden-xs hidden-sm">สร้างหมวดสินค้า</span></a></li>

                    {{--<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calender</span></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>--}}
                </ul>
            </div>
        </div>
        <div class="col-md-10 col-sm-11 display-table-cell v-align">
            <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
            {{--<div class="row">--}}
                {{--<header>--}}
                    {{--<div class="col-md-7">--}}
                        {{--<nav class="navbar-default pull-left">--}}
                            {{--<div class="navbar-header">--}}
                                {{--<button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">--}}
                                    {{--<span class="sr-only">Toggle navigation</span>--}}
                                    {{--<span class="icon-bar"></span>--}}
                                    {{--<span class="icon-bar"></span>--}}
                                    {{--<span class="icon-bar"></span>--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</nav>--}}
                        {{--<div class="search hidden-xs hidden-sm">--}}
                            {{--<input type="text" placeholder="Search" id="search">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-5">--}}
                        {{--<div class="header-rightside">--}}
                            {{--<ul class="list-inline header-top pull-right">--}}
                                {{--<li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>--}}
                                {{--<li>--}}
                                    {{--<a href="#" class="icon-info">--}}
                                        {{--<i class="fa fa-bell" aria-hidden="true"></i>--}}
                                        {{--<span class="label label-primary">3</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="dropdown">--}}
                                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="" alt="user">--}}
                                        {{--<b class="caret"></b></a>--}}
                                    {{--<ul class="dropdown-menu">--}}
                                        {{--<li>--}}
                                            {{--<div class="navbar-content">--}}
                                                {{--<span>JS Krishna</span>--}}
                                                {{--<p class="text-muted small">--}}
                                                    {{--me@jskrishna.com--}}
                                                {{--</p>--}}
                                                {{--<div class="divider">--}}
                                                {{--</div>--}}
                                                {{--<a href="#" class="view btn-sm active">View Profile</a>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</header>--}}
            {{--</div>--}}

            @yield('content')

        </div>
    </div>

</div>



<!-- Modal -->
<div id="add_project" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header login-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Add Project</h4>
            </div>
            <div class="modal-body">
                <input type="text" placeholder="Project Title" name="name">
                <input type="text" placeholder="Post of Post" name="mail">
                <input type="text" placeholder="Author" name="passsword">
                <textarea placeholder="Desicrption"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="cancel" data-dismiss="modal">Close</button>
                <button type="button" class="add-project" data-dismiss="modal">Save</button>
            </div>
        </div>

    </div>
</div>


<script>
    $(document).ready(function(){
        $('[data-toggle="offcanvas"]').click(function(){
            $("#navigation").toggleClass("hidden-xs");
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
@yield('scripts')

</body>
</html>
