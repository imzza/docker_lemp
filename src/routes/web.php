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

Route::post('/', function () {
        $http = new \GuzzleHttp\Client;
        $response = $http->post('https://localhost/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '916298a1-4ade-465d-abe8-5e1e6edaa288',
                'client_secret' => 'IGhiIMIsi7LiTH1k9LSruCvj3YJloVMRkeWX58CW',
                'username' => "john@example.com",
                'password' => "12345678",
                'scope' => '',
            ],
        ]);
        return json_decode((string) $response->getBody(), true);

    // return view('welcome');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
