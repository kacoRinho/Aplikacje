<?php
    $wzorzec = '/\d{5}/';
    $tekst = "telefon 564324453";
    if (preg_match($wzorzec, $tekst))
        echo "znaleziono cyfrę";
    else 
        echo "nie znaleziono cyfry";

$wzorzec = '/\d/';
    $tekst = "mam 4 zeszyty";
    if (preg_match($wzorzec, $tekst))
        echo "znaleziono cyfrę";
    else 
        echo "nie znaleziono cyfry";
?>