<?php

	$lettertje      = "e";
    $cijfertje      = 3;
    $langsteWoord   = "zandzeepsodemineralenwatersteenstralen";

    $vervangLetters = str_replace($lettertje,$cijfertje, $langsteWoord);

?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<p><?php echo $langsteWoord ?> wordt <?php echo $vervangLetters ?></p>

</body>
</html>