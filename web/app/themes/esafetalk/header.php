<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <title>eSafeTalk: <?php echo get_the_title(); ?></title>
<!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<header>
    <div class="hotline-note">
        <p>Is anyone in immediate danger? Call <b><a href="tel:911">911</a></b> or <b><a href="tel:09178898927">0917 889 8927</a></b> for National Center for Mental Health Crisis Hotline.
            <a href="/hotlines">These</a> resources can provide immediate help.</p>
    </div>

    <div class="topbar container">
        <div class="topbar__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/logo-icon.png" alt="Logo Icon">
        </div>

        <div class="topbar__nav">
            <button class="button">Get Started</button>

            <nav>
                <a onclick="sidebarToggle()" class="nav__burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>

                <div id="nav__menu" class="nav__menu">
	                <div class="sidebar-nav">
		                <div class="sidebar-header">
					        <div class="topbar__logo">
					            <img src="<?php echo get_template_directory_uri(); ?>/public/images/icons/logo-icon.png" alt="Logo Icon">
					        </div>
					        <div class="close-sidebar" onclick="sidebarToggle()">
					        	<span class="material-icons">close</span>
					        </div>
		                </div>
	                    <menu>
	                        <li><a href="/">Home</a></li>
	                        <li><a href="/#howItWorks">How It Works</a></li>
	                        <li><a href="/#whyESafeTalk">Why eSafeTalk</a></li>
	                        <li><a href="/blogs">Blog</a></li>
	                        <li><a href="/join-our-team/">Join our team</a></li>
	                        <li><a href="/about-us">About</a></li>
	                        <li><a href="/faqs">FAQs</a></li>
	                        <li><a href="/#contactUs">Contact</a></li>
	                    </menu>
	
	                    <span class="border"></span>
	
	                    <div class="nav__agreements">
	                        <a href="">Terms & Conditions</a>
	                        <a href="">Privacy Policy</a>
	                    </div>
	                </div>
                </div>
            </nav>
        </div>
    </div>
</header>