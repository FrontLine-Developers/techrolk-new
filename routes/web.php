<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/',[ServiceController::class,'Home'])->name('Home');

Route::get('/services', function () {
    return view('services');
});

Route::get('/services#drone-solutions', function () {
    return view('Services#drone-solutions');
});

Route::get('/services#graphic-designing', function () {
    return view('Services#graphic-designing');
});

Route::get('/services#3d-cad', function () {
    return view('Services#3d-cad');
});

Route::get('/services#3d-printing', function () {
    return view('Services#3d-printing');
});

Route::get('/services-drone-solutions', function () {
    return view('drone_solutions');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cookies', function () {
    return view('cookies');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/shipping-details', function () {
    return view('shipping');
});

Route::get('/refund-policy', function () {
    return view('refund');
});

Route::get('/shop', function () {
    return view("shop.shop_index");
});

Route::get('/Shop', function () {
    return view("shop.shop_index");
});


Route::get('/shop/product', function () {
    return view("shop.shop_product_details");
});

Route::get('/shop/cart', function () {
    return view("shop.shop_cart");
});


Route::get('/shop/login', function () {
    return view("shop.shop_user_login");
});

Route::get('/shop/register', function () {
    return view("shop.shop_user_register");
});


Route::get('/shop/categories', function () {
    return view("shop.shop_category");
});

Route::get('/shop/search', function () {
    return view("shop.search-results");
});

Route::get('/shop/all-products', function () {
    return view("shop.all-products");
});
/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
});
/*-----------------------------------------------------------*/
/*Route::get('/aservice', function () {
    return view('admin.service_add');
});
Route::get('/show', function () {
    return view('admin.show');
});



Route::get('/aservice','AdminController');
Route::post('aservice','AdminController@aservice');
Route::get('show/{id}','AdminController@show');*/

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/aservice',[AdminController::class,'index'])->name('dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::post('/aservice',[AdminController::class,'aservice'])->name('dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/show/{id}',[AdminController::class,'show'])->name('dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/showall',[AdminController::class,'showall'])->name('dashboard');
});

/*-----------------------------------------------------------------------------------*/
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard/index',[AdminController::class,'dashboard_index'])->name('dashboard_index');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard/services',[AdminController::class,'dashboard_services'])->name('dashboard_services');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard/Add-services',[AdminController::class,'Service_index'])->name('Service_index');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::post('/dashboard/Add-services',[AdminController::class,'dashboard_add_services'])->name('dashboard_add_services');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/Edit-services/{id}',[AdminController::class,'Service_Details'])->name('Service_Details');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::post('/Edit-services/{id}',[AdminController::class,'Edit_Service_Details'])->name('Service_Details');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/Delete-service/{id}',[AdminController::class,'Delete_Service_Details'])->name('Service_Details');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard/Portfolio',[AdminController::class,'Portfolio'])->name('Portfolio');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard/Add-Portfolio',[AdminController::class,'Portfolio_Index'])->name('Portfolio_Index');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::post('/dashboard/Add-Portfolio',[AdminController::class,'Add_Portfolio'])->name('Add_Portfolio');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/Edit-portfolio/{id}',[AdminController::class,'portfolio_Details'])->name('Service_Details');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::post('/Edit-portfolio/{id}',[AdminController::class,'Edit_portfolio_Details'])->name('portfolio_Details');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/Delete-portfolio/{id}',[AdminController::class,'Delete_portfolio_Details'])->name('portfolio_Delete');
});
Route::get('/services',[ServiceController::class,'Services'])->name('Shop');
Route::get('/portfolio',[PortfolioController::class,'portfolio'])->name('portfolio');


Route::get('/service/{book_id}', [ServiceController::class, 'portfoliosByBook'])->name('portfoliosByBook');

Route::get('/portfolio/{portfolio_id}', [ServiceController::class, 'portfoliosByPortfolio'])->name('portfoliosByPortfolio');
 


Route::middleware(['redirect.product.url'])->group(function () {
    Route::get('product/{product}', function(Product $product) {
        // ...
    });
});

