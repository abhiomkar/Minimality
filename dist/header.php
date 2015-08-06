<?php
      /**
       * Minimality template for displaying the header
       *
       * @package WordPress
       * @subpackage Minimality
       * @since Minimality 1.0
       */
      ?>

      <!DOCTYPE html>
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php wp_title( ); ?></title>
        <link rel="shortcut icon" href="{% static '/images/favicon.ico' %}">
        <link rel="stylesheet" href="{% static '/css/style.css' %}">
        <link rel="alternate" type="application/rss+xml" title="My Blog Feed" href="/rss.xml">
        <?php wp_head(); ?>
      </head>

      <body <?php body_class(); ?>>
        <section id="wrapper">
          <header id="header">
            <a id="title" href="<?php echo home_url(); ?>" class="index"><?php bloginfo( 'name' ); ?></a>
            <div class="blog-description hidden"><?php bloginfo( 'description' ); ?></div>
          </header>

          <div class="menu hide"><?php

            $nav_menu = wp_nav_menu(
              array(
                'container' => 'nav',
                'container_class' => 'main-menu',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                'theme_location' => 'main-menu',
                'fallback_cb' => '__return_false',
              )
            ); ?>

          </div>
