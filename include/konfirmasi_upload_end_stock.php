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
	$key_end		    = addslashes($data->val($i, 1));
	$part_no     		= addslashes($data->val($i, 2));
	$part_name  		= addslashes($data->val($i, 3));
	$plant  			= addslashes($data->val($i, 4));
	$sloc  				= addslashes($data->val($i, 5));
	$periode  			= addslashes($data->val($i, 6));
	$value  			= addslashes($data->val($i, 7));
	$currency  			= addslashes($data->val($i, 8));
	$stock  			= addslashes($data->val($i, 9));
	$pcs  				= addslashes($data->val($i, 10));

	if($key_end != "" && $part_no != "" && $part_name != "" && $plant != "" && $sloc != "" && $periode != "" && $value != "" && $currency != "" && $stock != "" && $pcs != "" ){

		// input data ke database (table master_barang)
		mysqli_query($koneksi,"INSERT into end_stock (`key_end`, `part_no`, `part_name`, `plant`, `sloc`, `periode`, `value`, `currency`, `stock`, `pcs` ) 
			values('$key_end','$part_no', '$part_name', '$plant', '$sloc', '$periode', '$value', '$currency', '$stock', '$pcs' )");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['file']['name']);

// alihkan halaman ke index.php
// header("location: index.php?include=header_opb&notif=tambahberhasil");
header("location:index.php?include=end_stock&berhasil=$berhasil");
?>