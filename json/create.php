<?php

    require_once('koneksi.php');

    $Id_Pelanggan = $_POST['Id_Pelanggan'];
    $Nama_Pelanggan = $_POST['Nama_Pelanggan'];
    $Alamat = $_POST['Alamat'];
    $Email = $_POST['Email'];
    $No_Telepon = $_POST['No_Telepon'];
   

    $query = "INSERT INTO pelanggan(Id_Pelanggan,Nama_Pelanggan,Alamat,Email,No_Telepon)VALUES('$Id_Pelanggan','$Nama_Pelanggan','$Alamat','$Email','$No_Telepon')";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql){
        echo json_encode ( array('message' => 'created!') );
    }else {
        echo json_encode ( array('message' => 'error') );
    }
?>