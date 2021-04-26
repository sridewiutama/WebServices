<?php
include ('koneksii.php');
$xml = simplexml_load_file('inputdataxml.xml'); //parse the xml file into object
foreach( $xml->children() as $ws) 
{
$Id_Pelanggan = $ws->Id_Pelanggan; //get the childnode Id_Pelanggan
$Nama_Pelanggan = $ws->Nama_Pelanggan; //get the child node Nama_Pelanggan
$Alamat = $ws->Alamat;//get the child node alamat
$Email = $ws->Email;//get the child node Email
$No_Telepon = $ws->No_Telepon;//get the child node No_Telepon

echo 'Id Pelanggan   : '.$Id_Pelanggan.'<br />';
echo 'Nama Pelanggan : '.$Nama_Pelanggan.'<br />';
echo 'Alamat         : '.$Alamat.'<br />';
echo 'Email          : '.$Email.'<br />';
echo 'No Telepon     : '.$No_Telepon.'<br />';
echo '<br>';

$query = "INSERT INTO pelanggan
        VALUES ('', '$Id_Pelanggan','$Nama_Pelanggan','$Alamat','$Email','$No_Telepon') ";
   mysqli_query($koneksii, $query);
}
?>