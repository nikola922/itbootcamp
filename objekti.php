<?php

class Auto
{
    private $marka;
    private $boja = "white";
    private $imaKrov = true;

    public function __construct($m, $b, $k)
    {
        $this->marka=$m;
        $this->boja=$b;
        $this->imaKrov=$k;
    }

    public function setMarka($m)
    {
        $this->marka = $m;
    }
    public function setBoja($b)
    {
        $this->boja = $b;
    }
    public function setimaKrov($k)
    {
        $this->imaKrov = $k;
    }
    public function getMarka()
    {
        return $this->marka;
    }
    public function getBoja()
    {
        return $this->boja;
    }
    public function getimaKrov()
    {
        return $this->imaKrov;
    }
}

$auto1 = new Auto("Fiat", "cyan", false);
$auto2 = new Auto("BMW", "yellow", true);
/*
$auto1->setMarka("BMW");
$auto1->setBoja("blue");
$auto1->setimaKrov(false);

$auto2->setMarka("Audi");
$auto2->setBoja("green");
$auto2->setimaKrov(true);
*/
echo "Karakteristike prvog vozila: ";
echo $auto1->getMarka() . ", "
                . $auto1->getBoja() . ", "
                . $auto1->getimaKrov() . "<br>";

echo "Karakteristike drugog vozila: ";
echo $auto2->getMarka() . ", "
                . $auto2->getBoja() . ", "
                . $auto2->getimaKrov() . "<br>";


class Pacijent
    {
        private $ime;
        private $visina;
        private $tezina;
        
        public function __construct($i, $v, $t)
        {
            $this->setIme($i);
            $this->setVisina($v);
            $this->setTezina($t);
        }

        public function stampaj()
        {
            echo "Pacijent: [" 
                . $this->ime . "], ["
                . $this->visina . "], ["
                 . $this->tezina . "].<br>";
        }
                
        public function bmi()
        {
            $bmi = $this->tezina * 10000 / ($this->visina * $this->visina);
            return $bmi;
        }
                
        public function kritican()
        {
            if($this->bmi() < 15 || $this->bmi() > 40)
            {
                return true;
            }
                return false;
        }

        public function setVisina($v)
        {
            if($v < 0)
            {
                $this->visina = 0;
            }
            elseif ($v <= 250)
            {
                $this->visina = $v;
            }
            else
            {
                $this->visina = 250;
            }
        }
        public function setTezina($t)
        {
            if($t < 0)
            {
                $this->tezina = 0;
            }
            elseif ($t <= 550)
            {
                $this->tezina = $t;
            }
            else
            {
                $this->tezina = 550;
            }
        }
        public function setIme($i)
        {
            $this->ime = $i;
        }
}

echo "<br>";
$pac1 = new Pacijent("Zoki", 180, 90);

/*
$pac1->setVisina(140);
$pac1->setTezina(560);
$pac1->setIme("Miodgrag");
*/
$pac1->stampaj();
echo "Bmi pacijenta 1 je: " . $pac1->bmi();
echo "<br>";
if($pac1->kritican())
{
    echo "Pacijent 1 je kritican.<br>";
}
else 
{
    echo "Pacijent je normalan.<br>";
}
$pac2 = new Pacijent("Predrage", 190, 99);
/*
$pac2->setVisina(180);
$pac2->setTezina(200);
$pac2->setIme("Predrage");
*/
$pac2->stampaj();
echo "Bmi pacijenta 1 je: " . $pac2->bmi();
echo "<br>";
if($pac2->kritican())
{
    echo "Pacijent 1 je kritican.<br>";
}
else 
{
    echo "Pacijent je normalan.<br>";
}
echo "<br>";

class Film
{
    private $naslov;
    private $godinaIzdanja;
    private $reziser;
    
    public function __construct($n, $r, $god)
    {
        $this->naslov=$n;
        $this->reziser=$r;
        $this->godinaIzdanja=$god;
    }

    public function stampaj()
    {
        echo "Film sa naslovom: 
            [$this->naslov], reziser: 
            [$this->reziser], izasao god:
            [$this->godinaIzdanja]<br>";
            
    }
    public function setGodina($god)
    {
        if($god > 1800)
        {
            $this->godinaIzdanja=$god;
        }
        else
        {
            $this->godinaIzdanja = 1800;
        }
    }
    public function setNaslov ($n)
    {
        $this->naslov=$n;
    }    
    public function setRezider($r)
    {
        $this->reziser=$r;
    }

    
}

$film1 = new Film("Jaganjci", "Kamerun", 1980);
/*
$film1->setGodina(1990);
$film1->setNaslov("Zoki");
*/
$film1->stampaj();

$film2 = new Film("Titanik","Injaritu", 1700);
/*
$film2->setGodina(1500);
$film2->setNaslov("Maratonci");
*/
$film2->stampaj();




?>