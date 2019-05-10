@extends('cntt_admin/master')
@section('content')
@section('cssExtend')
<link rel="stylesheet" href="{{ asset('public/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endsection
<section class="content-header">
    <h1>
        Danh mục
        <small>Quản lý danh mục</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang tổng quan</a></li>
        <li class="active">Quản lý danh mục</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách danh mục</h3>
                    </div>
                    <!-- /.box-header -->
                <div class="box-body">
                    <table id="tbCate" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Người tạo</th>
                            <th>Trạng thái</th>
                            <th>Thay đổi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($listCate as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item['cnttCateName'] }}</td>
                            <td>{{ $item['user']['cnttUserFirstName'].' '.$item['user']['cnttUserLastName'] }}</td>
                            <td>{{ ($item['cnttCateStatus'] == 1) ? 'Sẵn sàng':'Vô hiệu' }}</td>
                            <td>
                                <a href="{{ route('admin.cate.edit',['id' => $item['id']]) }}">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="{{ route('admin.cate.destroy',['id' => $item['id']]) }}">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Người tạo</th>
                            <th>Trạng thái</th>
                            <th>Thay đổi</th>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="box-footer">
                            <a href="{{ route('admin.cate.create') }}"><button class="btn btn-primary"> + Thêm mới </button></a>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection

@section('jsExtend')

<!-- DataTables -->
<script src="{{ asset('public/assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function () {
      $('#tbCate').DataTable()
    })
  </script>

@endsection
