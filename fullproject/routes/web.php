<?php
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
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
    return view('admin.home');
});

Route::get('/',[FrontPageController::class,'index'])->name('front.home');
Route::get('/about',[FrontPageController::class,'about'])->name('front.about');
Route::get('/service',[FrontPageController::class,'service'])->name('front.service');
Route::get('/menu',[FrontPageController::class,'menu'])->name('front.menu');
Route::get('/booking',[FrontPageController::class,'booking'])->name('front.booking');
Route::get('/team',[FrontPageController::class,'team'])->name('front.team');
Route::get('/testimonial',[FrontPageController::class,'testimonial'])->name('front.testimonial');
Route::get('/contact',[FrontPageController::class,'contact'])->name('front.contact');

Route::get('/desh',function(){
    return view('dashboard');
});

Route::get('desh/create',[AdminController::class,'create'])->name('desh.create');
Route::post('desh/save',[AdminController::class,'save'])->name('desh.save');
Route::get('desh/show',[AdminController::class,'show'])->name('desh.show');
Route::get('desh/delete/{id}',[AdminController::class,'delete'])->name('desh.delete');
Route::get('desh/edit/{id}',[AdminController::class,'edit'])->name('desh.edite');
Route::post('desh/update',[AdminController::class,'update'])->name('desh.update');

/*Service */
Route::get('desh/createservice',[ServiceController::class,'createservice'])->name('desh.createservice');
Route::post('desh/saveservice',[ServiceController::class,'saveservice'])->name('desh.saveservice');
Route::get('desh/showservice',[ServiceController::class,'showservice'])->name('desh.showservice');

Route::get('desh/deleteservice/{id}',[ServiceController::class,'deleteservice'])->name('desh.deleteservice');
Route::get('desh/editservice/{id}',[ServiceController::class,'editservice'])->name('desh.editservice');
Route::post('desh/updateservice',[ServiceController::class,'updateservice'])->name('desh.updateservice');



