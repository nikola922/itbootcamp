<?php
    //Konekcija ka bazi
    $servername = "localhost";
    $username = "ambulanta";
    $password = "admin123";
    $database = "mreza";

    global $conn;
    // Objekat konekcije
    $conn = new mysqli($servername, $username,
        $password, $database);

    if($conn->connect_error)
    {
        die("Neuspela konekcija! Razlog: "
            . $conn->connect_error);
    }

    $conn->set_charset('utf8');
    ?>

