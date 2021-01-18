<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    public function login(Request $request){
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

//        $url = url('/oauth/token');

        $url = 'http://192.168.100.134/oauth/token';

        $response = Http::asForm()->post($url, [
            'grant_type' => 'password',
            'client_id' => "9240b742-fa59-413f-9803-13a4f7708930",
            'client_secret' => "lpML7hSPWch53i5i7GN4mdnu63IW4UfsPkxaADUl",
            'username' => $request->username,
            'password' => $request->password,
            'scope' => '*',
        ]);
        return $response->json();
    }

    public function saolve(Request $request){
        return response()->json(array('status' => 200, 'message' => 'Something is not wrong'), 200);
    }
}
