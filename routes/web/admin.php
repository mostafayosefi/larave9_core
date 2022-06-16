<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\PageController;


use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ComidController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\WalletController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TextdesController;
use App\Http\Controllers\Admin\SpotliteController;
use App\Http\Controllers\Admin\Course\CourseController;
use App\Http\Controllers\Admin\Course\CourseFileController;
use App\Http\Controllers\Admin\GetwaypaymentController;
use App\Http\Controllers\Admin\Course\TeacherController;
use App\Http\Controllers\Admin\Course\CourseTypeController;
use App\Http\Controllers\Admin\Exam\ExamController;

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/demo', [AdminController::class, 'admindemo'])->name('demo');
Route::get('/index', [AdminController::class, 'demoindex'])->name('index');


            //profile
            //profile
            Route::prefix('profile')->name('profile.')->group(function () {
                Route::get('/', [ProfileController::class, 'index'])->name('index');
                Route::get('/show', [ProfileController::class, 'show'])->name('show');
                Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
                Route::put('/update', [ProfileController::class, 'update'])->name('update');
                Route::get('/secret', [ProfileController::class, 'secret'])->name('secret');
                Route::put('/secret', [ProfileController::class, 'secret_update'])->name('secret.update');
            });






Route::prefix('user')
->name('user.')->group(function () {
    Route::get('/createuser', [UserController::class, 'create'])->name('create');
    Route::put('/create', [UserController::class, 'store'])->name('store');
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/{user}', [UserController::class, 'update'])->name('update');
    Route::put('/{user}/secret', [UserController::class, 'secret'])->name('secret');
    Route::delete('/', [UserController::class, 'destroy'])->name('destroy');
    Route::put('/{id}/status', [UserController::class, 'status'])->name('status');
    Route::put('/{id}/status/api', [UserController::class, 'status_api'])->name('status.api');
    Route::get('/{id}/login', [UserController::class, 'login'])->name('login');
});




/*
Verb          Path                        Action  Route Name
GET           /users                      index   users.index
GET           /users/create               create  users.create
POST          /users                      store   users.store
GET           /users/{user}               show    users.show
GET           /users/{user}/edit          edit    users.edit
PUT|PATCH     /users/{user}               update  users.update
DELETE        /users/{user}               destroy users.destroy

 */
