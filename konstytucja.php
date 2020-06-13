<!DOCTYPE HTML>
<html>

<head>
		<meta charset="utf-8" />
		<title>Konstytucja 3 maja</title>
		<link rel="stylesheet" href="konstytucja.css" type="text/css" />
		</head>
	</head>
	<body>
	<header>
		<h1>Konstytucja 3 maja</h1>
	</header>
		
		<section>
		<article>
		
		<p>
			<strong>Konstytucja 3 maja</strong>, a właściwie <strong>Ustawa Rządowa z dnia 3 maja</strong>
			to uchwalona 3 maja 1791 roku ustawa regulująca ustrój prawny Rzeczypospolitej Obojga Narodów.
			Powszechnie przyjmuje się, że Konstytucja 3 maja była pierwszą w Europie i drugą na świecie
			(po konstytucji amerykańskiej z 1787 r.) nowoczesną, spisaną <a href="https://pl.wikipedia.org/wiki/Konstytucja">konstytucją</a>.
		</p>
		<p>
			<img src="konstytucja.jpg" /> <!-- 464 x 720 -->
			<a href="https://pl.wikipedia.org/wiki/Konstytucja_3_maja">Konstytucja 3 maja</a> została ustanowiona ustawą rządową przyjętą tego dnia przez
			<a href="https://pl.wikipedia.org/wiki/Sejm_Czteroletni">Sejm Czteroletni</a>.
			Działo się to za panowania króla <a href="https://pl.wikipedia.org/wiki/Stanis%C5%82aw_August_Poniatowski">Stanisława Augusta Poniatowskiego</a> a sam król był
			jednym z głównych współautorów konstytucji.
			Została ona zaprojektowana w celu zlikwidowania obecnych od dawna wad opartego na wolnej elekcji
			i demokracji szlacheckiej systemu politycznego <a href="https://pl.wikipedia.org/wiki/Rzeczpospolita_Obojga_Narod%C3%B3w">Rzeczypospolitej Obojga Narodów</a>.
			Konstytucja zmieniła ustrój państwa na monarchię dziedziczną, ograniczyła znacząco demokrację
			szlachecką, odbierając prawo głosu i decyzji w sprawach państwa szlachcie nieposiadającej ziemi
			(gołocie), wprowadziła częściowe zrównanie praw osobistych mieszczan i szlachty oraz stawiała
			chłopów pod ochroną państwa, w ten sposób łagodząc nadużycia pańszczyzny.
			Konstytucja formalnie zniosła <a href="https://pl.wikipedia.org/wiki/Liberum_veto">liberum veto</a>.
		</p>
		<p>
			Przyjęcie monarchicznej Konstytucji 3 maja spowodowało opozycję republikanów oraz sprowokowało
			wrogość Imperium Rosyjskiego, które od 1768 roku było protektorem Rzeczypospolitej i gwarantem
			nienaruszalności jej ustroju.
			W wojnie w obronie konstytucji Polska, zdradzona przez swojego pruskiego sprzymierzeńca
			<a href="https://pl.wikipedia.org/wiki/Fryderyk_Wilhelm_II_Pruski">Fryderyka Wilhelma II</a>, została pokonana przez wojska rosyjskie <a href="https://pl.wikipedia.org/wiki/Katarzyna_II_Wielka">Katarzyny
			Wielkiej</a>, wspierające <a href="https://pl.wikipedia.org/wiki/Konfederacja_targowicka">konfederację targowicką<a/> – spisek części polskich magnatów
			przeciwnych zmianie ustroju Rzeczypospolitej.
			Po utracie niepodległości w 1795 roku przez 123 lata <a href="https://pl.wikipedia.org/wiki/Rozbiory_Polski">rozbiorów</a> przypominała o walce
			o niepodległość.
			Zdaniem głównych współautorów <a href="https://pl.wikipedia.org/wiki/Ignacy_Potocki">Ignacego Potockiego</a> i <a href="https://pl.wikipedia.org/wiki/Hugo_Ko%C5%82%C5%82%C4%85taj">Hugona Kołłątaja</a>
			była &quot;ostatnią wolą i testamentem gasnącej Ojczyzny&quot;.
		</p>
		<p>
			Konstytucja przestała w praktyce obowiązywać (straciła znaczenie) 24 lipca 1792 roku (w momencie
			przystąpienia króla Stanisława Augusta Poniatowskiego do konfederacji targowickiej) – czyli po nieco
			ponad 14 miesiącach, w ciągu których Sejm Czteroletni uchwalił szereg ustaw szczegółowych, będących
			rozwinięciem jej postanowień.
			Przestała natomiast być obowiązującym aktem prawnym (została derogowana) 23 listopada 1793 roku.
			Sejm grodzieński uznał wtedy Sejm Czteroletni za niebyły i uchylił wszystkie ustanowione na nim akty
			prawne. 

		</p>
		
		</article>
		</section>
		






<?php
	echo "Ostatnia modyfikacja: " . date ("j.n.Y H:i:s", getlastmod());
?>
</br>


<?php

$dzien = date('d');
$dzien_tyg = date('l');
$miesiac = date('n');
$rok = date('Y');

$miesiac_pl = array(1 => 'stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca', 'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia');

$dzien_tyg_pl = array('Monday' => 'poniedziałek', 'Tuesday' => 'wtorek', 'Wednesday' => 'środa', 'Thursday' => 'czwartek', 'Friday' => 'piątek', 'Saturday' => 'sobota', 'Sunday' => 'niedziela');

// $dzien_tyg_pl[$dzien_tyg].", ".$dzien." ".$miesiac_pl[$miesiac]." ".$rok."r.";


$data=date("Y-F-l");
$czas=date("H:i");
echo "Stronę wyświetlono dnia ".$dzien." ".$miesiac_pl[$miesiac]." ".$rok."r. o godzinie $czas";

?>
</br>

<?php

$czas1 = date("H:i:s");
$czas2 = date ("H:i:s", getlastmod());

$godziny = floor(( strtotime( $czas1 ) - strtotime( $czas2 ) ) / 3600);
$minuty = floor((( strtotime( $czas1 ) - strtotime( $czas2 ) ) / 60) % 60);
$sekundy = (strtotime( $czas1 ) - strtotime( $czas2 )) % 60;
echo "Ostatnia aktualizacja " .$godziny. " godzin " .$minuty." minut ".$sekundy." sekund temu";

?>







<div id="wejscie">

<?php
$dzien = date('d');
$dzien_tyg = date('l');
$miesiac = date('n');
$rok = date('Y');

$miesiac_pl = array(1 => 'styczen', 'luty', 'marzec', 'kwiecien', 'maj', 'czerwiec', 'lipiec', 'sierpnien', 'wrzesien', 'październik', 'listopad', 'grudzien');

$dzien_tyg_pl = array('Monday' => 'poniedziałek', 'Tuesday' => 'wtorek', 'Wednesday' => 'środa', 'Thursday' => 'czwartek', 'Friday' => 'piątek', 'Saturday' => 'sobota', 'Sunday' => 'niedziela');
	echo $dzien_tyg_pl[$dzien_tyg].", ".$miesiac_pl[$miesiac];
?>
</div>
<br/><br/><br/><br/><br/>

		
		<footer>
		</br>
		<h4>Treść artykułu pochodzi z Wikipedii</h4>
		
		</footer>
		
	</body>


</html>