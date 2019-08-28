<?php
    // Konekcija ka bazi
    require_once 'header.php';





?>


<form action = "forma.php" method = "POST">
            Ime:<br>
            <input type="text" name="ime" value="<?php echo $imeValue?>">
            <span> <?php echo $imeProvera; ?></span> <br><br>
            Prezime: <br>
            <input type="text" name="prezime" value="<?php echo $prezimeValue?>">
            <span> <?php echo $prezimeProvera; ?></span>
            <br><br>
</form>