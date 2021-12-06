<?php 

	if(isset($_SESSION['id'])){
		$id = $_SESSION['id'];
		
		$key_end 	= $_POST['key_end'];
		$part_no 	= $_POST['part_no'];
		$part_name 	= $_POST['part_name'];
		$plant 		= $_POST['plant'];
		$sloc 		= $_POST['sloc'];
		$periode 	= $_POST['periode'];
		$value 		= $_POST['value'];
		$currency 	= $_POST['currency'];
		$stock 		= $_POST['stock'];
		$pcs 		= $_POST['pcs'];

		$_SESSION['key_end'] 	= $key_end;
		$_SESSION['part_no'] 	= $part_no;
    	$_SESSION['part_name'] 	= $part_name;
    	$_SESSION['plant'] 		= $plant;
    	$_SESSION['sloc'] 		= $sloc;
    	$_SESSION['periode'] 	= $periode;
    	$_SESSION['value'] 		= $value;
    	$_SESSION['currency'] 	= $currency;
    	$_SESSION['stock'] 		= $stock;
    	$_SESSION['pcs'] 		= $pcs;

    	$edit = 0;

    	if(empty($key_end)){
    		header("Location: index.php?include=edit_end_stock&data=".$key_end."&notif=editkosong&jenis=Key");
    	}else if(empty($part_no)){
    		header("Location: index.php?include=edit_end_stock&data=".$part_no."&notif=editkosong&jenis=Part No");
    	}else if(empty($part_name)){
    		header("Location: index.php?include=edit_end_stock&data=".$part_name."&notif=editkosong&jenis=Part Name");
    	}else if(empty($plant)){
    		header("Location: index.php?include=edit_end_stock&data=".$plant."&notif=editkosong&jenis=Plant");
    	}else if(empty($sloc)){
    		header("Location: index.php?include=edit_end_stock&data=".$sloc."&notif=editkosong&jenis=Februari");
    	}else{
    		$sql = "UPDATE `end_stock` SET `key_end` = '$key_end', `part_no` = '$part_no', `part_name` = '$part_name', `plant` = '$plant', `sloc` = '$sloc', `periode` = '$periode', `value` = '$value' , `currency` = '$currency', `stock` = '$stock', `pcs` = '$pcs' WHERE `end_stock`.`id` = '$id' ";
				mysqli_query($koneksi,$sql);
				$edit++;
				// header("Location:index.php?include=header_opb&notif=editberhasil");
				header("location:index.php?include=end_stock&edit=$edit");
	  }
	}
?>