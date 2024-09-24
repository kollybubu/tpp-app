<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\articlecontroller;
use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleCotroller;
use App\Http\Controllers\UserController;
use App\Models\Product;

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
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('index');
});


// //static Route

// Route::get('/blog', function(){
//     return "Hello, this is Blog Page";
// });

// //dynamuc Routee
// Route::get('/blogs/{id}', function($id){
//     return "Heloo, this is blog detail - $id";
// });


// //Rout name 
// Route::get('/dashboard', function(){
//     return "welcome From TPP Program Dashboard";
// })->name("dashboard.tpp");

// Route::get('/tpp', function(){
//     return redirect()->route('dashboard.tpp');
// });

// //gruop route

// Route::prefix('dashboard')->group(function(){
//     Route::get('/admin', function(){
//         return "this is admin dashboard!";
//     });
//     Route::get('/users', function(){
//         return "this is user dashboard!";
//     });
// });

//laravel view
// Route::get('/', function(){
//     return view('index');
// });
// Route::get('/students', [StudentController::class, 'index']);


// Route::get('/', function(){
//     return view('index');
// });

// Route::get('', function(){
//     return view('index');
// });
Route::get('/article', [articlecontroller::class, 'index']);


Route::get('/category', [categorycontroller::class, 'index'])->name('category.index');

Route::get('/category/create', [categorycontroller::class, 'create'])-> name('category.create');
Route::post('/category/store', [categorycontroller::class, 'store'])->name('category.store');
Route::get('/category/{id}', [categorycontroller::class, 'edit'])-> name('category.edit');
Route::post('/category/{id}/update', [categorycontroller::class, 'update'])->name('category.update');
Route::post('/category/{id}', [categorycontroller::class, 'delete'])->name('category.delete');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');

Route::get('/products/create', [ProductController::class, 'create'])-> name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])-> name('products.store');

Route::get('/products/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/{id}/update', [ProductController::class, 'update'])->name('products.update');
Route::post('/categories/{id}', [ProductController::class, 'delete'])->name('products.delete');


Route::resource('/User', UserController::class);
Route::resource('/role', RoleCotroller::class);
Route::resource('/permission', PermissionController::class);

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
