<?php
    /*
    Template Name: Work Page Template
    */
get_header();
get_sidebar();
$work_page_obj = get_page_by_title( 'Work', '', 'page' );
$args = array(
	'taxonomy' => 'work_types',
	'hide_empty' => false,
);
$terms_work = get_terms( $args );
$branding_query = new WP_Query( array(
		'post_type' => 'work',
		'orderby' => 'date',
		'order' => 'ASC',
		'tax_query' => array(
			array (
				'taxonomy' => 'work_types',
				'field' => 'slug',
				'terms' => 'branding',
			)
		)
	)
);
$illustrations_query = new WP_Query( array(
		'post_type' => 'work',
		'orderby' => 'date',
		'order' => 'ASC',
		'tax_query' => array(
			array (
				'taxonomy' => 'work_types',
				'field' => 'slug',
				'terms' => 'illustrations',
			)
		)
	)
);
$logos_query = new WP_Query( array(
		'post_type' => 'work',
		'orderby' => 'date',
		'order' => 'ASC',
		'tax_query' => array(
			array (
				'taxonomy' => 'work_types',
				'field' => 'slug',
				'terms' => 'logos',
			)
		)
	)
);
$photography_query = new WP_Query( array(
		'post_type' => 'work',
		'orderby' => 'date',
		'order' => 'ASC',
		'tax_query' => array(
			array (
				'taxonomy' => 'work_types',
				'field' => 'slug',
				'terms' => 'photography',
			)
		)
	)
);
$wallpapers_query = new WP_Query( array(
		'post_type' => 'work',
		'orderby' => 'date',
		'order' => 'ASC',
		'tax_query' => array(
			array (
				'taxonomy' => 'work_types',
				'field' => 'slug',
				'terms' => 'wallpapers',
			)
		)
	)
);
?>
<div class="content-work">
            <div class="content-container-work">
                <div class="work-content">
                    <div class="work-title">PORTFOLIO</div>
	                <?php get_template_part('navigation');?>
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
                                <div class="grid-work-branding"><?php echo $terms_work[0] -> name;?></div>
                            </a>
                            <a class="wallpapers-click filter-portfolio" href="javascript:void(0)">
                                <div class="grid-work-wallpapers"><?php echo $terms_work[4] -> name;?></div>
                            </a>
                            <a class="photography-click filter-portfolio" href="javascript:void(0)">
                                <div class="grid-work-photography"><?php echo $terms_work[3] -> name;?></div>
                            </a>
                            <a class="illustrations-click filter-portfolio" href="javascript:void(0)">
                                <div class="grid-work-illustrations"><?php echo $terms_work[1] -> name;?></div>
                            </a>
                            <a class="logos-click filter-portfolio" href="javascript:void(0)">
                                <div class="grid-work-logos"><?php echo $terms_work[2] -> name;?></div>
                            </a>
                        </div>
                        <div class="grid-work-items">
                            <?php while ( $branding_query->have_posts() ) :
                                $branding_query->the_post();
                                $branding_id = $branding_query->ID();
                                $branding_image_id = get_field('image_to_portfolio',$branding_id);
                                $branding_image_url = wp_get_attachment_image_src($branding_image_id,'portfolio-thumb');
	                            $terms = get_the_terms($branding_id, 'work_types');?>
                                    <div class="grid-work-item branding">
                                        <img src="<?php echo $branding_image_url[0];?>">
                                        <div class="info-picture-portfolio">
                                            <div class="picture-title">
			                                    <?php echo the_title();?>
                                            </div>
                                            <div class="taxonomy-text">
			                                    <?php if(count($terms)!=1) {
				                                    foreach ( $terms as $term ) {
					                                    echo $term->slug;
					                                    echo ', ';
				                                    }
			                                    }
			                                    else {
			                                        echo $terms[0]->slug;
                                                }?>
                                            </div>
                                        </div>
                                    </div>
                            <?php endwhile;
                            wp_reset_postdata();?>
	                        <?php while ( $wallpapers_query->have_posts() ) :
		                        $wallpapers_query->the_post();
		                        $wallpapers_id = $wallpapers_query->ID();
		                        $wallpapers_image_id = get_field('image_to_portfolio',$wallpapers_id);
		                        $wallpapers_image_url = wp_get_attachment_image_src($wallpapers_image_id,'portfolio-thumb');
		                        $terms = get_the_terms($wallpapers_id, 'work_types');?>
                                    <div class="grid-work-item wallpapers">
                                        <img src="<?php echo $wallpapers_image_url[0];?>">
                                        <div class="info-picture-portfolio">
                                            <div class="picture-title">
			                                    <?php echo the_title();?>
                                            </div>
                                            <div class="taxonomy-text">
	                                            <?php if(count($terms)!=1) {
		                                            foreach ( $terms as $term ) {
			                                            echo $term->slug;
			                                            echo ', ';
		                                            }
	                                            }
	                                            else {
		                                            echo $terms[0]->slug;
	                                            }?>
                                            </div>
                                        </div>
                                    </div>
	                        <?php endwhile;
	                        wp_reset_postdata();?>
	                        <?php while ( $photography_query->have_posts() ) :
		                        $photography_query->the_post();
		                        $photography_id = $photography_query->ID();
		                        $photography_image_id = get_field('image_to_portfolio',$photography_id);
		                        $photography_image_url = wp_get_attachment_image_src($photography_image_id,'portfolio-thumb');
		                        $terms = get_the_terms($photography_id, 'work_types');?>
                                <div class="grid-work-item photography">
                                    <img src="<?php echo $photography_image_url[0];?>">
                                    <div class="info-picture-portfolio">
                                        <div class="picture-title">
			                                <?php echo the_title();?>
                                        </div>
                                        <div class="taxonomy-text">
	                                        <?php if(count($terms)!=1) {
		                                        foreach ( $terms as $term ) {
			                                        echo $term->slug;
			                                        echo ', ';
		                                        }
	                                        }
	                                        else {
		                                        echo $terms[0]->slug;
	                                        }?>
                                        </div>
                                    </div>
                                </div>
	                        <?php endwhile;
	                        wp_reset_postdata();?>
	                        <?php while ( $illustrations_query->have_posts() ) :
		                        $illustrations_query->the_post();
		                        $illustrations_id = $illustrations_query->ID();
		                        $illustrations_image_id = get_field('image_to_portfolio',$illustrations_id);
		                        $illustrations_image_url = wp_get_attachment_image_src($illustrations_image_id,'portfolio-thumb');
		                        $terms = get_the_terms($illustrations_id, 'work_types');?>
                                <div class="grid-work-item illustrations">
                                    <img src="<?php echo $illustrations_image_url[0];?>">
                                    <div class="info-picture-portfolio">
                                        <div class="picture-title">
			                                <?php echo the_title();?>
                                        </div>
                                        <div class="taxonomy-text">
	                                        <?php if(count($terms)!=1) {
		                                        foreach ( $terms as $term ) {
			                                        echo $term->slug;
			                                        echo ', ';
		                                        }
	                                        }
	                                        else {
		                                        echo $terms[0]->slug;
	                                        }?>
                                        </div>
                                    </div>
                                </div>
	                        <?php endwhile;
	                        wp_reset_postdata();?>
	                        <?php while ( $logos_query->have_posts() ) :
		                        $logos_query->the_post();
		                        $logos_id = $logos_query->ID();
		                        $logos_image_id = get_field('image_to_portfolio',$logos_id);
		                        $logos_image_url = wp_get_attachment_image_src($logos_image_id,'portfolio-thumb');
		                        $terms = get_the_terms($logos_id, 'work_types');?>
                                <div class="grid-work-item logos">
                                    <img src="<?php echo $logos_image_url[0];?>">
                                    <div class="info-picture-portfolio">
                                        <div class="picture-title">
                                            <?php echo the_title();?>
                                        </div>
                                        <div class="taxonomy-text">
	                                        <?php if(count($terms)!=1) {
		                                        foreach ( $terms as $term ) {
			                                        echo $term->slug;
			                                        echo ', ';
		                                        }
	                                        }
	                                        else {
		                                        echo $terms[0]->slug;
	                                        }?>
                                        </div>
                                    </div>
                                </div>
	                        <?php endwhile;
	                        wp_reset_postdata();?>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_footer();?>
