<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<!-- banner-image -->

	<div class="bannersubpage">
			<div class="banner-titelsubpage"><h1>Pide cita en línea</h1></div> 
	</div>
<div class="container-subpage-background">
	<div class="container-subpagebookonline">	
	
		<div class="titel-bookonline"><h1><b>Pide una cita en línea</b></h1></div>
		<script src="//simplybook.it/v2/widget/widget.js"></script>
		<script>var widget = new SimplybookWidget({"widget_type":"iframe","url":"https:\/\/promover.simplybook.it","theme":"default","theme_settings":{"sb_base_color":"#349e64","booking_nav_bg_color":"#d1e9c6","body_bg_color":"#f7f7f7","dark_font_color":"#494949","light_font_color":"#ffffff","btn_color_1":"#2e8c57","sb_company_label_color":"#ffffff","sb_busy":"#dad2ce","sb_available":"#2e8c57"},"timeline":"modern_week","datepicker":"top_calendar","is_rtl":false,"app_config":{"predefined":[]}});</script>
	</div>
</div>

<?php endwhile;

else : 
echo '<p>No content found</p>';

endif;

get_footer();

?>