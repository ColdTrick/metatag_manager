<?php
	
	function metatag_manager_init(){
		elgg_extend_view("page/elements/head", "metatag_manager/metatags", 100);
	}
	
	elgg_register_event_handler('init', 'system', 'metatag_manager_init');