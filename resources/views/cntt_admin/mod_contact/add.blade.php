@extends('cntt_admin/master')
@section('content')

<section class="content-header">
    <h1>
        Liên hệ
        <small>Thông tin liên hệ</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang tổng quan</a></li>
        <li class="active">Liên hệ</li>
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
                        <h3 class="box-title">Thay đổi thông tin</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                
                    <div class="box-body">
                        <div class="form-group">
                            <label for="place">Tên cơ sở </label>
                            <input type="text" class="form-control" name="txtBase" placeholder="Vui lòng nhập tên cơ sở" value="{{ old('txtBase') }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ</label>
                            <input type="text" class="form-control" name="txtAddress" placeholder="Vui lòng nhập địa chỉ cơ sở" value="{{ old('txtAddress') }}">
                        </div>
                        <div class="form-group">
                            <label for="city">Địa chỉ Email</label>
                            <input type="text" class="form-control" name="txtCity" placeholder="Vui lòng nhập tỉnh hoặc thành phố" value="{{ old('txtCity') }} ">
                        </div>
                        <div class="form-group">
                            <label for="phone">Điện thoại 1</label>
                            <input type="text" class="form-control" name="txtPhone" placeholder="Vui lòng nhập số điện thoại liên hệ" value="{{ old('txtPhone') }} ">
                        </div>
                        <div class="form-group">
                            <label for="phone">Điện thoại 2</label>
                            <input type="text" class="form-control" name="txtPhone" placeholder="Vui lòng nhập số điện thoại liên hệ" value="{{ old('txtPhone')  }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="txtEmail" placeholder="Vui lòng nhập email liên hệ" value="{{ old('txtEmail')  }}">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" name="txtWebsite" placeholder="Vui lòng nhập địa chỉ website" value="{{ old('txtWebsite',$editUser['cnttUserPhone'])  }}">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="chkStatus" {{  ($editUser['cnttUserStatus'] == 1)? "checked":" " }} > Mở tài khoản người dùng
                            </label>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>

                <div class="form-group">
                    <label for="Avatar">Ảnh đại diện</label>
                    <input type="file" id="Avatar">
                </div>
                <div class="box-footer" >
                        <button type="submit" class="btn btn-primary">Thay đổi</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection