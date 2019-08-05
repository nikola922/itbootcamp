</html>
</head>
<style>
table {
    width:100%;
    margin: 0;
}
tr {
    background-color:#ffffff;
}
tr:hover {
    background-color:  #ececff;
    cursor: pointer;
}
th {
    color: #ffffff;
    background-color: #6c7ae0;
    font-family: Poppins-Regular;
    font-size: 18px;
    padding-top: 19px;
    padding-bottom: 19px;
    padding-left: 10px;
}
td {
    font-family: Poppins-Regular;
    font-size: 15px;
    color:  #666666;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 15px;
    border-bottom: 1px solid #f2f2f2;
}
</style>
</head>
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

    $sql = "SELECT ime, prezime, visina, tezina, god_rodjenja FROM pacijenti";
    
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
        echo "<th> Godina rodjenja </th>";
        
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
