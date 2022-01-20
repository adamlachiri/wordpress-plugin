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
}
