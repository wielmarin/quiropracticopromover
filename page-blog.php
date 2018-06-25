<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<!-- banner-image -->
	<div class="bannersubpage">
		<div class="banner-titelsubpage"><h1>Blog</h1></div> 
	</div>

<div class="container-subpage-background">
	<div class="container-blog">
			<a href="http://www.quiropracticopromover.es/evita-dolor-espalda-viaje-coche/"><div class="flex-blog">
				<div class="image-flex-blog1"></div>
				<div class="date-flex-blog">01/08/2017&nbsp;</div>
				<div class="title-flex-blog">Evita el dolor de espalda cuando viajas en coche</div>
			</div></a>
			<a href="http://www.quiropracticopromover.es/consejos-examenes-universidadalicante/"><div class="flex-blog">
				<div class="image-flex-blog2"></div>
				<div class="date-flex-blog">15/05/2017&nbsp;</div>
				<div class="title-flex-blog">5 consejos para evitar dolor de espalda en época de exámenes</div>
			</div></a>
	</div>
</div>



<?php endwhile;

else : 
echo '<p>No content found</p>';

endif;



get_footer();

?>