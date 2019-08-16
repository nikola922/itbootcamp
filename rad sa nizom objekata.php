<?php

	class Vozilo
	{
		private $boja;
		private $tip;
		private $tezina;
		
		public function __construct($boja, $tip, $tezina)
		{
			$this->boja = $boja; //ili pomoću setera $this->setBoja($boja)
			$this->tip = $tip;   //ili pomoću setera $this->setTip($tip)
			$this->tezina = $tezina;
		}
		
		//seteri
		public function setBoja($boja)
		{
			$this->boja = $boja;
		}
		
		public function setTip($tip)
		{
			$this->tip = $tip;
		}
		
		public function setTezina($tezina)
		{
			$this->tezina = $tezina;
		}
		
		//geteri
		public function getBoja()
		{
			return $this->boja;
		}
		
		public function getTip()
		{
			return $this->tip;
		}
		
		public function getTezina()
		{
			return $this->tezina;
		}
		
		public function ispisVozila()
		{
			echo "<p> Boja vozila je: " . $this->getBoja() . "<br>" .
				"Tip vozila je: " . $this->getTip() . "<br>" .
				"Težina vozila je: " . $this->getTezina() . "</p>";
		}
	}
	
	$vozilo1 = new Vozilo("crvena", "putnicki auto", 2000);		
	$vozilo2 = new Vozilo("zelena", "kabriolet", 1800);
	$vozilo3 = new Vozilo("plava", "kabriolet", 1900);
	
	//Napravimo niz objekata
	$vozila = array($vozilo1, $vozilo2, $vozilo3);
	//Niz objekata ne možemo napraviti samo kao 
	//array($vozilo1, $vozilo2, $vozilo3);
	//Moramo ga DODELITI NEKOJ PROMENLJIVOJ
	
	//Ispisimo sve težine vozila
	//Ispis elemenata niza vršimo pomoću foreach petlje
	//Pošto se krećemo od objekta do objekta, 
	//treba imati u vidu da svaki od ovih objekata sadrži više atributa	
	//Pošto nama samo treba težina pristupaćemo samo njoj 
	//tj. njenom geteru jer težina sama po sebi nije public
	foreach($vozila as $v)
	{
		echo $v->getTezina() . " ; ";
	}
	
	
	//Ispis elemenata pomoću funkcije
	//Funkciji moramo da prosledimo niz vozila
	//Prisetite se da funkcija ne vidi vrednosti 
	//koje su van nje definisane, ako joj se ne proslede
	function ispis($vozila)
	{
		foreach($vozila as $v)
		{
			$v->ispisVozila();
		}
	}
	
	//Da bi se realizovala funkcija za ispis moramo da je pozovemo
	ispis($vozila);
	
	//Funkcija koja ispisuje sve podatke o najtežem vozilu
	function najtezi($vozila)
	{
		
		//Najpre ćemo napraviti objekat koji u sebi čuva sve osobine najtežeg vozila
		//RAZLIKOVATI objekat od atributa objekta
		//Objekat je $vozila[0] i u sebi sadrži sve atribute nekog vozila (njegovu boju, tip i težinu)
		//Atribut je $vozilo[0]->getBoja() jer sadrži u sebi samo vrednost boje prvog vozila
		
		//Napravićemo objekat gde ćemo čuvati ceo objekat - najteži auto sa svim svojim osobinama
		//Početnu vrednost najtežeg objekta definišemo SAMO JEDNOM
		//Dakle, ne definisati u for petlji ovu vrednost
		$najteziObjekat = $vozila[0];
		
		//Napravimo i promenljivu gde ćemo čuvati samo vrednost atributa težine
		$najteziAtribut = $vozila[0]->getTezina();
		
		//Krećemo se foreach petljom tj. krećemo se od objekta do objekta u nizu
		//I ispitujemo da li je težina tekućeg objekta veća od pretpostavke
		//Ukoliko jeste, pretpostavka dobija vrednost novog najtežeg objekta
		//A takođe i menjamo vrednost najtežeg objekta jer smo naišli na novi najteži objekat
		foreach($vozila as $v)
		{
			if($v->getTezina() > $najteziAtribut)
			{
				$najteziAtribut = $v->getTezina();
				$najteziObjekat = $v;
			}
		}
		
		return $najteziObjekat; //Vraćamo najteži objekat
	}
	
	//Da bismo ispisali najteze vozilo moramo pozvati funkciju koja odredjuje najteze vozilo
	//Ne zaboravimo da se funkciji prosledjuje niz vozila kako bi od njih odredila najteže vozilo
	//Takodje, funkcija kao rezultat vraća ceo najteži objekat
	//Pa je potrebno taj rezultat (objekat) sačuvati u nekoj promenljivoj
	//Pa je taj objekat potrebno i ispisati
	//Pošto već imamo ugrađenu funkciju za ispis vozila, 
	//samo je pozovemo za željeni objekat
	echo "Najteže vozolo je:";
	$najtezeVozilo = najtezi($vozila);
	$najtezeVozilo->ispisVozila();
?>