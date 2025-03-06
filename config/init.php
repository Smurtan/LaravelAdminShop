<?php

defined('LIBS') or define('LIBS', resource_path('libs'));
defined('CACHE') or define('CACHE', storage_path('framework/cache'));
defined('LAYOUT') or define('LAYOUT', 'app.blade.php');
defined('GALLERY') or define('GALLERY', public_path('uploads/gallery'));
defined('IMG') or define('IMG', public_path('uploads/single'));

$host = FALSE;

if (isset($_SERVER['HTTP_HOST'])) {
    $host = $_SERVER['HTTP_HOST'];
}

$allowed_host = env('APP_URL');

defined('APP_PATH') or define('APP_PATH', $allowed_host);
defined('ADMIN') or define('ADMIN', APP_PATH . '/admin');
