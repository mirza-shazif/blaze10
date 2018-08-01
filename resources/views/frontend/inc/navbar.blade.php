

	<!---NavBar-->
 <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
        <a href="home" class="logo navbar-brand"><img src="{{asset('frontend/images/logo.jpg')}}" class="logo1"></a>
    <div class="container-fluid">
        <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

        <div class="collapse navbar-collapse" id="myNavbar">

        <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Categories <span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu">
                <li><a href="{{url('music')}}">Music</a></li>
                <li><a href="{{url('sports')}}">Sports</a></li>
                <li><a href="{{url('acting')}}">Acting</a></li>
                <li><a href="{{url('film')}}">Film</a></li>
                <li><a href="{{url('dance')}}">Dance</a></li>
                <li><a href="{{url('modeling')}}">Modeling</a></li>
                <li><a href="{{url('photography')}}">Photography</a></li>
            </ul>
            </li>
            <li><a href="{{url('joinNow')}}">Join Now</a></li>
            <li><a href="{{url('topVideo')}}">Top Video Of The Day</a></li>
            <li><a href="{{url('aboutUs')}}">About Us</a></li>

             <li><a class="dropdown-toggle" data-toggle="dropdown">More  <span class="fa fa-angle-down"></span></a>
             <ul class="dropdown-menu">
                 <li><a href="{{url('terms')}}">Terms</a> </li>
                  <li><a href="{{url('contactUs')}}">Contact Us</a> </li>
             </ul> </li>

        </ul>
    </div>
 </div>
    </nav>
 	<!---NavBar-->
 	 <!--  <script type="text/javascript">
    	$(window).on('scroll', function() {
    	if($(window).scrollTop()) {
    		$('nav').addClass('black');
            $('.logo1').css('height','70');

		}
		else {
			$('nav').removeClass('black');

             $('nav').css('border','0');
              $('.logo1').css('height','130');
		}
	})
</script> -->
