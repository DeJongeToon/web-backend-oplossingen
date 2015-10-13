<?php

    // Artikel 2 - Jurassic World
    $titel2             = "In dit aards paradijs werd 'Jurassic World' opgenomen";
    $datum2             = "07/10/2015";
    $inhoud2            = "Bryce Dallas Howard (34) werd compleet overdonderd door het succes van 'Jurassic World': \"Op één jaar tijd zagen we hoe onze film werd ingeblikt, het openingsweekend alle records verbrak, de dvd werd uitgebracht én de sequel werd aangekondigd. Het geeft me tot op de dag van vandaag een surreëel gevoel.\" ";
    $afbeelding2        = "img/jurassicWorld.jpg";
    $beschrijvingAfb2   = "Foto met Chris Patt";

    // Artikel 1 - Niezend meisje
    $titel1             = "Dit meisje niest 12.000 keer per dag";
    $datum1             = "07/10/2015";
    $inhoud1            = "Katelyn woont in Angleton, Texas. In een interview voor het lokale televisiestation KTVT-TV vertelt ze dat al zes verschillende dokters heeft bezocht, maar tot nu toe kan niemand verklaren wat er precies aan de hand is. De meest voor de hand liggende verklaringen, zoals een allergie of een virus, werden ondertussen al uitgesloten. 

\"Het begon in kleine opstootjes. Ik begon gewoon te niezen,\" vertelt het meisje. \"Ik dacht, oh, ik ben gewoon allergisch voor iets. Ik heb voortdurend buikpijn, mijn benen doen pijn, omdat ik verzwakt ben en ik kan amper eten.\" 

Katelyn gaat voorlopig ook niet meer naar school, omdat ze wordt uitgelachen door de andere kinderen. Ze speelt klarinet, maar ook dat is momenteel uit den boze. Het meisje luistert naar The Beatles om haar te helpen ontspannen. Slapen kan ze alleen maar als ze een slaapmiddel inneemt, want zelfs in haar slaap steken de niesbuien de kop op. 

Momenteel wordt onderzocht of de niesaanvallen mogelijk stressgerelateerd zijn. Volgens Katelyns vader worden de buien erger wanneer het meisje zich ook maar lichtjes geïrriteerd voelt. 

KTVT-TV sprak ook met één van de artsen die Katelyn onderzocht. Hij oppert dat een zenuwtrek mogelijks een verklaring is voor niesaanvallen. Het meisje vertelt immers dat ze vlak voor de buien beginnen, een vreemde prikkeling in haar neus voelt. Zenuwtrekken kunnen niet genezen worden, maar zijn vaak wel onder controle te krijgen met medicijnen. Tics steken vaak in de kindertijd de kop op. Op adolescente leeftijd nemen ze dikwijls weer af en verdwijnen soms weer helemaal, vertelt de dokter.";
    $afbeelding1        = "img/niezen.jpg";
    $beschrijvingAfb1   = "Katelyn Thornley";

    // Artikel 3 - Stelende collega's
    $titel3             = "Waarom collega's onze spullen stelen en wat je er kan aan doen";
    $datum3             = "07/10/2015";
    $inhoud3            = "Iemand die stiekem bureaustoelen verwisselt, computermuizen van plaats verandert of balpennen steelt: wie zijn die geniepigaards toch, die vrij en ongestraft op kantoor rondlopen? Eerlijk: jij en ik. Stelende collega's zijn een heel frequent fenomeen, en iedereen maakt zich er wel eens schuldig aan. Zelfs mensen die van zichzelf denken dat ze erg eerlijk zijn, hebben het vaak moeilijk om verleidingen die op korte termijn op de loer liggen te weerstaan. 

Eerlijke mensen, oneerlijk gedrag
Menselijk gedrag zit zo in elkaar dat we eerder acties uitvoeren die op korte termijn een goed gevoel opleveren, zo legt het magazine Fastcompany uit. Als je bijvoorbeeld razende honger hebt lijkt alles wat op je pad komt aanvaardbaar om op te eten, zelfs als dat eten toevallig van iemand anders is. De meesten onder ons bezitten wel abstracte waarden zoals eerlijkheid en moed. Maar in bepaalde situaties zijn we eerder geneigd om op onze acties te focussen, dan op de implicaties die die acties hebben voor het beeld dat we hebben van onszelf. Dat betekent dat kleine daden van oneerlijkheid perfect kunnen samengaan met het geloof in onszelf dat we eerlijke mensen zijn. Ons geweten ziet er met andere woorden weinig graten in dat we een balpen stelen, en we gaan onszelf er niet minder eerlijk door vinden.";
    $afbeelding3        = "img/spullen.jpg";
    $beschrijvingAfb3   = "Handig materiaal";
        


    $artikels = array(
                        array('titel'                   => $titel1,
                              'datum'                   => $datum1,
                              'inhoud'                  => $inhoud1,
                              'afbeelding'              => $afbeelding1,
                              'afbeeldingBeschrijving'  => $beschrijvingAfb1),
        
                        array('titel'                   => $titel2,
                              'datum'                   => $datum2,
                              'inhoud'                  => $inhoud2,
                              'afbeelding'              => $afbeelding2,
                              'afbeeldingBeschrijving'  => $beschrijvingAfb2),
        
                        array('titel'                   => $titel3,
                              'datum'                   => $datum3,
                              'inhoud'                  => $inhoud3,
                              'afbeelding'              => $afbeelding3,
                              'afbeeldingBeschrijving'  => $beschrijvingAfb3));


    $eenArtikel = true;
    

   
        
    // is GET variabele geset, dus niet NULL
	if ( isset ( $_GET['volledigArtikel'] ) )
	{
		$id = $_GET['volledigArtikel'];

		// key $id bestaat in array artikels?
		if ( array_key_exists( $id , $artikels ) )
		{
			$artikels 			= 	array( $artikels[$id] );
			$eenArtikel	        =	false;
		
			
	}                  

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voorbeeld van $_GET-variabele</title>
	<link rel="stylesheet" type="text/css" href="css/basis.css">
	
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

<body class="web-backend-inleiding">

	<main>
    
       
        <?php foreach( $artikels as $waarde => $inhoud) : ?>
    
	      <section>
	    
           <!-- layout van heel stuk blok, class ="artikel" is true -->
	       <div class = "<?php echo ( $eenArtikel ) ? 'artikel': 'grootArtikel' ; ?>"> 
	       
	                <!-- Inhoud 1 stukje blok --> 
	                <h1><?php echo $inhoud['titel'] ?></h1>
	                <p class="datum"><?php echo $inhoud['datum'] ?></p>
	                <img src= "<?php echo $inhoud['afbeelding'] ?>" alt="Chris Patt"/>
	                
	                <?php if( $eenArtikel ): ?> 
	                    <p class="beschrijvingFoto"><?php echo $inhoud['afbeeldingBeschrijving'] ?></p>
	                <?php endif ?>
	                
	                <p class="inhoud"><?php echo ($eenArtikel) ? substr($inhoud['inhoud'], 0, 50) . '...' : $inhoud['inhoud'] ; ?></p>
	                
	                    <!-- Lees-meer-link, enkel bij kleine artikels -->
	                    <?php if( $eenArtikel ): ?> 
	                        <p><a class="link" href="get-basis.php?volledigArtikel=<?php echo $waarde ?>">Lees meer</a></p>
	                    <?php endif ?>
	                                     
	       </div>    
	        	        
	      </section>
	               
	    <?php endforeach ?>
 
	</main>

</body>
</html>