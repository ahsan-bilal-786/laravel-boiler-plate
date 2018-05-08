@extends('layout.sidebar')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Settings</h4>
    </div>
    <div class="panel-body">

    @if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
    
    {!! Form::open(array('route' => 'updateSettings','method'=>'POST', 'files'=> true)) !!}
    
        @include('settings/partials/basicInfo')
    
    {!! Form::close() !!}

    </div>
</div>

@endsection