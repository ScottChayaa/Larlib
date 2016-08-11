<?php
 
Route::group(['namespace' => 'ScottChayaa\Larlib\Controllers', 'prefix'=>'demo'], function() {
    
    Route::get('/', 'DemoController@index');

});