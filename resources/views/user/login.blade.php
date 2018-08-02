@extends('user.inc.app')
@section('title','Login Form')

@section('content')

<div class="signup-form">
    <form action="{{route('user.attempt_login')}}" method="post">
    @csrf
		<h2>Login</h2>
		<p class="hint-text">Below Enter Detail to Login</p>
    @if(session('message'))
      <p class="text-danger text-center">{{ session('message') }}</p>
    @endif
        <div class="form-group">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="E-mail Address" value="{{ old('email') }}">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>



		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
        </div>
    </form>
	<div class="text-center">Have No Account? <a href="#">Register</a></div>
</div>


@endsection
