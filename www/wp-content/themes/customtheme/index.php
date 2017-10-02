<?php get_header(); ?>
<?php get_sidebar(); 

$personal_info = get_field('personal_info',$front_page_ID);
?>
<div class="content">
            <div class="content-container">
                <div class="profile-content">
                    <div class="welcome-text">
                        Hello, I am <div class="welcome-text-name">Robb Armstrong</div> Designer and Front-end Developer
                    </div>
                    <div class="border-under-welcome-text"></div>
                    <div class="exp-text">
                         <?php the_content(); ?>
                    </div>
                    <div class="border-under-exp-text"></div>
                    <div class="pt-title">Personal Info</div>
                    <div class="border-under-pi-title"></div>
                    <?php foreach ($personal_info as $personal){?>
                        <div class="data-inputs">
                            <label>
                                <span class="label-data-inputs"><?php echo $personal['personal_info_label'];?></span>
                                <input type="text" class="data-text-inputs name" value="<?php echo $personal['personal_info_text'];?>"readonly>
                            </label>
                        </div>
                    <?php }?>
                </div>
            </div>
            <?php get_footer();?>