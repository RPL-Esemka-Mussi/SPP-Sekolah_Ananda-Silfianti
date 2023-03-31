<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPP Sekolah</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    @yield('css')
    {{--botstrap icons--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    {{--my styles--}}
    <link rel="stylesheet" href="/css/login.css">
  </head>
  <body>
    @if (Request::segment(1) == 'login' || Request::segment(1) == 'logout')
    
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container">
          <a class="navbar-brand" href="#">SPP Sekolah</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-lines-fill"></i>
         user name
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('logout')}}">Logout</a></li>
          </ul>
        </li>
        
           </ul>
          </div>
        </div>
      </nav>
      @endif
      <header class="navbar navbar-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">SPP Sekolah</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">
            <i class="bi bi-house"></i>
              <span data-feather="home" class="align-text-bottom"></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/user') }}">
            <i class="bi bi-person-fill-gear"></i>
              <span data-feather="user" class="align-text-bottom"></span>
              User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/siswa') }}">
            <i class="bi bi-person-fill"></i>
              <span data-feather="siswa" class="align-text-bottom"></span>
              Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/kelas') }}">
            <i class="bi bi-buildings"></i>
              <span data-feather="kelas" class="align-text-bottom"></span>
              Kelas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/spp') }}">
            <i class="bi bi-credit-card"></i>
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Spp
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/pembayaran') }}">
            <i class="bi bi-currency-dollar"></i>
              <span data-feather="pembayaran" class="align-text-bottom"></span>
              Pembayaran
            </a>
          </li>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">SPP SEKOLAH</h1>
        <div class="btn-group me-2">
          <button type="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-envelope-at"></i>esemkamussi@gmail.com</button>
          <button type="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-instagram"></i>esemka_musi_official</button>
        </div>
      </div>
      @yield('content')

    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>