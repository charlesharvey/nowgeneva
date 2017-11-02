<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

				<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/manifest.json">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#000000">
<meta name="apple-mobile-web-app-title" content="NOW Geneva">
<meta name="application-name" content="NOW Geneva">
<meta name="theme-color" content="#ffffff">


        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<script src="https://use.fontawesome.com/188c7a83eb.js"></script>

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
                                <li ><a target="_blank" class="icon_facebook" href="https://www.facebook.com/NowGeneva/">Facebook</a></li>
                                <li><a target="_blank" class="icon_pinterest" href="https://www.pinterest.ch/NowGeneva/">Pinterest</a></li>
                                <li><a target="_blank" class="icon_instagram" href="https://www.instagram.com/nowgeneva/">Instagram</a></li>
                                <li><a id="open_subscription" class="subscription"  href="#">Abonnez-vous</a></li>
                            </ul>
                            <!-- <form action="#"><input name="s" type="text" placeholder="search this site..."></form> -->
                        </div>
                    </div>
                </div>
            </header>

             <?php get_template_part('searchform'); ?>
             <?php get_template_part('nav'); ?>
             <?php get_template_part('signupform'); ?>
					 </a>
					 </div>
					 </div>

<div id="rest_of_site">
