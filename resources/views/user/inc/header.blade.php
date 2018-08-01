

<div class="sticky">

<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand" href="{{ route('user.home') }}"><img src="{{ asset('user/images/c520e2e9-023d-4fd0-b2d6-7ca7f95f6f0d.jpg') }}"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">



        <li>
		    <form action="/action_page.php" >
                <div class="input-group new-form">
                  <input type="text" class="form-control" placeholder="Search" name="search">
                      <div class="input-group-btn">
                         <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                  </div>
                </div>
            </form>
	    </li>

      </ul>
                <ul class="nav navbar-nav navbar-right new-respo">
                  <li><a data-toggle="modal" data-target="#addchallenges" href="#"><button  class="btn btn-primary">Add New</button></li>
                   <li><a href="{{ route('user.explore') }}"><img src="{{ asset('user/images/f1.png') }}" style="margin-top:-45px;"></a></li>
                   <li><a href="{{ route('user.page2') }}"><img src="{{ asset('user/images/f2.png') }}"></a></li>
		            <li><a href="{{ route('user.profile') }}"><img src="{{ asset('user/images/f3.png') }}"></a></li>
                </ul>
    </div>
 </div>
</nav>

</div>

</div>
<!-- Modal -->


<div class="modal fade" id="addchallenges" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">

   <div class="modal-body" >
          <label>Compose New Challange</label><br>
<form method="post" action="{{route('user.challenges')}}" enctype="multipart/form-data">
  @csrf
    	     <textarea name="challange" class="form-control" rows="3" style="resize:none;" id="challange"></textarea>
            <br> <input id="photo" type="file" style="display:none;" name="image"><label for="photo"><i class="glyphicon glyphicon-picture" style="margin-left:-80%; font-size:25px; margin-top:10px;"></i></label>
            &nbsp;

            <input id="video" type="file" style="display:none;" name="video"><label for="video" ><i class="glyphicon glyphicon-facetime-video" style="margin-left:-80%; font-size:30px;"></i></label>
<hr>
              <button type="submit" name="button" class="btn btn-primary">Submit</button>
            </form>

  </div>

</div>
</div>
</div>
