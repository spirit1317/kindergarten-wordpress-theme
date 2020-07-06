<!DOCTYPE html>
<html>
<head>
  <title><?php echo get_bloginfo('name');?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
  <?php wp_head();?>
</head>
<body>

<header>
  <a href="<?php echo get_bloginfo( 'wpurl' );?>">
    <svg viewBox="0 0 1200 100">
      <defs>
            <linearGradient id = "g1" x = "0%" y = "100%">
                <stop stop-color = "rgb(249, 51, 2)" offset = "0%">
                  <animate attributeName="offset" values="0%; 5%; 10%; 15%; 20%; 25%; 20%; 15%;10%; 5%; 0%" dur="3s" repeatCount="indefinite"></animate>
                </stop>
                <stop stop-color = "rgb(249, 197, 7)" offset = "33%">
                  <animate attributeName="offset" values="33%; 35%; 40%; 45%; 50%; 55%; 50%; 45%; 40%; 35%; 33%" dur="3s" repeatCount="indefinite"></animate>
                </stop>
                <stop stop-color = "rgb(14, 58, 249)" offset = "70%">
                  <animate attributeName="offset" values="70%; 75%; 80%; 85%; 90%; 95%; 90%; 85%; 80%; 75%; 70%" dur="3s" repeatCount="indefinite"></animate>
                </stop>
                <stop stop-color = "rgb(232, 13, 195)" offset = "100%">

                </stop>
            </linearGradient>
          <path id="curve" d="M 100 100 C 400 20 800 20 1100 100" />
        </defs>
      <text>
        <textPath xlink:href="#curve" fill="url(#g1)">
            <!--<?php echo get_bloginfo( 'name' ); ?>-->
          Przedszkole Zaczarowany Ogród w Kłokoczynie
        </textPath>
      </text>
    </svg>
  </a>
</header>
