<?php 
 
$koneksii = mysqli_connect("localhost","root","","ws");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>