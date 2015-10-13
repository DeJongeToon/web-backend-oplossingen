<?php

    $boodschappenlijstje = array('coca cola', 'fanta', 'sprite', 'chips', 'nootjes', 'nic nacjes');

    $lengteLijst         = count($boodschappenlijstje);

    $index = 0;

    while ($index <= $lengteLijst) {
    
        $lijst[] = $boodschappenlijstje[$index];
        $index++;
        
    }

?>

<!doctype html>
<html>
  
    <ul>                     
         <li><?= $lijst[0] ?></li>
         <li><?= $lijst[1] ?></li>
         <li><?= $lijst[2] ?></li>
         <li><?= $lijst[3] ?></li>
         <li><?= $lijst[4] ?></li> 
         <li><?= $lijst[5] ?></li>  
    </ul>
    
  
    
    <!-- ??? isset ??? -->
    
      <ul>
        <?php $index = 0 ?>

       
        <?php while ( isset( $boodschappenlijstje [ $index ] ) ): ?>      
                          
    		  <li><?= $boodschappenlijstje [ $index ] ?></li>
    		  
    		  <?php $index++ ?>
    		  
        <?php endwhile; ?>

     </ul>
    
    
    
    
   
</html>