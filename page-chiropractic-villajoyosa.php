<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); 

?>


<div class="bannersubpage" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
	<div class="banner-titelsubpage"><h1><?php the_title(); ?></h1></div> 
</div>

<div class="container-subpage-background">
	<div id="villajoyosa-content">
		<div id="villajoyosa-text">
			<?php the_content(); ?>
		</div>
		<div id="villajoyosa-times">
			<h3>Available:</h3>
			<p>Wednesday 14:00 - 19:00</p>
			<p>Only by appointment</p>
		</div>
		<div id="villajoyosa-contact">
			<h3>Appointments and questions:</h3>
				<div class="villajoyosa-contact-item">
					<div class="mailcontact"><div class="contact">
					<img src="/wp-content/uploads/2017/03/1485380578_Mail.png" height="25" width="25" alt="Email" /></div>&nbsp;info@quiropracticopromover.es</p>
					</div>
					<div class="contact">
					<img src="/wp-content/uploads/2017/03/1485380380_Call01.png" height="25" width="25 alt="Phone number" /></div>&nbsp;+34 865 510 203</p>
					<div class="contact">
					<img src="/wp-content/uploads/2017/03/Whatsapp.png" height="25" width="25 alt="Phone number whats app" /></div>&nbsp;+34 625 766 814</p>
				</div>
		</div>
	</div>		
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3121.8943049270074!2d-0.21564598421085984!3d38.513148479631724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd621a210144f9d7%3A0x7cab746b0fd803cc!2sVillajoyosa+Club+Tenis!5e0!3m2!1snl!2ses!4v1539336558351" width="100%" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	
	
</div>

<?php 
endwhile;

else : 
echo '<p>Page coming soon!</p>';

endif;

get_footer();
?>