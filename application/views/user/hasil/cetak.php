<html>
<head>
<title>Laporan Hasil Perankingan</title>
</head>
</head>
<body onload="window.print();">

<div style="width:1000px;margin:0 auto;text-align:center;">
<h2>Hasil Perankingan</h2>
<br/>
<table border="1" width="100%" cellspacing="0">
	<thead>
		<tr align="center">
			<th>Nama Guru</th>
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
</body>
</html>