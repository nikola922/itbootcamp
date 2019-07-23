<?php

// 1. Zadatak *//

$AutoNiz= array("Opel Astra"=>2002,"Opel Insignia"=>2013,"Renault Megane"=>2005,"Nissan Navara"=>2010);

foreach($AutoNiz as $elem => $elem_value)
{
    echo "Key=" . $elem . ", Value=" .$elem_value;
    echo    "<br>";
}

echo    "<br>";

foreach($AutoNiz as $elem => $elem_value)
{
    if(date("Y")-$elem_value>=10)
    {
    echo "Key=" . $elem . ", Value=" .$elem_value;
    echo    "<br>";
    }
}

echo    "<br>";

foreach($AutoNiz as $elem => $elem_value)
{
    if(strpos($elem,"Opel")!==false && $elem_value>=2000)
    {
        echo "Key=" . $elem . ", Value=" .$elem_value;
        echo    "<br>";
    }
}

// 2. Zadatak //
echo    "<br>";
echo    "<br>";

$OsobeNiz = array("Nikola"=>183,"Milos"=>179,"Stefan"=>192,"Marko"=>177,"Veljko"=>172);
foreach($OsobeNiz as $Ime => $Visina)
{
    echo    "Ime=" . $Ime . ", Value=" . $Visina;
    echo    "<br>";
}
echo    "<hr>";
echo    "<hr>";
$suma=0;
foreach($OsobeNiz as $Ime => $Visina)
{
    $suma+=$Visina;
}
$prosek=$suma/ count($OsobeNiz);
foreach($OsobeNiz as $Ime => $Visina)
{
    if($Visina > $prosek)
    {
        echo    "Ime=" . $Ime . ", Value=" . $Visina;
        echo    "<br>";
    }
}
echo    "<hr>";
foreach($OsobeNiz as $Ime => $Visina)
{
    // if($elem1_value < 180 && substr($elem1, 0, 1)==="V") 
    if($Visina < 180 && strpos($Ime,"V")!==false)
    {
        echo    "Ime=" . $Ime . ", Value=" . $Visina;
        echo    "<br>";
    }
}
echo    "<hr>";
$max=0;

foreach($OsobeNiz as $Ime => $Visina)
{
    if($max<$Visina)
    {
        $max=$Visina;
    }
}
echo    "Najvisa visina je $max";

foreach($OsobeNiz as $Ime => $Visina)
{
    if($max== $Visina)
    {
        echo    "Osoba $Ime je visoka $Visina cm";
        break;
    }
}



// 3. Zadatak //
echo    "<br>";
echo    "<br>";

$Student = array("Tehnicka Mehanika" => 7,"Matematika" => 8,"Fizika"=> 6,"Informatika"=>10);
foreach($Student as $ocena => $ocenaV)
{
    echo    "Predmet=" . $ocena . ", Ocena=" . $ocenaV;
    echo    "<br>";
}

?>