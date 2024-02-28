<?php


use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\WelcomeController;
use App\HTTP\Controllers\PageController;
use App\HTTP\Controllers\HomeController;
use App\HTTP\Controllers\AboutController;
use App\HTTP\Controllers\ArticleController;
use App\HTTP\Controllers\PhotoController;
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

Route::resource('photos', PhotoController::class);

Route::get('/', [HomeController::class, 'index']);

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('/world', function () {
    return 'World';
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/user/{name}', function ($name) {
    return 'Nama Saya' . $name;
});

Route::get(
    '/posts/{post}/comments/{comment}',
    function ($postId, $commentId) {
        return "Pos ke-" . $postId . "Komentar ke-:" . $commentId;
    }
);

// Route::get('/articles/{id}', function ($nomer) {
//     return "Halaman Artikel dengan ID $nomer";
// });

Route::get('/users/{name?}', function ($name = null) {
    return 'Nama saya' . $name;
});

Route::get('/users/{name?}', function ($name = 'John') {
    return 'Nama saya' . $name;
});

Route::get('/coba/profile', function () {
    //
})->name('profile');

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
    });
    Route::get('/user/profile', function () {
    });
});

Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
    });
});
// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::Class, 'index']);
//     Route::get('/user', [PostController::Class, 'index']);
//     Route::get('/user', [EventController::Class, 'index']);
// });

Route::resource('photos',PhotoController::class)->only([
    'index','show'
]);
Route::resource('photos',PhotoController::class)->except([
    'create','store','update','destroy'
]);

Route::get('/greeting',function(){
    return view('blog.hello',['name'=>'Andi']);
});

Route::get('/greeting', [WelcomeController::class,
'greeting']);
