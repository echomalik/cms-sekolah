<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(): view
    {
         return view('login');
    }
}
