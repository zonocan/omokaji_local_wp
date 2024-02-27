<div class="payment-content">
	<ul>
        <li class="payment-icon"><?php the_post_thumbnail(); ?></li>
        <li class="payment-text-wrapper">
            <?php echo the_content(); ?>
            <a href="" target="_blank" class="btn detail-btn d-fl">
                <span>詳細はこちら</span>
                <img src="<?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-black.svg" alt="arrow">                  
            </a>
        </li>
    </ul>
</div> 