<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@front_page');


Route::get('/test','HomeController@load_block');
Route::get('/login','HomeController@showLogin');
//Route::get('/home','HomeController@home');
Route::get('/editor_arduino','EditorController@editor_arduino');
Route::get('/editor_pi','EditorController@editor_pi');
Route::get('/blockly','EditorController@editor_blockly');

Route::get('/blockly1','EditorController@editor_blockly1');
Route::get('/Simulation','HomeController@simulation');


Route::post('/editor/compile_arduino','EditorController@compile_arduino');


Route::post('/editor/compile_pi','EditorController@compile_pi');



Route::get('/home', array('as' => 'home', 'uses' => function(){
  return view('Pages.Home.home');
}));

Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');


Route::model('tasks', 'Task');
Route::model('projects', 'Project');

Route::bind('tasks', function($value, $route) {
	return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
	return App\Project::whereSlug($value)->first();
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    
      Route::get('fblogin', 'HomeController@go_fb');
      Route::get('fbRedirect','HomeController@back_fb');
       Route::get('gologin', 'HomeController@go1');
      Route::get('goRedirect','HomeController@back1');
    
    //
});
