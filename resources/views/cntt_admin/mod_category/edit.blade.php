@extends('cntt_admin/master')
@section('content')

<section class="content-header">
    <h1>
        Danh mục
        <small>Quản lý danh mục</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang tổng quan</a></li>
        <li class="active">Quản lý danh mục</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <form role="form" action="" method="POST">
            {{ csrf_field() }}
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thay đổi danh mục</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                
                    <div class="box-body">
                        <div class="form-group">
                            <label for="Cate">Tên danh mục</label>
                            <input type="text" class="form-control" name="txtCateName" placeholder="Vui lòng nhập tên danh mục" value="{{ old('txtCateName',$cateEdit['cnttCateName']) }}">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="chkStatus" {{  ($cateEdit['cnttCateStatus'] == 1)? "checked":" " }} > Danh mục công khai
                            </label>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <div class="box-footer" >
                        <button type="submit" class="btn btn-primary">Thay đổi</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
