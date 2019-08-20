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

    $sql = "CREATE TABLE If not Exists korisnici
            (
                id INT UNSIGNED AUTO_INCREMENT,
                username VARCHAR(60) NOT NULL UNIQUE,
                pass VARCHAR(255) NOT NULL,
                PRIMARY KEY(id)
            ) Engine InnoDB;
            CREATE TABLE If not Exists profili
            (
                id INT UNSIGNED AUTO_INCREMENT,
                korisnik_id INT UNSIGNED UNIQUE,
                ime VARCHAR(150) NOT NULL,
                prezime VARCHAR(200),
                pol  CHAR(1),
                PRIMARY KEY(id),
                FOREIGN KEY(korisnik_id) REFERENCES korisnici (id)
            ) Engine InnoDB;
            CREATE TABLE If not Exists prijatelji
            (
                id INT UNSIGNED AUTO_INCREMENT,
                korisnik_id INT UNSIGNED NOT NULL,
                prijatelj_id INT UNSIGNED NOT NULL,
                PRIMARY key(ID),
                FOREIGN KEY(korisnik_id) REFERENCES korisnici(id),
                FOREIGN KEY(prijatelj_id) REFERENCES korisnici(id)
            ) Engine InnoDB; ";

if ($conn->multi_query($sql))
{
    echo "Uspesno izvrseni upiti. ";
}
else
{
    echo "Greska u upitima. Razlog: ";
    echo $conn->error;
}

?>