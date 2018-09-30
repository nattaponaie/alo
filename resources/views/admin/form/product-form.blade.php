<?php
/**
 * Created by PhpStorm.
 * User: FearNothing
 * Date: 3/2/2018
 * Time: 4:29 PM
 */
?>
@if(isset($product))
{!! Form::model($product,['method'=>'put','id'=>'frm']) !!}
@else
    {!! Form::open(['id'=>'frm']) !!}
@endif
<div class="modal-header">
    <h5 class="modal-title">{{isset($product)?'Edit':'New'}} สินค้า</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="form-group row required">
        {!! Form::label("product_name","ชื่อสินค้า",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::text("product_name",null,["class"=>"form-control".($errors->has('product_name')?" is-invalid":""),'placeholder'=>'ชื่อสินค้า','id'=>'focus']) !!}
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label("product_desc","รายละเอียด",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::text("product_desc",null,["class"=>"form-control".($errors->has('product_desc')?" is-invalid":""),'placeholder'=>'รายละเอียด','id'=>'focus']) !!}
            <span id="error-product_desc" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("product_price","ราคา",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::text("product_price",null,["class"=>"form-control".($errors->has('product_price')?" is-invalid":""),'placeholder'=>'ราคา','id'=>'focus']) !!}
            <span id="error-product_price" class="invalid-feedback"></span>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
    {!! Form::submit("Save",["class"=>"btn btn-primary"])!!}
</div>
{!! Form::close() !!}