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
                        <h3 class="box-title">Thay đổi thông tin</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-xs-12">
                                <div class="form-group">
                                    <label for="FirstName">Họ & Chữ lót</label>
                                    <input type="text" class="form-control" name="txtFirstName" placeholder="Vui lòng nhập họ và chữ lót người dùng" value="{{ old('txtFirstName',$editUser['cnttUserFirstName']) }}">
                                </div>
                                <div class="form-group">
                                    <label for="LastName">Tên</label>
                                    <input type="text" class="form-control" name="txtLastName" placeholder="Vui lòng nhập tên người dùng" value="{{ old('txtLastName',$editUser['cnttUserLastName']) }}">
                                </div>
                                <div class="form-group">
                                    <label for="EmailAddress">Địa chỉ Email</label>
                                    <input type="email" class="form-control" name="txtEmail" disabled="disabled" value="{{ $editUser['email'] }} ">
                                </div>
                                <div class="form-group">
                                    <label for="Password">Mật khẩu</label>
                                    <input type="password" class="form-control" name="txtPassword" placeholder="Nhập mật khẩu mới hoặc để trống">
                                </div>
                                <div class="form-group">
                                    <label for="PhoneNumber">Điện thoại</label>
                                    <input type="text" class="form-control" name="txtPhoneNumber" placeholder="Vui lòng nhập số điện thoại" value="{{ old('txtPhoneNumber',$editUser['cnttUserPhone'])  }}">
                                </div>

                                <div class="checkbox">
                                    <label>
                                                    <input type="checkbox" {{(Auth::user()->cnttUserLevel == 1)? "":"disabled"}} name="checkPermission" value="1"> Đăng ký người dùng với tư cách là Quản trị viên
                                                </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                                    <input type="checkbox" name="chkStatus" {{  ($editUser['cnttUserStatus'] == 1)? "checked":" " }} > Mở tài khoản người dùng
                                                </label>
                                </div>

                            </div>

                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="Avatar">Ảnh đại diện</label>
                                    <img src="{{ asset('public/upload/imgUserAvatar/'.$editUser['cnttUserImage']) }}" class="img-thumbnail" alt="User Image Avatar" width="270" height="370">
                                    <input type="file" name="imgUser">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Thay đổi</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection