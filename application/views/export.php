<?php
header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=data_stok_persediaan_barang.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
<h1 align="center">Data Stok Persediaan Barang</h1>
<h2 align="center">Nama : Muhammad Safiun Najib</h2>
<h2 align="center">NIM : 161240000505</h2>
<h2 align="center">Tugas : Uas</h2><
	<table border="1" >
		<tr>
			<td>No</td>
			<td>Nama Barang</td>
			<td>Kategori</td>
			<td>Stok</td>
			<td>Harga</td>
		</tr>
		<?php $no=1; foreach ($barang as $b ) {?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $b->nama_barang?></td>
			<td><?= $b->nama_kategori?></td>
			<td><?= $b->stok_barang?></td>
			<td><?= $b->harga_barang?></td>
		</tr>
		<?php } ?>
		
	</table>