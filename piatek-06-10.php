<!-- <?php
    $filename = '/path/to/foo.txt';


    if (file_exists($filename)) {
        echo "The file $filename exists";
    } else {
        echo "The file $filename does not exist";
    }
?>
<?php
    $myfile = fopen("webdictionary.txt", "r") or die ("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
?>
<?php
    $myfile = fopen("newfile.txt", "w") or die ("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);
?>
<?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("d.m.Y") . "<br>";
    echo "Today is " . date("d-m-Y") . "<br>";
    echo "Today is " . date("l") . "<br>";
?> 
<?php
    echo "The time is " . date("h:i:sa");
?>
<?php
    $czas = mktime(11,14,54,8,12,2014);
    echo "Created date is " . date( "d.m.Y h:i:sa", $czas);
    $now = time();
    $week = 7*24*60*60;
    echo "<br> teraz: ".date("d.m.Y h:i:sa", $now +$week);
?>

<?php    
    $czas = mktime(11,14,54,5,6,2024);
    echo "Matura " . date( "d.m.Y h:i:sa", $czas);
    $now = time();
    $week = 100*24*60*60;
    echo "<br> Studniówka: ".date("d.m.Y h:i:sa", $czas - $week);
?>
-->

<?php
    session_start();

    echo "Welcome to page #1";
    $_SESSION['favcolor'] = "blue";
    $_SESSION['animal'] = "dog";
    $_SESSION['time'] = time();

    echo '<br /><a href="piatek-06-10(1).php">Page 2</a>';
?>