<?php

    $database= new mysqli("localhost","root","","pharmadb");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    } else {
        // echo "Berhasil akses database!";
    }

?>