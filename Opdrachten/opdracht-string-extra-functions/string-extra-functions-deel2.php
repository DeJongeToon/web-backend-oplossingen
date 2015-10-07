<?php

	$fruit         = "ananas";

    $letter        = "a";
    $laatsteLetter = strrpos($fruit, $letter);

    $capital       = strtoupper ( $fruit );

?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<p>De laatste letter <?php echo $letter ?> komt in het woord <?php echo $fruit ?> voor op plek nummer <?php echo $laatsteLetter ?></p>
	<p>Het woord <?php echo $capital ?> in hoofdletter.</p>

</body>
</html>