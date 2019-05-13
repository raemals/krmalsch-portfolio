<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

 ?><!DOCTYPE html>
 <html <?php language_attributes(); ?>>
 <head>
 <!-- Google Tag Manager -->
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
 new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
 j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
 })(window,document,'script','dataLayer','GTM-P2JJ6Z');</script>
 <!-- End Google Tag Manager -->
 <meta charset="<?php bloginfo( 'charset' ); ?>">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>

 </head>
<div id="top1"></div>
 <body <?php body_class(); ?>>
 <!-- Google Tag Manager (noscript) -->
 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2JJ6Z"
 height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
 <!-- End Google Tag Manager (noscript) -->


 <header id="header" class="header">
        <div class="header-wrap plr30">
            <div class="theta-logo">
                <div class="theta-logo-text">
                    <span class="blog-name">KM</span>
                </div>
            </div>

            <nav id="theta-menu" class="theta-menu">
                <div class="menu-icon" style="display: none;"><i class="icon-menu" style="display: block;"></i><i class="icon-close" style="display: none;"></i></div>
                <!-- Mobile button -->
                
                <ul class="menu">
                    <span>
                    <li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4 current_page_item menu-item-5" style="height: 50px;"><a href="">Home</a></li>
                    </span> 
                    
                    <span class="fullpage-nav">
					<li data-menuanchor="blog" style="height: 50px;"><a href="#blog">Blog</a></li><li data-menuanchor="testimonials" style="height: 50px;"><a href="#testimonials">Testimonials</a></li><li data-menuanchor="pricing" style="height: 50px;"><a href="#pricing">Pricing</a></li><li data-menuanchor="contact" style="height: 50px;"><a href="#contact">Contact</a></li>          
					</span>     
                </ul>
                
                <ul class="menu-mobile" style="display: none;">
                <span id="theta-mobile-menu" class="theta-mobile-menu">
                    <li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4 current_page_item menu-item-5"><a href="https://www.coothemes.com/demos/theta/">Home</a></li>
                    </span><span class="theta-mobile-menu" id="theta-mobile-menu">
                    
					<li data-menuanchor="blog"><a href="#blog">Blog</a></li><li data-menuanchor="testimonials"><a href="#testimonials">Testimonials</a></li><li data-menuanchor="pricing"><a href="#pricing">Pricing</a></li><li data-menuanchor="contact"><a href="#contact">Contact</a></li>  
				</span></ul>               
                    
            </nav>

        </div><!--div class="header-wrap"-->
  
	</header>
