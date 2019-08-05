<html>

<body>
<p> Tekst u HTML-u.
</p>

<?php

$A=$_GET["A"];
$B=$_GET["B"];
$o=$_GET["operacija"];
$rez=0;

switch($o)
{
    case    "saberi":
        $rez=$A+$B;
        break;
    case    "oduzmi":
        $rez=$A-$B;
        break;
    case    "pomnozi":
        $rez=$A/$B;
        break;
    case    "podeli":
        $rez=$A*$B;
        break;
    default:
        echo    "pogresan unos";
}
echo    "Rezultat je : $rez";
?>


</body>
</html>