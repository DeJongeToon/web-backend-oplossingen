<?php

    $artikels = array(
                        array('title'	 => 'Titel van artikel 1',
							  'text' 	 => 'Tekst van artikel 1',
							  'tags' 	 => array('tag 1 van artikel 1') ),
        
					    array('title'	 => 'Tekst van artikel 2',
							  'text' 	 => 'Tekst van artikel 2',
							  'tags' 	 => array('tag 1 van artikel 2',
                                                  'tag 2 van artikel 2' ) ),
					
					    array('title'	 => 'Tekst van artikel 3',
							  'text' 	 => 'Tekst van artikel 3',
							  'tags' 	 => array('tag 1 van artikel 3',
                                                  'tag 2 van artikel 3',  
                                                  'tag 3 van artikel 3' ) ) 
                    );
?>

<html>
<head>
	<?php include ('header-partial.html') ?>
</head>

    <body>
          <?php if( $artikels ) : ?>
          
              <?php include ('body-partial.html') ?>;
          
          <?php endif ?>
       
    </body>
    
    <footer>
       <?php include ('footer-partial.html') ?>
    </footer> 

</html>
