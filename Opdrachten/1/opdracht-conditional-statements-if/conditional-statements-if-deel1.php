<?php

	$getal = 2;
    $dag   = "";

    if( $getal == 1) {
    
        $dag = "maandag";
        
    }

    if( $getal == 2) {
    
        $dag = "dinsdag";
        
    }

    if( $getal == 3) {
    
        $dag = "woensdag";
        
    }

    if( $getal == 4) {
    
        $dag = "donderdag";
        
    }

    if( $getal == 5) {
    
        $dag = "vrijdag";
        
    }

    if( $getal == 6) {
    
        $dag = "zaterdag";
        
    }

    if( $getal == 7) {
    
        $dag = "zondag";
        
    }

?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<p>Dag <?php echo $getal ?> is een <?php echo $dag ?>.</p>

</body>
</html>