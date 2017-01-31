<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php wp_title(); ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Humans.txt -->
  <link type="text/plain" rel="author" href="/humans.txt" />


  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/new-ocean/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/new-ocean/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/new-ocean/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/new-ocean/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/new-ocean/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/new-ocean/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/new-ocean/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/new-ocean/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/new-ocean/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/wp-content/themes/new-ocean/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/new-ocean/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/wp-content/themes/new-ocean/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/new-ocean/favicon/favicon-16x16.png">
  <link rel="manifest" href="/wp-content/themes/new-ocean/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <script type='text/javascript'>
  (function (d, t) {
  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
  bh.type = 'text/javascript';
  bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=td3bs6on1d1ifxeshq20fg';
  s.parentNode.insertBefore(bh, s);
  })(document, 'script');
  </script>


  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


  <nav class="js-nav">

    <div class="grid-middle">

      <!-- hamburger -->
      <button class="hamburger hamburger--collapse" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>


      <div class="col-6">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/_img/new_ocean.png" alt="logo"></a>
      </div>

      <div class="col-6">
        <!-- <ul>
          <li><a href="/">Why New Ocean?</a></li>
          <li><a href="/">Get In Touch</a></li>
          <li><a href="/">Blog</a></li>
        </ul> -->

        <?php wp_nav_menu(array(
            'theme_location' => 'header_menu',
            'container' => false,
            'items_wrap' => '<ul id="%1$s" class="nav-items">%3$s</ul>',
            'fallback_cb' => false
        )); ?>
      </div>

    </div>

  </nav>
