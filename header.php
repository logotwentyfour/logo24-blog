<!doctype html>

<!--[if lt IE 7]><html dir="ltr" lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html dir="ltr" lang="en" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html dir="ltr" lang="en" class="no-js lt-ie9"><![endif]-->
<!--[if IE 9]><html dir="ltr" lang="en" class="no-js ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="en" class="no-js"><!--<![endif]-->

<head>
  <meta charset="utf-8">

  <title><?php wp_title(''); ?></title>

  <!-- Author information -->
  <meta name="author" content="Logo24.com" />
  <link type="text/plain" rel="author" href="/humans.txt" />
  
  <!-- Google Chrome Frame for IE -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <!-- mobile meta (hooray!) -->
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!-- For iPhone 4 -->
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/library/images/h/apple-touch-icon.png">
  <!-- For iPad 1-->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/library/images/m/apple-touch-icon.png">
  <!-- For the new iPad -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/library/images/h/apple-touch-icon-144x144-precomposed.png">
  <!-- For iPhone 3G, iPod Touch and Android -->
  <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory'); ?>/library/images/l/apple-touch-icon-precomposed.png">
  <!-- For Nokia -->
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/library/images/l/apple-touch-icon.png">
  <!-- For everything else -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <!-- wordpress head functions -->
  <?php wp_head(); ?>
  <!-- end of wordpress head -->
  
  <!--[if lte IE 6]>
  <link rel="stylesheet" href="http://universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
  <![endif]-->
  
  <script type="text/javascript" src="http://fast.fonts.com/jsapi/a89a5d37-d1f2-46aa-a4ec-8e5486461466.js"></script>

</head>

<body>
  
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->
  
  <div class="wrapper-navigation">
    <nav role="navigation">
      <a href="#menu-main" class="open-navigation" title="Open navigation"><i class="icon-reorder"></i></a>
      <?php bones_main_nav(); ?>
    </nav>
  </div>
  
  <div class="wrapper">
  
    <header role="banner">
      <hgroup>
        
        <h1>
          <a href="http://logo24.com" title="Return to the home page">
            Logo24
            <img src="<?php bloginfo('template_directory'); ?>/library/images/logo.png" alt="Logo24">
          </a>
        </h1>
        
        <h2 class="intro">
          <i><span>We are</span> <em>a small team</em> <i>of</i></i>
          <b>designers with big imaginations</b>
          <i><em>crafting beautiful</em> 
          <span>print</span> <em>work</em> <span>and awesome websites</span></i>
        </h2>
        
      </hgroup>
    </header>