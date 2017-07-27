@extends('layouts.app')

@section('content')
<div class="form">
  <h2>Reset Password</h2>

  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif

  <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
    {{ csrf_field() }}

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <div class="col-md-12">
        <input id="email" type="email" name="email" value="{{ $email or old('email') }}" required autofocus placeholder="E-Mail Address">
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

    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
      <div class="col-md-12">
        <input id="password-confirm" type="password" name="password_confirmation" required placeholder="Confirm Password">
        @if ($errors->has('password_confirmation'))
          <span class="help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
          </span>
        @endif
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-12">
        <button type="submit" >Reset Password</button>
      </div>
    </div>
  </form>
</div>




@endsection
