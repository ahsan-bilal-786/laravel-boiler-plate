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

{!! Form::open(array('route' => array('staff.store'),'method'=>'POST', 'files'=> true)) !!}

    @include('staff/partials/basicInfo')

{!! Form::close() !!}


@endsection