<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display the home page.
     */
    public function index(): View
    {
        return view('home');
    }
}
