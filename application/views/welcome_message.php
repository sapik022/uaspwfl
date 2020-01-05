<!DOCTYPE html>
<html>
<head>
	<title>Data Stok Persediaan Barang</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/skin-blue.min.css">
	
</head>
<body>
	<h1 align="center">Data Stok Persediaan Barang</h1>
	<table id="tabel" class="table table-bordered table-striped">
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
	<center><a href="<?php echo base_url('index.php/welcome/export')?>"><button class="btn btn-success">Export Exel</button></a></center>
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FLOT CHARTS -->
<script src="<?php echo base_url() ?>assets/bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?php echo base_url() ?>assets/bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?php echo base_url() ?>assets/bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="<?php echo base_url() ?>assets/bower_components/Flot/jquery.flot.categories.js"></script>

<script>
  $(document).ready(function(){
    var dataTable = $('#tabel').DataTable();
  });

</script>
</body>
</html>