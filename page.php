<?php get_header();?>
<?php get_sidebar(); ?>
<main>
  <div class="pocztowka_wrapper_wrappera">
    <div class="pocztowka_wrapper">
      <?php
        $upload_dir = wp_upload_dir();
        $upload_dir_url = $upload_dir['baseurl'];
        $upload_dir = $upload_dir['basedir'];
        $slider_images_url = glob($upload_dir."/2018/pokaz_slajdow/*");
        $slider_images_url_exclude = glob($upload_dir."/2018/pokaz_slajdow/*[-]*");
        if($slider_images_url){
          foreach ($slider_images_url as $image_url) {
            if(! in_array($image_url, $slider_images_url_exclude)){
              $img_src=$upload_dir_url."/2018/pokaz_slajdow/".wp_basename($image_url);
              echo "<div class=\"pocztowka\" style=\"display: none; background-image: url(".$img_src.");\"></div>";
            }
          }
        } else {
          echo "<div class=\"pocztowka\" style=\"display: none; background-image: url(".get_bloginfo('template_directory')."/images/zdjecie.png".");\"></div>";
        }
      ?>
    </div>
  </div>
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();?>
      <article>
          <h2>
            <?php the_title();?>
          </h2>
          <?php the_content();?>
      </article>
    <?php endwhile;?>
<?php endif; ?>
</main>
<?php get_footer(); ?>
