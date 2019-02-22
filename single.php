<?php

get_header();

$pic = '/extra_styles/images/b3.jpeg';
?>

<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri($pic);?>)"></div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large">Welcome to our blog</h1>
    <h3 class="headline headline--medium">Keep up with our latest news</h3>
   
   
  </div>
</div>

<div class="container container--narrow page-section">
<?php 

while(have_posts()) {
    the_post();
    pageBanner(); ?>
       <h2><?php the_title();?></h2>
       <?php the_content();?>
       <hr>
       <?php comments_template(); ?>
    <?php
}

get_footer();
?>

</div>


