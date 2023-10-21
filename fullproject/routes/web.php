<?php
use App\Http\Controllers\FrontPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/home',function(){
    return view('front_home');
});
Route::get('/mas',function(){
    return view('front_master');
});
Route::get('/',[FrontPageController::class,'index'])->name('front.home');
Route::get('/about',[FrontPageController::class,'about'])->name('front.about');
Route::get('/service',[FrontPageController::class,'service'])->name('front.service');
Route::get('/menu',[FrontPageController::class,'menu'])->name('front.menu');
Route::get('/booking',[FrontPageController::class,'booking'])->name('front.booking');
Route::get('/team',[FrontPageController::class,'team'])->name('front.team');
Route::get('/testimonial',[FrontPageController::class,'testimonial'])->name('front.testimonial');
Route::get('/contact',[FrontPageController::class,'contact'])->name('front.contact');

