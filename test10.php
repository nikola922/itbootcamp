<?php

class ZooZivotinja
{
    private $ime;
    private $tezina;
    private $brgodina;

    public function __construct($ime, $tezina, $brgodina)
    {
        $this->setIme($ime);
        $this->setTezina($tezina);
        $this->setBrgodina($brgodina);
    }
    public function setIme($ime)
    {
        $this->ime=$ime;
    }
    public function setTezina($tezina)
    {
        if($tezina >= 0)
        {
            $this->tezina=$tezina;
        }
        else
        {
            $this->tezina=0;
        }
    }
    public function setBrgodina($brgodina)
    {
        if($brgodina >= 0)
        {
            $this->brgodina=$brgodina;
        }
        else
        {
            $this->brgodina=0;
        }
    }
    public function getIme()
    {
        return $this->ime;
    }
    public function getTezina()
    {
        return $this->tezina;
    }
    public function getBrgodina()
    {
        return $this->brgodina;
    }
    public function ispis()
    {
        echo "Ime: " . $this->getIme() . "<br>" . 
		" Tezina: " . $this->getTezina() . "<br>" . 
        " Broj godina: " . $this->getBrgodina() .  "<br>";
    }

}

class Sisar extends ZooZivotinja
{
    private $pol;
    private $visina;

    public function __construct($ime, $tezina, $brgodina, $pol, $visina)
    {
        parent::__construct($ime, $tezina, $brgodina);
        
        $this->setPol($pol);
        $this->setVisina($visina);
    }
    public function setPol($pol)
    {
        if($pol=="M" || $pol=="Z")
        {
            $this->pol=$pol;
        }
        else
        {
            $this->pol="Z";
        }
    }
    public function setVisina($visina)
    {
        if($visina >= 0)
        {
            $this->visina=$visina;
        }
        else
        {
            $this->visina=0;
        }
    }
    public function getPol()
    {
        return $this->pol;
    }
    public function getVisina()
    {
        return $this->visina;
    }

    public function kalorije()
    {
        if($this->getPol() == "M")
        {
            $kalorije = 13.397 * $this->getTezina() + 4.799 * $this->getVisina() - 5.677 * $this->getBrgodina() + 88.362;
            return $kalorije;
        }
        elseif($this->getPol() == "Z")
        {
            $kalorije = 9.247 * $this->getTezina() + 3.098 * $this->getVisina() - 4.330 * $this->getBrgodina() + 447.593;
            return $kalorije;
        }
    }

    public function ispisi()
    {
        echo $this->ispis() . 
        " pol: " . $this->getPol() . "<br>" .
        " visina: " . $this->getVisina() . "<br><br>";
    }

}

$s1=new Sisar("Slon", 80, 7, "M", 157);
$s2=new Sisar("Tigar", 50, 4, "Z", 120);
$s3=new Sisar("Lav", 30, 2.5, "R", 87);
$sisari=array($s1, $s2, $s3);

function ispisiNiz($sisari)
{
    foreach($sisari as $s)
    {
        $s->ispisi();
    }
}
ispisiNiz($sisari);


function tigar($sisari)
{
    foreach($sisari as $s)
    {
        if($s->getPol() == "Z")
        {
            if(strpos($s->getIme(), 'Tigar') !== false)
            {
                $s->ispisi();
            }
        }
    }
}
tigar($sisari);



function ispiskalorija($sisari)
{
    foreach($sisari as $s)
    {
        echo $s->kalorije() . "<br>";
    }
}

ispiskalorija($sisari);

function kalorijskavrednost($sisari, $a)
{
    foreach($sisari as $s)
    {
        if($s-kalorije()< $a)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
}

if(kalorijskavrednost($sisari, 1524) == TRUE)
{
    echo "postoji";
}
else
{
    echo "Ne postoji";
}







?>