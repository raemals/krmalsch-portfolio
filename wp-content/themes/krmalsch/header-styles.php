<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package krmalsch
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,600|Roboto:100,300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<?php wp_head(); ?>
</head>

<div id="smoothup"></div>
 <body <?php body_class(); ?>>
 <!-- Google Tag Manager (noscript) -->
 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2JJ6Z"
 height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
 <!-- End Google Tag Manager (noscript) -->

<header id="masthead" class="site-header" role="banner">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
            <a class="navbar-brand">KM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbar-custom" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#webdev">UX/Web Development</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#emailcreative">Email Creative</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sitecreative">Site Creative</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
 </header><!-- #masthead -->

	<div id="content" class="site-content">
