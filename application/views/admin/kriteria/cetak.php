<html>
<head>
<title>Data Guru</title>
</head>
</head>
<body onload="window.print();">

<div style="width:1000px;margin:0 auto;text-align:center;">
    <center><h1 class="panel-title" style="font-size: 22px;">DATA KRITERIA<br>
                <a style="font-size: 24px;">SMKS NU WARGABINANGUN YAYASAN WATAULNIYAH CIREBON<br>
                <a style="font-size: 12px;">Jl. Raya Wargabinangun Desa/Kelurahan Wargabinangun, Kec. Kaliwedi, Kab. Cirebon Provinsi Jawa Barat - 45165. Indonesia</a></br></center>


<table border="1" width="100%" cellspacing="0">
	<thead>
		<tr align="center">
			<th>No</th>
			<th width="50%">Kriteria</th>
			<th width="25%">Bobot</th>
			<th width="20%">Tipe</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		$kr1 = $this->db->query("SELECT kriteria.id_kriteria, kriteria.kriteria, kriteria.bobot, kriteria.tipe FROM kriteria WHERE kriteria.id_kriteria order by kriteria.id_kriteria asc");
		foreach ($kr1->result() as $a) {
		?>
		<tr align="center">
			<td align="center"><?php echo $a->id_kriteria; ?></td>
			<td align="left"><?php echo $a->kriteria; ?></td>
			<td align="center"><?php echo $a->bobot; ?></td>
			<td align="center"><?php echo $a->tipe; ?></td>
		<?php } ?>
	</tbody>
</table>
</body>
</html>