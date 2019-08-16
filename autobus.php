<?php

	class Autobus
	{
		//privatre atributi
		private $regBr;
		private $brSedista;
		
		//konstruktor
		public function __construct($r, $b)
		{
			$this->regBr = $r; //$this->setRegBr($r);
			$this->brSedista = $b; //$this->setBrSedista($b);
		}
		
		//seteri
		public function setRegBr($s)
		{
			$this->regBr = $s;
		}
		
		public function setBrSedista($s)
		{
			$this->brSedista = $s;
		}
		
		//geteri
		public function getRegBr()
		{
			return $this->regBr;
		}
		
		public function getBrSedista()
		{
			return $this->brSedista;
		}
		
		public function ispisi()
		{
			echo "Autobus: " . $this->regBr .
			" br. sedišta " . $this->brSedista . "<br>";
		}
	}
	
	$a1 = new Autobus("NI-123", 30);
	//$a1->ispisi();
	$a2 = new Autobus("BG-456", 50);
	$a3 = new Autobus("KG-789", 25);
	
	$autobusi = array($a1, $a2, $a3);
	function ispisiNiz($autobusi)
	{
		foreach($autobusi as $a)
		{
			$a->ispisi();
		}
	}
	ispisiNiz($autobusi);
	
	function ukupnoSedista($autobusi)
	{
		$s = 0;
		foreach($autobusi as $a)
		{
			$s += $a->getBrSedista();
		}		
		return $s;
	}
	
	//$br = ukupnoSedista($autobusi);
	//echo $br;
	
	echo "Ukupan broj sedista je: " 
	. ukupnoSedista($autobusi);
	
	function maksSedista($autobusi)
	{
		// $objMaks sadrzi sve podatke o autobusu sa maksimalnim brojem sedista
		// $brMaks sadrzi samo maksimalan broj sedista
		
		$objMaks = $autobusi[0];
		$brMaks = $autobusi[0]->getBrSedista();
		
		foreach($autobusi as $a)
		{
			if($brMaks < $a->getBrSedista())
			{
				$brMaks = $a->getBrSedista();
				$objMaks = $a;
			}
		}
		return $objMaks;
	}
	
	$om = maksSedista($autobusi);
	echo "<br><br>";
	$om->ispisi();
	//echo $om->getRegBr() . " " . $om->getBrSedista();

	function ljudi($brLjudi, $autobusi)
	{
		$us = ukupnoSedista($autobusi);
		if ($brLjudi <= $us)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function ispitaj($br, $autobusi)
	{
		$rez = ljudi($br, $autobusi);
		if ($rez == true)
		{
			echo "<p> Imamo dovoljno mesta </p>";
		}
		else
		{
			echo "<p> Nemamo dovoljno mesta </p>";
		}
	}
	
	ispitaj(105, $autobusi);
	ispitaj(110, $autobusi);
	



	
?>