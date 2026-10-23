
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shoes', [ShoeController::class, 'index']);
Route::get('/shoes/{id}', [ShoeController::class, 'show'])->name('shoes.show');
