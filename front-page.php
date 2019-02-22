
    <?php get_header(); ?>

       
<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('extra_styles/images/f1.jpeg'); ?>)"></div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large">Welcome!</h1>
    <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
    <h3 class="headline headline--small">Why don&rsquo;t you check out our services?</h3>
    <a href="<?php echo site_url('/services'); ?>" class="btn btn--large btn--blue">Find Your Major</a>
  </div>
</div>

<div class="full-width-split group">
  <div class="full-width-split__one">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center"></h2>
      
      <?php

        $homepageEvents = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'event',
            'orderby' => 'event_date',
            'order' => 'ASC',
        ));

        while ($homepageEvents->have_posts()) {
            $homepageEvents->the_post(); ?>
           <div class="event-summary">
        <a class="event-summary__date t-center" href="#">
          <span class="event-summary__month"><?php echo the_time('M'); ?></span>
          <span class="event-summary__day"><?php
                                            echo the_time('d'); ?> </span>  
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
         
         
          <p> <?php 
                if (has_excerpt()) {
                    echo get_the_excerpt();
                } else {
                    echo wp_trim_words(get_the_content(), 18);
                }
                ?><a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
        </div>
      </div>
        <?php 
    }
    ?>
    
    
        <h2 class="headline headline--small-plus t-center"> Best Technology </h2>
        <iframe width="550" height="350" 
         src="https://www.youtube.com/embed/xI0uGBEPMts" 
         frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
         </iframe>      
    
  


 

    </div>
  </div>
  <div class="full-width-split__two">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
        <?php 
        $homepagePosts = new WP_Query(array(
            'posts_per_page' => 2
        ));

        while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>
                 <div class="event-summary">
                    <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                       <span class="event-summary__month"><?php the_time('M'); ?></span>
                        <span class="event-summary__day"><?php the_time('d'); ?></span>  
                    </a>
                 <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>">
                    <?php the_title() ?></a></h5>

                     <p>  <p> <?php 
                                if (has_excerpt()) {
                                    echo get_the_excerpt();
                                } else {
                                    echo wp_trim_words(get_the_content(), 18);
                                }
                                ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
                 </div>
               </div>

              <?php

                wp_reset_postdata();
            }
            ?>
     
           
      <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">View All Blog Posts</a></p>
    </div>
  </div>
</div>

<div class="hero-slider">
<div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('extra_styles/images/b1.jpeg'); ?>)">
  <div class="hero-slider__interior container">
    <div class="hero-slider__overlay">
      <h2 class="headline headline--medium t-center">Websites Design</h2>
      <p class="t-center">We builds beautifull responsive websites</p>
      <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
    </div>
  </div>
</div>
<div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('extra_styles/images/b2.jpeg'); ?>)">
  <div class="hero-slider__interior container">
    <div class="hero-slider__overlay">
      <h2 class="headline headline--medium t-center">Apps for Android & IOS</h2>
      <p class="t-center">We builds apps in all platforms</p>
      <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
    </div>
  </div>
</div>
<div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('extra_styles/images/b3.jpeg'); ?>)">
  <div class="hero-slider__interior container">
    <div class="hero-slider__overlay">
      <h2 class="headline headline--medium t-center">Maintenance</h2>
      <p class="t-center">Every product include maintenance </p>
      <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
    </div>
  </div>
</div>
</div>

 


  <?php get_footer(); ?>
