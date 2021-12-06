<?php
// Update file xls
$target = basename($_FILES['file']['name']) ;
move_uploaded_file($_FILES['file']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['file']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['file']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$update = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$id     	= $data->val($i, 1);
	$doc_gi  	= $data->val($i, 6);
	// $telepon  = $data->val($i, 3);

	if($id != "" && $doc_gi != ""){
		// input data ke database (table master_barang)
		mysqli_query($koneksi,"UPDATE `hrp` SET `doc_gi` = '$doc_gi' WHERE `id` ='$id' ");
		$update++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['file']['name']);

// alihkan halaman ke index.php
// header("location: index.php?include=hrp&notif=editberhasil");
header("location:index.php?include=hrp&update=$update");
?>
