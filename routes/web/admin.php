<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\PageController;


use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\WalletController;

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/demo', [AdminController::class, 'admindemo'])->name('demo');
Route::get('/index', [AdminController::class, 'demoindex'])->name('index');




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


// Route::prefix('setting')
// ->name('setting.')->group(function () {
//     Route::get('/logo_management', [SettingController::class, 'logo_management'])->name('logo_management');
//     Route::put('/logo_management', [SettingController::class, 'update_logo'])->name('update_logo');

//     Route::get('/all_management', [SettingController::class, 'all_management'])->name('all_management');
//     Route::put('/all_management', [SettingController::class, 'update_management'])->name('update_management');

//     Route::get('/txtdes_management', [TextdesController::class, 'index'])->name('txtdes_management');
//     Route::get('/txtdes_management/{id}/edit', [TextdesController::class, 'edit'])->name('txtdes_management_edit');
//     Route::put('/txtdes_management/{id}', [TextdesController::class, 'update'])->name('txtdes_management_update');

//     Route::get('/finical', [SettingController::class, 'finical'])->name('finical');
//     Route::put('/finical', [SettingController::class, 'update_finical'])->name('update_finical');

//     Route::get('/api_token', [SettingController::class, 'api'])->name('api');
//     Route::put('/api_token', [SettingController::class, 'update_api'])->name('update_api');


//     Route::get('/laws', [SettingController::class, 'laws'])->name('laws');
//     Route::put('/laws', [SettingController::class, 'update_laws'])->name('update_laws');


//     Route::get('/getway_payment', [GetwaypaymentController::class, 'index'])->name('getway_payment');
//     Route::get('/getway_payment/{id}/edit', [GetwaypaymentController::class, 'edit'])->name('getway_payment_edit');
//     Route::put('/getway_payment/{id}', [GetwaypaymentController::class, 'update'])->name('getway_payment_update');
//     Route::put('/getway_payment/statuse/{status}/{id}', [GetwaypaymentController::class, 'status'])->name('getway_payment_status');
// });




// Route::prefix('manegement')
// ->name('manegement.')->group(function () {


//     Route::get('/spotlites', [SpotliteController::class, 'index'])->name('spotlites');
//     Route::get('/spotlites/{id}/edit', [SpotliteController::class, 'edit'])->name('spotlites_edit');
//     Route::put('/spotlites/{id}', [SpotliteController::class, 'update'])->name('spotlites_update');


//     Route::get('/comid/{status}'  , [ComidController::class, 'index'])->name('comid_index');
//     Route::put('/comid/{status}'  , [ComidController::class, 'store'])->name('comid_store');
//     Route::get('/comid/{status}/{id}/edit'  , [ComidController::class, 'edit'])->name('comid_edit');
//     Route::put('/comid/{status}/{id}', [ComidController::class, 'update'])->name('comid_update');
//     Route::delete('/comid/{status}/delete/{id}', [ComidController::class, 'destroy'])->name('comid_destroy');

// });



// Route::prefix('content')
// ->name('content.')->group(function () {

//     Route::prefix('webservice')
//     ->name('webservice.')->group(function () {

//         Route::get('/', [ContentController::class, 'index'])->name('index');
//         Route::get('/createwebservice', [ContentController::class, 'create'])->name('create');
//         Route::post('/', [ContentController::class, 'store'])->name('store');
//         Route::get('/{id}/edit', [ContentController::class, 'edit'])->name('edit');
//         Route::put('/{id}', [ContentController::class, 'update'])->name('update');
//          Route::delete('/{id}', [ContentController::class, 'destroy'])->name('destroy');

//     });



//     Route::prefix('document')
//     ->name('document.')->group(function () {

//         Route::get('/', [DocumentController::class, 'index'])->name('index');
//         Route::get('/createdocument', [DocumentController::class, 'create'])->name('create');
//         Route::post('/', [DocumentController::class, 'store'])->name('store');
//         Route::get('/{id}/edit', [DocumentController::class, 'edit'])->name('edit');
//         Route::put('/{id}', [DocumentController::class, 'update'])->name('update');
//         Route::put('/{id}/status', [DocumentController::class, 'status'])->name('status');
//         Route::delete('/{id}', [DocumentController::class, 'destroy'])->name('destroy');

