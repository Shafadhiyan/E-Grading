<?php
$host="localhost";
$user="root";
$pass="";
$db="db_akademik";


	
$koneksi=mysqli_connect($host,$user,$pass,$db);

$pdo = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass);


if($koneksi){
	
}else{
	echo "Gagal koneksi";
}
?>