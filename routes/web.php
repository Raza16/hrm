<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDashboardController;


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
Route::middleware(['auth', 'admin', 'logout'])->group(function () {

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('client/list', function () {
        return view('backend/clients/list');
    });
    Route::get('client/create', function () {
        return view('backend/clients/create');
    });

    Route::resource('employee', EmployeeController::class);

    Route::resource('client', App\Http\Controllers\ClientController::class);

    Route::resource('project', App\Http\Controllers\ProjectController::class);

    Route::resource('task', App\Http\Controllers\TaskController::class);

    Route::get('task-report', [App\Http\Controllers\TaskController::class, 'taskReport']);

    Route::get('task-module', [App\Http\Controllers\TaskController::class, 'taskModuleForm']);
    Route::post('task-module', [App\Http\Controllers\TaskController::class, 'taskModuleStore']);

    // Route::resource('cms/blog', BlogController::class);

    Route::resource('role', RoleController::class);

    Route::resource('user', UserController::class);

    Route::resource('leave-list', App\Http\Controllers\LeaveController::class);

    Route::get('time-tracker', [App\Http\Controllers\TimeTrackerController::class, 'index']);

    Route::delete('employee-doc/{id}', [App\Http\Controllers\EmployeeController::class, 'deleteDocs']);

    Route::get('employee-doc/{id}/view', [App\Http\Controllers\EmployeeController::class, 'viewDocs']);
});

//----------------------- User Routes
Route::group(['middleware' => ['employee', 'logout']], function () {

    Route::get('/user_account', [UserDashboardController::class, 'dashboard']);

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

});

Route::get('/', function () {
    return redirect(route('login'));
});

Auth::routes();


// Route::get('/loginmail', function () {
//     return view('layouts/login_mail');
// });


// Artisan commands
Route::get('/migrate', function() {
    $output = new \Symfony\Component\Console\Output\BufferedOutput;
    \Artisan::call('migrate', $output);
    dd($output->fetch());
});
