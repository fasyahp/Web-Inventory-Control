	<?php 
	
	if(isset($_SESSION['id_admin'])){
	  $id_admin = $_SESSION['id_admin'];
	  $nama = $_POST['nama'];
	  $email = $_POST['email'];
	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  $level = $_POST['level'];
	 
		if(empty($nama)){
	 	    header("Location: index.php?include=edit_user&data=".$nama."&notif=editkosong");
	 	}else if(empty($email)){
	 		header("Location: index.php?include=edit_user&data=".$email."&notif=editkosong");
	 	}else if(empty($username)){
	 		header("Location: index.php?include=edit_user&data=".$username."&notif=editkosong");
	 	}else if(empty($password)){
	 		header("Location: index.php?include=edit_user&data=".$password."&notif=editkosong");
		}else{
			$sql = "update `admin` set `nama`='$nama', `email`='$email', `username`='$username', `password`= '$password', `level`='$level' where `admin`.`id_admin`='$id_admin'";
			mysqli_query($koneksi,$sql);
			header("Location: index.php?include=user&notif=editberhasil");
	  }
	}
	?>
