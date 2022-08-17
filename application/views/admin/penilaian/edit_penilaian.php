<?php $this->load->view('admin/layout/header'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i><img src="<?= base_url('assets/')?>img/datanilai1.png"></i>  Data Penilaian</h1>

	<a href="<?= base_url('admin/penilaian/create/'.$view->id_guru); ?>" class="btn btn-secondary btn-icon-split"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
		<span class="text">Kembali</span>
	</a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-edit"></i> Edit Data Penilaian</h6>
    </div>
	
	<form action="<?= base_url('admin/penilaian/edit/'.$view->id_penilaian); ?>" method="post">
		<div class="card-body">
			<div class="row">
				<input type="hidden" name="id_guru" class="form-control" value="<?= $view->id_guru; ?>">
                <input type="hidden" name="id_kriteria" class="form-control" value="<?= $view->id_kriteria; ?>">
				  
				<div class="form-group col-md-6">
					<label class="font-weight-bold">Nilai</label>
					<input autocomplete="off" type="number" name="nilai" value="<?= $view->nilai ?>" required step="0.01" class="form-control"/>
				</div>
				
				<div class="form-group col-md-6">
					<label class="font-weight-bold">Keterangan</label>
					<input autocomplete="off" type="text" name="keterangan" value="<?= $view->keterangan ?>" required class="form-control"/>
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