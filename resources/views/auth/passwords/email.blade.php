@extends('layouts.app')

@section('content')
<div class="form">
  <h2>Reset Password</h2>
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif

  <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <div class="col-md-12">
        <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="E-Mail Address">
        @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-12">
        <button type="submit" >Send Password Reset Link</button>
      </div>
    </div>
  </form>
</div>

@endsection
