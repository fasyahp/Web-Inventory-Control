<?php 

	if(isset($_SESSION['id'])){
		$id = $_SESSION['id'];
		
		$kode 			= $_POST['kode'];
		$part_no 		= $_POST['part_no'];
		$part_name 		= $_POST['part_name'];
		$qty 			= $_POST['qty'];
		$satuan 		= $_POST['satuan'];
		$doc_gi_sap 	= $_POST['doc_gi_sap'];
		

		$_SESSION['kode'] 			= $kode;
		$_SESSION['part_no'] 		= $part_no;
    	$_SESSION['part_name'] 		= $part_name;
    	$_SESSION['qty'] 			= $qty;
    	$_SESSION['satuan'] 		= $satuan;
    	$_SESSION['doc_gi_sap'] 	= $doc_gi_sap;

    	$edit = 0;

    	if(empty($kode)){
    		header("Location: index.php?include=edit_detail_opb&data=".$kode."&notif=editkosong&jenis=Kode OPB");
    	}else if(empty($part_no)){
    		header("Location: index.php?include=edit_detail_opb&data=".$part_no."&notif=editkosong&jenis=part no");
    	}else if(empty($part_name)){
    		header("Location: index.php?include=edit_detail_opb&data=".$part_name."&notif=editkosong&jenis=cost Center");
    	}else if(empty($qty)){
    		header("Location: index.php?include=edit_detail_opb&data=".$qty."&notif=editkosong&jenis=GL Account");
    	}else if(empty($satuan)){
    		header("Location: index.php?include=edit_detail_opb&data=".$satuan."&notif=editkosong&jenis=refferensi");
    	}else{
    		$sql = "UPDATE `detail_opb` SET `opb_no` = '$kode', `part_no` = '$part_no', `part_name` = '$part_name', `qty` = '$qty', `satuan` = '$satuan', `doc_gi_sap` = '$doc_gi_sap' WHERE `detail_opb`.`id` = '$id'";
				mysqli_query($koneksi,$sql);
				$edit++;

				// header("Location:index.php?include=detail_opb&notif=editberhasil");
				header("location:index.php?include=detail_opb&edit=$edit");
	  
	  	}
	}
?>