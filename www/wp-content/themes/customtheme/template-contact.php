<?php
    /*
    Template Name: Contact
    */
get_header();
get_sidebar(); 
$contact_page_obj = get_page_by_title( 'Contact', '', 'page' );
$contact_page_ID = $contact_page_obj -> ID;
remove_filter('the_content', 'wpautop');
?>
<div class="content">
            <div class="content-container">
                <div class="work-content">
                <div class="work-title">CONTACT US</div>
                <div class="top-right-navigation">
                    <div class="text-top-right-navigation">Go to next / previous page</div>
                    <div class="navigation-arrow">
                        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="border-under-contact-title"></div>
                <div id="google-map"></div>
                <div class="pt-title contact">Contact Info</div>
                <div class="contact-description">
                	<?php echo apply_filters('the_content', get_post_field('post_content', $contact_page_ID));?>
                </div>
                <div class="contact-data">
                    <div class="contact address">
                        <i class="fa fa-home contact" aria-hidden="true"></i>
                        <div class="text-address"><?php echo get_field('contact_address');?></div>
                    </div>
                    <div class="contact phone">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="text-phone"><?php echo get_field('contact_telephone_number');?></div>
                    </div>
                    <div class="contact mail">
                        <i class="fa fa-envelope fa-fw contact" aria-hidden="true"></i>
                        <div class="text-mail"><?php echo get_field('contact_e-mail');?></div>
                    </div>
                </div>
                <div class="border-under-contact-title second"></div>
                <div class="pt-title contact message">Send us a message</div>
                <!--<div class="message-data">
                    <input type="text"  class="message-name" placeholder="name">
                    <input type="text"  class="message-mail" placeholder="e-mail">
                    <input type="text"  class="message-website" placeholder="website">
                </div>
                <textarea class="message-main-text" rows="11" cols="49"></textarea>
                <a class="send-message" href="javascript:void(0)">
                    <div class="send-message-button">Send Message</div>
                </a>-->
			<?php echo do_shortcode(apply_filters("the_content", "[contact-form-7 id='34']"));?>
            </div>
            </div>
            <?php get_footer();?>