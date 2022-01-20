<?php

/*
*@package adamlachiri
*/

// security
if (!defined("WP_UNINSTALL_PLUGIN")) {
    die;
}

// delete related data
global $wpdb;

// delete posts
$sql =  "DELETE FROM wp_posts where post_type = 'placeholder'";
$wpdb->query($sql);

// delete post metadata
$sql = "DELETE FROM wp_postmeta WHERE post_id NOT IN
 ( SELECT id FROM wp_posts )
 ";
$wpdb->query($sql);

// delete term relationships
$sql = "DELETE FROM wp_term_relationships WHERE object_id NOT IN
 ( SELECT id FROM wp_posts )
 ";
$wpdb->query($sql);
