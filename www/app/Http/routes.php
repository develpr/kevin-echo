<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return "Hello!";
});

AlexaRoute::launch('/alexa', 'Kevin\Http\Controllers\Kevin@handleLaunch');

AlexaRoute::sessionEnded('/alexa', 'Kevin\Http\Controllers\Kevin@handleSessionEnded');

AlexaRoute::intent('/alexa', 'HowAreYou', 'Kevin\Http\Controllers\Kevin@howAreYou');




