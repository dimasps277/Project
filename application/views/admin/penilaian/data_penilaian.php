<?php $this->load->view('admin/layout/header'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i><img src="<?= base_url('assets/')?>img/datanilai1.png"></i> Data Penilaian</h1>
</div>

<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i><img src="<?= base_url('assets/')?>img/datanilai.png"></i>  Daftar Data Penilaian</h6>
    </div>

    <div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-dark text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama Guru</th>
						<th width="10%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no=1;
						foreach($data_guru->result() as $guru) {
					?>
					<tr align="center">
						<td><?=$no ?></td>
						<td align="left"><?=$guru->nama_guru ?></td>
						<td>
							<a data-toggle="tooltip" data-placement="bottom" title="Input Nilai" href="<?=base_url('admin/penilaian/create/'.$guru->id_guru)?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
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