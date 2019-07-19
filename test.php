<html>
<head>

</head>

<body>
<?php

$godinaRodjenja = 1994;
$pol = "Z";
$tezina = 66;
$visina = 173;
$BMI = $tezina / ($visina / 100)**2;
$godina = date("Y")-$godinaRodjenja;

if ($pol == "M")
{
    if ($BMI < 18.5 )
    {
        echo    "<img src='images/m1.jpg'>  Osoba ima $godina godina i $BMI indeks telesne mase.";
    }
    elseif ($BMI < 24.9)
    {
        echo    "<img src='images/m2.jpg'>  Osoba ima $godina godina i $BMI indeks telesne mase.";
    }
    elseif ($BMI < 29.9)
    {
        echo    "<img src='images/m3.jpg'>  Osoba ima $godina godina i $BMI indeks telesne mase.";
    }
    else
    {
        echo    "<img src='images/m4.jpg'>  Osoba ima $godina godina i $BMI indeks telesne mase.";
    }
}
elseif ($pol == "Z")
{
    if ($BMI < 18.5 )
    {
        echo    "<img src='images/z1.jpg'>  Osoba ima $godina godina i $BMI indeks telesne mase.";
    }
    elseif ( $BMI < 24.9)
    {
        echo    "<img src='images/z2.jpg'>  Osoba ima $godina godina i $BMI indeks telesne mase.";
    }
    elseif ( $BMI < 29.9)
    {
        echo    "<img src='images/z3.jpg'>  Osoba ima $godina godina i $BMI indeks telesne mase.";
    }
    else
    {
        echo    "<img src='images/z4.jpg'> Osoba ima $godina godina i $BMI indeks telesne mase.";
    }
}

?>
</body>
</html>