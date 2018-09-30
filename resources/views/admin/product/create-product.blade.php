<?php
/**
 * User: FearNothing
 * Date: 2/20/2018
 * Time: 3:42 PM
 */
?>
@extends('admin.admin-template')

@section('content')
<div class="container">
        <br  />
        <h2>สร้างสินค้า</h2><br  />
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif


        <form method="post" action="{{ route('create-product') }} ">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">รหัสสินค้า:</label>
                    <input type="text" class="form-control" name="product_id">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">ชื่อสินค้า:</label>
                    <input type="text" class="form-control" name="product_name">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">ราคา:</label>
                    <input type="text" class="form-control" name="product_price">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="price">จำนวนสินค้า (stock):</label>
                    <input type="text" class="form-control" name="product_stock">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">รายละเอียดสินค้า:</label>
                    <input type="text" class="form-control" name="product_desc">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">หมวดหมู่สินค้า:</label>
                    <select name="sub_id">
                        @foreach($sub_categories as $sub_category)
                            <option value="{{$sub_category['sub_id']}}">{{$sub_category['sub_cat_name']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-success">เพิ่ม</button>
                </div>
            </div>
        </form>

    </div>
@stop