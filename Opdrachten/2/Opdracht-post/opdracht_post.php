<?php

    $password = 'azerty';
    $username = 'Toon';
    $message  = 'Log hier in:';

    if (isset($_POST['submit'])){
        
        if($_POST['naam'] == $username && $_POST['paswoord'] == $password) {
        
            $message = 'Welkom';
        
        }  else {
        
            $message = 'Er ging iets mis bij het inloggen, probeer opnieuw.';
        
        }
    
    
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van $POST-variabele</title>
	<link rel="stylesheet" type="text/css" href="css/post.css">
	
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

    <body>
    
        <p><?php echo $message ?></p>
    
	    <form action="opdracht_post.php" method="POST">
            
            <label for="naam">Username</label>
            <input type="text" name="naam" id="naam" value="Toon">
            
            <label for="paswoord">Password</label>                    
            <input type="password" name="paswoord" id="paswoord" value="azerty">
            
            <input type="submit" name="submit" value="Submit">
            
        </form>

        
    </body>
</html>