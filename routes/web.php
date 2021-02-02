<?php

use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ReponseController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;

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
    return view('home');
});




require __DIR__ . '/auth.php';



Route::resource('modules', ModuleController::class);
Route::resource('questions', QuestionController::class);
Route::resource('quizzes', QuizController::class);
Route::resource('reponses', ReponseController::class);
Route::resource('users', UserController::class);


Route::group(['middleware' => ['auth']], function () {

    Route::resource('modules', ModuleController::class)->only([
        'create', 'store', 'edit', 'update', 'delete'
    ]);
    Route::resource('questions', QuestionController::class)->only([
        'create', 'store', 'edit', 'update', 'delete'
    ]);
    Route::resource('quizzes', QuizController::class)->only([
        'create', 'store', 'edit', 'update', 'delete'
    ]);
    Route::resource('reponses', ReponseController::class)->only([
        'create', 'store', 'edit', 'update', 'delete'
    ]);
    Route::resource('users', UserController::class)->only([
        'create', 'store', 'edit', 'update', 'delete'
    ]);

    Route::get('/quizzes/quiz/{id}', [QuizController::class, 'quiz']);
    Route::post('/reponses_user', [UserController::class, 'reponseUser']);
    Route::get('/users/profile/{id}', [UserController::class, 'user']);
    Route::get('/dashboard', [DashboardController::class, 'entry']);

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/users');
    });

});
