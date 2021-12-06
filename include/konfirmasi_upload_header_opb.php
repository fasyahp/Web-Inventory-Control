<?php
// upload file xls
$target = basename($_FILES['file']['name']) ;
move_uploaded_file($_FILES['file']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['file']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['file']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$opb_no		     		= $data->val($i, 1);
	$deperteman     		= $data->val($i, 2);
	$kebutuhan   			= $data->val($i, 3);
	$cost_center  			= $data->val($i, 4);
	$gl_account  			= $data->val($i, 5);
	$refferensi  			= $data->val($i, 6);

	if($opb_no != "" && $deperteman != "" && $kebutuhan != "" && $cost_center != "" && $gl_account != "" && $refferensi != ""){

		// input data ke database (table master_barang)
		mysqli_query($koneksi,"INSERT into header_opb (`opb_no`, `deperteman`, `kebutuhan`, `cost_center`, `gl_account`, `refferensi`) values('$opb_no','$deperteman', '$kebutuhan', '$cost_center', '$gl_account', '$refferensi' )");
		$berhasil++;
		
	// } else if (!$deperteman) {
	// 	mysqli_query($koneksi,"INSERT into header_opb (`opb_no`, `deperteman`, `kebutuhan`, `cost_center`, `gl_account`, `refferensi`) 
	// 	values('$opb_no','-', '$kebutuhan', '$cost_center', '$gl_account', '$refferensi' )");
	// 	$berhasil++;
	// } else if (!$kebutuhan) {
	// 	mysqli_query($koneksi,"INSERT into header_opb (`opb_no`, `deperteman`, `kebutuhan`, `cost_center`, `gl_account`, `refferensi`) 
	// 	values('$opb_no','$deperteman', '-', '$cost_center', '$gl_account', '$refferensi' )");
	// 	$berhasil++;
	// } else if (!$cost_center) {
	// 	mysqli_query($koneksi,"INSERT into header_opb (`opb_no`, `deperteman`, `kebutuhan`, `cost_center`, `gl_account`, `refferensi`) 
	// 	values('$opb_no','$deperteman', '$kebutuhan', '-', '$gl_account', '$refferensi' )");
	// 	$berhasil++;
	// } else if (!$gl_account) {
	// 	mysqli_query($koneksi,"INSERT into header_opb (`opb_no`, `deperteman`, `kebutuhan`, `cost_center`, `gl_account`, `refferensi`) 
	// 	values('$opb_no','$deperteman', '$kebutuhan', '$cost_center', '-', '$refferensi' )");
	// 	$berhasil++;
	// } else if (!$refferensi) {
	// 	mysqli_query($koneksi,"INSERT into header_opb (`opb_no`, `deperteman`, `kebutuhan`, `cost_center`, `gl_account`, `refferensi`) 
	// 	values('$opb_no','$deperteman', '$kebutuhan', '$cost_center', '$gl_account', '-' )");
	// 	$berhasil++;
	} 
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['file']['name']);

// alihkan halaman ke index.php
// header("location: index.php?include=header_opb&notif=tambahberhasil");
header("location:index.php?include=header_opb&berhasil=$berhasil");
?>