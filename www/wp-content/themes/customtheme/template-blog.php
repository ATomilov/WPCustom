<?php
    /*
    Template Name: Blog_Page_Template
    */
get_header();
get_sidebar();
$blog_page_obj = get_page_by_title( 'Blog', '', 'page' );
$standart_posts = new WP_Query( array(
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
remove_filter( 'the_content', 'wpautop' );
?>
<div class="content-blog">
        <div class="content-container-blog">
            <div class="blog-content">
                <div class="blog-title"><?php echo strtoupper($blog_page_obj -> post_title);?></div>
	            <?php get_template_part('navigation');?>
                <div class="border-under-blog-title"></div>
                <?php while ( $standart_posts->have_posts() ) :
                    $standart_posts->the_post();
	                $standart_posts_id = $standart_posts->ID();
	                $standart_posts_image_id = get_field('blog_posts_thumb',$standart_posts_id);
	                $standart_posts_image_url = wp_get_attachment_image_src($standart_posts_image_id,"blog's-post-thumb");?>
                        <div class="standart-post-item">
                            <div class="standart-post-image">
                                <img src="<?php echo $standart_posts_image_url[0];?>">
                            </div>
                            <div class="standart-post-title-info-and-description">
                                <a href="<?php the_permalink();?>">
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
                                <div class="standart-post-description"><?php the_content();?></div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();?>
                <div class="border-post"></div>
                <div class="link-under-post">
                    <img src="./img/link.png">
                </div>
                <div class="standart-post-item">
                    <div class="standart-post-image gallery owl-carousel owl-theme">
                        <img src="<?php echo get_template_directory_uri();?>/img/standart_post_image.png">
                        <img src="<?php echo get_template_directory_uri();?>/img/standart_post_image.png">
                        <img src="<?php echo get_template_directory_uri();?>/img/standart_post_image.png">
                        <img src="<?php echo get_template_directory_uri();?>/img/standart_post_image.png">
                    </div>
                    <div class="standart-post-title-info-and-description">
                        <div class="standart-post-title">Gallery Post</div>
                        <div class="standart-post-info">
                            <div class="standart-post-date-and-calendar">
                                <i class="fa fa-calendar-o blog" aria-hidden="true"></i>
                                <div class="standart-post-date">30 march</div>
                            </div>
                            <div class="standart-post-user-icon-and-nickname">
                                <i class="fa fa-user blog" aria-hidden="true"></i>
                                <div class="standart-post-nickname">Admin</div>
                            </div>
                            <div class="standart-post-comments">
                                <i class="fa fa-comments blog" aria-hidden="true"></i>
                                <div class="standart-post-number-of-comments">2 comments</div>
                            </div>
                        </div>
                        <div class="standart-post-description">
                            This is Photoshop's version  of Lorem Ipsum.
                            Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                            lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                            sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit
                            amet mauris. Morbi accumsan ipsum velit.
                        </div>
                    </div>
                </div>
                <div class="border-post"></div>
                <div class="quote-under-gallery">
                    <img src="./img/quote.png">
                </div>
                <div class="border-post gallery"></div>
                <div class="standart-post-item last">
                    <div class="standart-post-image">
                        <img src="<?php echo get_template_directory_uri();?>/img/standart_post_image.png">
                    </div>
                    <div class="standart-post-title-info-and-description">
                        <div class="standart-post-title">Another Standard Post</div>
                        <div class="standart-post-info">
                            <div class="standart-post-date-and-calendar">
                                <i class="fa fa-calendar-o blog" aria-hidden="true"></i>
                                <div class="standart-post-date">30 march</div>
                            </div>
                            <div class="standart-post-user-icon-and-nickname">
                                <i class="fa fa-user blog" aria-hidden="true"></i>
                                <div class="standart-post-nickname">Admin</div>
                            </div>
                            <div class="standart-post-comments">
                                <i class="fa fa-comments blog" aria-hidden="true"></i>
                                <div class="standart-post-number-of-comments">2 comments</div>
                            </div>
                        </div>
                        <div class="standart-post-description">
                            This is Photoshop's version  of Lorem Ipsum.
                            Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                            lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                            sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit
                            amet mauris. Morbi accumsan ipsum velit.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_footer();?>