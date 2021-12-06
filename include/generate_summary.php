<?php 

	$koneksi = mysqli_connect("localhost","root","","db_adm");

	$query = mysqli_query($koneksi, "SELECT * FROM `summary_3` WHERE `key_end` ='$key_end'");
	// $summary = mysqli_fetch_array($query);
	while($summary = mysqli_fetch_array($query)){
		$summary['key_end'];
		$summary['part_no'];
		$summary['part_name'];
		$summary['plant'];
		$summary['sloc'];
		$summary['value'];
		$summary['stock'];

		$key_end 		= $summary['key_end'];
		$part_no 		= $summary['part_no'];
		$part_name 		= $summary['part_name'];
		$plant 			= $summary['plant'];
		$sloc 			= $summary['sloc'];
		$value 			= $summary['value'];
		$stock 			= $summary['stock'];

		if($key_end != "" && $part_no != "" && $part_name != "" && $plant != "" && $sloc != "" && $value != "" && $stock != "" && $status != "" ){

			// input data ke database (table summary 3)
			$data = mysqli_query($koneksi,"SELECT COUNT(*) FROM `end_stock` WHERE `key_end` = '$key_end' ");
			// $berhasil++;
		}else if($key_end != "" && $part_no != "" && $part_name != "" && $plant != "" && $sloc != "" && $value != "" && $stock != "" && $status != "" ){
			$data = mysqli_query($koneksi,"SELECT * FROM `end_stock` WHERE `key_end` = '$key_end' ");
		}else{

			$data = mysqli_query($koneksi,"INSERT into summary_3 (`key_end`, `part_no`, `part_name`, `plant`, `sloc`, `value`, `stock`, `status` ) 
				values('$key_end','$part_no', '$part_name', '$plant', '$sloc', '$value', '$stock', '$status' )");

			// if ($stock == $stock) {
			// 	echo "Slow Moving";
			// }else{
			// 	echo "Bukan Slow Moving";
			// }
		}
	}

 ?>