<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<!-- banner-image -->

	<div class="bannersubpage">
			<div class="banner-titelsubpage"><h1>Contact</h1></div> 
	</div>
	
<!-- column-container -->

<div class="container-subpage-background">
	<div class="container-subpage">
		<div class="reference-container-contact">
		<div class="subtitel-contact"><h1><b>Book your appointment online</b></h1></div> 
			<div class="flex-itemcontact1">
				<div class="titel-korting"><h1>First visit - free</h1></div>
				<div class="text-itemcontact1">Your first visit (screening) at Chiropractic Promover is free. This includes:
					<ul>
						<li>Completing an intake form</li>
						<li>Discussion of your complaints</li>
						<li>Some initial tests</li>
					</ul>
					*No treatment included. By acute cases contact us first.
				</div>
			</div>
			<div class="flex-itemcontact2">
			<div class="bookonlinecontact">
			<div class="description-flex-containercontactpage">&nbsp;Book here directly your appointment online</div></div>
			</div>
		</div>
		
	<div class="reference-container-color-contactpage">
		<div class="reference-container-contactpage">
			<div class="subtitel-contactpage"><h2>Contact us</h2></div>
			<div class="inleiding-yourvisit">If you have any questions or if you want to make an appointment? Please contact us. You can also fill in the contact form and we will contact you as soon as possible.</div>
				<div class="flex-itemcontactpage">
					<div class="mailcontact"><div class="contact">
					<img src="http://localhost/promover/wp-content/uploads/2017/03/1485380578_Mail.png" height="25" width="25" alt="Email" /></div>&nbsp;info@quiropracticopromover.es</p>
					</div>
					<div class="contact">
					<img src="http://localhost/promover/wp-content/uploads/2017/03/1485380380_Call01.png" height="25" width="25 alt="Phone number" /></div>&nbsp;+34 865 510 203</p>
					<div class="contact">
					<img src="http://localhost/promover/wp-content/uploads/2017/03/Whatsapp.png" height="25" width="25 alt="Phone number whats app" /></div>&nbsp;+34 625 766 814</p>
					<div class="contact"><img src="http://localhost/promover/wp-content/uploads/2017/03/icoonlocatie.png" height="25" width="25 alt="Location" /></div>&nbsp;Calle Cervantes 25<br>Entreplanta, Oficina 2<br>03690, San Vicente del Raspeig</p>	
					<b>Available from:</b><br> Monday to Friday from 09.30 - 20.00.
					<br><br>
				</div>
			<div class="formulier"<?php echo do_shortcode('[contact-form-7 id="52" title="Contact form 1"]'); ?></div>
		</div>
		
		<div class="subtitel-contactpage"><h2>Routing</h2></div>
			<div class="subsubtitel-contactpage"><h3><b>Tram</b></h3></div>
				<div class="inleiding-yourvisit">You can reach Chiropractic Promover by tram line 2. You can take the stop 'Sant Vicent del Raspeig'. We are approximately ten minutes walk from that stop.   
				<br><br>Take the exit at the tram, if you stay before Centro de Salud de San Vicente Del Raspeig 2 turn right. Cross the street Calle Dr. Maranón towards Calle Alicante and continue down Calle Alicante until it changes to Av. Ancha de Castelar. Follow Av. Ancha de Castelar untill you see Calle Cervantes on the left side. Go left and you'll find the front door of our practice on the right side. <a href="http://www.tramalicante.es/page.php" target="_blank">You can find a timetable and more informatie about the tram here.</a> </div>
			<div class="subsubtitel-contactpage"><h3><b>Bus</b></h3></div>
				<div class="inleiding-yourvisit">Bus line 24 past our practice. The practice is located near to the stop 'Ancha de castelar 20'. We are approximately three minutes walk from the stop.   
				If you take the stop go to the right at Consum and follow Av. Ancha de Castelar untill you see Calle Cervantes on the left side. Go left and you'll find the front door of our practice on the right side. <a href="http://www.alicante.vectalia.es/linea/linea-24-alicantee-autobuses-universidad-de-alicante-san-vicente-del-raspeig/#linea=24" target="_blank">You can find a timetable and more informatie about the bus here.</a> </div>	
			<div class="subsubtitel-contactpage"><h3><b>Car & parking</b></h3></div>
				<div class="inleiding-yourvisit">You can easily reach the practice by car. San Vicente del Raspeig is close to Highway A-70 and A77. <a href="https://www.google.com/maps?ll=38.419783,-0.474376&z=12&t=m&hl=nl&gl=ES&mapclient=embed&daddr=Calle+Cervantes,+25+03690+San+Vicente+del+Raspeig+Alicante@38.3963946,-0.5221623" target="_blank">Plan here your route to Chiropractic Promover.</a>   
				<br><br>There is ample parking available. Free parking is available in Av. Ancha de Castelar and Calle Gral. Ibáñez. When there is no parking lot available, there is always space in <a href="https://www.google.com/maps/place/Parking+p%C3%BAblico+mercado+de+abastos/@38.3967865,-0.5242847,19.5z/am=t/data=!4m15!1m9!4m8!1m3!2m2!1d-0.5213129!2d38.397423!1m3!2m2!1d-0.5221623!2d38.3963946!3m4!1s0x0:0xc471fb1144a3be2c!8m2!3d38.3970098!4d-0.5243102?hl=nl" target="_blank">Parking público mercado de abastos</a></div> 
	
	</div>		
	

			
			</div>
		</div>	

	</div>
</div>



<?php endwhile;

else : 
echo '<p>No content found</p>';

endif;

get_footer();

?>