<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{{ config('app.name') }}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
              integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!-- Bootstrap 5 Navbar -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
          <div class="container">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/customers')}}">Customers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/drivers')}}">Drivers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/pizzas')}}">Pizzas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/orders')}}">Orders</a>
              </li>
            </ul>
          </div>
        </nav>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row p-5">
                    <!-- Well for left side of the page (to compensate for widescreen) -->
                    {{-- <div class="col-lg-2"></div> --}}
                    <!-- Slot for content from Lower Level views with sections called 'content' pulled in here -->
                    <div class="col-lg-12"> @yield('content') </div>
                    <!-- Well for right side of the page (to compensate for widescreen) -->
                    {{-- <div class="col-lg-2"></div> --}}
                </div>
            </div>
        </div>
        <!-- Webpack mix npm generated -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        @stack('js_scripts')
    </body>
</html>
