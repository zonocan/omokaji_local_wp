<div class="guide-content">
     <ul>
        <li class="guide-bunner sp-d-none">
            <a href="<?php the_field('site_url')?>" target="_blank"><?php the_post_thumbnail(array(500,1000)); ?></a>
        </li>
        <!--  -->
        <li class="guide-bunner pc-d-none">
            <a href="<?php the_field('site_url')?>" target="_blank"><?php the_post_thumbnail(array(300,800)); ?></a>
        </li>
        <!--  -->
        <li class="guide-text">
            <?php the_title(); ?>
        </li>
    </ul>
</div>