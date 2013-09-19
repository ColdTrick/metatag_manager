<?php

	$plugin = elgg_get_plugin_from_id("metatag_manager");

	// keywords
	if ($keywords = $plugin->metatag_manager_keywords) {
	?>
		<meta name="keywords" content="<?php echo $keywords; ?>">
	<?php
	}

	// description
	if ($description = $plugin->metatag_manager_description) {
	?>
		<meta name="description" content="<?php echo $description; ?>">
	<?php
	}
	
	// robots
	if ($robots = $plugin->metatag_manager_robots) {
	?>
		<meta name="robots" content="<?php echo $robots; ?>">
	<?php
	}
	
	//author
	if ($author = $plugin->metatag_manager_author) {
	?>
		<meta name="author" content="<?php echo $author; ?>">
	<?php
	}
	
	if ($custom_metatags = $plugin->metatag_manager_custom) {
		echo $custom_metatags;
	}