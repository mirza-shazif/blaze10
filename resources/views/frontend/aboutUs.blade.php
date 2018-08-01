@extends('frontend.inc.app')

@section('title', 'Home')

@section('content')

	@include('frontend.inc.navbar')

<section>
<center><h1 class="music1">ABOUT US</h1></center>
<div class="Showimg">
	<img class="img-responsive" src="{{asset('user/images/about.jpg')}}">
</div>
</section>

<section>
	<center>
		<h3>What is Blaze10?</h3>
		<p class="blaze">Blaze10 is a social media competition and promotion website. The purpose of the site is to see who are the best of the best and whos going to be the next up and coming star in their industry. We've chosen the top categories in regards to following. They include but aren't limited to: Acting, Dance, Film, Modeling, and Sports. Our site will display the Top 20 in regards to numbers of followers in each category. This will allow our members to see who's on the rise. It also creates an opportunity for members to: appreciate, collaborate or hate. It's all about the number of followers.</p>
	</center>
	<div class="row">
		<div class="col-sm-6">
			<img class="Showimg1 img-responsive" src="{{asset('user/images/bbb.jpg')}}">
			<center><h3>The Benefits Of Blaze10.</h3>
			<p class="page1">The more followers our members have the more exposure they receive; until they're "Blaze10". This is reserved for those who have the most followrs in their category. This group receives max exposure. Our team monitors and promotes the Blaze10 in each field. With our network they'll be connected to the "Movers and Shakers" in their particular industry. So our members don't have to worry about being "discovered" by being on our site they'll be exposed to millions of views/likes on a regular basis. They will have opportunities through our site to: be booked for events, scouted by sport recruiters, pick up sponsors etc. If you have talent you'll be seen and contacted by the right people.</p></center>
		</div>
		<div class="col-sm-6">
			<img class="Showimg2 img-responsive" src="{{asset('user/images/aaa.jpg')}}">
			<center><h3>What happens when you reach Blaze10?</h3>
			<p class="page2">Once our members reach "Blaze10" status; this means that they're on their way to "Stardom". The people who reach this level usually have at least 1,000,000 followers, and as we all know that's when the advertisers, companies, and sponsors start coming. We will use this to our members advantage. We're going to take a percentage of the money we receive from advertisers and share it with our members who are on the "Blaze10" level. The percentage given will depend upon the following: 1) Amount of followers 2) Quality and quantity of video footage submitted 3) Time spent on Blaze10. So the longer our members stay on top of their game the better. </p></center>
		</div>
	</div>
</section>


</body>
 @include ('frontend.inc.footer')
</html>
