@extends('user.inc.app')
@section('title','Confirm Your Account')

@section('content')

<div class="signup-form">
  @if(session('message'))
    @if(session('user_id'))

      @if(session('email') && session('token'))
        <form action="{{ route('user.resend_verification_link') }}" method="post">
          @csrf
          <input type="hidden" name="email" value="{{ session('email') }}" />
          <input type="hidden" name="user_id" value="{{ session('user_id') }}">
          <input type="hidden" name="token" value="{{ session('token') }}">
          <p>A verification link has been sent to your e-mail address.</p>
          <input type="submit" class="btn btn-primary btn-sm" value="Resend Verification Link" />
        </form>
      @else
        <form action="{{ route('user.update_password') }}" method="post">
          @csrf
          <input type="hidden" name="user_id" value="{{ session('user_id') }}" />
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="New Password">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="re_password" placeholder="Retype Password">
          </div>
          <div class="text-right">
            <input type="submit" class="btn btn-primary" value="Save" />
          </div>
        </form>
      @endif
    @else
      <p>{{ session('message') }}</p>
    @endif
  @endif
</div>


@endsection
