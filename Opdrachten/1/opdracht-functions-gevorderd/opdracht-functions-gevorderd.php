<?php

    $md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';

     $argument1 = '2';
     $argument2 = '8';
     $argument3 = 'a';
         

   

	function functie1($key, $arg) 
	{
        $lenString              = strlen($key);                      // lengte van string 
        
        $hoeveelKeer            = substr_count( $key, $arg);         // hoeveel $argument1 in $key voorkomt
        
        return $procent         = ( $hoeveelKeer / $lenString ) * 100;
		

	}

    function functie2( $arg ) 
	{

		global $md5HashKey;	
        
        $lenString              = strlen($md5HashKey);                      // lengte van string 
        
        $hoeveelKeer            = substr_count( $md5HashKey, $arg);   // hoeveel $argument1 in $md5HashKey voorkomt
        
        return $procent         = ( $hoeveelKeer / $lenString ) * 100;

	}

    function functie3( $arg ) 
	{
        
        $md5HashKey             = $GLOBALS['md5HashKey'];
        
        $lenString              = strlen($md5HashKey);                      // lengte van string 
        
        $hoeveelKeer            = substr_count( $md5HashKey, $arg);   // hoeveel $argument1 in $md5HashKey voorkomt
        
        return $procent         = ( $hoeveelKeer / $lenString ) * 100;
        
	}


    $methode1 	=	functie1( $md5HashKey, $argument1 );
	$methode2 	=	functie2( $argument2 );
	$methode3 	=	functie3( $argument3 );
	

?>
<!DOCTYPE html>
<html>


        <p>Het karakter "<?php echo $argument1?>" komt <?php echo $methode1 ?>% voor in de string "<?php echo $md5HashKey ?>"</p>
		<p>Het karakter "<?php echo $argument2?>" komt <?php echo $methode2 ?>% voor in de string "<?php echo $md5HashKey ?>"</p>
		<p>Het karakter "<?php echo $argument3?>" komt <?php echo $methode3 ?>% voor in de string "<?php echo $md5HashKey ?>"</p>



	

</html>