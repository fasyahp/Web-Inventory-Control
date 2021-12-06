<?php 
	
	$kode			= $_POST['kode'];
	$deperteman 	= $_POST['deperteman'];
	$kebutuhan 		= $_POST['kebutuhan'];
	$cost_center 	= $_POST['cost_center'];
	$gl_account 	= $_POST['gl_account'];
	$refferensi 	= $_POST['refferensi'];
	
	$tambah = 0;

	if(empty($deperteman)){
		header("Location:index.php?include=tambah_header_opb&notif=tambahKosong&jenis=Deperteman");
	}else if(empty($kebutuhan)){
		header("Location:index.php?include=tambah_header_opb&notif=tambahKosong&jenis=Kebutuhan");
	}else if(empty($cost_center)){
		header("Location:index.php?include=tambah_header_opb&notif=tambahKosong&jenis=Cost Center");
	}else if(empty($gl_account)){
		header("Location:index.php?include=tambah_header_opb&notif=tambahKosong&jenis=Gl Account");
	}else if(empty($refferensi)){
		header("Location:index.php?include=tambah_header_opb&notif=tambahKosong&jenis=Refferensi");
	}else{
		$sql = "INSERT INTO `header_opb` (`opb_no`, `deperteman`, `kebutuhan`, `cost_center`, `gl_account`, `refferensi`) VALUES ('$kode', '$deperteman', '$kebutuhan', '$cost_center', '$gl_account', '$refferensi')";
		mysqli_query($koneksi,$sql);
		$tambah++;
	// header("Location: index.php?include=header_opb&notif=tambahberhasil");	
	header("location:index.php?include=header_opb&tambah=$tambah");
	}
?>