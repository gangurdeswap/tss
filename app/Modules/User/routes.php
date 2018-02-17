<?php
Route::group(['prefix' => 'user', 'namespace' => 'App\Modules\User\Controllers', 'middleware'=>['web']], function () {
Route::get('user-view','UserController@testView');
});