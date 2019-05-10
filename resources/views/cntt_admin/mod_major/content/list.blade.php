@extends('cntt_admin/master')
@section('cssExtend')
<link rel="stylesheet" href="{{ asset('public/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endsection
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
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách Chuyên ngành</h3>
                    </div>
                    <!-- /.box-header -->
                <div class="box-body">
                    <table id="tbNews" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Chuyên ngành</th>
                            <th>Trạng thái</th>
                            <th>Ngày tạo</th>
                            <th>Thay đổi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($majorList as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item['cnttMajorTitle'] }}</td>
                            <td>{{ ($item['cnttMajorStatus'] == 1) ? 'Công khai':'Ẩn' }}</td>
                            <td>{{ $item['created_at'] }}</td>
                            <td>
                                <a href="{{ route('admin.major.edit',['id' => $item['id']]) }}">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                {{-- <a href="{{ route('admin.major.destroy',['id' => $item['id']]) }}">
                                    <i class="fa fa-trash-o"></i>
                                </a> --}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tiêu đề</th>
                            <th>Trạng thái</th>
                            <th>Ngày tạo</th>
                            <th>Thay đổi</th>
                        </tr>
                        </tfoot>
                    </table>
                    {{-- <div class="box-footer">
                            <a href="{{ route('admin.major.create') }}"><button class="btn btn-primary"> + Thêm mới </button></a>
                    </div> --}}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

@endsection

@section('jsExtend')
<!-- DataTables -->
<script src="{{ asset('public/assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function () {
      $('#tbNews').DataTable()
    })
  </script>
@endsection