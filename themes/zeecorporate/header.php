<!DOCTYPE html><!-- HTML 5 -->
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<title><?php wp_title(''); ?></title>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<script type="text/javascript" src="http://resources.thepaydayhound.com/assets/application-ad0960f1326cf019ad89519dba014ac7.js"></script>

</head>

<body <?php body_class(); ?>>

	<div id="mainHeaderOutter">
		<div id="mainHeader">
			<div id="logo"><a href="http://thepaydayhound.com"><img alt="logo" src="/wp-content/uploads/2012/06/thepaydayhound-logo.png" /></a></div>

			<div id="socialmediaicons">
				<a href="/feed" title="The Payday Hound Feed"><img alt="RSS Feed" src="/wp-content/uploads/2012/06/rss.png" /></a>
				<a href="http://www.facebook.com/thepaydayhound" title="The Payday Hound Facebook Page"><img alt="Facebook" src="/wp-content/uploads/2012/06/facebook.png" /></a>
				<a href="http://www.twitter.com/thepaydayhound" title="The Payday Hound Twitter Page"><img alt="Twitter" src="/wp-content/uploads/2012/06/twitter.png" /></a>
				<a href="https://plus.google.com/114318301384219988110" title="The Payday Hound Google Page"><img alt="Google +" src="/wp-content/uploads/2012/06/googleplus.png" /></a>
			</div>

			<div id="nav">

			<div id = "chromemenu">
				<ul>
					<li><a href="http://www.thepaydayhound.com">Home</a></li>
					<li><a href="https://www.thepaydayhound.com/payday-loan-apply">Apply Now</a></li>
				    	<li><a href="http://tools.thepaydayhound.com/payday-loans">Payday Loans</a></li>
				    	<li><a href="http://tools.thepaydayhound.com/installment-loans">Installment Loans</a></li>
					<li><a href="http://www.thepaydayhound.com/resources" >Resources</a></li>
				</ul>
			</div>	


		
			</div>
		</div>

		<?php if( get_header_image() != '' ) : ?>
		<div id="custom_header">
		<img src="<?php echo get_header_image(); ?>" />
		</div>
		<?php endif; ?>
	</div>