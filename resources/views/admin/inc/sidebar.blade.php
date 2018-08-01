<div class="sidebar" data-color="purple" data-background-color="white">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">Admin</a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class='nav-item {{--($page == "dashboard") ? ' active ' : ''--}}'>
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class='nav-item {{--($page == "dashboard") ? ' active ' : ''--}}'>
        <a class="nav-link" href="{{ route('admin.challenges') }}">
          <i class="material-icons">dashboard</i>
          <p>Challenges</p>
        </a>
      </li>
      <li class='nav-item {{--($page == "dashboard") ? ' active ' : ''--}}'>
        <a class="nav-link" href="{{ route('admin.users') }}">
          <i class="material-icons">dashboard</i>
          <p>Users</p>
        </a>
      </li>
      <!-- your sidebar here -->
    </ul>
  </div>
</div>
