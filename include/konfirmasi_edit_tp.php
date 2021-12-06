<?php 

	if(isset($_SESSION['id'])){
		$id = $_SESSION['id'];
		
		$date 			= $_POST['date'];
		$part_no 		= $_POST['part_no'];
		$part_name 		= $_POST['part_name'];
		$qty 			= $_POST['qty'];
		$material_slip 	= $_POST['material_slip'];
		$remark 		= $_POST['remark'];
		$header_text 	= $_POST['header_text'];
		$doc_tp 		= $_POST['doc_tp'];
		$usser 			= $_POST['usser'];
		$category 		= $_POST['category'];

		$_SESSION['date'] 			= $date;
		$_SESSION['part_no'] 		= $part_no;
    	$_SESSION['part_name'] 		= $part_name;
    	$_SESSION['qty'] 			= $qty;
    	$_SESSION['material_slip'] 	= $material_slip;
    	$_SESSION['remark'] 		= $remark;
    	$_SESSION['header_text'] 	= $header_text;
    	$_SESSION['doc_tp'] 		= $doc_tp;
    	$_SESSION['usser'] 			= $usser;
    	$_SESSION['category'] 		= $category;

    	$edit = 0;

    	if(empty($date)){
    		header("Location: index.php?include=edit_tp&data=".$date."&notif=editkosong&jenis=Date");
    	}else if(empty($part_no)){
    		header("Location: index.php?include=edit_tp&data=".$part_no."&notif=editkosong&jenis=Part No");
    	}else if(empty($part_name)){
    		header("Location: index.php?include=edit_tp&data=".$part_name."&notif=editkosong&jenis=Part Name");
    	}else if(empty($qty)){
    		header("Location: index.php?include=edit_tp&data=".$qty."&notif=editkosong&jenis=QTY");
    	}else if(empty($material_slip)){
    		header("Location: index.php?include=edit_tp&data=".$material_slip."&notif=editkosong&jenis=Material Slip");
    	}else if(empty($remark)){
    		header("Location: index.php?include=edit_tp&data=".$remark."&notif=editkosong&jenis=Remark");
    	}else if(empty($header_text)){
    		header("Location: index.php?include=edit_tp&data=".$header_text."&notif=editkosong&jenis=Header Text");
    	}else if(empty($doc_tp)){
    		header("Location: index.php?include=edit_tp&data=".$doc_tp."&notif=editkosong&jenis=Doc TP");
    	}else if(empty($usser)){
    		header("Location: index.php?include=edit_tp&data=".$usser."&notif=editkosong&jenis=Usser");
    	}else if(empty($category)){
    		header("Location: index.php?include=edit_tp&data=".$category."&notif=editkosong&jenis=Category");
    	}else{
    		$sql = "UPDATE `tp` SET `date` = '$date', `part_no` = '$part_no', `part_name` = '$part_name', `qty` = '$qty', `material_slip` = '$material_slip', `remark` = '$remark', `header_text` = '$header_text', `doc_tp` = '$doc_tp', `usser` = '$usser', `category` = '$category' where `id`='$id'";
				mysqli_query($koneksi,$sql);
				$edit++;

				// header("Location:index.php?include=tp&notif=editberhasil");
				header("location:index.php?include=tp&edit=$edit");
	  }
	}
?>