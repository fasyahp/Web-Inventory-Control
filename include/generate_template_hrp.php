<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Generate Template HRP.xls");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ekspor Data OPB</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		table{
			width: 50%;
		}
		th{
			font-weight: bold;
		}
		h1{
			margin: 10px;
			font-weight: bold;
			text-align: center;
		}
		h3{
			text-align: center;
		}
	</style>
</head>
<body>
	<table border="1">
		<tr>
			<th width="30%">ID</th>
			<th width="30%">Refference</th>
			<th width="30%">Doc date</th>
			<th width="30%">Job No</th>
			<th width="10%">Part No</th>
			<th width="15%">Nama Material</th>
			<th width="10%">Vendor</th>
			<th width="10%">QTY</th>
			<th width="10%">Shop</th>
			<th width="20%">Cost Center</th>
			<th width="10%">WH</th>
			<th width="30%">Doc Header Text</th>
			<th width="10%">Count PN</th>
			<th width="30%">Kategori Problem</th>
			<th width="15%">Price</th>
			<th width="15%">Doc GI</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","db_adm");

		// menampilkan data pegawai
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM `hrp` ");
		// $no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<!-- <td><?php echo $no++; ?></td> -->
			<td><?php echo $d['id']; ?></td>
			<td><?php echo $d['refference']; ?></td>
			<td><?php echo $d['doc_date']; ?></td>
			<td><?php echo $d['job_no']; ?></td>
			<td><?php echo $d['part_no']; ?></td>
			<td><?php echo $d['nama_material']; ?></td>
			<td><?php echo $d['vendor']; ?></td>
			<td><?php echo $d['qty']; ?></td>
			<td><?php echo $d['shop']; ?></td>
			<td><?php echo $d['cost_center']; ?></td>
			<td><?php echo $d['wh']; ?></td>
			<td><?php echo $d['doc_header_text']; ?></td>
			<td><?php echo $d['count_pn']; ?></td>
			<td><?php echo $d['kategori_problem']; ?></td>
			<td><?php echo $d['price']; ?></td>
			<td><?php echo $d['doc_gi']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>