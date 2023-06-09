<?php
$conn = new mysqli("localhost","root","","uas");
if(!$conn){
    die("koneksi gagal".mysqli_connect_errno()."-".mysqli_connect_error());
}



