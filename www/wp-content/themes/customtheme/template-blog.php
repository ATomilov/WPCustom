<?php
    /*
    Template Name: Blog_Page_Template
    */
get_header();
get_sidebar();
?>
<div class="content-blog">
        <div class="content-container-blog">
            <div class="blog-content">
                <div class="blog-title">BLOG</div>
	            <?php get_template_part('navigation');?>
                <div class="border-under-blog-title"></div>
                <div class="standart-post-item">
                    <div class="standart-post-image">
                        <img src="<?php echo get_template_directory_uri();?>/img/standart_post_image.png">
                    </div>
                    <div class="standart-post-title-info-and-description">
                        <div class="standart-post-title">Standard Post with Image</div>
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