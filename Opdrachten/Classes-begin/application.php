<?php

    function __autoload($Percent) {
    
        include 'classes/' . $Percent . '.php';
    
    }

    // Argumenten een waarde geven
    $new  = -200;
    $unit = 100;

    // Instantie van de klasse Percent maken
    $class_percent = new Percent( $new, $unit );

    $absolute = $class_percent->absolute;
    $nominal  = $class_percent->nominal;
    $hundred  = $class_percent->hundred;
    $relative = $class_percent->relative;

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Class begin</title>
    
    <style>
	
	table{
        
		border-collapse:collapse;

	}

	td{
        
		padding:6px;
		border:1px solid black;
	}


	</style>
    
</head>
<body>
  
   <table>
   
	<p>Hoeveel procent is <?php echo $new ?> van <?php echo $unit ?>?</p>
	
	<tr>
		<td>Absoluut</td>
		<td><?php echo $absolute ?></td>
	</tr>
	
	<tr>
		<td>Relatief</td>
		<td><?php echo $relative ?></td>
	</tr>
	
	<tr>
		<td>Geheel getal</td>
		<td><?php echo $hundred ?></td>
	</tr>
	
	<tr>
		<td>Nominaal</td>
		<td><?php echo $nominal ?></td>
	</tr>
	
</table>
    
</body>
</html>