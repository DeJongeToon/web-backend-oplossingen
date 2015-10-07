<?php

	function berekenSom($getal1, $getal2) 
	{

		return $som = $getal1 + $getal2;

	}

    function vermenigvuldig($getal1, $getal2) 
	{

		return $product = $getal1 * $getal2;	

	}

    function isEven($getal1) 
	{

		if ($getal1 == 0) {
        
            return false;
            
        }
        
	   return true;
        
	}

	

?>
<!DOCTYPE html>
<html>






		
        <p><?= berekenSom(2, 4) ?></p>
        
        <p><?= vermenigvuldig(2, 4) ?></p>
        
		<p><?= isEven( 1 ) ?></p>



	

</html>