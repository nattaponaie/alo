@extends('admin.admin-template')
@section('content')

    {{--<nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
        {{--<a class="navbar-brand" href="#">รูปภาพ</a>--}}
        {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
            {{--<span class="navbar-toggler-icon"></span>--}}
        {{--</button>--}}

        {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
            {{--<ul class="navbar-nav mr-auto">--}}
                {{--<li class="nav-item active">--}}
                    {{--<a class="nav-link" href="view-images">รูปภาพในระบบ <span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="upload-image">อัพโหลดรูปใหม่</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</nav>--}}

    @include('admin.modal-layout.image-modal')

    {{--<div class="container-fluid">--}}
        {{--@yield('content2')--}}
    {{--</div>--}}
    <div id="content">
        @include('admin.product.view-product-image')
    </div>

@endsection
@section('scripts')
    {{--<script src="{{ url('/js/jquery.js') }}"></script>--}}
    <script src="{{ url('/js/ajax-crud-modal-form.js') }}"></script>
    <script src="{{url('/js/jquery.js')}}"></script>
    <script src="{{url('/js/dropzone.js')}}"></script>
    <script src="{{url('/js/dropzone-config.js')}}"></script>
    <script src="{{url('/js/utils/HTMLEntity.js')}}"></script>
@endsection
@section('stylesheet')
    <link rel="stylesheet" href="{{url('/css/dropzone.css') }}">
    <link rel="stylesheet" href="{{url('/css/custom.css') }}">
@endsection