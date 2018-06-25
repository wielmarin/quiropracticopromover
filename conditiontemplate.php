<?php
/* Template Name: Conditions Page
Template Post Type: page
*/

get_header();
?>



	<?php
	if (have_posts()) : 
	while (have_posts()) : the_post(); ?>

	<!-- banner-image -->
	<?php  $post_thumbnail_id = get_post_thumbnail_id();
			$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
	<div class="bannersubpagedolor" style="background-image:url(<?php echo $post_thumbnail_url; ?>)">
		<div class="banner-titelsubpage"><h1><?php the_title(); ?></h1></div> 
	</div>

	<div class="container-subpage-background">
		
			<div class="container-subpage-dolor">
				<?php the_content(); ?>
			<?php get_template_part(languagehome); ?>
			</div>
			
			<div id="reviewsidebar">
				<?php dynamic_sidebar('pages-sidebar'); ?>
			</div>
		
	</div>

	<?php endwhile;

	else : 
	echo '<p>No content found</p>';

	endif;
	?>


<?php
get_footer();

?>