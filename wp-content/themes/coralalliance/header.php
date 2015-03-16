<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png" type="image/png">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/site.css">
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//use.typekit.net/mgc2mmo.js"></script>
    <script>
        try {
        Typekit.load();
        } catch (e) {}
    </script>

    <!-- Facebook Meta -->
    <meta property="og:image" content="<?php the_preview_image(); ?>">
    <meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>">
    <meta property="og:description" content="<?php the_description(); ?>">
    <meta property="og:url" content="<?php the_permalink(); ?>">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:type" content="blog"/>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="header-bg">
  <div class="container">
    <header>
      <img src="<?php bloginfo('template_directory'); ?>/assets/coral-alliance-logo.png">
      <hr>
      <h1>The Great Barrier Reef<br> is under threat</h1>
      <p>Help us save this wonder of the world.</p>
      <a href="#petition"><button class="primary">Sign the petition</button></a>
      <p> or </p>
      <p>
        <a href="#more">Find out more<br>
          <img src="<?php bloginfo('template_directory'); ?>/assets/arrow-down-gray.png"></a>
      </p>
      <hr>

    </header>
  </div>
</div>
