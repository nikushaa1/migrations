<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $quizzes = [
        [
            'name' => 'Quiz 1',
            'photo' => 'quiz1.jpg',
            'status' => 'active'
        ],
        [
            'name' => 'Quiz 2',
            'photo' => 'quiz2.jpg',
            'status' => 'inactive'
        ],
        [
            'name' => 'Quiz 3',
            'photo' => 'quiz3.jpg',
            'status' => 'pending'
        ],
    ];

    return view('home', compact('quizzes'));
})->name('home');

Route::post('/subscribe', function () {

})->name('subscribe');



Route::get('/routes', [RouteController::class, 'index']);
Route::get('/routes/create', [RouteController::class, 'create']);
Route::post('/routes', [RouteController::class, 'store']);
// Add other routes as needed


Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');
Route::get('/quizzes/{quiz}/edit', [QuizController::class, 'edit'])->name('quizzes.edit');
Route::put('/quizzes/{quiz}', [QuizController::class, 'update'])->name('quizzes.update');


// routes/web.php

use App\Http\Controllers\QuizController;

Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
// Add other routes as needed
