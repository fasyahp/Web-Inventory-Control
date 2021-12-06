<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Master Barang.xls");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ekspor Data Master Barang</title>
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
			<!-- <th>No</th> -->
			<th>ID No.</th>
			<th>PART NUMBER</th>
			<th>JOB NO.</th>
			<th>QTY/KBN</th>
			<th>PART NAME</th>
			<th>SUPPLIER NAME</th>
			<th>SHOP CODE</th>
			<th>ARS</th>
			<th>QTY ORDER</th>
			<th>No. PO/SO</th>
			<th>Cost Center</th>
			<th>GL Account</th>
			<th>No. Referensi Acc</th>
			<th>Setting Part (PCS)</th>
			<th>No. PKB WH</th>
			<th>No. Good Issue/TP</th>	
			<th>Remarks</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","db_adm");

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from master_barang");
		// $no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $d['id']; ?></td>
			<td><?php echo $d['part_number']; ?></td>
			<td><?php echo $d['job_no']; ?></td>
			<td><?php echo $d['qty']; ?></td>
			<td><?php echo $d['part_name']; ?></td>
			<td><?php echo $d['supplier_name']; ?></td>
			<td><?php echo $d['shop_code']; ?></td>
			<td><?php echo $d['ars']; ?></td>
			<td><?php echo $d['qty_order']; ?></td>
			<td><?php echo $d['no_po_so']; ?></td>
			<td><?php echo $d['cost_center']; ?></td>
			<td><?php echo $d['gl_account']; ?></td>
			<td><?php echo $d['no_referensi_acc']; ?></td>
			<td><?php echo $d['setting_part']; ?></td>
			<td><?php echo $d['no_pkb_wh']; ?></td>
			<td><?php echo $d['no_good_issue']; ?></td>
			<td><?php echo $d['remarks']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>