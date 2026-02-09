<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home() { return view('welcome'); }
    public function about() { return "<h1>Halaman About (Under Construction)</h1>"; }
    public function services() { return "<h1>Halaman Layanan BK (Under Construction)</h1>"; }
}
