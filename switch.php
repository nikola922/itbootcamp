<html>
<head>
<style>
    .blue 
    {
        color: blue;
        text_align: center;
    }
    
</style>
</head>

<body>
<?php

$boja = "";

switch ($boja)
{
    case "crvena":
        echo    "Odabrali ste crvenu boju!";
        break;
    case  "plava":
        echo     "Odabrali ste plavu boju!";
        break;
    case    "zelena":
        echo    "Odabrali ste zelenu boju!";
        break;
    default:
        echo    "niste odabrali crvenu,plavu i zelenu boju!";
}

/* 1.| Zadatak */
echo "<br>";

$dan = date("N");
switch ($dan)
{
    case 1:
        echo    "Ponedeljak";
        break;
    case 2:
        echo    "Utorak";
        break;
    case 3:
        echo    "Sreda";
        break;
    case 4:
        echo    "Cetvrtak";
        break;
    case 5:
        echo    "Petak";
        break;
    case 6:
        echo    "Subota";
        break;
    case 7:
        echo    "Nedelja";
        break;
    default:
        echo    "Error";
}

/* 2.| Zadatak */
echo "<br>";
$ocena = 5;

switch ($ocena)
{
    case $ocena <= 1.5;
        echo    "nedovoljan";
        break;
    case $ocena <= 2.5;
        echo    "dovoljan";
        break;
    case $ocena <= 3.5;
        echo    "dobar";
        break;
    case $ocena <= 4.5;
        echo    "vrlo dobar";
        break;
    case $ocena <= 5;
        echo    "odlican";
        break;
    default:
        echo    "Error";
}

/* 3.| Zadatak */
echo "<br>";

$broj = 7;

switch ($broj)
{
    case 0:
        echo    "nula";
        break;
    case 2:
        echo    "dvojka";
        break;
    case 4:
        echo    "cetvorka";
        break;
    case 6:
        echo    "sestica";
        break;
    case 8:
        echo    "oscmica";   
        break;
    default:
        echo    "pogresan unos";
}

/* 4.| Zadatak */
echo "<br>";

$broj1 = 20;
$broj2 = 20;
$operacija = "m";
switch ($operacija)
{
    case "m":
        echo    $broj1*$broj2;
        break;
    case "d":
        echo    $broj1/$broj2;
        break;
    case "s":
        echo    $broj1+$broj2;
        break;
    case "o":
        echo    $broj1-$broj2;
        break;
    default:
        echo    "pogresan unos";
}

/* 5.| Zadatak */
echo "<br>";

$dan = date("N");
switch ($dan)
{
    case 1:
        echo    "Ostalo jos 5 dana";
        break;
    case 2:
        echo    "Ostalo jos 4 dana";
        break;
    case 3:
        echo    "Ostalo jos 3 dana";
        break;
    case 4:
        echo    "Ostalo jos 2 dana";
        break;
    case 5:
        echo    "Ostalo jos 1 dan";
        break;
    default:
        echo    "Vikend je.";
}

/* 6.| Zadatak */
echo "<br>";

$mesec = date("n");
switch ($mesec)
{
    case 1:
        echo    "Januar";
        break;
    case 2:
        echo    "Februar";
        break;
    case 3:
        echo    "Mart";
        break;
    case 4:
        echo    "April";
        break;
    case 5:
        echo    "Maj";
        break;
    case 6:
        echo    "Jun";
        break;
    case 7:
        echo    "Jul";
        break;
    case 8:
        echo    "Avgust";
        break;
    case 9:
        echo    "Septembar";
        break;
    case 10:
        echo    "Oktobar";
        break;
    case 11:
        echo    "Novembar";
        break;
    case 12:
        echo    "Decembar";
        break;
    default:
        echo    "13ti Mesec";
}

/* 7.| Zadatak */
echo "<br>";

$mesec=date("");

echo $mesec;


/* 8.| Zadatak */
echo "<br>";


/* 1.| Zadatak */
echo "<br>";

$i = 1;
while ($i <= 20 )
{
    
    echo    $i;
    echo    "<br>";
    $i++;
}

/* 2.| Zadatak */
echo "<br>";
$i = 20;
while ( $i <=20 && $i>0)
{
    echo    $i;
    echo    "<br>";
    $i--;
}

/* 3.| Zadatak */
echo "<br>";

$i = 1;
while ( $i<=20)
{
    if ($i%2 == 0)
    echo   $i;
    echo    "<br>";
    $i++;
}

/* 4.| Zadatak */
echo "<br>";

$a = 80;
$b = 5;
$kol = 0;
$ost = $a;
while ($ost >= $b)
{
    $ost = $ost - $b;
    $kol++;
}
echo "$a = $kol * $b + $ost";
echo    "<br>";

/* 4.| Zadatak */
echo "<br>";

$a = 80;
$b = 5;
$zbir = 0;
$ceoDeo = 0;
while ($zbir <= $a)
{
    $zbir = $zbir + $b;
    $ceoDeo = $ceoDeo + 1;
    $ost = $a - $zbir;
}
echo "$ceoDeo i $ost";

echo    "<br>";
$text = "random text ...";
$i=1;
while ($i <=6)
{
if ($i % 3 == 1)
    {
        echo    "<p class='blue'>$text </p>";
    }
    elseif ($i % 3 == 2)
    {
        echo    "<p class='red'> $text </p>";
    }
    else
    {
        echo    "<p class='yellow'> $text </p>";
    }
}

?>
</body>

</html>