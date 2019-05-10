@extends('cntt_admin/master')
@section('content')
<section class="content-header">
    <h1>
        Slide
        <small>Quản lý Slides</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang tổng quan</a></li>
        <li class="active">Quản lý slide</li>
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
                        <h3 class="box-title">Cập nhật Slides</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                
                    <div class="box-body">
                        <div class="form-group">
                            <label for="Title">Tiêu đề Slide</label>
                            <input type="text" class="form-control" name="txtTitle" placeholder="Vui lòng nhập tiêu đề Slide" value="{{ old('txtTitle',$sliderEdit['cnttSliderTitle']) }}">
                        </div>
                    
                        <div class="form-group">
                            <label for="Intro">Tóm tắt nội dung</label>
                            <textarea name="txtIntro" rows="5" class="form-control" placeholder="Tóm tắt nội dung hiển thị" >{{ old('txtIntro',$sliderEdit['cnttSliderIntro']) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="Content">Nội dung chi tiết</label>
                            <textarea name="txtContent" rows="5" class="form-control" placeholder="Nhập nội dung chi tiết" >{{ old('txtContent',$sliderEdit['cnttSliderDetail']) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="ImageNews">Slide ảnh</label>
                            <img src="{{ asset('public/upload/imgSlide/'.$sliderEdit['cnttSliderImage']) }}" class="img-thumbnail" alt="Slide Image Feature" width="300" height="300">
                            <input type="file" name="imgSlider">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="chkStatus" {{  ($sliderEdit['cnttSliderStatus'] == 1)? "checked":" " }} > Slide công khai
                            </label>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>

                <div class="box-footer" >
                        <button type="submit" class="btn btn-primary"> Cập nhật Slide</button>
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