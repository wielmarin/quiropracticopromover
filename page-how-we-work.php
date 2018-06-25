<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<!-- banner-image -->
	<div class="bannersubpage">
		<div class="banner-titelsubpage"><h1>How we work</h1></div> 
	</div>
	
<!-- column-container -->
<div class="container-subpage-background">
	<div class="container-subpage">
		<div class="tekst-subpage">
		<?php the_content(); ?>
	</div>	
		<div class="subtitel-howwork"><h1><b>Techniques Chiropractic Promover</b></h1></div>
		<div class="inleiding-howwork"><p>We help you to achieve the level of function you need through careful questioning, observation and technology. With the combination of education and more then 10 years of experience in function of the human body we analyse how your body is working and help you to reach optimal function.<br>We use a variety of evidence-based techniques. These include:</p></div>
			<div class="flex-containerhowwework">
			<div class="flex-item1howwework">
			<div class="beeldflexhowwework"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/spine-icon-1-e1489759098582.png" alt="Joint manipulation" height="50" width="50"></div>
			<div class="titel-flex-container">Joint manipulation</div><div class="tekst">A small, quick movement of a joint to promote mobility. Traditionally used by chiropractors.</div>
			</div>
			<div class="flex-item2howwework">
			<div class="beeldflexhowwework"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/Trigger-point-e1489759621282.png" alt="Trigger-point therapy" height="50" width="50"></div>
			<div class="titel-flex-container">Trigger-point therapy</div><div class="tekst">The specific application of pressure to promote relaxation of tightend muscles.</div>
			</div>
			<div class="flex-item3howwework">
			<div class="beeldflexhowwework"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/Movement-e1489761369427.png" alt="Low intensity excercises" height="50" width="45"></div>         
			<div class="titel-flex-container">Low intensity postural exercises</div><div class="tekst">To promote good posture in daily life.</div>
			</div>
			<div class="flex-item4howwework">
			<div class="beeldflexhowwework"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/Movementintensive-e1489761860889.png" alt="High intensity exercices" height="50" width="45"></div>
			<div class="titel-flex-container">High-intensity exercises</div><div class="tekst">To promote neuroplasticity, the adaption of the nervous system for longer-term improvements.</div>
			</div>
			<div class="flex-item5howwework">
			<div class="beeldflexhowwework"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/chiropracticwit.png" alt="Vestibular rehabilitation" height="50" width="50"></div>
			<div class="titel-flex-container">Vestibular rehabilitation</div><div class="tekst">A retraining of the balance-sensitive nervous system to promote more accurate control of all body parts.</div>
			</div>
			<div class="flex-item6howwework">
			<div class="beeldflexhowwework"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/video-camera-e1489762660509.png" alt="Video analyses" height="50" width="50"></div>         
			<div class="titel-flex-container">Video analysis<br>(using Spark Motion)</div><div class="tekst">To identify and promote awareness of deficits in control of movement, and to precisely target care to the movements where it is needed.</div> 
			</div>
			<div class="flex-item7howwework">
			<div class="beeldflex7"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/Scales-2.png" alt="Balance testing" height="70" width="70"></div>         
			<div class="titel-flex-container7">Balance testing<br>(using Pondera)</div><div class="tekst">To assess stability and identify any possible imbalances.</div> 
			</div> 		
		</div>
		<div class="subtitel-howwork"><h2><b>Education</b></h2></div>
		<div class="inleiding-howwork"><p>Robert Correll, chiropractor at Chiropractic Promover graduated as a chiropractor from the Anglo-European College of Chiropractic in 2008. After he followed education about functional neurology and achieved a diploma from the American Chiropractic Neurology Board. In 2015 and 2016 In 2016 Robert achieved a certification Functional Neuro-Orthopedic Rehabilitation, enabling him to better assess movement. <a href="http://www.quiropracticopromover.es/en/about-us/">Read more about the expertise of Robert Correll</a></p></div> 
		<div class="subtitel-howwork"><h2><b>Learn more?</b></h2></div>
		<div class="inleiding-howwork"><p>Do you want to know more about how we work and how we can help you? <a href="http://www.quiropracticopromover.es/contact/">Contact us for more information</a></p></div>
	<div class="taal-yourvisit"><h4><nobr><a href="http://www.quiropracticopromover.es/comotrabajamos/">Hablamos Español <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839961_flag-spain.png" alt="Espanol" height="20" width="20"></div></a></nobr> <nobr><a href="http://www.quiropracticopromover.es/en/how-we-work/">We Speak English <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839982_flag-united-kingdom.png" alt="English" height="20" width="20"></div></nobr></a> <a href="http://www.quiropracticopromover.es/nl/hoewijwerken/"><nobr> Wij Spreken Nederlands <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839997_flag-the-netherlands.png" alt="Nederlands" height="20" width="20"></div></nobr></a></h4></div>
	</div>

</div>	






<?php endwhile;

else : 
echo '<p>No content found</p>';

endif;

get_footer();

?>