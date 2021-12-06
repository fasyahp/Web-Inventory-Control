<?php 

	// $id 				= $_POST['id'];
	$refference 		= $_POST['refference'];
	$doc_date 			= $_POST['doc_date'];
	$job_no 			= $_POST['job_no'];
	$part_no 			= $_POST['part_no'];
	$nama_material 		= $_POST['nama_material'];
	$vendor 			= $_POST['vendor'];
	$qty 				= $_POST['qty'];
	$shop 				= $_POST['shop'];
	$cost_center 		= $_POST['cost_center'];
	$wh 				= $_POST['wh'];
	$doc_header_text 	= $_POST['doc_header_text'];
	$count_pn 			= $_POST['count_pn'];
	$kategori_problem 	= $_POST['kategori_problem'];
	$price 				= $_POST['price'];
	$doc_gi 			= $_POST['doc_gi'];

	$tambah = 0;

	if(empty($refference)){
		header("Location:index.php?include=tambah_hrp&notif=tambahKosong&jenis=Refference");
	}else if(empty($doc_date)){
		header("Location:index.php?include=tambah_hrp&notif=tambahKosong&jenis=Doc date");
	}else if(empty($job_no)){
		header("Location:index.php?include=tambah_hrp&notif=tambahKosong&jenis=Job no");
	}else if(empty($part_no)){
		header("Location:index.php?include=tambah_hrp&notif=tambahKosong&jenis=part no");
	}else if(empty($nama_material)){
		header("Location:index.php?include=tambah_hrp&notif=tambahKosong&jenis=Nama Material");
	}else if(empty($vendor)){
		header("Location:index.php?include=tambah_hrp&notif=tambahKosong&jenis=Vendor");
	}else if(empty($qty)){
		header("Location:index.php?include=tambah_hrp&notif=tambahKosong&jenis=Qty");
	}else if(empty($shop)){
		header("Location:index.php?include=tambah_hrp&notif=tambahKosong&jenis=Shop");
	}else if(empty($cost_center)){
		header("Location:index.php?include=tambah_hrp&notif=tambahKosong&jenis=cost center");
	}else if(empty($wh)){
		header("Location:index.php?include=tambah_hrp&notif=tambahKosong&jenis=wh");
	}else if(empty($doc_header_text)){
		header("Location:index.php?include=tambah_hrp&notif=tambahKosong&jenis=doc header text");
	}else if(empty($count_pn)){
		header("Location:index.php?include=tambah_hrp&notif=tambahKosong&jenis=count pn");
	}else if(empty($kategori_problem)){
		header("Location:index.php?include=tambah_hrp&notif=tambahKosong&jenis=kategori problem");
	}else if(empty($price)){
		header("Location:index.php?include=tambah_hrp&notif=tambahKosong&jenis=price");
	}else if(empty($doc_gi)){
		header("Location:index.php?include=tambah_hrp&notif=tambahKosong&jenis=doc gi");
	}else{
		$sql = "INSERT INTO `hrp` (`id`, `refference`, `doc_date`, `job_no`, `part_no`, `nama_material`, `vendor`, `qty`, `shop`, `cost_center`, `wh`, `doc_header_text`, `count_pn`, `kategori_problem`, `price`, `doc_gi`) VALUES ('$id', '$refference', '$doc_date', '$job_no', '$part_no', '$nama_material', '$vendor', '$qty', '$shop', '$cost_center', '$wh', '$doc_header_text', '$count_pn', '$kategori_problem', '$price', '$doc_gi')";
		mysqli_query($koneksi,$sql);
		$tambah++;
	// header("Location: index.php?include=hrp&notif=tambahberhasil");
	header("location:index.php?include=hrp&tambah=$tambah");	
	}
?>