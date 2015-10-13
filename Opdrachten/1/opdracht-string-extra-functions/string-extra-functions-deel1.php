<?php

	$fruit     = "kokosnoot";
    $lenFruit  = strlen($fruit);

    
    $letterO        = "o";
    $eersteLetter   = strpos($fruit, $letterO);

?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<p>De lengte van <?php echo $fruit ?> bedraagt <?php echo $lenFruit ?> karakters.</p>
	<p>De eerste letter <?php echo $letterO ?> komt in het woord <?php echo $fruit ?> voor op plek nummer <?php echo $eersteLetter ?></p>

</body>
</html>