	<?php 

	$kode 			= $_POST['kode'];
	$part_no 		= $_POST['part_no'];
	$part_name 		= $_POST['part_name'];
	$qty 			= $_POST['qty'];
	$satuan 		= $_POST['satuan'];
	$doc_gi_sap 	= $_POST['doc_gi_sap'];

	// $_SESSION['kd_keluar'] = $kd_keluar;
 //    $_SESSION['nama_barang'] = $nama_barang;
 //    $_SESSION['qty'] = $qty;
 //    $_SESSION['tgl_masuk'] = $tgl_masuk;
 //    $_SESSION['harga_beli'] = $harga_beli;

	$tambah = 0;

	if(empty($kode)){
		header("Location:index.php?include=tambah_detail_opb&notif=tambahKosong&jenis=Kode OPB");
	}else if(empty($part_no)){
		header("Location:index.php?include=tambah_detail_opb&notif=tambahKosong&jenis=Part No");
	}else if(empty($part_name)){
		header("Location:index.php?include=tambah_detail_opb&notif=tambahKosong&jenis=Part Name");
	}else if(empty($qty)){
		header("Location:index.php?include=tambah_detail_opb&notif=tambahKosong&jenis=qty");
	}else if(empty($satuan)){
		header("Location:index.php?include=tambah_detail_opb&notif=tambahKosong&jenis=satuan");
	}else{
		$sql = "insert into `detail_opb` (`id`, `opb_no`, `part_no`, `part_name`, `qty`, `satuan`, `doc_gi_sap`) 
		values ('$id', '$kode', '$part_no', '$part_name', '$qty', '$satuan', '$doc_gi_sap')";
		mysqli_query($koneksi,$sql);
		$tambah++;
	header("Location: index.php?include=detail_opb&notif=tambahberhasil");
	header("location:index.php?include=detail_opb&tambah=$tambah");	
	}
	?>

	<!-- header("Location: index.php?include=tambah_hobi&notif=tambahkosong"); -->
