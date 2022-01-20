<?php

/*
*@package adamlachiri
*/

namespace adamlachiri;

class Activate
{
    public static function activate()
    {
        flush_rewrite_rules();
    }

    public static function register()
    {
        register_activation_hook(__FILE__, [Self::class, "activate"]);
    }
}
