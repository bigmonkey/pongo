<?php get_header(); ?>
<div id="wrapper">
<div id="content">
			<div class="type-page">
			
				<h1><?php _e('404 Error: Not found', 'themezee_lang'); ?></h1>
				
				<div class="entry">
					<p><?php _e('The page you trying to reach does not exist, or has been moved. Please use the menu below to find what you are looking for.', 'themezee_lang'); ?></p>
					
					<?php wp_reset_query(); ?> 
		
					<h2><?php _e('Latest Posts', 'themezee_lang'); ?></h2><br/>
					<ul>
					
					<?php query_posts('post_type="post"&post_status="publish"&showposts=9'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
						<?php endwhile; ?>
						<?php endif; ?>
						<?php wp_reset_query(); ?> 
					</ul>
					
					
				</div>
				
				
			</div>
		</div>		
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>