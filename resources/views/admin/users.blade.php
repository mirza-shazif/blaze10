@extends('admin.inc.app')

@section('title', 'Users')

@section('content')

  <div class="wrapper">

    @include('admin.inc.sidebar')


    <div class="main-panel">

      @include('admin.inc.navbar')

      <div class="content">
        <div class="container-fluid">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Nickname</th>
                  <th>E-mail Address</th>
                  <th>Gender</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $users = [
                  [
                    'name' => 'Dawood Najam',
                    'nickname' => 'dwdnjm',
                    'email' => 'dawoodnajam5@gmail.com',
                    'gender' => 'Male'
                  ],
                  [
                    'name' => 'Shazif Abbas',
                    'nickname' => 'shazif',
                    'email' => 'shazif@gmail.com',
                    'gender' => 'Male'
                  ],
                  [
                    'name' => 'Mahira Khan',
                    'nickname' => 'mahira',
                    'email' => 'mahira@gmail.com',
                    'gender' => 'Female'
                  ]
                ];
                foreach($users as $user) {
                ?>
                <tr>
                  <td>{{ $user['name'] }}</td>
                  <td>{{ $user['nickname'] }}</td>
                  <td>{{ $user['email'] }}</td>
                  <td>{{ $user['gender'] }}</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Remove</button>
                  </td>
                </tr>
              <?php } ?>
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
  @sectionend

  @section('scripts')
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
@endsection
