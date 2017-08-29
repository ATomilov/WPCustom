<?php
    /*
    Template Name: Work Page Template
    */
get_header();
get_sidebar();
?>
<div class="content-work">
            <div class="content-container-work">
                <div class="work-content">
                    <div class="work-title">PORTFOLIO</div>
                    <div class="top-right-navigation">
                        <div class="text-top-right-navigation">Go to next / previous page</div>
                        <div class="navigation-arrow">
                            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="border-under-work-title"></div>
                    <div class="grid-work">
                        <div class="grid-work-menu-list">
                            <a class="all-click filter-portfolio" href="javascript:void(0)" class="filter-portfolio">
                                <div class="grid-work-all">
                                    <i class="fa fa-th" aria-hidden="true"></i>
                                    <div class="grid-work-all-text">All</div>
                                </div>
                            </a>
                            <a class="branding-click filter-portfolio" href="javascript:void(0)">
                                <div class="grid-work-branding">Branding</div>
                            </a>
                            <a class="wallpapers-click filter-portfolio" href="javascript:void(0)">
                                <div class="grid-work-wallpapers">Wallpapers</div>
                            </a>
                            <a class="photography-click filter-portfolio" href="javascript:void(0)">
                                <div class="grid-work-photography">Photography</div>
                            </a>
                            <a class="illustrations-click filter-portfolio" href="javascript:void(0)">
                                <div class="grid-work-illustrations">Illustrations</div>
                            </a>
                            <a class="logos-click filter-portfolio" href="javascript:void(0)">
                                <div class="grid-work-logos">Logos</div>
                            </a>
                        </div>
                        <div class="grid-work-items">
                            <div class="grid-work-item branding">
                                <img src="<?php echo get_template_directory_uri();?>/img/200x160.png">
                            </div>
                            <div class="grid-work-item wallpapers">
                                <img src="<?php echo get_template_directory_uri();?>/img/200x160.png">
                            </div>
                            <div class="grid-work-item branding">  <!-- last -->
                                <img src="<?php echo get_template_directory_uri();?>/img/200x160.png">
                            </div>
                            <div class="grid-work-item wallpapers">
                                <img src="<?php echo get_template_directory_uri();?>/img/200x160.png">
                            </div>
                            <div class="grid-work-item branding">
                                <img src="<?php echo get_template_directory_uri();?>/img/200x160.png">
                            </div>
                            <div class="grid-work-item photography"> <!-- last -->
                                <img src="<?php echo get_template_directory_uri();?>/img/200x160.png">
                            </div>
                            <div class="grid-work-item illustrations">
                                <img src="<?php echo get_template_directory_uri();?>/img/200x160.png">
                            </div>
                            <div class="grid-work-item illustrations">
                                <img src="<?php echo get_template_directory_uri();?>/img/200x160.png">
                            </div>
                            <div class="grid-work-item photography"> <!-- last -->
                                <img src="<?php echo get_template_directory_uri();?>/img/200x160.png">
                            </div>
                            <div class="grid-work-item wallpapers">
                                <img src="<?php echo get_template_directory_uri();?>/img/200x160.png">
                            </div>
                            <div class="grid-work-item logos">
                                <img src="<?php echo get_template_directory_uri();?>/img/200x160.png">
                            </div>
                            <div class="grid-work-item logos"> <!-- last -->
                                <img src="<?php echo get_template_directory_uri();?>/img/200x160.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_footer();?>