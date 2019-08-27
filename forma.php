<?php
    // Konekcija ka bazi
    require_once 'header.php';

    $imeProvera="*";
    $prezimeProvera="*";

    $sql = "SELECT * FROM profili
        WHERE korisnik_id = $id";

    $result = $conn->query($sql);
    if($result->num_rows == 0)
    {
      $imeValue = "";
      $prezimeValue = "";
      $pol = "o";
    }
    else
    {
        $red =$result->fetch_assoc();
        $imeValue = $red["ime"];
        $prezimeValue = $red["prezime"];
        $pol=$red['pol'];
    }
    
    /*
    // Podesavanje id logovanog korisnika
    if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }
    $id = $_SESSION['id']; */

    if(!empty($_POST))
    {
        $ime=$conn->real_escape_string($_POST['ime']);
        $prezime=$conn->real_escape_string($_POST['prezime']);
        $pol=$conn->real_escape_string($_POST['pol']);

        if($ime== " " or empty($ime))
        {
            echo "Morate uneti ime";

        }
        if($prezime== " " or empty($prezime))
        {
            echo "Morate uneti prezime";

        }
        if($pol== " " or empty($pol))
        {
            echo "Morate uneti pol";

        }


        $sql = "
            SELECT * FROM profili
                WHERE korisnik_id = $id";
                
        $result = $conn->query($sql);
        if($result->num_rows == 0)
        {
            $sql1 = "
                INSERT INTO profili
                    (korisnik_id,ime, prezime,pol)
                VALUES
                    ($id, '$ime', '$prezime','$pol')";
            $conn->query($sql1);
            header("Refresh: 0; forma.php");
        }
        else
        {
            $sql="
                UPDATE profili
                SET ime='$ime' , prezime='$prezime' , pol='$pol'
                WHERE korisnik_id=$id";
            $conn->query($sql);
        }
        

    }

    // Ako se salje zahtev za pracenje korisnika
    // if(isset($_GET['id'])) { ... }
    // if(!empty($_GET['id'])) { ... }
    /* if(!empty($_GET['id']))
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
                INSERT INTO profili
                    (korisnik_id,ime, prezime,pol)
                VALUES
                    ($id, '$ime', '$prezime','$pol')";
            $conn->query($sql1);
        }
        else
        {
            $sql="
                UPDATE profili
                SET ime='$ime' , prezime='$prezime' , pol='$pol'
                WHERE korisnik_id=$id";
            $conn->query($sql);
        }
    } */

?>
        

        <form action = "forma.php" method = "POST">
            Ime:<br>
            <input type="text" name="ime" value="<?php echo $imeValue?>">
            <span> <?php echo $imeProvera; ?></span> <br><br>
            Prezime: <br>
            <input type="text" name="prezime" value="<?php echo $prezimeValue?>">
            <span> <?php echo $prezimeProvera; ?></span>
            <br><br>
            
            <?php 
                if($pol=="Ž")
                {
                    echo "Pol:<br>
                    Zenski<input type='radio' name= 'pol' value='Ž' checked><br>
                    Muski <input type='radio' name= 'pol' value='m'><br>
                    Ostalo <input type='radio' name= 'pol' value='o' ><br><br>";
                }
                elseif($pol=="m")
                {
                    echo "Pol:<br>
                    Zenski<input type='radio' name= 'pol' value='Ž'><br>
                    Muski <input type='radio' name= 'pol' value='m' checked><br>
                    Ostalo <input type='radio' name= 'pol' value='o' ><br><br>";
                }
                else
                {
                    echo "Pol:<br>
                    Zenski<input type='radio' name= 'pol' value='Ž'><br>
                    Muski <input type='radio' name= 'pol' value='m'><br>
                    Ostalo <input type='radio' name= 'pol' value='o' checked><br><br>";
                }
                
            ?>
            Pol:<br>
            <input type="submit" value="Potvrdi">

        </form>
        
        
</body>

</html>