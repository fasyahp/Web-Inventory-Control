<?php 

	if(isset($_SESSION['id'])){
		$id = $_SESSION['id'];
		
		$refference 			= $_POST['refference'];
		$doc_date 		= $_POST['doc_date'];
		$job_no 		= $_POST['job_no'];
		$part_no 			= $_POST['part_no'];
		$nama_material 	= $_POST['nama_material'];
		$vendor 		= $_POST['vendor'];
		$qty 	= $_POST['qty'];
		$shop 		= $_POST['shop'];
		$cost_center 			= $_POST['cost_center'];
		$wh 		= $_POST['wh'];
		$doc_header_text 		= $_POST['doc_header_text'];
		$count_pn 		= $_POST['count_pn'];
		$kategori_problem 		= $_POST['kategori_problem'];
		$price 		= $_POST['price'];
		$doc_gi 		= $_POST['doc_gi'];

		$_SESSION['refference'] 		= $refference;
		$_SESSION['doc_date'] 			= $doc_date;
    	$_SESSION['job_no'] 			= $job_no;
    	$_SESSION['part_no'] 			= $part_no;
    	$_SESSION['nama_material'] 		= $nama_material;
    	$_SESSION['vendor'] 			= $vendor;
    	$_SESSION['qty'] 				= $qty;
    	$_SESSION['shop'] 				= $shop;
    	$_SESSION['cost_center'] 		= $cost_center;
    	$_SESSION['wh'] 				= $wh;
    	$_SESSION['doc_header_text'] 	= $doc_header_text;
    	$_SESSION['count_pn'] 			= $count_pn;
    	$_SESSION['kategori_problem'] 	= $kategori_problem;
    	$_SESSION['price'] 				= $price;
    	$_SESSION['doc_gi'] 			= $doc_gi;

    	$edit = 0;

    	if(empty($refference)){
    		header("Location: index.php?include=edit_hrp&data=".$refference."&notif=editkosong&jenis=Refference");
    	}else if(empty($doc_date)){
    		header("Location: index.php?include=edit_hrp&data=".$doc_date."&notif=editkosong&jenis=Doc date");
    	}else if(empty($job_no)){
    		header("Location: index.php?include=edit_hrp&data=".$job_no."&notif=editkosong&jenis=Job No");
    	}else if(empty($part_no)){
    		header("Location: index.php?include=edit_hrp&data=".$part_no."&notif=editkosong&jenis=Part No");
    	}else if(empty($nama_material)){
    		header("Location: index.php?include=edit_hrp&data=".$nama_material."&notif=editkosong&jenis=Nama Material");
    	}else if(empty($vendor)){
    		header("Location: index.php?include=edit_hrp&data=".$vendor."&notif=editkosong&jenis=Vendor");
    	}else if(empty($qty)){
    		header("Location: index.php?include=edit_hrp&data=".$qty."&notif=editkosong&jenis=QTY");
    	}else if(empty($shop)){
    		header("Location: index.php?include=edit_hrp&data=".$shop."&notif=editkosong&jenis=Shop");
    	}else if(empty($cost_center)){
    		header("Location: index.php?include=edit_hrp&data=".$cost_center."&notif=editkosong&jenis=Cost Center");
    	}else if(empty($wh)){
    		header("Location: index.php?include=edit_hrp&data=".$wh."&notif=editkosong&jenis=WH");
    	}else if(empty($doc_header_text)){
    		header("Location: index.php?include=edit_hrp&data=".$doc_header_text."&notif=editkosong&jenis=Doc Header Text");
    	}else if(empty($count_pn)){
    		header("Location: index.php?include=edit_hrp&data=".$count_pn."&notif=editkosong&jenis=Count PN");
    	}else if(empty($kategori_problem)){
    		header("Location: index.php?include=edit_hrp&data=".$kategori_problem."&notif=editkosong&jenis=Kategori problem");
    	}else if(empty($price)){
    		header("Location: index.php?include=edit_hrp&data=".$price."&notif=editkosong&jenis=Price");
    	}else if(empty($doc_gi)){
    		header("Location: index.php?include=edit_hrp&data=".$doc_gi."&notif=editkosong&jenis=Doc GI");
    	}else{
    		$sql = "UPDATE `hrp` SET `refference` = '$refference', `doc_date` = '$doc_date', `job_no` = '$job_no', `part_no` = '$part_no', `nama_material` = '$nama_material', `vendor` = '$vendor', `qty` = '$qty', `shop` = '$shop', `cost_center` = '$cost_center', `wh` = '$wh', `doc_header_text` = '$doc_header_text', `count_pn` = '$count_pn', `kategori_problem` = '$kategori_problem', `price` = '$price', `doc_gi` = '$doc_gi' WHERE `hrp`.`id` = '$id'";
				mysqli_query($koneksi,$sql);
				$edit++;

				// header("Location:index.php?include=hrp&notif=editberhasil");
				header("location:index.php?include=hrp&edit=$edit");
	  }
	}
?>