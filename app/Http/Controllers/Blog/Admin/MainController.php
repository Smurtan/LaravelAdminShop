<?php

namespace App\Http\Controllers\Blog\Admin;

class MainController extends AdminBaseController
{
    public function index()
    {
        return view('blog.admin.main.index');
    }
}
