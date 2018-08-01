@extends('user.inc.app')


@section('content')

@include('user.inc.header')

         <div class="content-main">
		    <div class="container">
        <div class="col-md-8 col-xs-12 col-sm-8 col-lg-8">
          @foreach($challenge as $challenge)
				       <div class="card">

					              <h5><img src="{{ asset('user/images/f5.png') }}" alt="Avatar" class="avatar">&nbsp;&nbsp;&nbsp;yasir7821• <a href="">Follow</a></h5>


                           <img src="{{ asset('storage/'.$challenge->img) }}" alt="Jane" style="width:100%" class="img-responsive">
                                 <div class="inner-paddingd">
								        <img src="{{ asset('user/images/f2.png') }}" alt="Avatar" class="avatar">
								         <img src="{{ asset('user/images/f6.png') }}" alt="Avatar" class="avatar">
								          <img class="third-img" src="{{ asset('user/images/f7.png') }}" alt="Avatar" class="avatar">
								            <h5>&nbsp;&nbsp;<a href="#">50 likes</a></h5>
								             <h6>&nbsp;&nbsp;<a href="#" style="    color: #999;">5 DAYS AGO</a></h6>

								  <hr>

                                                <form>
                                                    <div class="form-group">
                                                     <input type="text" placeholder="add a comment" class="form-control" id="pwd" style="-webkit-box-shadow:none;border:none;width:90%;">
                                                    </div>
												</form>



                                       	                <span class="inner-span"><a href="#23" data-toggle="modal" data-target="#myModal">......</a></span>


                                 </div>
								     <!-- -->
                        </div>
						   <!-- -->

@endforeach
				 </div>
				      <!-- -->
			     <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
				     <div class="right-div">



					 <span class="inner-breaks">
					 <br>
					 <br>
					 <br>
					 <br>
					 <br>
					 </span>
					        <div class="mesage-chat mesage-innerdiv">
                                  <img src="{{ asset('user/images/f5.png') }}" alt="Avatar" style="width:100%;">
                                    <p>Hello. How are you today?</p>
                                     <span class="time-right">11:00</span>
							</div>
					             <!-- -->
								 <hr>
					        <h5>Stories<span style="float:right;"><b>watch all</b></span></h5>
					         <div class="mesage-innerdiv" id="scrollbox4">
							    <div class="mesage-chat">
                                  <img src="{{ asset('user/images/f5.png') }}" alt="Avatar" style="width:100%;">
                                    <p>Hello. How are you today?</p>
                                     <span class="time-right">11:00</span>
								</div>
									<!-- -->
									 <div class="mesage-chat">
                                      <img src="{{ asset('user/images/f5.png') }}" alt="Avatar" style="width:100%;">
                                          <p>Hello. How are you today?</p>
                                           <span class="time-right">11:00</span>
								     </div>
									     <!-- -->
									  <div class="mesage-chat">
									   <img src="{{ asset('user/images/f5.png') }}" alt="Avatar" style="width:100%;">
                                       <p>Hello. How are you today?</p>
                                        <span class="time-right">11:00</span>

									  </div>
									 <!-- -->
                             </div>
			             		<!-- -->
                                 <div >

                                  <ul>
                                 <li><a href="#43"> About us </a></li>
                                 <li><a href="#43">press </a></li>
                                 <li><a href="#43">support </a></li>
								 <li><a href="#43">support </a></li>
					             <li><a href="#43">About us </a></li>
                                 <li><a href="#43">press </a></li>
                                 <li><a href="#43">support </a></li>
								 <li><a href="#43">support </a></li>
								 <li><a href="#43">About us </a></li>
                                 <li><a href="#43">press </a></li>
                                 <li><a href="#43">support </a></li>
								 <li><a href="#43">support </a></li>
								 </ul>
								 </div>

								 <div class="footer-copy">
								 <h5 style="color:#d8d8d8;">&copy;&nbsp;&nbsp;2018 Blaze</h5>
								 </div>
					 </div>
				          <!-- -->













				 </div>
				     <!-- -->
			</div>
			    <!-- -->
		 </div>
             <!-- -->

       <!--------------------model---------------------->


	    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">

         <div class="modal-body">
          <a href="#43"> <p>Some text in the modal.</p></a>
          <hr>
            <a href="#43"> <p>Some text in the modal.</p></a>
		  <hr>
            <a href="#43"> <p>Some text in the modal.</p></a>
          <hr>
            <a href="#43"> <p>Some text in the modal.</p></a>
        </div>

      </div>

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
