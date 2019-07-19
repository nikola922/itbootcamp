<?php

//* 1. Zadatak *//

function    suma($n,$m)
{
    $suma=0;
    for($i=$n;$i<=$m;$i++)
    {

    if ($i%3==0 && $i%7!=0)
    {
        $suma = $suma + $i;
    }
    }
    return  $suma;
   
}

$a = suma(10,22);
echo    $a;
echo    "<br>";

//* 2. Zadatak *//
echo    "<br>";

function    ispis($color, $font, $n)
{
$i=1;
while ($i <= $n)
{
    echo    "<p style='color:$color;font-size:$font;'> Iteracija broj $i </p>";
    $i++;
}
}
ispis("green", 29, 3);

//* 3. Zadatak *//
echo    "<br>";

function    krvnaGrupe($krvnaGrupa)
{
switch  ($krvnaGrupa)
{
    case "A+":
        echo    "Moze dati krv A+ i AB+ ";
        echo    " Moze primiti krv A+ i 0+";
        break;
    case "0+":
        echo    "Moze dati krv 0+, A+, B+, AB+ ";
        echo    " Moze primiti krv 0+";
        break;
    case "B+":
        echo    "Moze dati krv B+, AB+ ";
        echo    " Moze primiti krv B+ i 0+";
        break;
    case "AB+":
        echo    "Moze dati krv AB+ ";
        echo    " Moze primiti sve krvne grupe";
        break;
}
}

krvnaGrupe("B+");



?>