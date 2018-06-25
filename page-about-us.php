<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<!-- banner-image -->
	<div class="bannersubpage">
			<div class="banner-titelsubpage"><h1>About us</h1></div> 
	</div>

	

<div class="container-subpage-background">
	<div class="container-subpageaboutus">

			<div class="flex-introductie">
				<div class="flex-photo">
					<div class="subtitelabout"><h1>Robert Correll<br></h1><h2>Chiropractic</h2></div>
					<div class="flex-photorobert"></div>
				</div>
				<div class="flex-aboutme"> 
					<p>I graduated as a chiropractor from the Anglo-European College of Chiropractic in 2008. I hold the title MChiro.<br><br>In 2014, I achieved a diploma from the American Chiropractic Neurology Board, following in excess of 600 hours of further education about the control of the body by the nervous system. Between August 2015 and September 2016 I achieved certification in <a href="http://fnor.net/" target="_blank">Functional Neuro-Orthopedic Rehabilitation</a> from the <a href="https://carrickinstitute.com/" target="_blank">Carrick Institute</a>, enabling me to better assess movement and utilise techniques to improve the function of the neuro-musculo-skeletal system.<br><br>After a first year working in Colchester, England, I moved to the Netherlands to work in Wijchen and Druten, where I enjoyed more than seven years from 2009 until 2016.<br><br>
					I am a member of the <a href="http://www.chiropractic-ecu.org/" target="_blank">European Chiropractors' Union (ECU)</a> and the <a href="http://quiropractica-aeq.com/index.php/quienes-somos" target="_blank">Asociación Española de Quiropráctica (AEQ)</a>.<br><br>
					</p>
				</div>
			</div>
			<div class="flex-introductie">
				<div class="flex-photo">
					<div class="subtitelabout"><h1>Marin Wiellersen<br></h1><h2>Practice manager</h2></div> 
					<div class="flex-photomarin"></div>
				</div>
				<div class="flex-aboutme">
					<p>I was born in Holland and I live in Alicante since 2016. I moved to start a chiropractic clinic with Robert (and for the sun and good Spanish food, obviously).
					<br><br>
					As practice manager I am responsible for the daily organization of the practice, like planning, administration and communication. Besides that, I have a lot of pleasure in contact with our patients. It's important to me to help the patient as well as possible before, during and after the consult and to help them to feel at home.
					<br><br>
					I got to know Chiropractic via Robert Correll. I find it great to see that a patient can feel better immediately after a consult. And I find it impressive how Robert works. He stands for quality and really takes his time with every patient.
					<br><br>
					I look forward to see you in our clinic.
					</p>
				</div>
			</div>
			<div class="flex-introductiemeerweten">
				<div class="subtitel-pageaboutme"><h2><b>Learn more?</b></h2></div> 
				<div class="inleiding-pageaboutme"><p>If you want to know more about <a href="http://www.quiropracticopromover.es/how-we-work/">how we work and how we can help you</a>, if you need more information about <a href="http://www.quiropracticopromover.es/your-visit/">your (first) visit</a>, or if you have any other questions, <a href="http://www.quiropracticopromover.es/contact/">contact us.</a></p></div>
				<div class="taal-aboutme"><h4><nobr><a href="http://www.quiropracticopromover.es/quienes-somos/">Hablamos Español <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839961_flag-spain.png" alt="Espanol" height="20" width="20"></div></a></nobr> <nobr><a href="http://www.quiropracticopromover.es/en/about-us/">We Speak English <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839982_flag-united-kingdom.png" alt="English" height="20" width="20"></div></nobr></a> <a href="http://www.quiropracticopromover.es/nl/overons/"><nobr> Wij Spreken Nederlands <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839997_flag-the-netherlands.png" alt="Nederlands" height="20" width="20"></div></nobr></a></h4></div>
			</div>
		</div>
</div>



<?php endwhile;

else : 
echo '<p>No content found</p>';

endif;



get_footer();

?>