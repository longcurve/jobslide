<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function Home()
    {
        return View::make('index');
    }
}
