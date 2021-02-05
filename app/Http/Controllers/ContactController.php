<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Footer;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contactDB = Contact::all();
        $footerDB = Footer::all();
        return view("pages.contact", compact("contactDB", "footerDB"));
    }
}