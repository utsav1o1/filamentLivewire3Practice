<?php

use App\Livewire\ShowAboutUs;
use App\Livewire\ShowBlogDetail;
use App\Livewire\ShowBlogs;
use App\Livewire\ShowHome;
use App\Livewire\ShowServiceDetail;
use App\Livewire\ShowServicesPage;
use App\Livewire\ShowTeam;
use Illuminate\Support\Facades\Route;

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
Route::get('/', ShowHome::class)->name('Home');
Route::get('/services', ShowServicesPage::class)->name('Service');
Route::get('/service/{id}', ShowServiceDetail::class)->name('ServiceDetail');
Route::get('/ourteams', ShowTeam::class)->name('team');
Route::get('/about-us', ShowAboutUs::class)->name('AboutUs');
Route::get('/blogs', ShowBlogs::class)->name('Blog');
Route::get('/blog-detail/{id}', ShowBlogDetail::class)->name('BlogDetail');
