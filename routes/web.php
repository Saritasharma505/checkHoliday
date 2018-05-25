<?php
Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

//Configuration
Route::get('/configuration','ConfigurationController@index');
Route::get('/addconfiguration','ConfigurationController@create');
Route::post('/addconfiguration/save','ConfigurationController@store');
Route::get('/configuration/delete-config/{id}','ConfigurationController@destroy');
Route::get('/configuration/edit-config/{id}','ConfigurationController@edit');
Route::post('/configuration/update','ConfigurationController@update');

//Vouchers Route
Route::get('/voucher','GiftvouchersController@index')->name('voucher.index');
Route::get('/addvoucher','GiftvouchersController@create');
Route::post('/generatevoucher','GiftvouchersController@store');
Route::get('/voucher/view/{id}','GiftvouchersController@show');
Route::get('/voucher/delete/{id}','GiftvouchersController@destroy');
Route::get('/voucher/details/{id}','GiftvouchersController@print');

//Member Route
Route::get('/member','MembersController@index')->name('member.index');
Route::get('/add-member','MembersController@create');
Route::post('/add-member/save','MembersController@store');
Route::get('/member/delete/{id}','MembersController@destroy');
Route::get('/member/edit/{id}','MembersController@edit');
Route::get('/member/member-pdf/{id}','MembersController@memberPDF');
Route::get('/member/member-receipt/{id}','MembersController@memberReceipt');
Route::get('/member/download-agreement/{id}', 'MembersController@agreementDownload')->name('download-agreement');
Route::get('/member/preview/{id}','MembersController@preview')->name('member.preview');  
Route::get('/member/send-email/{id}','MembersController@sendMail')->name('sendmail');
//Payment Route

Route::get('/payment-update','PaymentController@index')->name('payment.index');
Route::get('/adpayment','PaymentController@create')->name('payment.create');
Route::post('/adpayment/save','PaymentController@store')->name('payment.store');
Route::get('/payment-receipt','PaymentController@paymentReceipt')->name('payment.paymentReceipt');


//AMC Route
Route::get('/amc','AmcController@index')->name('amc.index');
Route::get('/add-amc','AmcController@create')->name('amc.create');
Route::post('/amc/update','AmcController@store')->name('amc.store');
Route::get('/amc/receipt/{member_id}','AmcController@amcReceipt')->name('amc.amcReceipt');
Route::get('download-pdf/{member_id}', 'AmcController@downloadPDF')->name('downloadPDF');

//Holiday Route
Route::get('/holiday','HolidayController@index')->name('holiday.index');



//location routes
Route::get('/locations','LocationController@index')->name('location.index');
Route::get('/locations/location-delete/{id}','LocationController@destroy')->name('location.destroy');
Route::get('/locations/location-edit/{id}','LocationController@edit')->name('location.edit');
Route::get('/locations/create-location','LocationController@create')->name('location.create');
Route::post('/locations/store-location','LocationController@store')->name('location.store');
Route::post('/locations/update-location','LocationController@update')->name('location.update');

Route::get('/locations/venue-detail/{id}','VenueController@index')->name('index');
Route::get('/locations/venue-create/{id}','VenueController@create')->name('venue.create');
Route::get('/locations/venue-delete/{id}','VenueController@destroy')->name('venue.destroy');
Route::get('/locations/venue-edit/{id}','VenueController@edit')->name('venue.edit');
Route::post('/locations/venue-add','VenueController@sub_location')->name('venue.store');
Route::post('/locations/venue-update','VenueController@update')->name('venue.update');
Route::get('/admin/venue/datashow/{id}','VenueController@create')->name('create');

//customer support routes

Route::get('admin/customersupport','CustomerController@index')->name('index');
Route::get('admin/customer-view-message/{id}','CustomerController@view')->name('view');
Route::get('admin/customer-view-message-show/{id}','CustomerController@message')->name('message');
Route::post('admin/send-message-user-admin-member','CustomerController@create')->name('create');
Route::get('admin/complain','CustomerController@complainform')->name('complainform');
Route::post('admin/complain-user-record-detail','CustomerController@complainadd')->name('complainadd');
Route::get('admin/customer-view-message-show-single/{member_id}/{id}','CustomerController@single')->name('single');
Route::get('admin/complete/{id}','CustomerController@complete')->name('complete.done');
Route::post('admin/send-message-user-admin-member-remainder','CustomerController@remainder')->name('remainder');

/*close*/

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
Route::get('/home', 'HomeController@index');
Route::resource('permissions', 'Admin\PermissionsController');
Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
Route::resource('roles', 'Admin\RolesController');
Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
Route::resource('users', 'Admin\UsersController');
Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

});


//reports routes amc
Route::get('/amc-report','AmcController@amcReport')->name('amcReport');
Route::get('/amc-report/data','AmcController@reportData');

//reports routes member
Route::get('/member-report','MembersController@memberReport')->name('memberReport');
Route::get('/member-report/data','MembersController@reportData')->name('memberData');

//payments routes member
Route::get('/payment-report','PaymentController@paymentReport')->name('paymentReport');
Route::get('/payment-report/data','PaymentController@reportData');