//     });

//     Route::prefix('categoryapi')
//     ->name('categoryapi.')->group(function () {

//         Route::get('/', [CategoryapiController::class, 'index'])->name('index');
//         Route::get('/createcategoryapi', [CategoryapiController::class, 'create'])->name('create');
//         Route::post('/', [CategoryapiController::class, 'store'])->name('store');
//         Route::get('/{id}/edit', [CategoryapiController::class, 'edit'])->name('edit');
//         Route::put('/{id}', [CategoryapiController::class, 'update'])->name('update');
//         Route::put('/{id}/status', [CategoryapiController::class, 'status'])->name('status');
//         Route::delete('/{id}', [CategoryapiController::class, 'destroy'])->name('destroy');

//     });

//     Route::prefix('domain')
//     ->name('domain.')->group(function () {
//         Route::get('/', [ContentDomainController::class, 'index'])->name('index');
//         Route::get('/create-contentdomain', [ContentDomainController::class, 'create'])->name('create');
//         Route::post('/', [ContentDomainController::class, 'store'])->name('store');
//         Route::get('/{id}/edit', [ContentDomainController::class, 'edit'])->name('edit');
//         Route::put('/{id}', [ContentDomainController::class, 'update'])->name('update');
//         Route::put('/{id}/status', [ContentDomainController::class, 'status'])->name('status');
//         Route::delete('/{id}', [ContentDomainController::class, 'destroy'])->name('destroy');



//         Route::prefix('renew')->name('renew.')->group(function () {
//             Route::post('/', [RenewController::class, 'store'])->name('store');
//             Route::get('/index-renew', [RenewController::class, 'index'])->name('index');
//             Route::get('/{id}/show-renew', [RenewController::class, 'show'])->name('show');
//             Route::put('/{id}', [RenewController::class, 'update'])->name('update');
//             Route::put('/{id}/status', [RenewController::class, 'status'])->name('status');
//             Route::delete('/{id}', [RenewController::class, 'destroy'])->name('destroy');

//         });


//     });



// });


// Route::prefix('domain')
// ->name('domain.')->group(function () {



//     Route::prefix('renew')->name('renew.')->group(function () {
//         Route::post('/', [RenewController::class, 'store'])->name('store');
//         Route::get('/index-renew', [RenewController::class, 'index'])->name('index');
//         Route::get('/{id}/show-renew', [RenewController::class, 'show'])->name('show');
//         Route::put('/{id}', [RenewController::class, 'update'])->name('update');
//         Route::put('/{renew}/{status}/change_status', [RenewController::class, 'status'])->name('status');
//         Route::delete('/{id}', [RenewController::class, 'destroy'])->name('destroy');

//     });



// Route::prefix('transfer')->name('transfer.')->group(function () {
//     Route::get('/index-transfer', [TransferController::class, 'index'])->name('index');
//     Route::get('/{id}/show-transfer', [TransferController::class, 'show'])->name('show');
//     Route::put('/{id}', [TransferController::class, 'update'])->name('update');
//     Route::put('/{id}/status', [TransferController::class, 'status'])->name('status');
//     Route::delete('/{id}', [TransferController::class, 'destroy'])->name('destroy');


// });


// });



// Route::prefix('nameserver')->name('nameserver.')->group(function () {

//     Route::get('/index-nameserver', [NameserverController::class, 'index'])->name('index');
//     Route::get('/{id}/show-nameserver', [NameserverController::class, 'show'])->name('show');
//     Route::put('/{id}', [NameserverController::class, 'update'])->name('update');
//     Route::delete('/{id}', [NameserverController::class, 'destroy'])->name('destroy');

// });


// Route::prefix('search')
// ->name('search.')->group(function () {
//     Route::get('/', [SearchController::class, 'index'])->name('index');
// });



// Route::prefix('wallet')
// ->name('wallet.')->group(function () {

//     Route::get('/', [WalletController::class, 'index'])->name('index');
//     Route::get('/create_charge', [WalletController::class, 'create'])->name('create');
//     Route::post('/', [WalletController::class, 'store'])->name('store');
//     Route::get('/{id}/showwallet', [WalletController::class, 'show'])->name('show');
//     Route::put('/{id}/{status}/change_status', [WalletController::class, 'status'])->name('status');

