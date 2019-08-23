<?php
    $servername = "localhost";
    $username = "ambulanta";
    $password = "admin123";
    $database = "mreza";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->set_charset('utf8');

    $id = 1;

    if(!empty($_GET['dodaj'])) 
    {
        $pid=$conn->real_escape_string($_GET['dodaj']);

        // Provera da li pracenje postoji //
        $sql = "
            SELECT * FROM prijatelji
            WHERE korisnik_id = $id
            AND prijatelj_id = $pid";

        $result=$conn->query($sql);
        if($result->num_rows == 0)
        {
            // Dodaje se pracenje tek kada ne postoji //
            $sql1 = "
                INSERT INTO prijatelji
                    (korisnik_id, prijatelj_id)
                    VALUE ($id, $pid)";
            $result1= $conn->query($sql1);
        } // end if prvi
        header('Location: mreza1.php');
    }



?>