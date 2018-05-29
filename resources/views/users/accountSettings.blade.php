@extends('layout.sidebar')

@section('content')

{!! Form::model($user, ['method' => 'PUT','route' => ['staffUpdateAccountSettings', $user->id], 'files'=> true]) !!}
    @include('staff/partials/basicInfo')
{!! Form::close() !!}

@endsection