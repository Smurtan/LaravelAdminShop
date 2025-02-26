<?php

namespace App\SBlog\Core;

class BlogApp
{
    public static Registry $app;

    protected static function getParams(): void
    {
        $params = require config_path('params.php');

        if (!empty($params)) {
            foreach ($params as $key => $value) {
                self::$app->setProperty($key, $value);
            }
        }
    }

    public static function getInstance(): TSingleton|Registry
    {
        self::$app = Registry::instance();
        self::getParams();
        return self::$app;
    }
}
