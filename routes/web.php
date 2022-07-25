<?php

use App\Http\Controllers\DenemeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\StudentController;
use App\Models\Uyeler;
use App\Http\Controllers\UyeController;
use App\Models\Student;
use App\Models\User;
use PHPUnit\Framework\MockObject\Builder\Stub;

Route::get('/form', [Formislemleri::class, 'index'])->name('form');
Route::post('/form-ekle', [Formislemleri::class, 'ekle'])->middleware('Kufurmidd')->name('form-ekle');

Route::get('/tema', function () {
    return view('tema');
});
Route::get('/', function () {
    return view('sayfalar.home');
});

Route::get('/hizmet', [UyeController::class, 'index'])->name('hizmet');


Route::get('/deneme', [DenemeController::class, 'index']);


Route::post('/ekle', [DenemeController::class, 'ekle'])->name('ekle');

Route::get('/delete/{id}', [DenemeController::class, 'delete'])->name('delete');

Route::get('/show/{id}', [DenemeController::class, 'show'])->name('show');

Route::post('/edit/update/{id}', [DenemeController::class, 'update'])->name('edit');


Route::post('/ara', [DenemeController::class, 'arama'])->name('ara');

// paginate icin iki aynı route post ve get ile verildi.
Route::post('/uyeAra', [DenemeController::class, 'uyeAra'])->name('uyeAra');
Route::get('/uyeAra', [DenemeController::class, 'uyeAra'])->name('uyeAra');


Route::post('/userEkle', [DenemeController::class, 'user_ekle'])->name('userEkle');


Route::group(['prefix' => 'students'], function () {

    Route::get('/', [StudentController::class, 'index'])->name('students');
    Route::post('create', [StudentController::class, 'student_create'])->name('create');
    Route::get('all-students', [StudentController::class, 'all_students'])->name('all_students');
    Route::post('student-find', [StudentController::class, 'student_find'])->name('find');
    Route::get('/{id}', [StudentController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [StudentController::class, 'update'])->name('update');
});
