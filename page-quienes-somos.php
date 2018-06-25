<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<!-- banner-image -->
	<div class="bannersubpage">
			<div class="banner-titelsubpage"><h1>Quiénes somos</h1></div> 
	</div>

<div class="container-subpage-background">
	<div class="container-subpageaboutus">

			<div class="flex-introductie">
				<div class="flex-photo">
					<div class="subtitelabout"><h1>Robert Correll<br></h1><h2>Quiropráctico</h2></div>
					<div class="flex-photorobert"></div>
				</div>
				<div class="flex-aboutme"> 
					<p>Me gradué como quiropráctico en el Colegio Anglo-Europeo de Quiropráctica en 2008.<br><br>En 2014, obtuve un diploma de la Junta Americana de Neurología Quiropráctica, después de más de 600 horas de educación sobre el control del cuerpo por el sistema nervioso. 
				Entre agosto de 2015 y septiembre de 2016 obtuve la certificación de <a href="http://fnor.net/" target="_blank">Rehabilitación Neuro-Ortopédica Funcional</a> del <a href="https://carrickinstitute.com/" target="_blank">Instituto Carrick</a>, lo que me permitió evaluar mejor el movimiento y utilizar técnicas para mejorar la función del sistema neuro-musculoesquelético. 
				<br><br>Después de un primer año de trabajo en Colchester, Inglaterra, me trasladé a los Países Bajos para trabajar en Wijchen y Druten, donde obtuve de más de siete años de experiencia del 2009 hasta 2016. <br><br>
				Soy miembro de la <a href="http://www.chiropractic-ecu.org/" target="_blank">European Chiropractors' Union (ECU)</a> y de la <a href="http://quiropractica-aeq.com/index.php/quienes-somos" target="_blank">Asociación Española de Quiropráctica (AEQ)</a>. La AEQ es una prestigiosa asociación que solo acepta a Doctores en Quiropráctica con título universitario expedido por las universidades de quiropráctica reconocidas por el Consejo Europeo de Educación Quiropráctica.<br><br>
				</p>
				</div>
			</div>
			<div class="flex-introductie">
				<div class="flex-photo">
					<div class="subtitelabout"><h1>Marin Wiellersen<br></h1><h2>Gerente de la clínica</h2></div> 
					<div class="flex-photomarin"></div>
				</div>
				<div class="flex-aboutme">
					<p>Nací en Holanda y vivo en Alicante desde 2016. Me mudé para empezar la clínica con Robert (y por el sol y la comida Española por supuesto).<br><br>
					Soy gerente de la clínica y responsable de la organización, como administración, planificación y comunicación. 
					<br><br>Me gusta relacionarme con los pacientes. Me importa que los pacientes se sientan como en casa y resolverles con todas las dudas y preguntas antes, durante y después de una consulta.
					<br><br>
					He conocido la quiropráctica a través de Robert Correll. Me encanta cuando los pacientes se sienten mejor después de una consulta. También me fascina cómo trabaja Robert. Realmente se presta atención, dedicación y tiempo a cada uno de los pacientes.
					<br><br>
					</p>
				</div>
			</div>
			<div class="flex-introductiemeerweten">
				<div class="subtitel-pageaboutme"><h2><b>¿Quiere saber más?</b></h2></div> 
				<div class="inleiding-pageaboutme"><p>Si desea saber más sobre <a href="http://www.quiropracticopromover.es/comotrabajamos/">cómo trabajamos</a> y cómo podemos ayudarse, si necesitas más información sobre su <a href="http://www.quiropracticopromover.es/consulta/">(primera) consulta</a>, o si tiene alguna otra pregunta, <a href="http://www.quiropracticopromover.es/contacto/">contáctanos</a>.</p></div>  
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