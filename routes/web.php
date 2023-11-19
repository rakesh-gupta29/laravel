<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\DemoControllerSingleAction;
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

// we can chain middlewares here too
Route::get("/controller-demo/{id}", [DemoController::class, "renderWelcomePage"]);
Route::get("/controller-single-action/{isAuthorised?}", DemoControllerSingleAction::class);
// use ::resource to generate a set of routes. routes has a certain name  and corresponding methods in the controller class to handle them

// use ::singleton for handling singleton resources: resources which can have only one instance - no need for create, index and delete instances is required.
// we only need to show, delete and edit methods.e.g. profile image for a user.

// ::singleton and ::resources have their api counterparts too. these methods allow nesting too as per names. children and submodules.

// we can relate the resources with data models too.