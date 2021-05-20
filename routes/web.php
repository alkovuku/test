<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

/**
 * staff_add
 */
Route::get('staff/staff_add', 'StaffController@staff_add');
Route::post('staff/staff_add_check', 'StaffController@staff_add_check');
Route::post('staff/staff_add_done', 'StaffController@staff_add_done');

/**
 * staff_list
 */
Route::get('staff/staff_list', 'StaffController@staff_list');

/**
 * staff_edit
 */
Route::get('staff/{code}/staff_edit', 'StaffController@staff_edit');
Route::patch('staff/{code}', 'StaffController@staff_edit_done');

/**
 * staff_delete
 */
Route::get('staff/{code}/staff_delete', 'StaffController@staff_delete');
Route::delete('staff/{code}', 'StaffController@staff_delete_done');