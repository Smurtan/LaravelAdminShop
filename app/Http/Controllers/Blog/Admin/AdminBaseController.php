<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Http\Controllers\Blog\BaseController as MainBaseController;
use App\Http\Middleware\CheckStatusAdmin;
use Illuminate\Routing\Controllers\HasMiddleware;

abstract class AdminBaseController extends MainBaseController implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            'auth',
            CheckStatusAdmin::class
        ];
    }
}
