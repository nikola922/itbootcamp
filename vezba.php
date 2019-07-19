<html>
    <head>
    <style>
    img {
        width: 350px;

    }
    </style>
    </head>

<body>
    <?php
    /* Data je slika sa svojom putanjom i imenom. Prikazati datu sliku na veb stranici */

    $putanja = "images/slika1.jpg";
    echo "<img src='$putanja'>";
    /* Za radnika je poznato:
        - broj radnih sati u mesecu
        - cena rada po satu
        - procenat odbijanja na osnovu doprinosa
        Odrediti bruto i neto dohodak radnika.
        */
    
    $brojSati = 160;
    $cena = 5;
    $procenat = 65;

    $bruto = $brojSati * $cena;
    $neto = $bruto - $bruto * $procenat / 100;
    echo "<p> Bruto zarada: $bruto &euro;,
    Neto zarada $neto &euro; </p>";

    /* Broj minuta pretvoriti u sate i minute */
    $brojMinuta = 63;
    $sati = (int)($brojMinuta / 60);
    $minuti = $brojMinuta % 60;
    echo "<p> Broj sati : $sati, broj minuta: $minuti.</p>";
    
    /* Ako je vrednost neke robe x dinara, odrediti najmanju kolicinu novcanica od 500dinara,
     100din, 10din i 1din 
    kojima se moze platiti data roba. */
    $x = 2399;
    $petsto = (int)($x / 500);
    $x = $x % 500;
    $sto = (int)($x / 100);
    $x = $x % 100;
    $deset = (int)($x / 10);
    $dinar = $x % 10;

    echo "<p> Novcanice od petsto : $petsto, Novcanice od sto: $sto ,
    Novcanice od deset: $deset i od dinar: $dinar</p>";
    echo "<br>";

    $a = 32;
    $b = 12;
    if ($a < 20) 
    {
        echo "a je manje od 20";
    }
    elseif ($a < 30) 
    {
        echo "a je manje od 30";    
    }
    else {
        echo "a je vec od 30";
    }

    

    

















    ?>
    
</body>
</html>
