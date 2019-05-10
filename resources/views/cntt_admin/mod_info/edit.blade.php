@extends('cntt_admin/master')
@section('content')
<section class="content-header">
    <h1>
        Website
        <small>Thông tin Website</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang tổng quan</a></li>
        <li class="active">Thông tin Website</li>
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
                        <h3 class="box-title">Cập nhật thông tin website</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                
                    <div class="box-body">
                        <div class="form-group">
                            <label for="Title">Tiêu đề Website</label>
                            {{-- <input type="text" class="form-control" name="txtTitle" placeholder="Tiêu đề hiển thị trên tab của trình duyệt web" value="{{ old('txtTitle',$newsEdit['cnttNewsTitle']) }}"> --}}
                            <p>Tiêu đề hiển thị trên tab của trình duyệt web</p>
                            <input type="text" class="form-control" name="txtTitle" placeholder="Tiêu đề hiển thị trên tab của trình duyệt web" value="{{ old('txtTitle',$infoGet['cnttInfoTitle']) }}">
                        </div>
                        
                        

                        <div class="form-group">
                            <label for="Copyright">Copyright</label>
                            <p>Vui lòng nhập nội dung Copyright</p>
                            <input type="text" class="form-control" name="txtCopyright" placeholder="Vui lòng nhập nội dung Copyright" value="{{ old('txtCopyright',$infoGet['cnttInfoCopyright']) }}">
                        </div>


                        
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-xs-12">
                                    <div class="form-group">
                                            <label for="ImageFavicon">Hình Favicon</label>
                                            <p>Tải lên ảnh favicon cho website</p>
                                            <img src="{{ asset('public/upload/imgFavicon/'.$infoGet['cnttInfoFavicon']) }}" class="img-thumbnail" alt="Favicon Image Feature" max-width="300px" >
                                            <input type="file" name="imgFavicon">
                                        </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-12">
                                    <div class="form-group">
                                            <label for="ImageLogo01">Header Logo</label>
                                            <p>Logo hiển thị trên thanh menu</p>
                                            <img src="{{ asset('public/upload/imgLogo/'.$infoGet['cnttInfoLogo01']) }}" class="img-thumbnail" alt="Header logo Image Feature" max-width="300px" >
                                            <input type="file" name="imgLogo01">
                                        </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-12">
                                    <div class="form-group">
                                            <label for="ImageLogo02">Footer Logo</label>
                                            <p>Logo hiển thị ở khu vực footer</p>
                                            <img src="{{ asset('public/upload/imgLogo/'.$infoGet['cnttInfoLogo02']) }}" class="img-thumbnail" alt="Footer logo Image Feature" max-width="300px" >
                                            <input type="file" name="imgLogo02">
                                        </div>
                            </div>
                            
                        </div>
                        <div class="row">
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                        <div class="form-group">
                                                <label for="ImageCover">Hình Cover</label>
                                                <p>Tải ảnh cover trên website</p>
                                                <img src="{{ asset('public/upload/imgCover/'.$infoGet['cnttInfoCoverImage']) }}" class="img-thumbnail" alt="Cover Image Feature" max-height="500px" >
                                                <input type="file" name="imgCover">
                                            </div>
                                </div>
                                    
                        </div>
                    </div>
                    <!-- /.box -->
                </div>

                <div class="box-footer" >
                        <button type="submit" class="btn btn-primary"> Cập nhật thông tin</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
{{-- @section('jsExtend')
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
@endsection --}}