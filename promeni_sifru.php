<?php
    // Konekcija ka bazi
    require_once 'header.php';

    $sql = "
            SELECT *
            FROM korisnici
            WHERE id=$id";
    $result= $conn->query($sql);
    $red=$result->fetch_assoc();
    $username = $red['username'];
    $pass = $red['pass'];

    $passUnosStara = "*";
    $passUnosNova = "*";

    if(!empty($_POST))
    {
        $staraSifra = $conn->real_escape_string($_POST['staraSifra']);
        $novaSifra = $conn->real_escape_string($_POST['novaSifra']);
        $potvrdaSifre = $conn->real_escape_string($_POST['potvrdaSifre']);
        $hesiranaSifra=md5($novaSifra);

        if(md5($staraSifra)==$pass && $novaSifra==$potvrdaSifre)
        {
            //
            $sql="
                UPDATE korisnici
                SET PASS = '$hesiranaSifra'
                WHERE id = $id";

            $conn->query($sql);
        }
        else
        {
            if(md5($staraSifra) != $pass)
            {
               $passUnosStara = "Nije ispravno uneta stara sifra";
            }
            if(md5($novaSifra) != $potvrdaSifre)
            {
                $passUnosNova = "Greska u potvrdi sifre";
            }
        }
    }

?>


<form action = "promeni_sifru.php" method = "POST">
            Korisnicko Ime:
            <input type="text" name="korisnickoIme" placeholder="<?php echo $username ?>" disabled>
             <br><br>
            Stara sifra:
            <input type="password" name="staraSifra" value="">
            <span><?php echo $passUnosStara ?> </span>
            <br><br>
            Nova sifra: 
            <input type="password" name="novaSifra" value="">
            <span><?php echo $passUnosNova ?> </span>
            <br><br>
            Potvrda sifre: 
            <input type="password" name="potvrdaSifre" value="">
            <br><br>
            <input type="submit" value="Potvrdi">

</form>