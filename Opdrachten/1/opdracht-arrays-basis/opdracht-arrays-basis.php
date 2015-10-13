<?php

    $dieren1    = array('hond', 
                        'kat',
                        'vis',
                        'paard',
                        'kip',
                        'haan',
                        'geit',
                        'varken',
                        'schaap',
                        'ezel');
    
    $dieren2[] = 'hond';
    $dieren2[] = 'kat';
    $dieren2[] = 'hond';
    $dieren2[] = 'vis';
    $dieren2[] = 'paard';
    $dieren2[] = 'kip';
    $dieren2[] = 'haan';
    $dieren2[] = 'geit';
    $dieren2[] = 'varken';
    $dieren2[] = 'ezel';

    $auto      = array( 'landvoertuigen'         => array('auto', 'brommer', 'vrachtwagen'), 
                        'watervoertuigen'        => array('speedboat', 'surfplank', 'zeilboot'), 
                        'luchtvoertuigen'        => array('vliegtuig', 'UFO'), 
                        'onderwatervoertuigen'   => array('onderzeeër'), 
                        'plattelandsvoertuigen' => array('tractor') );

?>

<!doctype html>
<html>
   
    <p>Array dieren 1: <pre><?php print_r( $dieren1 ) ?></pre></p>
    <p>Array dieren 2: <pre><?php var_dump( $dieren2 ) ?></pre></p>
    
    <pre><?php print_r( $auto ) ?></pre>

</html>