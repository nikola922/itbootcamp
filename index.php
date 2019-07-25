<html>

<body>
 
<h1> Primer PHP validacije forme </h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<label> Ime: </label>
<input type="text" name="ime"><br><br>
<label> Prezime: </label>
<input type="text" name="prezime"><br><br>
<label> Email: </label>
<input type="text" name="email"><br><br>
<label> Website </label>
<input type="url" name="website"><br><br>
<label> Comment </label>
<textarea name="comment"  rows="4" cols="50"> </textarea><br>
<label> Pol </label>
<input type="radio" name="gender" value="Male"> Muski
<input type="radio" name="gender" value="Female"> Zenski
<input type="radio" name="gender" value="Other"> Ostalo <br><br>
<input type="submit" value="Potvrdite">
</form>

<?php
echo    "<h2> Vas Unos: </h2>";
echo    "<b>Vase ime je: </b>" . $_POST['ime'];
echo    "<br>";
echo    "<em>Vase prezime je: </em>" . $_POST["prezime"];
echo    "<br>";
echo    "<b style='color:red;'>Vas email je: </b>" . $_POST["email"];
echo    "<br>";
echo    "<i>Vas sajt je: </i>" . $_POST["website"];
echo    "<br>";
echo    "<span s>Vas komentar je: </span>" . $_POST["comment"];
echo    "<br>";
echo    "<mark>Vas pol je: </mark>" . $_POST["gender"];
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