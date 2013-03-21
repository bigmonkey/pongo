<?php get_header(); ?>
<div id="wrapper">
		<div id="content">
		
		<?php if (is_category()) { ?><h1 class="arh"><?php _e('Articles for', 'themezee_lang'); ?> <?php echo single_cat_title(); ?></h1>
		<?php } elseif (is_date()) { ?><h1 class="arh"><?php _e('Articles for', 'themezee_lang'); ?> <?php the_time(get_option('date_format')); ?></h1>
		<?php } elseif (is_author()) { ?><h1 class="arh"><?php _e('Articles for', 'themezee_lang'); ?> <?php the_author(); ?></h1>
		<?php } elseif (is_tag()) { ?><h1 class="arh"><?php _e('Tag Articles for', 'themezee_lang'); ?> <?php echo single_tag_title('', true); ?></h1>
		<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?><h1 class="arh"><?php _e('Archives', 'themezee_lang'); ?></h1><?php } ?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<div class="postmeta">
				 	<?php the_date('F j, Y'); ?> - 
					<?php the_category(' &bull; ') ?>
				</div>
				
				<div class="clear"></div>
				
				<div class="entry">
					<?php the_post_thumbnail('thumbnail', array('class' => 'alignleft')); ?>
					<?php the_excerpt('' . __('Read more', 'themezee_lang') . '</span>'); ?>
					<div class="clear"></div>
					<?php wp_link_pages(); ?>
				</div>
				
				<div class="postinfo">
					<a href="<?php the_permalink() ?>#comments"><?php comments_number(__('No comments', 'themezee_lang'),__('One comment','themezee_lang'),__('% comments','themezee_lang')); ?></a>
					<?php if (get_the_tags()) echo ' | '; the_tags(__('Tags: ', 'themezee_lang'), ', '); ?>
					<?php edit_post_link(__( 'Edit', 'themezee_lang' ), ' | '); ?>
				</div>
				

			</div>

		<?php endwhile; ?>
			
			
      
			<?php if(function_exists('wp_pagenavi')) { // if PageNavi is activated ?>
				<div class="more_posts">
					<?php wp_pagenavi(); ?>
				</div>
			<?php } else { // Otherwise, use traditional Navigation ?>
				<div class="more_posts">
					<span class="post_links"><?php next_posts_link(__('&laquo; Older Entries', 'themezee_lang')) ?> &nbsp; <?php previous_posts_link (__('Recent Entries &raquo;', 'themezee_lang')) ?></span>
				</div>
			<?php }?>
			

		<?php endif; ?>
			
		</div>
		
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>