<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <?php
        if( is_single() && !is_home() || is_page() && !is_front_page()) {
        //タイトル
        $title = get_the_title();
        //ディスクリプション
        if(!empty($post->post_excerpt)) {
            $description = str_replace(array("\r\n", "\r", "\n", "&nbsp;"), '', strip_tags($post->post_excerpt));
        } elseif(!empty($post->post_content)) {
            $description = str_replace(array("\r\n", "\r", "\n", "&nbsp;"), '', strip_tags($post->post_content));
            $description_count = mb_strlen($description, 'utf8');
            if($description_count > 120) {
            $description = mb_substr($description, 0, 120, 'utf8').'…';
            }
        } else {
            $description = '';
        }
        //キーワード
        if (has_tag()) {
            $tags = get_the_tags();
            $kwds = array();
            $i = 0;
            foreach($tags as $tag){
            $kwds[] = $tag->name;
            if($i === 4) {
                break;
            }
            $i++;
            }
            $keywords = implode(',',$kwds);
        }  else {
            $keywords = '';
        }
        //ページタイプ
        $page_type = 'article';
        //ページURL
        $page_url = get_the_permalink();
        //OGP用画像
        if(!empty(get_post_thumbnail_id())) {
            $ogp_img_data = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
            $ogp_img = $ogp_img_data[0];
        }
        }/*個別ページ以外のメタデータに続く*/

    ?>    	
  <!-- google-font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Roboto&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <?php wp_head();?>
  <!--  -->  
</head>    

