<?php $base_url = "http://www.thepaydayhound.com"; ?>
<?php $foot = file_get_contents($base_url . "/footer"); ?>
<?php $foot = str_replace("href=\"/", "href=\"" . $base_url . "/", $foot); ?>
<?php echo $foot; ?>
			
	<?php wp_footer(); ?>

</body>
</html>
