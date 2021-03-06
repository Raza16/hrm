<?php

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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/reg', function () {
//     return view('welcome');
// });

Route::middleware(['logout', 'role:Admin,HR'])->group(function() {

    Route::resource('employee', App\Http\Controllers\EmployeeController::class);

    Route::resource('role', App\Http\Controllers\RoleController::class);

    Route::resource('leave-list', App\Http\Controllers\LeaveController::class);

    Route::get('time-tracker', [App\Http\Controllers\TimeTrackerController::class, 'index']);
    Route::get('time-tracker/{id}/edit', [App\Http\Controllers\TimeTrackerController::class, 'edit']);
    Route::put('time-tracker/{id}', [App\Http\Controllers\TimeTrackerController::class, 'update']);
    Route::delete('time-tracker/{id}', [App\Http\Controllers\TimeTrackerController::class, 'destory']);

    Route::get('time-breaker/{id}', [App\Http\Controllers\TimeTrackerController::class, 'editBreakTime']);
    Route::put('time-breaker/{id}', [App\Http\Controllers\TimeTrackerController::class, 'updateBreakTime']);

    Route::get('employee-doc/{id}/view', [App\Http\Controllers\EmployeeController::class, 'viewDocs']);

    Route::get('/emp-doc-download/{id}', [App\Http\Controllers\EmployeeController::class, 'docDownload']);
    Route::delete('/emp-doc-delete/{id}', [App\Http\Controllers\EmployeeController::class, 'deleteDocs']);

    Route::resource('payslip', App\Http\Controllers\PayslipController::class);

    Route::get('generate-pdf/{id}', [App\Http\Controllers\PayslipController::class, 'generatePDF']);

    Route::resource('department', App\Http\Controllers\DepartmentController::class);

    Route::resource('user', App\Http\Controllers\UserController::class);

});

Route::middleware(['logout', 'role:Admin,Manager'])->group(function() {

    Route::resource('client', App\Http\Controllers\ClientController::class);
    Route::resource('client-invoice', App\Http\Controllers\ClientInvoiceController::class);
    Route::get('client-invoice/create/{id}', [App\Http\Controllers\ClientInvoiceController::class, 'createInvoice']);

    Route::resource('project', App\Http\Controllers\ProjectController::class);

    Route::resource('task-tracker', App\Http\Controllers\TaskController::class);
    Route::get('task-report', [App\Http\Controllers\TaskController::class, 'taskReport']);
    Route::get('view-task-progress/{id}', [App\Http\Controllers\TaskController::class, 'viewTaskProgress']);
    Route::get('check-view-progress/{id}', [App\Http\Controllers\TaskController::class, 'checkViewProgress']);
    Route::get('/edit-task-progress/{id}', [App\Http\Controllers\TaskController::class, 'taskProgressEdit']);
    Route::put('/update-task-progress/{id}', [App\Http\Controllers\TaskController::class, 'taskProgressUpdate']);
    Route::get('/edit-task/{id}', [App\Http\Controllers\TaskController::class, 'taskEdit']);
    Route::get('/admin-task-download/{id}', [App\Http\Controllers\TaskController::class, 'getDownload']);
    Route::delete('/task-doc-delete/{id}', [App\Http\Controllers\TaskController::class, 'deleteDownload']);
    // Route::get('/task-download/{id}', [App\Http\Controllers\Employee\TaskController::class, 'getDownload']);

    Route::get('task-export', [App\Http\Controllers\TaskController::class, 'taskExport']);

    Route::get('task-module', [App\Http\Controllers\TaskController::class, 'taskModuleForm']);
    Route::post('task-module', [App\Http\Controllers\TaskController::class, 'taskModuleStore']);
    Route::get('task-module/{id}', [App\Http\Controllers\TaskController::class, 'taskModuleEdit']);
    Route::put('task-module/{id}', [App\Http\Controllers\TaskController::class, 'taskModuleUpdate']);
    Route::delete('task-module/{id}', [App\Http\Controllers\TaskController::class, 'taskModuleDestory']);

});