Route::prefix('faq')
->name('faq.')->group(function () {
    Route::get('/indexfaq', [FaqController::class, 'index'])->name('index');
    Route::get('/createfaq', [FaqController::class, 'create'])->name('create');
    Route::post('/', [FaqController::class, 'store'])->name('store');
    Route::get('/{id}', [FaqController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [FaqController::class, 'edit'])->name('edit');
    Route::put('/{id}', [FaqController::class, 'update'])->name('update');
    Route::delete('/{id}', [FaqController::class, 'destroy'])->name('destroy');
});



Route::prefix('page')
->name('page.')->group(function () {
    Route::get('/indexpage', [PageController::class, 'index'])->name('index');
    Route::get('/createpage', [PageController::class, 'create'])->name('create');
    Route::post('/', [PageController::class, 'store'])->name('store');
    Route::get('/{id}', [PageController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [PageController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PageController::class, 'update'])->name('update');
    Route::delete('/{id}', [PageController::class, 'destroy'])->name('destroy');
});


Route::prefix('setting')
->name('setting.')->group(function () {
    Route::get('/logo_management', [SettingController::class, 'logo_management'])->name('logo_management');
    Route::put('/logo_management', [SettingController::class, 'update_logo'])->name('update_logo');

    Route::get('/all_management', [SettingController::class, 'all_management'])->name('all_management');
    Route::put('/all_management', [SettingController::class, 'update_management'])->name('update_management');

    Route::get('/txtdes_management', [TextdesController::class, 'index'])->name('txtdes_management');
    Route::get('/txtdes_management/{id}/edit', [TextdesController::class, 'edit'])->name('txtdes_management_edit');
    Route::put('/txtdes_management/{id}', [TextdesController::class, 'update'])->name('txtdes_management_update');

    Route::get('/finical', [SettingController::class, 'finical'])->name('finical');
    Route::put('/finical', [SettingController::class, 'update_finical'])->name('update_finical');

    Route::get('/api_token', [SettingController::class, 'api'])->name('api');
    Route::put('/api_token', [SettingController::class, 'update_api'])->name('update_api');


    Route::get('/laws', [SettingController::class, 'laws'])->name('laws');
    Route::put('/laws', [SettingController::class, 'update_laws'])->name('update_laws');


    Route::get('/getway_payment', [GetwaypaymentController::class, 'index'])->name('getway_payment');
    Route::get('/getway_payment/{id}/edit', [GetwaypaymentController::class, 'edit'])->name('getway_payment_edit');
    Route::put('/getway_payment/{id}', [GetwaypaymentController::class, 'update'])->name('getway_payment_update');
    Route::put('/getway_payment/statuse/{status}/{id}', [GetwaypaymentController::class, 'status'])->name('getway_payment_status');
});




Route::prefix('manegement')
->name('manegement.')->group(function () {


    Route::get('/spotlites', [SpotliteController::class, 'index'])->name('spotlites');
    Route::get('/spotlites/{id}/edit', [SpotliteController::class, 'edit'])->name('spotlites_edit');
    Route::put('/spotlites/{id}', [SpotliteController::class, 'update'])->name('spotlites_update');


    Route::get('/comid/{status}'  , [ComidController::class, 'index'])->name('comid_index');
    Route::put('/comid/{status}'  , [ComidController::class, 'store'])->name('comid_store');
    Route::get('/comid/{status}/{id}/edit'  , [ComidController::class, 'edit'])->name('comid_edit');
    Route::put('/comid/{status}/{id}', [ComidController::class, 'update'])->name('comid_update');
    Route::delete('/comid/{status}/delete/{id}', [ComidController::class, 'destroy'])->name('comid_destroy');

});






Route::prefix('wallet')
->name('wallet.')->group(function () {

    Route::get('/', [WalletController::class, 'index'])->name('index');
    Route::get('/create_charge', [WalletController::class, 'create'])->name('create');
    Route::post('/', [WalletController::class, 'store'])->name('store');
    Route::get('/{id}/showwallet', [WalletController::class, 'show'])->name('show');
    Route::put('/{id}/{status}/change_status', [WalletController::class, 'status'])->name('status');

});







Route::prefix('ticket')
->name('ticket.')->group(function () {
    Route::get('/indexticket', [TicketController::class, 'index'])->name('index');
    Route::get('/{ticket}/chating', [TicketController::class, 'show'])->name('show');
    Route::put('/{ticket}', [TicketController::class, 'update'])->name('update');
    Route::delete('/{ticket}', [TicketController::class, 'destroy'])->name('destroy');
    Route::get('/close/{ticket}', [TicketController::class, 'status'])->name('close');
});




// START ROUTE PROJECT


Route::prefix('course')->name('course.')->group(function () {

Route::prefix('type')
->name('type.')->group(function () {
    Route::get('/indextype', [CourseTypeController::class, 'index'])->name('index');
    Route::get('/createtype', [CourseTypeController::class, 'create'])->name('create');
    Route::post('/', [CourseTypeController::class, 'store'])->name('store');
    Route::get('/{id}', [CourseTypeController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [CourseTypeController::class, 'edit'])->name('edit');
    Route::put('/{id}', [CourseTypeController::class, 'update'])->name('update');
    Route::delete('/{id}', [CourseTypeController::class, 'destroy'])->name('destroy');
});

Route::prefix('teacher')
->name('teacher.')->group(function () {
    Route::get('/indexteacher', [TeacherController::class, 'index'])->name('index');
    Route::get('/createteacher', [TeacherController::class, 'create'])->name('create');
    Route::post('/', [TeacherController::class, 'store'])->name('store');
    Route::get('/{id}', [TeacherController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');
    Route::put('/{id}', [TeacherController::class, 'update'])->name('update');
    Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('destroy');
    Route::put('/{id}/status', [TeacherController::class, 'status'])->name('status');

});



Route::prefix('course')
->name('course.')->group(function () {
    Route::get('/indexcourse', [CourseController::class, 'index'])->name('index');
    Route::get('/createcourse', [CourseController::class, 'create'])->name('create');
    Route::post('/', [CourseController::class, 'store'])->name('store');
    Route::get('/{id}/showcourse', [CourseController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [CourseController::class, 'edit'])->name('edit');
    Route::put('/{id}', [CourseController::class, 'update'])->name('update');
    Route::delete('/{id}', [CourseController::class, 'destroy'])->name('destroy');
    Route::put('/{id}/status', [CourseController::class, 'status'])->name('status');

});


Route::prefix('file')
->name('file.')->group(function () {
    Route::get('/indexfile', [CourseFileController::class, 'index'])->name('index');
    Route::get('/createfile', [CourseFileController::class, 'create'])->name('create');
    Route::post('/', [CourseFileController::class, 'store'])->name('store');
    Route::get('/{id}', [CourseFileController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [CourseFileController::class, 'edit'])->name('edit');
    Route::put('/{id}', [CourseFileController::class, 'update'])->name('update');
    Route::delete('/{id}', [CourseFileController::class, 'destroy'])->name('destroy');
    Route::put('/{id}/status', [CourseFileController::class, 'status'])->name('status');

});


});



Route::prefix('exam')->name('exam.')->group(function () {

    Route::prefix('exam')
    ->name('exam.')->group(function () {


        Route::get('/indexexam', [ExamController::class, 'index'])->name('index');
        Route::get('/createexam', [ExamController::class, 'create'])->name('create');
        Route::post('/', [ExamController::class, 'store'])->name('store');
        Route::get('/{id}', [ExamController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [ExamController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ExamController::class, 'update'])->name('update');
        Route::delete('/{id}', [ExamController::class, 'destroy'])->name('destroy');

    });
    });








