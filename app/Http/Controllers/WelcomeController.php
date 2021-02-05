<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
       public function index(){
           $navbardb = Navbar::all();
        return view('welcome', compact('navbardb'));
    }
}