Route::middleware(['logout', 'role:Admin'])->group(function() {
    Route::get('admin/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard']);
});

Route::middleware(['logout', 'role:Employee'])->group(function() {
    Route::get('/emp/dashboard', [App\Http\Controllers\UserDashboardController::class, 'dashboard']);
});

Route::middleware(['logout', 'role:HR'])->group(function() {
    Route::get('/hr/dashboard', [App\Http\Controllers\UserDashboardController::class, 'dashboard']);
});

Route::middleware(['logout', 'role:Manager'])->group(function() {
    Route::get('/manager/dashboard', [App\Http\Controllers\Manager\ManagerDashboardController::class, 'dashboard']);
});

Route::middleware(['logout', 'role:Manager,Employee,HR'])->group(function() {

    Route::resource('leave', App\Http\Controllers\Employee\LeaveController::class);

    Route::get('/task', [App\Http\Controllers\Employee\TaskController::class, 'index']);
    Route::get('/task/{id}/edit', [App\Http\Controllers\Employee\TaskController::class, 'edit']);
    Route::put('/task/{id}', [App\Http\Controllers\Employee\TaskController::class, 'update']);
    Route::get('/task-progress/{id}', [App\Http\Controllers\Employee\TaskController::class, 'taskProgressEdit']);
    Route::put('/task-progress/{id}', [App\Http\Controllers\Employee\TaskController::class, 'progressUpdate']);
    Route::get('/task-download/{id}', [App\Http\Controllers\Employee\TaskController::class, 'getDownload']);
    Route::post('/task-progress/{id}', [App\Http\Controllers\Employee\TaskController::class, 'taskProgressStore']);

    Route::post('/checkin', [App\Http\Controllers\UserDashboardController::class, 'checkInTimeStore']);
    Route::put('/checkout', [App\Http\Controllers\UserDashboardController::class, 'checkOutTimeUpdate']);

    Route::post('/breakin', [App\Http\Controllers\UserDashboardController::class, 'breakInTimeStore']);
    Route::put('/breakout', [App\Http\Controllers\UserDashboardController::class, 'breakOutTimeUpdate']);

    Route::get('/timebreaker/{id}', [App\Http\Controllers\UserDashboardController::class, 'viewTime']);
    Route::put('/timetracker/{id}', [App\Http\Controllers\UserDashboardController::class, 'updateTime']);

});




//----------------------- Client Routes-----------------------------------------------
// Route::get('/ClientLogin', [App\Http\Controllers\Auth\LoginController::class, 'showClientLoginForm']);
// Route::post('/ClientLogin', [App\Http\Controllers\Auth\LoginController::class, 'clientLogin']);
// Route::post('/ClientLogout', [App\Http\Controllers\Auth\LoginController::class, 'clientLogout']);

// Route::middleware(['client', 'logout'])->group(function() {

//     Route::get('/ClientDashboard', [App\Http\Controllers\Client\DashboardController::class, 'dashboard']);

//     Route::get('/client-project',  [App\Http\Controllers\Client\ProjectController::class, 'index']);
// });



// Route::view('/home', 'home')->middleware('auth');
// Route::view('/clientLogin', 'client_login');
// Route::view('/writer', 'writer');


// Route::get('/loginmail', function () {
//     return view('layouts/login_mail');
// });

Route::get('/', function () {
    return redirect(route('login'));
});

Auth::routes();


//-------------------------- Artisan commands
Route::get('/migrate', function () {
    Artisan::call('migrate', [
       '--force' => true
    ]);

    return 'Migrate Database Successfully!';
});

// Route::get('/config-cache', function() {

//     $exitCode = Artisan::call('config:cache');

//     return "Config Cache Successfully";
// });

Route::get('/storage-link', function() {

    Artisan::call('storage:link');

    return "Storage Link Successfully";
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
