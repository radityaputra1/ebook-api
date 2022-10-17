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

    Route::get('coba', function(){
        return "halo dek";
    });

    Route::get('coba1',function(){
        return ['Radit','Aaaa','Bbbb'];
    });
    //array JSON
    route::get('coba2', function(){
        return [
            'Nama' => 'Raditya Putra',
            'Nis' => 3103120177,
            'Kelas' => 'XII RPL 6',
        ];
    });

    Route::get('coba3', function(){
        return response()->json(
            [
                'Nama' => 'Raditya Putra',
                'Nis' => 3103120177,
                'Kelas' => 'XII RPL 6',
            ],201
        );
    });