<body>
  <header class="header">
    <div class="inner d-fl">
      <h1 class="header-logo"><a href="<?php echo home_url(); ?>#top"><img src="<?php echo get_template_directory_uri(); ?>/asset/logo.svg" alt="logo"></a></h1>
      <div class="hum-btn pc-d-none">
        <span></span>
        <span></span>
      </div>
      <nav class="sp-d-none pc-header-nav">
        <ul class="d-fl">
          <li id="pc-header-nav-link-home" class="pc-header-nav-link">
            <span>HOME</span>
            <nav id="header-hover-lists-home" class="header-hover-lists d-none">
              <ul>
                <li><a href="<?php echo home_url(); ?>#top"><span>TOP</span></a></li>
                <li><a href="<?php echo home_url(); ?>#recomennd"><span>RECOMEND</span></a></li>
                <li><a href="<?php echo home_url(); ?>#search"><span>SEARCH</span></a></li>
                <li><a href="<?php echo home_url(); ?>#payment"><span>PAYMENT</span></a></li>
                <li><a href="<?php echo home_url(); ?>#games"><span>GAMES</span></a></li>
                <li><a href="<?php echo home_url(); ?>#about"><span>ABOUT</span></a></li>
              </ul>
            </nav>
          </li>
          <li id="pc-header-nav-link-recomend" class="pc-header-nav-link">
            <span>RECOMENDE</span>
            <nav id="header-hover-lists-recomend" class="header-hover-lists d-none">
              <ul>
                <?php 
                    $header_recommend_posts = array(
                      'post_type' => 'recomend',
                      'posts_per_page' => 10,
                      'order' => 'DESC', 
                    );

                    $posts = get_posts($header_recommend_posts);
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
            </nav>          
          </li>
          <li id="pc-header-nav-link-search" class="pc-header-nav-link">
            <span>SEARCH</span>
            <nav id="header-hover-lists-search" class="header-hover-lists d-none">
              <ul>
                  <?php 
                    $header_search_posts = array(
                      'post_type' => 'search',
                      'posts_per_page' => 6,
                      'order' => 'DESC', 
                    );

                    $posts = get_posts($header_search_posts);
                      if( $posts ):
                        foreach( $posts as $post):
                          setup_postdata($post);
                  ?>                  
                    <li><a href=""><span><?php the_title(); ?></span></a></li>
                  <?php
                        endforeach; 
                      endif;
                    wp_reset_postdata();                        
                  ?>  
              </ul>
            </nav>            
          </li>
          <li id="pc-header-nav-link-payment" class="pc-header-nav-link">
            <span>PAYMENT</span>
            <nav id="header-hover-lists-payment" class="header-hover-lists d-none">
              <ul>
                <?php 
                  $header_payment_posts = array(
                      'post_type' => 'payment',
                      'posts_per_page' => 6,
                      'order' => 'DESC', 
                  );

                  $posts = get_posts($header_payment_posts);
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
            </nav>             
          </li>
          <li id="pc-header-nav-link-games" class="pc-header-nav-link">
            <span>GAMES</span>
            <nav id="header-hover-lists-games" class="header-hover-lists d-none">
              <ul>
                <?php 
                    $header_game_posts = array(
                        'post_type' => 'game',
                        'posts_per_page' => 6,
                        'order' => 'DESC', 
                    );

                    $posts = get_posts($header_game_posts);
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
            </nav>             
          </li>
        </ul>        
      </nav>
    </div>
  </header>
  <!-- header終了 -->

  <div class="hum-list d-none">
   <div class="inner">

    <nav>
      <ul>
        <li id="hum-list-sitemap-home-accordion-triger-btn" class="hum-list-link-title">HOME</li>
        <ul id="hum-list-sitemap-home-accordion-list" class="hum-list-accordion-contents d-none">
          <li><a href="#top" class="d-fl"><span>TOP</span><small>トップページ</small></a></li>
          <li><a href="#recomennd" class="d-fl"><span>RECOMEND</span><small>おすすめカジノ</small></a></li>
          <li><a href="#search" class="d-fl"><span>SEARCH</span><small>カジノ比較</small></a></li>
          <li><a href="#payment" class="d-fl"><span>PAYMENT</span><small>お支払い方法</small></a></li>
          <li><a href="#games" class="d-fl"><span>GAMES</span><small>おすすめゲーム</small></a></li>
          <li><a href="#about" class="d-fl"><span>ABOUT</span><small>サイト概要</small></a></li>    
        </ul>
        <!--  -->
        <li id="hum-list-sitemap-recomend-accordion-triger-btn" class="hum-list-link-title">RECOMEND</li>
        <ul id="hum-list-sitemap-recomend-accordion-list" class="hum-list-accordion-contents d-none">
          <?php 
            $header_recommend_posts = array(
              'post_type' => 'recomend',
              'posts_per_page' => 10,
              'order' => 'DESC', 
            );

            $posts = get_posts($header_recommend_posts);
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
        <li id="hum-list-sitemap-search-accordion-triger-btn" class="hum-list-link-title">SEARCH</li>
        <ul id="hum-list-sitemap-search-accordion-list" class="hum-list-accordion-contents d-none">
          <?php 
              $header_search_posts = array(
                'post_type' => 'search',
                'posts_per_page' => 6,
                'order' => 'DESC', 
              );

              $posts = get_posts($header_search_posts);
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
        <!--  -->          
        <li id="hum-list-sitemap-payment-accordion-triger-btn" class="hum-list-link-title">PAYMENT</li>
        <ul id="hum-list-sitemap-payment-accordion-list" class="hum-list-accordion-contents d-none">
          <?php 
                $header_payment_posts = array(
                    'post_type' => 'payment',
                    'posts_per_page' => 6,
                    'order' => 'DESC', 
                );

                $posts = get_posts($header_payment_posts);
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
        <li id="hum-list-sitemap-games-accordion-triger-btn" class="hum-list-link-title">GAMES</li>
        <ul id="hum-list-sitemap-games-accordion-list" class="hum-list-accordion-contents d-none">
          <?php 
              $header_game_posts = array(
                  'post_type' => 'game',
                  'posts_per_page' => 6,
                  'order' => 'DESC', 
              );

              $posts = get_posts($header_game_posts);
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
        <!--  -->          
      </ul>
    </nav>

    <nav>
      <ul>
        <li id="hum-list-relation-site-triger-btn" class="hum-list-link-title">関連サイト</li>
        <ul id="hum-list-relation-site-accordion-list" class="hum-list-accordion-contents d-none">
          <li><a href="" class="d-fl"><span>テキストテキストテキストテキストテキスト</span></a></li>
          <li><a href="" class="d-fl"><span>テキストテキストテキスト</span></a></li>
          <li><a href="" class="d-fl"><span>テキストテキストテキストテキスト</span></a></li>
          <li><a href="" class="d-fl"><span>テキストテキストテキスト</span></a></li>
        </ul>
        <!--  -->        
      </ul>
    </nav>
    
    <a href="" target="_blank" rel="noopener noreferrer" class="humlist-twitter-btn">
      <img src="<?php echo get_template_directory_uri(); ?>/asset/twitter-black.svg" alt="twitter">
    </a>    
   </div> 
  </div>
  <!-- .hum-list -->