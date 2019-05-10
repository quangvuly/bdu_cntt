@extends('cntt_admin/master')
@section('content')

<section class="content-header">
    <h1>
        Mạng xã hội
        <small>Quản lý Mạng xã hội</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang tổng quan</a></li>
        <li class="active">Quản lý Mạng xã hội</li>
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
                        <h3 class="box-title">Thay đổi Mạng xã hội</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                
                    <div class="box-body">
                        <div class="form-group">
                            <label for="Title">Tên mạng xã hội</label>
                            <input type="text" class="form-control" name="txtCommTitle" placeholder="Vui lòng nhập tên mạng xã hội" value="{{ old('txtCommTitle',$commEdit['cnttCommTitle']) }}">
                        </div>
                        <div class="form-group">
                            <label for="Icon">Icon</label>
                            <p>Danh sách <a href="https://fontawesome.com/v4.7.0/icons/"> icon </a>. Ví dụ: "fa fa-facebook"</p>
                            <input type="text" class="form-control" name="txtCommIcon" placeholder="Sử dụng font-awesome để làm icon" value="{{ old('txtCommIcon',$commEdit['cnttCommIcon']) }}">
                        </div>
                        <div class="form-group">
                            <label for="Link">Địa chỉ URL</label>
                            <input type="text" class="form-control" name="txtCommLink" placeholder="Vui lòng nhập URL cho mạng liên kết" value="{{ old('txtCommLink',$commEdit['cnttCommLink']) }}">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" checked="checked" name="chkStatus"> Công khai mạng xã hội
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
