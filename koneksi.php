<?php 
$koneksi = mysqli_connect("localhost","root","","malasngoding");
 

// Note: Kalo database ga kebaca, erornya ga jalan
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>