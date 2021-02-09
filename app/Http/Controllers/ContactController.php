<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Footer;
use App\Models\Informations;
use App\Models\Network;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contactDB = Contact::all();
        $footerDB = Footer::all();
        $informationsDB = Informations::all();
        $networksDB = Network::all();
        return view("pages.contact", compact("contactDB", "footerDB", "informationsDB", "networksDB"));
    }

    public function boContact(){
        $contact = Contact::all();
        return view("boContact", compact("contact"));
    }

    public function boInformation(){
        $information = Informations::all();
        return view("boInformations", compact("information"));
    }

    public function store(Request $request){
        $store = new Contact;
        $store->title = $request->title;
        $store->paragraph = $request->paragraph;
        $store->iconeAddress = $request->iconeAddress;
        $store->titleAddress = $request->titleAddress;
        $store->iconeMail = $request->iconeMail;
        $store->titleMail = $request->titleMail;
        $store->iconePhone = $request->iconePhone;
        $store->titlePhone = $request->titlePhone;
        $store->loading = $request->loading;
        $store->success = $request->success;
        $store->btnContact = $request->btnContact;
        $store->save();
        return redirect()->back();
    }

    public function add(Request $request){
        $add = new Informations;
        $add->address = $request->address;
        $add->mail1 = $request->mail1;
        $add->mail2 = $request->mail2;
        $add->number1 = $request->number1;
        $add->number2 = $request->number2;
        $add->save();
        return redirect()->back();
    }
}
