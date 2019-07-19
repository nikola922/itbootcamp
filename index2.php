<?php
	echo "Zdravo svete!!!"; 
	// echo se koristi da bi se neki sadrzaj pojavio na stranici. Taj sadrzaj moze biti tekstualan (naziva se string) ili brojcan
	// broj se pise bez "" a string sa ""
	// brojevi mogu biti:
	// integer(int) - ceo broj (zaokruzuje na manju vrednost)
	// float - decimalan broj
	// double - decimalan broj
	// boolean (bool) -true (1), falce (0)

	echo "<br>";
	// za novi red koristimo tag <br> iz html

	$x="Zdravo svete";
	// $ - oznaka za promenljivu (promenljiva je objekat poput kutije u koju se stravljaju neke vrednosti - stvari)
	// x - ime promenljive, praksa je da se promenljiva pise malim slovima, a ako ima vise reci da onda neredna rec krene velikim slovom
	// Zdravo svete - vrednost promenljive
	$x=3;
	// vrednost 3 pregazi (zauzima mesto) vrednost "Zdravo svete"
	// samo poslednja vrednost ima znacaja/

	$ime="Vanja";
	$ImE="Ivana";
	$iME="Nina";
	// Ovo su sve razlicite promenljive (bitno je da li je veliko ili malo slovo)

	$y=$x;
	echo $y;

	$x="crni"; 
	$y="zuti";
	$z=$x; # z je crni
	$x=$y; # x je zuti
	$y=$z; # y je crni
	// koristi je pomocna treca promenljiva (z) da bi prve dve (x i y) zanemile svoje vrednosti 

	echo "$x";
	echo "<br>";
	echo "$y";

	echo "$x". "<br>". "$y";
	// moze i na ovaj nacin

	echo "<br>";
	echo "<br>";
	
	$x=5;
	$y=3.3; # decimalni broj pisemo sa .
	$z=$x;
	$x=$y;
	$y=$z;
	
	echo "<br>";

	echo "x=" . $x;
	echo "<br>";
	echo "y=" . $y;
	echo "<br>";
	echo "z=", $z; # moze da se koristi , ili . da bi dodali jos neku vrednost
	echo "<br>";


	$rez=$x+$y;
	echo "zbir = ", $rez;
	echo "<br>";
	
	$v=4;
	$t=2.7;
	$rez1=$v + (int)$t; 
	echo "zbir(int) = ", $rez1;
	echo "<br>";

	$x=5;
	$x=2*$x;
	$y=$x+$x;
	$rez2=$x+$y;
	echo "zbir = ", $rez2; 
	echo "<br>";

	// 1 zadatak: Za unetu cenu robe i kolicinu novca koju je kupac dao, ispisati koliki kusur treba kasirka da vrati kupcu
	$cena=300; #nekad je potrebno napisati sa "" poput $cena="300"; inace nece raditi racunarske operacije
	$kupac=500;
	$kusur=$kupac-$cena;
	echo "kusur =" , $kusur;
	echo "<br>";

	// 2 zadatak: Konverzija valuta (din=>evro)
	// Kurs : 1e=117.81
	$dinari= 20000;
	$evri= $dinari / 117.81;
	echo $evri;
	echo "<br>";

	/* 3 zadatak: Konverzija iz evra u dolare ako je poznata dinarska protivvrednost
		 1e=117.81
		 1$=104.86 
	*/
	$euri= 250;
	$dinari=$euri * 117.81;
	$dolari=$dinari / 104.86;
	echo $euri . " evra";
	echo "<br>";

	// 4 zadatak: Konverzija iz celzijuse u faranhajte C=>F
	// x => x * 9/5 + 32
	$C=20;
	#
	$F= $C * 9 / 5 + 32; # kao i u matematici (* i / se prvo racunaju)
	# moze i $F= $C * (9 / 5) + 32; rezultat je isti
	echo "F = " . $F;
	echo "<br>";

	// 5 zadatak: Obrnuto F=>C
	// (x-32)*5/9
	$F=68;
	$C=($F-32)*5/9;
	echo "C = " . $C . "&#8451;";
	echo "<br>";

	// 6 zadatak: Za preuzeto vreme u satima i minutima izracunati koliko je minuta proslo od ponoci
	$sati=13;
	$minuti=49;
	$ukupnoMinuta= $sati * 60 + $minuti;
	echo $ukupnoMinuta;
	echo "<br>";

	// 7 zadatak: druga varijanta -trenutno vreme
	// date(format) vraca trenutni datum i vreme U ODREDJENOM FORMATU
	// format = "G" - 24h-vreme (0-23)
	// format = "g" - 12h-vreme (0-11)
	// format = "H" - 24h-vreme (00-23)
	// format = "h" - 12h-vreme (00-11)
	// format = "i" - minuti (00-59)
	$sati= date("G");
	$minuti= date("i");
	$ukupnoMinuta = $sati * 60 + $minuti;
	echo $ukupnoMinuta;
	echo "<br>";

	$satiMinuti= date("G:i");
	echo $satiMinuti;
	echo "<br>";




	?>
