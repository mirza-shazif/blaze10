<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wall</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>

    <div class="container my-5">
      <div class="row justify-content-center">
        <form action="{{ route('wall') }}" method="post" enctype="multipart/form-data" class="col-md-5">
          @csrf
          <div class="form-group">
            <textarea rows="3" name="media_caption" class="form-control" placeholder="Write something&hellip;"></textarea>
          </div>
          <div class="form-group">
            <input type="file" name="media" />
          </div>
          <div class="text-right">
            <input type="submit" class="btn btn-primary" value="Post" />
          </div>
        </form>
      </div>
      <div class="row">
        @foreach($posts->all() as $post)
        <div class="col-md-5">
          <div class="media">
            <img class="mr-3" src="{{ asset('data/'. $post->media) }}" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0">User 1</h5>
              <p>Media Caption</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
