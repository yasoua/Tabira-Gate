<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CourceController;
use App\Models\Cource;
use App\Models\Type;
use App\Models\Language;


use App\Http\Controllers\LeadController;





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
    return view('welcome');
});
Route::get('/Tabira_Academy', function () {
    return view('Tabira_Academy',['courses' => Cource::where('service_id' , 1) , 'coursetype' => Type::all(),
        'courselanguage' => Language::all()]);
})->name('Tabira_Academy');

Route::get('/Website_and_IT_Development_Services', function () {
    return view('Website_and_IT_Development_Services',['courses' => Cource::where('service_id' , 2) , 'coursetype' => Type::all(),
        'courselanguage' => Language::all()]);
})->name('Website_and_IT_Development_Services');

Route::get('/Business_Development', function () {
    return view('Business_Development',['courses' => Cource::where('service_id' , 3) , 'coursetype' => Type::all(),
        'courselanguage' => Language::all()]);
})->name('Business_Development');

Route::get('/Local_and_International_NGO_Capacity_Building_and_Development', function () {
    return view('Local_and_International_NGO_Capacity_Building_and_Development',['courses' => Cource::where('service_id' , 4) , 'coursetype' => Type::all(),
        'courselanguage' => Language::all()]);
})->name('Local_and_International_NGO_Capacity_Building_and_Development');

Route::get('/English_Language_Courses', function () {
    return view('English_Language_Courses',['courses' => Cource::where('service_id' , 5) , 'coursetype' => Type::all(),
        'courselanguage' => Language::all()]);
})->name('English_Language_Courses');

Route::get('/Yahoo_and_Meditation', function () {
    return view('Yahoo_and_Meditation',['courses' => Cource::where('service_id' , 6) , 'coursetype' => Type::all(),
        'courselanguage' => Language::all()]);
})->name('Yahoo_and_Meditation');

Route::get('/Human_Resource_Management', function () {
    return view('Human_Resource_Management',['courses' => Cource::where('service_id' , 7) , 'coursetype' => Type::all(),
        'courselanguage' => Language::all()]);
})->name('Human_Resource_Management');


Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('services', ServiceController::class);
Route::resource('courses', CourceController::class);
Route::resource('leads', LeadController::class);

//Route::get('course/public/{publicLink}', [CourceController::class, 'publicShow'])->name('course.publicShow');

//Route::post('lead/public-store', [LeadController::class, 'publicStore'])->name('lead.publicStore');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
