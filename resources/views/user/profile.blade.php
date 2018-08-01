@extends('user.inc.app')

@section('styles')

<style>
ul.inner-folo1{
	padding:0;
}
ul.inner-folo1 li{
	    float: left;
    list-style: none;
    padding-right: 6%;
    font-size: 15px;
}
.footer-section{
	padding:3%;
}

.footer-section ul li a{

}
.footer{
	height:100px;
}
</style>
@endsection

@section('content')

@include('user.inc.header')


<div class="content-main1">
	@foreach($user as $user)
<br>
    <div class="container">
        <div class="col-md-2 col-xs-12 col-sm-2 col-lg-2">
		</div><!-- --->

		<div class="col-md-7 col-xs-12 col-sm-7 col-lg-7">
		     <div class="image-text">
			     <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
				     <img src="{{ asset('user/images/f5.png') }}" class="img-responsive" style="width:90%;border-radius:50%;">


				 </div><!-- --->
			     <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
				    <h3>
					<b>{{$user->username}}</b>
					<span>&nbsp;&nbsp;&nbsp;<a href="{{route('user.settings')}}"><button type="button" class="btn btn-default" >Edit Profile
					</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="#45" data-toggle="modal" data-target="#myModal" style="color:black;"><i class="fa fa-cog" aria-hidden="true"></i>
                    </a></span></h3>
					<ul class="inner-folo1">
					      <li>0&nbsp;&nbsp; posts</li>
                            <li><a href="#4" style="color:black;">3&nbsp;&nbsp; followers</a></li>
                              <li>0&nbsp;&nbsp; following</li>

					</ul>
					<br>
					<br>
					<h4>{{$user->name}}</h4>

				 </div><!-- --->

		     </div><!-- --->
	    </div><!-- --->

		<div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">

		</div><!-- --->
	</div>	<!-- --->
		@endforeach
</div><!-- --->





<span>
<br>
<br>
<br>
</span
<div class="second-section">
        <div class="container">
                          <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

						  <!-- Nav tabs -->
      <div class="card1">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active">
		  <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
		  <i class="fa fa-home"></i>  <span>POSTS</span></a></li>
          <li role="presentation">
		  <a  href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
		  <i class="fa fa-user"></i>  <span>IGTV</span></a></li>
          <li role="presentation">
		  <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
		  <i class="fa fa-envelope-o"></i>  <span>SAVED</span></a></li>
          <li role="presentation">
		  <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
		  <i class="fa fa-cog"></i>  <span>TAGGED</span></a></li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">





          <div role="tabpanel" class="tab-pane active" id="home">
		    <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
		         <img src="{{ asset('user/images/tab.jpg') }}" class="img-responsive" style="width:70%;">
		    </div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
			  <span class="page-breaks">
			  <br>
			  <br>
			  <br>
			  <br>
			  </span>
			  <h4 style="text-align:center;"><b>Start capturing and sharing your moments.</b></h4>
			  <p style="text-align:center;"><a href="#4"><img src="{{ asset('user/images/s1.png') }}" style="    width: 32%;"></a>&nbsp;&nbsp;<a href="#5"><img src="{{ asset('user/images/s2.png') }}" style="    width: 32%;"></a></p>

			</div>
		 </div>
          <div role="tabpanel" class="tab-pane" id="profile">
		    <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3"></div>



		    <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">

			<span class="tabs-margin">
			<br>
			<br>
			<br>
			</span>
		    <center>


		        <img src="{{ asset('user/images/p.png') }}" >
				<h3>Start Sharing to IGTV</h3>
				<p>Create your channel to start sharing longer vertical videos with your Instagram audience.</p>
				<button type="button" class="btn btn-primary">Primary</button>
				<br>
			</center>
            </div>
			  <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3"></div>

		  </div>
          <div role="tabpanel" class="tab-pane" id="messages">
		           <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3"></div>



		    <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">

			<span class="tabs-margin">
			<br>
			<br>
			<br>
			</span>
		    <center>


		        <img src="{{ asset('user/images/p.png') }}" >
				<h3>Start Sharing to IGTV</h3>
				<p>Create your channel to start sharing longer vertical videos with your Instagram audience.</p>
				<button type="button" class="btn btn-primary">Primary</button>
				<br>
			</center>
            </div>
			  <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3"></div>



		   </div>
		  <div role="tabpanel" class="tab-pane" id="settings">

		          <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3"></div>



		    <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">

			<span class="tabs-margin">
			<br>
			<br>
			<br>
			</span>
		    <center>


		        <img src="{{ asset('user/images/p.png') }}" >
				<h3>Start Sharing to IGTV</h3>
				<p>Create your channel to start sharing longer vertical videos with your Instagram audience.</p>
				<button type="button" class="btn btn-primary">Primary</button>
				<br>
			</center>
            </div>
			  <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3"></div>



		  </div>
          <div role="tabpanel" class="tab-pane" id="extra">
		                 <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">
		  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
		  been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley o
		  f type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
		  the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
		  release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
		  PageMaker including versions of Lorem Ipsum.
		    </div>
			<div class="col-md-6 col-xs-12 col-sm-6 col-lg-6">2</div>


		  </div>



		</div>





      </div>







						  </div>
        </div>
</div>

<div class="container footer">
<br>
<br>


<ul class="inner-ullinks">
<li><a href="#23">ABOUT US</a></li>
		  	      <li><a href="#23">SUPPORT</a></li>
				  	      <li><a href="#23">PRESS</a></li>
						  	      <li><a href="#23">API</a></li>
								   <li><a href="#23">JOBS</a></li>
										  	      <li><a href="#23">PRIVACY</a></li>
												  	      <li><a href="#23">TERMS</a></li>
														  	      <li><a href="#23">DIRECTORY</a></li>
																  	      <li><a href="#23">PROFILES</a></li>
																		  <li><a href="#23">HASHTAGS</a></li>
																		  <li><a href="#23">LANGUAGE</a></li>
																		  <li><a href="#23" class="last-link"><b>© 2018 INSTAGRAM</b></a></li>
</ul>
</div>




	    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">

         <div class="modal-body">
          <a href="#43"> <p>Change Password</p></a>
          <hr>
            <a href="#43"> <p>Authorized Apps</p></a>
		  <hr>
            <a href="#43"> <p>Notifications</p></a>
          <hr>
            <a href="#43"> <p>Privacy and Security</p></a>
						<hr>
							<a href="#43"> <p>Log Out</p></a>
							<hr>
								<a href="#43"> <p>Cancel</p></a>
        </div>

      </div>

    </div>
  </div>

@endsection


@section('scripts')

		 <script>
           $(window).bind('scroll', function () {
                if ($(window).scrollTop() > 30) {
                    $('.sticky').addClass('fixed');
                      } else {
                     $('.sticky').removeClass('fixed');
                    }
                 });

</script>
@endsection
