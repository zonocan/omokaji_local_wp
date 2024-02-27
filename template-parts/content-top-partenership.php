<li class="swiper-slide partenership-post">
    <div class="partenership-bunner-wrapper swiper-bunner-wrapper sp-d-none">
        <a href="<?php the_field('site_url')?>" target="_blank" rel="noopener noreferrer">
            <?php the_post_thumbnail(array(500,1000)); ?>
        </a>
    </div> 
    <!-- pc -->

    <div class="partenership-bunner-wrapper swiper-bunner-wrapper pc-d-none">
        <a href="<?php the_field('site_url')?>" target="_blank" rel="noopener noreferrer">
            <?php the_post_thumbnail(array(250,500)); ?>
        </a>
    </div> 
    <!-- sp -->

    <div class="site-explain-wrapper swipe-explain-wrapper">
        <h4><?php the_title(); ?></h4>
        <p><?php  echo $post -> post_content; ?></p>     
    </div>                            
</li>