<?php

$plugin = $vars["entity"];

$settings = "<label>" . elgg_echo("metatag_manager:settings:keywords");
$settings .= elgg_view("input/plaintext" , array("name" => "params[metatag_manager_keywords]", "value" => $plugin->metatag_manager_keywords)) . "</label>";

$settings .= "<label>" . elgg_echo("metatag_manager:settings:description");
$settings .= elgg_view("input/plaintext" , array("name" => "params[metatag_manager_description]", "value" => $plugin->metatag_manager_description)) . "</label>";

$settings .= "<label>" . elgg_echo("metatag_manager:settings:robots");
$settings .= elgg_view("input/text" , array("name" => "params[metatag_manager_robots]", "value" => $plugin->metatag_manager_robots)) . "</label>";

$settings .= "<label>" . elgg_echo("metatag_manager:settings:author");
$settings .= elgg_view("input/text" , array("name" => "params[metatag_manager_author]", "value" => $plugin->metatag_manager_author)) . "</label>";

echo $settings;