<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\HomeController;
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
    return view('publicSite.index');
});
Route::get('/about', function () {
    return view('publicSite.about');
});

Route::resource('results',UserController::class);

Route::get("redirect", [HomeController::class, 'redirect']);

Route::resource('results',ResultController::class);

Route::get('/quiz/{id}',[QuestionController::class,'show'])->name('quiz');

Route::get('/singlecat/{id}',[ExamController::class,'show'])->name('singlecat');

Route::get('/pdashboard',[ExamController::class,'index'])->name('pdashboard');

// Route::get('/quiz',[QuestionController::class,'index'])->name('quiz');

Route::get('admin/home',[HomeController::class,'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/showCat',[CategoryController::class,'backendindex'])->name('cat');
Route::post('/storeCat',[CategoryController::class,'backendstore'])->name('catstore');
Route::get('/createCat',[CategoryController::class,'backendcreate']);
Route::post('/updateCat/{id}',[CategoryController::class,'backendupdate'])->name('catupdate');
Route::get('/deleteCat/{id}',[CategoryController::class,'backenddestroy'])->name('catdelete');
Route::get('/editCat/{id}',[CategoryController::class,'backendedit'])->name('catedit');
// here starts exam routs
Route::get('/showExam',[ExamController::class,'backendindex'])->name('exam');
Route::post('/storeExam',[ExamController::class,'backendstore'])->name('examstore');
Route::get('/createExam',[ExamController::class,'backendcreate']);
Route::post('/updateExam/{id}',[ExamController::class,'backendupdate'])->name('examupdate');
Route::get('/deleteExam/{id}',[ExamController::class,'backenddestroy'])->name('examdelete');
Route::get('/editExam/{id}',[ExamController::class,'backendedit'])->name('examedit');
// here starts question routs
Route::get('/showQuestion',[QuestionController::class,'backendindex'])->name('question');
Route::post('/storeQuestion',[QuestionController::class,'backendstore'])->name('questionstore');
Route::get('/createQuestion',[QuestionController::class,'backendcreate']);
Route::post('/updateQuestion/{id}',[QuestionController::class,'backendupdate'])->name('questionupdate');
Route::get('/deleteQuestion/{id}',[QuestionController::class,'backenddestroy'])->name('questiondelete');
Route::get('/editQuestion/{id}',[QuestionController::class,'backendedit'])->name('questionedit');
// here starts answers routs
Route::get('/showAnswer',[AnswerController::class,'backendindex'])->name('answer');
Route::post('/storeAnswer',[AnswerController::class,'backendstore'])->name('answerstore');
Route::get('/createAnswer',[AnswerController::class,'backendcreate']);
Route::post('/updateAnswer/{id}',[AnswerController::class,'backendupdate'])->name('answerupdate');
Route::get('/deleteAnswer/{id}',[AnswerController::class,'backenddestroy'])->name('answerdelete');
Route::get('/editAnswer/{id}',[AnswerController::class,'backendedit'])->name('answeredit');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
