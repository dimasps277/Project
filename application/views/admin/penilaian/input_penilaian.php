<?php $this->load->view('admin/layout/header') ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i><img src="<?= base_url('assets/')?>img/datanilai1.png"></i>  Data Penilaian</h1>

	<a href="<?= base_url('admin/penilaian'); ?>" class="btn btn-secondary btn-icon-split"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
		<span class="text">Kembali</span>
	</a>
</div>

<?php 
if($this->session->flashdata('tambah')):
	if ($this->session->flashdata('tambah') == TRUE):
?>
		<div class="alert alert-success">Berhasil Tersimpan</div>
<?php
	elseif ($this->session->flashdata('tambah') == FALSE):
?> 
		<div class="alert alert-danger">Gagal Tersimpan</div>
<?php
	endif;
endif;

if($this->session->flashdata('delete')):
	if ($this->session->flashdata('delete') == TRUE):
?>
		<div class="alert alert-success">Berhasil Terhapus</div>
<?php
	elseif ($this->session->flashdata('delete') == FALSE):
?>  
		<div class="alert alert-danger">Gagal Terhapus</div>
<?php
	endif;
endif;

if($this->session->flashdata('edit')):
	if ($this->session->flashdata('edit') == TRUE):
?>
		<div class="alert alert-success">Berhasil Diedit</div>
<?php
	elseif ($this->session->flashdata('edit') == FALSE):
?> 
		<div class="alert alert-danger">Gagal Diedit</div>
<?php
	endif;
endif;

$warning = $this->session->flashdata('warning');
	if(!empty($warning)){
?>
	<div class="alert alert-danger" role="alert"><?= $this->session->flashdata('warning'); ?></div>
<?php
}
?>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-plus"></i> Tambah Data Penilaian "<?= $view->nama_guru; ?>"</h6>
    </div>
	
	<form action="<?= base_url('admin/penilaian/tambah'); ?>" method="post">
		<div class="card-body">
			<div class="row">
				<input type="hidden" name="id_guru" class="form-control" value="<?= $view->id_guru; ?>">
				<div class="form-group col-md-12">
					<label class="font-weight-bold">Pilih Kriteria</label>
					<select name="id_kriteria" class="form-control">
						<option value="">--Pilih Kriteria--</option>
						<?php foreach($data_kriteria as $kriteria) {
							echo "<option value='$kriteria->id_kriteria'>$kriteria->kriteria</option>";
						}
						?>
					</select>
				</div>
				
				<div class="form-group col-md-6">
					<label class="font-weight-bold">Nilai</label>
					<input autocomplete="off" type="number" name="nilai" required step="0.01" class="form-control"/>
				</div>
				
				<div class="form-group col-md-6">
					<label class="font-weight-bold">Keterangan</label>
					<input autocomplete="off" type="text" name="keterangan" required class="form-control"/>
				</div>
				
			</div>
		</div>
		<div class="card-footer text-right">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-sync-alt"></i> Reset</button>
        </div>
	</form>
</div>

<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> Daftar Data Penilaian "<?= $view->nama_guru; ?>"</h6>
    </div>

    <div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-dark text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Kriteria</th>
						<th>Nilai</th>
						<th>Keterangan</th>
						<th width="15%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no=1;
						foreach($data_penilaian as $penilaian) {
					?>
					<tr align="center">
						<td><?=$no ?></td>
						<td align="left"><?=$penilaian->kriteria ?></td>
						<td><?=$penilaian->nilai ?></td>
						<td><?=$penilaian->keterangan ?></td>
						<td>
							<div class="btn-group" role="group">
								<a data-toggle="tooltip" data-placement="bottom" title="Edit Data" href="<?=base_url('admin/penilaian/view_edit/'.$penilaian->id_penilaian)?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
								<a  data-toggle="tooltip" data-placement="bottom" title="Hapus Data" href="<?=base_url('admin/penilaian/delete/'.$penilaian->id_penilaian)?>" onclick="return confirm ('Apakah anda yakin untuk meghapus data ini')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
							</div>
						</td>
					</tr>
					<?php
						$no++;
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php $this->load->view('admin/layout/footer') ?>