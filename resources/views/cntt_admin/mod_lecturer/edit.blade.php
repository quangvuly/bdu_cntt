@extends('cntt_admin/master')
@section('content')

<section class="content-header">
    <h1>
        Giảng viên
        <small>Khu vực giảng viên</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang tổng quan</a></li>
        <li class="active">Giảng viên</li>
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
                        <h3 class="box-title">Cập nhật giảng viên</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-xs-12">
                                <div class="form-group">
                                    <label for="FullName">Họ & Tên</label>
                                    <input type="text" class="form-control" name="txtFullName"
                                        placeholder="Vui lòng nhập họ và tên giảng viên"
                                        value="{{ old('txtFullName',$editLecturer['cnttLecturerFullName']) }}">
                                </div>
                                <div class="form-group">
                                    <label for="Position">Chức vụ</label>
                                    <input type="text" class="form-control" name="txtPosition"
                                        placeholder="Vui lòng nhập chức vụ"
                                        value="{{ old('txtPosition',$editLecturer['cnttLecturerPosition']) }}">
                                </div>



                                <div class="form-group">
                                    <label for="Content">Sơ lược giảng viên</label>
                                    <textarea name="txtContent" rows="5" class="form-control"
                                        placeholder="Nhập nội dung sơ lược">{{ old('txtContent',$editLecturer['cnttLecturerDetail']) }}</textarea>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="chkStatus"
                                            {{  ($editLecturer['cnttLecturerStatus'] == 1)? "checked":" " }}> Giảng viên
                                        công khai
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="Lecturer">Ảnh đại diện</label>
                                    <img src="{{ asset('public/upload/imgLecturer/'.$editLecturer['cnttLecturerImage']) }}"
                                        class="img-thumbnail" alt="Lecturer Image Feature" width="270" height="370">
                                    <input type="file" name="imgLecturer">
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

@section('jsExtend')
<script type="text/javascript" src="{{asset('public/assets/bower_components/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('txtContent',{
            // filebrowserBrowseUrl : '../public/assets/bower_components/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', 
            // filebrowserUploadUrl : '../public/assets/bower_components/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', 
            filebrowserImageBrowseUrl : '../public/assets/bower_components/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
        })
</script>
@endsection