<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

class ServerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke()
    {

        return view('admin.post.index');

    }
}


