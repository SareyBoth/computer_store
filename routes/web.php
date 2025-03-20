<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Laptop
    Route::get('/dashboard/accessory', [AccessoryController::class, 'index'])->name('accessory.index');
    Route::get('/dashboard/accessory/create', [AccessoryController::class, 'create'])->name('accessory.create');
    Route::get('/dashboard/accessory/edit/{accessory}', [AccessoryController::class, 'edit'])->name('accessory.edit');
    Route::put('/dashboard/accessory/update/{accessory}', [AccessoryController::class, 'update'])->name('accessory.update');
    Route::post('/dashboard/accessory/store', [AccessoryController::class, 'store'])->name('accessory.store');
    Route::delete('/dashboard/accessory/{id}', [AccessoryController::class, 'destroy'])->name('accessory.destroy');

    //Accessory
    Route::get('/dashboard/laptop', [LaptopController::class, 'index'])->name('laptop.index');
    Route::get('/dashboard/laptop/create', [LaptopController::class, 'create'])->name('laptop.create');
    Route::get('/dashboard/laptop/edit/{laptop}', [LaptopController::class, 'edit'])->name('laptop.edit');
    Route::put('/dashboard/laptop/update/{laptop}', [LaptopController::class, 'update'])->name('laptop.update');
    Route::post('/dashboard/laptop/store', [LaptopController::class, 'store'])->name('laptop.store');
    Route::delete('/dashboard/laptop/{id}', [LaptopController::class, 'destroy'])->name('laptop.destroy');

    //PC Hardware
    Route::get('/dashboard/pc-hardware', [PCHardwareController::class, 'index'])->name('pc_hardware.index');
    Route::get('/dashboard/pc-hardware/create', [PCHardwareController::class, 'create'])->name('pc_hardware.create');
    Route::get('/dashboard/laptop/edit/{pc-hardware}', [LaptopController::class, 'edit'])->name('pc_hardware.edit');
    Route::get('/dashboard/pc-hardware/update/{pc-hardware}', [PCHardwareController::class, 'update'])->name('pc_hardware.update');
    Route::post('/dashboard/pc-hardware/store', [PCHardwareController::class, 'store'])->name('pc_hardware.store');
    Route::delete('/dashboard/pc-hardware/{id}', [PCHardwareController::class, 'destroy'])->name('pc_hardware.destroy');

    //PC Sets
    Route::get('/dashboard/pc-set', [PCSetController::class, 'index'])->name('pc_set.index');
    Route::get('/dashboard/pc-set/create', [PCSetController::class, 'create'])->name('pc_set.create');
    Route::get('/dashboard/laptop/edit/{pc-set}', [LaptopController::class, 'edit'])->name('pc_set.edit');
    Route::get('/dashboard/pc-set/update/{pc-set}', [PCSetController::class, 'update'])->name('pc_set.update');
    Route::post('/dashboard/pc-set/store', [PCSetController::class, 'store'])->name('pc_set.store');
    Route::delete('/dashboard/pc-set/{id}', [PCSetController::class, 'destroy'])->name('pc_set.destroy');
    
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
