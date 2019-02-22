
<?php

get_header();

$namePage = get_the_title();

$pic = '';


switch ($namePage) {
    case 'Home':
        $pic = 'extra_styles/images/services2.jpeg';
        $description1 = 'Home';
        $description2 = '';
        break;
    case 'Services':

        $pic = 'extra_styles/images/services2.jpeg';
        $description1 = 'Our services are ...';
        $description2 = 'Nowaday Everybody have something to publish. We can help you...';
        break;

    case 'About Us':

        $pic = 'extra_styles/images/b3.jpeg';
        $description1 = 'We are an small company in growing';
        $description2 = 'Our team work hard to keep you happy ';
        break;

    case 'Contact':

        $pic = 'extra_styles/images/b3.jpeg';
        $description1 = 'Call Us  <h3>Available</h3>';
        $description2 = '24 - 7 - 365';
        break;

    case 'Privacy Policy':

        $pic = 'extra_styles/images/b3.jpeg';
        $description1 = 'Your information will keep  <h3>Save</h3>';
        $description2 = 'We are truely a serius company ';
        break;
}

?>
<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri($pic); ?>)"></div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large"><?php echo $namePage; ?></h1>
    <h2 class="headline headline--medium"><?php echo $description1; ?></h2>
    <h3 class="headline headline--small"><?php echo $description2; ?></h3> 
  </div>
</div>
<?php

while (have_posts()) {

    the_post();
    pageBanner();
    ?>
       <div class="container">
       <?php the_content(); ?>
       </div>
    <?php
}

get_footer();
?>



