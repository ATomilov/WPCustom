<?php
$menu_items = wp_get_nav_menu_items('Left Sidebar Menu');
?>

<div class="avatar-and-left-sidebar">
    <div class="avatar-bg">
        <div class="avatar-photo">
            <img src="<?php echo get_template_directory_uri();?>/img/test.png">
        </div>
    </div>
    <nav class="left-sidebar">
        <a class="<?php echo strtolower($menu_items[0]->title);?>-click tablink" href="<?php echo $menu_items[0]->url;?>">
            <div class="tabs">
                <div class="<?php echo strtolower($menu_items[0]->title);?>-tab"><?php echo $menu_items[0]->title;?></div>
                <i class="fa fa-user fa-fw" aria-hidden="true"></i>
            </div>
        </a>
        <a class="<?php echo strtolower($menu_items[1]->title);?>-click tablink" href="<?php echo $menu_items[1]->url;?>">
            <div class="tabs">
                <div class="<?php echo strtolower($menu_items[1]->title);?>-tab"><?php echo $menu_items[1]->title;?></div>
                <i class="fa fa-briefcase fa-fw" aria-hidden="true"></i>
            </div>
        </a>
        <a class="<?php echo strtolower($menu_items[2]->title);?>-click tablink" href="<?php echo $menu_items[2]->url;?>">
            <div class="tabs">
                <div class="<?php echo strtolower($menu_items[2]->title);?>-tab"><?php echo $menu_items[2]->title;?></div>
                <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>
            </div>
        </a>
        <a class="<?php echo strtolower($menu_items[3]->title);?>-click tablink" href="<?php echo $menu_items[3]->url;?>">
            <div class="tabs">
                <div class="<?php echo strtolower($menu_items[3]->title);?>-tab"><?php echo $menu_items[3]->title;?></div>
                <i class="fa fa-comment fa-fw blog" aria-hidden="true"></i>
            </div>
        </a>
        <a class="<?php echo strtolower($menu_items[4]->title);?>-click tablink" href="<?php echo $menu_items[4]->url;?>">
            <div class="tabs">
                <div class="<?php echo strtolower($menu_items[4]->title);?>-tab"><?php echo $menu_items[4]->title;?></div>
                <i class="fa fa-envelope fa-fw" aria-hidden="true"></i>
            </div>
        </a>
<!--        --><?php //foreach ($menu_items as $menu_item ){?>
<!--            <a class="--><?php //echo strtolower($menu_item->title);?><!---click tablink" href="--><?php //echo $menu_item->url;?><!--">-->
<!--                <div class="tabs">-->
<!--                    <div class="--><?php //echo strtolower($menu_item->title);?><!---tab">--><?php //echo $menu_item->title;?><!--</div>-->
<!--                    <i class="fa fa-envelope fa-fw" aria-hidden="true"></i>-->
<!--                </div>-->
<!--            </a>-->
<!--        --><?php //}?>
    </nav>
</div>