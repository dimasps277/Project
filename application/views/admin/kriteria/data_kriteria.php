<?php $this->load->view('admin/layout/header'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i><img src="<?= base_url('assets/')?>img/datakriteria1.png" ></i> Data Kriteria</h1>
 <left>
    <a target="_blank" data-toggle="tooltip" data-placement="bottom" title="Cetak Data" href="<?= base_url('admin/kriteria/cetak'); ?>" class="btn btn-dark"> <i class="fa fa-print"></i> Cetak Data</a>
    <a href="<?= base_url('admin/kriteria/create'); ?>" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Data</a>
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
?>

<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i><img src="<?= base_url('assets/')?>img/datakriteria.png" ></i> Daftar Data Kriteria</h6>
    </div>

    <div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-dark text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Kriteria</th>
						<th>Bobot</th>
						<th>Tipe</th>
						<th width="15%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no=1;
						foreach($data_kriteria->result() as $kriteria) {
					?>
					<tr align="center">
						<td><?=$no ?></td>
						<td align="left"><?=$kriteria->kriteria ?></td>
						<td><?=$kriteria->bobot ?></td>
						<td><?=$kriteria->tipe ?></td>
						<td>
							<div class="btn-group" role="group">
								<a data-toggle="tooltip" data-placement="bottom" title="Edit Data" href="<?=base_url('admin/kriteria/view_edit/'.$kriteria->id_kriteria)?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
								<a  data-toggle="tooltip" data-placement="bottom" title="Hapus Data" href="<?=base_url('admin/kriteria/delete/'.$kriteria->id_kriteria)?>" onclick="return confirm ('Apakah anda yakin untuk meghapus data ini')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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


<?php $this->load->view('admin/layout/footer'); ?>