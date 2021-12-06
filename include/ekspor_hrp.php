<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data HRP.xls");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ekspor Data HRP</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		th{
			font-weight: bold;
		}
	</style>
</head>
<body>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Refference</th>
			<th>Doc. Date</th>
			<th>Job No</th>
			<th>Part No</th>
			<th>Nama Material</th>
			<th>Vendor</th>
			<th>QTY</th>
			<th>Shop</th>
			<th>Cost Center</th>
			<th>WH</th>
			<th>Doc Header Text</th>
			<th>Count PN</th>
			<th>Kategori Problem</th>
			<th>Price</th>
			<th>Doc GI</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","db_adm");

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from hrp");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<!-- <td><?php echo $d['id']; ?></td> -->
			<td><?php echo $no++; ?></td>
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