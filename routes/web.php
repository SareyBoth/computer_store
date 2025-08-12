<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AccessoryController;
use App\Http\Controllers\Dashboard\LaptopController;
use App\Http\Controllers\Dashboard\PCHardwareController;
use App\Http\Controllers\Dashboard\PCSetController;
use App\Http\Controllers\Page\HomePageController;
use App\Http\Controllers\Page\AccessoryPageController;
use App\Http\Controllers\Page\PCHardwarePageController;
use App\Http\Controllers\Page\PCSetPageController;
use App\Http\Controllers\Page\LocationController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Accessory
    Route::get('/dashboard/accessory', [AccessoryController::class, 'index'])->name('accessory.index');
    Route::get('/dashboard/accessory/create', [AccessoryController::class, 'create'])->name('accessory.create');
    Route::get('/dashboard/accessory/edit/{accessory}', [AccessoryController::class, 'edit'])->name('accessory.edit');
    Route::put('/dashboard/accessory/update/{accessory}', [AccessoryController::class, 'update'])->name('accessory.update');
    Route::post('/dashboard/accessory/store', [AccessoryController::class, 'store'])->name('accessory.store');
    Route::delete('/dashboard/accessory/{id}', [AccessoryController::class, 'destroy'])->name('accessory.destroy');

    //Laptop
    Route::get('/dashboard/laptop', [LaptopController::class, 'index'])->name('laptop.index');
    Route::get('/dashboard/laptop/create', [LaptopController::class, 'create'])->name('laptop.create');
    Route::get('/dashboard/laptop/edit/{laptop}', [LaptopController::class, 'edit'])->name('laptop.edit');
    Route::put('/dashboard/laptop/update/{laptop}', [LaptopController::class, 'update'])->name('laptop.update');
    Route::post('/dashboard/laptop/store', [LaptopController::class, 'store'])->name('laptop.store');
    Route::delete('/dashboard/laptop/{id}', [LaptopController::class, 'destroy'])->name('laptop.destroy');

    //PC Hardware
    Route::get('/dashboard/pc-hardware', [PCHardwareController::class, 'index'])->name('pc_hardware.index');
    Route::get('/dashboard/pc-hardware/create', [PCHardwareController::class, 'create'])->name('pc_hardware.create');
    Route::get('/dashboard/pc-hardware/edit/{pcHardware}', [PCHardwareController::class, 'edit'])->name('pc_hardware.edit');
    Route::put('/dashboard/pc-hardware/update/{pcHardware}', [PCHardwareController::class, 'update'])->name('pc_hardware.update');
    Route::post('/dashboard/pc-hardware/store', [PCHardwareController::class, 'store'])->name('pc_hardware.store');
    Route::delete('/dashboard/pc-hardware/{id}', [PCHardwareController::class, 'destroy'])->name('pc_hardware.destroy');

    //PC Sets
    Route::get('/dashboard/pc-set', [PCSetController::class, 'index'])->name('pc_set.index');
    Route::get('/dashboard/pc-set/create', [PCSetController::class, 'create'])->name('pc_set.create');
    Route::get('/dashboard/pc-set/edit/{pcSet}', [PCSetController::class, 'edit'])->name('pc_set.edit');
    Route::put('/dashboard/pc-set/update/{pcSet}', [PCSetController::class, 'update'])->name('pc_set.update');
    Route::post('/dashboard/pc-set/store', [PCSetController::class, 'store'])->name('pc_set.store');
    Route::delete('/dashboard/pc-set/{id}', [PCSetController::class, 'destroy'])->name('pc_set.destroy');
    
});

//page 

Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', [HomePageController::class, 'home'])->name('home');
Route::get('/accessory', [AccessoryPageController::class, 'main'])->name('accessory');
Route::get('/pc-hardware', [PCHardwarePageController::class, 'main'])->name('pc_hardware');
Route::get('/pc-set', [PCSetPageController::class, 'main'])->name('pc_set');
Route::get('/location', [LocationController::class, 'location'])->name('location');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
