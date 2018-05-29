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
            <div class="panel-heading">Users Management</div>
			<!-- /.panel-heading -->
            <div class="panel-body">
			@if ($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{ $message }}</p>
				</div>
			@endif
                <table width="100%" class="table table-striped table-bordered table-hover table-patients dataTables">
                    <thead>
                        <tr>
							<th>No</th>
							<th>Name</th>
							<th>Email</th>
							<th>Roles</th>
							<th>Action</th>
					    </tr>
                    </thead>
                    <tbody>
					@foreach ($data as $key => $user)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							@if(!empty($user->roles))
								@foreach($user->roles as $v)
									<label class="label label-success">{{ $v->display_name }}</label>
								@endforeach
							@endif
						</td>
						<td>
							<a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
							<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
							{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
							{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
					@endforeach
                        
                    </tbody>
                </table>
                <!-- /.table-responsive -->
				{!! $data->render() !!}
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->





	
@endsection