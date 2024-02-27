<li class="swiper-slide recomend-post">
    <div class="recomennd-bunner-wrapper swiper-bunner-wrapper sp-d-none">
        <?php the_post_thumbnail(array(500,1000)); ?>
    </div>
    <!-- PCバナー -->

    <div class="recomennd-bunner-wrapper swiper-bunner-wrapper pc-d-none">
        <?php the_post_thumbnail(array(250,500)); ?>
    </div>
    <!-- スマホバナー -->

    <div class="site-explain-wrapper swipe-explain-wrapper">
        <h3><?php the_title(); ?></h3>
        <?php echo the_content(); ?>
        <a href="<?php the_field('officiall_site_url')?>" target="_blank" class="btn main-btn d-fl">
            <span>公式サイトはこちら</span>
            <img src="<?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-white.svg" alt="arrow">
        </a>
        <!-- <a href="<//?php the_field('detail_site_url')?>" target="_blank" class="btn detail-btn d-fl">
            <span>詳細はこちら</span>
            <img src="<//?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-black.svg" alt="arrow">
        </a>                 -->
    </div>
</li>