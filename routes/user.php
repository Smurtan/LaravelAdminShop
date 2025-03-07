<?php

use App\Http\Controllers\Blog\User\MainController;

Route::middleware(['auth'])->group(function () {
    $group_data = [
        'prefix' => 'user',
    ];

    Route::group($group_data, function () {
        Route::resource('index', MainController::class)
            ->names('blog.user.index');


    });
});

Route::get('/disabled', [App\Http\Controllers\Blog\Disabled\MainController::class, 'disabled'])->name('blog.disabled.index');
