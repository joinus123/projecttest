<?php

use App\Http\Controllers\admin\AboutusController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\SigninController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FaqpageController;
use App\Http\Controllers\admin\TestinomialController;
use App\Http\Controllers\admin\ContactusController;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

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
    return view('frontend.homepage');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');
Route::prefix('signin')->group(function() {
Route::get('/', [SigninController::class, 'loginForm'])->name('loginform');
Route::get('/forgetpassword', [SigninController::class, 'forgetpassword'])->name('forgetpassword');
Route::post('/dashboard', [SigninController::class, 'AdminDashboard'])->name('admin-login');
Route::group(['middleware' => 'admin'],function(){


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/registry', [DashboardController::class, 'registry'])->name('registry');
Route::get('/userprofile', [DashboardController::class, 'userprofile'])->name('userprofile');
Route::get('/home-page', [DashboardController::class, 'homepage'])->name('home-page');
Route::post('/homeedit', [DashboardController::class, 'homedatasubmit'])->name('home-edit');

Route::get('/features', [DashboardController::class, 'features'])->name('features');
Route::get('/addfeatures', [DashboardController::class, 'addfeatures'])->name('add-features');
Route::post('/submitfeatures', [DashboardController::class, 'submitfeatures'])->name('sumbit-features');
Route::get('/editfeatures/{id}', [DashboardController::class, 'editfeatures'])->name('edit-features');
Route::post('/updatefeatures/{id}', [DashboardController::class, 'updatefeatures'])->name('update-features');
Route::get('/deletefeatures/{id}', [DashboardController::class, 'deletefeatures'])->name('delete-features');

Route::get('/testinomial', [TestinomialController::class, 'testinomial'])->name('testinomial');
Route::get('/addtestinomial', [TestinomialController::class, 'addtestinomial'])->name('add-testinomial');
Route::post('/submittestinomial', [TestinomialController::class, 'submittestinomial'])->name('submit-testinomial');
Route::get('/edittestinomial/{id}', [TestinomialController::class, 'edittestinomial'])->name('edit-testinomial');
Route::post('/updatetestinomial/{id}', [TestinomialController::class, 'updatetestinomial'])->name('update-testinomial');
Route::get('/deletetestinomial/{id}', [TestinomialController::class, 'deletetestinomial'])->name('delete-testinomial');

Route::get('/faqpage', [FaqpageController::class, 'faqpage'])->name('faqpage');
Route::get('/faqs', [FaqpageController::class, 'faqs'])->name('faqs');
Route::get('/aboutus', [AboutusController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [ContactusController::class, 'contactus'])->name('contact.us');
Route::get('/socialmedialink', [ContactusController::class, 'socialmedialink'])->name('socialmedialink');
Route::get('/sitesetting', [DashboardController::class, 'sitesetting'])->name('site.setting');
Route::post('/sitesettingadd', [DashboardController::class, 'sitesettingadd'])->name('sitesetting-add');
Route::post('/logout',[DashboardController::class, 'logout'])->name('admin-logout');
});
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

