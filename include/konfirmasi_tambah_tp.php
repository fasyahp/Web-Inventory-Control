<?php 

	// $id 			= $_POST['id'];
	$date 			= $_POST['date'];
	$part_no 		= $_POST['part_no'];
	$part_name 		= $_POST['part_name'];
	$qty 			= $_POST['qty'];
	$material_slip 	= $_POST['material_slip'];
	$remark 		= $_POST['remark'];
	$header_text 	= $_POST['header_text'];
	$doc_tp 		= $_POST['doc_tp'];
	$usser 			= $_POST['usser'];
	$category 		= $_POST['category'];

	$tambah = 0;

	if(empty($date)){
		header("Location:index.php?include=tambah_tp&notif=tambahKosong&jenis=Date");
	}else if(empty($part_no)){
		header("Location:index.php?include=tambah_tp&notif=tambahKosong&jenis=Part No");
	}else if(empty($part_name)){
		header("Location:index.php?include=tambah_tp&notif=tambahKosong&jenis=part_name");
	}else if(empty($qty)){
		header("Location:index.php?include=tambah_tp&notif=tambahKosong&jenis=qty");
	}else if(empty($material_slip)){
		header("Location:index.php?include=tambah_tp&notif=tambahKosong&jenis=Material Slip");
	}else if(empty($remark)){
		header("Location:index.php?include=tambah_tp&notif=tambahKosong&jenis=Remark");
	}else if(empty($header_text)){
		header("Location:index.php?include=tambah_tp&notif=tambahKosong&jenis=Header Text");
	}else if(empty($doc_tp)){
		header("Location:index.php?include=tambah_tp&notif=tambahKosong&jenis=Doc TP");
	}else if(empty($usser)){
		header("Location:index.php?include=tambah_tp&notif=tambahKosong&jenis=Usser");
	}else if(empty($category)){
		header("Location:index.php?include=tambah_tp&notif=tambahKosong&jenis=Category");
	}else{
		$sql = "INSERT INTO `tp` (`id`, `date`, `part_no`, `part_name`, `qty`, `material_slip`, `remark`, `header_text`, `doc_tp`, `usser`, `category`) VALUES ('$id', '$date', '$part_no', '$part_name', '$qty', '$material_slip', '$remark', '$header_text', '$doc_tp', '$usser', '$category')";
		mysqli_query($koneksi,$sql);
		$tambah++;
	// header("Location: index.php?include=tp&notif=tambahberhasil");	
	header("location:index.php?include=tp&tambah=$tambah");
	}
?>