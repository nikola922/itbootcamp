<?php

function    mojaFunkcija()
{
    echo    "Zdravo svete";
    echo "<br>";
    echo    "<hr>";
}
mojaFunkcija(); //Poziv Funkcije (Prazna funkcija)
mojaFunkcija(); 


function    mojaFunkcija1($text)
{
    echo    $text;
    echo "<br>";
    echo    "<hr>";
}

$text = "BRabsdb";
mojaFunkcija1($text);

function    korisnik($ime, $prezime)
{
    echo $ime, $prezime;
    echo "<br>";
    echo    "<hr>";
}

korisnik    ("55 ", 55);
korisnik    ("Jablan ", " Jablanovic");
korisnik    ("Zoran ", " Mitrovic");


function    zdravo()
{
    echo    "Zdravo! <br>";

}

for($i=1; $i<=5; $i++)
{
    zdravo();
}
echo    "<hr>";


function    it($i)
{
    echo    "Broj $i ";
}

for($i=1; $i<=5; $i++)
{
    it($i); zdravo();
}
echo    "<hr>";
// Vjezba 1//

function Ime($i)
{
    echo    "Nikola ";
    
}
function Prezime($i)
{
    
    echo    "Tonic";
    echo "<br>";
}

for($i=1; $i<=5; $i++)
{
    Ime($i); Prezime($i);
}

// Vjezba 2 //

function    zbir($a, $b)
{
    $rez = $a + $b;
    echo    "<hr>";
    echo    "$rez";
    echo    "<br>";
}




$x=14;
$y=22;
zbir($x, $y);
zbir(14224, 41232);
zbir($x , $x);
zbir(zbir($x,$y),$y);  // ?

// //
echo    "<br>";
echo    "<hr>";
echo    "<br>";

$a= 2;
$b= 4;
function    zbir1($a,$b)
{
    $rez = $a + $b;
    return $rez;
}

$rezultat = zbir1($a,$b);
echo    $rezultat;

$c = zbir1($a,$b);
$d = zbir1($x,$y);
$novizbir = zbir1($c, zbir1($a,$b));
echo    " <br> $novizbir";

// v ?////





















































?>