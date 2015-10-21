<?php


    //LOGOUT
	if (isset($_GET['cookie'])) {
	
		if ($_GET['cookie'] == 'delete') {
		
			// Niet 100% veilig dus...
			setcookie('cookieAUT',false, time() - 360 );
			
			header('location: Opdracht_cookies.php');
		}
	}




    //Variabele
	$message			=	false;




    //Haal de info uit tekstbestand
        $Gegevens   	=	file_get_contents( 'gegevens.txt' );

    //Explode = split a string by string in een array --> $dateUser[0] = jan en $dataUser[1] = paswoord01
	    $dataUser		=	explode( ',', $Gegevens );
    




    //Indien gegevens juist ingegeven, maak een cookie aan
    if (isset( $_POST['submit'] ) ) {
        
        if ( $_POST[ 'name' ] == $dataUser[0] && $_POST[ 'password' ] == $dataUser[1] ) {
        
            setcookie( 'cookieAUT', true, time() + 360 );
            header( 'location: Opdracht_cookies2.php' );
        }
        else {
        
            $message = "Uw Gebruikersnaam of paswoord is fout. Gelieve opnieuw te proberen.";
            
        }
    }


        
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
    
        <h1>Inloggen</h1>
    
	    <form action="Opdracht_cookies.php" method="post">
          
            <?php if ( $message ): ?>
            
				<p><?php echo $message ?></p>
           
            <?php endif ?>
           
            <label for="name">Gebruikersnaam</label>                    
            <input type="text" name="name" id="name" >
            
            <label for="password">Paswoord</label>
            <input type="password" name="password" id="password" > 
            
            <input type="submit" name="submit" value="Inloggen" >
            
        </form>
        
        <pre><?php echo var_dump( $_COOKIE ) ?></pre>    
        
    </body>
</html>