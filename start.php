<?php
	
	function metatag_manager_init(){
		elgg_extend_view("page/elements/head", "metatag_manager/metatags", 100);
		
		elgg_register_plugin_hook_handler("setting", "plugin", "metatag_manager_setting_save");
	}
	
	function metatag_manager_setting_save($hook, $type, $return, $params){
		if(isset($params["plugin"]) && ($params["plugin"]->getID() == "metatag_manager")){
			if ($params["name"] == "metatag_manager_custom") {
				// return unfiltered data
				$settings_params = get_input("params", array(), false);
				if (array_key_exists("metatag_manager_custom", $settings_params)) {
					return $settings_params["metatag_manager_custom"];
				}
			}
		}
	}
	
	elgg_register_event_handler('init', 'system', 'metatag_manager_init');
