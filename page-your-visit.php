<?php

get_header();

if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<!-- banner-image -->

	<div class="bannersubpage">
			<div class="banner-titelsubpage"><h1>Your visit</h1></div> 
	</div>
	
<!-- column-container -->

<div class="container-subpage-background">
<div class="flex-containeryourvisit">
<div class="hoofdtitel-yourvisit"><h1><b>About your (first) visit</b></h1></div>
	<div class="inleiding-yourvisit"><p>Do you want to know what you can expect about your first, second and subsequent visits at Chiropractic Promover? Read more about the consults, tarrifs and duration of the visits.<p></div>
<div class="flex-yourvisit">
	<div class="flex-item1yourvisit">
		<div class="description-yourvisit"><H2>Free Screening </H2></div>
		<div class="text-itemyourvisit">The optional free screening includes: <br><br>
		 <ul>
			<li>Completing an intake form</li>
			<li>Discussion of your complaints</li>
			<li>Some initial tests</li>
			<li>Recommendations</li>
		</ul>
		*No treatment included.<br><br>
		</div>
		<div class="tijdyourvisit"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/clockwhite.png" height="25" width="25" alt="Time" /></div>&nbsp;&nbsp;15- 30 minutes<br>
	<a class="buttonyourvisit" href="http://www.quiropracticopromover.es/en/contact/">Make appointment</a>
	</div>
	<div class="flex-item2yourvisit" onclick="">
		<div class="description-yourvisit"><H2>First visit - €35</H2></div>
		<div class="text-itemyourvisit">The first visit includes: 
		<ul>
			<li>Discussion of your complaints and medical history</li>
			<li>Complete physical testing</li>
			<li>Explanation of findings and treatment plan</li>
			<li>If appropriate, treatment will start</li>
		</ul>
		</div>
		<div class="tijdyourvisit"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/clockwhite.png" height="25" width="25" alt="Time" /></div>&nbsp;&nbsp;45 - 60 minutes<br>
	<a class="buttonyourvisit" href="http://www.quiropracticopromover.es/en/contact/">Make appointment</a>
	</div>
	<div class="flex-item3yourvisit" onclick="">
		<div class="description-yourvisit"><H2>Subsequent visits - €35</H2></div>
		<div class="text-itemyourvisit">Subsequent visits include:
		<ul>
			<li>Continuation of the plan of <br>care</li>
			<li>Constant reassessment</li>
			<li>Adjustments as necessary</li>
		</ul><br><br><br>
	</div>
	<div class="tijdyourvisit"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/clockwhite.png" height="25" width="25" alt="Time" /></div>&nbsp;&nbsp;10 - 30 minutes
	<a class="buttonyourvisit" href="http://www.quiropracticopromover.es/en/contact/">Make appointment</a>
	</div>
</div>
<div class="subtitel-yourvisit"><h2><b>Discount</b></h2></div>
	<div class="inleiding-yourvisit"><p>We offer 4 sessions for 100€ when paid for in advance.</p></div>
	<div class="subtitel-yourvisit"><h2><b>Between visits</b></h2></div>
	<div class="inleiding-yourvisit"><p>In almost all cases, the chiropractor will give you exercises to do at home. The outcome of your treatment depends on these. Don't hesitate to contact us if you have any doubts about your prescribed exercises.</p></div>
	<div class="subtitel-yourvisit"><h2><b>Cancellations</b></h2></div>
	<div class="inleiding-yourvisit"><p>If you are unable to attend your appointment, please <a href="http://www.quiropracticopromover.es/contact/">contact us</a> as soon as possible. We reserve the right to charge a late cancellation fee of 20&euro; for appointments cancelled at short notice (i.e. the same day) or full price (35&euro;) for non-attendance.</p></div>
<div class="subtitel-yourvisit"><h2><b>Learn more?</b></h2></div>
	<div class="inleiding-yourvisit"><p>If you want to know more about your (first) visit, <a href="http://www.quiropracticopromover.es/how-we-work/">how we can help you</a> or if you have any other questions, <a href="http://www.quiropracticopromover.es/contact/">contact us.</p></a></div>
	<div class="subtitel-yourvisit"><h2><b>Treatment next to Bonalba Golf Course</b></h2></div>
	<div class="inleiding-yourvisit"><p>We are now offering treatment at <a href="http://spanishsportsmassage.com/">Spanish Sports Massage</a>, situated next to Bonalba Golf Course. Please <a href="http://www.quiropracticopromover.es/contact/">contact us</a> for details.</p></div>
	<div class="taal-yourvisit"><h4><nobr><a href="http://www.quiropracticopromover.es/consulta/">Hablamos Español <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839961_flag-spain.png" alt="Espanol" height="20" width="20"></div></a></nobr> <nobr><a href="http://www.quiropracticopromover.es/en/your-visit/">We Speak English <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839982_flag-united-kingdom.png" alt="English" height="20" width="20"></div></nobr></a> <a href="http://www.quiropracticopromover.es/nl/bezoek/"><nobr> Wij Spreken Nederlands <div class="flag"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839997_flag-the-netherlands.png" alt="Nederlands" height="20" width="20"></div></nobr></a></h4></div>
</div>
</div>

<?php endwhile;

else : 
echo '<p>No content found</p>';

endif;

get_footer();

?>