// });



// Route::prefix('contact')
// ->name('contact.')->group(function () {
//     Route::get('/', [ContactController::class, 'index'])->name('index');
//     Route::post('/contact', [ContactController::class, 'store'])->name('store');
//     Route::get('/{contact}/show_contact', [ContactController::class, 'show'])->name('show');

// });

// Route::prefix('order')
// ->name('order.')->group(function () {
//     Route::get('/', [OrderController::class, 'index'])->name('index');
//     Route::get('/{id}/show_order', [OrderController::class, 'show'])->name('show');
//     Route::put('/{id}/{status}/change_status', [OrderController::class, 'status'])->name('status');
//     Route::delete('/{ticket}', [OrderController::class, 'destroy'])->name('destroy');


// });



// Route::prefix('ticket')
// ->name('ticket.')->group(function () {
//     Route::get('/indexticket', [TicketController::class, 'index'])->name('index');
//     Route::get('/{ticket}/chating', [TicketController::class, 'show'])->name('show');
//     Route::put('/{ticket}', [TicketController::class, 'update'])->name('update');
//     Route::delete('/{ticket}', [TicketController::class, 'destroy'])->name('destroy');
//     Route::get('/close/{ticket}', [TicketController::class, 'status'])->name('close');
// });




// Route::prefix('servicebrand')
// ->name('servicebrand.')->group(function () {

//     Route::get('/indexservicebrand', [ServicebrandController::class, 'index'])->name('index');
//     Route::get('/servicebrand', [ServicebrandController::class, 'create'])->name('create');
//     Route::post('/', [ServicebrandController::class, 'store'])->name('store');
//     Route::get('/{id}/editservicebrand', [ServicebrandController::class, 'edit'])->name('edit');
//     Route::put('/{id}', [ServicebrandController::class, 'update'])->name('update');
//     Route::delete('/{id}', [ServicebrandController::class, 'destroy'])->name('destroy');

// });




// Route::prefix('categorybrand')
// ->name('categorybrand.')->group(function () {

//     Route::get('/indexcategorybrand', [CategorybrandController::class, 'index'])->name('index');
//     Route::get('/createcategorybrand', [CategorybrandController::class, 'create'])->name('create');
//     Route::post('/', [CategorybrandController::class, 'store'])->name('store');
//     Route::get('/{id}/editcategorybrand', [CategorybrandController::class, 'edit'])->name('edit');
//     Route::put('/{id}', [CategorybrandController::class, 'update'])->name('update');
//     Route::put('/{id}/status', [CategorybrandController::class, 'status'])->name('status');
//     Route::delete('/{id}', [CategorybrandController::class, 'destroy'])->name('destroy');

//     Route::get('/{id}/showsubcategory', [CategorybrandController::class, 'show'])->name('show');
//     Route::put('/{id}/storesubcategory', [CategorybrandController::class, 'substore'])->name('sub.store');
//     Route::get('/{id}/editsubcategory', [CategorybrandController::class, 'editsubcategory'])->name('sub.edit');
//     Route::put('/{id}/editsubcategory', [CategorybrandController::class, 'updatesubcategory'])->name('sub.update');
//     Route::put('/{id}/status/sub', [CategorybrandController::class, 'substatus'])->name('sub.status');
//     Route::delete('/subdestroy/{id}', [CategorybrandController::class, 'subdestroy'])->name('sub.destroy');

// });


// Route::prefix('requestbrand')
// ->name('requestbrand.')->group(function () {

//     Route::get('/indexrequest', [RequestbrandController::class, 'index'])->name('index');
//     Route::get('/createrequest', [RequestbrandController::class, 'create'])->name('create');
//     Route::post('/', [RequestbrandController::class, 'store'])->name('store');
//     Route::get('/{id}/editrequest', [RequestbrandController::class, 'edit'])->name('edit');
//     Route::get('/{id}/showrequest', [RequestbrandController::class, 'show'])->name('show');
//     Route::put('/{id}', [RequestbrandController::class, 'update'])->name('update');
//     Route::put('/{id}/{status}/change_status', [RequestbrandController::class, 'status'])->name('status');
//     Route::delete('/{id}', [RequestbrandController::class, 'destroy'])->name('destroy');

