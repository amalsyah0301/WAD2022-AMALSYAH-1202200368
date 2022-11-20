<?php
require "amalsyah_connector.php";

function add($data){
    global $connect;

    $nama = $data['name'];
    $owner = $data['owner'];
    $merk = $data['merk'];
    $tglbeli = $data['buydate'];
    $deskripsi = $data['desc'];
    $query = "INSERT INTO showroom_dzul_table VALUES ('', '$nama', '$owner', '$merk','$tglbeli','$deskripsi','test.jpg','lunas')";

    mysqli_query($connect, $query);
    echo mysqli_affected_rows($connect);
}