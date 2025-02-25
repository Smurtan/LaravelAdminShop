<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminOrderWidget extends Model
{
    use HasFactory;

    protected array $dates = ['created_at', 'updated_at'];
}
