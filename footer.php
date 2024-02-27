  <footer class="footer bg-blue-section">
    <div class="inner">
      <h1 class="footer-logo"><img src="<?php echo get_template_directory_uri(); ?>/asset/logo.svg" alt="logo"></h1> 

      <div class="pc-d-fl">

        <nav>
          <ul>
            <li id="footer-sitemap-home-accordion-triger-btn" class="footer-link-title">ホーム</li>
            <ul id="footer-sitemap-home-accordion-list" class="footer-accordion-contents sp-d-none">
              <li><a href="#top" class="d-fl"><span>TOP</span><small>トップページ</small></a></li>
              <li><a href="#recomennd" class="d-fl"><span>RECOMEND</span><small>おすすめカジノ</small></a></li>
              <li><a href="#bonus" class="d-fl"><span>BONUS</span><small>限定ボーナス</small></a></li>
              <li><a href="#search" class="d-fl"><span>SEARCH</span><small>カジノ比較</small></a></li>
              <li><a href="#payment" class="d-fl"><span>PAYMENT</span><small>お支払い方法</small></a></li>
              <li><a href="#guide" class="d-fl"><span>PAYMENT</span><small>お支払い方法</small></a></li>
              <li><a href="#event" class="d-fl"><span>GUIDE</span><small>始め方ガイド</small></a></li>
              <li><a href="#games" class="d-fl"><span>EVENT</span><small>イベント情報</small></a></li>
              <li><a href="#event" class="d-fl"><span>GAMES</span><small>おすすめゲーム</small></a></li>
              <li><a href="#about" class="d-fl"><span>ABOUT</span><small>サイト概要</small></a></li>              
            </ul>
          </ul>
        </nav>

        <nav>
          <ul>
            <li id="footer-sitemap-recomend-accordion-triger-btn" class="footer-link-title">RECOMEND</li>
            <ul id="footer-sitemap-recomend-accordion-list" class="footer-accordion-contents sp-d-none">
              <?php 
                    $footer_recommend_posts = array(
                      'post_type' => 'recomend',
                      'posts_per_page' => 10,
                      'order' => 'DESC', 
                    );

                    $posts = get_posts($footer_recommend_posts);
                      if( $posts ):
                        foreach( $posts as $post):
                          setup_postdata($post);
              ?>                                          
                  <li><a href="<?php the_field('officiall_site_url')?>" target="_blank"><span><?php the_title(); ?></span></a></li>
              <?php
                        endforeach; 
                      endif;
                  wp_reset_postdata();                        
              ?>      
            </ul>
          </ul>
        </nav>

        <nav>
          <ul>
            <li id="footer-sitemap-search-accordion-triger-btn" class="footer-link-title">SEARCH</li>
            <ul id="footer-sitemap-search-accordion-list" class="footer-accordion-contents sp-d-none">
              <?php 
                $footer_search_posts = array(
                  'post_type' => 'search',
                  'posts_per_page' => 6,
                  'order' => 'DESC', 
                );

                $posts = get_posts($footer_search_posts);
                  if( $posts ):
                    foreach( $posts as $post):
                      setup_postdata($post);
              ?>          
                <li><a href="" class="d-fl"><span><?php the_title(); ?></span></a></li>
              <?php
                      endforeach; 
                    endif;
                wp_reset_postdata();                        
              ?>     
            </ul>
          </ul>
        </nav>  

        <nav>
          <ul>
            <li id="footer-sitemap-payment-accordion-triger-btn" class="footer-link-title">PAYMENT</li>
            <ul id="footer-sitemap-payment-accordion-list" class="footer-accordion-contents sp-d-none">
              <?php 
                  $footer_payment_posts = array(
                      'post_type' => 'payment',
                      'posts_per_page' => 6,
                      'order' => 'DESC', 
                  );

                  $posts = get_posts($footer_payment_posts);
                      if( $posts ):
                        foreach( $posts as $post):
              ?>          
                <li><a href="" class="d-fl"><span><?php the_title(); ?></span></a></li>  
              <?php
                      endforeach; 
                    endif;
                  wp_reset_postdata();                        
              ?>    
            </ul>
          </ul>
        </nav>  
        
        <nav>
          <ul>
            <li id="footer-sitemap-games-accordion-triger-btn" class="footer-link-title">GAMES</li>
            <ul id="footer-sitemap-games-accordion-list" class="footer-accordion-contents sp-d-none">
                <?php 
                  $footer_game_posts = array(
                      'post_type' => 'game',
                      'posts_per_page' => 6,
                      'order' => 'DESC', 
                  );

                  $posts = get_posts($footer_game_posts);
                      if( $posts ):
                        foreach( $posts as $post):
                ?>
                  <li><a href="" class="d-fl"><span><?php the_title(); ?></span></a></li>
                <?php
                        endforeach; 
                      endif;
                  wp_reset_postdata();                        
                ?>       
            </ul>
          </ul>
        </nav>  

        <nav>
          <ul>
            <li id="footer-relation-site-triger-btn" class="footer-link-title">関連サイト</li>
            <ul id="footer-relation-site-accordion-list" class="footer-accordion-contents sp-d-none">
              <li><a href=""><span>テキストテキストテキストテキストテキスト</span></a></li>
              <li><a href=""><span>テキストテキストテキスト</span></a></li>
              <li><a href=""><span>テキストテキストテキストテキスト</span></a></li>
              <li><a href=""><span>テキストテキストテキスト</span></a></li>
            </ul>
          </ul>
        </nav>  
        
      </div>
      <a href="" target="_blank" rel="noopener noreferrer" class="footer-twitter-btn">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/twitter-white.svg" alt="twitter">
      </a>
    </div>
    <?php wp_footer(); ?>
  </footer>  
  <!-- js -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>  
  <script src="<?php echo get_template_directory_uri(); ?>/js/slide.js"></script>    
</body>
</html>