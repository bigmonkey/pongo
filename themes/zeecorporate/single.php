<?php get_header(); ?>
<div id="wrapper">
		<div id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>
				<div class="postmeta">
				<?php the_date('F j, Y'); ?> - 
				<?php the_category(' &bull; ') ?>
				</div>
				
				
				<div class="clearboth"></div>
				
				<div class="entry">
					<?php the_post_thumbnail('medium', array('class' => 'alignleft')); ?>
					<?php the_content(); ?>
					<div class="clearboth"></div>
					<?php wp_link_pages(); ?>
					<!-- <?php trackback_rdf(); ?> -->
				</div>
				
				
				<div class="postinfo"> 
					<a href="<?php the_permalink() ?>#comments"><?php comments_number(__('No comments', 'themezee_lang'),__('One comment','themezee_lang'),__('% comments','themezee_lang')); ?></a>
					<?php if (get_the_tags()) echo ' | '; the_tags(__('Tags: ', 'themezee_lang'), ', '); ?>
					<?php edit_post_link(__( 'Edit', 'themezee_lang' ), ' | '); ?>
				</div>
			</div>

		<?php endwhile; ?>

		<?php endif; ?>
			
		<?php comments_template(); ?>
		
		</div>
		
	<?php $sidebar = get_post_meta($post->ID, "sidebar", true);
get_sidebar($sidebar);
?>
</div>
	
<?php get_footer(); ?>