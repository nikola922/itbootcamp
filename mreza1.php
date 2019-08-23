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

    if(!empty($_GET['id'])) 
    {
        $pid = $conn->real_escape_string($_GET['id']);
        $sql = "
        SELECT * FROM prijatelji
        WHERE korisnik_id = $id
        AND prijatelj_id = $pid";

        $result = $conn->query($sql);

        if($result->num_rows == 0)
        {
            $sql1 = "
            INSERT INTO prijatelji
                (korisnik_id, prijatelj_id)
            VALUE 
                ($id, $pid)";
            $conn->query($sql1);
        }
    }
?>

<html>
<head>
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
    color:  black;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 15px;
    border-bottom: 1px solid #f2f2f2;
}

td:nth-child(even) {
    background-color: #61aecf;
}
td:nth-child(odd) {
    background-color: #a4b2b5;
}
a {
       background: #395870;
       background: linear-gradient(#00ffb5, #293f50);
       border-right: 1px solid rgba(0, 0, 0, .3);
       color: #fff;
       padding: 12px 20px;
       text-decoration: none;
       text-align:center;
       }
   a:hover {
       background: #314b60;
       box-shadow: inset 0 0 10px 1px rgba(0, 0, 0, .3);
       }
</style>
</head>

<body>
    <?php
        $sql = "
        SELECT
            k.id AS id, 
            k.username AS username, 
            p.ime AS ime, 
            p.prezime AS prezime,
            p.pol AS pol  
        FROM korisnici AS k
        INNER JOIN profili AS p 
        ON k.id = p.korisnik_id
        WHERE k.id != $id
        ORDER BY p.ime, p.prezime";

        $result = $conn->query  ($sql);
        if(!$result)
        {
            echo "<p> Greska! Razlog: ";
            echo $conn->error;
            echo "</p>";
        }
        else
        {
            if($result->num_rows == 0)
            {
                echo "<p> Nemate nijednog korisnika u mrezi :( </p>";
            }
            else
            {
                echo "<caption> Korisnici </caption>";
                echo "<table>";
                echo "<tr>";
                echo "<th> Ime  </th>";
                echo "<th> Prezime  </th>";
                echo "<th> Korisnicko ime </th>";
                echo "<th> Pol  </th>";
                echo "<th> Svojstvo  </th>";
                echo "<th> Akcija  </th>";
                while($red=$result->fetch_assoc())
                {
                    echo "<tr>";
                    echo    "<td>" . $red["ime"] . "</td>";
                    echo    "<td>" . $red["prezime"] . "</td>";
                    echo "<td>" . $red["username"] . "</td>";
                    echo "<td>" . $red["pol"] . "</td>";
                    $pid= $red["id"];

                    $sql1 = "
                    SELECT * FROM prijatelji
                        WHERE korisnik_id = $id
                        AND prijatelj_id = $pid";
                    $result1 = $conn->query($sql1); 
                    $jatebe = $result1->num_rows;

                    $sql2 = "
                    SELECT * FROM prijatelji
                        WHERE korisnik_id = $pid
                        AND prijatelj_id = $id";
                    $result2 = $conn->query($sql2); 
                    $timene = $result2->num_rows;
                    echo "<td>";
                    if($jatebe + $timene > 1)
                    {
                        echo " Uzajamni prijatelji ";
                    }
                    elseif($jatebe)
                    {
                        echo " pratim korisnika ";
                    }
                    elseif($timene)
                    {
                        echo " korisnik mene prati ";
                    }
                    else
                    {
                        echo " nidje veze";
                    }
                    echo "</td>";
                    echo "<td>";
                    echo "<a href='dm_dodaj.php?dodaj=$pid'> ";
                    echo "Prati korisnika ";
                    echo "</a>  ";

                    echo " <a href='dm_brisi.php?brisi=$pid'> ";
                    echo " Brisi pracenje ";
                    echo "</a>";
                    echo "</td>";
                }
                echo "</tr>";
                echo "</table>";
            }
        }
    ?>
</body>

</html>