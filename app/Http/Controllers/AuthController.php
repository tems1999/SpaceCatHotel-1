<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use DB;
use App\Models\User;

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
    public function cat() {

        return view('cat');
    }
    public function shower() {

        return view('shower');
    }
    public function adminhome() {

        return view('adminhome');
    }
    public function dayreport() {

        return view('dayreport');
    }
    public function profile() {
        $profile = User::where('username', Session::get('username'))->first();

        return view('profile', compact('profile'));
    }
    public function adminprofile() {

        return view('adminprofile');
    }
    public function monthreport() {

        return view('monthreport');
    }
    public function yearreport() {

        return view('yearreport');
    }

    public function User() {
        $users = User::select('*')->get();

        return view('User', compact('User'));
    }

    public function SubmitRegister(Request $request) {
        $username = ($request->has('username')) ? trim($request->input('username')) : null;
        $password = ($request->has('password')) ? trim($request->input('password')) : null;
        $firstname = ($request->has('firstname')) ? trim($request->input('firstname')) : null;
        $lastname = ($request->has('lastname')) ? trim($request->input('lastname')) : null;
        $tell = ($request->has('tell')) ? trim($request->input('tell')) : null;
        
        if(!$username) {
            $status = 'กรุณากรอกชื่อผู้ใช้';
            return response()->json(['status' => $status], 401);
        }
        if(strlen($password) < 4) {
            $status = 'รหัสผ่านขั้นต่ำ 4 ตัวอักษร';
            return response()->json(['status' => $status], 401);
        }
        if(strlen($firstname) < 1 || strlen($lastname) < 1) {
            $status = 'กรุณากรอกชื่อ-นามสกุล';
            return response()->json(['status' => $status], 401);
        }
        if($tell && strlen($tell) < 10 || strlen($tell) > 10) {
            $status = 'รูปแบบหมายเลขโทรศัพท์ไม่ถูกต้อง';
            return response()->json(['status' => $status], 401);
        }

        $isUser = User::where('username', $username)->first();

        if($isUser) {
            $status = 'ชื่อผู้ใช้นี้ถูกใช้ไปแล้ว';
            return response()->json(['status' => $status], 401); 
        } else {
            $InsertRow = new User;
            $InsertRow->username = $username;
            $InsertRow->password = $password;
            $InsertRow->firstname = $firstname;
            $InsertRow->lastname = $lastname;
            $InsertRow->tell = $tell;
            $InsertRow->save();
        }
        return response()->json(200);
    }

    public function LoginVerify(Request $request) {
        $username = ($request->has('username')) ? trim($request->input('username')) : null;
        $password = ($request->has('password')) ? trim($request->input('password')) : null;

        $isUser = User::where('username', $username)->where('password', '=', $password)->first();

        if($isUser) {
            $result = [
                'isOk' => true, 
                'username' => $username,
                'role' => $isUser->role
            ];
            $statusCode = 200;

            session::put('authen', true);
            session::put('username', $username);
            session::put('firstname', $isUser->firstname);
            session::put('lastname', $isUser->lastname);
            session::put('role', $isUser->role);

        } else {
            $result = [
                'isOk' => false,
                'status' => 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง'
            ];
            $statusCode = 400;
        }

        return response()->json($result, $statusCode);
    }

    public function Logout() {
        session::flush();
        session::save();
        return redirect(Route('Home'));
    }

    public function SubmitProfileEdit(Request $request) {
        $id = ($request->has('user_id')) ? trim($request->input('user_id')) : null;
        $firstname = ($request->has('firstname')) ? trim($request->input('firstname')) : null;
        $lastname = ($request->has('lastname')) ? trim($request->input('lastname')) : null;
        $phone = ($request->has('tell')) ? trim($request->input('tell')) : null;
        $image64 = ($request->has('image64')) ? trim($request->input('image64')) : null;

        if($phone && strlen($phone) < 10 || strlen($phone) > 10) {
            $status = 'รูปแบบหมายเลขโทรศัพท์ไม่ถูกต้อง';
            return response()->json(['status' => $status], 401);
        }
        if(strlen($firstname) < 1 || strlen($lastname) < 1) {
            $status = 'กรุณากรอกชื่อ-นามสกุล';
            return response()->json(['status' => $status], 401);
        }
        $isMember = User::where('user_id', $id)->first();
        if(!$isMember) {
            $status = 'เกิดข้อผิดพลาด ไม่พบชื่อผู้ใช้';
            return response()->json(['status' => $status], 401);
        } else {
            if($image64) {
                @list($type, $file_data) = explode(';', $image64);
                @list(, $file_data) = explode(',', $file_data); 
                $imageName = Str::random(10).'.'.'png';   
                file_put_contents(config('pathImage.uploads_path') . '/' . $imageName, base64_decode($file_data));
    
                User::where('user_id', $id)
                    ->update([
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'tell' => $phone,
                    'image' => $imageName,
                    'updated_at' => now()
                ]);
                session::put('image', $imageName);
            } else {
                User::where('user_id', $id)
                    ->update([
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'tell' => $phone,
                    'updated_at' => now()
                ]);
            }
        }
        session::put('firstname', $firstname);

        return response()->json(200);
    }
    
    public function SubmitProfileEditPassword(Request $request) {
        $id = ($request->has('user_id')) ? trim($request->input('user_id')) : null;
        $password = ($request->has('password')) ? trim($request->input('password')) : null;
        $image64 = ($request->has('image64')) ? trim($request->input('image64')) : null;
        $isMember = User::where('user_id', $id)->first();
        if(!$isMember) {
            $status = 'เกิดข้อผิดพลาด ไม่พบชื่อผู้ใช้';
            return response()->json(['status' => $status], 401);
        } else {
            if($image64) {
                @list($type, $file_data) = explode(';', $image64);
                @list(, $file_data) = explode(',', $file_data); 
                $imageName = Str::random(10).'.'.'png';   
                file_put_contents(config('pathImage.uploads_path') . '/' . $imageName, base64_decode($file_data));
    
                User::where('user_id', $id)
                    ->update([
                    'password' => $password,
                    'updated_at' => now()
                ]);
                session::put('image', $imageName);
            } else {
                User::where('user_id', $id)
                    ->update([
                    'password' => $password,
                    'updated_at' => now()
                ]);
            }
        }
        session::put('password', $password);

        return response()->json(200);
    }
}