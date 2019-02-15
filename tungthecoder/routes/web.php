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

$proxy_url    = getenv('PROXY_URL');
$proxy_schema = getenv('PROXY_SCHEMA');

if (!empty($proxy_url)) {
   URL::forceRootUrl($proxy_url);
}

if (!empty($proxy_schema)) {
    URL::forceScheme($proxy_schema);
}

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Home
Route::get('/home', 'HomeController@index')->name('home');

// Contact
Route::get('contact', 'ContactController@getContact')->name('contact');
Route::post('contact', 'ContactController@postContact')->name('contact');

// Admin Panel
Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor|guest')->group(function() {
    Route::get('/', 'ManageController@index');
    Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/users', 'UserController');
    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
    Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
    Route::resource('/posts', 'PostController');
    
});

// Permission Control - Users
Route::post('/manage/users', ['as'=>'users.store', 'uses'=>'UserController@store', 'middleware' => ['role:superadministrator|administrator|editor|author|contributor|guest', 'permission:create-users']]);
Route::put('/manage/users/{user}', ['as'=>'users.update', 'uses'=>'UserController@update', 'middleware' => ['role:superadministrator|administrator|editor|author|contributor|guest', 'permission:update-users']]);

// Permission Control - Permissions
Route::post('/manage/roles', ['as'=>'roles.store', 'uses'=>'RoleController@store', 'middleware' => ['role:superadministrator|administrator|editor|author|contributor|guest', 'permission:create-acl']]);
Route::put('/manage/roles/{role}', ['as'=>'roles.update', 'uses'=>'RoleController@update', 'middleware' => ['role:superadministrator|administrator|editor|author|contributor|guest', 'permission:update-acl']]);

// Permission Control - Permissions
Route::post('/manage/permissions', ['as'=>'permissions.store', 'uses'=>'PermissionController@store', 'middleware' => ['role:superadministrator|administrator|editor|author|contributor|guest', 'permission:create-acl']]);
Route::put('/manage/permissions/{permission}', ['as'=>'permissions.update', 'uses'=>'PermissionController@update', 'middleware' => ['role:superadministrator|administrator|editor|author|contributor|guest', 'permission:update-acl']]);


