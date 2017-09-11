<?php
    /*
    Template Name: Blog_Page_Template
    */
get_header();
get_sidebar();
$blog_page_obj = get_page_by_title( 'Blog', '', 'page' );
$standart_posts = get_posts( array(
    'posts_per_page' => 2,
    'orderby' => 'date',
    'order' => 'ASC',
	'tax_query' => array(
		array(
			'taxonomy' => 'post_format',
			'field' => 'slug',
			'terms' => array(
				'post-format-gallery',
				'post-format-link',
				'post-format-quote'
			),
			'operator' => 'NOT IN'
		)
	)
) );
$gallery_posts = new WP_Query( array(
	'tax_query' => array(
		array(
			'taxonomy' => 'post_format',
			'field' => 'slug',
			'terms' =>'post-format-gallery'
		)
	)
) );
$link_posts = new WP_Query( array(
	'orderby' => 'date',
	'order' => 'DESC',
	'tax_query' => array(
		array(
			'taxonomy' => 'post_format',
			'field' => 'slug',
			'terms' =>'post-format-link'
		)
	)
) );
$quote_posts = new WP_Query( array(
	'orderby' => 'date',
	'order' => 'DESC',
	'tax_query' => array(
		array(
			'taxonomy' => 'post_format',
			'field' => 'slug',
			'terms' =>'post-format-quote'
		)
	)
) );
remove_filter( 'the_content', 'wpautop' );
?>
<div class="content-blog">
        <div class="content-container-blog">
            <div class="blog-content">
                <div class="blog-title"><?php echo strtoupper($blog_page_obj -> post_title);?></div>
	            <?php get_template_part('navigation');?>
                <div class="border-under-blog-title"></div>
                <?php setup_postdata($post = $standart_posts[0]);
                $post_id = $post->ID;
                $post_image_id = get_field('blog_posts_thumb',$post_id);
                $post_image_url = wp_get_attachment_image_src($post_image_id,"blog's-post-thumb");?>
                        <div class="standart-post-item">
                            <div class="standart-post-image">
                                <img src="<?php echo $post_image_url[0];?>">
                            </div>
                            <div class="standart-post-title-info-and-description">
                                <a class="standart-post-permalink" href="<?php the_permalink();?>">
                                    <div class="standart-post-title"><?php the_title();?></div>
                                </a>

                                <div class="standart-post-info">
                                    <div class="standart-post-date-and-calendar">
                                        <i class="fa fa-calendar-o blog" aria-hidden="true"></i>
                                        <div class="standart-post-date"><?php the_date('j F');?></div>
                                    </div>
                                    <div class="standart-post-user-icon-and-nickname">
                                        <i class="fa fa-user blog" aria-hidden="true"></i>
                                        <div class="standart-post-nickname"><?php the_author();?></div>
                                    </div>
                                    <div class="standart-post-comments">
                                        <i class="fa fa-comments blog" aria-hidden="true"></i>
                                        <div class="standart-post-number-of-comments"><?php echo strtolower(comments_number());?></div>
                                    </div>
                                </div>
                                <div class="standart-post-description"><?php echo words_limit(get_the_content(),46);?></div>
                            </div>
                        </div>
                    <?php wp_reset_postdata();?>
                <div class="border-post"></div>
                <div class="link-under-post">
                    <i class="fa fa-link" aria-hidden="true"></i>
                    <?php if ($link_posts->have_posts()){
                        $link_posts->the_post();
                        $link_posts_id = $link_posts->ID();?>
                        <a href="http://<?php the_content();?>" target="_blank">
                            <div class="link-post-content"><?php the_content();?></div>
                        </a>
                    <?php }
                    wp_reset_postdata();?>
                </div>
                <?php while ( $gallery_posts->have_posts() ) :
                    $gallery_posts->the_post();
	                $gallery_posts_id = $gallery_posts->ID();
	                $images = get_field('images_gallery',$gallery_posts_id);?>
                        <div class="standart-post-item">
                            <div class="standart-post-image gallery owl-carousel owl-theme">
                            <?php foreach ($images as $image){?>
                                <img src="<?php echo $image['url'];?>">
                            <?php }?>
                            </div>
                            <div class="standart-post-title-info-and-description">
                                <div class="standart-post-title"><?php the_title();?></div>
                                <div class="standart-post-info">
                                    <div class="standart-post-date-and-calendar">
                                        <i class="fa fa-calendar-o blog" aria-hidden="true"></i>
                                        <div class="standart-post-date"><?php the_date('j F');?></div>
                                    </div>
                                    <div class="standart-post-user-icon-and-nickname">
                                        <i class="fa fa-user blog" aria-hidden="true"></i>
                                        <div class="standart-post-nickname"><?php the_author();?></div>
                                    </div>
                                    <div class="standart-post-comments">
                                        <i class="fa fa-comments blog" aria-hidden="true"></i>
                                        <div class="standart-post-number-of-comments"><?php echo strtolower(comments_number());?></div>
                                    </div>
                                </div>
                                <div class="standart-post-description"><?php echo words_limit(get_the_content(),46);?></div>
                            </div>
                        </div>
                <?php endwhile;
                wp_reset_postdata();?>
                <div class="border-post"></div>
                <div class="quote-under-gallery">
                    <?php if ($quote_posts->have_posts()){
                        $quote_posts->the_post();
	                    $quote_posts_id = $quote_posts->ID();?>
                            <div class="quote-text"><?php the_content();?></div>
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <div class="quote-author"><?php echo get_field('author_quote');?></div>
                    <?php }
                    wp_reset_postdata();?>
                </div>
                <div class="border-post gallery"></div>
	            <?php setup_postdata($post = $standart_posts[1]);
	            $post_id = $post->ID;
	            $post_image_id = get_field('blog_posts_thumb',$post_id);
	            $post_image_url = wp_get_attachment_image_src($post_image_id,"blog's-post-thumb");?>
                    <div class="standart-post-item last">
                        <div class="standart-post-image">
                            <img src="<?php echo $post_image_url[0];?>">
                        </div>
                        <div class="standart-post-title-info-and-description">
                            <a class="standart-post-permalink" href="<?php the_permalink();?>">
                                <div class="standart-post-title"><?php the_title();?></div>
                            </a>
                            <div class="standart-post-info">
                                <div class="standart-post-date-and-calendar">
                                    <i class="fa fa-calendar-o blog" aria-hidden="true"></i>
                                    <div class="standart-post-date"><?php echo get_the_date('j F');?></div>
                                </div>
                                <div class="standart-post-user-icon-and-nickname">
                                    <i class="fa fa-user blog" aria-hidden="true"></i>
                                    <div class="standart-post-nickname"><?php the_author();?></div>
                                </div>
                                <div class="standart-post-comments">
                                    <i class="fa fa-comments blog" aria-hidden="true"></i>
                                    <div class="standart-post-number-of-comments"><?php echo strtolower(comments_number());?></div>
                                </div>
                            </div>
                            <div class="standart-post-description"><?php echo words_limit(get_the_content(),46);?></div>
                        </div>
                    </div>
                <?php wp_reset_postdata();?>
            </div>
        </div>
        <?php get_footer();?>