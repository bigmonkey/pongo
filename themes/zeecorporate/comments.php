<?php // Do not delete these lines
	if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	
	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>
	<h4 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses');?> <?php printf('to &#8220;%s&#8221;', the_title('', '', false)); ?></h4>

	<div class="navigation com first">
		<?php previous_comments_link('&laquo;'); ?>
		<?php paginate_comments_links(array('type' => '', 'prev_next' => false)); ?>
		<?php next_comments_link('&raquo;'); ?>
	</div>

	<ol class="commentlist">
		<?php wp_list_comments( $args ); ?> 
	</ol>

	<div class="navigation com">
		<?php previous_comments_link('&laquo;'); ?>
		<?php paginate_comments_links(array('type' => '', 'prev_next' => false)); ?>
		<?php next_comments_link('&raquo;'); ?>
	</div>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>

	 <?php else : // comments are closed ?>

		<p class="nocomments"></p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

	<p><h4><?php comment_form_title('Add A New Comment', 'Leave a Reply for %s'); ?></h4>
	<div id="cancel-comment-reply">
		<small><?php cancel_comment_reply_link() ?></small>
	</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>

	<p><?php printf('You must be <a href="%s">logged in</a> to post a comment.', get_option('siteurl') . '/wp-login.php?redirect_to=' . urlencode(get_permalink())); ?></p>

<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

		<p><?php printf('Logged in as <a href="%1$s">%2$s</a>.', get_option('siteurl') . '/wp-admin/profile.php', $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out</a></p>

<?php else : ?>

		<p>
			<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
			<label for="author">Name (Optional) <?php if ($req) echo '<span style="color:red"></span>'; ?></label>
		</p>

<?php endif; ?>

		<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

		<?php do_action('comment_form', $post->ID); ?>

		<p>
			<input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment', 'kubrick'); ?>" />
			<?php comment_id_fields(); ?>
		</p>

	</form>

<?php endif; // If registration required and not logged in ?>

</div>

<?php endif; // if you delete this the sky will fall on your head ?>
<?php if (defined("STARRATING_INSTALLED")) : ?>
<div style="float: right">
<?php  wp_gdsr_comment_integrate_multi_result(get_comment_ID(), 4, 0, "crystal", 16); ?>
</div>
<?php endif; ?>