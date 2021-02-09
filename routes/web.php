<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ArticleController;
// use App\Models\Contact;
// use App\Models\Footer;
// use App\Models\Informations;
// use App\Models\Network;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[WelcomeController::class,'index']) -> name('Welcome');
Route::get("/contact", [ContactController::class, "index"]) -> name('Contact');
Route::get('/article',[ArticleController::class,'index']) -> name('Article');

Route::get("/backoffice", function () {
    return view("template.second");
});

Route::get("/boContact", [ContactController::class, "boContact"]);
Route::get("/boInformations", [ContactController::class, "boInformation"]);
Route::get("/boFooter", [WelcomeController::class, "boFooter"]);
Route::get("/boNetworks", [WelcomeController::class, "boNetwork"]);

Route::post("/contact-store", [ContactController::class, "store"]);
Route::post("/information-store", [ContactController::class, "add"]);

Route::post("/footer-store", [WelcomeController::class, "store"]);
Route::post("/network-store", [WelcomeController::class, "add"]);

Route::get("/boArticle", [ArticleController::class, "boArticle"]);
Route::get("/boHomeContent", [WelcomeController::class, "boHomeContent"]);
Route::get("/boHome", [WelcomeController::class, "boHome"]);
Route::get("/boNavbar", [WelcomeController::class, "boNavbar"]);