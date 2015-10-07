<?php

    $getallen    = array(8, 7, 8, 7, 3, 2, 1, 2, 4);

    $geenDubbels = array_unique($getallen);

    rsort($geenDubbels); 

?>

<!doctype html>
<html>
   
    <pre><?php print_r($geenDubbels) ?></pre>

</html>