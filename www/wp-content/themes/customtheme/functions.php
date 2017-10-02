<?php
global $marker_map_url;
$marker_map_url = get_template_directory_uri();
register_nav_menu('leftsidebar','Left Sidebar Menu');
//add_theme_support('menus');

function enqueue_styles() {
	wp_enqueue_style('main-style', get_stylesheet_uri());
	//wp_enqueue_style('main-style');
	wp_enqueue_style('font-style', get_template_directory_uri() . '/css/font-awesome.min.css');
	//wp_enqueue_style('font-style');
	wp_enqueue_style('owl-style', get_template_directory_uri() . '/css/owl.carousel.min.css');
	//wp_enqueue_style('owl-style');
	wp_enqueue_style('owl-default-style', get_template_directory_uri() . '/css/owl.theme.default.min.css');
	//wp_enqueue_style('owl-default-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts() {
	wp_enqueue_script('jquery-3.2.1.min', get_template_directory_uri() . '/js/jquery-3.2.1.min.js');
	//wp_enqueue_script('jquery-3.1.1');
	wp_enqueue_script('googleapis', get_template_directory_uri() . '/js/googleapis.js');
	//wp_enqueue_script('googleapis');
	wp_enqueue_script('isotope.pkgd', get_template_directory_uri() . '/js/isotope.pkgd.js');
	//wp_enqueue_script('isotope.pkgd');
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
	//wp_enqueue_script('main');
	wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js');
	//wp_enqueue_script('owl.carousel');
	wp_enqueue_script('owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js');
	//wp_enqueue_script('owl.carousel.min');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function add_post_formats(){
	add_theme_support('post-formats', array('link', 'gallery', 'quote'));
}

add_action('after_setup_theme', 'add_post_formats');

add_action('init', 'resume_post_type');
function resume_post_type(){
	register_post_type('resume', array(
		'labels'             => array(
			'name'               => 'Resume',
			'singular_name'      => 'Resume',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new resume',
			'edit_item'          => 'Edit resume',
			'new_item'           => 'New resume',
			'view_item'          => 'View resume',
			'search_items'       => 'Search resume',
			'not_found'          => 'Resume not found',
			'not_found_in_trash' => 'Resume not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Resume'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'menu_icon'			 		 => 'dashicons-clipboard',
		'supports'           => array('title','editor','author','thumbnail','excerpt')
	) );
}

add_action( 'init', 'resume_taxonomies', 0 );
function resume_taxonomies() {
    register_taxonomy(
			'resume_types',
			'resume',
			array(
				'hierarchical' => true,
				'label' => 'Resume types',
				'query_var' => true,
				'rewrite' => true
			) );
}

add_action('init', 'work_post_type');
function work_post_type(){
	register_post_type('work', array(
		'labels'             => array(
			'name'               => 'Work',
			'singular_name'      => 'Work',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new work',
			'edit_item'          => 'Edit work',
			'new_item'           => 'New work',
			'view_item'          => 'View work',
			'search_items'       => 'Search work',
			'not_found'          => 'Work not found',
			'not_found_in_trash' => 'Work not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Work'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'			 		 => 'dashicons-hammer',
		'supports'           => array('title','editor','author','thumbnail','excerpt')
	) );
}

add_action( 'init', 'work_taxonomies', 0 );
function work_taxonomies() {
    register_taxonomy(
			'work_types',
			'work',
			array(
				'hierarchical' => true,
				'label' => 'Work types',
				'query_var' => true,
				'rewrite' => true
			) );
}

add_image_size('portfolio-thumb', 200, 160, true);

add_image_size('avatar-thumb', 120, 120, true);

add_image_size("blog's-post-thumb", 265, 194, true);

if( function_exists('acf_add_options_page') ) {

	$parent = acf_add_options_page('Theme Settings');

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Left Sidebar Avatar Settings',
		'menu_title'	=> 'Avatar Settings',
		'parent_slug'	=> $parent['menu_slug'],
		'position' => false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> $parent['menu_slug'],
		'position' => false
	));
}

