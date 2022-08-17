<?php $this->load->view('user/layout/header'); ?>

<div class="mb-4">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-primary"><img src="<?= base_url('assets/')?>img/logo.png" >
        Profile SMKS NU Wargabinangun Yayasan Wataulniyah Cirebon</h1>
    </div>
	<!-- Divider -->
      <hr class="sidebar-divider">

    <!-- Content Row -->
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        Selamat datang <span class="text-uppercase"><b><?= $this->session->userdata('nama_user'); ?>!</b></span> Anda bisa mengoperasikan sistem dengan wewenang tertentu melalui pilihan menu di bawah.
    </div>
    <div class="container">
        <div class="col-xl-20 col-md-20 mb-0">
                    <div class="card bg-none o-hidden  border-0 my-1 text-gray-800" style="background: none;">
                            <p class="text-justify pt-0">
                                Yayasan Wataulniyah berdiri pada tahun 1982 dan memulai dalam bidang Pendidikan yang pada mulanya adalah Madrasah ibtidaiyah (MI), pada tahun 1998 yayasan mengembangkan sekolah lanjutan Madrasah tsanawiyah (MTS) dan Sekolah Menengah kejuruan Syariah salahsatunya adalah SMKS NU Wargabinangun Yayasan Wataulniyah Cirebon yang di bangun pada tahun 2009.
                            <p class="text-justify pt-0">
                                SMKS NU Wargabinangun Yayasan Wataulniyah Cirebon dan beralamat di Jl. Raya Wargabinangun Desa/Kelurahan Wargabinangun, Kecamatan Kaliwedi, Kabupaten Cirebon Provinsi Jawa Barat - 45165. merupakan salah satu sekolah favorit di daerah kaliwedi kabupaten Cirebon.
                            </p>
                        </div>
                    </div>
        <!-- Divider -->
      <hr class="sidebar-divider">

    <div class="row">       
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= base_url('user/hasil'); ?>" class="text-secondary text-decoration-none">Data Hasil Perhitungan</a></div>
                        </div>
                        <div class="col-auto">
                            <i><img src="<?= base_url('assets/')?>img/hasil1.png" ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- Divider -->
      <hr class="sidebar-divider">
<?php $this->load->view('user/layout/footer'); ?>