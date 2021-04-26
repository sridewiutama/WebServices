<?php

Header('Content-type: text/xml');
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "ws") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');
//menampilkan data dari database, table tb_anggota
$sql = "select * from pelanggan ";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('pelanggan');
    $track->addChild('Id_Pelanggan', $row['Id_Pelanggan']);
    $track->addChild('Nama_Pelanggan', $row['Nama_Pelanggan']);
    $track->addChild('Alamat', $row['Alamat']);
    $track->addChild('Email', $row['Email']);
    $track->addChild('No_Telepon', $row['No_Telepon']);
}

print($xml->asXML());
//tutup koneksi ke database
mysqli_close($connection);
?>