// });



// Route::prefix('company')->name('company.')->group(function () {

//     Route::prefix('plan')->name('plan.')->group(function () {

//       Route::get('/indexplan', [CompanyPlanController::class, 'index'])->name('index');
//       Route::get('/createplan', [CompanyPlanController::class, 'create'])->name('create');
//       Route::post('/', [CompanyPlanController::class, 'store'])->name('store');
//       Route::get('/{id}/editplan', [CompanyPlanController::class, 'edit'])->name('edit');
//       Route::get('/{id}/showplan', [CompanyPlanController::class, 'show'])->name('show');
//       Route::put('/{id}', [CompanyPlanController::class, 'update'])->name('update');
//       Route::put('/{id}/status', [CompanyPlanController::class, 'status'])->name('status');
//       Route::delete('/{id}', [CompanyPlanController::class, 'destroy'])->name('destroy');
//       Route::delete('/property/{id}', [CompanyPlanController::class, 'destroyproperty'])->name('destroy.property');

//      });


//     Route::prefix('type')->name('type.')->group(function () {

//       Route::get('/indextype', [CompanyTypeController::class, 'index'])->name('index');
//       Route::get('/createtype', [CompanyTypeController::class, 'create'])->name('create');
//       Route::post('/', [CompanyTypeController::class, 'store'])->name('store');
//       Route::get('/{id}/edittype', [CompanyTypeController::class, 'edit'])->name('edit');
//       Route::get('/{id}/showtype', [CompanyTypeController::class, 'show'])->name('show');
//       Route::put('/{id}', [CompanyTypeController::class, 'update'])->name('update');
//       Route::put('/{id}/status', [CompanyTypeController::class, 'status'])->name('status');
//       Route::delete('/{id}', [CompanyTypeController::class, 'destroy'])->name('destroy');
//       Route::delete('/property/{id}', [CompanyTypeController::class, 'destroyproperty'])->name('destroy.property');

//      });


//      Route::prefix('service')
//      ->name('service.')->group(function () {

//          Route::get('/indexservicecompany', [CompanyServiceController::class, 'index'])->name('index');
//          Route::get('/servicecompany', [CompanyServiceController::class, 'create'])->name('create');
//          Route::post('/', [CompanyServiceController::class, 'store'])->name('store');
//          Route::get('/{id}/editservicecompany', [CompanyServiceController::class, 'edit'])->name('edit');
//          Route::put('/{id}', [CompanyServiceController::class, 'update'])->name('update');
//          Route::delete('/{id}', [CompanyServiceController::class, 'destroy'])->name('destroy');

//      });


//      Route::prefix('request')
//      ->name('request.')->group(function () {

//          Route::get('/indexrequestcompany', [CompanyRequestController::class, 'index'])->name('index');
//          Route::get('/createrequestcompany', [CompanyRequestController::class, 'create'])->name('create');
//          Route::post('/', [CompanyRequestController::class, 'store'])->name('store');
//          Route::get('/{id}/editrequestcompany', [CompanyRequestController::class, 'edit'])->name('edit');
//          Route::get('/{id}/showrequestcompany', [CompanyRequestController::class, 'show'])->name('show');
//          Route::put('/{id}', [CompanyRequestController::class, 'update'])->name('update');
//          Route::put('/{id}/{status}/change_status', [CompanyRequestController::class, 'status'])->name('status');
//          Route::delete('/{id}', [CompanyRequestController::class, 'destroy'])->name('destroy');


//      Route::prefix('register')
//      ->name('register.')->group(function () {

//         Route::post('/{company_request}', [CompanyRequestRegisterController::class, 'store'])->name('store');

//         Route::post('/{company_register}/file', [CompanyRequestRegisterController::class, 'store_file'])->name('store.file');
//         Route::delete('/{id}', [CompanyRequestRegisterController::class, 'destroy'])->name('destroy');






//      });





//      });







//   });



// Route::prefix('fetch')
// ->name('fetch.')->group(function () {
//     Route::get('/font/{value}', [FetchController::class, 'font'])->name('font');
// });


