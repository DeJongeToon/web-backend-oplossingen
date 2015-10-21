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
	<link rel="stylesheet" type="text/css" href="css/sessions.css">
	
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

    <body>
    
        <h1>Deel 1: Registratiegegevens</h1>
    
	    <form action="opdracht_post.php" method="POST">
           
            <label for="email">Email</label>                    
            <input type="email" name="mail" id="email">
            
            <label for="nickname">Nickname</label>
            <input type="text" name="naam" id="nickname">
            
            <input type="submit" name="submit" value="Volgende">
            
        </form>

        
    </body>
</html>