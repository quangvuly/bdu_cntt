@extends('cntt_admin/master')
@section('content')
<section class="content-header">
    <h1>
        Đào tạo
        <small>Quản lý Đào tạo</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang tổng quan</a></li>
        <li class="active">Quản lý Đào tạo</li>
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
                        <h3 class="box-title">Cập nhật Đào tạo</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                
                    <div class="box-body">
                        <div class="form-group">
                            <label for="Title">Chuyên ngành</label>
                            <input type="text" class="form-control" name="txtTitle" placeholder="Vui lòng nhập tên chuyên ngành" value="{{ old('txtTitle',$majorEdit['cnttMajorTitle']) }}">
                        </div>

                        <div class="form-group">
                            <label for="Content">Nội dung chuyên ngành</label>
                            <textarea name="txtContent" rows="5" class="form-control" placeholder="Nhập nội dung chi tiết của chuyên ngành" >{{ old('txtContent',$majorEdit['cnttMajorContent']) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="ImageMajor">Hình đại diện</label>
                            <img src="{{ asset('public/upload/imgMajor/'.$majorEdit['cnttMajorImage']) }}" class="img-thumbnail" alt="Major Image Feature" width="100" height="100">
                            <input type="file" name="imgMajor">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="chkStatus" {{  ($majorEdit['cnttMajorStatus'] == 1)? "checked":" " }} > Công khai chuyên ngành
                            </label>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>

                <div class="box-footer" >
                        <button type="submit" class="btn btn-primary"> Cập nhật </button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
@section('jsExtend')
    <script type="text/javascript" src="{{asset('public/assets/bower_components/ckeditor/ckeditor.js')}}"></script>
    <script> 
        CKEDITOR.replace('txtIntro', {
            // filebrowserBrowseUrl : '../../public/assets/bower_components/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', 
            // filebrowserUploadUrl : '../../public/assets/bower_components/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', 
            filebrowserImageBrowseUrl : '../../public/assets/bower_components/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
        }),
        CKEDITOR.replace('txtContent',{
            // filebrowserBrowseUrl : '../public/assets/bower_components/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', 
            // filebrowserUploadUrl : '../public/assets/bower_components/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', 
            filebrowserImageBrowseUrl : '../public/assets/bower_components/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
        })
    </script>
@endsection