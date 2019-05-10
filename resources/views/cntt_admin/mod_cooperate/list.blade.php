@extends('cntt_admin/master')
@section('content')
@section('cssExtend')
<link rel="stylesheet" href="{{ asset('public/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endsection
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
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách Đối tác</h3>
                    </div>
                    <!-- /.box-header -->
                <div class="box-body">
                    <table id="tbLecturer" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên đối tác</th>
                            <th>Nổi bật</th>
                            <th>Hình ảnh</th>
                            <th>Trạng thái</th>
                            <th>Thay đổi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($cooperateList as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item['cnttCooperateName'] }}</td>
                            <td>
                                    @if ($item['cnttCooperateFeature'] == 1)
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    @endif
                                </td>
                                
                            <td><img src="{{ asset('public/upload/imgCooperate/'.$item['cnttCooperateImage']) }}" class="img-thumbnail" alt="Cooperate Image Feature" width="50" height="100"></td>
                            
                            <td>{{ ($item['cnttCooperateStatus'] == 1) ? 'Công khai':'Ẩn' }}</td>
                            <td>
                                <a href="{{ route('admin.cooperate.edit',['id' => $item['id']]) }}">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="{{ route('admin.cooperate.destroy',['id' => $item['id']]) }}">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tên đối tác</th>
                            <th>Nổi bật</th>
                            <th>Hình ảnh</th>
                            <th>Trạng thái</th>
                            <th>Thay đổi</th>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="box-footer">
                            <a href="{{ route('admin.cooperate.create') }}"><button class="btn btn-primary"> + Thêm mới </button></a>
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
      $('#tbLecturer').DataTable()
    })
  </script>

@endsection
