<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\OratoryController;
use App\Http\Controllers\DanceController;
use App\Http\Controllers\TicController;
use App\Http\Controllers\LeadershipController;

Route::view('/', 'home')->name('home');
Route::view('programs', 'programs')->name('programs.index');
Route::get('workshops',[WorkshopController::class,'index'])->name('workshops.index');
Route::get('workshops/oratory',[OratoryController::class,'index'])->name('workshops.oratory.index');
Route::get('workshops/leadership',[LeadershipController::class,'index'])->name('workshops.leadership.index');
Route::get('workshops/tic',[TicController::class,'index'])->name('workshops.tic.index');
Route::get('workshops/dance',[DanceController::class,'index'])->name('workshops.dance.index');

/*Route::prefix('workshops')->group(function(){
    Route::name('workshops.')->group(function(){
        Route::get('/', [WorkshopController::class,'index'])->name('index');
            Route::prefix('oratory')->group(function(){
                Route::name('oratory.')->group(function(){
                    Route::get('/', [OratoryController::class,'index'])->name('index');

                });
            });
            Route::prefix('tic')->group(function(){
                Route::name('tic.')->group(function(){
                    Route::get('/', [TicController::class,'index'])->name('index');


                });
            });
            Route::prefix('dance')->group(function(){
                Route::name('dance.')->group(function(){
                    Route::get('/', [DanceController::class,'index'])->name('index');

                });
            });
            Route::prefix('leadership')->group(function(){
                Route::name('leadership.')->group(function(){
                    Route::get('/', [LeadershipController::class,'index'])->name('index');

                });
            });

    });
});*/
Route::view('advice', 'advice')->name('advice.index');
Route::view('contacts', 'contacts')->name('contacts.index');

