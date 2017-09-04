<?php
global $menu_items;
$menu_items = wp_get_nav_menu_items('Left Sidebar Menu');
?>

<div class="avatar-and-left-sidebar">
    <div class="avatar-bg">
        <div class="avatar-photo">
            <img src="<?php echo get_template_directory_uri();?>/img/test.png">
        </div>
    </div>
    <nav class="left-sidebar">
        <?php foreach ($menu_items as $menu_item ){?>
            <a class="<?php echo strtolower($menu_item->title);?>-click tablink" href="<?php echo $menu_item->url;?>">
                <div class="tabs">
                    <div class="<?php echo strtolower($menu_item->title);?>-tab"><?php echo $menu_item->title;?></div>
                    <i class="fa <?php echo get_field('icon_LSBMI',$menu_item->ID);?> fa-fw" aria-hidden="true"></i>
                </div>
            </a>
        <?php }?>
    </nav>
</div>