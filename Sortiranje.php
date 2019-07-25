<?php

$niz=array(2,4,6,8,10);
rsort($niz);
foreach($niz as $vrednost)
{
    echo    "$vrednost <br>";
}
echo    "<hr>";
$niz1=array("Volvo"=>15,"BMW"=>13,"Audi"=>20);
asort($niz1);
foreach($niz1 as $Vred => $Vred_value)
{
    echo    "Kljuc je: $Vred a vrednost : $Vred_value <br>";
}

function    stampajniz($niz)
{
    foreach($niz as $vrednost)
    {
        echo    $vrednost. " ";
    }
}
// 1.Zadatak //
echo    "<hr>";
$boje=array("#32a852"=>"green","#327ba8"=>"blue","#e0d31d"=>"yellow");
krsort($boje);
foreach($boje as $vred1 => $vred1_value)
{
    echo    "Kljuc je $vred1 a vrednost : $vred1_value | ";
}

stampajniz($boje);



?>