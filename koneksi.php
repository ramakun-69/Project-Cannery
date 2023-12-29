<?php

$server 	= "localhost";
$username	= "root";
$pass		= "";
$database 		= "project_cannery"; //sesuaikan nama databasenya
$koneksi = mysqli_connect($server, $username, $pass, $database); //pastikan urutan pemanggilan variabel nya sama.

//untuk cek jika koneksi gagal ke database
if(mysqli_connect_errno()) {
	echo "Koneksi gagal : ".mysqli_connect_error();
}