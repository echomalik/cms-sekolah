<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SchoolController extends Controller
{
    public function index(): View
    {
        return view('header-footer');
    }

    public function guru(): View
    {
        return view('guru');
    }

    public function berita(): View
    {
        return view('berita');
    }

    public function prestasi(): View
    {
        return view('prestasi');
    }

    public function homepage(): View
    {
        return view('homepage');
    }

    public function osis_mpk(): View
    {
        return view('osis-mpk');
    }

    public function kejuruan(): View
    {
        return view('kejuruan');
    }

    public function ekstrakulikuler(): View
    {
        return view('ekstrakulikuler');
    }
}


