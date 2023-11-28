<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sklep dla uczniów</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <main>
        <section id="baner">
            <h1>Dzisiejsze promocje naszego sklepu</h1>
        </section>
        <section id="lewy">
            <h2>Taniej o 30%</h2>
            <ol>
                <?php
		            $con = mysqli_connect('localhost', 'root', '', 'kk_baza');
		            $kw1 = "SELECT nazwa FROM towary WHERE promocja = 1;";
		            $que1 = mysqli_query($con, $kw1);
		            while($tab = mysqli_fetch_row($que1)) {
			            echo "<li>$tab[0]</li>";
		            }
		        ?>
            </ol>
        </section>
        <section id="srodkowy">
            <h2>Sprawdź cenę</h2>
            <form action="index.php" method="POST">
                <select name="dane">
				    <option value="Gumka do mazania">Gumka do mazania</option>
				    <option value="Cienkopis">Cienkopis</option>
				    <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
				    <option value="Markery 4 szt.">Markery 4 szt.</option>
			    </select>
			    <button>SPRAWDŹ</button>
            </form>
            <div class="wynik">
            <?php
                if(!empty($_POST['dane'])) {
			        $produkt = $_POST['dane'];
    			    $kw2 = "SELECT cena FROM towary WHERE nazwa = '$produkt';";
	    		    $que2 = mysqli_query($con, $kw2);
		    	    while($tab = mysqli_fetch_row($que2)) {
                        $cena1 = ROUND($tab[0]*1,2);
				        $cena2 = ROUND($tab[0]*0.70,2);
                        echo "cena regularna: $cena1";
    				    echo "<br>cena w promocji 30%: $cena2";
	    		    }
		        }
		        mysqli_close($con);
    		    ?>
            </div>
        </section>
        <section id="prawy">
            <h2>Kontakt</h2>
            <p>e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
            <img src="promocja.png" alt="promocja">
        </section>
        <section id="stopka">
            <h4>Autor strony: Krzysztof Kaczmarczyk</h4>
        </section>
    </main>
</body>
</html>