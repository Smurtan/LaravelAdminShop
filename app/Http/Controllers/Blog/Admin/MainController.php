<?php

namespace App\Http\Controllers\Blog\Admin;

use Butschster\Head\Facades\Meta;

class MainController extends AdminBaseController
{
    /**
     * Display the admin panel view.
     */
    public function index()
    {
        Meta::prependTitle("Админ панель");

        return view('blog.admin.main.index');
    }
}
