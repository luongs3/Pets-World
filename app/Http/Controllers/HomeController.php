<?php

namespace App\Http\Controllers;

use Firebase\JWT\JWT;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function test()
    {
        $accessToken = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJncmFudF90eXBlIjoiY2xpZW50X2NyZWRlbnRpYWxzIiwiY2xpZW50X2lkIjoiOSIsImNsaWVudF9zZWNyZXQiOiJVclh4RDg4WEhyYkNkaGlNNmRsd1A5R3l5cFBLSUk0TnNFNzZqdUxaIiwic2NvcGVzIjoicmVhZCIsInJlc291cmNlX2lkIjoicGV0c18xIn0.6NtPvAwvpfe3zLt_Q61j-Exw1gJmMTAvAdao9v8uHmc";
        $key = config('common.encrypter_token_string');
        try {
            $jwtData = JWT::decode($accessToken, $key, ['HS256']);
        } catch (Exception $ex) {

        }
    }
}
