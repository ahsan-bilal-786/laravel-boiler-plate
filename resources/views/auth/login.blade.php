@extends('layout.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">

                    <form role="form"  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" placeholder="E-mail" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="checkbox">
                                    <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                                <!--a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a-->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
