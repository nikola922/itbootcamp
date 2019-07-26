<html>
<head>
<style>
.error {
    color:red;
}
mark {
    background-color:lightgreen;
}

.pravila {
    background-color:lightgreen;
}

</style>

</head>

<body>
    <?php
        $ime=$prezime=$email=$website=$comment=$gender=$pravila="";
        $imeO=$prezimeO=$emailO=$websiteO=$commentO="*";
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(empty($_POST["ime"]) == TRUE)
            {
                $imeO = "Ime ne sme biti prazan string";
            }
            elseif(preg_match("[a-z A-Z]", $_POST["ime"]) == FALSE)
            {
                $imeO = "Ime moze sadrzati samo slova.";
            }
            else
            {
                $ime = $_POST["ime"];
            }
            if(empty($_POST["prezime"]) == TRUE)
            {
                $prezimeO = "Prezime ne sme biti prazan string";
            }
            elseif(preg_match("[a-z A-Z]", $_POST["prezime"]) == FALSE)
            {
                $prezimeO = "Ime moze sadrzati samo slova.";
            }
            else
            {
                $prezime = $_POST["prezime"];
            }
            if(empty($_POST["email"]) == TRUE)
            {
                $emailO = "Email ne sme biti prazan string";
            }
            elseif(filter_var($_POST["email"] , FILTER_VALIDATE_EMAIL) == false)
            {
                $emailO= "Email nije dobro unet.";
            }
            else
            {
                $email = $_POST["email"];
            }
            if(empty($_POST["website"]) == TRUE)
            {
                $websiteO = "Website ne sme biti prazan string";
            }
            elseif(filter_var($_POST["website"] , FILTER_VALIDATE_EMAIL) == false)
            {
                $websiteO= "Website nije dobro unet.";
            }
            else
            {
                $websiteO = $_POST["website"];
            }
            if(strlen($_POST["comment"])<15)
            {
                $commentO = "Komentar mora biti duzi od 15 karaktera";
            }
            else
            {
                $comment = $_POST["comment"];
            }

            $ime=$_POST["ime"];
            $prezime=$_POST["prezime"];
            $email=$_POST["email"];
            $website=$_POST["website"];
            $comment=$_POST["comment"];
            $gender=$_POST["gender"];
        }

        if(isset($_POST["pravila"]) == TRUE)
        {
            $pravila="Prihvacena pravila";
         }
        else
        {
            $pravila="Pravila nisu prihvacena";
        }
    ?>
 
    <h1> Primer PHP validacije forme </h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <label> Ime: </label>
    <input type="text" name="ime">
    <span class="error"><?php echo  $imeO; ?></span><br><br>
    <label> Prezime: </label>
    <input type="text" name="prezime">
    <span class="error"><?php echo  $prezimeO; ?></span><br><br>
    <label> Email: </label>
    <input type="text" name="email">
    <span class="error"><?php echo  $emailO; ?></span><br><br>
    <label> Website </label>
    <input type="url" name="website">
    <span class="error"><?php echo  $websiteO; ?></span><br><br>
    <label> Comment </label>
    <textarea name="comment"  rows="4" cols="50"> </textarea>
    <span class="error"><?php echo  $commentO; ?></span><br>
    <label> Pol </label>
    <input type="radio" name="gender" value="Male"> Muski
    <input type="radio" name="gender" value="Female"> Zenski
    <input type="radio" name="gender" value="Other" checked> Ostalo <br><br>

Prihvatite pravila koriscenja:
<input type="checkbox" name="pravila" value="da"><br><br>
<input type="submit" value="Potvrdite">
</form>
<p class="pravila"> <h4>Pravila za kreiranje korisničkog imena/lozinke:</h4>
Specijalni karakteri su dozvoljeni.<br>
Minimalan broj karaktera: 8.<br>
Maksimalan broj karaktera: 22.<br>
Minimalan broj velikih slova: 1.<br>
Minimalan broj malih slova: 1.<br>
Minimalan broj numerika: 2.<br>
Početni karakter mora da bude slovo malo ili veliko.<br>
Maksimalan broj uzastopnih istih karaktera: 2.<br>
Lozinka ne sme u sebi da sadrži korisničko ime. </p>
<?php
echo    "<h2> Vasi podaci: </h2>";
echo    "<b>Vase ime je: </b>" . $ime . " " . $prezime;
echo    "<br>";
echo    "<b style='color:green;'>Vas email je: </b>" . $email;
echo    "<br>";
echo    "<i>Vas sajt je: </i>" . $website;
echo    "<br>";
echo    "<span s>Vas komentar je: </span>" . $comment;
echo    "<br>";
echo    "<mark>Vas pol je: </mark>" . $gender;
echo    "<br>";
echo    "<b>Prihvacena pravila koriscenja: </b>" . $pravila;
echo    "<br>";



?>

<br><br><br><br><br><br><br>

<form action="prikaz1.php" method="get">
<label> Parametar A </label>
<input type="number" name="A"><br>
<label> Parametar B </label>
<input type="number" name="B"><br>
<label>  Operacija </label>
<input type="text" name="operacija"><br>
<input type="submit" value="Izracunaj">


</body>
</html>