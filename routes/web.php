<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\LogoutController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
Route::get('/categories/{designation}', [CategoriesController::class, 'show'])->name('categories.show');
Route::get('/ajouter-categories', [CategoriesController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoriesController::class, 'store'])->name('categories.store');
Route::get('/categories/edit/{designation}', [CategoriesController::class, 'edit'])->name('categories.edit');
Route::put('/categories/update/{cat_id}', [CategoriesController::class, 'update'])->name('categories.update');
Route::get('/categories/delete/{designation}', [CategoriesController::class, 'destroy'])->name('categories.delete');

Route::get('/categories/{cat_designation}/ajouter-subcategories', [SubcategoryController::class, 'create'])->name('categories.subcategories.create');
Route::post('/categories/{cat_designation}/store', [SubcategoryController::class, 'store'])->name('categories.subcategories.store');
Route::get('/categories/{cat_designation}/edit/{subcategory_id}', [SubcategoryController::class, 'edit'])->name('categories.subcategories.edit');
Route::put('/categories/{cat_designation}/update/{subcategory_id}', [SubcategoryController::class, 'update'])->name('categories.subcategories.update');
Route::get('/categories/{cat_designation}/delete/{subcategory_id}', [SubcategoryController::class, 'destroy'])->name('categories.subcategories.delete');
Route::get('/categories/{cat_designation}/{subcategory_designation}', [SubcategoryController::class, 'show'])->name('categories.subcategories.show');

Route::get('/categories/{cat_designation}/{subcategory_designation}/ajouter-question', [QuestionController::class, 'create'])->name('categories.subcategories.questions.create');
Route::post('/categories/{cat_designation}/{subcategory_designation}/stocker-question', [QuestionController::class, 'store'])->name('categories.subcategories.questions.store');
Route::get('/categories/{cat_designation}/{subcategory_designation}/editer-question/{quest_id}', [QuestionController::class, 'edit'])->name('categories.subcategories.questions.edit');
Route::put('/categories/{cat_designation}/{subcategory_designation}/update-question/{quest_id}', [QuestionController::class, 'update'])->name('categories.subcategories.questions.update');
Route::get('/categories/{cat_designation}/{subcategory_designation}/destroy-question/{quest_id}', [QuestionController::class, 'destroy'])->name('categories.subcategories.questions.destroy');

Route::get('/contact-form', [ContactController::class, 'showContactForm'])->name('contact.show');
Route::post('/contact-form-store', [ContactController::class, 'submitContactForm'])->name('contact.submit');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');
