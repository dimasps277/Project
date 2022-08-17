<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SMKS NU Wargabinangun</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/')?>css/sb-admin-2.min.css" rel="stylesheet">

  <link href="<?= base_url('assets/')?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?= base_url('assets/')?>img/logo2.png" type="image/x-icon">
  <link rel="icon" href="<?= base_url('assets/')?>img/logo2.png" type="image/x-icon">
  
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <!-- Page level plugins -->
  <script src="<?= base_url('assets/')?>vendor/chart.js/Chart.min.js"></script>

</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard'); ?>">
        <div class="sidebar-brand-icon rotate-n-0">
        
        </div>
        <div class="sidebar-brand-text mx-0">SMKS NU Wargabinangun</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Home -->
      <li class="nav-item <?php if($page=='Dashboard'){echo 'active';}?>">
        <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
          <i><img src="<?= base_url('assets/')?>img/home2.png" ></i>
          <span> Home</span></a>
      </li>
	  
	  <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Master Data
      </div>

	  
	  <li class="nav-item <?php if($page=='Kriteria'){echo 'active';}?>">
        <a class="nav-link" href="<?= base_url('admin/kriteria'); ?>">
          <i><img src="<?= base_url('assets/')?>img/folderkriteria2.png" ></i>
          <span>Data Kriteria</span></a>
      </li>
	  
	  <li class="nav-item <?php if($page=='Alternatif'){echo 'active';}?>">
        <a class="nav-link" href="<?= base_url('admin/Guru'); ?>">
          <i><img src="<?= base_url('assets/')?>img/folderguru.png" ></i>
          <span>Data Guru</span></a>
      </li>
	  
	  <li class="nav-item <?php if($page=='Penilaian'){echo 'active';}?>">
        <a class="nav-link" href="<?= base_url('admin/penilaian'); ?>">
           <i><img src="<?= base_url('assets/')?>img/foldernilai2.png" ></i>
          <span>Data Penilaian</span></a>
      </li>
	  
	  <li class="nav-item <?php if($page=='Hasil'){echo 'active';}?>">
        <a class="nav-link" href="<?= base_url('admin/hasil'); ?>">
          <i><img src="<?= base_url('assets/')?>img/folderhasil2.png" ></i>
          <span>Data Hasil Perhitungan</span></a>
      </li>	

	  
	  <!-- Divider -->
      <hr class="sidebar-divider">
	  
	  <!-- Heading -->
      <div class="sidebar-heading">
        Master User
      </div>

	  
	  <li class="nav-item <?php if($page=='User'){echo 'active';}?>">
        <a class="nav-link" href="<?= base_url('admin/user'); ?>">
           <i><img src="<?= base_url('assets/')?>img/folderuser2.png" ></i>
          <span>Data User</span></a>
      </li>	

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

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
        <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
		  <button id="sidebarToggleTop" class="btn text-primary d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>

          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <!-- Nav Item - User Information -->

            <li class="nav-item dropdown no-arrow">

              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="text-uppercase mr-2 d-none d-lg-inline text-gray-400 small">
					<?= $this->session->userdata('nama_user'); ?>
				</span>

        <img src="<?= base_url('assets/')?>img/admin1.png" class="img-profile rounded-circle">
              </a>

				    <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
		
		<div class="container-fluid">
  