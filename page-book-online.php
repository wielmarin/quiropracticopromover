<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<!-- banner-image -->

	<div class="bannersubpage">
			<div class="banner-titelsubpage"><h1>Book online</h1></div> 
	</div>

<div class="container-subpage-background">
	<div class="container-subpagebookonline">	
			<div class="titel-bookonline"><h1><b>Book your appointment online</b></h1></div>
			<div class="inleiding-boekonline">
			<p>You can easily book your first and subsequent visits directly online at Chiropractic Promover. This is currently only available in Spanish. If you prefer to make an appointment via phone, email or the contact form, <a href="http://www.quiropracticopromover.es/en/contact/">see our contact information.</p></a>
			</div>
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