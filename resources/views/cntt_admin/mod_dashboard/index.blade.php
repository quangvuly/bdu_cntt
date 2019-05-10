@extends('cntt_admin/master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tổng quan
        <small>Thông tin chung</small>
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang tổng quan</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $allTotal[0]['newsTotal'] }}</h3>

              <p> Bài viết </p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{ route('admin.news.list') }}" class="small-box-footer">Chi tiết... <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $allTotal[0]['cateTotal'] }}</h3>

              <p> Danh mục </p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ route('admin.cate.list') }}" class="small-box-footer">Chi tiết... <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $allTotal[0]['userTotal'] }}</h3>
              
              <p> Người dùng </p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('admin.user.list') }}" class="small-box-footer">Chi tiết... <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $allTotal[0]['feedbackTotal'] }}</h3>

              <p> Phản hồi </p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Chi tiết... <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <section class="col-lg-6 connectedSortable ui-sortable">
            <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Bài viết gần đây</h3>

                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên bài viết</th>
                                <th>Tác giả</th>
                                <th>Ngày viết</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recentNews as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item['cnttNewsTitle'] }}</td>
                                <td><span class="label label-success">{{ $item['cnttNewsAuthor'] }}</span></td>
                                <td>{{ $item['created_at'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <a href="{{ route('admin.news.create') }}" class="btn btn-sm btn-info btn-flat pull-left">Thêm mới bài viết</a>
                <a href="{{ route('admin.news.list') }}" class="btn btn-sm btn-default btn-flat pull-right">Tất cả bài viết</a>
            </div>
            <!-- /.box-footer -->
            </div>
        </section>

    </div>
</section>
<!-- /.content -->
@endsection
