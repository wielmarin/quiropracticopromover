<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<!-- banner-image -->

	<div class="bannersubpage">
			<div class="banner-titelsubpage"><h1>Acerca de consulta</h1></div> 
	</div>
	
<!-- column-container -->

<div class="container-subpage-background">
<div class="flex-containeryourvisit">
<div class="hoofdtitel-yourvisit"><h1><b>Acerca de su (primera) consulta</b></h1></div>
	<div class="inleiding-yourvisit"><p>¿Quiere saber qué puedes esperar de su primera, segunda y siguientes consultas a Quiropráctico Promover? Lea más sobre las consultas, tarifas y duración de las visitas.</p></div>
	<div class="flex-yourvisit">
	<div class="flex-item1yourvisit">
		<div class="description-yourvisit"><H2>Visita introductoria</H2></div>
		<div class="text-itemyourvisit">La visita introductoria es gratuita y opcional. Incluye: 
		 <ul>
			<li>Completar un formulario de ingreso</li>
			<li>Conversación para detectar sus molestias</li>
			<li>Algunas pruebas iniciales</li>
		</ul>
		*No se incluye tratamiento.<br>
		</div>
		<div class="tijdyourvisit"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/clockwhite.png" height="25" width="25" alt="Time" /></div>&nbsp;&nbsp;15 - 30 minutes
	<div class="button-yourvisit"><a class="buttonyourvisit" href="http://www.quiropracticopromover.es/contacto/">&nbsp;&nbsp;&nbsp;&nbsp;Pide una cita&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
	</div>
	<div class="flex-item2yourvisit" onclick="">
		<div class="description-yourvisit"><H2>Primera consulta - €35</H2></div>
		<div class="text-itemyourvisit">La Primera visita incluye: 
		<ul>
			<li>Conversación para detectar sus molestias</li>
			<li>Examen fisico</li>
			<li>Evaluación para determinar el curso exacto de la atención</li>
			<li>Si es apropiado, el tratamiento comenzará</li>
		</ul>
		</div>
		<div class="tijdyourvisit"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/clockwhite.png" height="25" width="25" alt="Time" /></div>&nbsp;&nbsp;45 - 60 minutes
	<div class="button-yourvisit"><a class="buttonyourvisit" href="http://www.quiropracticopromover.es/contacto/">&nbsp;&nbsp;&nbsp;&nbsp;Pide una cita&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
	</div>
	<div class="flex-item3yourvisit" onclick="">
		<div class="description-yourvisit"><H2>Consultas siguientes - €35</H2></div>
		<div class="text-itemyourvisit">Las siguientes consultas incluyen: 
		<ul>
			<li>Continuación del plan de atención</li>
			<li>Constante reevaluación</li>
			<li>Ajustes según sea su evolución</li>
		</ul><br><br><br> 
	</div>
	<div class="tijdyourvisit"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/clockwhite.png" height="25" width="25" alt="Time" /></div>&nbsp;&nbsp;10 - 30 minutes
	<div class="button-yourvisit"><a class="buttonyourvisit" href="http://www.quiropracticopromover.es/contacto/">&nbsp;&nbsp;&nbsp;&nbsp;Pide una cita&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
	</div>
</div>
	<div class="subtitel-yourvisit"><h2><b>Bonos y descuentos</b></h2></div>
	<div class="inleiding-yourvisit"><p>Ofrecemos bonos de 4 sesiones por 100€</p></div>
	<div class="subtitel-yourvisit"><h2><b>Entre sus visitas</b></h2></div>
	<div class="inleiding-yourvisit"><p>En casi todos los casos, el quiropráctico se indicará ejercicios para hacer en casa. El resultado de su tratamiento depende de la manipulación de sus articulaciones y la evolución de estas prácticas. No dude en ponerse en contacto con nosotros si tiene alguna duda sobre sus ejercicios prescritos.</p></div>
	<div class="subtitel-yourvisit"><h2><b>Cancelaciones</b></h2></div>
	<div class="inleiding-yourvisit"><p>Si no puede asistir a su cita, póngase<a href="http://www.quiropracticopromover.es/contacto/"> en contacto</a> con nosotros lo antes posible. Nos reservamos el derecho de cobrar una tarifa de cancelación tardía de 20€ para las citas canceladas a corto plazo (es decir, el mismo día) o el precio completo (35€) por no asistir.</p></div>
	<div class="subtitel-yourvisit"><h2><b>¿Conócenos?</b></h2></div>
	<div class="inleiding-yourvisit"><p>Si quieres saber más sobre su (primera) consulta, <a href="http://www.quiropracticopromover.es/comotrabajamos/">cómo podemos ayudarle</a> o si tiene alguna otra pregunta, <a href="http://www.quiropracticopromover.es/contacto/">contáctanos</a>.</p></div>
	<div class="taal-yourvisit"><h4><nobr><a href="http://www.quiropracticopromover.es/consulta/">Hablamos Español <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839961_flag-spain.png" alt="Espanol" height="20" width="20"></div></a></nobr> <nobr><a href="http://www.quiropracticopromover.es/en/your-visit/">We Speak English <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839982_flag-united-kingdom.png" alt="English" height="20" width="20"></div></nobr></a> <a href="http://www.quiropracticopromover.es/nl/bezoek/"><nobr> Wij Spreken Nederlands <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839997_flag-the-netherlands.png" alt="Nederlands" height="20" width="20"></div></nobr></a></h4></div>
</div>
</div>

<?php endwhile;

else : 
echo '<p>No content found</p>';

endif;

get_footer();

?>