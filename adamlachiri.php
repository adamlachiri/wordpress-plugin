<?php

/*
*@package adamlachiri
*/

/*
Plugin Name: Adam Lachiri
Plugin URI: https://github.com/adamlachiri/wordpress-plugin
Description: my personal wordpress plugin
Version: 1.0
Author: Adam Lachiri 
*/



// security
if (!defined("ABSPATH")) {
    die;
}

// namespaces
use adamlachiri\Activate;
use adamlachiri\Deactivate;
use adamlachiri\LoadAssets;

// imports
require_once plugin_dir_path(__FILE__) . "/app/Activate.php";
require_once plugin_dir_path(__FILE__) . "app/Deactivate.php";
require_once plugin_dir_path(__FILE__) . "app/LoadAssets.php";

// activation
register_activation_hook(__FILE__, [Activate::class, "activate"]);

// deactivation
register_deactivation_hook(__FILE__, [Deactivate::class, "deactivate"]);

// loading assets
LoadAssets::enqueue_scripts();
