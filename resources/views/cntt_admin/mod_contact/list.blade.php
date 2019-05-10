@extends('cntt_admin/master')
@section('content')

<section class="content-header">
    <h1>
        Liên hệ
        <small>Thông tin liên hệ</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Trang tổng quan</a></li>
        <li class="active">Liên hệ</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách thông tin liên hệ</h3>
                    </div>
                    <!-- /.box-header -->
                <div class="box-body">
                    <table id="tbUser" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên cơ sở</th>
                            <th>Địa chỉ</th>
                            <th>Trạng thái</th>
                            <th>Thay đổi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($listContact as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item['cnttContactBase'] }}</td>
                            <td>{{ $item['cnttContactAddress'].' '.$item['cnttContactAddress'] }}</td>
                            <td>{{ ($item['cnttContactStatus'] == 1) ? 'Sẵn sàng':'Vô hiệu' }}</td>
                            <td>
                                <a href="{{ route('admin.contact.edit',['id' => $item['id']]) }}">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                {{-- <a href="{{ route('admin.list.destroy',['id' => $item['id']]) }}">
                                    <i class="fa fa-trash-o"></i>
                                </a> --}} 
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tên cơ sở</th>
                            <th>Địa chỉ</th>
                            <th>Trạng thái</th>
                            <th>Thay đổi</th>
                        </tr>
                        </tfoot>
                    </table>
                    {{-- <div class="box-footer">
                            <a href="{{ route('admin.cate.create') }}"><button class="btn btn-primary"> + Thêm mới </button></a>
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
<!-- /.content -->
@endsection

@section('jsExtend')

<script src="{{ asset('public/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('public/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('public/assets/bower_components/fastclick/lib/fastclick.js') }}"></script>
<script src="{{ asset('public/assets/dist/js/demo.js') }}"></script>

<script>
    $(function () {
        $('#tbUser').DataTable()
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
        })
    })
</script>

@endsection
