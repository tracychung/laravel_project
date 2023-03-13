<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HotelController;
use App\Models\Student;

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




Route::get('/', function () {
    $data=Student::get();
    return view('student.index', ['data' => $data]);
});


 
// Route::get('/sayHello', [StudentController::class, 'sayHello']);

// 自訂放上面
// resource 放下面
//http://localhost/student_excel

//StudentController
Route::get('/student_excel', [StudentController::class, 'excel'])->name('students.excel');
Route::get('/student_child', [StudentController::class, 'childPage'])->name('child');
Route::get('/student_p1', [StudentController::class, 'page1'])->name('page1');
Route::resource('students', StudentController::class);


Route::get('f1', [HotelController::class, 'f1'])->name('hotels.1');
Route::get('f2', [HotelController::class, 'f2'])->name('hotels.2');
Route::get('f3', [HotelController::class, 'f3'])->name('hotels.3');
Route::resource('hotels', HotelController::class);

Route::get('students_excel', [StudentsController::class, 'excel'])->name('student_excel');


