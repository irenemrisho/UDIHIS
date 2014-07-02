<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('d', function(){
	$today = date('Y-m-d');
	echo "<pre/>";

	$days = (Patients_visit::getDays($today));
	foreach ($days as $day) {
		echo Patients_visit::whereRaw('doctor_id = ? and created_at = ? ', array(Auth::user()->id, "2014-07-02"))->count();
	}
});

Route::get('/', 'UserController@getIndex');
Route::get('login', 'UserController@getIndex');
Route::post('/login', 'UserController@login');

 Route::group(array('before'=>'auth'), function(){

//Route::controller('/', 'UserController');

Route::get('admin','Admin@getIndex');
Route::post('/users/store','UserController@storeUser');
Route::post('/users/delete/{id}', 'UserController@destroy');
Route::get('/manage_noticeboard','AdminController@manageNoticeboard');
Route::get('/profile','AdminController@admin_profile');
Route::post('/notification/add','AdminController@addNoticeboard');
Route::post('/manage_user','Admin@addUser');
Route::get('manage_user','AdminController@manage_user');
Route::post('/manage_user/search/', 'AdminController@search');

Route::post('/manage_user/{id}','AdminController@editUser');
Route::get('/manage_user/{id}','Admin@manage_user');
Route::get('/add_user/{id}','AdminController@edit_user');
Route::post('/System_user/{id}','AdminController@AssignRoll');
Route::get('/logout','UserController@logout');
Route::get('forgot_password','UserController@forgotPassword');
Route::get('loaduser/{id}', 'UserController@loaduser');
//Doctor routes
Route::get('doctor/reports', 'DoctorController@getReport');
Route::get('patients/lab_test/{id}','DoctorController@lab_test');
Route::post('patients/lab_test/{id}','DoctorController@lab_test_post');
Route::get('doctor','DoctorController@index');
Route::get('appointment','DoctorController@appointment');
Route::get('allpatients','DoctorController@patients');
Route::get('patients/prescribe/backpatients','DoctorController@patients');
Route::get('doctor/profile','DoctorController@doc_profile');
Route::get('reports','DoctorController@reports');
Route::get('prescription','DoctorController@prescription');
Route::get('patients/prescribe/{id}', 'DoctorController@prescribe');
Route::post('patients/prescribe/recommended', 'DoctorController@recommend');
Route::post('patients/prescribe/getMedxn', 'DoctorController@getMedxn');
Route::post('consultation/autosave','DoctorController@autosave');
Route::post('patients/search','DoctorController@search');
Route::get('patient/attend/{id}','DoctorController@attend');
Route::get('patients/admit/{id}','DoctorController@admit');
Route::post('patients/admit/{id}','DoctorController@admit_post');
Route::post('appointment/accept/{id}', 'DoctorController@accept');
Route::get('getAppoints', 'DoctorController@getAppoints');
Route::post('doctor/passwordChange', 'DoctorController@passwordChange');
/*Pharmacy Route*/

Route::get('pharmacy', 'PharmacyController@getIndex');
Route::get('provide_medication','PharmacyController@getMedics');
Route::get('manage_medicine','PharmacyController@getMedic');
Route::post('/manage_medicine', 'PharmacyController@addMedicine');
Route::get('edit_medicine', 'PharmacyController@getEditMedicine');
Route::post('/edit_medicine', 'PharmacyController@updateMedicine');
Route::get('manage_report','PharmacyController@getReport');
Route::get('my_accountpharmacy','PharmacyController@getAccount');
Route::post('manage_medicine/search/', 'PharmacyController@search');
Route::get('dashboard','PharmacyController@getDash'); 
Route::post('pharmacy/recommended','PharmacyController@profile'); 
Route::post('provide_recommended','PharmacyController@provide_selected'); 
Route::get('product_request','PharmacyController@getProductRequest');
Route::post('product_request','PharmacyController@addProductRequest');

/*Billing Route*/
Route::get('billing','BillingController@getIndex');
Route::get('edit_service','BillingController@getEditService'); 
Route::post('edit_service','BillingController@getService'); 

Route::get('edit_insurance_campany','BillingController@getEditCampany'); 
Route::post('edit_insurance_campany','BillingController@UpdateCampany');

Route::get('Pending_bills','BillingController@getBills');
Route::get('Insurance_management','BillingController@getInsurance');
Route::post('Insurance_management','BillingController@addInsurance');
Route::get('service_management','BillingController@getService');
Route::post('service_management','BillingController@addService');
Route::get('manage_report','BillingController@getReports');
Route::get('profile_billing','BillingController@getProfile');
Route::get('My_account_billing','BillingController@getAccount');
Route::post('billing/patients_payments','BillingController@profile');
Route::post('provide_payments','BillingController@provide_payments'); 
Route::get('patient_pdf_invoice','BillingController@get_patient_invoice');
Route::post('billing/delete/{id}','BillingController@destroyCampany');
Route::post('billing/campanies_price','BillingController@campanyPrice');


Route::get('add_campany_price','BillingController@addCampanyPrice');
Route::post('add_campany_price','BillingController@saveCampanyPrice');

Route::post('billing/patients_paids','BillingController@getPaidModel');

Route::get('getPaymentInvoice','BillingController@get_patient_invoice');
Route::get('getPaymentReceipt','BillingController@get_patient_patient');


///Receptionist
/*for listsing patients and adding*/
Route::get('reception/reports','ReceptionController@reports');
Route::post('reception/reports','ReceptionController@getreports');
Route::post('patients/loadsection', 'ReceptionController@loadsection');
Route::post('patients/savepatientinfo', 'ReceptionController@savepatientinfo');
Route::post('patients/savepatientinfo1', 'ReceptionController@patientinfo');
Route::get('reception', 'ReceptionController@getIndex');
Route::get('reception/profile', 'ReceptionController@edit_profile');
Route::get('manage/patients', 'ReceptionController@index');
Route::get('patient/edit/{id}', 'ReceptionController@update');
Route::post('patient/edit/{id}', 'ReceptionController@edit');
Route::post('patient/editInitial/{id}', 'ReceptionController@editInitial');
Route::get('patients' , 'PatientController@index');
/*to add a patient*/
Route::post('patients/add' , 'ReceptionController@savepatientinfo');
Route::get('patients/app_card' , 'ReceptionController@app_card_view');
Route::get('patients/add' , 'ReceptionController@index');
Route::get('patients/app_card' , 'ReceptionController@app_card_view');

/*for editing a patient*/
Route::get('patients/edit/{id}' , 'PatientController@edit');
/*to update patient infor*/
Route::post('patients/edit/{id}' , 'PatientController@update');
/*to delete a patient*/
Route::get('patients/delete/{id}' , 'PatientController@destroy');
Route::post('patients/profile', 'DoctorController@profile');


/*Laboratory technician routes*/
Route::get('laboratory','LaboratoryController@laboratory');
Route::get('stock','LaboratoryController@stock');
Route::get('getTests', 'LaboratoryController@getTests');
Route::get('testpatients/getTests', 'LaboratoryController@getTests');
Route::get('testpatients', 'LaboratoryController@testpatients');
Route::get('testpatients/{id}', 'LaboratoryController@testpatient');
Route::get('patient/lab_result/{id}','LaboratoryController@lab_results');



//return the appoitment form
Route::get('patient/appoint/{id}' , 'PatientVisitController@index');
//return patient visit form
Route::get('patient/visit/{id}' , 'PatientVisitController@visit');

//patient visit routes
Route::post('patient/visit/loadsection', 'PatientVisitController@loadsection');
Route::post('patient/visit/savepatientinfo1', 'PatientVisitController@patientinfo');
// appointment routes
Route::post('patient/appoint/loadsection', 'PatientVisitController@loadsection');
Route::post('appoitment/add', 'PatientVisitController@setAppointment');
Route::post('getDrRooms', 'PatientVisitController@getDrRooms');
Route::get('appointRegister', 'PatientVisitController@appoint');
Route::get('appointment/delete/{id}', 'PatientVisitController@destroy');
Route::get('appointment/edit/{id}', 'PatientVisitController@edit');
Route::post('appointment/edit/{id}', 'PatientVisitController@update');

Route::get('print/{id}', 'ReceptionController@printView');

// Reports code goes here
Route::post('reception/generateReports', 'ReportsController@generateReports');



//Admission routes
Route::get('/nurse', 'AdmissionController@index');
Route::get('admitted_patients', 'AdmissionController@patients');
Route::get('allocate_ward/{id}', 'AdmissionController@allocate_ward');
Route::get('administer_dosage', 'AdmissionController@patients');
Route::get('maintain_inp_info', 'AdmissionController@manage_inp_info');
Route::get('manage/{id}', 'AdmissionController@manage_patient');
Route::get('allocate_ward', 'AdmissionController@allocate');
//Routes for HumanResource

Route::get('hr', 'HumanResourceController@index');
Route::get('hr/person', 'HumanResourceController@person');
Route::post('person/add', 'HumanResourceController@personStore');
Route::get('hr/person_other_info', 'HumanResourceController@personOtherInfo');
Route::get('hr/position', 'HumanResourceController@positionShow');
Route::get('hr/profile', 'HumanResourceController@hr_profile');
Route::post('position/add', 'HumanResourceController@store');
Route::get('hr/person_other_info', 'HumanResourceController@personOtherInfo');
Route::get('hr/manage_user','HumanResourceController@manage_user');

//Routes for password change/reset
Route::post('password/change', 'PasswordController@change');
Route::post('password/pax', 'PasswordController@pax');


//Routes for supplies 
Route::get('supplies', 'SupplierController@index');
Route::get('supplies/request', 'SupplierController@getRequest');
Route::get('supplies/supplied', 'SupplierController@getSupplied');
Route::get('supplies/goods', 'SupplierController@getGoods');
Route::post('supplies/goods', 'SupplierController@addGoods');
Route::get('supplies/reports', 'SupplierController@getReports');
Route::get('supplies/account', 'SupplierController@getAccount');
Route::get('supplies/edit_good', 'SupplierController@getEditGood');
Route::post('supplies/edit_good', 'SupplierController@updateGood');



//update the person informations  for the first time
//first
Route::post('person/edit1/{id}', 'HumanResourceController@updateFirst');
// second
Route::post('person/edit2/{id}', 'HumanResourceController@updateRegistration');
//third
Route::post('person/edit3/{id}', 'HumanResourceController@updateThird');
//fourth
Route::post('person/edit4/{id}', 'HumanResourceController@updateFourth');
//next of kin information
Route::post('person/editNext/{id}', 'HumanResourceController@updateSecond');
//route for updating the disciplinary action
Route::post('person/discipline/{id}', 'HumanResourceController@discplinaryAction');
//display the page for persons
Route::get('hr/manage_person', 'HumanResourceController@edit');
//Manage specific person informations
Route::get('person/manage/{id}', 'HumanResourceController@manage_employee');
//Add actions to a specific employeer
Route::get('person/more_info/{id}', 'HumanResourceController@employee_more_info');
//update person basic information
Route::get('person/update_basic_info/{id}', 'HumanResourceController@update_basic_info');
//update pesonal contact
Route::get('person/update_personal_contact/{id}', 'HumanResourceController@update_personal_contact');
//update work contact
Route::get('person/update_work_contact/{id}', 'HumanResourceController@update_work_contact');
//Add next of Kin 
Route::get('person/add_next_of_kin/{id}', 'HumanResourceController@add_next_of_kin');
//Add Education
Route::get('person/add_education/{id}', 'HumanResourceController@add_education');




 }); 













