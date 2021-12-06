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
	// $id     		= $data->val($i, 1);
	$date   		= addslashes($data->val($i, 1));
	$part_no  		= addslashes($data->val($i, 2));
	$part_name 		= addslashes($data->val($i, 3));
	$qty  			= addslashes($data->val($i, 4));
	$material_slip  = addslashes($data->val($i, 5));
	$remark  		= addslashes($data->val($i, 6));
	$header_text 	= addslashes($data->val($i, 7));
	$doc_tp  		= addslashes($data->val($i, 8));
	$usser  		= addslashes($data->val($i, 9));
	$category  		= addslashes($data->val($i, 10));

	if($date != "" && $part_no != "" && $part_name != "" && $qty != "" && $material_slip != "" && $remark != "" && $header_text != "" && $doc_tp != "" && $usser != "" && $category != "" ){

		// input data ke database (table hrp)
		mysqli_query($koneksi,"INSERT into tp (`date`, `part_no`, `part_name`, `qty`, `material_slip`, `remark`, `header_text`, `doc_tp`, `usser`, `category`)values ('$date', '$part_no', '$part_name', '$qty', '$material_slip', '$remark', '$header_text', '$doc_tp', '$usser', '$category')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['file']['name']);

// alihkan halaman ke index.php

header("location:index.php?include=tp&berhasil=$berhasil");

?>