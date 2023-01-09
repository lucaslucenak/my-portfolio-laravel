<?php

use \App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\TestimonialController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index']);

Route::get('/knowledge', [KnowledgeController::class, 'index']);

Route::get('/professional', [ProfessionalController::class, 'index']);

Route::get('/educational', [EducationalController::class, 'index']);

Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::get('/testimonial', [TestimonialController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);
