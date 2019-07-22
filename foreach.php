<?php

$niz=array(1,2,3,4,5);
foreach($niz as $vrednost)
{
    echo    "$vrednost \n";
}
echo    "<br>";

foreach(array("sads","sdasd","sdsd")as $a)
{
    echo    "$a \n";
}

$niz1=array(4,6,1,-4,2,5);
$suma=0;
foreach($niz as $elem)
{
    $suma+=$elem;
}
echo    $suma;
echo    "<br>";
?>