<?php

// 3. Zadatak //

echo    "<br>";
$brojevi = array(3,14,5,2,9,5);
$ukupno = count($brojevi);
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


$niz=array(1,2,18,4,5);
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

?>