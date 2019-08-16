<?php

class Kamion
{

    private $registarskiBroj;
    private $nosivost;

    public function __construct($regBr, $n)
    {
        $this->registarskiBroj=$regBr;
        $this->nosivost=$n;
    }

    public function setRegistarskiBroj($regBr)
    {
        if(strlen($this->regBr) < 5)
        {
            echo "Greska. ";
        }
        else
        {
        $this->registarskiBroj=$regBr;
        }
    }

    public function setNosivost($n)
    {
        if($n<0)
        {
            $this->$nosivost=0;
        }
        else
        {
            $this->$nosivost=$n;
        }
    }

    public function getRegistarskiBroj()
    {
        return $this->registarskiBroj;
    }

    public function getNosivost()
    {
        return $this->nosivost;
    }

    public function ispisiKamion()
    {
        echo "<p> <span style='color:blue;'> Kamion sa registarskim brojem: " . $this->registarskiBroj .
             "</span>" . 
             "<span style='color:red;'> i nosivoscu od " . $this->nosivost . " tona. </span></p>";
    }

}

$kamion1=new Kamion("2fDsd2s", 159);
$kamion2=new Kamion("78sd910", 250);
$kamion3=new Kamion("2132u8s8", 750);

$kamioni = array($kamion1,$kamion2,$kamion3);

function ispisSvihKamiona($kamioni)
{
    foreach($kamioni as $k)
    {
        $k->ispisiKamion();
    }
}
ispisSvihKamiona($kamioni);
echo "<br>";

function podrzavaNosivost($kamioni, $tezinaRobe)
{
    foreach($kamioni as $k)
    {
        if($tezinaRobe<$k->getNosivost())
        {
            return true;
        }
        else
        {
             return false;
        }
    }
}

$provera = podrzavaNosivost($kamioni, 900);
echo $provera;
if($provera == TRUE)
{
    echo "Robu je moguce smestiti u neki od kamiona. ";
}
else
{
    echo "Nosivost kamiiona ne podrzava robu. ";
}

?>