<?php 

	if(isset($_SESSION['opb_no'])){
		$opb_no = $_SESSION['opb_no'];
		
		$deperteman 	= $_POST['deperteman'];
		$kebutuhan 		= $_POST['kebutuhan'];
		$cost_center 	= $_POST['cost_center'];
		$gl_account 	= $_POST['gl_account'];
		$refferensi 	= $_POST['refferensi'];
		

		$_SESSION['deperteman'] 		= $deperteman;
		$_SESSION['kebutuhan'] 			= $kebutuhan;
    	$_SESSION['cost_center'] 		= $cost_center;
    	$_SESSION['gl_account'] 		= $gl_account;
    	$_SESSION['refferensi'] 		= $refferensi;

    	$edit = 0;

    	if(empty($deperteman)){
    		header("Location: index.php?include=edit_header_opb&data=".$deperteman."&notif=editkosong&jenis=deperteman");
    	}else if(empty($kebutuhan)){
    		header("Location: index.php?include=edit_header_opb&data=".$kebutuhan."&notif=editkosong&jenis=kebutuhan");
    	}else if(empty($cost_center)){
    		header("Location: index.php?include=edit_header_opb&data=".$cost_center."&notif=editkosong&jenis=cost Center");
    	}else if(empty($gl_account)){
    		header("Location: index.php?include=edit_header_opb&data=".$gl_account."&notif=editkosong&jenis=GL Account");
    	}else if(empty($refferensi)){
    		header("Location: index.php?include=edit_header_opb&data=".$refferensi."&notif=editkosong&jenis=refferensi");
    	}else{
    		$sql = "UPDATE `header_opb` SET `deperteman` = '$deperteman', `kebutuhan` = '$kebutuhan', `cost_center` = '$cost_center', `gl_account` = '$gl_account', `refferensi` = '$refferensi' WHERE `header_opb`.`opb_no` = '$opb_no'";
				mysqli_query($koneksi,$sql);
				$edit++;
				// header("Location:index.php?include=header_opb&notif=editberhasil");
				header("location:index.php?include=header_opb&edit=$edit");
	  }
	}
?>