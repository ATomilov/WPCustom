<?php
    /*
    Template Name: Resume_Page_Template
    */
get_header();
get_sidebar();
$resume_page_obj = get_page_by_title( 'Resume', '', 'page' );
$args = array(
	'taxonomy' => 'resume_types',
	'hide_empty' => false,
);
$terms = get_terms( $args );
$the_query = new WP_Query( array(
	'post_type' => 'resume',
	'orderby' => 'date',
	'order' => 'ASC',
	'tax_query' => array(
		array (
			'taxonomy' => 'resume_types',
			'field' => 'slug',
			'terms' => 'education',
            )
        )
    )
);
$skills_query = new WP_Query( array(
	'post_type' => 'resume',
	'orderby' => 'date',
	'order' => 'ASC',
	'tax_query' => array(
		array (
			'taxonomy' => 'resume_types',
			'field' => 'slug',
			'terms' => 'skills',
			)
		)
	)
);
$services_query = new WP_Query( array(
		'post_type' => 'resume',
		'orderby' => 'date',
		'order' => 'ASC',
		'tax_query' => array(
			array (
				'taxonomy' => 'resume_types',
				'field' => 'slug',
				'terms' => 'services',
			)
		)
	)
);
$work_experience_query = new WP_Query( array(
		'post_type' => 'resume',
		'orderby' => 'date',
		'order' => 'ASC',
		'tax_query' => array(
			array (
				'taxonomy' => 'resume_types',
				'field' => 'slug',
				'terms' => 'work_experience',
			)
		)
	)
);

?>
<div class="content-resume">
        <div class="content-container-resume">
            <div class="work-content">
                <div class="work-title">
                    <?php echo strtoupper($resume_page_obj -> post_title);?>
                </div>
                <div class="top-right-navigation">
                    <div class="text-top-right-navigation">Go to next / previous page</div>
                    <div class="navigation-arrow">
                        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="border-under-resume-title"></div>
                <div class="pt-title"><?php echo $terms[0] -> name;?></div>
                <div class="border-under-ed-title"></div>
	            <?php while ( $the_query->have_posts() ) :
	            $the_query->the_post();?>
                <div class="education-item">
                    <div class="education-item-title"><?php echo get_field('title_education_and_work');?></div>
                    <div class="education-item-date-and-calendar">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <div class="education-item-date"><?php echo get_field('start_year');?> -
                            <?php echo get_field('end_year');?></div>
                    </div>
                    <div class="education-item-description"><?php echo get_field('description_e_and_we');?></div>
                </div>
                <div class="border-under-education-item<?php if
                (($the_query->current_post + 1) == ($the_query->post_count))
                    echo ' last'; ?>"></div>
	            <?php endwhile;
	            wp_reset_postdata();?>
                <div class="pt-title"><?php echo $terms[2] -> name;?></div>
                <div class="border-under-skills-title"></div>
                <?php while ( $skills_query->have_posts() ) :
	            $skills_query->the_post();?>
                <div class="progress-bar-with-title<?php if
                (($skills_query->current_post + 1) == ($skills_query->post_count))
                    echo ' last'; ?>">
                    <div class="progress-bar-title-and-percent">
                        <div class="progress-bar-title"><?php echo get_field('title_skill');?></div>
                        <div class="progress-bar-percent"><?php echo get_field('percent_skill');?>%</div>
                    </div>
                    <div class="progress-bar">
                        <span class="progress-bar-fill" style="width: <?php echo get_field('percent_skill');?>%"></span>
                    </div>
                </div>
                <?php endwhile;
                wp_reset_postdata();?>
                <div class="border-under-education-item last"></div>
                <div class="pt-title"><?php echo $terms[1] -> name;?></div>
                <div class="border-under-services-title"></div>
                <div class="services-items">
                    <?php while ( $services_query->have_posts() ) :
	                $services_query->the_post();?>
                    <div class="services-item-with-title">
                        <i class="fa <?php echo get_field('icon_services');?>" aria-hidden="true"></i>
                        <div class="border-under-services-item-image"></div>
                        <div class="services-item-title"><?php echo get_field('title_services');?></div>
                    </div>
                    <?php endwhile;
                    wp_reset_postdata();?>
                </div>
                <div class="border-under-education-item last services"></div>
                <div class="pt-title work"><?php echo $terms[3] -> name;?></div>
                <div class="border-under-work-exp-title"></div>
                <?php while ( $work_experience_query->have_posts() ) :
	            $work_experience_query->the_post();?>
                <div class="education-item">
                <div class="education-item-title"><?php echo get_field('title_education_and_work');?></div>
                <div class="education-item-date-and-calendar">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <div class="education-item-date"><?php echo get_field('start_year');?> -
                        <?php echo get_field('end_year');?></div>
                </div>
                <div class="education-item-description<?php if
                (($work_experience_query->current_post + 1) == ($work_experience_query->post_count))
                    echo ' last'; ?>">
                    <?php echo get_field('description_e_and_we');?>
                </div>
                </div>
	            <?php if
                (($work_experience_query->current_post + 1) != ($work_experience_query->post_count))
	            {?>
                <div class="border-under-education-item"></div>
                <?php }?>
	            <?php endwhile;
	            wp_reset_postdata();?>
            </div>
        </div>
<?php get_footer();?>