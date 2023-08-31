<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\view\view;

class SchoolController extends Controller
{
    public function index(): view
    {
        return view('kejuruan');
    }
}
