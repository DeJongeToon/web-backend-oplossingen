<?php

    
        
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van Cookies</title>
	<link rel="stylesheet" type="text/css" href="css/cookies.css">
	
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

    <body>
    
        <h1>Dashboard</h1>
    
	    <form action="Opdracht_cookies.php" method="post">
         
         <p>U bent ingelogd.</p>
                
            <p><a href="Opdracht_cookies.php?cookie=delete">Uitloggen</a></p>
            
        </form>
        
        <pre><?php echo var_dump( $_COOKIE ) ?></pre>
        
        
    </body>
</html>