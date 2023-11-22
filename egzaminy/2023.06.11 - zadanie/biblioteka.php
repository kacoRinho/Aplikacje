<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Biblioteka publiczna</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div id="baner">
		<h3>Miejska Biblioteka Publiczna w Książkowicach</h2>
	</div>
	<div id="lewy">
		<h2>Dodaj czytelnika</h2>
		<form action="biblioteka.php" method="post">
			<label>
				imię:
				<input type="text" name="imie" /><br/>
			</label>
			<label>
				nazwisko:
				<input type="text" name="nazwisko" /><br/>
			</label>
			<label>
				symbol:
				<input type="number" name="symbol" /><br/>
			</label>
			<button>AKCEPTUJ</button>
		</form>
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'dane_kk');
		if(!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['symbol'])) {
			$imie = $_POST['imie'];
			$nazwisko = $_POST['nazwisko'];
			$symbol = $_POST['symbol'];
			$kod = $imie[0].$imie[1].$symbol[-2].$symbol[-1].$nazwisko[0].$nazwisko[1];
			$kod = strtolower($kod);
			$kw1 = "INSERT INTO czytelnicy VALUES (NULL, '$imie', '$nazwisko', '$kod');";
			mysqli_query($con, $kw1);
			echo "Czytelnik: $imie $nazwisko został dodany do bazy danych";
		}
		?>
	</div>
	<div id="srodkowy">
		<img src="biblioteka.png" alt="biblioteka" />
		<h4>
			ul. Czytelnicza 25<br/>
			12-120 Książkowice<br/>
			tel.: 123123123<br/>
			<p><a href="mailto:biuro@bib.pl">biuro@bib.pl</a></p>
		</h4>
	</div>
	<div id="prawy">
		<h3>Nasi czytelnicy</h3>
		<ol>
		<?php
		$kw2 = "SELECT imie, nazwisko FROM czytelnicy;";
		$res2 = mysqli_query($con, $kw2);
		while($tab = mysqli_fetch_row($res2)) {
			echo "<li>$tab[0] $tab[1]</li>";
		}
		mysqli_close($con);
		?>
		</ol>
	</div>
	<div id="stopka">
		<p>Projekt witryny: Krzysztof Kaczmarczyk</p>
	</div>
</body>
</html>