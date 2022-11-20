<?php

    $connect = mysqli_connect("localhost", "root", "", "modul3", 3308);

    function showAll(){
        global $connect;

        $query = "SELECT * FROM showroom_amalsyah_table";
        $data = mysqli_query($connect, $query);
        $penampung = [];

        while($row=mysqli_fetch_assoc($data)){
            $penampung[] = $row;
        }

        return $penampung;
    }

?>