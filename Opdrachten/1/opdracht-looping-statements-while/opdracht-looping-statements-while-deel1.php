<?php

    $getallen       = array();  //lege array
    
    $getal          = 0;
    $maxWaarde      = 100;

    while ( $getal < $maxWaarde ) {
    
            $getallen[] = $getal;
            $getal++;
    
    }

    $separate = implode(", ", $getallen);



    // opdracht 2

    $getallen2      = array();
    $getal2         = 0;

    while ( $getal2 < $maxWaarde ) {
    
        if ( ( $getal2 % 3 ) == 0 &&  40 < $getal2 && $getal2 < 80 ) {
            
            $getallen2[] = $getal2;

        }
        
        $getal2++;   // anders telt die niet op
        
    }

    $separate2 = implode(", ", $getallen2);
?>

<!doctype html>
<html>
   
    <pre>reeks 1: <?php print_r($separate) ?></pre>
    
    <pre>reeks 2: <?php print_r($separate2) ?></pre>
    
</html>