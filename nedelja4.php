<html>
<head>
<style>
    .blue 
    {
        color: blue;
        text_align: center;
    }
    .yellow 
    {
        color : yellow;
        text_align: center;
    }
    .red 
    {
        color: red;
    }
</style>
</head>

<body>
<?php

/* 1. Zadatal */
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
    $i++;
}

/* 6. Zadatak */
echo    "<br>";

$a = 1;
$Suma = 0;
while ($a <= 100)
{
    $Suma = $Suma + $a;
    $a++;
}  
echo "Suma brojeva je $Suma";

/* 7. Zadatak */
echo    "<br>";
$a = 1;
$n = 1000;
$Suma = 0;
while ($a <= $n)
{
    $Suma = $Suma + $a;
    $a++;
}
echo "Suma brojeva je $Suma";

/* 8. Zadatak */
echo    "<br>";
$n = 1;
$m = 100;
$Suma = 0;
while ($n <= $m)
{
    $Suma = $Suma + $n;
    $n++;
}
echo "Suma brojeva je $Suma";

/* 9. Zadatak */
echo    "<br>";
$n = 1;
$m = 3;
$Proizvod = 1;
while ($n <= $m)
{
    $Proizvod = $Proizvod * $n;
    $n++;
}
echo "Proizvod brojeva je $Proizvod";

/* 10. Zadatak */
echo    "<br>";
$n = 1;
$m = 3;
$Suma = 0;
while ($n <= $m)
{
    $Suma += $n**2;
    $n++;
}
echo "Suma brojeva je $Suma";
echo    "<br>";


/* FOR PETLJA */
/* 1. */
echo    "<br>";
for ($i=5; $i <=20; $i++)
{
    echo    "Na redu je broj $i ";
    echo    "<br>";
}
/* 2. */
echo    "<br>";
for ($i=20; $i>=1; $i--)
{
    echo    "Na redu je broj $i ";
    echo    "<br>";
}

/* 3. */
echo    "<br>";
for ($i=1;$i <=20; $i++)
{
    if ($i%2==0)
    {
        echo    "Na redu je broj $i ";
        echo    "<br>";
    }
}
/* 4. */
echo    "<br>";

for ($i=5; $i<=15; $i++)
{
    $doublei = 2 * $i;
    echo    "Na redu je broj $doublei";
    echo    "<br>";
}

/* 5. */
echo    "<br>";
$Suma = 0;
for ($i=1; $i<=100; $i++)
{
    $Suma += $i;
}
echo    "Suma brojeva je $Suma";

/* 6. */
echo    "<br>";
$n= 100;
$Suma = 0;
for ($i=1; $i<=$n; $i++)
{
    $Suma += $i;
}
echo    "Suma brojeva je $Suma";

/* 7. */
echo    "<br>";
$n= 1;
$m = 50;
$Suma = 0;
for ($n; $n<=$m; $n++)
{
    $Suma += $n;
}
echo    "Suma brojeva je $Suma";

/* 8. */
echo    "<br>";
$n= 1;
$m = 5;
$Proizvod = 1;
for ($n; $n<=$m; $n++)
{
    $Proizvod *= $n;
}
echo    "Proizvod brojeva je $Proizvod";

/* 9. */
echo    "<br>";
$n= 1;
$m = 5;
$Suma = 0;
for ($n; $n<=$m; $n++)
{
    $Suma += pow($n,2);
}
echo    "Suma kvadrata brojeva je $Suma";

/* 10. */
echo    "<br>";
echo    "<hr>";
$i=1;
for ($i=1;$i<=3;$i++)
{
    if ($i == 1)
    {
        echo    "<img src='images/m1.jpg' Slika 1>";
    }
    elseif ($i == 2)
    {
        echo    "<img src='images/m2.jpg' Slika 2>";
    }
    else
    {
        echo    "<img src='images/m3.jpg' Slika 3>";
    }
}

