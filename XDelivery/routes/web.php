<?php

use Illuminate\Support\Facades\Route;
Route::get('admin/plans/create','App\Http\Controllers\Admin\PlanController@create')->name('plans.create');
Route::get('admin/plans','App\Http\Controllers\Admin\PlanController@index')->name('plans.index');
Route::post('admin/plans','App\Http\Controllers\Admin\PlanController@store')->name('plans.store');

Route::get('/', function () {
    return view('welcome');
});
