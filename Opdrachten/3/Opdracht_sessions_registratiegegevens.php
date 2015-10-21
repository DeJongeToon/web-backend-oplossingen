<?php

    session_start();

    // Sessie verwijderen
	if (isset($_GET['session']))
	{
		if($_GET['session'] == 'destroy')
		{
			session_destroy();
			header('Location: Opdracht_sessions_registratiegegevens.php'); // staat in voor refresh
		}
	}


    // als sessie is geSET --> sessie 'email' in $email steken
    $email      = (isset($_SESSION['email']) ? $_SESSION['email'] : '' );
    $nickname   = (isset($_SESSION['nickname']) ? $_SESSION['nickname'] : '' );

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
    
	    <form action="Opdracht_sessions_adresgegevens.php" method="POST">
           
            <label for="email">Email</label>                    
            <input type="email" name="email" id="email" value="<?= $email ?>" <?= (isset($_GET['focus'] ) == $email ? "autofocus" : '' ) ?> >
            
            <label for="nickname">Nickname</label>
            <input type="text" name="nickname" id="nickname" value="<?= $nickname ?>" <?= (isset($_GET['focus'] ) == $nickname ? "autofocus" : '' ) ?> > 
            
            <input type="submit" name="submit" value="Volgende" >
            
        </form>
        
        
        <a href="Opdracht_sessions_registratiegegevens.php?session=destroy">Sessies vernietigen</a>
        
      
      <pre><?php echo var_dump( $_SESSION ) ?></pre>
        
    </body>
</html>