<?php

/*
*@package adamlachiri
*/

/*
Plugin Name: Adam Lachiri
Plugin URI: https://github.com/adamlachiri/wordpress-plugin
Description: my personal wordpress plugin
Version: 1.1
Author: Adam Lachiri 
*/

// security
if (!defined("ABSPATH")) {
    die;
}

// autoloader
if (file_exists(dirname(__FILE__) . "/vendor/autoload.php")) {
    require_once dirname(__FILE__) . "/vendor/autoload.php";
}

// imports
use adamlachiri\Activate;
use adamlachiri\CustomPostType;
use adamlachiri\Deactivate;
use adamlachiri\LoadAssets;
use adamlachiri\Taxonomy;

// activation
register_activation_hook(__FILE__, [Activate::class, "activate"]);

// deactivation
register_deactivation_hook(__FILE__, [Deactivate::class, "deactivate"]);

// loading assets
LoadAssets::enqueue_scripts();

// add custom post types
$book = new CustomPostType();
// props
$book->singular_name = "";
$book->plural_name = "";
$book->description = "";
$book->menu_icon = "";

// create
$book->create();


// add taxonomy
$taxonomy = new Taxonomy();
// props
$taxonomy->singular_name = "";
$taxonomy->plural_name = "";
$taxonomy->description = "";
$taxonomy->post_types = [];

// create
$taxonomy->create();
