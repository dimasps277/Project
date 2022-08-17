<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>SPK Metode MABAC</title>

        <!-- Custom fonts for this template-->
        <link href="<?= base_url('assets/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

        <!-- Custom styles for this template-->
        <link href="<?= base_url('assets/')?>css/sb-admin-2.min.css" rel="stylesheet" />
		<link rel="shortcut icon" href="<?= base_url('assets/')?>img/logo2.png" type="image/x-icon">
		<link rel="icon" href="<?= base_url('assets/')?>img/logo2.png" type="image/x-icon">
    </head>

    <body class="bg-gradient-dark" style="padding-top: 50px;">
        
			<center><div class="col-xl-4 col-lg-5 col-md-5 mt-5">
                    <div class="card o-hidden border-2  shadow-lg my-5"> 
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-4">
                                        <div class="text-center">
                                            <i><img src="<?= base_url('assets/')?>img/admin1.png" ></i> 
                                            <h1 class="h5 text-gray-900 mb-2">Login Account</h1>
                                        </div>
										<?php 
										$gagal = $this->session->flashdata('gagal');
										if(!empty($gagal)){
										?>
										<div class="alert alert-danger text-center" role="alert"><?= $this->session->flashdata('gagal'); ?></div>
										<?php
										}
										?>

                                        <form class="user" action="<?= site_url('login/auth'); ?>" method="post">
                                            <div class="form-group">
                                                <input required autocomplete="off" type="nama_user" class="form-control form-control-user" id="exampleInputUser" placeholder="Username" name="nama_user" />
                                            </div>
                                            <div class="form-group">
                                                <input required autocomplete="off" type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password" />
                                            </div>
                                            <button name="submit" type="submit" class="btn btn-dark btn-user btn-block"><i class="fas fa-fw fa-sign-in-alt mr-1"></i> Masuk</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assets/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets/')?>js/sb-admin-2.min.js"></script>
    </body>
</html>
