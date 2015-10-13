<?php

    $rijen     = 10;
    $kolommen  = 10;
    
?>

<!doctype html>
<html>
   

    	<style>
			table
			{
				border-collapse:collapse;
			}

			td
			{
				padding: 22px;
				border: 1px solid grey;
			}
    	</style>

 
     <table>
         <?php for( $i = 0; $i < $rijen; ++$i ): ?>
         
             <tr>
             
                 <?php for( $j = 0; $j < $kolommen; ++$j ): ?>
                     
                     <td>kolom</td>
                     
                 <?php endfor ?>
             
             </tr>
             
         <?php endfor ?>
     </table>
 
</html>