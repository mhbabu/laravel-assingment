<?php

use Illuminate\Support\Facades\Route;

Route::group(['module' => 'Employee', 'middleware' => ['web','auth'], 'namespace' => 'App\Modules\Employee\Controllers'], function() {
    Route::get('employees/{id}/delete','EmployeeController@delete');
    Route::resource('employees', 'EmployeeController');
});
