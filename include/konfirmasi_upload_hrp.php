<!--  -->
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
	// $id     			= $data->val($i, 1);
	$refference   		= addslashes($data->val($i, 1));
	$doc_date  			= addslashes($data->val($i, 2));
	$job_no 			= addslashes($data->val($i, 3));
	$part_no  			= addslashes($data->val($i, 4));
	$nama_material  	= addslashes($data->val($i, 5));
	$vendor  			= addslashes($data->val($i, 6));
	$qty 				= addslashes($data->val($i, 7));
	$shop  				= addslashes($data->val($i, 8));
	$cost_center  		= addslashes($data->val($i, 9));
	$wh  				= addslashes($data->val($i, 10));
	$doc_header_text  	= addslashes($data->val($i, 11));
	$count_pn  			= addslashes($data->val($i, 12));
	$kategori_problem  	= addslashes($data->val($i, 13));
	$price  			= addslashes($data->val($i, 14));
	$doc_gi  			= addslashes($data->val($i, 15));

	if($refference != "" && $doc_date != "" && $job_no != "" && $part_no != "" && $nama_material != "" && $vendor != "" && $qty != "" && $shop != "" && $cost_center != "" && $wh != "" && $doc_header_text != "" && $count_pn != "" && $kategori_problem != "" && $price != "" && $doc_gi != "" ){

		// input data ke database (table hrp)
		mysqli_query($koneksi,"INSERT into hrp (`refference`, `doc_date`, `job_no`, `part_no`, `nama_material`, `vendor`, `qty`, `shop`, `cost_center`, `wh`, `doc_header_text`, `count_pn`, `kategori_problem`, `price`, `doc_gi`)values ('$refference', '$doc_date', '$job_no', '$part_no', '$nama_material', '$vendor', '$qty', '$shop', '$cost_center', '$wh', '$doc_header_text', '$count_pn', '$kategori_problem', '$price', '$doc_gi')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['file']['name']);

// alihkan halaman ke index.php
// header("location: index.php?include=hrp&notif=tambahberhasil");
header("location:index.php?include=hrp&berhasil=$berhasil");
?>
