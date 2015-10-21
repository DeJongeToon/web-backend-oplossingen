<?php

    session_start();


    // Is de submit knop gesset
    if (isset($_POST['submit'])){
        
       $straat = $_POST['straat'];
            $_SESSION['straat'] = $straat;
            
            $nummer = $_POST['nummer'];
            $_SESSION['nummer'] = $nummer;
        
            $gemeente = $_POST['gemeente'];
            $_SESSION['gemeente'] = $gemeente;
        
            $postcode = $_POST['postcode'];
            $_SESSION['postcode'] = $postcode;
        
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
    
        <h1 class="p2">Registratiegegevens</h1>
        
        <ul class="sess">
            <li><?php echo "Email: " . $_SESSION['email'] ?></li> 
            <p><a href="Opdracht_sessions_registratiegegevens.php?focus=<?= $email ?> ">wijzig</a></p>
            
            <li><?php echo "Nickname: " . $_SESSION['nickname'] ?></li>
            <p><a href="Opdracht_sessions_registratiegegevens.php?focus=nickame ">wijzig</a></p>
            
            
            
            <li><?php echo "Straat: " . $_SESSION['straat'] ?></li>
            <p><a href="Opdracht_sessions_adresgegevens.php?focus=<?= $straat ?> ">wijzig</a></p>
            
            <li><?php echo "Nummer: " . $_SESSION['nummer'] ?></li>
            <p><a href="Opdracht_sessions_adresgegevens.php?focus=<?= $nummer ?> ">wijzig</a></p>
            
            <li><?php echo "Gemeente: " . $_SESSION['gemeente'] ?></li>
            <p><a href="Opdracht_sessions_adresgegevens.php?focus=<?= $gemeente ?> ">wijzig</a></p>
            
            <li><?php echo "Postcode: " . $_SESSION['postcode'] ?></li>
            <p><a href="Opdracht_sessions_adresgegevens.php?focus=<?= $postcode ?> ">wijzig</a></p>
            
        </ul>
        
         
      
        <pre><?php echo var_dump( $_SESSION ) ?></pre>
    </body>
</html>