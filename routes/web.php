<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\CourseController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/',[DisplayController::class,'dashboard'])->name('dashboard');
// // Route::get('/courses',[DisplayController::class,'courses'])->name('courses');
// Route::get('/teachers',[DisplayController::class,'teachers'])->name('teachers');
// Route::get('/students',[DisplayController::class,'students'])->name('students');
// Route::get('/improvements',[DisplayController::class,'improvements'])->name('improvements');
// Route::get('/messages',[DisplayController::class,'messages'])->name('messages');

// Route::get('/main',[DisplayController::class,'main'])->name('main');
// Route::get('/subjects',[DisplayController::class,'subjects'])->name('subjects');
// Route::get('/addcourse',[DisplayController::class,'addcourse'])->name('addcourse');
// Route::get('/upload-assignments',[DisplayController::class,'upload_assignments'])->name('upload');
// Route::get('/report',[DisplayController::class,'report'])->name('report');
// Route::get('/batches',[DisplayController::class,'batches'])->name('batches');
// Route::get('/all-batches',[DisplayController::class,'allBatches'])->name('allBatches');
// Route::get('/msg',[DisplayController::class,'msg'])->name('msg');
// Route::get('/reminders',[DisplayController::class,'reminders'])->name('reminders');

Route::get('/index',[DisplayController::class,'index'])->name('index');
// Route::get('/batchStudent',[DisplayController::class,'batchStudent'])->name('batchStudent')
Route::get('/single',[DisplayController::class,'single'])->name('single');
// Route::get('/subjectList',[DisplayController::class,'subjectList'])->name('subjectList');
Route::get('/assign',[DisplayController::class,'assign'])->name('assign');
// Route::get('/syllabus',[DisplayController::class,'syllabus'])->name('syllabus');
// Route::get('/reminders',[DisplayController::class,'reminderStudent'])->name('reminders');
Route::get('/attendence',[DisplayController::class,'attendence'])->name('attendence');
Route::get('/courses',[DisplayController::class,'courses'])->name('courses');
Route::get('/notify',[DisplayController::class,'notify'])->name('notify');
Route::get('/profile',[DisplayController::class,'profile'])->name('profile');
Route::get('/help',[DisplayController::class,'help'])->name('help');



Route::get('/html',[CourseController::class,'html'])->name('html');
Route::get('/css',[CourseController::class,'css'])->name('css');
Route::get('/js',[CourseController::class,'js'])->name('js');
Route::get('/jq',[CourseController::class,'jquery'])->name('jquery');
Route::get('/c',[CourseController::class,'c'])->name('c');
Route::get('/php',[CourseController::class,'php'])->name('php');
Route::get('/laravel',[CourseController::class,'laravel'])->name('laravel');
Route::get('/mysql',[CourseController::class,'mysql'])->name('mysql');
Route::get('/git',[CourseController::class,'git'])->name('git');
Route::get('/ajax',[CourseController::class,'ajax'])->name('ajax');

Route::get('/desc',[CourseController::class,'desc'])->name('desc');
Route::get('/next',[CourseController::class,'next'])->name('next');
