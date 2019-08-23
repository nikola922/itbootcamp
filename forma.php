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

if(!empty($_POST))
{
    $id=6;
    $ime=$conn->real_escape_string($_POST['ime']);
    $prezime=$conn->real_escape_string($_POST['prezime']);
    $pol=$conn->real_escape_string($_POST['pol']);

    echo "Zdravo " . $ime . " " . $prezime . " " . $pol;

    $sql ="
        INSERT INTO profili (korisnik_id, ime, prezime, pol)
        VALUES ($id,'$ime', '$prezime', '$pol')";
    $conn->query($sql);
}


?>

<html>
<head>
</head>

<body>
    <form action="forma.php" method="POST">
        Ime:
        <input type="text" name="ime"><br><br>
        Prezime:
        <input type="text" name="prezime"><br><br>
        Pol: <br>
        Ženski <input type="radio" name= "pol" value="Ž"><br>
        Muški <input type="radio" name="pol" value="M"><br>
        Ostalo <input type="radio" name="pol" value="O" checked><br><br>
        <input type="submit" value="Potvrdi">


    </form>

</body>

</html>