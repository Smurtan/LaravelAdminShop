<?php

namespace App\Http\Controllers\Blog\Admin;

class MainController extends AdminBaseController
{
    /**
     * Display the admin panel view.
     */
    public function index()
    {
        return view('blog.admin.main.index');
    }
}
