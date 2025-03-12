<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>College App</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
    />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container-fluid position-relative d-flex p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Sidebar Start -->
      <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
          <a href="{{route('students.index')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">
              <i class="fa fa-user-edit me-2"></i>CollegeApp
            </h3>
          </a>

          <div class="navbar-nav w-100">
            <a href="{{ route('colleges.index') }}" id="collegesLink" class="nav-item nav-link"
              ><i class="fa fa-keyboard me-2"></i>Colleges</a
            >
            <a href="{{ route('students.index') }}" id="studentsLink" class="nav-item nav-link"
              ><i class="fa fa-table me-2"></i>Students</a
            >
          </div>
        </nav>
      </div>
      <!-- Sidebar End -->

      <!-- Content Start -->
      <div class="content">
        <!-- Navbar Start -->
        <nav
          class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0"
        >
          <a href="{{route('students.index')}}" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
          </a>
          <a href="#" class="sidebar-toggler flex-shrink-0 mt-3 mb-3">
            <i class="fa fa-bars"></i>
          </a>
        </nav>
        <!-- Navbar End -->

    @yield('content')

      </div>
      <!-- Content End -->
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

  </body>
</html>