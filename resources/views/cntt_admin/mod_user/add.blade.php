@extends('cntt_admin/master') 
@section('content')

<section class="content-header">
    <h1>
        Người dùng
        <small>Quản lý người dùng</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang tổng quan</a></li>
        <li class="active">Quản lý người dùng</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <form role="form" action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm mới người dùng</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-xs-12">
                                <div class="form-group">
                                    <label for="FirstName">Họ & Chữ lót</label>
                                    <input type="text" class="form-control" name="txtFirstName" placeholder="Vui lòng nhập họ và chữ lót người dùng" value="{{ old('txtFirstName') }}">
                                </div>
                                <div class="form-group">
                                    <label for="LastName">Tên</label>
                                    <input type="text" class="form-control" name="txtLastName" placeholder="Vui lòng nhập tên người dùng" value="{{ old('txtLastName') }}">
                                </div>
                                <div class="form-group">
                                    <label for="EmailAddress">Địa chỉ Email</label>
                                    <input type="email" class="form-control" name="txtEmail" placeholder="Vui lòng nhập Email" value="{{ old('txtEmail') }}">
                                </div>
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="password" class="form-control" name="txtPassword" placeholder="Vui lòng nhập Password">
                                </div>
                                <div class="form-group">
                                    <label for="PhoneNumber">Điện thoại</label>
                                    <input type="text" class="form-control" name="txtPhoneNumber" placeholder="Vui lòng nhập số điện thoại" value="{{ old('txtPhoneNumber') }}">
                                </div>

                                <div class="checkbox">
                                    <label>
                                <input type="checkbox" name="checkPermission" {{(Auth::user()->cnttUserLevel == 1)? "disabled":""}}> Đăng ký người dùng với tư cách là Quản trị viên
                            </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox" name="chkStatus" checked="checked"}} > Mở tài khoản người dùng
                            </label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="Avatar">Ảnh đại diện</label>
                                    <input type="file" name="imgUser">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>


                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection