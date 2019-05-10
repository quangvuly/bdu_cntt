@extends('cntt_admin/master')
@section('content')
@section('cssExtend')
<link rel="stylesheet" href="{{ asset('public/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endsection
<section class="content-header">
    <h1>
        Người dùng
        <small>Quản lý người dùng</small>
    </h1>
    <ol class="breadcrumb">
            <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang tổng quan</a></li>
            <li class="active">Quản lý người dùng</li>
    </ol>
</section>
    
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách user</h3>
                    </div>
                    <!-- /.box-header -->
                <div class="box-body">
                    <table id="tbUser" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Họ</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Chức vụ</th>
                            <th>Trạng thái</th>
                            <th>Thay đổi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($listUser as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item['cnttUserFirstName'] }}</td>
                            <td>{{ $item['cnttUserLastName'] }}</td>
                            <td>{{ $item['email'] }}</td>
                            <td>{{ ($item['cnttUserLevel'] == 1 || $item['cnttUserLevel'] == 0) ? 'Quản trị viên':'Thành Viên' }}</td>
                            <td>{{ ($item['cnttUserStatus'] == 1) ? 'Sẵn sàng':'Vô hiệu' }}</td>
                            <td>
                                <a href="{{ route('admin.user.edit',['id' => $item['id']]) }}">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="{{ route('admin.user.destroy',['id' => $item['id']]) }}">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Họ</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Chức vụ</th>
                            <th>Trạng thái</th>
                            <th>Thay đổi</th>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="box-footer">
                            <a href="{{ route('admin.user.create') }}"><button class="btn btn-primary"> + Thêm mới </button></a>
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
@endsection

@section('jsExtend')

<!-- DataTables -->
<script src="{{ asset('public/assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function () {
      $('#tbUser').DataTable()
    })
  </script>

@endsection
