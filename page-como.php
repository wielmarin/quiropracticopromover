<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<!-- banner-image -->
	<div class="bannersubpage">
		<div class="banner-titelsubpage"><h1>Como trabajamos</h1></div> 
	</div>
	
<!-- column-container -->
<div class="container-subpage-background">
	<div class="container-subpage">
		<div class="tekst-subpage">
		<?php the_content(); ?>
	</div>	
		
		<div class="subtitel-howwork"><h1><b>Técnicas Chiropractic Promover </b></h1></div>
		<div class="inleiding-howwork"><p>Te ayudamos a alcanzar tu máximo nivel de función de tus necesidades a través de un cuidadoso cuestionario, observación y tecnología.<br>Utilizamos una variedad de técnicas basadas en la evidencia. Éstas incluyen:</p></div>
			<div class="flex-containerhowwework">
			<div class="flex-item1howwework">
			<div class="beeldflexhowwework"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/spine-icon-1-e1489759098582.png" alt="Joint manipulation" height="50" width="50"></div>
			<div class="titel-flex-container">Manipulación articular</div><div class="tekst">Un movimiento pequeño y rápido de una articulación para promover la movilidad. Tradicionalmente utilizado por los quiroprácticos.</div>
			</div>
			<div class="flex-item2howwework">
			<div class="beeldflexhowwework"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/Trigger-point-e1489759621282.png" alt="Trigger-point therapy" height="50" width="50"></div>
			<div class="titel-flex-container">Terapia del punto de gatillo </div><div class="tekst">Aplicamos presión específica para promover la relajación del músculo.</div>
			</div>
			<div class="flex-item3howwework">
			<div class="beeldflexhowwework"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/Movement-e1489761369427.png" alt="Low intensity excercises" height="50" width="45"></div>         
			<div class="titel-flex-container">Ejercicios posturales de baja intensidad</div><div class="tekst">Promovemos una buena postura en la vida cotidiana.</div>
			</div>
			<div class="flex-item4howwework">
			<div class="beeldflexhowwework"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/Movementintensive-e1489761860889.png" alt="High intensity exercices" height="50" width="45"></div>
			<div class="titel-flex-container">Ejercicios de alta intensidad</div><div class="tekst">Promovemos la neuroplasticidad, con la adaptación del sistema nervioso.</div>
			</div>
			<div class="flex-item5howwework">
			<div class="beeldflexhowwework"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/chiropracticwit.png" alt="Vestibular rehabilitation" height="50" width="50"></div>
			<div class="titel-flex-container">Rehabilitación vestibular</div><div class="tekst">Un reciclaje del sistema nervioso sensible al equilibrio con el fin de promover un control más preciso de todas las partes del cuerpo.</div>
			</div>
			<div class="flex-item6howwework">
			<div class="beeldflexhowwework"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/video-camera-e1489762660509.png" alt="Video analyses" height="50" width="50"></div>         
			<div class="titel-flex-container">Análisis de video</div><div class="tekst">Identificamos y promovemos tus articulaciones frente a los déficits en el control de movimientos y orientamos con precisión la atención a los movimientos donde sea necesario.</div> 
			</div>
			<div class="flex-item7howwework">
			<div class="beeldflex7"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/Scales-2.png" alt="Balance testing" height="70" width="70"></div>         
			<div class="titel-flex-container7">Pruebas de equilibrio usando Pondera</div><div class="tekst">Evaluar la estabilidad e identificar posibles desequilibrios.</div> 
			</div> 		
		</div>
		<div class="subtitel-howwork"><h2><b>Educación</b></h2></div>
		<div class="inleiding-howwork"><p>Robert Correll, quiropráctico de la Quiropráctica Promover se graduó como quiropráctico en el Colegio Anglo-Europeo de Quiropráctica en 2008. Después siguió su educación sobre neurología funcional y logró su diplomatura de la Junta de Neurología Quiropráctica Americana. En 2015 y 2016 Robert logró una certificación de Rehabilitación Neuro-Ortopédica Funcional, lo que le permitió evaluar mejor el movimiento. <a href="http://www.quiropracticopromover.es/nl/overons/">Leer más acerca de la experiencia de Robert Correll</a></p></div>
		<div class="subtitel-howwork"><h2><b>¿Aprende más?</b></h2></div>
		<div class="inleiding-howwork"><p>¿Quieres saber más sobre cómo trabajamos y cómo podemos ayudarte? <a href="http://www.quiropracticopromover.es/contact/">Contáctanos para más información</a></p></div>
	<div class="taal-yourvisit"><h4><nobr>Hablamos Español <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839961_flag-spain.png" alt="Espanol" height="20" width="20"></div></nobr> <nobr>We Speak English <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839982_flag-united-kingdom.png" alt="English" height="20" width="20"></div></nobr> <nobr> Wij Spreken Nederlands <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839997_flag-the-netherlands.png" alt="Nederlands" height="20" width="20"></div></nobr></h4></div>
	</div>

</div>	






<?php endwhile;

else : 
echo '<p>No content found</p>';

endif;

get_footer();

?>