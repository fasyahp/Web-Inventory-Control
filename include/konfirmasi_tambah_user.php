<?php
    
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $_SESSION['nama'] = $nama;
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['level'] = $level;
    if(empty($nama)) {
        header("Location:index.php?include=tambah_user&notif=tambahKosong&jenis=nama");
    }else if(empty($email)) {
        header("Location:index.php?include=tambah_user&notif=tambahKosong&jenis=email");
    }else if(empty($username)) {
        header("Location:index.php?include=tambah_user&notif=tambahKosong&jenis=username");
    }else if(empty($password)) {
        header("Location:index.php?include=tambah_user&notif=tambahKosong&jenis=password");
    }else {
        $sql = "insert into `admin` (`nama`, `email`, `username`, `password`, `level`) 
        values ('$nama', '$email', '$username', '$password', '$level')";
        mysqli_query($koneksi, $sql);
        header("Location:index.php?include=user&notif=tambahberhasil");
    }
?>