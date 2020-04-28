@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Login</h4></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="input form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label id="label" for="email" class="col-md-3 control-label">E-Mail Address</label>
                            <div class="col-md-8">                               
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  maxlength="64" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label id="label" for="password" class="col-md-3 control-label">Password</label>
                            <div class="col-md-8">                         
                                <input id="password" type="password" class="form-control" name="password"  maxlength="14" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-7 col-md-offset-4">
                                <div class="checkbox pull-right">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                    <button type="submit" class="btn m-sm m-light-text nav-buy-btn">
                                        Login
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="btmlogin form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <a href="{{ route('register') }}">Register</a> | 
                                <a href="{{ route('password.request') }}">
                                Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
