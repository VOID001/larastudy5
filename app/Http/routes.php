<?php

use App\Task;
use Illuminate\Http\Request;
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
    $tasks = Task::orderBy('isfinish', 'asc')->orderBy('name', 'asc')->get();
    //$tasks = DB::table('task')->orderBy('created_at', 'asc')->get();
    return view('tasks',[
        'tasks' => $tasks
    ]);
});

/*
 * Add a task
 */

Route::post('/task', function(Request $request){

    //Use a validator to check the data
    $validator = Validator::make($request->all(), [
        'name' => 'required | max:255'
    ]);

    //Fail the Validation
    if($validator->fails())
    {
        return Redirect('/')->withInput()->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return Redirect('/');
});

/*
 * Delete a task
 */

Route::delete('/task/{id}', function($id){
    Task::findOrFail($id)->delete();

    return Redirect('/');
});

Route::post('/finish/{id}', function($id){
    $taskobj = Task::findOrFail($id);
    $taskobj->isfinish = true;
    $taskobj->finish_at = date('Y-m-d-H:i:s');
    $taskobj->save();

    return Redirect('/');
});
