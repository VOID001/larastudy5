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
/*
 * Get the task page
 */
Route::get('/', function () {
    return view('tasks');
});

/*
 * Add a task
 */

Route::post('/task', function(Request $request){

});

/*
 * Delete a task
 */

Route::delete('/task/{id},', function($id){

});
