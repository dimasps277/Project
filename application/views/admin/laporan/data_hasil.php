<?php $this->load->view('admin/layout/header'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-chart-area"></i> Data Hasil Perhitungan</h1>
</div>

<?php 
$gagal = $this->session->flashdata('gagal');
if(!empty($gagal)){
?>
	<div class="alert alert-danger" role="alert"><?= $this->session->flashdata('gagal'); ?></div>
<?php } ?>

<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> Matrik Awal (X)</h6>
    </div>

    <div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-dark text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama Guru</th>
						<?php 
						$kr2 = $this->db->query("SELECT  DISTINCT kriteria.kriteria FROM penilaian,kriteria WHERE penilaian.id_kriteria=kriteria.id_kriteria");
						foreach ($kr2->result() as $a) {
						?>
						<th><?php echo $a->kriteria; ?></th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no=1;
						$sql = $this->db->query("SELECT * FROM guru ");
						foreach ($sql->result() as $a) {
					?>
					<tr align="center">
						<td><?php echo $no++; ?></td>
						<td align="left"><?php echo $a->nama_guru; ?></td>
						<?php 
						$id = $a->id_guru;
						$sql2 = $this->db->query("SELECT DISTINCT kriteria.kriteria,penilaian.nilai FROM penilaian,kriteria WHERE penilaian.id_kriteria=kriteria.id_kriteria AND penilaian.id_guru='$id'");
						foreach ($sql2->result() as $a) {
						?>
						<td><?php echo $a->nilai; ?></td>
					<?php } ?>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header">
		<div class="d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> Normalisasi (N)</h6>
			
			<div>
				<a data-toggle="tooltip" data-placement="bottom" title="Buat Data Normalisasi" href="<?= base_url('admin/hasil/proses_normalisasi'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-sync"></i></a>
				<a  data-toggle="tooltip" data-placement="bottom" title="Hapus Data" href="<?= base_url('admin/hasil/delete_normalisasi'); ?>" onclick="return confirm ('Apakah anda yakin untuk meghapus data ini')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
			</div>
		</div>
    </div>

    <div class="card-body">		
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-dark text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama guru</th>
						<?php 
						$kr2 = $this->db->query("SELECT  DISTINCT kriteria.kriteria FROM normalisasi,kriteria WHERE normalisasi.id_kriteria=kriteria.id_kriteria");
						foreach ($kr2->result() as $a) {
						?>
						<th><?php echo $a->kriteria; ?></th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
					<?php $no=1;
					$sql = $this->db->query("SELECT * FROM guru");
					foreach ($sql->result() as $a) { ?>
					<tr align="center">
						<td><?php echo $no++; ?></td>
						<td align="left"><?php echo $a->nama_guru; ?></td>
						<?php 
						$id = $a->id_guru;
						$sql2 = $this->db->query("SELECT DISTINCT kriteria.kriteria,normalisasi.normalisasi FROM normalisasi,kriteria WHERE normalisasi.id_kriteria=kriteria.id_kriteria AND normalisasi.id_guru='$id'");
						foreach ($sql2->result() as $a) { ?>
						<td><?php echo $a->normalisasi; ?></td>
						<?php } ?>
					</tr>
						<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header">
		<div class="d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> Matriks Bobot Keputusan (V)</h6>
			
			<div>
				<a data-toggle="tooltip" data-placement="bottom" title="Buat Data Keputusan" href="<?= base_url('admin/hasil/proses_keputusan'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-sync"></i></a>
				<a  data-toggle="tooltip" data-placement="bottom" title="Hapus Data" href="<?= base_url('admin/hasil/delete_keputusan'); ?>" onclick="return confirm ('Apakah anda yakin untuk meghapus data ini')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
			</div>
		</div>
    </div>

    <div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-dark text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama guru</th>
						<?php 
						$kr2 = $this->db->query("SELECT  DISTINCT kriteria.kriteria FROM keputusan,kriteria WHERE keputusan.id_kriteria=kriteria.id_kriteria");
						foreach ($kr2->result() as $a) {
						?>
						<th><?php echo $a->kriteria; ?></th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
						<?php $no=1;
						$sql = $this->db->query("SELECT * FROM guru");
						foreach ($sql->result() as $a) { ?>
					<tr align="center">
						<td><?php echo $no++; ?></td>
						<td align="left"><?php echo $a->nama_guru; ?></td>
						<?php 
						$id = $a->id_guru;
						$sql2 = $this->db->query("SELECT DISTINCT kriteria.kriteria,keputusan.bobot_keputusan FROM keputusan,kriteria WHERE keputusan.id_kriteria=kriteria.id_kriteria AND keputusan.id_guru='$id'");
						foreach ($sql2->result() as $a) { ?>
						<td><?php echo $a->bobot_keputusan; ?></td>
						<?php } ?>
					</tr>
						<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header">
		<div class="d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> Nilai Matriks Batas (G)</h6>
			
			<div>
				<a data-toggle="tooltip" data-placement="bottom" title="Buat Data Matriks Batas" href="<?= base_url('admin/hasil/proses_matriks_batas'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-sync"></i></a>
				<a  data-toggle="tooltip" data-placement="bottom" title="Hapus Data" href="<?= base_url('admin/hasil/delete_matriks_batas'); ?>" onclick="return confirm ('Apakah anda yakin untuk meghapus data ini')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
			</div>
		</div>
    </div>

    <div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-dark text-white">
					<tr align="center">
						<?php 
						$kr2 = $this->db->query("SELECT  DISTINCT kriteria.kriteria FROM matriks_batas,kriteria WHERE matriks_batas.id_kriteria=kriteria.id_kriteria");
						foreach ($kr2->result() as $a) {
						?>
						<th><?php echo $a->kriteria; ?></th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
					<tr align="center">
						<?php 
						$sql2 = $this->db->query("SELECT DISTINCT kriteria.kriteria,matriks_batas.nilai_batas FROM matriks_batas,kriteria WHERE matriks_batas.id_kriteria=kriteria.id_kriteria");
						foreach ($sql2->result() as $a) { ?>
						<td><?php echo $a->nilai_batas; ?></td>
						<?php } ?>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header">
		<div class="d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> Matriks Jarak guru Dari Daerah Perkiraan Perbatasan (Q)</h6>
			
			<div>
				<a data-toggle="tooltip" data-placement="bottom" title="Buat Data Matriks Jarak guru" href="<?= base_url('admin/hasil/proses_perkiraan_batas'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-sync"></i></a>
				<a  data-toggle="tooltip" data-placement="bottom" title="Hapus Data" href="<?= base_url('admin/hasil/delete_perkiraan_batas'); ?>" onclick="return confirm ('Apakah anda yakin untuk meghapus data ini')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
			</div>
		</div>
    </div>

    <div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-dark text-white">
					<tr align="center">
						<th width="5%">No</th>
						<th>Nama guru</th>						
						<?php 
						$kr2 = $this->db->query("SELECT  DISTINCT kriteria.kriteria FROM perkiraan_perbatasan,kriteria WHERE perkiraan_perbatasan.id_kriteria=kriteria.id_kriteria");
						foreach ($kr2->result() as $a) {?>
						<th><?php echo $a->kriteria; ?></th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
					<?php $no=1;
						$sql = $this->db->query("SELECT * FROM guru");
						foreach ($sql->result() as $a) {
					?>
					<tr align="center">
						<td><?php echo $no++; ?></td>
						<td><?php echo $a->nama_guru; ?></td>
						<?php 
						$id = $a->id_guru;
						$sql2 = $this->db->query("SELECT DISTINCT kriteria.kriteria,perkiraan_perbatasan.nilai_perkiraan FROM perkiraan_perbatasan,kriteria WHERE perkiraan_perbatasan.id_kriteria=kriteria.id_kriteria AND perkiraan_perbatasan.id_guru='$id'");
						foreach ($sql2->result() as $a) { ?>
						<td><?php echo $a->nilai_perkiraan; ?></td>
						<?php } ?>
					</tr>
						<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header">
		<div class="d-sm-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> Hasil Akhir Perankingan</h6>
			
			<div>
				<a target="_blank" data-toggle="tooltip" data-placement="bottom" title="Cetak Data" href="<?= base_url('admin/hasil/cetak'); ?>" class="btn btn-dark btn-sm"><i class="fa fa-print"></i></a>
				<a data-toggle="tooltip" data-placement="bottom" title="Buat Data Hasil Akhir" href="<?= base_url('admin/hasil/proses_rangking'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-sync"></i></a>
				<a  data-toggle="tooltip" data-placement="bottom" title="Hapus Data" href="<?= base_url('admin/hasil/delete_analisa'); ?>" onclick="return confirm ('Apakah anda yakin untuk meghapus data ini')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
			</div>
		</div>
    </div>

    <div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-dark text-white">
					<tr align="center">
						<th>Nama guru</th>
                        <th>Hasil</th>
						<th width="15%">Ranking</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					$kr1 = $this->db->query("SELECT guru.nama_guru, guru.id_guru, rangking.nilai_rangking FROM guru,rangking WHERE guru.id_guru=rangking.id_guru order by rangking.nilai_rangking desc");
					foreach ($kr1->result() as $a) {
					?>
					<tr align="center">
						<td align="left"><?php echo $a->nama_guru; ?></td>
						<?php 
						$id_guru = $a->id_guru;
						$nilai_rangking = $a->nilai_rangking;
						?>
						<td><?php echo $nilai_rangking; ?></td>
						<td><?php echo $no++; ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="card shadow mb-4">
    <!-- /.card-header -->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> Grafik Hasil</h6>
    </div>

    <div class="card-body">
		<?php
		$nama_al= "";
		$nilai=null;
		$beg=null;

		foreach ($kr1->result() as $a) {
			$nm=$a->nama_guru;
			$nama_al .= "'$nm'". ", ";
			
			$n=$a->nilai_rangking;
			$nilai .= "$n". ", ";
			
			$warna = "#4e73df";
			$beg .= "'$warna'". ", ";
				
		}
		?>

		<canvas id="myPieChart" width="546" height="216" style="display: block; width: 546px; height: 216px;" class="chartjs-render-monitor"></canvas>
		
		<script>
		var ctx = document.getElementById("myPieChart");
		var myPieChart = new Chart(ctx, {
		  type: 'bar',
		  data: {
			labels: [<?php echo $nama_al; ?>],
			datasets: [{
			  label:'Grafik Hasil',
			  data: [<?php echo $nilai; ?>],
			  backgroundColor: [<?php echo $beg; ?>],
			}],
		  },
			  options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});

		</script>
	</div>
</div>

   
<?php $this->load->view('admin/layout/footer'); ?>
