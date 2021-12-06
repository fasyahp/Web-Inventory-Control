<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Generate Template OPB.xls");
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
			<th width="30%">OPB No.</th>
			<th width="30%">Part No</th>
			<th width="300%">Part Name</th>
			<th width="10%">QTY</th>
			<th width="15%">Satuan</th>
			<th width="15%">Doc GI SAP</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","db_adm");

		// menampilkan data pegawai
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT id, opb_no, part_no, part_name, qty, satuan, doc_gi_sap FROM detail_opb WHERE doc_gi_sap = '' ");
		// $no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<!-- <td><?php echo $no++; ?></td> -->
			<td><?php echo $d['id']; ?></td>
			<td><?php echo $d['opb_no']; ?></td>
			<td><?php echo $d['part_no']; ?></td>
			<td><?php echo $d['part_name']; ?></td>
			<td><?php echo $d['qty']; ?></td>
			<td><?php echo $d['satuan']; ?></td>
			<td><?php echo $d['doc_gi_sap']; ?></td>
		</tr>
		<?php 
		}
		?>
		<!-- <tr>
			<?php 
				$kode 	= $_POST['kode'];
				$_SESSION['kode'] 			= $kode;

				$data = mysqli_query($koneksi,"SELECT * FROM `detail_opb` ");
			 ?>
			 <td><?php echo $data['kode']; ?></td>
		</tr> -->
	</table>
</body>
</html>