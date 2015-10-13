<?php

    $rijen     = 10;
    $kolommen  = 10;

    
    
?>

<!doctype html>
<html>
   

    	<style>
			table
			{
				border-collapse: collapse;
			}

			td
			{
				padding: 22px;
				border: 1px solid #4d453a;
			}
            .oneven
            {
            
                background-color: #83ff83;
            
            }
    	</style>

 
     <table>
         <?php for( $rij = 0; $rij <= $rijen; ++$rij ): ?>
         
             <tr>
             
                 <?php for( $kolom = 0; $kolom <= $kolommen; ++$kolom ): ?>
                     
                                         <!-- voorwaarde           =   TRUE   of FALSE -->
                     <td class=" <?= ( ($rij * $kolom) % 2 > 0 ) ? 'oneven'    :  '' ?> " > 
                        <?php echo $rij * $kolom ?>
                     </td>
     
                 <?php endfor ?>
 
             </tr>
             
         <?php endfor ?>
     </table>
     
 
</html>