<!DOCTYPE html>

<div class="taalheader"><html <?php language_attributes(); ?>></div>

	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	</head>

<body <?php body_class(); ?>>
 <div id="fb-root"></div>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=444632172555779";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>

<div class="container">

	<!-- site-header -->
<header class="site-header">
	<!-- Top line -->
	<div id="headtop">
		<div id="headtopcont">
		<div id="headphoneicon">
			<img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/belicoonwit.png" height="17" width="17" alt="Telefoonnummer">
		</div>
			<div id="headphone">
				<p>+34 865 510 203</p>
			</div>
			<div id="headcita">
				<a href="http://www.quiropracticopromover.es/citaonline/">Pide cita online</a>
			</div>
			<!-- Language Flags -->
			<div id="prehead"><?php
			$args = array(
				'theme_location' => 'prehead'
				);
			?>
			<?php wp_nav_menu( $args ); ?>	</div>
				
			<!-- End Flags -->	
		</div>	
	</div>
	
	<!-- End Top line -->
	
	<!-- second line -->
<div id="secondline">
	<div class="logo">
		<a href="<?php echo home_url(); ?>"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/04/QUIROPRACTICO-PROMOVER-1.jpg" class="logo" height="56" width="200" alt="Logo" /></a>
	</div>
		
	<div class="logomobile">
		<a href="<?php echo home_url(); ?>"><img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/04/QUIROPRACTICO-PROMOVER-1.jpg" height="42" width="150" alt="Logo" /></a>
	</div>
		
		<!-- navigation -->
	<!--- Mobile Menu Open/Close -->
	<span id="menuopen"><i id="open" class="fas fa-bars"></i><p>MENU</p></span>
	<i id="close" class="far fa-window-close"></i>		
	
	<div class="frontnav">

				<?php
					$args = array(
					'theme_location' => 'primary'
					);
				?>
				<?php wp_nav_menu( $args ); ?>	
	</div>	
</div>
<!-- End Second line -->

<!---- Side Contact ---->
<div class="contact-onscroll-open"> 
		<div class="contact-onscroll-open-tekst1">
			<p>Contact</p>
		</div>
		<div class="contact-onscroll-open-tekst2">
			<p>Más información o pide una cita</p><p id="closecontact"><i class="far fa-window-close"></i></p><br><p><i class="fas fa-phone"></i><a href="callto:0034865510203" target="_blank">865 510 203</a><br>
			<i class="fab fa-whatsapp fa-lg"></i><p>625 766 814</p><br>
			<p><i class="far fa-envelope"></i><a href="mailto:info@quiropracticopromover.es" target="_blank">info@quiropracticopromover.es</a></p>
			<a href="https://www.facebook.com/quiropracticopromover" target="_blank"><i class="fab fa-facebook-f fa-lg contactfbicon"></i><p>Síguenos en Facebook</p></a>
		</div>
	</div>

</header>
<!-- /site-header -->