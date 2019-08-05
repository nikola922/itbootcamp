<?php 

    $servername = "localhost";
    $username = "ambulanta";
    $password = "admin123";
    $database = "ambulanta";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn)
    {
        die("Neuspela konekcija. Razlog: " . mysqli_connect_error());
    }
   
    mysqli_set_charset($conn,"utf8");

    $sql = "INSERT INTO pacijenti VALUES
        (5, 'Pera', 'Perić', 189, 89, 1982 );";
    $sql .= "INSERT INTO pacijenti VALUES
        (6, 'Pera', 'Perić', 189, 89, 1982 );";

    $result = mysqli_multi_query($conn, $sql);
    if($result)
    {
        echo    "Uspesna dodavanje u tabelu pacijenti. ";
    }
    else
    {
        echo    "Desila se greska. ";
        echo mysqli_error($conn);
    }

?>