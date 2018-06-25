<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<!-- banner-image -->

	<div class="bannersubpage">
			<div class="banner-titelsubpage"><h1>Para quién?</h1></div> 
	</div>
	
<!-- column-container -->

<div class="container-subpage-background">
	<div class="flex-containeryourvisit">
		<div class="hoofdtitel-yourvisit"><h1><b>Para quién es la Quiropráctica?</b></h1></div>
			<div class="inleiding-yourvisit"><p>Los millones de pacientes que acuden cada día en el mundo a la consulta de su quiropráctico representan un amplio abanico de personas y de casos. En España, donde el desarrollo de la profesión es todavía relativamente reciente, la mayoría de los nuevos usuarios de la quiropráctica se presentan por primera vez motivados por un problema de salud concreto y que no encontró solución con otros profesionales sanitarios, en general por problemas de espalda.
			</p></div>
		<div class="subtitel-yourvisit"><h2><b>Quiropráctica para todos</b></h2></div>
			<div class="inleiding-yourvisit"><p>Quiropráctica es para los deportistas, los niños, las mujeres embarazadas, los trabajadores, los mayores…. Simplemente, para todos!
			<br><br>
			Tambien si tiene degeneracion ó hernia, podría beneficiarse de una consulta.
			</p></div>
			<div class="container-subpage-background">
				<div class="container-blog">
					<div class="flex-blog">
						<div class="image-flex-blog1"></div>
						<div class="title-flex-blog">Los deportistas</div>
					</div>
					<div class="flex-blog">
						<div class="image-flex-blog2"></div>
						<div class="title-flex-blog">Los trabajadores</div>
					</div>
					<div class="flex-blog">
						<div class="image-flex-blog2"></div>
						<div class="title-flex-blog">Las mujeres embarazadas</div>
					</div>
					<div class="flex-blog">
						<div class="image-flex-blog2"></div>
						<div class="title-flex-blog">La tercera edad</div>
					</div>
				</div>
			</div>
<div class="subtitel-yourvisit"><h2><b>¿Conócenos?</b></h2></div>
	<div class="inleiding-yourvisit"><p>Si quieres saber más sobre Quiropráctica, <a href="http://www.quiropracticopromover.es/comotrabajamos/">cómo podemos ayudarle</a> o si tiene alguna otra pregunta, <a href="http://www.quiropracticopromover.es/contacto/">contáctanos</a>.</p></div>
	<div class="taal-yourvisit"><h4><nobr><a href="http://www.quiropracticopromover.es/consulta/">Hablamos Español <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839961_flag-spain.png" alt="Espanol" height="20" width="20"></div></a></nobr> <nobr><a href="http://www.quiropracticopromover.es/en/your-visit/">We Speak English <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839982_flag-united-kingdom.png" alt="English" height="20" width="20"></div></nobr></a> <a href="http://www.quiropracticopromover.es/nl/bezoek/"><nobr> Wij Spreken Nederlands <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839997_flag-the-netherlands.png" alt="Nederlands" height="20" width="20"></div></nobr></a></h4></div>
</div>
</div>

<?php endwhile;

else : 
echo '<p>No content found</p>';

endif;

get_footer();

?>