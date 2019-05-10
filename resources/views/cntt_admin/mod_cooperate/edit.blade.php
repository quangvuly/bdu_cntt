@extends('cntt_admin/master')
@section('content')

<section class="content-header">
    <h1>
            Đối tác
        <small>Quản lý Đối tác</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang tổng quan</a></li>
        <li class="active">Quản lý Đối tác</li>
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
                        <h3 class="box-title">Cập nhật đối tác</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-xs-12">
                                <div class="form-group">
                                    <label for="Name">Đối tác</label>
                                    <input type="text" class="form-control" name="txtName"
                                        placeholder="Vui lòng nhập tên đối tác"
                                        value="{{ old('txtName',$editCooperate['cnttCooperateName']) }}">
                                </div>
                
                                <div class="form-group">
                                    <label for="Content">Mô tả đối tác</label>
                                    <textarea name="txtContent" rows="5" class="form-control"
                                        placeholder="Nhập nội dung chi tiết mô tả về đối tác">{{ old('txtContent',$editCooperate['cnttCooperateDetail']) }}</textarea>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="chkStatus"
                                            {{  ($editCooperate['cnttCooperateStatus'] == 1)? "checked":" " }}> Công khai đối tác
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="chkFeature" 
                                        {{  ($editCooperate['cnttCooperateFeature'] == 1)? "checked":" " }}> Đối tác nổi bật
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="Cooperate">Ảnh đại diện</label>
                                    <img src="{{ asset('public/upload/imgCooperate/'.$editCooperate['cnttCooperateImage']) }}"
                                        class="img-thumbnail" alt="Cooperate Image Feature" width="270" height="370">
                                    <input type="file" name="imgCooperate">
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