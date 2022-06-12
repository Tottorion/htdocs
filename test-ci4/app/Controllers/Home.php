<?php

namespace App\Controllers;

echo '<h1>タイトル</h1>';

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}
