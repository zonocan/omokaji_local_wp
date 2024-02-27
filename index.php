<?php get_header(); ?>
    
    <main id="page-contents">
        <div id="top" class="top-section">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/top-background-sp.svg" alt="トップページバナー" class="pc-d-none">
            <div class="top-content-sp pc-d-none">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/top-message-bg-sp.png" alt="バックグラウンド">
                <p class="top-message-01-sp"><img src="<?php echo get_template_directory_uri(); ?>/asset/top-message01-sp.png" alt="業界No.1の"></p>
                <p class="top-message-02-sp"><img src="<?php echo get_template_directory_uri(); ?>/asset/top-message02-sp.png" alt="オンラインカジノメディア"></p>
                <p class="top-message-03-sp"><img src="<?php echo get_template_directory_uri(); ?>/asset/top-message03-sp.png" alt="ニュースサイト"></p>
            </div>
            <!-- sp -->

            <img src="<?php echo get_template_directory_uri(); ?>/asset/top-backgroung-pc.svg" alt="トップページバナー" class="sp-d-none">
            <div class="top-content-pc sp-d-none">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/top-message-bg-pc.png" alt="バックグラウンド" class="sp-d-none">
                <p class="top-message-01-pc"><img src="<?php echo get_template_directory_uri(); ?>/asset/top-message01-pc.png" alt="業界No.1の"></p>
                <p class="top-message-02-pc"><img src="<?php echo get_template_directory_uri(); ?>/asset/top-message02-pc.png" alt="オンラインカジノメディア"></p>
                <p class="top-message-03-pc"><img src="<?php echo get_template_directory_uri(); ?>/asset/top-message03-pc.png" alt="ニュースサイト"></p>
            </div>  
            <!-- pc -->

        </div>
        <!-- #top -->

        <div id="recomennd" class="content-wrapper bg-white-section">
            <h2>
                <span>RECOMEND</span>
                <small>~ おすすめカジノ ~</small>
            </h2>
            <article class="recomend-posts swiper-posts">
                <div class="recomend-swiper swiper">

                    <ul class="swiper-wrapper recomend-post-wrapper">
                        <?php 
                            $recommend_posts = array(
                                'post_type' => 'recomend',
                                'posts_per_page' => 10,
                                'order' => 'DESC', 
                            );

                            $posts = get_posts($recommend_posts);
                                if( $posts ):
                                    foreach( $posts as $post):
                                        setup_postdata($post);

                                        get_template_part( 'template-parts/content', 'top-recommend' );
                                        // テンプレート

                                    endforeach; 
                                endif;
                            wp_reset_postdata();                        
                        ?>
                        <!-- recomend-post -->
                    </ul>
                    <div class="swiper-button-prev swiper-button-black"></div>
                    <div class="swiper-button-next swiper-button-black"></div>
                </div>
            </article>
        </div>    
        <!-- #recomend -->

        <!-- #bonus -->

        <div id="search" class="content-wrapper bg-white-section">
            <div class="inner search-inner">
                <h2>
                    <span>SEARCH</span>
                    <small>~ カジノ比較 ~</small>
                </h2>     
                <ul class="search-contents-wrapper pc-d-fl">
                    <?php 
                        $search_posts = array(
                            'post_type' => 'search',
                            'posts_per_page' => 6,
                            'order' => 'DESC', 
                        );

                        $posts = get_posts($search_posts);
                            if( $posts ):
                                foreach( $posts as $post):
                                    setup_postdata($post);

                                    get_template_part( 'template-parts/content', 'top-search' );
                                    // テンプレート 
                                endforeach; 
                            endif;
                        wp_reset_postdata();                        
                    ?>
                </ul>    
            </div>
        </div>  
        <!-- #search -->

        <div id="payment" class="content-wrapper bg-blue-section">
            <h2>
                <span>PAYMENT</span>
                <small>~ お支払い方法 ~</small>
            </h2>  
            <div class="inner payment-inner">
                <div class="payment-contents pc-d-fl">
                    <?php 
                        $payment_posts = array(
                            'post_type' => 'payment',
                            'posts_per_page' => 6,
                            'order' => 'DESC', 
                        );

                        $posts = get_posts($payment_posts);
                            if( $posts ):
                                foreach( $posts as $post):
                                    setup_postdata($post);

                                    get_template_part( 'template-parts/content', 'top-payment' );
                                    // テンプレート   
                                endforeach; 
                            endif;
                        wp_reset_postdata();                        
                    ?>
                </div>

                <a href="https://online-casino.media/payment/" target="_blank" rel="noopener noreferrer" class="btn section-btn d-fl">
                    <span>お支払いの一覧はこちら</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-black.svg" alt="arrow">
                </a>
            </div>      
        </div> 
        <!-- #payment -->


        <!-- .content-wrapper(#guide&#event) -->

        <div id="games" class="content-wrapper bg-blue-section">
            <h2>
                <span>GAMES</span>
                <small>~ おすすめゲーム ~</small>
            </h2>  
            <div class="inner games-inner">
                <div class="games-contents d-fl">
                    <?php 
                        $game_posts = array(
                            'post_type' => 'game',
                            'posts_per_page' => 7,
                            'order' => 'DESC', 
                        );

                        $posts = get_posts($game_posts);
                            if( $posts ):
                                foreach( $posts as $post):
                                    setup_postdata($post);

                                    get_template_part( 'template-parts/content', 'top-game' );
                                    // テンプレート
                                    
                                endforeach; 
                            endif;
                        wp_reset_postdata();                        
                    ?>
                </div>

                <a href="https://online-casino.media/casino-game/" target="_blank" rel="noopener noreferrer" class="btn section-btn d-fl">
                    <span>ゲームの一覧はこちら</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/arrow-right-solid-black.svg" alt="arrow">          
                </a>
            </div>      
        </div>        

        <div class="content-wrapper bg-white-section">
            <div id="about">
                <h2>
                    <span>ABOUT</span>
                    <small>~ サイト概要 ~</small>
                </h2>           
                <img src="<?php echo get_template_directory_uri(); ?>/asset/top-background-sp.svg" alt="トップページバナー" class="pc-d-none about-illust-sp">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/top-backgroung-pc.svg" alt="トップページバナー" class="sp-d-none about-illust-pc">
                <div class="inner about-inner">
                    <h3>業界新世代オンラインカジノメディア</h3>
                    <p>
                        オモカジ一杯は2024年から運営しているオンラインカジノ・ブックメーカー紹介サイトです。今は 一般の方々に広く認知されているオンラインカジノですが、数多くあるオンラインカジノの中で悪 質なサイトも数多く存在していました。数多くの経験を経て、編集部一同は「優良で信頼できるオ ンラインカジノを自信を込めて紹介する!」という信念を持ち活動を始めました。ご紹介する優良 オンラインカジノは多くのリサーチを経て、実際に利用し、「これなら満足していただける!」という 結果の元で厳選した内容を記事にしております。なお、当サイトはオンラインギャンブルが合法な
                        国に居住する方々に向けて提供をしております。利用者は居住国の法律を遵守しながらご利用 ください。ビックウィンを掴めるように幸運を祈ります。            
                    </p>
                </div>
            </div>  
            <!-- #about -->

            <div id="partenership">
                <h3>提携オンラインカジノ</h3>
                <article class="partenership-posts swiper-posts">
                    <div class="partenership-swiper swiper">
                        <ul class="swiper-wrapper partenership-post-wrapper">
                            <?php 
                                $partenership_posts = array(
                                    'post_type' => 'partenership',
                                    'posts_per_page' => 10,
                                    'order' => 'DESC', 
                                );
                            
                                $posts = get_posts($partenership_posts);   
                                if( $posts ):
                                    foreach( $posts as $post):  

                                        get_template_part( 'template-parts/content', 'top-partenership' );
                                        // テンプレート 
                                        endforeach; 
                                    endif;
                                wp_reset_postdata();  
                            ?>
                        </ul>
                    </div>
                
                </article>
            </div> 
            <!-- #partenership -->

        </div>
        <!-- .content-wrapper -->
    </main>
    <!-- main(終了) -->

<?php get_footer();?>