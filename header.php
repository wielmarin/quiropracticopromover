<!DOCTYPE html>

<div class="taalheader"><html <?php language_attributes(); ?>></div>

	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<?php wp_head(); ?>
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
				<!-- Trial removal <a href="http://www.quiropracticopromover.es/nl/" id="headnl">
				<img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839997_flag-the-netherlands.png" alt="Nederlands" height="20" width="20">
				</a>
				<a href="http://www.quiropracticopromover.es/en/" id="headeng">
				<img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839982_flag-united-kingdom.png" alt="English" height="20" width="20">
				</a> 
				<a href="http://www.quiropracticopromover.es/" id="headesp">
				<img src="http://www.quiropracticopromover.es/wp-content/uploads/2017/03/1488839961_flag-spain.png" alt="Espanol" height="20" width="20">
				</a> -->
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

</header>
<!-- /site-header -->