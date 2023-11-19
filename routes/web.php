<?php

use Illuminate\Support\Facades\Route;
use App\Facades\AllowedCountriesFacade;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (Request $request) {
    $something = AllowedCountriesFacade::isAllowed("India");
    return view('welcome', ["message" => $something ? "true" : "false"]);
});


Route::get("/about/{name?}", function (?string $name = "value not found") {
    return view("about", ["name" => $name]);
});
Route::get("/admin/{id?}}", function (?string $id = "value not found") {
    return view("about", ["name" => $id]);
})->whereUuid("admin");

Route::get('/user/{id}/{name}', function (string $id, string $name) {
    return view("about", ["name" => $name]);

})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);



Route::get("/dummy", function (Request $request) {
    return view("welcome", ["message" => "something"]);
})->middleware("dummy:something");

Route::get("/with-before-and-after-middlewares", function () {
    return "You have passed the value of the queryparameter correctly.";
})->middleware(["log.requests", "add.custom.headers"]);