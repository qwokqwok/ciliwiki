<?php
include 'koneksi.php';
$name = $_POST['name'];
$password = $_POST['password'];

$st=$conn->prepare("SELECT * FROM akun WHERE userName = ?;");
$st->bind_param("s",$name);
$st->execute();
$hasil=$st->get_result();
$row=$hasil->fetch_assoc();
if($row['userName'] == $name && $row['password'] == $password){
    setcookie('name', $name, time() + (60), "/");
    setcookie('password', $password, time() + (60), "/");
    $st->close();
    $conn->close();
    header('Location:index.php');
}else{
    echo "<script>
    window.location.href='login.php';
    alert('username atau password salah');
    </script>";
}