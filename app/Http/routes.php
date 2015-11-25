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
    return view('welcome');
}
);

Route::get('home', 'HomeController@index');
Route::controllers([
'auth' => 'Auth\AuthController',
'password'=> 'Auth\PasswordController',
]);



Route::get('/sobre', function () {
    return view('sobre');
}
);

Route::get('/propostas', 'PropostaController@lista');


Route::get('/email', function () {
    return view('email');
}
);

Route::resource('mail', 'MailController');

Route::get('form', function(){
 return View::make('form');
});

Route::any('form-submit', function(){
 return Input::file('file')->move(__DIR__.'/storage/',Input::file('file')->getClientOriginalName());
});

Route::post('/enviar', function(Illuminate\Http\Request $request){
	var_dump($request->all());
});	
