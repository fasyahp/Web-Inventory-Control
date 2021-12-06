	<?php 

	$key_end 		= $_POST['key_end'];
	$part_no 		= $_POST['part_no'];
	$part_name 		= $_POST['part_name'];
	$plant 			= $_POST['plant'];
	$sloc 			= $_POST['sloc'];
	$value 			= $_POST['value'];
	$stock 			= $_POST['stock'];
	$status 		= $_POST['status'];

	// $_SESSION['kd_keluar'] = $kd_keluar;
 //    $_SESSION['nama_barang'] = $nama_barang;
 //    $_SESSION['qty'] = $qty;
 //    $_SESSION['tgl_masuk'] = $tgl_masuk;
 //    $_SESSION['harga_beli'] = $harga_beli;

	$tambah = 0;

	if(empty($key_end)){
		header("Location:index.php?include=tambah_summary&notif=tambahKosong&jenis=Key");
	}else if(empty($part_no)){
		header("Location:index.php?include=tambah_summary&notif=tambahKosong&jenis=Part No");
	}else if(empty($part_name)){
		header("Location:index.php?include=tambah_summary&notif=tambahKosong&jenis=Part Name");
	}else if(empty($plant)){
		header("Location:index.php?include=tambah_summary&notif=tambahKosong&jenis=Plant");
	}else if(empty($sloc)){
		header("Location:index.php?include=tambah_summary&notif=tambahKosong&jenis=Sloc");
	}else{
		$sql = "insert into `summary_3` (`id`, `key_end`, `part_no`, `part_name`, `plant`, `sloc`, `value` , `stock` , `status`) 
		values ('$id', '$key_end', '$part_no', '$part_name', '$plant', '$sloc', '$value', '$stock' , '$status')";
		mysqli_query($koneksi,$sql);
		$tambah++;
	// header("Location: index.php?include=detail_opb&notif=tambahberhasil");
	header("location:index.php?include=summary&tambah=$tambah");	
	}
	?>

	<!-- header("Location: index.php?include=tambah_hobi&notif=tambahkosong"); -->
