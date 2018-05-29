<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage creotopi
 * @since creotopi
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <meta name="author" content="Nowita">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
  <!-- mainstyle -->  
<meta name="description" content="...">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />
<title>Nowita Interiors.com</title>

<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/materialize.css"  media="screen,projection"/>
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/main.css"  media="screen,projection"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/responsive.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">

</head>
<body>

 <ul id="slide-out" class="side-nav">
    <li>
        <div class="userView">
          <div class="background">
            <img src="<?php bloginfo('template_url'); ?>/images/menubg.jpg">
          </div>
          <a href="#!user"><img src="<?php bloginfo('template_url'); ?>/images/logo.svg" class="logo-small"></a>
          <a href="#!name"><span class="white-text name">Nowita Interiors</span></a>
          <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div>
    </li>
       
    <li><a class="subheader">Social Media</a></li>
    <li><a class="waves-effect waves-orange" href="#creatives"><span class="zmdi zmdi-facebook"></span>Facebook</a></li>
    <li><a class="waves-effect waves-orange" href="#!"><span class="zmdi zmdi-linkedin"></span>Linkedin</a></li>
    <li><a class="waves-effect waves-orange" href="#!"><span class="zmdi zmdi-behance"></span>Behance</a></li>
    <li><a class="waves-effect waves-orange" href="#!"><span class="zmdi zmdi-google-plus"></span>Goole+</a></li>     
  </ul>
