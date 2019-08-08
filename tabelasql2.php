</html>
</head>

    <link type="text/css" rel="stylesheet" href="stil.css">

</head>
<?php 

    $servername = "localhost";
    $username = "ambulanta";
    $password = "admin123";
    $database = "ambulanta";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn)
    {
        die("Neuspela konekcija. Razlog: " . mysqli_connect_error()
            . "</body></html>");
    }
   
    mysqli_set_charset($conn,"utf8");

    $sql = "SELECT ime, prezime, visina, tezina, god_rodjenja O pacijenti";
    
    $result = mysqli_query($conn, $sql);
    
    if($result != false)
    {
    if(mysqli_num_rows($result) == 0)
    {
        echo    "<p> Ne postoje pacijenti u bazi. </p>";
    }
    else
    {
        echo "<table>";
        echo "<tr>";
        echo "<th> Ime  </th>";
        echo "<th> Prezime  </th>";
        echo "<th> Tezina  </th>";
        echo "<th> Visina  </th>";
        echo "<th> Godina  </th>";
        
        $red = mysqli_fetch_assoc($result);
        while($red != false)
        {
            echo "<tr>";
            echo    "<td>" . $red["ime"] . "</td>";
            echo    "<td>" . $red["prezime"] . "</td>";
            echo    "<td>" . $red["tezina"] . "</td>";
            echo    "<td>" . $red["visina"] . "</td>";
            echo    "<td>" . $red["god_rodjenja"] . "</td>";
            echo "<tr>";
            $red = mysqli_fetch_assoc($result);
        }
        
        echo "</tr>";
        echo "</table>";
    }
    }
    else
    {
        echo    "Upit nije uspesno izvrsen. ";
    }


?>
</head>
