<?php

    $dieren     = array('hond', 
                        'kat',
                        'vis',
                        'paard',
                        'kip',
                        'haan',
                        'geit',
                        'varken',
                        'schaap',
                        'ezel');

    // hoeveel elementer zitten er in de array
    $aantalDieren = count($dieren);

    // komt waarde voor in array
    $teZoekenDier = 'kip';
    $dierZoeken = in_array($teZoekenDier, $dieren);

    if ( $dierZoeken ) {
    
        $tekst = 'De ' . $teZoekenDier . ' is gevonden!';
        
    } else {
    
        $tekst = 'De ' . $teZoekenDier . ' is niet gevonden!';
    
    }

?>

<!doctype html>
<html>
   
    <pre>Aantal dieren: <?php print_r($aantalDieren) ?></pre>
    
    <p><?php echo $tekst ?></p>

</html>