<?php 

	if(isset($_SESSION['id'])){
		$id = $_SESSION['id'];
		
		$key_uniq 		= $_POST['material'];
		$material 		= $_POST['material'];
		$material_desc 	= $_POST['material_desc'];
		$plant 			= $_POST['plant'];
		$sloc 			= $_POST['sloc'];
		$sloc_desc 		= $_POST['sloc_desc'];
		$month 			= $_POST['month'];
		$val_stock_val 	= $_POST['val_stock_val'];
		$sat_val_stock 	= $_POST['sat_val_stock'];
		$val_stock 		= $_POST['val_stock'];
		$satuan 		= $_POST['satuan'];

		$_SESSION['key_uniq'] 			= $key_uniq;
		$_SESSION['material'] 			= $material;
    	$_SESSION['material_desc'] 		= $material_desc;
    	$_SESSION['plant'] 				= $plant;
    	$_SESSION['sloc'] 				= $sloc;
    	$_SESSION['sloc_desc'] 			= $sloc_desc;
    	$_SESSION['month'] 				= $month;
    	$_SESSION['val_stock_val'] 		= $val_stock_val;
    	$_SESSION['sat_val_stock'] 		= $sat_val_stock;
    	$_SESSION['val_stock'] 			= $val_stock;
    	$_SESSION['satuan'] 			= $satuan;

    	$edit = 0;

    	if(empty($key_uniq)){
    		header("Location: index.php?include=edit_slow_moving&data=".$key_uniq."&notif=editkosong&jenis=Uniq");
    	}else if(empty($material)){
    		header("Location: index.php?include=edit_slow_moving&data=".$material."&notif=editkosong&jenis=material");
    	}else if(empty($material_desc)){
    		header("Location: index.php?include=edit_slow_moving&data=".$material_desc."&notif=editkosong&jenis=material desc");
    	}else if(empty($plant)){
    		header("Location: index.php?include=edit_slow_moving&data=".$plant."&notif=editkosong&jenis=plant");
    	}else if(empty($sloc)){
    		header("Location: index.php?include=edit_slow_moving&data=".$sloc."&notif=editkosong&jenis=sloc");
    	}else{
    		$sql = "UPDATE `summary_juli` SET `key_uniq` = '$key_uniq', `material` = '$material', `material_desc` = '$material_desc', `plant` = '$plant', `sloc` = '$sloc', `sloc_desc` = '$sloc_desc', `month` = '$month' , `val_stock_val` = '$val_stock_val', `sat_val_stock` = '$sat_val_stock', `val_stock` = '$val_stock', `satuan` = '$satuan' WHERE `summary_juli`.`id` = '$id' ";
				mysqli_query($koneksi,$sql);
				$edit++;
				// header("Location:index.php?include=header_opb&notif=editberhasil");
				header("location:index.php?include=slow_moving_juli&edit=$edit");
	  }
	}
?>