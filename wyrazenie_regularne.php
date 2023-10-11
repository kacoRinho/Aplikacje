<?php
    $wzorzec = '/\d{2}-\d{3}/';
    $tekst = "poczta 34-200 Sucha Beskidzka";
    if (preg_match($wzorzec, $tekst, $matches))
        echo "znaleziono kod pocztowy" . $matches[0];
    else 
        echo "nie znaleziono kodu pocztowego";
?>
<?php
    $wzorzec = '/([0123]?\d)+[-\.\/]+([01]?\d)+[-\.\/]+(\d{4})/';
    $tekst = "Sucha Beskidzka, dn 04.10.2023";
    if (preg_match($wzorzec, $tekst))
        echo "znaleziono datę";
    else   
        echo "nie znaleziono daty";
?>