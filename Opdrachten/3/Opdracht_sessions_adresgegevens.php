<?php

    session_start();

   

    $straat       = (isset($_SESSION['straat']) ? $_SESSION['straat'] : '' );
    $nummer       = (isset($_SESSION['nummer']) ? $_SESSION['nummer'] : '' );
    $gemeente     = (isset($_SESSION['gemeente']) ? $_SESSION['gemeente'] : '' );
    $postcode     = (isset($_SESSION['postcode']) ? $_SESSION['postcode'] : '' );

    

    // Is de submit knop gesset
    if (isset($_POST['submit'])){
     
            $email = $_POST['email'];
            $_SESSION['email'] = $email;
            
            $nickname = $_POST['nickname'];
            $_SESSION['nickname'] = $nickname;
        
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
            <li><?php echo "Nickname: " . $_SESSION['nickname'] ?></li>
        </ul>
            
        
        <h1 class="d2">Deel 2</h1>
    
	    <form action="Opdracht_sessions_overzicht.php" method="POST">
           
            <label for="straat">Straat</label>                    
            <input type="straat" name="straat" id="straat" value="<?= $straat ?>" <?= (isset($_GET['focus'] ) == $straat ? "autofocus" : '' ) ?>>
            
            <label for="nummer">Nummer</label>
            <input type="nummer" name="nummer" id="nummer" value="<?= $nummer ?>" <?= (isset($_GET['focus'] ) == $nummer ? "autofocus" : '' ) ?>>
            
            <label for="gemeente">Gemeente</label>
            <input type="gemeente" name="gemeente" id="gemeente" value="<?= $gemeente ?>" <?= (isset($_GET['focus'] ) == $gemeente ? "autofocus" : '' ) ?>>
            
            <label for="postcode">Postcode</label>
            <input type="postcode" name="postcode" id="postcode" value="<?= $postcode ?>" <?= (isset($_GET['focus'] ) == $postcode ? "autofocus" : '' ) ?>>
            
            <input type="submit" name="submit" value="Volgende">
            
        </form>
        
          
          
        <pre><?php echo var_dump( $_SESSION ) ?></pre>
        
    </body>
</html>