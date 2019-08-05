<html>
<style>
body {
    background-color:#cfcfcf;
    font-family: Arial;
    font-weight: bold;
    color:blue;
    font-size:22px;
    padding-left: 30px;
    padding-top: 40px;
}
h1 {
    color:red;
}
</style>

<body>
<h1> Izracunajte </h1>
<img src="images/matematika.png" style="width:250px";>

<form action="test5.php" method="get">
<label> Broj A =</label>
<input type="number" name="A" value=0;><br>
<label> Broj B =</label>
<input type="number" name="B" value=0;><br>
<input type="radio" name="operacija" value="Saberi" checked> Saberi <br>
<input type="radio" name="operacija" value="Oduzmi"> Oduzmi <br>
<input type="radio" name="operacija" value="Pomnozi"> Pomnozi <br>
<input type="radio" name="operacija" value="Podeli"> Podeli <br>
<input type="submit" value="Izracunaj"> <br>


<?php

if($_SERVER["REQUEST_METHOD"] == "GET")
{
    if(empty($GET["A"]) == TRUE)
            {
                $A = "Ime ne sme biti prazan string";
            }
         $A=$_POST["A"];
}
$A=$_GET["A"];
$B=$_GET["B"];
$o=$_GET["operacija"];
$rez="";

switch($o)
{
    case     "Saberi":
        $rez=$A+$B;
        $znak= "+";
        $znak1 = "=";
        break;
    case    "Oduzmi":
        $rez=$A-$B;
        $znak = "-";
        $znak1 = "=";
        break;
    case    "Pomnozi":
        $rez=$A*$B;
        $znak = "*";
        $znak1 = "=";
        break;
    case    "Podeli":
        $rez=$A/$B;
        $znak = "/";
        $znak1 = "=";
        break;
    default:
        echo    "pogresan unos";
}
echo    "<h1>$A $znak $B $znak1 $rez </h1>";
?>

<!--2. Zadatak-->


</body>

</html>