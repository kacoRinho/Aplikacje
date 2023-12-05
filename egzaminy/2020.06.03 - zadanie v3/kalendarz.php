<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Organizer</title>
    <link rel="stylesheet" href="./styl5.css">
</head>

<body>
    <header>
        <section id="baner1">
            <img src="./logo1.png" alt="Mój kalendarz">
        </section>
        <section id="baner2">
            <h2>KALENDARZ</h2>
            <?php
            $polaczenie = mysqli_connect('localhost', 'root', '', 'baza6_kk');
            $kw = "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-07-01';";
            $que = mysqli_query($polaczenie, $kw);
            while ($row = mysqli_fetch_array($que)) {
                echo "<h1>miesiąc: $row[0], rok: $row[1]</h1>";
            }
            ?>
        </section>
    </header>
    <main>
        <?php
        $kw = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec';";
        $que = mysqli_query($polaczenie, $kw);
        while ($row = mysqli_fetch_array($que)) {
            echo "<div class='dzien'>
                    <h5>$row[0]</h5>
                    <p>$row[1]</p>
                </div>";
        }
        ?>
    </main>
    <footer>
        <form action="kalendarz.php" method="POST">
            <label>dodaj wpis:
                <input type="text" name="wpis">
            </label>
            <button name="wyslij">DODAJ</button>
        </form>
        <?php
        if (isset($_POST['wyslij'])) {
            $wpis = $_POST['wpis'];
            $polaczenie = mysqli_connect('localhost', 'root', '', 'baza6_kk');
            $kw = "UPDATE zadania SET wpis = '$wpis' WHERE dataZadania = '2020-07-13';";
            mysqli_query($polaczenie, $kw);
        }
        mysqli_close($polaczenie);
        ?>
        <p>Stronę wykonał: Krzysztof Kaczmarczyk</p>
    </footer>
</body>

</html>