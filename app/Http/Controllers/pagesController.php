<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index()
    {
    	return view('pages/halamanIndex');
    }

    public function about()
    {
    	return view('pages/halamanAbout');
    }
}
