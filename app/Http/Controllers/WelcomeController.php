<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Navbar;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $footerDB = Footer::all();
        $navbardb = Navbar::all();
        return view('welcome', compact('navbardb', "footerDB"));
    }
}