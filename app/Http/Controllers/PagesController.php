<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $people = ["Tylor", "Matt", "Jeffrey"];
        return view('welcome', compact('people'));
    }

    public function about() {
        return 'About page';
    }

}
