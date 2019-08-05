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
$indeks1 = 0;
$indeks2 = 0;
for($i = 1; $i < count($niz2); $i++)
{
    if($niz2[$i]>$max1)
    {
        $max1 = $niz2[$i];  
        $indeks1 = $i;
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

$i=0;
$suma3=0;
while($i< count($niz3))
{
    if($niz3[$i])
    {
        $suma3+=$niz3[$i];
        $i++;
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
echo    "<br>";

// 11. Zadatak //

function    StampajNiz($niz6)
{
    foreach($niz6 as $elem)
    {
        echo    $elem. " '";
    }
    echo    "<br>";
}

$niz6=array(12,-6,4,-43,23,-2,4,17);

foreach($niz6 as $vrednost2)
{
    $vrednost2*=(-1);
    echo    "$vrednost2 \n";
}
echo    "<br>";
StampajNiz($niz6);

// 12. Zadatak //

$niz7=array(2,6,4,7,3,2,7,9,9);

for($i=0;$i<count($niz7);$i+=2)
{
    if($niz7[$i]%2!=0)
    {
        $niz7[$i]=-$niz7[$i];
        echo    "$niz7[$i]\n";
    }
}

// 13. Zadatak //

$niz8=array(2,6,4,7,3,2,4,9);
$br2=0;
for($i=1;$i<count($niz7);$i+=2)
{
    if($niz8[$i]%2==0)
    {
        $br2++;
    }
}
echo    "<br>";
echo    $br2;
echo    "<br>";

// 14. Zadatak //

$prvaKlupa1 = array("Nikola","Milicaa","Jelena","Milica","Vanja","Jelena");

foreach($prvaKlupa1 as $duzina)
{
    echo strlen($duzina) . " ";
}
echo    "<br>";


// 15. Zadatak //

$prvaKlupa1 = array("Nikola","Milicaa","Jelena","Milica","Vanja","Jelena");
$max = -$prvaKlupa[0];
$maxRec = '';
foreach($prvaKlupa1 as $duzina)
{
    echo strlen($duzina) . " ";
    if($max<strlen($duzina))
    {
        $max= strlen($duzina);
        $maxRec=$duzina;
    }
}

echo   "<br> $max rec je $maxRec";

// 16. Zadatak //
echo   "<br>";
$prvaKlupa2 = array("Nikolasdsd","Milicaa","Jelenaa","Milicasadsad","Vanja","Jelena");
$suma5=0;
foreach($prvaKlupa2 as $duzElementa)
{
    $suma5+=strlen($duzElementa);
}
$srednja2=$suma5/count($prvaKlupa2);
echo    $srednja2;
echo    "<br>";
$br3=0;

foreach($prvaKlupa2 as $duzElementa)
{
    if(strlen($duzElementa)>$srednja2)
    {
        $br3++;
    }
}
echo    $br3;
echo    "<br>";

// 17. Zadatak //
echo   "<br>";

$prvaKlupa1 = array("Nikola","Milicaa","Jelena","Milica","Vanja","Jelena");
$br4=0;
foreach($prvaKlupa1 as $duzElementa1)
{
    if(strpos($duzElementa1,"a")!==false)
    {
        $br4++;
    }
}
echo    $br4;

// 18. Zadatak //
echo   "<br>";
echo   "<br>";

$prvaKlupa1 = array("Nikola","Milicaa","Jelena","Milica","Vanja","Jelena");
$br5=0;
foreach($prvaKlupa1 as $duzElementa1)
{
    if(strpos($duzElementa1,"a")=== 0 || strpos($duzElementa1, "A")===0)
    {
        $br5++;
    }
}
echo    $br5;

//2.Nacin
echo   "<br>";
$br6=0;
foreach($prvaKlupa1 as $duzElementa1)
{
    if(substr($duzElementa1, 0 , 1) == "a" || substr($duzElementa1, 0 , 1) == "A")
    {
        $br6++;
    }
}
echo   "Broj stringova koji pocinju na A: $br6";

// 19. Zadatak //
echo   "<br>";





// 20. Zadatak //
echo   "<br>";

$a=array(4,-7,2,6,1,-2);
$b=array(2,8,-2,6,3,-1);
$c=array();
for($i=0; $i<count($a); $i++)
{
    $c[] = $a[$i];
    $c[] = $b[$i];

}

StampajNiz($c);

// 21. Zadatak //
echo   "<br>";

$a=array(4,-7,2,6,12);
$b=array(2,8,-2,6,-2);
$d=array();
for($i=0; $i<count($a); $i++)
{
    $d[] = $a[$i]*$b[$i];

}

StampajNiz($d);

// 22. Zadatak //
echo   "<br>";

$a=array(4,-7,2,6,12,5,-2,3,2);
$n=count($a);
$e=array();
for($i=0; $i<$n/2; $i++)
{
    $e[] = ($a[$i]+$a[$n-$i-1])/2;

}
StampajNiz($e);


// 19. Zadatak za domaci//

$a=array();
$b=array();
foreach($a as $elem)
{
    if($elem>0)
    {
        //dodaj u $b
        
    }
}

// 21. Zadatak za domaci Uradjen Iznad//


?>