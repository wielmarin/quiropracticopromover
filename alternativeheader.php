<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>> 

<div class="container">

	<!-- site-header -->
<header class="site-header">
		
	<div class="logo">
	<a href="<?php echo home_url(); ?>"><img src="wp-content/themes/MCC FM/images/LogoWit200.png" alt=""></a>
	</div>
	<br>
	<!-- navigation -->
		<div class="frontnav">
			<ul>
				<li><a class="home" href="<?php echo home_url(); ?>">Home</a></li>
				<li><a class="overmij" href="<?php echo home_url(); ?>/over-mij/">Over mij</a></li>
				<li><a class="oplossingen" href="<?php echo home_url(); ?>/wat-ik-doe/">Oplossingen</a></li>
				<li><a class="portfolio" href="<?php echo home_url(); ?>/portfolio">Portfolio</a></li>
				<li><a class="contact" href="<?php echo home_url(); ?>/contact">Contact</a></li>
		</nav>	
</header>
<!-- /site-header -->