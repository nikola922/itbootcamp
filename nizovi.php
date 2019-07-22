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

$niz=array(1,2,18,4,5);
$max=$niz[0];
for($i = 1; $i < count($niz); $i++)
{
    if($niz[$i]>$max)
    {
        $max = $niz[$i];
    }

}
echo    $max;
echo    "<br>";

// 5. Zadatak //
$niz=array(1,-2,18,4,5);
$min=$niz[0];
for($i = 1; $i < count($niz); $i++)
{
    if($niz[$i]<$min)
    {
        $min = $niz[$i];
    }

}
echo    $min;
echo    "<br>";
echo    "<br>";
echo    "<br>";


// 6. Zadatak //

$niz2=array(11,2,18,42,5);
$max1=$niz2[0];
$indeks = 0;
for($i = 1; $i < count($niz2); $i++)
{
    if($niz2[$i]>$max1)
    {
        $max1 = $niz2[$i];
        $indeks = $i;
    }

}
echo    $indeks;
echo    "<br>";

// 7. Zadatak //

$niz1=array(1,5,18,42,5);
$suma1=0;
for($i=0;$i<count($niz1); $i++)
{
    $suma1+=$niz1[$i];
}
$srednja1 = $suma1/count($niz1);
$br=0;

for($i=1;$i<count($niz1); $i++)
{
    if($niz1[$i]>$srednja)
    {
        $br++;
    }
}

echo    "<br>";
echo    $srednja;
echo    "<br>";
echo    $br;

// 8. Zadatak //
$niz3=array(12,4,4,-42,-2);
$suma3=0;
foreach($niz3 as $vrednost)
{
    if($vrednost>=0)
    {
        $suma3+=$vrednost;
    }
}
echo    "<br>";
echo    $suma3;

// 9. Zadatak //

$niz4=array(12,4,4,43,23,2,4,17);
$br1=0;
foreach($niz4 as $vrednost1)
{
    if($vrednost1%2==0)
    {
        $br1++;
    }
}

echo    "<br>";
echo    $br1;

// 10. Zadatak //

$niz5=array(12,6,4,43,23,2,4,17);
$suma4=0;
for ($i=0;$i < count($niz5);$i++)
{
    if($niz5[$i]%2==0)
    {
        $suma4+=$niz5[$i];
    }
}

echo    "<br>";
echo    $suma4;

?>