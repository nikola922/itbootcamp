<?php

/* 1. Zadatak */
echo    "<br>";
function    pozdrav($ime, $prezime)
{
    echo    "Zdravo $ime $prezime";
}
pozdrav ( "Jelena", "Matejic");

/* 2. Zadatak */
echo    "<br>";
function    zbir( $a, $b)
{
    $rez= $a + $b;
    return  $rez;
}
function    razlika( $a, $b)
{
    $rez= $a - $b;
    return  $rez;
}
$a=4;
$b=3;
$d = razlika($a,$b);
$c = zbir($a,$b);
echo    " $c";
echo    "<br> $d";

/* 3. Zadatak */
echo    "<br>";

function    neparan($n)
{
    if ($n%2==0)
    {
        echo "tacan";
    }
    else
    {
        echo    "netacan";
    }
}


$n= 5;
neparan($n);

/* 4. Zadatak */
echo    "<br>";
echo    "<hr>";

function    maks2($a, $b)
{
    if($a>$b)
    {
        return $a;
    }
    else
    {
        return  $b;
    }
}

function    maks4($a, $b, $c, $d)
{
    $m1=maks2($a,$b);
    $m2=maks2($c,$d);
    //$max=maks2($m1, $m2);
    $max=maks2(maks2($a,$b),maks2($c,$d));
    return  $max;
}

$m=maks4(3,51,27,8);
echo    $m;

/* 5. Zadatak */
echo    "<br>";
echo    "<hr>";


function    slika($img)
{
    echo    "<img src='images/$img.jpg'>";
}

slika(2);
slika(1);

/* 6. Zadatak */
echo    "<br>";
echo    "<hr>";

function    boja($b)
{
    echo    "<p style='color:$b'> Tekst paragrafa </p>";
}

boja(green);


/* 7. Zadatak */
echo    "<br>";
echo    "<hr>";
   
function    vrednost($v)
{
    echo    "<p style='font-size:$v'> Tekst paragrafa </p>";
}
vrednost(24);

/* 8. Zadatak */
echo    "<br>";
echo    "<hr>";
function    vrednost1()
{
    for ($i=20; $i<=25;$i++)
    {
    echo    "<p style='font-size:$i'> Tekst paragrafa </p>";
    }
}
vrednost1();

/* 9. Zadatak */
echo    "<br>";
echo    "<hr>";

function    SedmiDan($rBrDana)
{
    if ($rBrDana % 7 == 1)
{
    echo    "Ponedeljak";
}
elseif($rBrDana % 7 == 2)
{
    echo    "Utorak";
}
elseif($rBrDana % 7 == 3)
{
    echo    "Sreda";
}
elseif($rBrDana % 7 == 4)
{
    echo    "Cetvrtak";
}
elseif($rBrDana % 7 == 5)
{
    echo    "Petak";
}
elseif($rBrDana % 7 == 6)
{
    echo    "Subota";
}
elseif($rBrDana % 7 == 0)
{
    echo    "Nedelja";
}
else
{
    echo    "Greska";
}
}

SedmiDan(16);
echo    "<br>";
// Za mesece u godini //

function    mesec($rBrMeseca)
{
switch($rBrMeseca)
{
        case ($rBrMeseca % 12 == 1):
        echo    "januar";
        break;
        case ($rBrMeseca % 12 == 2):
        echo    "februar";
        break;
        case ($rBrMeseca % 12 == 3):
        echo    "mart";
        break;
        case ($rBrMeseca % 12 == 4):
        echo    "april";
        break;
        case ($rBrMeseca % 12 == 5):
        echo    "maj";
        break;
        case ($rBrMeseca % 12 == 6):
        echo    "jun";
        break;
        case ($rBrMeseca % 12 == 7):
        echo    "jul";
        break;
        case ($rBrMeseca % 12 == 8):
        echo    "avgust";
        break;
        case ($rBrMeseca % 12 == 9):
        echo    "septembar";
        break;
        case ($rBrMeseca % 12 == 10):
        echo    "oktobar";
        break;
        case ($rBrMeseca % 12 == 11):
        echo    "novembar";
        break;
        case ($rBrMeseca % 12 == 0):
        echo    "decembar";
        break;
        default:
        echo    "greska";
        break;     
}
}
mesec(12);

/* 10. Zadatak */
echo    "<br>";
echo    "<hr>";

function    deljivSaTri($n,$m)
{
    $br=0;
    for($i=$n;$i<=$m;$i++)
    {
        if( $i % 3 == 0)
        {
            echo    "$i <br>";
            $br++;
        }
    }
    echo    $br;
}

deljivSaTri(3,12);

/* 11. Zadatak */
echo    "<br>";
echo    "<hr>";

function    deljivSaViseBroja($n,$m)
{
    for($i=$n;$i<=$m;$i++)
    {
        $br=0;
        if ($i % 2 == 0)
        {
            $br++;
        }
        if ($i % 3 == 0)
        {
            $br++;
        }
        if ($i % 5 == 0)
        {
            $br++;
        }
        if ($i % 7 == 0)
        {
            $br++;
        }
        if ($br == 2)
        {
            echo    "$i <br>";
        }
    }
}

deljivSaViseBroja(5,15);


?>