<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<div class="bannersubpage">
			<div class="banner-titelsubpage"><h1>About us</h1></div> 
	</div>
	
<div class="container-subpage-background">
	<div class="container-subpage">
		<div class="tekst-subpage">
		<?php the_content(); ?>
		</div>	
	</div>
</div>	

<?php endwhile;

else : 
echo '<p>No content found</p>';

endif;

get_footer();

?>