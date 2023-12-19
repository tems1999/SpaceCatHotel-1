<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Users;

class AuthController extends Controller
{
    public function Home() {
        $data = [];
        $data['title'] = "Home Page";

        return view('Home', compact('data'));
    }
    public function login() {

        return view('login');
    }
    public function register() {

        return view('register');
    }
    public function room() {

        return view('room');
    }
    public function payment() {

        return view('payment');
    }
    public function shower() {

        return view('shower');
    }


    public function RegisterStore(Request $request) {
        $username = ($request->has('username')) ? trim($request->input('username')) : null;
        $password = ($request->has('password')) ? trim($request->input('password')) : null;
        $firstname = ($request->has('firstname')) ? trim($request->input('firstname')) : null;
        $lastname = ($request->has('lastname')) ? trim($request->input('lastname')) : null;
        
        
        $user = DB::table('users')
                ->where('username', $username)
                ->first();
                
                
        if($user) {
            $status = 'Username in used already!';
            return response()->json(['status' => $status], 401); 
        } else {
            $InsertRow = new Users;
            $InsertRow->username = $username; 
            $InsertRow->password = $password;
            $InsertRow->firstname = $firstname;
            $InsertRow->lastname = $lastname;
            $InsertRow->save();
            $statusCode = 200;die();
        }
        return response()->json($statusCode);
    }
}
