<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $footerDB = Footer::all();
        return view('welcome', compact("footerDB"));
    }
}