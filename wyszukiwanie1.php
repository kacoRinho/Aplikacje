<?php
    $wzorzec = '/[-\w.]+@([-A-z0-9]+\.)+[A-z]/';
    $tekst = "email: john@poczta.eu";
    if (preg_match($wzorzec, $tekst))
        echo "znaleziono email";
    else
        echo "nie znaleziono email";
?>
<?php
    $wzorzec = '/((\bhttps?:\/\/)|(bwww\.))\S*/';
    $tekst = "adres: www.zsgsucha.pl";
    if (preg_match($wzorzec, $tekst))
        echo "znaleziono adres www";
    else
        echo "nie znaleziono adresu www";
?>