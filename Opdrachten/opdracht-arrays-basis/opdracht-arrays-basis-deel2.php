<?php

    $getal = array(1, 2, 3, 4, 5);

    // vermenigvuldig alle waarde in de array
    $multiply = array_product( $getal ); 

    // even waarde afprinten
    foreach ( $getal as $value ) {
    
        if ( !( ($value % 2) == 0 ) ) {
    
            $onevenGetal[] = $value;
        
        } 
    
    }

    // reversed array
    $getal2 = array_reverse($getal);

    // beide arrays optellen met dezelfde index
    $nieuweArr[] = $getal[0] + $getal2[0];
    $nieuweArr[] = $getal[1] + $getal2[1];
    $nieuweArr[] = $getal[2] + $getal2[2];
    $nieuweArr[] = $getal[3] + $getal2[3];
    $nieuweArr[] = $getal[4] + $getal2[4];
    
    /* foreach( $getal as $value2 ) 
    {
    
        $waarde1 = $value2;
        $waarde2 = $getal2[ $value2 ];
        
        $nieuweArray[] = $waarde1 + $waarde2;
        
    } */

?>

<!DOCTYPE html>
<html>

		<p>Product van alle getal in array = <?= $multiply ?></p>
		
		<br> 
		
		<p>Oneven getallen: <pre><?php print_r( $onevenGetal ) ?></pre></p>
		
		<br>
		
		<p>Reversed Array: <pre><?php print_r( $getal2 ) ?></pre></p>
		
		<br>
		
		<p>Reversed Array: <pre><?php print_r( $nieuweArr ) ?></pre></p>
		
</html>