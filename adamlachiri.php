<?php

/*
*@package adamlachiri
*/

/*
Plugin Name: Adam Lachiri
Plugin URI: https://github.com/adamlachiri/wordpress-plugin
Description: my personal wordpress plugin
Version: 1.12
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

// config
if (file_exists(dirname(__FILE__) . "/config.php")) {
    require_once dirname(__FILE__) . "/config.php";
}

// test

// imports
use adamlachiri\Activate;
use adamlachiri\PostType;
use adamlachiri\Deactivate;
use adamlachiri\LoadAssets;
use adamlachiri\Taxonomy;

// activation
Activate::register();

// deactivation
Deactivate::register();

// loading assets
LoadAssets::enqueue_scripts();

// add custom post types
$book = new PostType();
// props
$book->singular_name = "";
$book->plural_name = "";
$book->description = "";
$book->menu_icon = "";

// create the custom post type
// $book->create();


// add taxonomy
$taxonomy = new Taxonomy();
// props
$taxonomy->singular_name = "";
$taxonomy->plural_name = "";
$taxonomy->description = "";
$taxonomy->post_types = [];

// create the taxonomy
// $taxonomy->create();