/* 10. */
echo    "<br>";
echo    "<hr>";
for ($i=1;$i<=3;$i++)
{
    echo    "<img src='images/$i.jpg'>";
    echo    "<hr>";
}

/* 11. */
echo    "<br>";
echo    "<br>";
$suma = 0;
for ($i=1; $i<=30; $i++)
{
    if ($i % 9 == 0)
    {
        $suma += $i;
    }
}
echo    $suma;
echo    "<br>";

/* 12. */
echo    "<br>";
$Proizvod = 1;
for ($i=20; $i<=100; $i++)
{
    if ($i % 11 == 0)
    {
        $Proizvod *= $i;
    }
}
echo    $Proizvod;
echo    "<br>";

/* 13. */
echo    "<br>";
echo    "<hr>";
$br=0;
for ($i=5; $i<=150; $i++)
{
    if ($i%13 == 0)
    {
        $br++;
    }
}
echo    "$br";

/* 14. */
echo    "<br>";
echo    "<hr>";
$n= 15;
$m= 32;
$suma = 0;
$br = ($m-$n + 1);
for ($i=$n; $i<=$m; $i++)
{
    $suma += $i;
}

$ArSr = $suma / $br;
echo    "$ArSr";

/* 15. */
echo    "<br>";
echo    "<hr>";
$n= -5;
$m= 32;
$br1 = 0;
$br2 = 0;
for ($i=$n;$i<=$m; $i++)
{
    if ($i < 0)
    {
         $br1 += 1;
    
    }
    else
    {
         $br2 += 1;
    }
}
echo    "$br1 su pozitivni, a $br2 su negativni brojevi.";

/* 16. */
echo    "<br>";
echo    "<hr>";
$n= 5;
$m= 50;
$br1 = 0;
$br2 = 0;
for ($i=$n;$i<=$m; $i++)
{
    if ($i % 3 == 0)
    {
         $br1 += 1;
    
    }
    elseif ($i % 5 == 0)
    {
         $br2 += 1;
    }
}
echo    "$br1 brojeva je deljivo sa 3, a $br2 brojeva je deljivo sa 5.";

/* 16. */
echo    "<br>";
echo    "<hr>";
$br= 0;
for ( $i = 5; $i <= 50; $i++)
{
    if($i%3==0 || $i%5==0)
    {
        $br++;
    }
}
echo    "$br";

/* 17. */
echo    "<br>";
echo    "<hr>";
$n=10;
$m=30;
$sum=0;
$br=0;
for ($i=$n; $i<=$m;$i++)
{
    $pos= $i%10;
    if ($pos == 4)
    {
        $sum += $i;
        $br++;
    }
}
echo    "Suma je $sum, broj je $br";

/* 18. */
echo    "<br>";
echo    "<hr>";
$n=10;
$m=30;
$a = 4;
$br=0;
for ($i=$n; $i<=$m;$i++)
{
    if ($i %$a== 0)
    {
        $br++;
    }
}
echo    "$br";

/* 19. */
echo    "<br>";
echo    "<hr>";
$n=10;
$m=30;
$a = 4;
$br=0;
for ($i=$n; $i<=$m;$i++)
{
    if ($i %$a!= 0)
    {
        $br++;
    }
}
echo    "$br";


/* 20. */
echo    "<br>";
echo    "<hr>";
$n=10;
$m=30;
$a = 5;
$sum=0;

for ($i=$n; $i<=$m;$i++)
{
    if ($i %$a!= 0)
    {
        $sum += $i;
    
    }
}
echo    "$sum je suma brojeva";

/* 21. */
echo    "<br>";
echo    "<hr>";
$n=10;
$m=30;
$a = 15;
$Proizvod=1;
for ($i=$n; $i<=$m;$i++)
{
    if ($i % $a == 0)
    {
        $Proizvod *= $i; 
    }
}
echo    "$Proizvod";a







?>

</body>
</html>

