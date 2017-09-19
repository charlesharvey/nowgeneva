<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>


	</head>
	<body <?php body_class(); ?>>




            <header class="header ">
                <div class="container">
                    <div id="top_nav">
                        <a class="logo" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                        <div id="social_and_search">
                            <ul class="social_nav">
                                <li><a class="icon_search" href="#">Chercher</a></li>
                                <li ><a class="icon_facebook" href="#">Facebook</a></li>
                                <li><a class="icon_pinterest" href="#">Pinterest</a></li>
                                <li><a class="icon_instagram" href="#">Instagram</a></li>
                                <li><a class="subscription"  href="#">Abonnez-vous</a></li>
                            </ul>
                            <!-- <form action="#"><input name="s" type="text" placeholder="search this site..."></form> -->
                        </div>
                    </div>
                </div>
            </header>


            <nav id="site_nav">
                <a href="#" id="open_nav">Menu</a>
                <div class="container">
                    <ul >
                         <?php chilly_nav('primary-navigation'); ?>
                    </ul>
                </div>

            </nav>
