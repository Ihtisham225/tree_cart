<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemDetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\VideoController;
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


Route::get('/', function () {
    return view('welcome2');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',
 [ProductController::class, 'showUserProduct'])->name('dashboard');



//Custom Routes

//Home Page Route
Route::get('/home',
 [ProductController::class, 'showAllProduct'])->name('home');


//Cart Route
Route::get('/cart', function () {
    return view('custom.cart');
})->name('cart');


Route::post('/cart', [CartController::class, 'myCart'])->name('cart');

//Updating Quantity
Route::post('/update', [CartController::class, 'updateProduct'])->name('update');

//Deleting an item
Route::get('/delete/{id}', [CartController::class, 'deleteItem'])->name('delete');

//Clearing Cart
Route::get('/clear', [CartController::class, 'clearCart'])->name('clear');

//About Route
Route::get('/about', function () {
    return view('custom.about');
})->name('about');

//Contact Route
Route::get('/contact', function () {
    return view('custom.contact');
})->name('contact');

//Feedback Success Route
Route::post('/feedback', [ItemDetailController::class, 'feedback'])->name('feedback');

//Item-Detail Route
Route::get('/detail/{id}', [ItemDetailController::class, 'itemDetail'])->name('detail');


//Products Routes
Route::get('/newproduct', [ProductController::class, 'newProduct'])->name('newproduct');
Route::post('/dashboard', [ProductController::class, 'storeProduct'])->name('storeproduct');


//Checkout Page Route
Route::get('/checkout/{price}',[CartController::class, 'checkOut'])->name('checkout');


//Edit or delte a product Route
Route::get('/productdetail/{id}',[ProductController::class, 'productDetail'])->name('productDetail');

Route::post('/edit',[ProductController::class, 'editProduct'])->name('editProduct');

Route::get('/deleteproduct/{id}',[ProductController::class, 'deleteProduct'])->name('deleteProduct');


//Searcing product Route
Route::get('/searchproduct',[ProductController::class, 'searchProduct'])->name('searchProduct');


//Customer Route
Route::get('/customor', function () {
    return view('custom.customer_form');
})->name('customerForm');

Route::post('/placeorder',[ItemDetailController::class, 'placeOrder'])->name('placeorder');






//Videos routes
Route::get('/list_videos', [VideoController::class, 'list'])->name('videos');
Route::get('/add_video', [VideoController::class, 'add_video'])->name('add_video');
Route::post('/save_video', [VideoController::class, 'save_video'])->name('save_video');
Route::get('/edit_video/{id}', [VideoController::class, 'edit_video'])->name('edit_video');
Route::post('/update_video', [VideoController::class, 'update_video'])->name('update_video');
Route::get('/show_video/{id}', [VideoController::class, 'show_video'])->name('show_video');
Route::post('/delete_video/{id}', [VideoController::class, 'delete_video'])->name('delete_video');


//MCQ routes
Route::get('/list_mcq', [QuizController::class, 'list'])->name('mcqs');
Route::get('/add_mcq/{id}', [QuizController::class, 'add_mcq'])->name('add_mcq');
Route::post('/save_mcq', [QuizController::class, 'save_mcq'])->name('save_mcq');
Route::get('/add_mcq', [QuizController::class, 'add_quiz'])->name('add_quiz');
Route::post('/save_quiz', [QuizController::class, 'save_quiz'])->name('save_quiz');
Route::get('/edit_quiz', [QuizController::class, 'edit_quiz'])->name('edit_quiz');
Route::post('/update_quiz', [QuizController::class, 'update_quiz'])->name('update_quiz');
Route::post('/delete_quiz', [QuizController::class, 'delete_quiz'])->name('delete_quiz');