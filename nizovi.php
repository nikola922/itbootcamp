<?php

    $nizAuta = array("BMW", "Opel", "Toyota");
    $prvaKlupa = array("Nikola","Milica","Jelena","Milica","Vanja","Jelena");
    
    echo    $prvaKlupa[0];
    echo    "<br>";
    echo    $prvaKlupa[4];
    echo    "<br>";

    $drugaKlupa[0] = "Bogdan";
    $drugaKlupa[10] = "Nemanja";
    $drugaKlupa[2] = "Rade";
    $drugaKlupa[30] = "Sanja";

    echo    $drugaKlupa[10];
    echo    "<br>";
    echo    "<br>";

// 1. Zadatak //

    $len = count($prvaKlupa);

    for($i=0;$i<$len;$i++)
    {
        echo    $prvaKlupa[$i];
        echo    "<br>";
    }

// 2. Zadatak //

$brojevi = array(3,14,5,2,9,5);
$ukupno = count($brojevi);
$suma=0;

for($i=0;$i<$ukupno;$i++)
{
    $suma+=$brojevi[$i];
}

echo $suma;

// 3. Zadatak //
echo    "<br>";
$suma=0;
for($i=0;$i<$ukupno;$i++)
{
    $suma+=$brojevi[$i];
}
$srednja=$suma/$ukupno;
echo    $srednja;
echo    "<br>";

// 4. Zadatak //

?>