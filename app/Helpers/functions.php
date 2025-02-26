<?php

use Illuminate\Support\Str;

if (!function_exists('generateSlug')) {
    function generateSlug($title, $model)
    {
        $slug = Str::slug($title);
        $count = $model::where('slug', $slug)->count();

        if ($count > 0) {
            $slug = $slug . '-' . ($count + 1);
        }

        return $slug;
    }
}
