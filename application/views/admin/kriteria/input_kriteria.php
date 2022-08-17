<?php $this->load->view('admin/layout/header'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i><img src="<?= base_url('assets/')?>img/datakriteria1.png"></i>  Data Kriteria</h1>

	<a href="<?= base_url('admin/kriteria'); ?>" class="btn btn-secondary btn-icon-split"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
		<span class="text">Kembali</span>
	</a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-plus"></i> Tambah Data Kriteria</h6>
    </div>
	
	<form action="<?= base_url('admin/kriteria/tambah'); ?>" method="post">
		<div class="card-body">
			<div class="row">
				<div class="form-group col-md-6">
					<label class="font-weight-bold">Nama Kriteria</label>
					<input autocomplete="off" type="text" name="kriteria" required class="form-control"/>
				</div>
				
				<div class="form-group col-md-6">
					<label class="font-weight-bold">Tipe Kriteria</label>
					<select name="tipe" class="form-control" required>
						<option value="">--Pilih Tipe Kriteria--</option>
						<option value="benefit">Benefit</option>
						<option value="cost">Cost</option>						
					</select>
				</div>
				
				<div class="form-group col-md-6">
					<label class="font-weight-bold">Bobot Kriteria</label>
					<input autocomplete="off" type="number" name="bobot" required step="0.01" class="form-control"/>
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