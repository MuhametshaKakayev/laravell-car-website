<?php

use App\Http\Controllers\ChekoutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get("arabalar",[HomeController::class,"show"])->name("arabalar.show");
Route::get("/",[HomeController::class,"show"])->name("arabalar.show");


Route::controller(App\Http\Controllers\AdminController::class)->group(function ()
{
    Route::get("/araba-liste","view")->name("araba.liste");
    Route::get("/araba-ekle","create")->name("araba.ekle");
    Route::post("/arabaekle","store")->name("araba.store");
    Route::get("/araba-edit/{id}","edit")->name("araba.edit");
    Route::post("/araba-update/{id}","update")->name("araba.update");
    Route::delete("/araba-delete/{id}","delete")->name("araba.destroy");
});

Route::post("/addcart/{id}",[HomeController::class,"addcart"])->name("addcart");
Route::get("/showcart",[HomeController::class,"showcart"])->name("showcart");

Route::get("/destroycart",[HomeController::class,"destroycart"])->name("cart.destroy");
Route::post("/deletecart/{id}",[HomeController::class,"deletecart"])->name("deletecart");

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get("/adminhome",[HomeController::class,"adminview"])->name("adminview");
Route::get("/admin-orders",[AdminController::class,"showorder"])->name("admin.orders");
Route::get('/status-update/{id}', [AdminController::class, 'statusupdate'])->name('status.update');

Route::post("/araba-order",[HomeController::class,"confirmorder"])->name("araba.order");
Route::post("/araba-payment",[HomeController::class,"createPaymente"])->name("araba.pay");

Route::post("/chekout.sepet",[HomeController::class,"showform"])->name("chekout.form");
Route::get("/ordershow",[HomeController::class,"ordershow"])->name("user.orders");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__.'/auth.php';
?>




<?php

/* Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard'); */

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\MessageController;



// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function () {
//     return view('app');
// });


// //Route::post('/message/submission/{id}', [MessageController::class, 'submission'])->name('user.submission');

// Route::middleware(['auth'])->group(function () {

//     Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');

//     Route::get('/user/form/add', [UserController::class, 'formadd'])->name('user.formadd');
//     Route::post('/user/form/add', [UserController::class, 'add']);

//     Route::get('/user/form/edit/{id}', [UserController::class, 'editform'])->name('user.editform');
//     Route::post('/user/form/edit/{id}', [UserController::class, 'edit']);

//     Route::get('/user/form/delete/{id}', [UserController::class, 'delete'])->name('user.deleteform');

//     Route::get('/user/message/{id}', [MessageController::class, 'show'])->name('user.message');


// });




// require __DIR__.'/auth.php';
