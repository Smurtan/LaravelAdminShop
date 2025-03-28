<?php

namespace App\SBlog\Core;

trait TSingleton
{
    private static $instance;

    public static function instance(): TSingleton|Registry
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}
