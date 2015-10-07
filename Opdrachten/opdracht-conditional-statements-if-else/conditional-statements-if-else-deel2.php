<?php

    $seconden   = 221108521;

    $minuten    = round($seconden / 60);
    $uren       = round($minuten / 60);
    $dagen      = round($uren / 24);
    $weken      = round($dagen / 7);
    $maanden    = round($dagen / 31);
    $jaren      = round($maanden / 12);

    
    
?>

<!doctype html>
<html>
   
    <h1><u>Jaren, maanden, weken, dagen, uren, minuten en seconden</u></h1>
    <p>In <?= $seconden ?> seconden zitten</p>
    <ul>
        <li>minuten: <?= $minuten ?></li>
        <li>uren: <?= $uren ?></li>
        <li>dagen: <?= $dagen ?></li>
        <li>weken: <?= $weken ?></li>
        <li>maanden (31): <?= $maanden ?></li>
        <li>jaren (365): <?= $jaren ?></li>
    </ul>

</html>