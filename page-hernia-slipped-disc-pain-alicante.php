<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<!-- banner-image -->
<div class="bannersubpagedolor herniapageimage">
	<div class="banner-titelsubpage"><h1>Hernia or Slipped Disc</h1></div> 
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



get_footer();

?>