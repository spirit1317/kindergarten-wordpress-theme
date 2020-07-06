<aside id="aside">
  <nav id="poczatek_menu">
    <?php wp_nav_menu( array( 'theme_location' => 'left_side_menu') ); ?>
    <?php wp_meta(); ?>
  </nav>
<?php
  if ( is_active_sidebar( 'home_right_1' ) ) :
	      echo "<div id=\"primary-sidebar\" class=\"primary-sidebar-widget-area\" role=\"complementary\">";
		    dynamic_sidebar( 'home_right_1' );
	      echo "</div>";
  endif;
?>
</aside>
