<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<!-- banner-image -->
	<div class="bannersubpage">
			<div class="banner-titelsubpage"><h1>Over ons</h1></div> 
	</div>
	
<div class="container-subpage-background">
	<div class="container-subpagequien">

			<div class="flex-introductie">
				<div class="flex-photo">
					<div class="subtitelabout"><h1><b>Robert Correll<br></b>Chiropractor</h1></div>
					<div class="flex-photorobert"></div>
				</div>
				<div class="flex-aboutme"> 
					<div class="text-itemaboutme"><p>In 2008 ben ik als chiropractor afgestudeerd aan de Anglo-European College of Chiropractic.<br><br>In 2014 heb ik 600 uur aan opleidingen gevolgd op het gebied van functionele neurologie en mijn diploma van de American Chiropractic Neurology Board behaald. Tussen augustus 2015 en september 2016 heb ik mij ontwikkeld tot expert op het gebied van bewegingstechnieken en heb ik het certificaat <a href="http://fnor.net/professionals/the-fnortm-certification/" target="_blank">Functional Neuro-Orthopedic Rehabilitation</a> behaald bij <a href="https://carrickinstitute.com/" target="_blank">Carrick Institute</a>. Daardoor ben ik gespecialiseerd in het controleren van lichaamsbeweging en in de technieken om de functie van het neuro-musculo-skeletal systeem te verbeteren.<br><br>Na één jaar gewerkt te hebben in Colchester, Engeland, ben ik naar Nederland verhuisd. Daar heb ik zeven jaar in twee praktijken gewerkt, namelijk Chiropractie Wijchen en Druten.<br><br>
					Ik ben actief lid van de <a href="http://www.chiropractic-ecu.org/" target="_blank">European Chiropractors' Union (ECU)</a> en de <a href="http://quiropractica-aeq.com/index.php/quienes-somos" target="_blank">Asociación Española de Quiropráctica (AEQ)</a>.<br><br>
					</p></div>
				</div>
			</div>
			<div class="flex-introductie">
				<div class="flex-photo">
					<div class="subtitelabout"><h1>Marin Wiellersen<br>Praktijkmanager</h1></div> 
					<div class="flex-photomarin"></div>
				</div>
				<div class="flex-aboutme">
					<p>Ik ben geboren in Nederland en sinds 2016 woonachtig in Alicante. Verhuisd voor het opstarten van een eigen chiropractie praktijk in Spanje.    
					<br><br>Als praktijkmanager draag ik zorg voor alle dagelijkse organisatorische werkzaamheden zoals planning, administratie en communicatie. Daarnaast onderhoud ik met veel plezier het contact met de patiënten. Ik vind ik het belangrijk dat iedereen zich thuisvoelt in onze praktijk en om de patiënten goed te woord te staan voor, tijdens en na een bezoek. 
					<br><br>Via Robert Correll heb ik het beroep Chiropractie pas leren kennen. Ik vind het geweldig om te zien dat mensen zich na een consult al beter kunnen voelen. Ik ben ook erg onder de indruk van Robert zijn manier van werken. Hij staat voor kwaliteit en neemt echt de tijd voor iedere patiënt.
					<br><br>Ik kijk er naar uit je te ontmoeten in de praktijk.<br><br>
					</p>
				</div>
			</div>
			<div class="flex-introductiemeerweten">
				<div class="subtitel-pageaboutme"><h2><b>Meer weten?</b></h2></div> 
				<div class="inleiding-pageaboutme"><p>Heeft u vragen over <a href="http://www.quiropracticopromover.es/nl/hoewijwerken/">onze werkwijze en hoe wij u kunnen helpen?</a> Of heeft u andere vragen? <a href="http://www.quiropracticopromover.es/nl/contactnl/">Neem dan contact met ons op.</a></p></div>  
				<div class="taal-aboutme"><h4><nobr><a href="http://www.quiropracticopromover.es/quienes-somos/">Hablamos Español <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839961_flag-spain.png" alt="Espanol" height="20" width="20"></div></a></nobr> <nobr><a href="http://www.quiropracticopromover.es/en/about-us/">We Speak English <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839982_flag-united-kingdom.png" alt="English" height="20" width="20"></div></nobr></a> <a href="http://www.quiropracticopromover.es/nl/overons/"><nobr> Wij Spreken Nederlands <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839997_flag-the-netherlands.png" alt="Nederlands" height="20" width="20"></div></nobr></a></h4></div>
			</div>
		</div>
</div>



<?php endwhile;

else : 
echo '<p>No content found</p>';

endif;



get_footer();

?>