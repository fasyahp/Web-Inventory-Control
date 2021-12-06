<?php 

	if(isset($_SESSION['id'])){
		$id = $_SESSION['id'];
		
		$key_end 	= $_POST['key_end'];
		$part_no 	= $_POST['part_no'];
		$part_name 	= $_POST['part_name'];
		$plant 		= $_POST['plant'];
		$sloc 		= $_POST['sloc'];
		$value 		= $_POST['value'];
		$stock 		= $_POST['stock'];
		$status 		= $_POST['status'];

		$_SESSION['key_end'] 	= $key_end;
		$_SESSION['part_no'] 	= $part_no;
    	$_SESSION['part_name'] 	= $part_name;
    	$_SESSION['plant'] 		= $plant;
    	$_SESSION['sloc'] 		= $sloc;
    	$_SESSION['value'] 		= $value;
    	$_SESSION['stock'] 		= $stock;
    	$_SESSION['status'] 	= $status;

    	$edit = 0;

    	if(empty($key_end)){
    		header("Location: index.php?include=edit_summary&data=".$key_end."&notif=editkosong&jenis=Key");
    	}else if(empty($part_no)){
    		header("Location: index.php?include=edit_summary&data=".$part_no."&notif=editkosong&jenis=Part No");
    	}else if(empty($part_name)){
    		header("Location: index.php?include=edit_summary&data=".$part_name."&notif=editkosong&jenis=Part Name");
    	}else if(empty($plant)){
    		header("Location: index.php?include=edit_summary&data=".$plant."&notif=editkosong&jenis=Plant");
    	}else if(empty($sloc)){
    		header("Location: index.php?include=edit_summary&data=".$sloc."&notif=editkosong&jenis=Februari");
    	}else{
    		$sql = "UPDATE `summary_3` SET `key_end` = '$key_end', `part_no` = '$part_no', `part_name` = '$part_name', `plant` = '$plant', `sloc` = '$sloc', `value` = '$value' , `stock` = '$stock', `status` = '$status' WHERE `summary_3`.`id` = '$id' ";
				mysqli_query($koneksi,$sql);
				$edit++;
				// header("Location:index.php?include=header_opb&notif=editberhasil");
				header("location:index.php?include=summary&edit=$edit");
	  }
	}
?>