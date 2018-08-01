@extends('user.inc.app')


@section('content')

@include('user.inc.header')
         <div class="content-main1">
		    <div class="container">

			  <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">


			  </div>


                <div class="col-md-5 col-xs-12 col-sm-5 col-lg-5">
                    <div class="mesage-innerdiv">
				            <a href="#43">
                              <div class="mesage-chat" style="">
                                  <img src="{{ asset('user/images/f5.png')}}" alt="Avatar" style="width:100%;">
								  <br>
                                    <p style="color:black;">Hello. How are you today?<small>Id</small><button style="float:right;" type="button" class="btn btn-primary">follow</button></p>


									 <hr>
								  </div>


				            </a>
                    </div>


					<div class="mesage-innerdiv">
				            <a href="#43">
                              <div class="mesage-chat" style="">
                                  <img src="{{ asset('user/images/f5.png')}}" alt="Avatar" style="width:100%;">
								  <br>
                                    <p style="color:black;">Hello. How are you today?<small>Id</small><button style="float:right;" type="button" class="btn btn-primary">follow</button></p>

									 <hr>
								  </div>


				            </a>
                    </div>


					<div class="mesage-innerdiv">
				            <a href="#43">
                              <div class="mesage-chat" style="">
                                  <img src="{{ asset('user/images/f5.png')}}" alt="Avatar" style="width:100%;">
								  <br>
                                    <p style="color:black;">Hello. How are you today?<small>Id</small><button style="float:right;" type="button" class="btn btn-primary">follow</button></p>

									 <hr>
								  </div>


				            </a>
                    </div>


			  </div>



			  <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">



			  </div>



            </div>





			<div class="container">

			  <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">


			  </div>


                <div class="col-md-5 col-xs-12 col-sm-5 col-lg-5">




			     </div>

			  <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">



			  </div>



            </div>











			<div class="footer-fv">
		<div class="col-md-4 col-xs-12 col-sm-4 col-lg-4"></div>
		    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">

            <ul>
			<li><a href="#5">About us</a></li>
			<li><a href="#5">Support</a></li>
			<li><a href="#5">Press</a></li>
			<li><a href="#5">API</a></li>
			<li><a href="#5">Jobs</a></li>
			<li><a href="#5">Privacy</a></li>
			<li><a href="#5">Terms</a></li>
			<li><a href="#5">Directory</a></li>
			<li><a href="#5">Profiles</a></li>
			<li><a href="#5">Hashtags</a></li>
			<li><a href="#5">language</a></li>
			</ul>
			</div>

        <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4"></div>
	 </div>






         </div>

@endsection
@section('script')
		 <script>
           $(window).bind('scroll', function () {
                if ($(window).scrollTop() > 50) {
                    $('.sticky').addClass('fixed');
                      } else {
                     $('.sticky').removeClass('fixed');
                    }
                 });

</script>
@endsection
