<?php

    $text = file_get_contents( 'text-file.txt' );

    //Splits de tekst op per karakter en sla deze op in een array
    $textChars = str_split($text);

    rsort($textChars);

    $reverseArray = array_reverse($textChars);



    $lijst      = array();
    $arrLength  = count($reverseArray);
    $aantalKar  = 0;
    $i          = 0;
    
    /* for($reverseArray[ $i ]; i < $arrLength; ++i) {
    
        if ( in_array( $reverseArray[ $i ], $reverseArray ) < 1 ) {
        
            ++$aantalKar;
        
        }
        else {
        
            $lijst = $reverseArray[ $i ];
        
        }
        
    } */

    /* foreach( $reverseArray as $value ){
    
        if ( isset( $lijst[$value] ) ) {
        
             ++$lijst[$value];
        
        }
        else {
        
            $lijst[$value] = 1;
        
        }
        
    } */
    
?>

<!doctype html>
<html>
  
      
   
    <pre><?php var_dump ( $lijst ) ?></pre>

      
 
</html>