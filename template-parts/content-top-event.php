<div class="event-content">
    <ul>
        <li class="event-bunner sp-d-none">
            <a href="<?php the_field('site_url')?>" target="_blank"><?php the_post_thumbnail(array(500,1000)); ?>></a>
        </li>
        <!--  -->
        <li class="event-bunner pc-d-none">
            <a href="<?php the_field('site_url')?>" target="_blank"><?php the_post_thumbnail(array(300,800)); ?></a>
        </li>  
        <!--  -->
        <li class="event-text">
            <?php the_title(); ?>
        </li>
    </ul>
</div>