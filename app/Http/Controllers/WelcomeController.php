<?php

namespace App\Http\Controllers;

// use App\Models\Navbar;

use App\Models\Footer;
use App\Models\Home;
use App\Models\HomeContent;
use App\Models\Navbar;
use App\Models\Network;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $navbardb = Navbar::all();
        $footerDB = Footer::all();
        $networksDB = Network::all();
        return view('welcome', compact("navbardb","footerDB", "networksDB"));
    }

    public function boFooter(){
        $footer = Footer::all();
        return view("boFooter", compact("footer"));
    }
    public function boHomeContent(){
        $homeContent = HomeContent::all();
        return view("boHomeContent", compact("homeContent"));
    }
    public function boHome(){
        $home = Home::all();
        return view("boHome", compact("home"));
    }
    public function boNavbar(){
        $navbar = Navbar::all();
        return view("boNavbar", compact("navbar"));
    }

    public function boNetwork(){
        $network = Network::all();
        return view("boNetworks", compact("network"));
    }

    public function store(Request $request){
        $store = new Footer;
        $store->copyright = $request->copyright;
        $store->brand = $request->brand;
        $store->rights = $request->rights;
        $store->designed = $request->designed;
        $store->team = $request->team;
        $store->save();
        return redirect()->back();
    }

    public function add(Request $request){
        $add = new Network;
        $add->twitter = $request->twitter;
        $add->facebook = $request->facebook;
        $add->instagram = $request->instagram;
        $add->skype = $request->skype;
        $add->linkedin = $request->linkedin;
        $add->save();
        return redirect()->back();
    }
}