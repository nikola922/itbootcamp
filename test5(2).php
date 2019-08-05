<?php

//1. Zadatak //


function    prosecna($plate)
{
    $suma=0;
    for($i=0;$i<count($plate);$i++)
    {
        $suma+=$plate[$i];
    }
    $prosek = $suma/ count($plate);
    echo $prosek;
}

function    ispisiNiz($plate,$prosek,$color1,$color2)
{
    foreach($plate as $elem)
    {
        if($elem>$prosek)
        {
            echo    "<p 'style=color:$color1'> $elem </p>";
        }
        elseif($elem<$prosek)
        {
            echo    "<p style='color:$color2'> $elem </p>";
        }
    }
}

$plate = array(24000,46000,45000,38000,20000);
prosecna($plate);
echo    "<hr>";

$suma=0;
for($i=0;$i<count($plate);$i++)
{
    $suma+=$plate[$i];
}
$prosek = $suma/ count($plate);

ispisiNiz($plate,$prosek,"green","blue");
echo    "<hr>";

function    indeksMinMax($plate)
{
    $max=$plate[0];
    $min=$plate[0];
    $indeks1 = 0;
    $indeks2 = 0;
    for($i = 1; $i < count($plate); $i++)
    {
        if($plate[$i]>$max)
        {
            $max = $plate[$i];  
            $indeks1 = $i;
        }
    }
    for($i = 1; $i < count($plate); $i++)
    {
        if($plate[$i]<$min)
        {
            $min = $plate[$i];  
            $indeks2 = $i;
        }
    }
    $suma1= $indeks1+$indeks2;
    echo    "Zbir indeksa je $suma1";
}

indeksMinMax($plate);
echo    "<hr>";

function    slika($plate, $slika1, $slika2)
{
    $suma=0;
    for($i=0;$i<count($plate);$i++)
    {
    $suma+=$plate[$i];
    }
    $prosek = $suma/ count($plate);
    $br=0;
    for($i = 1; $i < count($plate); $i++)
    {
        if($plate[$i]>$prosek)
        {
            $br++;
        }
    }
    if($br> (count($plate)/2))
    {
        echo    $slika1;
    }
    else
    {
        echo    $slika2;
    }
    
}
$slika1 = "<img src='srecan.jpg'>";
$slika2 = "<img src='tuzan.jpg'>";

slika($plate, $slika1, $slika2);

?>