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
                echo "<p> Korisnici : </p>";
                echo "<ul>";
                while($red=$result->fetch_assoc())
                {
                    echo "<li>";
                    echo $red["ime"];
                    echo " ";
                    echo $red["prezime"];
                    echo "( ";
                    if($red["pol"] == "M")
                    {
                        echo "<span style='color:blue'>";
                        echo $red["username"];
                        echo "</span>";
                    }
                    elseif($red["pol"] == "Ž")
                    {
                        echo "<span style='color:pink'>";
                        echo $red["username"];
                        echo "</span>";
                    }
                    echo " )";
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

                    if($jatebe + $timene > 1)
                    {
                        echo " Uzajamni prijatleji ";
                    }
                    elseif($jatebe > 0)
                    {
                        echo " pratim korisnika ";
                    }
                    elseif($timene)
                    {
                        echo " korisnik mene prati ";
                    }

                    echo "<a href='dm_prijatelji.php?id=$pid'> ";
                    echo "Prati korisnika";
                    echo "</a>";
                    echo "</li>";
                }
                echo "</ul>";
            }
        }
    ?>
</body>

</html>