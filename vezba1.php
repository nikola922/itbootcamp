<html>
<head>

</head>

<body>
    <?php 
    /* 1. */
        $a = 10;
        $b = 20;
        if ($a > $b)
        {
            echo    "a je veci od b";
        }
        else {
            echo "a je manje od b";
        }
    /* 2. */
    echo "<br>";
     $t = 10;
     if ($t >= 0)
     {
         echo   "t je u plusu";
     }
     else 
     {
         echo   "t je u minusu";
     }


    /* 3. */
    echo "<br>";
     $pol = "Z";
     if ($pol == "M" )
     {
         echo   "<img src='pol je Muski";
     }
     elseif ($pol == "Z")
     {
         echo   "pol je Zenski";
     }

    /* 4. */
    echo "<br>";
    $vreme = date("H");
    if ($vreme >= 12)
    {
        echo "PM";
    }
    else   
    {
        echo    "AM";
    }
     /* 5. */
     echo "<br>";
    $godina = date("Y");
    $godinaRodjenja = 2002;
    if ($godina - $godinaRodjenja >= 18)
    {
        echo    "punoletna";
    }
    else
    {
        echo    "maloletna";
    }
    
     /* 6. */
     echo "<br>";
     $a = 14;
     $b = 50;
     $c = 15;
     if ($a > $b && $a > $c)
     {
         echo   "a je najveci broj";
     }
     elseif ($b>$a && $b>$c)
     {
         echo   "b je najveci broj";
     }
     else
     {
         echo   "c je najveci broj";
     }
     /* 6. */
     echo "<br>";
     $a = 14;
     $b = 50;
     $c = 65;
        echo max($a, $b, $c);
     /* 7. */
     echo "<br>";
     $a = 50;
     if ($a <= 50)   
     {
         echo   "Ucenik pada";
     }
     elseif ($a <= 60)
     {
        echo   "Ucenik dobija 6";
    }
    elseif ($a <= 70)
    {
       echo   "Ucenik dobija 7";
   }
   elseif ($a <= 80)
   {
      echo   "Ucenik dobija 8";
  }
  elseif ($a <= 90)
  {
     echo   "Ucenik dobija 9";
 }
 elseif ($a <= 100)
  {
     echo   "Ucenik dobija 10";
 }
 /* 8. */
 echo "<br>";
 $dan = date("N");
 if ($dan <= 5)
 {
     echo   "radni dan";
 }
 else
 {
    echo    "vikend";
 }
 /* 9. */
 echo "<br>";
$vreme = date ("G");
if ($vreme < 12)
{
    echo    "<b> Dobro jutro </b>";
}
elseif ($vreme < 18)
{
    echo    "<b> Dobar dan </b>";
}
else
{
    echo    "<b> Dobro vece </b>";
}
 /* 10. */
 echo "<br>";

 $dan1 = 15;
 $mes1 = 3;
 $god1 = 2018;
 $dan2 = 15;
 $mes2 = 6;
 $god2 = 2018;

if ($god2 > $god1)
{
    echo    "god1 je ranija";
}
elseif ($god2 < $god1)
{
    echo    "god2 je ranija";
}
elseif ($mes2 > $mes1)
{
    echo    "god1 je ranija";
}
elseif ($mes2 < $mes1)
{
    echo    "god2 je ranija";
}
elseif ($dan2 > $dan1)
{
    echo    "god1 je ranija";
}
elseif ($dan2 < $dan1)
{
    echo    "god2 je ranija";
}
else
{
    echo    "godine su identicne";
}

/* 11. */
echo "<br>";

$vreme = date("G");
if ($vreme > 9 && $vreme < 17)
{
    echo    "firma radi";
}
else
{
    echo    "firma ne radi";
}

/* 12. */
echo "<br>";
$poc1 = 3;
$kraj1 = 23;
$poc2 = 9;
$kraj2 = 15;
if ($poc1 < $poc2)
{
    if ( $poc2 <= $kraj1)
    {
        echo    "da";
    }
    else
    {
        echo    "ne";
    }
}
elseif ($poc1 > $poc2)
{
    if ($poc1 <= $kraj2)
    {
        echo    "da";
    }
    else
    {
        echo "ne";
    }
}
/* 13. */
echo "<br>";

$broj = 142324;
if ($broj % 2 == 0)
{
    echo    "paran";
}
else
{
    echo    "neparan";
}
/* 14. */
echo "<br>";

$broj = 81;
if ($broj % 3 == 0)
{
    echo    "Deljiv sa 3";
}
else
{
    echo    "Nije";
}

/* 15. */
echo "<br>";

$broj1 = 75;
$broj2 = 55;
if ($broj1 > $broj2)
{
    $rez = $broj1 - $broj2;
}
else
{
    $rez = $broj2 - $broj1;
}
echo "$rez";

/* 16. */
echo "<br>";
$br = 22;
if ($br <= 0)
{
    $br = $br - 1;
}
elseif ($br >= 0)
{
    $br = $br + 1;
}
echo    $br;

/* 17. */
echo "<br>";
$a = 25;
$b = 42;
$c = 60;
$max = max ($a , $b, $c );
$min = min ($a , $b, $c );  
if ($a==$max && $b==$min)
{
    echo    "$c je srednja vrednost";
}
elseif   ($a==$min && $b==$max)
{
    echo    "$c je srednja vrednost";
}
elseif ($a==$min && $c==$max)
{
    echo    "$b je srednja vrednost";
}
elseif ($a==$max && $c==$min)
{
    echo    "$b je srednja vrednost";
}
elseif ($b==$max && $c==$min)
{
    echo    "$a je srednja vrednost";
}
elseif ($b==$min && $c==$max)
{
    echo    "$a je srednja vrednost";
}

/* 17. */
echo "<br>";

$broj = 7.5;
if ((int)($broj)== $broj)
{
    echo    "ceo";
}
else
{
    echo    "decimalan";
}


/* 18. */
echo "<br>";

$pol = "Z";
$godine = 12;
if ($pol == "Z" and $godine >= 18)
{
    echo    "punoletna";
}
elseif ($pol == "Z" and $godine < 18)
{
    echo   "maloletna";
}
elseif ($pol == "M" and $godine >= 18)
{
    echo    "punoletan";
}
else
{
    echo    "maloletan";
}

/* 18. */
echo "<br>";

$temp = 42;
if ($temp < -15 or $temp > 40)
{
    echo    "ekstremna temperatura";
}
else
{
    
}

/* 18. */
echo "<br>";

$godina = date("Y");
if ($godina % 4 == 0 && $godina % 100 != 0 && $godina % 400 != 0)
{
    echo    "prestupna";
}
else
{
    echo    "nije prestupna";
}

    ?>
</body>

</html>