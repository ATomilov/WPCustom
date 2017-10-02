<?php if (comments_open()) { ?>
	<div class="pt-title single-post message"><?php echo strtolower(comments_number());?></div>
	<?php if (get_comments_number() == 0) { ?>

	<?php } else { ?>
			<?php
			function custom_comment($comment, $args, $depth){
			$GLOBALS['comment'] = $comment; ?>
					<div class="comment-pattern">
						<div class="border-for-avatar">
							<div class="avatar">
                                <img src="<?php echo get_avatar_url($comment);?>">
							</div>
						</div>
						<div class="comment-info">
							<div class="nickname"><?php echo get_comment_author_link();?></div>
							<div class="time-comment"><?php echo time_ago(get_comment_time('U')); ?></div>
							<div class="comment-text"><?php echo get_comment_text();?></div>
							<?php if($depth!=$args['max_depth']){?>
								<div class="reply-button">
									<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
								</div>
							<?php }?>
						</div>
					</div>
				<div class="border-under-comment first"></div>
				<?php }
				$args = array(
					'reply_text' => 'reply',
					'callback' => 'custom_comment'
				);
				wp_list_comments($args);
				?>
	<?php } ?>
	<?php custom_comment_form();?>
<?php } else { ?>
	<h3>Обсуждения закрыты для данной страницы</h3>
<?php }
?>