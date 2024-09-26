<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use PhpParser\Node\Stmt\Return_;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/sla',function(){
    return View('Dashboard');
});
 

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Rotas do Crud
    Route::get('/create', [UsuarioController::class, 'create'])->name('app.create');
    Route::post('/store',[UsuarioController::class,'store'])->name('app.store');
    Route::get('/read',[UsuarioController::class, 'index'])->name('app.read');
    Route::get('/update/{id}',[UsuarioController::class, 'update'])->name('app.update');
    Route::put('/update/{id}',[UsuarioController::class, 'update'])->name('app.update');
    Route::get('/delete/{id}',[UsuarioController::class, 'destroy'])->name('app.delete');

     //Route::resource('/usuarios',[UsuarioController::class]);
    
});

require __DIR__.'/auth.php';
