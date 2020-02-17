<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/','FrontendController@home')->name('home');
Route::get('/login','FrontendController@login')->name('login');
Route::post('/login','UserController@login')->name('do.login');
Route::get('/logout','UserController@logout')->name('logout');
Route::get('/cadet-recruitment','FrontendController@cadet_recruitment')->name('cadet-recruitment');
Route::post('/recruitment-submitted','RecuitmentController@create')->name('add-recru-application');
Route::get('/cadet-recruitment-confirmation','FrontendController@confirmation')->name('recruitment-confirmation');


Route::group(['middleware'=>'auth','prefix'=>'puo'], function(){
//Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard','BackendController@dashboard')->name('puo.dashboard');
    
    //PUO Mangement
    Route::get('/create-puo','BackendController@create_puo')->name('puo.create-puo');
//    Route::get('/view-puo','BackendController@view_puo')->name('puo.view-puo');
    Route::post('/add-puo','PuoController@create')->name('puo.add-puo');
    Route::get('/list-puo','PuoController@list')->name('puo.list-puo');
    Route::get('/update-puo/{id}','BackendController@update_puo')->name('puo.update-view-puo');
    Route::post('/updater-puo/{id}','PuoController@update')->name('puo.update-method-puo');
    Route::get('/delete-puo/{id}','PuoController@delete')->name('puo.delete-puo');
    Route::get('/print-single-puo/{id}','PuoController@print_single')->name('puo.print-single-puo');
    Route::get('/print-puo/{id}','PuoController@print_one')->name('puo.print-puo-one');
    Route::get('/print-puo','PuoController@print_all')->name('puo.print-puo-all');
//    Route::get('/print-list-puo','PuoController@print_list')->name('puo.print-batch-puo');
    
    //Cadet Mangement
    Route::post('/add-cadet','CadetController@create')->name('puo.add-cadet');
    Route::get('/create-cadet','BackendController@create_cadet')->name('puo.create-cadet');
    Route::post('/add-cadet','CadetController@create')->name('puo.add-cadet');
    Route::get('/list-cadet','CadetController@list')->name('puo.list-cadet');    
    Route::get('/update-cadet/{id}','BackendController@update_cadet')->name('puo.update-view-cadet');
    Route::get('/view-cadet-profile/{id}','BackendController@view_cadet_profile')->name('puo.update-view-cadet-own-info');
    Route::get('/update-cadet-own/{id}','BackendController@update_cadet_own_pass')->name('puo.update-cadet-password');
    Route::post('/update-method-cadet/{id}','CadetController@update')->name('puo.update-method-cadet');
    Route::post('/update-method-cadet-pass-cadet/{id}','CadetController@update_pass_cadet')->name('puo.update-method-cadet-pass-cadet');
    Route::post('/update-method-cadet-pass/{id}','CadetController@update_pass')->name('puo.update-method-cadet-pass');
    Route::get('/delete-cadet/{id}','CadetController@delete')->name('puo.delete-cadet');
    Route::get('/print-one-cadet/{id}','CadetController@print_single')->name('puo.print-single-cadet');
    Route::get('/print-single-cadet/{id}','CadetController@print_one')->name('puo.print-cadet-one');
    Route::get('/print-cadet','CadetController@print_all')->name('puo.print-cadet-all');
    
    //Quarter Master Mangement
    Route::get('/create-qmaster','BackendController@create_qmaster')->name('puo.create-qmaster');
    Route::post('/add-qmaster','QMasterController@create')->name('puo.add-qmaster');
    Route::get('/list-qmaster','QMasterController@list')->name('puo.list-qmaster');
    Route::get('/update-qmaster/{id}','BackendController@update_qmaster')->name('puo.update-view-qmaster');  
    Route::post('/update-method-qmaster/{id}','QMasterController@update')->name('puo.update-method-qmaster');
    Route::get('/update-qmaster-pass/{id}','BackendController@update_qmaster_pass')->name('puo.update-qmaster-password');
    Route::post('/update-method-qmaster-pass/{id}','QMasterController@update_pass')->name('puo.update-method-qmaster-pass-puo');
    
    Route::get('/delete-qmaster/{id}','QMasterController@delete')->name('puo.delete-qmaster');
    Route::get('/print-single-qmaster/{id}','QMasterController@print_single')->name('puo.print-single-qmaster');
    Route::get('/view-single-qmaster/{id}','BackendController@view_qmaster_profile')->name('puo.view-single-qmaster');
    Route::get('/print-one-qmaster/{id}','QMasterController@print_one')->name('puo.print-qmaster-one');
    Route::get('/print-qmaster','QMasterController@print_all')->name('puo.print-qmaster-all');
    
    //Course Material Mangement
    Route::get('/create-cmaterial','BackendController@create_cmaterial')->name('puo.create-cmaterial');
    Route::post('/add-cmaterial','CMaterialController@create')->name('puo.add-cmaterial');
    Route::get('/list-cmaterial','CMaterialController@list')->name('puo.list-cmaterial');
    Route::get('/update-cmaterial/{id}','BackendController@update_cmaterial')->name('puo.update-view-cmaterial');
    Route::post('/updater-cmaterial/{id}','CMaterialController@update')->name('puo.update-method-cmaterial');
    Route::get('/delete-cmaterial/{id}','CMaterialController@delete')->name('puo.delete-cmaterial');
    Route::get('/print-cmaterial','CMaterialController@print_all')->name('puo.print-cmaterial-all');
    Route::get('/download-cmaterial/{id}','CMaterialController@getDownload')->name('puo.download-cmaterial');
    
    //Notice Mangement
    Route::get('/create-notice','BackendController@create_notice')->name('puo.create-notice');
    Route::post('/add-notice','NoticeController@create')->name('puo.add-notice');
    Route::get('/list-notice','NoticeController@list')->name('puo.list-notice');
    Route::get('/update-notice/{id}','BackendController@update_notice')->name('puo.update-view-notice');
    Route::post('/updater-notice/{id}','NoticeController@update')->name('puo.update-method-notice');
    Route::get('/delete-notice/{id}','NoticeController@delete')->name('puo.delete-notice');
    Route::get('/print-single-notice/{id}','NoticeController@print_single')->name('puo.print-single-notice');
    Route::get('/print-notice/{id}','NoticeController@print_one')->name('puo.print-notice-one');
    Route::get('/print-all-notice','NoticeController@print_all')->name('puo.print-notice-all');
    
    //Leave Mangement
    Route::get('/list-leave','LeaveController@list')->name('puo.list-leave');
    Route::get('/update-leave/{id}','BackendController@update_leave')->name('puo.update-view-leave');
    Route::post('/updater-leave/{id}','LeaveController@update')->name('puo.update-method-leave');
    Route::get('/delete-leave/{id}','LeaveController@delete')->name('puo.delete-leave');
    Route::get('/print-single-leave/{id}','LeaveController@print_single')->name('puo.print-single-leave');
    Route::get('/print-leave/{id}','LeaveController@print_one')->name('puo.print-leave-one');
    Route::get('/print-notice','LeaveController@print_all')->name('puo.print-leave-all');
    
    //Product Mangement
    Route::get('/create-product','BackendController@create_product')->name('puo.create-product');
    Route::post('/add-product','ProductController@create')->name('puo.add-product');
    Route::get('/list-product','ProductController@list')->name('puo.list-product');
    Route::get('/update-product/{id}','BackendController@update_product')->name('puo.update-view-product');
    Route::post('/updater-product/{id}','ProductController@update')->name('puo.update-method-product');
    Route::get('/delete-product/{id}','ProductController@delete')->name('puo.delete-product');
    Route::get('/print-single-product/{id}','ProductController@print_single')->name('puo.print-single-product');
    Route::get('/print-product/{id}','ProductController@print_one')->name('puo.print-product-one');
    Route::get('/print-product','ProductController@print_all')->name('puo.print-product-all');
    
    //Requistion Mangement
    Route::get('/list-req','RequisitionController@list')->name('puo.list-req');
    Route::get('/list-req-own/{id}','RequisitionController@cadet_req')->name('puo.list-req-own');
    Route::get('/update-req/{id}','BackendController@update_req')->name('puo.update-view-req');
    Route::post('/updater-req/{id}','RequisitionController@update')->name('puo.update-method-req');
    Route::get('/delete-req/{id}','RequisitionController@delete')->name('puo.delete-req');
    Route::get('/print-single-req/{id}','RequisitionController@print_single')->name('puo.print-single-req');
    Route::get('/print-req/{id}','RequisitionController@print_one')->name('puo.print-req-one');
    Route::get('/print-req','RequisitionController@print_all')->name('puo.print-req-all');
    Route::get('/print-req-all/{id}','RequisitionController@print_all_own')->name('puo.print-req-all-own');
    
    //Attendance Mangement - Cadet
    Route::get('/create-cadet-att','BackendController@createCadetAtt')->name('puo.create-cadetAttendance');
    Route::get('/add-cadet-att','AttendanceController@createCadet')->name('puo.add-cadetAttendance');
    
    //Attendance Mangement - Cadet
    Route::get('/create-cadet-att','BackendController@create_cadet_att')->name('puo.create-cadet-attendance');
    Route::post ('/add-cadet-att','AttendanceController@create_cadet_att')->name('puo.add-cadet-attendance');
    Route::get('/list-cadet-attendance','AttendanceController@cadet_list')->name('puo.list-cadet-attendance');
    Route::get('/update-cadet-att/{id}','BackendController@update_cadet_att')->name('puo.update-view-cadet-att');
    Route::post('/updater-cadet/{id}','AttendanceController@update_cadet')->name('puo.update-method-cadet-att');
    Route::get('/print-single-cadet-att/{id}','AttendanceController@print_single_cadet_att')->name('puo.print-single-cadet-att');
    Route::get('/print-cadet/{id}','AttendanceController@print_one_cadet_att')->name('puo.print-cadet-one-att');
    Route::get('/print-cadet-att','AttendanceController@print_all_cadet_att')->name('puo.print-cadet-all-att');
    Route::get('/print-cadet-att-blank','AttendanceController@print_blank_cadet_att')->name('puo.print-cadet-all-att-blank'); 
    
    //Attendance Mangement - Qmaster
    Route::get('/create-qmaster-att','BackendController@create_qmaster_att')->name('puo.create-qmaster-attendance');
    Route::post ('/add-qmaster-att','AttendanceController@create_qmaster_att')->name('puo.add-qmaster-attendance');
    Route::get('/list-qmaster-attendance','AttendanceController@qmaster_list')->name('puo.list-qmaster-attendance');
    Route::get('/update-qmaster-att/{id}','BackendController@update_qmaster_att')->name('puo.update-view-qmaster-att');
    Route::post('/updater-qmaster/{id}','AttendanceController@update_qmaster')->name('puo.update-method-qmaster-att');
    Route::get('/print-single-qmaster-att/{id}','AttendanceController@print_single_qmaster_att')->name('puo.print-single-qmaster-att');
    Route::get('/print-qmaster/{id}','AttendanceController@print_one_qmaster_att')->name('puo.print-qmaster-one-att');
    Route::get('/print-qmaster-att','AttendanceController@print_all_qmaster_att')->name('puo.print-qmaster-all-att');
    Route::get('/print-qmaster-att-blank','AttendanceController@print_blank_qmaster_att')->name('puo.print-qmaster-all-att-blank');
    
    //Attendance Mangement - Stuff/PUO
    Route::get('/create-att-personnel','BackendController@create_personnel_att')->name('puo.create-personnel-attendance');
    Route::post ('/add-personnel-att','AttendanceController@create_personnel_att')->name('puo.add-personnel-attendance');
    Route::get('/list-attendance','AttendanceController@personnel_list')->name('puo.list-personnel-attendance');
    Route::get('/update-personnel-att/{id}','BackendController@update_personnel_att')->name('puo.update-view-personnel-att');
    Route::post('/updater-personnel/{id}','AttendanceController@update_personnel')->name('puo.update-method-personnel-att');
    Route::get('/print-single-personnel-att/{id}','AttendanceController@print_single_personnel_att')->name('puo.print-single-personnel-att');
    Route::get('/print-personnel/{id}','AttendanceController@print_one_personnel_att')->name('puo.print-personnel-one-att');
    Route::get('/print-personnel-att','AttendanceController@print_all_personnel_att')->name('puo.print-personnel-all-att');
    
    //Recruitment Mangement
    Route::get('/list-application','RecuitmentController@list')->name('puo.list-application');    
    Route::get('/update-application/{id}','BackendController@update_application')->name('puo.update-view-application');
    Route::post('/update-method-application/{id}','RecuitmentController@update')->name('puo.update-method-application');
    Route::get('/print-one-application/{id}','RecuitmentController@print_single')->name('puo.print-single-applicant');
    Route::get('/print-single-application/{id}','RecuitmentController@print_one')->name('puo.print-application-one');
    Route::get('/print-application','RecuitmentController@print_all')->name('puo.print-application-all');
    
    //Business Settings
    Route::get('/rec-setting','BusinessSettingsController@list')->name('puo.list-settings');
    Route::get('/update-setting/{id}','BackendController@update_setting')->name('puo.update-view-settings');
    Route::post('/update-method-setting/{id}','BusinessSettingsController@update')->name('puo.update-method-settings');
    
    //Budget Planning Module
    Route::get('/create-budget','BackendController@create_budget')->name('puo.create-budget');
    Route::post('/add-budget','BudgetController@create')->name('puo.add-budget');
    Route::get('/list-budget','BudgetController@list')->name('puo.list-budget');
    Route::get('/print-single-budget/{id}','BudgetController@print_single')->name('puo.print-single-budget');
    Route::get('/print-budget/{id}','BudgetController@print_one')->name('puo.print-budget-one');
    Route::get('/print-all-budget','BudgetController@print_all')->name('puo.print-budget-all');

    
});

Route::group(['middleware'=>'auth','prefix'=>'cadet'], function(){
    //Leave Mangement
    Route::get('/create-leave','BackendController@create_leave')->name('cdt.create-leave');
    Route::post('/add-leave','LeaveController@create')->name('cdt.add-leave');   
    Route::get('/leave-list/{id}','LeaveController@cadetleave')->name('cdt.list-leave-cadet');
    Route::get('/leave-list-cadet/{id}','LeaveController@cadetleave_print')->name('cdt.list-leave-cadet-print');
    //Requsition Mangement
    
    Route::get('/create-req','BackendController@create_req')->name('cdt.create-req');
    Route::post('/add-req','RequisitionController@create')->name('cdt.add-req');
});

Route::post('/user/add-puo','UserController@create')->name('user.add-puo');