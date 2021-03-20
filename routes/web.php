<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;

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


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/reg', function () {
//     return view('welcome');
// });

//----------------------- Admin Routes
Route::middleware(['auth', 'admin', 'logout'])->group(function() {

    Route::get('admin/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard']);

    // Route::get('client/list', function () {
    //     return view('backend/clients/list');
    // });
    // Route::get('client/create', function () {
    //     return view('backend/clients/create');
    // });

    Route::resource('employee', App\Http\Controllers\EmployeeController::class);

    Route::resource('client', App\Http\Controllers\ClientController::class);

    Route::resource('client-invoice', App\Http\Controllers\ClientInvoiceController::class);

    Route::resource('project', App\Http\Controllers\ProjectController::class);

    Route::resource('task', App\Http\Controllers\TaskController::class);

    Route::get('task-report', [App\Http\Controllers\TaskController::class, 'taskReport']);

    Route::get('task-module', [App\Http\Controllers\TaskController::class, 'taskModuleForm']);
    Route::post('task-module', [App\Http\Controllers\TaskController::class, 'taskModuleStore']);

    Route::resource('role', App\Http\Controllers\RoleController::class);

    Route::resource('user', App\Http\Controllers\UserController::class);

    Route::resource('leave-list', App\Http\Controllers\LeaveController::class);

    Route::get('time-tracker', [App\Http\Controllers\TimeTrackerController::class, 'index']);

    Route::put('time-tracker/{id}/edit', [App\Http\Controllers\TimeTrackerController::class, 'update']);

    Route::delete('employee-doc/{id}', [App\Http\Controllers\EmployeeController::class, 'deleteDocs']);

    Route::get('employee-doc/{id}/view', [App\Http\Controllers\EmployeeController::class, 'viewDocs']);

    Route::resource('payslip', App\Http\Controllers\PayslipController::class);

    Route::get('generate-pdf/{id}', [App\Http\Controllers\PayslipController::class, 'generatePDF']);

});

//----------------------- User Routes
Route::group(['middleware' => ['employee', 'logout']], function() {

    Route::get('/user_account', [App\Http\Controllers\UserDashboardController::class, 'dashboard']);

    Route::get('/employee-task', [App\Http\Controllers\Employee\TaskController::class, 'index']);
    Route::get('/employee-task/{id}/edit', [App\Http\Controllers\Employee\TaskController::class, 'edit']);
    Route::put('/employee-task/{id}', [App\Http\Controllers\Employee\TaskController::class, 'update']);

    Route::get('/employee-task/{id}', [App\Http\Controllers\Employee\TaskController::class, 'getDownload']);

    Route::get('/employee-task-progress/{id}/task-progress', [App\Http\Controllers\Employee\TaskController::class, 'taskProgressForm']);

    Route::post('/employee-task-progress/{id}', [App\Http\Controllers\Employee\TaskController::class, 'taskProgressStore']);

    Route::resource('leave', App\Http\Controllers\Employee\LeaveController::class);

    Route::post('/checkin', [App\Http\Controllers\UserDashboardController::class, 'checkInTimeStore']);
    Route::post('/checkout', [App\Http\Controllers\UserDashboardController::class, 'checkOutTimeUpdate']);

    Route::post('/breakin', [App\Http\Controllers\UserDashboardController::class, 'breakInTimeStore']);
    Route::post('/breakout', [App\Http\Controllers\UserDashboardController::class, 'breakOutTimeUpdate']);

    Route::get('/timetracker/{id}', [App\Http\Controllers\UserDashboardController::class, 'updateTime']);

});

Route::get('/', function () {
    return redirect(route('login'));
});

Auth::routes();


// Route::get('/loginmail', function () {
//     return view('layouts/login_mail');
// });


//-------------------------- Artisan commands

// Route::get('/migrate', function () {
//     Artisan::call('migrate', [
//        '--force' => true
//     ]);

//     return 'Migrate Database Successfully!';
// });

Route::get('/config-cache', function() {

    $exitCode = Artisan::call('config:cache');

    return "Config Cache Successfully";
});

// Route::get('/dbseed', function () {
//     Artisan::call('db:seed', [
//        '--force' => true
//     ]);

//     return 'DB Seed completed!';
// });


// Route::get('/composer-update', function () {
//     Artisan::call('composer update', [
//        '--force' => true
//     ]);

//     return 'Composer Updated!';
// });
