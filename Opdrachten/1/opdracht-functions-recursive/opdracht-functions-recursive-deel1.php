<?php

    
	

    function kapitaalBerekenen( $startWaarde, $renteVoet, $tijd) {
        
         $counter = 0;
         $resultaat = '';
        
        if( $counter <= $tijd ) {
        
            $renteBedrag  = floor(($startWaarde * $renteVoet) / 100);
            $nieuwBedrag  = $startWaarde + $renteBedrag;
            
            $resultaat[$counter ] = 'Nieuw bedrag = €' . $nieuwBedrag . ' (€' . $renteBedrag . ' = rente)';
            
            $counter++;
            
            return kapitaalBerekenen( $nieuwBedrag, $renteVoet, $tijd );
            
        }
        else {
        
            return $resultaat;
        
        }
    
    
    
    
    }

    $kapitaal   = 100000;
    $rente      = 8;
    $aantalJaar = 10;

    $winstHans = kapitaalBerekenen( $kapitaal, $rente, $aantalJaar );

?>
<!DOCTYPE html>
<html>


    <ul>
			<?php foreach($winstHans as $value): ?>
				<li><?php echo $value ?></li>
			<?php endforeach ?>
		</ul>


	

</html>