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
use Illuminate\Http\Request;

/**
 * Three Level catch all for static website generator. Try to find an appropiate template.
 * Protect certain directories that shouldn't be accessed and add additional directoires to
 * div into.  
 * @return Response Return a valid response for any request 
 */
Route::get('{slug?}/{slug2?}/{slug3?}', function (Request $request) {
	$blocked_directories = array("analytics", "errors", "mixins", "navigation", "skeleton");
	$check_directories = array("locations", "services", "pages");

    //Try to find a blade template
    $potential_view = strtolower(str_replace("/", ".", $request->path()));
    $root_dir = array_values(explode(".", $potential_view))[0];

    //Don't allow certain directories to be rendered
    if(in_array($root_dir, $blocked_directories) || strlen($root_dir) == 0){
    	return view('welcome'); 
    }
    
    //Try to find the view
    if(View::exists($potential_view)){
    	return view($potential_view);
    }
    else{
    	//Check all check directories for the template 
    	foreach ($check_directories as $key) {
    		if(View::exists("$key." . $potential_view)){
    			return view("$key." . $potential_view);
    		}
    	}
    	
    }

    abort(404); //If nothing is found report 404
});
