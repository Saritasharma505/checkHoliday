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
Route::get('/voucher','GiftvouchersController@index');
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


//Payment Route

Route::get('/payment','PaymentController@index')->name('payment.index');
Route::get('/adpayment','PaymentController@create')->name('payment.create');
Route::post('/adpayment/save','PaymentController@store')->name('payment.store');
Route::get('/payment-receipt','PaymentController@paymentReceipt')->name('payment.paymentReceipt');


//AMC Route
Route::get('/amc','AmcController@index')->name('amc.index');
Route::get('/add-amc','AmcController@create')->name('amc.create');
Route::post('/amc/update','AmcController@store')->name('amc.store');
Route::get('/amc/receipt/{member_id}','AmcController@amcReceipt')->name('amc.amcReceipt');

Route::get('generate-pdf/{member_id}', 'AmcController@pdfview')->name('generate-pdf');






Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
Route::get('/home', 'HomeController@index');
Route::resource('permissions', 'Admin\PermissionsController');
Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
Route::resource('roles', 'Admin\RolesController');
Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
Route::resource('users', 'Admin\UsersController');
Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

});
