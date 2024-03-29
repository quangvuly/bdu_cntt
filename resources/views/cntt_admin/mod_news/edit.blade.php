@extends('cntt_admin/master')
@section('content')
<section class="content-header">
    <h1>
        Bài viết
        <small>Quản lý bài viết</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang tổng quan</a></li>
        <li class="active">Quản lý bài viết</li>
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
                        <h3 class="box-title">Cập nhật bài viết</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                
                    <div class="box-body">
                        <div class="form-group">
                            <label for="Title">Tiêu đề bài viết</label>
                            <input type="text" class="form-control" name="txtTitle" placeholder="Vui lòng nhập tiêu đề bài viết" value="{{ old('txtTitle',$newsEdit['cnttNewsTitle']) }}">
                        </div>
                        <div class="form-group">
                            <label for="Category">Danh mục</label>
                            <select name="sltCate" class="form-control">
                                <option value="0">Chọn danh mục</option>
                                @foreach ($newsCate as $item)
                                    <option value="{{ $item['id'] }}" {{ ( $item['id']==$newsEdit['cnttNewsCateID'] ) ? "selected":"" }}>{{ $item['cnttCateName'] }}</option>
                                   
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Author">Tác giả</label>
                            {{-- <input type="text" class="form-control" name="txtAuthor" disabled="disabled" value="{{ $newsEdit['user']['cnttUserFirstName'].' '.$newsEdit['user']['cnttUserLastName'] }}">  --}}
                            
                            @if (Auth::user()->cnttUserLevel == 2)
                                <select name="sltAuthor" class="form-control" disabled }}>
                                    @foreach ($newsUserList as $item)
                                        <option value="{{ $item['id'] }}" {{ ( $item['id']==$newsEdit['cnttNewsUserID'] ) ? "selected":"" }}>{{ $item['cnttUserFirstName'].' '.$item['cnttUserLastName'] }}</option>
                                       
                                    @endforeach
                                </select>
                                <input type="hidden" name="sltAuthor" value={{Auth::user()->id}} />
                            @else
                                <select name="sltAuthor" class="form-control" }}>
                                
                                    @foreach ($newsUserList as $item)
                                        <option value="{{ $item['id'] }}" {{ ( $item['id']==$newsEdit['cnttNewsUserID'] ) ? "selected":"" }}>{{ $item['cnttUserFirstName'].' '.$item['cnttUserLastName'] }}</option>
                                       
                                    @endforeach
                                </select>
                            @endif
                            
                        </div>
                        <div class="form-group">
                            <label for="Intro">Tóm tắt nội dung</label>
                            <textarea name="txtIntro" rows="5" class="form-control" placeholder="Tóm tắt nội dung hiển thị" >{{ old('txtIntro',$newsEdit['cnttNewsDesc']) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="Content">Nội dung chi tiết</label>
                            <textarea name="txtContent" rows="5" class="form-control" placeholder="Nhập nội dung chi tiết" >{{ old('txtContent',$newsEdit['cnttNewsDetail']) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="ImageNews">Hình đại diện</label>
                            <img src="{{ asset('public/upload/imgNewsFeature/'.$newsEdit['cnttNewsImage']) }}" class="img-thumbnail" alt="News Image Feature" width="300" height="300">
                            <input type="file" name="imgNews">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="chkStatus" {{  ($newsEdit['cnttNewsStatus'] == 1)? "checked":" " }} > Công khai bài viết
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="chkFeature" {{  ($newsEdit['cnttNewsFeature'] == 1)? "checked":" " }} > Bài viết ưu tiên hiển thị
                            </label>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>

                <div class="box-footer" >
                        <button type="submit" class="btn btn-primary"> Cập nhật bài viết</button>
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