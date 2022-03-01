<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lms;


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

// by default courses list will appear 
// Route::get('/', function () {
//     $data['name'] = '';
//     // return view('lms/mycourses')->with($data);
//     return view('lms/myCourses')->with($data);
// });

// Route::get('/myAccount',function (){
//     $data['name'] = '';
//     return view('lms/myAccount')->with($data);
// });

// Route::get('/studyNotes',function (){
//     $data['name'] = '';
//     return view('lms/studyNotes')->with($data);
// });

// Route::any('/demo',function (){
// });

// Route::get('/examinations',function (){
//     $data['name'] = '';
//     return view('lms/examinations')->with($data);
// });

// Route::get('/videos',function (){
//     $data['name'] = '';
//     return view('lms/videos')->with($data);
// });

// Route::get('/analytics',function (){
//     $data['name'] = '';
//     return view('lms/analytics')->with($data);
// });  


Route::get('/',[Lms::class,'index']);
Route::get('/iframe',[Lms::class,'index2']);
// Route::get('/iframeView',[Lms::class,'iframeView']);



Route::get('/myAccount',[Lms::class,'myAccount']);
Route::get('/studyNotes',[Lms::class,'studyNotes']);
Route::get('/tests',[Lms::class,'tests']);
Route::get('/videos',[Lms::class,'videos']);
Route::get('/analytics',[Lms::class,'analytics']);
Route::get('/browseCourse',[Lms::class,'browseCourse']);
Route::get('/watchVideo',[Lms::class,'watchVideo']);
Route::get('/exam',[Lms::class,'exam']);


