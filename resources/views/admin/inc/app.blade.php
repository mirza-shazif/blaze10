<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('admin/css/material-dashboard.css') }}" />
    @yield('styles')
  </head>
  <body>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="{{ asset('admin/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="{{ asset('admin/js/plugins/chartist.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('admin/js/plugins/bootstrap-notify.js') }} "></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('admin/js/material-dashboard.min.js') }}"></script>


    @yield('scripts')
  </body>
</html>
