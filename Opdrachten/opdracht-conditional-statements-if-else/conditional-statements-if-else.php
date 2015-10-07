<?php

    $jaartal        = 4;
    $schrikkeljaar  = "is een schrikkeljaar";

    if( ($jaartal % 4) == 0  && ( !(($jaartal % 100) == 0) || ($jaartal % 400) == 0 )) {
        
        $schrikkeljaar;
        
    }  
    else {
    
        $schrikkeljaar = "is geen schrikkeljaar";
        
    }
?>

<!doctype html>
<html>
   
    <p>Het jaar <?= $jaartal ?> <?= $schrikkeljaar ?></p>

</html>