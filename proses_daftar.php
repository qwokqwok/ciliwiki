<?php
include 'koneksi.php';
$name = $_POST['name'];
$password = $_POST['password'];

$st=$conn->prepare("SELECT * FROM akun WHERE userName=?");
$st->bind_param("s",$name);
$st->execute();
$hasil=$st->get_result();
$row=$hasil->fetch_assoc();
if ($row['userName'] != null) {
    echo "<script>
    window.location.href='daftar.php';
    alert('username telah digunakan');
    </script>";
} else {
    $st=$conn->prepare("INSERT INTO akun(userName,password) VALUES(?,?);");
    $st->bind_param("ss",$name,$password);
    $st->execute();
    $st->close();
    $conn->close();   
    header("location:login.php");
}
