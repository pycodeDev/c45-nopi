  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
    <a href="/assets/index3.html" class="navbar-brand">
        <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text " style="font-weight:bold">Sistem Penerima bantuan</span>
      </a>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/home" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="/data" class="nav-link">Data</a>
          </li>
          <li class="nav-item">
            <a href="/cek" class="nav-link">Cek Rekomendasi Penerima</a>
          </li>
          <li class="nav-item">
            <a href="/about" class="nav-link">About</a>
          </li>
        </ul>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <?php echo session()->get('nama'); ?>
          <i class="far fa-user"></i>
          <!-- <span class="badge badge-success navbar-badge">10</span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
          <a href="/logout" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i>
            <span class="text-muted text-sm">Logout</span>
          </a>
        </div>
      </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->