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

use App\Http\Controllers\Frontend\PagesController as FrontendPagesController;
use App\Http\Controllers\Frontend\ProductsController as FrontendProductsController;
use App\Http\Controllers\Frontend\VerificationController;
use App\Http\Controllers\Frontend\CategoriesController as FrontendCategoriesController;
use App\Http\Controllers\Frontend\UsersController;
use App\Http\Controllers\Frontend\CartsController;
use App\Http\Controllers\Frontend\CheckoutsController;

use App\Http\Controllers\Backend\PagesController as BackendPagesController;
use App\Http\Controllers\Auth\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Auth\Admin\ForgotPasswordController as AdminForgotPasswordController;
use App\Http\Controllers\Auth\Admin\ResetPasswordController as AdminResetPasswordController;
use App\Http\Controllers\Backend\BrandsController;
use App\Http\Controllers\Backend\ProductsController as BackendProductsController;
use App\Http\Controllers\Backend\CategoriesController as BackendCategoriesController;
use App\Http\Controllers\Backend\DivisionsController;
use App\Http\Controllers\Backend\OrdersController;

Route::get('/', [FrontendPagesController::class, 'index'])->name('index');
Route::get('/contact', [FrontendPagesController::class, 'contact'])->name('contact');

/*
Product Routes
All the routes for our product for frontend
*/
Route::group(['prefix' => 'products'], function () {

  Route::get('/', [FrontendProductsController::class, 'index'])->name('products');
  Route::get('/{slug}', [FrontendProductsController::class, 'show'])->name('products.show');
  Route::get('/new/search', [FrontendPagesController::class, 'search'])->name('search');

  //Category Routes
  Route::get('/categories', [FrontendCategoriesController::class, 'index'])->name('categories.index');
  Route::get('/category/{id}', [FrontendCategoriesController::class, 'show'])->name('categories.show');
});

// User Routes
Route::group(['prefix' => 'user'], function () {
  Route::get('/token/{token}', [VerificationController::class, 'verify'])->name('user.verification');
  Route::get('/dashboard', [UsersController::class, 'dashboard'])->name('user.dashboard');
  Route::get('/profile', [UsersController::class, 'profile'])->name('user.profile');
  Route::post('/profile/update', [UsersController::class, 'profileUpdate'])->name('user.profile.update');
});

// Cart Routes
Route::group(['prefix' => 'carts'], function () {
  Route::get('/', [CartsController::class, 'index'])->name('carts');
  Route::post('/store', [CartsController::class, 'store'])->name('carts.store');
  Route::post('/update/{id}', [CartsController::class, 'update'])->name('carts.update');
  Route::post('/delete/{id}', [CartsController::class, 'destroy'])->name('carts.delete');
});

// Checkout Routes
Route::group(['prefix' => 'checkout'], function () {
  Route::get('/', [CheckoutsController::class, 'index'])->name('checkouts');
  Route::post('/store', [CheckoutsController::class, 'store'])->name('checkouts.store');
});

