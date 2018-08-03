

<div class="sticky">

  <div class="container">
    <nav class="navbar navbar-expand-lg">

        <a class="navbar-brand" href="{{ route('user.home') }}">
          <img src="{{ asset('users/images/c520e2e9-023d-4fd0-b2d6-7ca7f95f6f0d.jpg') }}" height="50">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">


          <form class="form-inline" action="/action_page.php" method="post">
            <input type="text" class="form-control" placeholder="Search" name="search">
            <button class="btn btn-primary ml-2" type="submit"><i class="fa fa-search"></i></button>
          </form>

          <ul class="nav navbar-nav new-respo">
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#addchallenges" href="#"><button class="btn btn-primary">Add New</button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.explore') }}"><img src="{{ asset('users/images/f1.png') }}"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.page2') }}"><img src="{{ asset('users/images/f2.png') }}"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.profile') }}"><img src="{{ asset('users/images/f3.png') }}"></a>
            </li>
          </ul>

        </div>

    </nav>

  </div>

</div>

<!-- Modal -->


<div class="modal fade" id="addchallenges" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <label>Compose New Challange</label><br>
          <form method="post" action="{{ route('user.create_challenge') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <textarea name="media_caption" placeholder="Write Caption&hellip;" class="form-control" rows="3" style="resize:none;" id="challange"></textarea>
            </div>
            <div class="form-group">
              <input type="file" style="display:none;" id="media" name="media">
              <label for="media"><i class="fa fa-camera-retro" style="margin-left:-80%; font-size:25px; margin-top:10px;"></i></label>
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
