@extends('user.inc.app')


@section('content')

@include('user.inc.header')

         <div class="content-main">
		    <div class="container">
			<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12"><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Discover People</b> <a href="#43" style="float:right;    margin-right: 3%;">See All</a></h5></div>

			  <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                 <div class="follow-div">
                      <img src="http://localhost/insta/assest/images/f5.png" alt="John" class="avatar" >
                           <h1>John Doe</h1>
                                <p class="title">CEO & Founder, Example</p>
                                 <p>Harvard University</p>

                               <p><button type="button" class="btn btn-primary">Primary</button></p>
                  </div>

			  </div>


                <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                 <div class="follow-div">
                      <img src="http://localhost/insta/assest/images/f5.png" alt="John" class="avatar" >
                           <h1>John Doe</h1>
                                <p class="title">CEO & Founder, Example</p>
                                 <p>Harvard University</p>

                               <p><button type="button" class="btn btn-primary">Primary</button></p>
                  </div>

			  </div>



			  <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">

                 <div class="follow-div">

                      <img src="http://localhost/insta/assest/images/f5.png" alt="John" class="avatar" >
                           <h1>John Doe</h1>
                                <p class="title">CEO & Founder, Example</p>
                                 <p>Harvard University</p>

                               <p><button type="button" class="btn btn-primary">Primary</button></p>
                  </div>

			  </div>



            </div><!-------------end-container--------------------->


			<div class="second-container" style="">
			<div class="container">
			<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12"><h5><b>Explore</b></h5></div>

			  <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
			         <div class="content-over">
                             <a href="" target="_blank">
                                 <div class="content-overlay"></div>
                                     <img class="content-image" src="http://localhost/insta/assest/images/f1.jpg">
                                           <div class="content-details fadeIn-bottom">
                                              <h5 class="content-title"><i class="fa fa-heart" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;372&nbsp;&nbsp;&nbsp;<i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;37
</h5>

                                     </div>
                             </a>
                     </div>




			  </div>


                <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
                      <div class="content-over">
                             <a href="" target="_blank">
                                 <div class="content-overlay"></div>
                                     <img class="content-image" src="http://localhost/insta/assest/images/f1.jpg">
                                           <div class="content-details fadeIn-bottom">
                                              <h5 class="content-title"><i class="fa fa-heart" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;372&nbsp;&nbsp;&nbsp;<i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;37
</h5>

                                     </div>
                             </a>
                     </div>


			  </div>



			  <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">

                  <div class="content-over">
                             <a href="" target="_blank">
                                 <div class="content-overlay"></div>
                                     <img class="content-image" src="http://localhost/insta/assest/images/f1.jpg">
                                           <div class="content-details fadeIn-bottom">
                                              <h5 class="content-title"><i class="fa fa-heart" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;372&nbsp;&nbsp;&nbsp;<i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;37
</h5>

                                     </div>
                             </a>
                     </div>


			  </div>



            </div><!-----------------------end-container---------------------------->
			</div>















         </div>

@endsection
@section('scripts')
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
