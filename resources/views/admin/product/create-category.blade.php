@extends('admin.admin-template')
@section('content')
<div class="container">
    <br />
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>หมวด</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category['cat_name']}}
                    <br><br>
                    @foreach($sub_categories as $sub_category)
                        @if ($sub_category['cat_id'] == $category['cat_id'])
                            -- หมวดย่อย:  {{$sub_category['sub_cat_name']}}
                            <button class="btn btn-warning" style="margin-left:2em;" type="submit">แก้ไข</button>
                            <button class="btn btn-danger" type="submit">ลบ</button>
                            <br>
                        @endif
                    @endforeach
                    <br>
                    <form action="{{ route('create-sub-category') }}" method="post">
                        {{csrf_field()}}
                        <input type="text" class="form-control{{ $errors->has('sub_cat_name') ? ' is-invalid' : '' }}" name="sub_cat_name">
                        <input type="hidden" class="form-control" name="cat_id" value="{{$category['cat_id']}}">
                        <input type="hidden" class="form-control" name="cat_sub" value="{{$category['cat_sub']}}">
                        <button class="btn btn-success" type="submit">เพิ่มหมวดสินค้าย่อย</button>

                        @if ($errors->has('sub_cat_name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('sub_cat_name') }}</strong>
                            </span>
                        @endif
                    </form>
                </td>
                <td><a href="{{action('CategoriesController@edit', $category['cat_id'])}}" class="btn btn-warning">แก้ไข</a></td>
                <td>
                    <form action="" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">ลบ</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <form method="post" action="{{ route('create-category') }}">
        {{csrf_field()}}
        <div class="row">
            <div class="form-group col-md-4">
                <label for="name">ชื่อหมวดสินค้า:</label>
                <input type="text" class="form-control{{ $errors->has('cat_name') ? ' is-invalid' : '' }}" name="cat_name">

                @if ($errors->has('cat_name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('cat_name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success">เพิ่ม</button>
            </div>
        </div>
    </form>


</div>
@stop