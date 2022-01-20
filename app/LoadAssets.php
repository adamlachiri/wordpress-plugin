<?php

/*
*@package adamlachiri
*/

namespace adamlachiri;

class LoadAssets
{

    public static function enqueue_scripts()
    {
        add_action("wp_enqueue_scripts", [Self::class, "register_styles"]);
        add_action("wp_enqueue_scripts", [Self::class, "register_scripts"]);
    }


    public static function register_styles()
    {
        // custom css
        wp_register_style("custom-css",  plugins_url("../assets/css/style.css", __FILE__), array(), false, "all");
        wp_enqueue_style("custom-css");

        // adam css
        wp_register_style("adam-css", "http://localhost/Adam/css/style.css", array(), false, "all");
        wp_enqueue_style("adam-css");

        // icons css
        wp_register_style("icons-css", "http://localhost/Adam/css/icons.css", array(), false, "all");
        wp_enqueue_style("icons-css");
    }

    public static function register_scripts()
    {
        // custom css
        wp_register_style("custom-css",  plugins_url("../assets/css/style.css", __FILE__), array(), false, "all");
        wp_enqueue_style("custom-css");

        // adam css
        wp_register_style("adam-css", "http://localhost/Adam/css/style.css", array(), false, "all");
        wp_enqueue_style("adam-css");
    }
}
