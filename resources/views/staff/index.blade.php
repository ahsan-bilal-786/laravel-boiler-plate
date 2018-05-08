@extends('layout.sidebar')

@section('js_files')
<script src="{{ asset('sbadmin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('sbadmin/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('sbadmin/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>
@endsection

@section('css_files')
<link href="{{ asset('sbadmin/vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('sbadmin/vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ $role->display_name }} Staff
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover table-patients dataTables">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact No</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="gradeX" data-route="{{ route('staffEdit', array('role_type' => $role->name, 'id' => $user->id)) }}">
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->contact_no }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                <a href="javascript:void(0);" data-route="{{ route('staffDelete', array('role_type' => $role->name, 'id' => $user->id)) }}" class="deleteRecord btn btn-danger btn-circle" >
                                <i class="fa fa-close bs-tooltip" title="Delete"></i> </a>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection