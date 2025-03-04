<?php

use App\Http\Controllers\Blog\Admin\MainController;
use App\Http\Middleware\CheckStatusAdmin;

Route::middleware(['auth', CheckStatusAdmin::class])->group(function () {
    $group_data = [
        'prefix' => 'admin',
    ];

    Route::group($group_data, function () {
        Route::resource('index', MainController::class)
            ->names('blog.admin.index');


    });
});
