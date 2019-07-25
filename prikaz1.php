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
    case    "+":
        $rez=$A+$B;
        break;
    case    "-":
        $rez=$A-$B;
        break;
    case    "/":
        $rez=$A/$B;
        break;
    case    "*":
        $rez=$A*$B;
        break;
    default:
        echo    "pogresan unos";
}
echo    "Rezultat je : $rez";
?>


</body>
</html>