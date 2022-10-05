<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Footer;

use App\Http\Controllers\homesectiona;
use App\Http\Controllers\homesectionb;
use App\Http\Controllers\homesectionc;
use App\Http\Controllers\blogs_details;
use App\Http\Controllers\events_details;
use App\Http\Controllers\Aboutus;
use App\Http\Controllers\admins_details;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([],static function (){
    //get all admins with their roles.
    Route::get("/alladmins",[admins_details::class,"GetAllAdmins"]);
    Route::get("/admin", [admins_details::class,"index"]);
    Route::get("/admin/{id}", [admins_details::class,"show"]);
    Route::put("/admin/{user}", [admins_details::class, "update_status"]);
    Route::put("/updateadmin/{id}", [admins_details::class, "update_profile"]);
    Route::post("/addadmin",[admins_details::class,"store"]);
    });

Route::group([],static function (){
//get the links for social media icons.
Route::get("/links", [Footer::class,"index"]);
});


Route::group([],static function (){
//get the text for the first section.
Route::get("/textsectionA", [homesectiona::class,"index"]);
//get images for hom section A.
Route::get("/imagesectionA", [homesectiona::class,"images"]);
Route::put("/updateimagesectionA/{id}", [homesectiona::class,"update_images"]);
});


Route::group([],static function (){
    //get video title.
Route::get("/videotitlesectionB", [homesectionb::class,"index"]);
//get video link.
Route::get("/videolinksectionB", [homesectionb::class,"links"]);
//get video desc.
Route::get("/videodescectionB", [homesectionb::class,"desc"]);
//get career test Text.
});

Route::group([],static function (){
Route::get("/careerTextsectionC", [homesectionc::class,"index"]);
//get career test link.
Route::get("/careerLinkectionC", [homesectionc::class,"careerLink"]);
});


Route::group([],static function (){
//get all blogs.
Route::delete('/deleteblog/{id}',[blogs_details::class,'destroy']);
Route::get('/allblogs',[blogs_details::class,'GetAllBlogs']);
Route::post('/addblog',[blogs_details::class, 'storeBlogs']);
Route::get("/blogs", [blogs_details::class,"index"]);
Route::put("/blogs/{id}", [blogs_details::class, "update_status_blogs"]);
//get the first 3 latest blogs
Route::get("/latestblogs", [blogs_details::class,"getLatestBlogs"]);
//search for all blogs.
Route::get("/searchallblogs",[blogs_details::class,"searchBlogs"]);
Route::get("/searchactiveblogs",[blogs_details::class,"searchActiveBlogs"]);
});


Route::group([],static function (){
    Route::get('/allevents',[events_details::class,'GetAllEvents']);
//get all events.
Route::get("/events", [events_details::class,"index"]);
//get the first 3 latest events.
Route::get("/latestevents", [events_details::class,"getLatestEvents"]);
Route::delete('/deleteevent/{id}',[events_details::class,'destroy']);
//Add Event.
Route::post('/addevent',[events_details::class, 'storeEvents']);
Route::get("/searchallevents",[events_details::class,"searchEvents"]);
Route::get("/searchactiveevents",[events_details::class,"searchActiveEvents"]);
//Update Event.
Route::put('/event/{id}',[events_details::class, 'update']);





});




Route::group([],static function (){


    Route::get("/aboutus_text", [Aboutus::class,"getQoute"]);
    Route::get("/aboutus_img", [Aboutus::class,"getAbout_img"]);
    Route::get("/aboutus_video", [Aboutus::class,"getAbout_video"]);
    Route::put("/aboutus_quote/{id}", [Aboutus::class,"updateAbout_Quote"]);

});



Route::get('/singleblog/{id}',[blogs_details::class,'show']);
Route::get('/singleEvent/{id}',[events_details::class,'show']);
    Route::put('/blog/{id}',[blogs_details::class, 'update']);

    // Register route

    Route::post('/login',[AuthController::class, 'login']);
    Route::post('/forget',[AuthController::class, 'forget']);
    Route::post('/reset',[AuthController::class, 'reset']);

 Route::post('/register',[AuthController::class, 'register']);
// Protected routes

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::delete('/blog/{id}',[blogs_details::class, 'destroy']);


    Route::post('/logout',[AuthController::class, 'logout']);

});