// Admin Routes
Route::group(['prefix' => 'admin'], function () {
  Route::get('/', [BackendPagesController::class, 'index'])->name('admin.index');

  // Admin Login Routes
  Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
  Route::post('/login/submit', [AdminLoginController::class, 'login'])->name('admin.login.submit');
  Route::post('/logout/submit', [AdminLoginController::class, 'logout'])->name('admin.logout');

  // Password Email Send
  Route::get('/password/reset', [AdminForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
  Route::post('/password/resetPost', [AdminForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');

  // Password Reset
  Route::get('/password/reset/{token}', [AdminResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
  Route::post('/password/reset', [AdminResetPasswordController::class, 'reset'])->name('admin.password.reset.post');

  // Product Routes
  Route::group(['prefix' => '/products'], function () {
    Route::get('/', [BackendProductsController::class, 'index'])->name('admin.products');
    Route::get('/create', [BackendProductsController::class, 'create'])->name('admin.product.create');
    Route::get('/edit/{id}', [BackendProductsController::class, 'edit'])->name('admin.product.edit');
    Route::post('/store', [BackendProductsController::class, 'store'])->name('admin.product.store');
    Route::post('/product/edit/{id}', [BackendProductsController::class, 'update'])->name('admin.product.update');
    Route::post('/product/delete/{id}', [BackendProductsController::class, 'delete'])->name('admin.product.delete');
  });

  // Orders Routes
  Route::group(['prefix' => '/orders'], function () {
    Route::get('/', [OrdersController::class, 'index'])->name('admin.orders');
    Route::get('/view/{id}', [OrdersController::class, 'show'])->name('admin.order.show');
    Route::post('/delete/{id}', [OrdersController::class, 'delete'])->name('admin.order.delete');
    Route::post('/completed/{id}', [OrdersController::class, 'completed'])->name('admin.order.completed');
    Route::post('/paid/{id}', [OrdersController::class, 'paid'])->name('admin.order.paid');
    Route::post('/charge-update/{id}', [OrdersController::class, 'chargeUpdate'])->name('admin.order.charge');
    Route::get('/invoice/{id}', [OrdersController::class, 'generateInvoice'])->name('admin.order.invoice');
  });

  // Category Routes
  Route::group(['prefix' => '/categories'], function () {
    Route::get('/', [BackendCategoriesController::class, 'index'])->name('admin.categories');
    Route::get('/create', [BackendCategoriesController::class, 'create'])->name('admin.category.create');
    Route::get('/edit/{id}', [BackendCategoriesController::class, 'edit'])->name('admin.category.edit');
    Route::post('/store', [BackendCategoriesController::class, 'store'])->name('admin.category.store');
    Route::post('/category/edit/{id}', [BackendCategoriesController::class, 'update'])->name('admin.category.update');
    Route::post('/category/delete/{id}', [BackendCategoriesController::class, 'delete'])->name('admin.category.delete');
  });

  // Brand Routes
  Route::group(['prefix' => '/brands'], function () {
    Route::get('/', [BrandsController::class, 'index'])->name('admin.brands');
    Route::get('/create', [BrandsController::class, 'create'])->name('admin.brand.create');
    Route::get('/edit/{id}', [BrandsController::class, 'edit'])->name('admin.brand.edit');
    Route::post('/store', [BrandsController::class, 'store'])->name('admin.brand.store');
    Route::post('/brand/edit/{id}', [BrandsController::class, 'update'])->name('admin.brand.update');
    Route::post('/brand/delete/{id}', [BrandsController::class, 'delete'])->name('admin.brand.delete');
  });

  // Division Routes
  Route::group(['prefix' => '/divisions'], function () {
    Route::get('/', [DivisionsController::class, 'index'])->name('admin.divisions');
    Route::get('/create', [DivisionsController::class, 'create'])->name('admin.division.create');
    Route::get('/edit/{id}', [DivisionsController::class, 'edit'])->name('admin.division.edit');
    Route::post('/store', [DivisionsController::class, 'store'])->name('admin.division.store');
    Route::post('/division/edit/{id}', [DivisionsController::class, 'update'])->name('admin.division.update');
    Route::post('/division/delete/{id}', [DivisionsController::class, 'delete'])->name('admin.division.delete');
  });

  // District Routes
  Route::group(['prefix' => '/districts'], function () {
    Route::get('/', [DistrictsController::class, 'index'])->name('admin.districts');
    Route::get('/create', [DistrictsController::class, 'create'])->name('admin.district.create');
    Route::get('/edit/{id}', [DistrictsController::class, 'edit'])->name('admin.district.edit');
    Route::post('/store', [DistrictsController::class, 'store'])->name('admin.district.store');
    Route::post('/district/edit/{id}', [DistrictsController::class, 'update'])->name('admin.district.update');
    Route::post('/district/delete/{id}', [DistrictsController::class, 'delete'])->name('admin.district.delete');
  });

  // Slider Routes
  Route::group(['prefix' => '/sliders'], function () {
    Route::get('/', [SlidersController::class, 'index'])->name('admin.sliders');
    Route::post('/store', [SlidersController::class, 'store'])->name('admin.slider.store');
    Route::post('/slider/edit/{id}', [SlidersController::class, 'update'])->name('admin.slider.update');
    Route::post('/slider/delete/{id}', [SlidersController::class, 'delete'])->name('admin.slider.delete');
  });
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// API routes
Route::get('get-districts/{id}', function ($id) {
  return json_encode(App\Models\District::where('division_id', $id)->get());
});
