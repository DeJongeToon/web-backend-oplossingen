<?php

    $getal          = 1;
    $tekst          = "";

    if (1 <= $getal && $getal <= 10) {
    
        $tekst = "Het getal ligt tussen 0 en 10.";
        
    }
    elseif (10 <= $getal && $getal < 20) {
    
        $tekst = "Het getal ligt tussen 10 en 20.";
    
    }
    elseif (20 <= $getal && $getal < 30) {
    
        $tekst = "Het getal ligt tussen 20 en 30.";
    
    }
    elseif (30 <= $getal && $getal < 40) {
    
        $tekst = "Het getal ligt tussen 30 en 40.";
    
    }
    elseif (40 <= $getal && $getal < 50) {
    
        $tekst = "Het getal ligt tussen 40 en 50.";
    }
    elseif (50 <= $getal && $getal < 60) {
    
        $tekst = "Het getal ligt tussen 50 en 60.";
    
    }
    elseif (60 <= $getal && $getal < 70) {
    
        $tekst = "Het getal ligt tussen 60 en 70.";
    
    }
    elseif (70 <= $getal && $getal < 80) {
    
        $tekst = "Het getal ligt tussen 70 en 80.";
    
    }
    elseif (80 <= $getal && $getal < 90) {
    
        $tekst = "Het getal ligt tussen 80 en 90.";
    
    }
    elseif (90 <= $getal && $getal < 100) {
    
        $tekst = "Het getal ligt tussen 90 en 100.";
    
    }

    $tekstReverse   = strrev($tekst);
    
?>

<!doctype html>
<html>
   
    <p><?= $tekstReverse ?></p>
    
</html>