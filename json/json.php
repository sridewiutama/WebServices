<?php

    require_once('koneksi.php');

    $query = "SELECT * FROM pelanggan";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql){
        $result = array();
        while ($row = mysqli_fetch_array($sql)){
            array_push ($result,array(
                'Id_Pelanggan' => $row ['Id_Pelanggan'],
                'Nama_Pelanggan' => $row['Nama_Pelanggan'],
                'Alamat' => $row['Alamat'],
                'Email' => $row['Email'],
                'No_Telepon' => $row['No_Telepon'],
            ) );
        }
        
    echo json_encode ( array('Data Pelanggan Terbaru' => $result) );
    }
?>