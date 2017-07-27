@extends('layouts.app')

@section('content')
  <div class="form">
    <h2>Login to your account</h2>
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="col-md-12">
          <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email Address">
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
        </div>
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="col-md-12">
          <input id="password" type="password" name="password" required placeholder="Password">
            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-12">
          <button type="submit">Login</button>
        </div>
      </div>
    </form>
  </div>

  <div class="form">
    <h2>Create an account</h2>
    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="col-md-12">
          <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">
          @if ($errors->has('name'))
            <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="col-md-12">
          <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail Address">
          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="col-md-12">
          <input id="password" type="password" name="password" required autofocus placeholder="Password">
          @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-12">
          <input id="password-confirm" type="password" name="password_confirmation" required placeholder="Confirm Password">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-12" >
          <button type="submit" >Register</button>
        </div>
      </div>
    </form>
  </div>

@endsection
