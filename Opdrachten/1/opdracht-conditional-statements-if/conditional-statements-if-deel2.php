<?php

	$getal      = 6;
    $dag        = "";


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


    $capitalDay     = strtoupper($dag);

    $kleineA        = str_replace("A", "a", $capitalDay);

    $laatsteA       = strrpos($capitalDay, "A");
    $laatsteKleineA = substr_replace($capitalDay, "a", $laatsteA, 1);

?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<p>Dag <?php echo $getal ?> is een <?php echo $dag ?>.</p>
	<p><?php echo $capitalDay ?> (hoofdletters)</p>
	<p><?php echo $kleineA ?> (kleine a's)</p>
	<p><?php echo $laatsteKleineA ?> (laatste a is klein)</p>

</body>
</html>