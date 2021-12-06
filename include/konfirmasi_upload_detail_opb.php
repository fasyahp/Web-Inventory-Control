<?php
	
	$kode 	= $_POST['kode'];

	// $created_at = date("Y-m-d H:i:s");
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

	for ($i=2; $i<=$jumlah_baris ; $i++) { 
		
		$part_no     	= $data->val($i, 1);
		$part_name   	= $data->val($i, 2);
		$qty  			= $data->val($i, 3);
		$satuan   		= $data->val($i, 4);
		$doc_gi_sap   	= $data->val($i, 5);

		if($part_no != "" && $part_name != "" && $qty != "" && $satuan != "" ){

			// input data ke database (table master_barang)
			mysqli_query($koneksi,"INSERT into detail_opb (`id`, `opb_no`, `part_no`, `part_name`, `qty`, `satuan`, `doc_gi_sap`)values ('$id', '$kode', '$part_no', '$part_name', '$qty', '$satuan' , '$doc_gi_sap' )");
			$berhasil++;
		}
	}


	// hapus kembali file .xls yang di upload tadi
	unlink($_FILES['file']['name']);

	// alihkan halaman ke index.php
	// header("location: index.php?include=detail_opb&notif=tambahberhasil");
	header("location:index.php?include=detail_opb&berhasil=$berhasil");

?>