@extends('frontend.inc.app')

@section('title', 'Top Video of the Day')

@section('content')
@include('frontend.inc.navbar')

<center><h1 class="music">TOP VIDEO OF THE DAY</h1></center>
<div class="row">
	<div class="col-sm-6 col-sm-offset-2">
		<h4 class="soon"></h4>
	</div>
</div>
<section>

<div class="row">
	<div class="col-sm-6">
		<object class="embed-responsive-item">
     <video autoplay loop >
       <source src="{{asset('user/images/demo.mp4')}}" />
     </video>
   </object>
</div>
<div class="col-sm-6">
	<h3 class="video">Inspirational video by Dreams 2 Lifestyles Clothing. </h3>
</div>
</div>

</section>
 @include ('frontend.inc.footer')
@endsection
