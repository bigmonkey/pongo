<div id="sidebar">

<IFRAME STYLE="" SCROLLING="no" FRAMEBORDER="0" SRC="/blogbars/prepaid" WIDTH="185" HEIGHT="565">
[Your user agent does not support frames or is currently configured not to display frames. However, you may visit <A href="/blogbars/prepaid">the related document.</A>]
</IFRAME>

<ul>
	<?php wp_list_categories('title_li=<h2>Learn</h2>'); ?>
	<li id="archives"><h2><?php _e('Recent Posts'); ?></h2>
     	<ul>
	<?php wp_get_archives('type=postbypost&limit=10'); ?>
     	</ul>
	</li>

</ul>
</div>