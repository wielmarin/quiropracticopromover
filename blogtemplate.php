<?php

/*
Template Name: Blog
*/

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<!-- banner-image -->
<?php  $post_thumbnail_id = get_post_thumbnail_id();
	$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
	<div class="bannerblog" style="background-image:url(<?php echo $post_thumbnail_url; ?>)">
	</div>


<div class="container-subpage-background">
	<div class="blogcontainertemplate">
		<div class="blogarticle">
			<h1><?php the_title(); ?></h1>
			<p class="post-info"><?php the_time('d/m/y'); ?> | por <a href="http://www.quiropracticopromover.es/quienes-somos/"><?php the_author(); ?></a></p>
			<?php the_content(); ?>
		</div>
		
		<div class="sidebarblog">
			<div class="sidebarblogbox">
			<h4><b>Acerca Robert Correll</b></h4>
			<img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/05/Beeld-Robert-klein-e1496140812352.jpg" alt="Robert Correll, Quiropractico" height="100%" width="100%">
			<p>Robert Correll es Quiropráctico en Quiropráctico Promover en San Vicente del Raspeig.</p>
			<a href="http://www.quiropracticopromover.es/quienes-somos/">Leer mas</a>
			</div>
			<div class="sidebarblogbox">
			<h4><b>Descuentos Quiropráctico Promover a estudiantes de la Universidad de Alicante</b></h4>
			<div class="beeldblog"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/05/YC.png" alt="10 euro por consulta" height="150" width="150"></div>
			<a href="http://www.quiropracticopromover.es/citaonline/">Pide una cita en línea</a><br>(Consulta inicial gratuita)
			</div>
			<div class="sidebarblogboxsocial">
			<div class="fb-page" data-href="https://www.facebook.com/quiropracticopromover/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/quiropracticopromover/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/quiropracticopromover/">Quiropractico Promover - San Vicente del Raspeig</a></blockquote></div>
			</div>
		</div>
	</div>
</div>

<div class="backgrounddeelknop">
	<div class="deelknop"><?php echo do_shortcode("[mashshare]"); ?></div>
</div>


<?php endwhile;

else : 
echo '<p>No content found</p>';

endif;

get_footer();

?>