function words_limit($input_text, $limit, $end_str = '') {
	$input_text = strip_tags($input_text);
	$words = explode(' ', $input_text);
	if ($limit < 1 || sizeof($words) <= $limit) {
		return $input_text;
	}
	$words = array_slice($words, 0, $limit);
	$out = implode(' ', $words);
	return $out.$end_str;
}

define( TIMEBEFORE_NOW,         'now' );
define( TIMEBEFORE_MINUTE,      '{num} minute ago' );
define( TIMEBEFORE_MINUTES,     '{num} minutes ago' );
define( TIMEBEFORE_HOUR,        '{num} hour ago' );
define( TIMEBEFORE_HOURS,       '{num} hours ago' );
define( TIMEBEFORE_YESTERDAY,   'yesterday' );
define( TIMEBEFORE_FORMAT,      '%e %b' );
define( TIMEBEFORE_FORMAT_YEAR, '%e %b, %Y' );

function time_ago( $time )
{
	$out    = '';
	$now    = time();
	$diff   = $now - $time;
	if( $diff < 60 )
		return TIMEBEFORE_NOW;
	elseif( $diff < 3600 )
		return str_replace( '{num}', ( $out = round( $diff / 60 ) ), $out == 1 ? TIMEBEFORE_MINUTE : TIMEBEFORE_MINUTES );
	elseif( $diff < 3600 * 24 )
		return str_replace( '{num}', ( $out = round( $diff / 3600 ) ), $out == 1 ? TIMEBEFORE_HOUR : TIMEBEFORE_HOURS );
	elseif( $diff < 3600 * 24 * 2 )
		return TIMEBEFORE_YESTERDAY;
	else
		return strftime( date( 'Y', $time ) == date( 'Y' ) ? TIMEBEFORE_FORMAT : TIMEBEFORE_FORMAT_YEAR, $time );
}

