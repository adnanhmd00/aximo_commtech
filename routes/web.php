<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\webpagesController\UsersController;
use App\Http\Controllers\webpagesController\ContactUsController;
use App\Http\Controllers\webpagesController\SemiKnockedController;
use App\Http\Controllers\webpagesController\CarFinanceController;
use App\Http\Controllers\webpagesController\WhyThisController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\DealerController;
use App\Http\Controllers\Admin\InsuranceController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\OutstandingController;
use App\Http\Controllers\Admin\StolenVehicleController;
use App\Http\Controllers\Admin\CreateVehicleController;
use App\Http\Controllers\Admin\UpdateRecoveredController;
use App\Http\Controllers\Admin\BuyEngineController;
use App\Http\Controllers\Admin\BuyChassisController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SearchedVehicleController;
use App\Http\Controllers\CheckoutController;
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
    return view('webpages.index');
});

Route::get('i-want-to',function(){
    return view('webpages.i-want-to-menu');
});
Route::get('login',function(){
    return view('webpages.login');
});
Route::get('signup',function(){
    return view('webpages.signup');
});
Route::get('forget-password',[UserController::class,'forgetPassword']);
Route::post('forget_password',[UserController::class,'forget_password']);

Route::get('privacy-policy',[UserController::class,'privacy']);
Route::get('logout',[UserController::class,'logout']);

//
Route::get('create-vehicle',[UsersController::class,'onCreateVehicle']);
Route::get('report-stolen',[UsersController::class,'onReportStolen']);
Route::get('update-recovered',[UsersController::class,'onUpdateRecovered']);
Route::get('search-before-buying',[UsersController::class,'onSearchBeforeBuying']);
Route::post('create_vehicle_account',[UsersController::class,'storeCreateVehicleAccount']);
Route::get('update_recovered',[UsersController::class,'updateRecoveredVehicle']);
Route::get('search-buying',[UsersController::class,'searchBeforeBuying']);
Route::get('store_report_stolen',[UsersController::class,'storeReportStolen']);
//
Route::get('semi-knocked-menu',[SemiKnockedController::class,'onSemiKnockedMenu']);
Route::get('buy-vehicle-bike',[SemiKnockedController::class,'onBuyVehicleOrEngine']);
Route::get('buy-vehicle-chassis',[SemiKnockedController::class,'onBuyVehicleChassis']);
Route::get('buy_engine',[SemiKnockedController::class,'storeBuyVehicleEngine']);
Route::get('buy_chassis',[SemiKnockedController::class,'storeBuyVehicleChassis']);
//
Route::get('car-finance',[CarFinanceController::class,'onCarFinance']);
Route::get('dealer-registration',[CarFinanceController::class,'onDealershipRegistration']);
Route::get('insurance-reg',[CarFinanceController::class,'onInsuranceReg']);
Route::get('vehicle-motor-outstanding',[CarFinanceController::class,'onVehicleOutstanding']);
Route::get('store_dealer',[CarFinanceController::class,'storeDealerRegistration']);
Route::post('vehicle_insurance',[CarFinanceController::class,'insuranceRegistration']);
Route::post('vehicle_outstanding',[CarFinanceController::class,'storeVehicleOutstanding']);
//
Route::get('about',[WhyThisController::class,'onWhyThis']);
//
Route::get('contact',[ContactUsController::class,'index']);
Route::post('store_contact',[ContactUsController::class,'storeContact']);


