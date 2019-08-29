<?php

    require_once 'header.php';


    if(!empty($_GET['id']))
    {
        $pid=$conn->real_escape_string($_GET['id']);
    }


?>


<?php

    $sql = "
        SELECT
            k.id AS id, 
            k.username AS username, 
            p.ime AS ime, 
            p.prezime AS prezime,
            p.pol AS pol , 
            p.bio AS bio 
        FROM korisnici AS k
        INNER JOIN profili AS p 
        ON k.id = p.korisnik_id
        WHERE p.id != $pid";


    $result = $conn->query($sql);
    if(!$result)
    {
        echo "<p>Greska! Razlog:";
        echo $conn->error;
        echo "</p>";
    }
    else{
    if($result->num_rows != 0)
            {
                echo "<br>"."<br>"."<br>"."<br>";
                echo "<h1>Informacije o profilu:</h1>";
                echo "<table>";
                echo "<th>Ime</th>";
                echo "<th>Prezime</th>";
                echo "<th>Korisnicko ime</th>";
                echo "<th> Pol </th>";
                echo "<th> Bio </th>";
                while($red = $result->fetch_assoc())
                {
                    if($red['pol']=="mx")
                    {
                    echo "<tr>";
                    echo "<td>";
                    echo $red["ime"];
                    echo "</td>";
                    echo " ";
                    echo "<td>";
                    echo $red["prezime"];
                    echo "</td>";
                    echo "<td>";
                    echo $red["username"];
                    echo "</td>";
                    echo "<td>";
                    echo $red["pol"];
                    echo "</td>";
                    echo "<td>";
                    echo $red["bio"];
                    echo "</td>";
                    }
                    elseif($red['pol']=="Ž")
                    {
                    echo "<tr>";
                    echo "<td>";
                    echo $red["ime"];
                    echo "</td>";
                    echo " ";
                    echo "<td>";
                    echo $red["prezime"];
                    echo "</td>";
                    echo "<td>";
                    echo $red["username"];
                    echo "</td>";
                    echo "<td>";
                    echo $red["pol"];
                    echo "</td>";
                    echo "<td>";
                    echo $red["bio"];
                    echo "</td>";
                    }
                    else
                    {
                        echo "<span style='color:grey;'> Ne postoji </span>";
                    }

                }
            }
    }
    
        



?>