function custom_comment_form( $args = array(), $post_id = null ) {
	if ( null === $post_id )
		$post_id = get_the_ID();
	if ( ! comments_open( $post_id ) ) {
		do_action( 'comment_form_comments_closed' );
		return;
	}

	$commenter = wp_get_current_commenter();
	$user = wp_get_current_user();
	$user_identity = $user->exists() ? $user->display_name : '';

	$args = wp_parse_args( $args );
	if ( ! isset( $args['format'] ) )
		$args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';

	$req      = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$html_req = ( $req ? " required='required'" : '' );
	$html5    = 'html5' === $args['format'];
	$fields   =  array(
		'author' => '<input name="author" type="text"  class="message-name" placeholder="name" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' /></p>',
		'email'  => '<input name="email" type="text"  class="message-mail" placeholder="e-mail"' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></p>',
		'website'    => '<input name="url" type="text"  class="message-website" placeholder="website"' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" /></p>',
	);
	$fields = apply_filters( 'comment_form_default_fields', $fields );
	$defaults = array(
		'fields'               => $fields,
		'comment_field'        => '<textarea textarea id="comment" name="comment" class="message-main-text" rows="11" cols="49" aria-required="true" required="required"></textarea>',
		'must_log_in'          => '<p class="must-log-in">' . sprintf(
				__( 'You must be <a href="%s">logged in</a> to post a comment.' ),
				wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) )
			) . '</p>',
		'logged_in_as'         => '<p class="logged-in-as">' . sprintf(
				__( '<a href="%1$s" aria-label="%2$s">Logged in as %3$s</a>. <a href="%4$s">Log out?</a>' ),
				get_edit_user_link(),
				esc_attr( sprintf( __( 'Logged in as %s. Edit your profile.' ), $user_identity ) ),
				$user_identity,
				wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) )
			) . '</p>',
        'comment_notes_after'  => '',
		'action'               => site_url( '/wp-comments-post.php' ),
		'id_form'              => 'commentform',
		'id_submit'            => 'submit',
		'class_form'           => 'comment-form',
		'class_submit'         => 'submit',
		'name_submit'          => 'submit',
		'title_reply'          => '<div class="pt-title contact message">Leave a comment</div>',
		'title_reply_to'       => '<div class="pt-title contact message">Leave a Reply to %s</div>',
		'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
		'title_reply_after'    => '</h3>',
		'cancel_reply_before'  => ' <small>',
		'cancel_reply_after'   => '</small>',
		'cancel_reply_link'    => __( 'Cancel reply' ),
		'label_submit'         => __( 'Add a Comment' ),
		'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="send-message-button" value="%4$s" />',
		'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
		'format'               => 'xhtml',
	);
	$args = wp_parse_args( $args, apply_filters( 'comment_form_defaults', $defaults ) );
	$args = array_merge( $defaults, $args );
	do_action( 'comment_form_before' );
	?>
    <div id="respond" class="comment-respond">
		<?php
		echo $args['title_reply_before'];
		comment_form_title( $args['title_reply'], $args['title_reply_to'] );
		echo $args['cancel_reply_before'];
		cancel_comment_reply_link( $args['cancel_reply_link'] );
		echo $args['cancel_reply_after'];
		echo $args['title_reply_after'];
		if ( get_option( 'comment_registration' ) && !is_user_logged_in() ) :
			echo $args['must_log_in'];
			do_action( 'comment_form_must_log_in_after' );
		else : ?>
            <form action="<?php echo esc_url( $args['action'] ); ?>" method="post" id="<?php echo esc_attr( $args['id_form'] ); ?>" class="<?php echo esc_attr( $args['class_form'] ); ?>"<?php echo $html5 ? ' novalidate' : ''; ?>>
				<?php
				do_action( 'comment_form_top' );

				if ( is_user_logged_in() ) :
					echo apply_filters( 'comment_form_logged_in', $args['logged_in_as'], $commenter, $user_identity );
					do_action( 'comment_form_logged_in_after', $commenter, $user_identity );
				else :
					echo $args['comment_notes_before'];
				endif;
				$comment_fields = array( 'comment' => $args['comment_field'] ) + (array) $args['fields'];
				$comment_fields = apply_filters( 'comment_form_fields', $comment_fields );
				$comment_field_keys = array_diff( array_keys( $comment_fields ), array( 'comment' ) );
				$first_field = reset( $comment_field_keys );
				$last_field  = end( $comment_field_keys );
				foreach ( $comment_fields as $name => $field ) {
					if ( 'comment' === $name ) {
						echo apply_filters( 'comment_form_field_comment', $field );
						echo $args['comment_notes_after'];
					} elseif ( ! is_user_logged_in() ) {
						if ( $first_field === $name ) {
							do_action( 'comment_form_before_fields' );
						}
						echo apply_filters( "comment_form_field_{$name}", $field ) . "\n";
						if ( $last_field === $name ) {
							do_action( 'comment_form_after_fields' );
						}
					}
				}

				$submit_button = sprintf(
					$args['submit_button'],
					esc_attr( $args['name_submit'] ),
					esc_attr( $args['id_submit'] ),
					esc_attr( $args['class_submit'] ),
					esc_attr( $args['label_submit'] )
				);
				$submit_button = apply_filters( 'comment_form_submit_button', $submit_button, $args );
				$submit_field = sprintf(
					$args['submit_field'],
					$submit_button,
					get_comment_id_fields( $post_id )
				);
				echo apply_filters( 'comment_form_submit_field', $submit_field, $args );
				do_action( 'comment_form', $post_id );
				?>
            </form>
		<?php endif; ?>
    </div><!-- #respond -->
	<?php
	do_action( 'comment_form_after' );
}

?>
