<?php

class Racunar
{
    private $sifra;
    private $boja;

    public function __construct($sifra,$boja)
    {
        $this->setSifra($sifra);
        $this->setBoja($boja);
    }
    public function setSifra($sifra)
    {
        if(strlen($sifra) >= 4)
        {
            $this->sifra=$sifra;
        }
        else
        {
            $this->sifra="aaaa";
        }
    }
    public function setBoja($boja)
    {
        if($boja=="grey" or $boja=="black" or $boja=="white")
        {
            $this->boja=$boja;
        }
        else
        {
            $this->boja="white";
        }
    }
    public function getSifra()
    {
        return $this->sifra;
    }
    public function getBoja()
    {
        return $this->boja;
    }

    public function ispis()
    {
        echo "<p> Racunar sa sifrom: " . $this->getSifra() . " i bojom: " . $this->getBoja() . "</p>";
    }

}

class Laptop extends Racunar
{
    private $masa;

    public function __construct($sifra, $boja, $masa)
    {
        parent::__construct($sifra,$boja);
        $this->setMasa($masa);
    }

    public function setMasa($masa)
    {
        if($masa>=100)
        {
            $this->masa=$masa;
        }
        else
        {
            $this->masa=100;
        }
       
    }
    public function getMasa()
    {
        return $this->masa;
    }
    public function ispisi()
    {
        echo $this->ispis() . " a laptop sa masom : " . $this->getMasa() . "<br>";
    }

}

$l1=new Laptop("421", "black", 170);
$l2=new Laptop(123456, "green", 130);
$l3=new Laptop("142" , "grey", 80);
$l4=new Laptop("142sd2" , "yellow", 180);
$l5=new Laptop("sdas24", "grey", 60);
$l6=new Laptop("sads24", "black", 150);

$laptop=array($l1, $l2, $l3, $l4, $l5, $l6);

function ispisiNiz($laptop)
{
    foreach ($laptop as $l)
    {
        $l->ispisi();
    }
}
/*
ispisiNiz($laptop);
echo "<hr>";  */

function prosekMasa($laptop)
{
    $suma=0;
    $br=0;
    foreach($laptop as $l)
    {
        $suma+=$l->getMasa();
        $br++;
    }
    $prosek = $suma/$br;
    return $prosek;
}

echo "<br>";
echo "Prosecna masa laptopa je: " . prosekMasa($laptop) . "<hr>";

function iznadProsek($laptop)
{
    foreach($laptop as $l)
    {
        if($l->getMasa()>prosekMasa($laptop))
        {
            $l->ispisi();
        }
    }
}

echo "Natprosecno teski laptopovi: ";
echo  iznadProsek($laptop) . "<hr>";

function najcescaBoja($laptop)
{
    $br=0;
    foreach($laptop as $l)
    {
        if($l->getBoja()=="black")
        {
            $br++;
        }
    }
    $br1=0;
    foreach($laptop as $l)
    {
        if($l->getBoja()=="grey")
        {
            $br1++;
        }
    }
    $br2=0;
    foreach($laptop as $l)
    {
        if($l->getBoja()=="white")
        {
            $br2++;
        }
    }
    if($br>$br1 and $br>$br2)
    {
        echo "black";
    }
    elseif($br1>$br and $br1>$br2)
    {
        echo "grey";
    }
    elseif($br2>$br and $br2>$br1)
    {
        echo "white";
    }
    else
    {
        echo "white";
    }
}

echo najcescaBoja($laptop);


?>