<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasHotelController;
use App\Http\Controllers\empleatsController;
use App\Http\Controllers\departamentsController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//CRUD Reservas
Route::resource('/reservas', ReservasHotelController::class)->middleware(['auth']);

/*
   //Index
   Route::get('/reservas', [ReservasHotelController::class, 'index'])->name('reservas.index');

   //Create
    Route::get('/reservas/create', [ReservasHotelController::class, 'create'])->name('reservas.create');
    Route::post('/reservas', [ReservasHotelController::class, 'store'])->name('reservas.store');
    
    //Show
    Route::get('/reservas/{id}', [ReservasHotelController::class, 'show'])->name('reservas.show');
    
    //Edit
    Route::get('/reservas/{reservas}/edit', [ReservasHotelController::class, 'edit'])->name('reservas.edit');
    Route::put('/reservas/{reservas}', [ReservasHotelController::class, 'update'])->name('reservas.update');

    //Borrar
    Route::delete('/reservas/{reservas}', [ReservasHotelController::class, 'destroy'])->name('reservas.destroy');
*/

//CRUD Empleats
Route::resource('/empleats', empleatsController::class)->middleware(['auth']);
/*
//Index
   Route::get('/empleats', [empleatsController::class, 'index'])->name('empleats.index');

   //Create
    Route::get('/empleats/create', [empleatsController::class, 'create'])->name('empleats.create');
    Route::post('/empleats', [empleatsController::class, 'store'])->name('empleats.store');
    
    //Show
    Route::get('/empleats/{id}', [empleatsController::class, 'show'])->name('empleats.show');
    
    //Edit
    Route::get('/empleats/{empleats}/edit', [empleatsController::class, 'edit'])->name('empleats.edit');
    Route::put('/empleats/{empleats}', [empleatsController::class, 'update'])->name('empleats.update');

    //Borrar
    Route::delete('/empleats/{empleats}', [empleatsController::class, 'destroy'])->name('empleats.destroy');
*/

//CRUD Departaments
Route::resource('/departaments', departamentsController::class)->middleware(['auth']);

/*
   //Index
   Route::get('/departaments', [departamentsController::class, 'index'])->name('departaments.index');

   //Create
    Route::get('/departaments/create', [departamentsController::class, 'create'])->name('departaments.create');
    Route::post('/departaments', [departamentsController::class, 'store'])->name('departaments.store');
    
    //Show
    Route::get('/departaments/{id}', [departamentsontroller::class, 'show'])->name('departaments.show');
    
    //Edit
    Route::get('/departaments/{departaments}/edit', [departamentsController::class, 'edit'])->name('departaments.edit');
    Route::put('/departaments/{departaments}', [departamentsController::class, 'update'])->name('departaments.update');

    //Borrar
    Route::delete('/departaments/{departaments}', [departamentsController::class, 'destroy'])->name('departaments.destroy');
   */