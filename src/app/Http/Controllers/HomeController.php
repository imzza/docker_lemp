<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function token(Request $request) {

        return response()->json($request->all());

        $http = new GuzzleHttp\Client;
        $response = $http->post('https://localhost/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '916298a1-4ade-465d-abe8-5e1e6edaa288',
                'client_secret' => 'IGhiIMIsi7LiTH1k9LSruCvj3YJloVMRkeWX58CW',
                'username' => $request->username,
                'password' => $request->password,
                'scope' => '',
            ],
        ]);
        return json_decode((string) $response->getBody(), true);
    }
}
