<?php
    session_start();

 // Konekcija ka bazi
 $servername = "localhost";
    $username = "ambulanta";
    $password = "admin123";
    $database = "mreza";

 // Objekat konekcije
 $conn = new mysqli($servername, $username,
     $password, $database);

 if($conn->connect_error)
 {
     die("Neuspela konekcija! Razlog: "
         . $conn->connect_error);
 }

 $conn->set_charset('utf8');

 // Podesavanje id logovanog korisnika 
    if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }
    $id = $_SESSION['id'];

 if(!empty($_GET['brisi'])){
     $pid = $conn->real_escape_string($_GET['brisi']);
     $sql = "SELECT * FROM prijatelji
            WHERE korisnik_id = $id
            AND prijatelj_id = $pid";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $sql1= "DELETE FROM prijatelji
        WHERE korisnik_id = $id
        AND prijatelj_id = $pid";
        $result= $conn->query($sql1);
    }
    header('Location: prijatelji.php');
 }




?>