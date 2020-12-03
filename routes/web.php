<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
Route::get('/pizzas', function () {
    //return view('pizzas');
    //return ['name' => 'veg pizza', 'base' => 'classic'];
    $pizzas= [
        ['type' => 'hawaiian', 'base' => 'crust'],
        ['type' => 'vol', 'base' => 'garlic'],
        ['type' => 'veg', 'base' => 'thin']
    ];

    //$name = request('name');

    return view('pizzas', [
        'pizzas' => $pizzas,
        'name' => request('name'),
        'age' => request('age')
        ]);
});

Route::get('/pizzas/{id}', function($id){
    // use the $id variable to query the db for a record
    return view('details', ['id' => $id]);
});

*/

Route::get('/pizzas', [App\Http\Controllers\PizzaController::class, 'index']);
Route::get('/pizzas/create', [App\Http\Controllers\PizzaController::class, 'create'])->name('pizza_create');
Route::get('/pizzas/{id}', [App\Http\Controllers\PizzaController::class, 'show']); 
Route::post('/pizzas', [App\Http\Controllers\PizzaController::class, 'store']);
Route::delete('/pizzas/{id}',[App\Http\Controllers\PizzaController::class, 'destroy'])->name('PizzaIds_edit');

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');


Route::get('/mqtt/publish/{topic}/{message}', [App\Http\Controllers\MqttExampleController::class, 'SendMsgViaMqtt']);
Route::get('/mqtt/publish/{topic}', [App\Http\Controllers\MqttExampleController::class, 'SubscribetoTopic']);

Route::get('/messages',[App\Http\Controllers\MessageController::class, 'display']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