////////////////Admin Panel Routes ////////////////////////////////////////////////////////
Route::get('admin',[AdminController::class,'login']);
Route::post('onlogin',[AdminController::class,'onLogin']);
Route::group(['middleware' => 'authuser','prefix'  =>  'admin'], function () {
    
    
    Route::get('logout',[AdminController::class,'logout']);
    Route::get('index',[AdminController::class,'index']);
    //
    Route::get('profile',[ProfileController::class,'index']);
    Route::post('update_profile',[ProfileController::class,'updateProfile']);
    Route::post('update_image',[ProfileController::class,'updateImage']);
    //
    // Route::get('dashboard',[DashboardController::class,'index']);
    //
    Route::get('team_index',[TeamController::class,'index']);
    Route::get('team_member',[TeamController::class,'teamdatatable'])->name('team_member');
    Route::get('add_team_member',[TeamController::class,'addTeam']);
    Route::post('add_user',[TeamController::class,'addUser']);
    Route::get('delete_member/{id}',[TeamController::class,'deletemember']);
    Route::get('edit_team_view',[TeamController::class,'viewTeam'])->name('edit_team_view');
    Route::get('edit_member/{id}',[TeamController::class,'editmember']);
    Route::post('update_team',[TeamController::class,'updateTeam']);
    //
    Route::get('dealer',[DealerController::class,'dealerIndex']);
    Route::get('dealer_datatable',[DealerController::class,'dealerDataTable'])->name('dealer_datatable');
    Route::get('delete_dealer/{id}',[DealerController::class,'deleteDealer']);
    Route::get('edit_dealer_show',[DealerController::class,'viewDealer']);
    Route::get('edit_dealer/{id}',[DealerController::class,'editdealer']);
    Route::post('update_dealer',[DealerController::class,'updateDealer']);
    //
    Route::get('insurance',[InsuranceController::class,'index']);
    Route::get('insurance_datatable',[InsuranceController::class,'insuranceDataTable'])->name('insurance_datatable');
    Route::get('delete_insurance/{id}',[InsuranceController::class,'deleteInsurance']);
    Route::get('edit_insurance/{id}',[InsuranceController::class,'editinsurance']);
    Route::post('update_insurance',[InsuranceController::class,'updateInsurance']);
    //
    Route::get('customer',[CustomerController::class,'index']);
    Route::get('customer_datatable',[CustomerController::class,'customerDataTable'])->name('customer_datatable');
    Route::get('delete_customer/{id}',[CustomerController::class,'deleteCustomer']);
    Route::get('edit_customer/{id}',[CustomerController::class,'editCustomer']);
    Route::post('update_customer',[CustomerController::class,'updateCustomer']);
    //
    Route::get('outstanding',[OutstandingController::class,'index']);
    Route::get('fiance_datatable',[OutstandingController::class,'financeDataTable'])->name('fiance_datatable');
    Route::get('delete_finance/{id}',[OutstandingController::class,'deleteFinance']);
    Route::get('edit_finance/{id}',[OutstandingController::class,'editfinance']);
    Route::post('update_finance',[OutstandingController::class,'updateFinance']);
    //
    Route::get('stolen_vehicle',[StolenVehicleController::class,'index']);
    Route::get('stolen_datatable',[StolenVehicleController::class,'stolenDataTable'])->name('stolen_datatable');
    Route::get('delete_stolen/{id}',[StolenVehicleController::class,'deleteStolen']);
    Route::get('edit_stolen/{id}',[StolenVehicleController::class,'editstolen']);
    Route::post('update_stolen',[StolenVehicleController::class,'updateStolen']);
    //
    Route::get('create_vehicle',[CreateVehicleController::class,'index']);
    Route::get('vehicle_datatable',[CreateVehicleController::class,'vehicleDataTable'])->name('vehicle_datatable');
    Route::get('delete_vehicle/{id}',[CreateVehicleController::class,'deleteVehicle']);
    Route::get('edit_createvehicle/{id}',[CreateVehicleController::class,'editcreatevehicle']);
    Route::post('update_createvehicle',[CreateVehicleController::class,'updateCreateVehicle']);
    //
    Route::get('update_recovered',[UpdateRecoveredController::class,'index']);
    Route::get('update_datatable',[UpdateRecoveredController::class,'updateDataTable'])->name('update_datatable');
    Route::get('delete_update/{id}',[UpdateRecoveredController::class,'deleteUpdate']);
    Route::get('edit_updaterecovered/{id}',[UpdateRecoveredController::class,'editupdaterecovered']);
    Route::post('update_updaterecovered',[UpdateRecoveredController::class,'updateUpdateRecovered']);
    //
    Route::get('searched_vehicle',[SearchedVehicleController::class,'index']);
    Route::get('update_searched_datatable',[SearchedVehicleController::class,'updateSearchedDataTable'])->name('update_searched_datatable');
    Route::get('delete_searched/{id}',[SearchedVehicleController::class,'deleteSearched']);
    Route::get('edit_searched/{id}',[SearchedVehicleController::class,'editSearched']);
    Route::post('update_searched',[SearchedVehicleController::class,'updateSearched']);
    //
    Route::get('buy_engine',[BuyEngineController::class,'index']);
    Route::get('buyvehicle_datatable',[BuyEngineController::class,'buyVehicleDataTable'])->name('buyvehicle_datatable');
    Route::get('delete_buyvehicle/{id}',[BuyEngineController::class,'deleteBuyVehicle']);
    Route::get('edit_engine/{id}',[BuyEngineController::class,'editengine']);
    Route::post('update_engine',[BuyEngineController::class,'updateEngine']);
    //
    Route::get('buy_chassis',[BuyChassisController::class,'index']);
    Route::get('buychassis_datatable',[BuyChassisController::class,'buyChassisDataTable'])->name('buychassis_datatable');
    Route::get('delete_buychassis/{id}',[BuyChassisController::class,'deleteBuyChassis']);
    Route::get('edit_chassis/{id}',[BuyChassisController::class,'editchassis']);
    Route::post('update_chassis',[BuyChassisController::class,'updateChassis']);
   
    //
    Route::get('enquiry',[EnquiryController::class,'index']);
    Route::get('contactus_datatable',[EnquiryController::class,'contactdataTable'])->name('contactus_datatable');
    Route::get('delete_contact/{id}',[EnquiryController::class,'deleteContact']);
    //
    Route::get('report',[ReportController::class,'index']);
    //


});

Route::get('checkout', [CheckoutController::class, 'checkout']);
Route::post('checkout', [CheckoutController::class, 'afterPayment'])->name('checkout.credit-card');
Route::post('checkout1', [CheckoutController::class, 'searchBuyingPayment'])->name('checkout1.search-buying');
Route::post('checkout2', [CheckoutController::class, 'semiKnockedEnginePayment'])->name('checkout2.semiknocked_engine');
Route::post('checkout3', [CheckoutController::class, 'semiKnockedChassisPayment'])->name('checkout3.semiknocked_chassis');
Route::post('checkout4', [CheckoutController::class, 'dealerPayment'])->name('checkout4.dealership');
Route::get('payment-success',function(){
    return view('webpages.payment-success');
});
Route::get('payment-cancel',function(){
    return view('webpages.payment-cancel');
});

