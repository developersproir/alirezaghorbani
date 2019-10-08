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
//Frontend
Route::get('/', 'Frontend\HomeController@index')->name('home');
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/account/login', 'Usercontroller@login')->name('login');
    Route::post('/account/login', 'Usercontroller@dologin')->name('post.login');
    Route::get('/account/register', 'Usercontroller@register')->name('register');
    Route::post('/account/register', 'Usercontroller@doRegister')->name('post.register');
    Route::get('/account/logout', 'Usercontroller@logout')->name('post.logout');

    //User Dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('user.dashboard');
    //subscribe
    Route::get('/plans', 'PlansController@index')->name('frontend.plans.index');
    Route::get('/subscribe/{plan_id}', 'SubscribeController@index')->name('frontend.subscribe.index');
    Route::post('/subscribe/{plan_id}', 'SubscribeController@register')->name('frontend.subscribe.register');
    //files
    Route::get('file/{file_id}', 'FilesController@details')->name('frontend.files.details');
    Route::get('file/download/{file_id}', 'FilesController@download')->name('frontend.files.download');
    Route::post('file/report', 'FilesController@report')->name('frontend.files.report');
    Route::get('/access', 'FilesController@access')->name('frontend.files.access');

    //Package
    Route::get('/package/{pack_id}', 'PackageController@details')->name('frontend.package.details');
    //Categories
    Route::get('/categories', 'CategoriesController@index')->name('frontend.category');
    Route::get('/categories/{category_id}', 'CategoriesController@item')->name('frontend.category.item');
});



Route::group(['prefix' => 'management', 'namespace' => 'Admin','middleware' => 'admin'], function () {

    Route::get('/','DashboardController@index')->name('admin.dashboard.home');

    //Users Route
    Route::get('user', 'UsersController@index')->name('admin.user.list');
    Route::get('user/create', 'UsersController@create')->name('admin.user.create');
    Route::post('user/create', 'UsersController@store')->name('admin.user.store');
    Route::get('users/delete/{user_id}', 'UsersController@delete')->name('admin.user.delete');
    Route::get('users/edit/{user_id}', 'UsersController@edit')->name('admin.user.edit');
    Route::post('users/edit/{user_id}', 'UsersController@update')->name('admin.user.update');
    Route::get('users/packages/{user_id}', 'UsersController@packages')->name('admin.users.packages');


    //File Route
    Route::get('files', 'FilesController@index')->name('admin.files.list');
    Route::get('files/create', 'FilesController@create')->name('admin.files.create');
    Route::post('files/create', 'FilesController@store')->name('admin.files.store');
    Route::get('files/edit/{file_id}', 'FilesController@edit')->name('admin.files.edit');
    Route::post('files/edit/{file_id}', 'FilesController@update')->name('admin.files.update');
    Route::get('files/remove/{plan_id}', 'FilesController@remove')->name('admin.files.remove');

    //Plan Route
    Route::get('plans', 'PlansController@index')->name('admin.plans.list');
    Route::get('plans/create', 'PlansController@create')->name('admin.plans.create');
    Route::post('plans/create', 'PlansController@store')->name('admin.plans.store');
    Route::get('plans/edit/{plan_id}', 'PlansController@edit')->name('admin.plans.edit');
    Route::post('plans/edit/{plan_id}', 'PlansController@update')->name('admin.plans.update');
    Route::get('plans/remove/{plan_id}', 'PlansController@remove')->name('admin.plans.remove');

    //package Route
    Route::get('packages', 'PackagesController@index')->name('admin.packages.list');
    Route::get('packages/create', 'PackagesController@create')->name('admin.packages.create');
    Route::post('packages/create', 'PackagesController@store')->name('admin.packages.store');
    Route::get('packages/edit/{package_id}', 'PackagesController@edit')->name('admin.packages.edit');
    Route::post('packages/edit/{package_id}', 'PackagesController@update')->name('admin.packages.update');
    Route::get('packages/remove/{package_id}', 'PackagesController@remove')->name('admin.packages.remove');
    Route::get('packages/sync_files/{package_id}', 'PackagesController@syncFiles')->name('admin.packages.sync_files');
    Route::post('packages/sync_files/{package_id}', 'PackagesController@updatesyncFiles')->name('admin.packages.sync_files');

    //payment Route
    Route::get('payments', 'PaymentsController@index')->name('admin.payments.list');
    Route::get('payments/remove/{payment_id}', 'PaymentsController@remove')->name('admin.payments.remove');


    //Categories Route
    Route::get('categories', 'CategoriesController@index')->name('admin.categories.list');
    Route::get('categories/create', 'CategoriesController@create')->name('admin.categories.create');
    Route::post('categories/create', 'CategoriesController@store')->name('admin.categories.store');
    Route::get('categories/edit/{category_id}', 'CategoriesController@edit')->name('admin.categories.edit');
    Route::post('categories/edit/{category_id}', 'CategoriesController@update')->name('admin.categories.update');
    Route::get('categories/remove/{category_id}', 'CategoriesController@remove')->name('admin.categories.remove');
});