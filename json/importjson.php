<!Doctype Html>
<html>
<head>
<title>cara insert data menggunakan json di php</title>
</head>
<body>
<?php
$connection = mysqli_connect("localhost","root","","ws") or die("Error " . mysqli_error($connection));

//untuk mendapatkan file json
$jsondata = file_get_contents('empdetail.json');

//convert json ke data array
$data = json_decode($jsondata, true);

//mendapatkan data employee details
$Id_Pelanggan= $data['Id_Pelanggan'];
$Nama_Pelanggan = $data['Nama_Pelanggan'];
$Alamat= $data['Alamat'];
$Email = $data['Email'];
$No_Telepon = $data['No_Telepon'];


//insert data ke table tbl_emp 
$sql = "INSERT INTO pelanggan(Id_Pelanggan, Nama_Pelanggan, Alamat, Email, No_Telepon)
VALUES('$Id_Pelanggan', '$Nama_Pelanggan', '$Alamat', '$Email', '$No_Telepon')";
if(!mysqli_query($connection, $sql)){
  die("Error insert data ");
}else{
  echo "Success insert data";
}

?>
</body>
</html>