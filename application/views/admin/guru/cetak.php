<html>
<head>
<title>Data Guru</title>
</head>
</head>
<body onload="window.print();">

<div style="width:1000px;margin:0 auto;text-align:center;">
    <center><h1 class="panel-title" style="font-size: 22px;">DATA GURU<br>
                <a style="font-size: 24px;">SMKS NU WARGABINANGUN YAYASAN WATAULNIYAH CIREBON<br>
                <a style="font-size: 12px;">Jl. Raya Wargabinangun Desa/Kelurahan Wargabinangun, Kec. Kaliwedi, Kab. Cirebon Provinsi Jawa Barat - 45165. Indonesia</a></br></center>


<table border="1" width="100%" cellspacing="0">
	<thead>
		<tr align="center">
			<th>No</th>
			<th width="18%">Nama Guru</th>
			<th width="18%">NIP</th>
			<th width="18%">TTL</th>
			<th width="20%">Pendidikan</th>
			<th width="11%">Jabatan</th>
			<th width="22%">Studi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		$kr1 = $this->db->query("SELECT guru.id_guru, guru.nama_guru, guru.nip, guru.ttl, guru.pendidikan, guru.jabatan, guru.studi  FROM guru WHERE guru.id_guru order by guru.id_guru asc");
		foreach ($kr1->result() as $a) {
		?>
		<tr align="center">
			<td align="center"><?php echo $a->id_guru; ?></td>
			<td align="left"><?php echo $a->nama_guru; ?></td>
			<td align="center"><?php echo $a->nip; ?></td>
			<td align="left"><?php echo $a->ttl; ?></td>
			<td align="left"><?php echo $a->pendidikan; ?></td>
			<td align="left"><?php echo $a->jabatan; ?></td>
			<td align="left"><?php echo $a->studi; ?></td>
			
			
		<?php } ?>
	</tbody>
</table>
</body>
</html>