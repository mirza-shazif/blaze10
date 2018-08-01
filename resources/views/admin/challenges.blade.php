@extends('admin.inc.app')

@section('title', 'Challenges')

@section('content')

  <div class="wrapper">

    @include('admin.inc.sidebar')


    <div class="main-panel">

      @include('admin.inc.navbar')

      <div class="content">
        <div class="container-fluid">
          <button class="btn btn-primary mb-2 pull-right" data-toggle="modal" data-target="#new-challenge-modal" data-backdrop="static">Create New Challenge</button>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Challenge ID</th>
                  <th>Description</th>
                  <th>Created by</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center" colspan="5">No data available</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>

  <div class="modal fade" id="new-challenge-modal">
    <div class="modal-dialog">
      <form class="modal-content" action="" method="post">
        <header class="modal-header">
          <h4 class="modal-title">Create New Challenge</h4>
        </header>
        <main class="modal-body">
          <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="Description"></textarea>
          </div>
        </main>
        <footer class="modal-footer text-right">
          <input type="submit" class="btn btn-primary" value="Create" />
        </footer>
      </form>
    </div>
  </div>
  @sectionend
