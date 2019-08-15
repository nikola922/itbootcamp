<?php

class Brojevi
{
    private $br1;
    private $br2;

    public function __construct($br1, $br2)
    {
        $this->br1 = $br1;
        $this->br2 = $br2;
    }

    public function setBr1($br1)
    {
        $this->br1 = $br1;
    }

    public function getBr1()
    {
        return $this->br1;
    }

    public function setBr2($br2)
    {
        $this->br2 = $br2;
    }

    public function getBr2()
    {
        return $this->br2;
    }

    public function sabiranje($a, $b)
    {
        $rez = $a + $b;
        return $rez;
    }

    public function oduzimanje()
    {
        $rez = $this->br1 - $this->br2;
        return $rez;
    }

    public function deljenje()
    {
        $rez = $this->br1 / $this->br2;
        return $rez;
    }

    public function mnozenje()
    {
        $rez = $this->br1 * $this->br2;
        return $rez;
    }
}

$Broj1 = new Brojevi(5,3);
echo $Broj1->oduzimanje() . "<br>";
echo $Broj1->deljenje() . "<br>";
echo $Broj1->mnozenje() . "<br>";

$obj=new Brojevi(7,2);
$a=$obj->getBr1();
$a2=$obj->getBr2();

$r=$obj->sabiranje($a, $a2);
echo    "<br> zbir je " . $r;

class Auto
{
    public $boja;
    public $tip;
    public $godiste;

    public function __construct($boja, $tip, $godiste)
    {
        $this->boja = $boja;
        $this->tip=$tip;
        $this->godiste=$godiste;
    }

    public function setBoja($boja)
    {
        $this->boja = $boja;
    }

    public function setTip($tip)
    {
        $this->tip = $tip;
    }

    public function setGodiste($godiste)
    {
        $this->godiste = $godiste;
    }

    public function getBoja()
    {
        return $this->boja;
    }

    public function getTip()
    {
        return $this->tip;
    }

    public function getGodiste()
    {
        return $this->godiste;
    }
}

$auto1 = new Auto("red", "limuzina", 2003);
$auto2 = new Auto("black", "SUV", 2013);
$auto3 = new Auto("green", "Crossover", 2015);
$auto4= new Auto("yellow", "karavan", 1999);
$automobili = array($auto1, $auto2,$auto3);
$automobili[] = $auto4;

foreach($automobili as $auto)
{
    echo    "<br> Ovo je auto " . $auto->getBoja() . " boje i tipa "
         . $auto->getTip() . " a godiste je " . $auto->getGodiste(); 
}


class Pacijent
{
    private $ime;
    private $tezina;
    private $visina;

    public function __construct($ime, $tezina, $visina)
    {
        $this->ime = $ime;
        $this->tezina = $tezina;
        $this->visina = $visina;
    }

    public function setIme($ime)
    {
        $this->ime = $ime;
    }

    public function setTezina($tezina)
    {
        $this->tezina = $tezina;
    }

    public function setVisina($visina)
    {
        $this->visina = $visina;
    }

    public function getIme()
    {
        return $this->ime;
    }

    public function getTezina()
    {
        return $this->tezina;
    }

    public function getVisina()
    {
        return $this->visina;
    }

    public function bmi()
    {
        $bmi = $this->tezina * 10000 / ($this->visina * $this->visina);
        return $bmi;
    }

    public function srednja($pacijenti)
    {
        $suma=0;
        foreach($pacijenti as $pac)
        {
            $suma=$suma + $pac->getVisina();
        }
        return $suma/count($pacijenti);

    }

    public function minTezina()
    {
        $min=$pacijenti[0]->getTezina();
        foreach($pacijenti as $pac)
        {
            if($min>$pac->getTezina())
            {
                $min=$pac->getTezina();
            }
        }
        echo "<br> " . $min;
    }
}

$pac1 = new Pacijent("Zoran", 77, 186);
$pac2 = new Pacijent("Miodrag", 72, 186);
$pac3 = new Pacijent("Miljana", 65, 173);

$pacijenti = array($pac1, $pac2, $pac3);

foreach($pacijenti as $pac)
{
    echo    "<br> Pacijent sa imenom "
            . $pac->getIme() . ", tezinom "
            . $pac->getTezina() . " i visinom "
            . $pac->getVisina() ;
}

$suma=0;

foreach($pacijenti as $pac)
{
    $suma=$suma + $pac->getVisina();
}
$srV= $suma/count($pacijenti);
echo    "<br>" . $srV;


$min=$pacijenti[0]->getTezina();
foreach($pacijenti as $pac)
{
    if($min>$pac->getTezina())
    {
        $min=$pac->getTezina();
    }
}
echo "<br> " . $min;





?>