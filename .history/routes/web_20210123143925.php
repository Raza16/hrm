<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;

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

Route::get('/reg', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';


// Route::get('/dashboard', function () {
//     return view('backend/dashboard/index');
// })->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('backend/dashboard/index');
    });
    
    // Backend Routes
    Route::get('client/list', function () {
        return view('backend/clients/list');
    });
    Route::get('client/create', function () {
        return view('backend/clients/create');
    });

    Route::resource('cms/blog', BlogController::class);
    // Route::get('dashboard1', function () {
    //     return view('backend/dashboard/index');  
    // });

});
require __DIR__.'/auth.php';


//   Route::get('blog/create', function () {
//       return view('backend/cms/blog/create');
//   });


// Route::get('check_slug', [BlogController::class, 'check_slug']);

  // Using PHP callable syntax single example route...
  //  Route::get('/', [HomeController::class, 'index']);

  // -------------------//
  
  //--------------------------------- Frontend Routes
  

Route::get('/', function () {
    return view('frontend/index');
});

Route::get('/blog', [FrontendBlogController::class, 'blog']);
Route::get('/blog/{slug}', [FrontendBlogController::class, 'blogSingle']);
  
  Route::get('/services', function () {
      return view('frontend/services');
  });
  
  Route::get('/portfolio', function () {
      return view('frontend/portfolio');
  });
  Route::get('/single-services', function () {
      return view('frontend/single-services');
  });
  Route::get('/404', function () {
      return view('frontend/404');
  });
  Route::get('/about', function () {
      return view('frontend/about');
  });
  Route::get('/blog-single', function () {
      return view('frontend/blog-single');
  });

  Route::get('/contact', function () {
      return view('frontend/contact');
  });
  Route::get('/faqs', function () {
      return view('frontend/faqs');
  });
  Route::get('/our-team', function () {
      return view('frontend/our-team');
  });
  Route::get('/pricing', function () {
      return view('frontend/pricing');
  });
  Route::get('/single-portfolio', function () {
      return view('frontend/single-portfolio');
  });