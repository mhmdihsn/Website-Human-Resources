<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\ApplyjobController;

use App\Http\Controllers\ReportController;

use Barryvdh\DomPDF\Facade as PDF;  // Correct use statement


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home',[HomeController::class, 'redirect']);

Route::get('/jobdetails', function () {
    return view('jobdetails');
})->name('jobdetails');

Route::get('/digitalmarketer', function () {
    return view('digitalmarketer');
})->name('digitalmarketer');

Route::get('/webdevelopper', function () {
    return view('webdevelopper');
})->name('webdevelopper');

Route::get('/uiux', function () {
    return view('uiux');
})->name('uiux');

Route::get('/dataanalyst', function () {
    return view('dataanalyst');
})->name('dataanalyst');

Route::get('/productmanager', function () {
    return view('productmanager');
})->name('productmanager');



Route::get('/showapplyjob',[AdminController::class, 'showapplyjob']);

Route::get('/report',[ReportController::class, 'showReport']);

Route::get('/export-pdf', [ReportController::class, 'exportPdf'])->name('exportPdf');
// Route::get('/export-excel', [ReportController::class, 'exportExcel'])->name('exportExcel');

Route::post('/applyjob',[ApplyjobController::class, 'store'])->name('applyjob.store');
Route::get('/applyjob', [ApplyjobController::class, 'create'])->name('applyjob.create');

Route::get('/showapplyjob', [AdminController::class, 'showapplyjob']);

Route::post('/applyjob/accept/{id}', [AdminController::class, 'acceptApplyjob'])->name('applyjob.accept');
Route::post('/applyjob/cancel/{id}', [AdminController::class, 'cancelApplyjob'])->name('applyjob.cancel');

Route::post('/update-applyjob-status', [ApplyjobController::class, 'updateStatus']);

use App\Http\Controllers\ChartController;

Route::get('/charts', [ChartController::class, 'index'])->name('charts.index');

// Route::get('/chart', [ApplyJobController::class, 'showChart']);

// Route::get('/body', [ApplyjobController::class, 'body'])->name('body');








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
