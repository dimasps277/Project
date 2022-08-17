<?php $this->load->view('admin/layout/header'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i><img src="<?= base_url('assets/')?>img/dataguru1.png"></i>  Data Guru</h1>

	<a href="<?= base_url('admin/guru'); ?>" class="btn btn-secondary btn-icon-split"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
		<span class="text">Kembali</span>
	</a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-plus"></i> Tambah Data guru</h6>
    </div>
	
	<form action="<?= base_url('admin/guru/tambah'); ?>" method="post">
		<div class="card-body">
			<div class="row">
				<div class="form-group col-md-12">
					<label class="font-weight-bold">Nama Guru</label>
					<input autocomplete="off" type="text" name="nama_guru" required class="form-control"/>
				</div>
				<div class="form-group col-md-12">
					<label class="font-weight-bold">NIP</label>
					<input autocomplete="off" type="text" name="nip" required class="form-control"/>
				</div>
				<div class="form-group col-md-12">
					<label class="font-weight-bold">Tempat/Tanggal Lahir</label>
					<input autocomplete="off" type="text" name="ttl" required class="form-control"/>
				</div>
				<div class="form-group col-md-12">
					<label class="font-weight-bold">Pendidikan</label>
					<input autocomplete="off" type="text" name="pendidikan" required class="form-control"/>
				</div>
				<div class="form-group col-md-12">
					<label class="font-weight-bold">Jabatan</label>
					<input autocomplete="off" type="text" name="jabatan" required class="form-control"/>
				</div>
				<div class="form-group col-md-12">
					<label class="font-weight-bold">Bidang Studi Mengajar</label>
					<input autocomplete="off" type="text" name="studi" required class="form-control"/>
				</div>
			</div>
		</div>
		<div class="card-footer text-right">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-sync-alt"></i> Reset</button>
        </div>
	</form>
</div>

<?php $this->load->view('admin/layout/footer'); ?>