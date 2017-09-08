<?php
get_header();
get_sidebar();
$blog_page_obj = get_page_by_title( 'Blog', '', 'page' );
$single_posts_image_id = get_field('blog_posts_thumb',get_the_ID());
$single_posts_image_url = wp_get_attachment_image_src($single_posts_image_id,"blog's-post-thumb");
?>
	<div class="content-contact">
		<div class="content-container-contact">
			<div class="work-content">
				<div class="work-title"><?php echo strtoupper($blog_page_obj -> post_title);?></div>
				<?php get_template_part('navigation');?>
				<div class="border-under-contact-title"></div>
				<div class="single-post-image">
					<img src="<?php echo $single_posts_image_url[0];?>">
				</div>
				<div class="standart-post-title-info-and-description single-post">
					<div class="standart-post-title single-post"><?php the_title();?></div>
					<div class="standart-post-info">
						<div class="standart-post-date-and-calendar">
							<i class="fa fa-calendar-o blog" aria-hidden="true"></i>
							<div class="standart-post-date"><?php the_date('j F');?></div>
						</div>
						<div class="standart-post-user-icon-and-nickname">
							<i class="fa fa-user blog" aria-hidden="true"></i>
							<div class="standart-post-nickname"><?php the_author();?></div>
						</div>
						<div class="standart-post-comments">
							<i class="fa fa-comments blog" aria-hidden="true"></i>
							<div class="standart-post-number-of-comments"><?php echo strtolower(comments_number());?></div>
						</div>
					</div>
					<div class="standart-post-description">
						<p>This is Photoshop's version of Lorem Ipsum. Proin gravida
							nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
							quis bibendum auctor, nisi elit consequat ipsum, n ec sagittis
							sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
							a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a
							odio tincidunt auctor a ornare odio.</p>

						<p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu
							ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.
							Duis sed odio sit amet nibh vulputate cursus. Proin gravida nibh vel velit auctor aliquet.
							Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
							sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi
							accumsan ipsum velit.</p>
					</div>
				</div>
				<div class="border-under-single-post-text"></div>
				<div class="pt-title single-post message"><?php echo strtolower(comments_number());?></div>
				<div class="comment-pattern">
					<div class="border-for-avatar">
						<div class="avatar">
							<img src="./img/62x62.png">
						</div>
					</div>
					<div class="comment-info">
						<div class="nickname">Collis Ta'eed</div>
						<div class="time-comment">47 minutes ago</div>
						<div class="comment-text">Testing the comments</div>
						<a class="reply" href="javascript:void(0)">
							<div class="reply-button">reply</div>
						</a>
					</div>
				</div>
				<div class="border-under-comment first"></div>
				<div class="comment-pattern second">
					<div class="border-for-avatar">
						<div class="avatar">
							<img src="./img/62x62.png">
						</div>
					</div>
					<div class="comment-info">
						<div class="nickname">Collis Ta'eed</div>
						<div class="time-comment">47 minutes ago</div>
						<div class="comment-text">Testing the comments</div>
						<a class="reply" href="javascript:void(0)">
							<div class="reply-button">reply</div>
						</a>
					</div>
				</div>
				<div class="border-under-comment second"></div>
				<div class="comment-pattern third">
					<div class="border-for-avatar">
						<div class="avatar">
							<img src="./img/62x62.png">
						</div>
					</div>
					<div class="comment-info">
						<div class="nickname">Collis Ta'eed</div>
						<div class="time-comment">47 minutes ago</div>
						<div class="comment-text">Testing the comments</div>
						<a class="reply" href="javascript:void(0)">
							<div class="reply-button">reply</div>
						</a>
					</div>
				</div>
				<div class="border-under-comment third"></div>
				<div class="comment-pattern">
					<div class="border-for-avatar">
						<div class="avatar">
							<img src="./img/62x62.png">
						</div>
					</div>
					<div class="comment-info">
						<div class="nickname">Collis Ta'eed</div>
						<div class="time-comment">47 minutes ago</div>
						<div class="comment-text">Testing the comments</div>
						<a class="reply" href="javascript:void(0)">
							<div class="reply-button">reply</div>
						</a>
					</div>
				</div>
				<div class="border-under-comment forth"></div>
				<div class="pt-title contact message">Leave a comment</div>
				<div class="message-data">
					<input type="text"  class="message-name" placeholder="name">
					<input type="text"  class="message-mail" placeholder="e-mail">
					<input type="text"  class="message-website" placeholder="website">
				</div>
				<textarea class="message-main-text" rows="11" cols="49"></textarea>
				<a class="send-message" href="javascript:void(0)">
					<div class="send-message-button">Add a Comment</div>
				</a>

			</div>
		</div>
<?php get_footer();?>