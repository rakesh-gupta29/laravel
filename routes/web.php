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


// request parameter is injected.
Route::get("/route-demo/{id}", function (Request $request, string $id) {
    $path = $request->path(); // get current path
    $url = $request->url(); // get url or fullUrl

    // methods to verify that path matches the pattern. refer doc for a complete list.

    // get request methods and get request headers.
    // check that the request has a header or not.
    // get the value of token for request object too.
    // get value of the content type and other accepts value.


    // get all data from the incoming request
    $allInputs = $request->all();
    // retrieve some field
    // we can collect all of them using a collection and iterate through them.

    $namuserName = $request->input('name');

    $queryName = $request->query('name');

    // there are multiple methods to retreive cookies, files and other form of data.

    // we may retrive the files and store them in the storage.

    return view("welcome", ["message" => "learning laravel"]);

});


Route::get("/sample-return", function () {
    // use response method to build the response.
    return response("hello", 200)->header("Content-Type", "text/plain");
    // use header method to attach headers in the response
    // use cookie method to attach cookies.


    //  response object has methods to redicrect to a route through a path or a named path or to a previous route using the back function or even methods for a controller classes.


    // we can use the eloquoent models as parameters for the routes
    // models and collection of models can be passed as parameters in response method. they will be converted to json.
});


Route::get("/get-profile", function () {
    return response()->download("profile_img.jpeg");
});
Route::get("/get-file", function () {
    return response()->file("dummy_form.pdf");
});

Route::get("/string-from-macro", function () {
    // we can create macros to define functions
    return response()->capsString("hello world");
});
Route::get("/cars", function () {
    return view("cars");
});
Route::get("/car-detail", function () {
    return view("car-details");
});

// we can create a macro for defining methods in the Response object
