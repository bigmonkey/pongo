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


<?php $base_url = "http://www.thepaydayhound.com"; ?>
<?php $style = file_get_contents($base_url . "/jstyle"); ?>
<?php $style = str_replace("/assets", $base_url . "/assets", $style); ?>
<?php echo $style; ?>


</head>

<body <?php body_class(); ?>>

<?php $head = file_get_contents($base_url . "/header"); ?>
<?php $head = str_replace("href=\"/", "href=\"" . $base_url . "/", $head); ?>
<?php $head = str_replace("src=\"/assets", "src=\"" . $base_url . "/assets", $head); ?>
<?php echo $head; ?>

<?php if( get_header_image() != '' ) : ?>
<div id="custom_header">
<img src="<?php echo get_header_image(); ?>" />
</div>
<?php endif; ?>