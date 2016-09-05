@extends('layouts.app')
@section('title')
    Lgoin
@endsection
@section('content')

 <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b></a>

    
    </div><!-- /.login-logo -->
    @if(count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error}}</li>
                @endforeach
              </ul>            
          </div>
    @endif

      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        {{ Form::open(['login'])}}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              {!! Form::label('email', 'Email address') !!}
              {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
              <small class="text-danger">{{ $errors->first('email') }}</small>
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              {!! Form::label('password', 'Password') !!}
              {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
              <small class="text-danger">{{ $errors->first('password') }}</small>
          </div>
         
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="remember"  > Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="{{ url('auth/fb') }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>
        <a href="{{ url('register')}}" class="text-center">Register a new membership</a>

      </div><!-- /.login-box-bo
@endsection
