<?php

use App\Http\Controllers\{DeparmentController, EmployeeController, HomeController, MyaccountController, NoticeController, SettingsController, StudentsAuth, StudentsController, TeacherController, TeachersAuth, TeachersController, TeachersManageController};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// MY Account

Route::get('/myaccount', [MyaccountController::class, 'myaccount'])->name('myaccount.index');
Route::post('/myaccount/update', [MyaccountController::class, 'update'])->name('myaccount.update');
Route::get('/myaccount/edit', [MyaccountController::class, 'edit'])->name('myaccount.edit');
Route::get('/myaccount/add/admin', [MyaccountController::class, 'addAdmin'])->name('admin.add');
Route::get('/myaccount/admin', [MyaccountController::class, 'storeAdmin'])->name('admin.store');


// Settings

Route::get('/lockscreen', [SettingsController::class, 'lockscreen'])->name('lockscreen.lock');
Route::get('/settings', [SettingsController::class, 'settings'])->name('settings.index');
Route::get('/settings/update', [SettingsController::class, 'update'])->name('settings.update');

//Department

Route::resource('/departents',DeparmentController::class);

// Teachers

Route::resource('/teachers', TeachersController::class);
Route::post('/teachers/details',[TeachersController::class, 'status'])->name('teachers.status');
Route::get('/teachers/details',[TeachersController::class, 'show'])->name('teachers.show');
Route::get('/teacher/login',[TeachersController::class, 'login'])->name('teacher.login');

// Students

// Route::resource('/students', StudentsController::class);
Route::get('/students/computer',[StudentsController::class,'computer'])->name('students.computer');
Route::get('/students/civil',[StudentsController::class,'civil'])->name('students.civil');
Route::get('/students/electrical',[StudentsController::class,'electrical'])->name('students.electrical');
Route::get('/students/textile',[StudentsController::class,'electrical'])->name('students.textile');
Route::get('/students/mechanical',[StudentsController::class,'mechanical'])->name('students.mechanical');
Route::get('/students/nursing',[StudentsController::class,'nursing'])->name('students.nursing');
Route::get('/students/add',[StudentsController::class,'create'])->name('students.create');
Route::get('/student/details',[StudentsController::class,'show'])->name('students.show');
Route::get('/students/edit',[StudentsController::class,'edit'])->name('students.edit');
Route::get('/students/update',[StudentsController::class,'update'])->name('students.update');
Route::get('/students/distroy',[StudentsController::class,'distroy'])->name('students.distroy');

Route::get('/students/semester3-4',[StudentsController::class,'semester3_4'])->name('students.sem3_4');
Route::get('/students/semester5-6',[StudentsController::class,'semester5_6'])->name('students.sem5_6');
Route::get('/students/semester7-8',[StudentsController::class,'semester7_8'])->name('students.sem7_8');
Route::get('/student/login',[StudentsController::class,'login'])->name('student.login');


// Employee

Route::resource('/employee',EmployeeController::class);

// Notice

Route::resource('/notice', NoticeController::class);


