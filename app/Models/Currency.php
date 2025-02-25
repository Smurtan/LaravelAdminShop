<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'title',
        'symbol_left',
        'symbol_right',
        'value',
        'base',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
