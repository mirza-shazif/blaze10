@extends('user.inc.app')


@section('content')

@include('user.inc.header')

         <div class="content-main">
  @foreach($user as $user)
<div class="container">

<div class="inner-tabs">
<ul class="nav nav-pills nav-stacked col-md-3">
  <li class="active"><a href="#tab_a" data-toggle="pill">Edit Profile</a></li>
  <li><a href="#tab_b" data-toggle="pill">Change Password</a></li>
  <li><a href="#tab_c" data-toggle="pill">Authorized Applications</a></li>
  <li><a href="#tab_d" data-toggle="pill">Email and SMS</a></li>
</ul>
<div class="tab-content col-md-9">
        <div class="tab-pane active" id="tab_a">
                 <!------------------------------------------>
				 <div class="mesage-chat" style="">
				 <img src="{{ asset('user/images/f5.png') }}" class="Avatar">
                                 <p style="color:black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

								{{$user->username}}<br><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#45">Edit Profile Photo</a></small>

								 </p>

			     </div>


				 <!-------------------------------------------->

			<form class="form-horizontal" >
  <div class="form-group">
    @csrf

      <label class="control-label col-sm-3" for="email">Name</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email"  name="name" value="{{$user->name}}">
      </div>
    </div>
   <div class="form-group">
      <label class="control-label col-sm-3" for="email">User Name</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email"  name="name" value="{{$user->username}}">
      </div>
    </div>
   <div class="form-group">
      <label class="control-label col-sm-3" for="email">Website</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email"  name="name">
      </div>
    </div>

	 <div class="form-group">
      <label class="control-label col-sm-3" for="email">Bio</label>
      <div class="col-sm-9">
       <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
	   <br>
	   <p>Private Information</p>
      </div>

    </div>

	<div class="form-group">
      <label class="control-label col-sm-3" for="email">Email:</label>
      <div class="col-sm-9">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$user->email}}">
      </div>
    </div>

  <div class="form-group">
      <label class="control-label col-sm-3" for="email">Phone Number</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="email"  name="name">
      </div>
    </div>
  <div class="form-group">
     <label class="control-label col-sm-3" for="email">Gender</label>
	 <div class="col-sm-9">
    <select class="form-control" id="exampleSelect1">
    <option value="male" {{ ($user->gender == "male") ? 'selected' : '' }}>Male</option>
    <option value="female" {{ ($user->gender == "female") ? 'selected' : '' }}>Female</option>
    <option value="other" {{ ($user->gender == "other") ? 'selected' : '' }}>Other</option>

    </select>
	</div>
  </div>




  <div class="form-group">
      <div class="col-sm-offset-3 col-sm-9">
        <div class="checkbox checked">
          <label><input type="checkbox" name="remember"> Include your account when recommending similar accounts people might want to follow.[?]</label>
        </div>
		<br>
		<button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

</form>





        </div>
        <div class="tab-pane" id="tab_b">
            <!------------------------------------------>
				 <div class="mesage-chat" style="">
				 <img src="{{ asset('user/images/f5.png') }}" class="Avatar" />
         <h4 style="color:black;"><p>@username_here</p></h4>

			     </div>


				 <!-------------------------------------------->
				 	<form class="form-horizontal" >

				 <div class="form-group">
                      <label class="control-label col-sm-3" for="email">Old Password</label>
                         <div class="col-sm-9">
                             <input type="Password" class="form-control" id="email"  name="name">
                         </div>
                 </div>

				 <div class="form-group">
                      <label class="control-label col-sm-3" for="email">New Password</label>
                         <div class="col-sm-9">
                             <input type="Password" class="form-control" id="email"  name="name">
                         </div>
                 </div>

				 <div class="form-group">
                      <label class="control-label col-sm-3" for="email">Confirm Password</label>
                         <div class="col-sm-9">
                             <input type="Password" class="form-control" id="email"  name="name">
							 <br>
						  <button type="button" class="btn btn-primary" disabled>Primary</button>
                         </div>

                 </div>
				    </form>



        </div><!------  ------->
        <div class="tab-pane" id="tab_c">
             <h4>Pane C</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
        </div><!------  ------->
        <div class="tab-pane" id="tab_d">
             <h4>Pane D</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
        </div><!------  ------->
</div><!-- tab content -->
</div>

</div><!-- end of container -->
@endforeach
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
<br>
<br>
</div>




         </div>
@endsection
@section('scripts')
		 <script>
           $(window).bind('scroll', function () {
                if ($(window).scrollTop() > 0) {
                    $('.sticky').addClass('fixed');
                      } else {
                     $('.sticky').removeClass('fixed');
                    }
                 });

</script>
@endsection
