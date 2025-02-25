<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class AttributeGroup extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'title'
    ];

    public function attributes(): HasMany
    {
        return $this->hasMany(AttributeValue::class);
    }
}
