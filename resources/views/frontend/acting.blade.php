@extends('frontend.inc.app')

@section('title', 'Acting')

@section('content')

@include('frontend.inc.navbar')
<center><h1 class="music">MEMBERS-ONLY ACCESS</h1>
	<p class="p1">If you've been granted access to members-only pages on this site, you can enter your email <br/>address below and we will send you a link to sign in.</p>

</center>
	<div class="row mb-10">
			<div class="col-sm-5 col-sm-offset-3">
				<form role="form">
				 <div class="form-group float-label-control">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control">
                    </div>
                </form>
			</div>
			<div class="col-sm-2">
			<button class="button1">GET LINK</button>
		</div>
	</div>


 @include('frontend.inc.footer')
@endsection
