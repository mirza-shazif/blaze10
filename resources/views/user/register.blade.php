@extends('user.inc.master')
@section('title','Registraion Form')

@section('content')

<div class="signup-form">
    <form action="{{route('member.register')}}" method="post">
@csrf
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
        </div>

		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="#">Sign in</a></div>
</div>


@endsection
