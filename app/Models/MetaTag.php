<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaTag extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'metatagable_id',
        'metatagable_type',
        'title',
        'description',
        'keywords',
        'h1',
        'seo_text',
        'canonical',
        'robots',
        'changefreq',
        'priority',
        'og_title',
        'og_description',
        'og_image',
        'og_type',
        'og_url',
        'og_site_name',
        'og_audio',
        'og_determiner',
        'og_locale',
        'og_video',
    ];
}
