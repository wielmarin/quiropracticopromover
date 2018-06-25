<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<!-- banner-image -->

	<div class="bannersubpage">
			<div class="banner-titelsubpage"><h1>Contact</h1></div> 
	</div>
	
<script type="text/javascript" src="//promover.simplybook.it/iframe/pm_loader_v2.php?width=1400&url=//promover.simplybook.it&theme=bootstrap__square_rainbow__colored_light&layout=bootstrap__square_rainbow&timeline=flexible_week&mode=auto&mobile_redirect=0"></script>

<?php endwhile;

else : 
echo '<p>No content found</p>';

endif;

get_footer();

?>