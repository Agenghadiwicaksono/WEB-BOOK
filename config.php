<?php
$host="localhost";
$user="root";
$pass="";
$db="db_note";

$conn =mysqli_connect($host,$user,$pass,$db);
if($conn){
    // echo "koneksi berhasil";
}else{
    echo "gagal";
}

mysqli_select_db($conn,$db);
?>