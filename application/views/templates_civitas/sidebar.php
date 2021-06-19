<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3" style="font-size: 11px;">Sistem Monitoring Aktivitas Lalu Lintas <br>ITS</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('civitas/dashboard'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('civitas/histori'); ?>">
          <i class="fas fa-fw fa-history"></i>
          <span>Histori</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('civitas/kapasitas'); ?>">
          <i class="fas fa-fw fa-warehouse"></i>
          <span>Kapasitas Parkir</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('civitas/lokasi'); ?>">
          <i class="fas fa-fw fa-map-marker"></i>
          <span>Lokasi</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('civitas/keluhan'); ?>">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Input Keluhan</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('civitas/GantiPassword'); ?>">
          <i class="fas fa-fw fa-lock"></i>
          <span>Ganti Password</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('welcome/logout'); ?>" onclick="return confirm('Yakin akan logout?')">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <h4 class="font-weight-bold">INSTITUT TEKNOLOGI SEPULUH NOPEMBER</h4>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang <?= $this->session->userdata('nama_pegawai'); ?></span>
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->