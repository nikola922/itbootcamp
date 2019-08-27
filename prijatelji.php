<?php
    require_once 'header.php';

    // Ako se salje zahtev za pracenje korisnika
    // if(isset($_GET['id'])) { ... }
    // if(!empty($_GET['id'])) { ... }
    if(!empty($_GET['id']))
    {
        $pid = $conn->real_escape_string($_GET['id']);
        // Kad god se dohvata vrednost iz GET ili POST,
        // Trebalo bi da se pozove real_escape_string.

        // $id - logovan korisnik (koji salje zahtev)
        // $pid - korisnik kojem se salje zahtev
        // Porvera nema li vec prijateljstva
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

<?php
        // Prikazi sve korisnike koji nisu ja
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

        $result = $conn->query($sql);
        if(!$result)
        {
            echo "<p>Greska! Razlog:";
            echo $conn->error;
            echo "</p>";
        }
        else
        {
            if($result->num_rows == 0)
            {
                echo "<p>Nemate nijednog
                korisnika u mrezi :(</p>";
            }
            else
            {
                echo "<br>"."<br>"."<br>"."<br>";
                echo "<h1>Korisnici:</h1>";
                echo "<table>";
                echo "<th>Ime</th>";
                echo "<th>Prezime</th>";
                echo "<th>Korisnicko ime</th>";
                echo "<th> Pol </th>";
                echo "<th> Svojstvo</th>";
                echo "<th> Akcija </th>";

                while($red = $result->fetch_assoc())
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
                    /*echo "<td>";
                    echo " (";
                    if($red["pol"] == "Z")
                    {
                        echo "<span style='color:red'>";
                        echo $red["username"];
                        echo "</span>";
                    }
                    elseif($red["pol"] == "M")
                    {
                        echo "<span style='color:blue'>";
                        echo $red["username"];
                        echo "</span>";
                    }
                    echo ") ";
                    echo "</td>";*/
                    $pid = $red['id'];

                    $sql1 = "
                        SELECT * FROM prijatelji
                            WHERE korisnik_id = $id
                            AND prijatelj_id = $pid";
                    $result1 = $conn->query($sql1);
                    $jatebe = $result1->num_rows; // 0 ili 1

                    $sql2 = "
                        SELECT * FROM prijatelji
                            WHERE korisnik_id = $pid
                            AND prijatelj_id = $id";
                    $result2 = $conn->query($sql2);
                    $timene = $result2->num_rows; // 0 ili 1

                    echo "<td>";
                    if($jatebe + $timene > 1)
                    {
                        echo " uzajamni prijatelji ";
                    }
                    elseif($jatebe)
                    {
                        echo " pratim korisnika ";
                    }
                    elseif($timene)
                    {
                        echo " korisnik mene prati ";
                    }
                    else {
                        echo "nema pracenja";
                    }
                    echo "</td>";

                    echo "<td>";
                    if($jatebe){
                        echo "<a href='prijatelji_brisi.php?brisi=$pid'>";
                        echo "Brisi korisnika";
                        echo "</a>";
                        echo "</td>";
                    }
                    
                    else{
                        echo "<a href='prijatelji_dodaj.php?dodaj=$pid'>";
                        echo "Prati korisnika";
                        echo "</a>";
                        echo "  ";
                    }                  
                }
                echo "</tr>";
                echo "</table>";
            }
        }
    ?>
        
      
</body>

</html>