@extends('cntt_admin/master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Liên hệ
        <small>Cập nhật thông tin liên hệ</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang tổng quan</a></li>
        <li class="active">Liên hệ</li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <form role="form" method="POST">
            {{ csrf_field() }}
            <!-- textarea -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thay đổi danh mục</h3>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="base">Tên cơ sở</label>
                            <input type="text" class="form-control" name="txtContactBase" placeholder="Vui lòng nhập tên cơ sở" value="{{ old('txtContactBase',$editContact['cnttContactBase']) }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ</label>
                            <input type="text" class="form-control" name="txtContactAddress" placeholder="Vui lòng nhập địa chỉ" value="{{ old('txtContactAddress',$editContact['cnttContactAddress']) }}">
                        </div>
                        <div class="form-group">
                            <label for="city">Tên cơ sở</label>
                            <input type="text" class="form-control" name="txtContactCity" placeholder="Vui lòng nhập tỉnh hoặc thành phố" value="{{ old('txtContactCity',$editContact['cnttContactCity']) }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại (1)</label>
                            <input type="text" class="form-control" name="txtContactPhoneNo1" placeholder="Vui lòng nhập số điện thoại thứ nhất" value="{{ old('txtContactPhoneNo1',$editContact['cnttContactPhoneNo1']) }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại (2)</label>
                            <input type="text" class="form-control" name="txtContactPhoneNo2" placeholder="Nếu không có vui lòng để trống" value="{{ old('txtContactPhoneNo2',$editContact['cnttContactPhoneNo2']) }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="txtContactEmail" placeholder="Vui lòng nhập email liên hệ" value="{{ old('txtContactEmail',$editContact['cnttContactEmail']) }}">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" name="txtContactWebsite" placeholder="Vui lòng nhập thông tin website" value="{{ old('txtContactWebsite',$editContact['cnttContactWebsite']) }}">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="chkStatus" {{  ($editContact['cnttContactStatus'] == 1)? "checked":" " }} > Thông tin công khai
                            </label>
                        </div>
                    </div>
                </div>
                <div class="box-footer" >
                        <button type="submit" class="btn btn-primary">Thay đổi</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->


@endsection

@section('jsExtend')
    <script type="text/javascript" src="{{asset('public/assets/bower_components/ckeditor/ckeditor.js')}}"></script>
    <script> 
        CKEDITOR.replace('txtContact')
    </script>
@endsection