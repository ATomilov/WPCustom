<?php get_header(); ?>
<?php get_sidebar(); 
$front_page_obj = get_page_by_title( 'Profile', '', 'page' );
$front_page_ID = $front_page_obj -> ID;
remove_filter( 'the_content', 'wpautop' );
?>
<div class="content">
            <div class="content-container">
                <div class="profile-content">
                    <div class="welcome-text">
                        Hello, I am <div class="welcome-text-name">Robb Armstrong</div> Designer and Front-end Developer
                    </div>
                    <div class="border-under-welcome-text"></div>
                    <div class="exp-text">
                         <?php echo apply_filters('the_content', get_post_field('post_content', $front_page_ID));?>
                    </div>
                    <div class="border-under-exp-text"></div>
                    <div class="pt-title">Personal Info</div>
                    <div class="border-under-pi-title"></div>
                    <div class="data-inputs">
                        <label>
                            <span class="label-data-inputs">name</span>
                            <input type="text" class="data-text-inputs name" placeholder="Robb Armstrong">
                        </label>
                    </div>
                    <div class="data-inputs">
                        <label>
                            <span class="label-data-inputs">date of birth</span>
                            <input type="text" class="data-text-inputs birth" placeholder="September 06, 1976">
                        </label>
                    </div>
                    <div class="data-inputs">
                        <label>
                            <span class="label-data-inputs">e-mail</span>
                            <input type="text" class="data-text-inputs e-mail" placeholder="info@yourdomain.com">
                        </label>
                    </div>
                    <div class="data-inputs">
                        <label>
                            <span class="label-data-inputs">address</span>
                            <input type="text" class="data-text-inputs address" placeholder="121 King St, Melbourne VIC">
                        </label>
                    </div>
                    <div class="data-inputs">
                        <label>
                            <span class="label-data-inputs">phone</span>
                            <input type="text" class="data-text-inputs phone" placeholder="012-3456-7890">
                        </label>
                    </div>
                    <div class="data-inputs last">
                        <label>
                            <span class="label-data-inputs">website</span>
                            <input type="text" class="data-text-inputs website" placeholder="www.themeforest.net">
                        </label>
                    </div>
                </div>
            </div>
            <?php get_footer();?>