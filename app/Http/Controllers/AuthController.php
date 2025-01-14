<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Models\User;
use App\Models\room;
use App\Models\cat;


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
        $room = User::where('username', Session::get('username'))->first();
        $room = room::All();

        return view('room', compact('room'));
       
    }
    public function payment() {

        return view('payment');
    }
    public function cat() {
        $cats = cat::All();

        return view('cat' , compact('cats'));
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
    public function admineditroom() {
        $rooms = room::All();

        return view('admineditroom', compact('rooms'));
       
    }
    public function catedit() {
        $catedit = cat::where('cat_name', Session::get('cat_name'))->first();;

        return view('catedit', compact('catedit'));
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

    public function SubmitCatEdit(Request $request) {
        $cat_id = ($request->has('cat_id')) ? trim($request->input('cat_id')) : null;
        $cat_name = ($request->has('cat_name')) ? trim($request->input('cat_name')) : null;
        $cat_breed = ($request->has('cat_breed')) ? trim($request->input('cat_breed')) : null;
        $cat_weight = ($request->has('cat_weight')) ? trim($request->input('cat_weight')) : null;
        $cat_gender = ($request->has('cat_gender')) ? trim($request->input('cat_gender')) : null;
        $cat_date = ($request->has('cat_date')) ? trim($request->input('cat_date')) : null;
        $image64_cat = ($request->has('image64_cat')) ? trim($request->input('image64_cat')) : null;
        $image64_doc = ($request->has('image64_doc')) ? trim($request->input('image64_doc')) : null;
        print_r($image64_cat);
        if($image64_cat) {
            @list($type, $file_data) = explode(';', $image64_cat);
            @list(, $file_data) = explode(',', $file_data); 
            $imageName = Str::random(10).'.'.'png';   
            file_put_contents(config('pathImage.uploads_path') . '/' . $imageName, base64_decode($file_data));

            cat::where('cat_id',$cat_id)
                ->update([
                'cat_name' => $cat_name,
                'cat_breed' => $cat_breed,
                'cat_weight' => $cat_weight,
                'cat_gender' => $cat_gender,
                'cat_date' => $cat_date,
                'cat_pic' => $imageName,
                'updated_at' => now()
            ]);
            session::put('cat_pic', $imageName);
            
        if($image64_doc) {
            @list($type, $file_data) = explode(';', $image64_doc);
            @list(, $file_data) = explode(',', $file_data); 
            $imageNameDoc = Str::random(10).'.'.'png';   
            file_put_contents(config('pathImage.uploads_path') . '/' . $imageNameDoc, base64_decode($file_data));
    
            cat::where('cat_id',$cat_id)
                ->update([
                'cat_name' => $cat_name,
                'cat_breed' => $cat_breed,
                'cat_weight' => $cat_weight,
                'cat_gender' => $cat_gender,
                'cat_date' => $cat_date,
                'cat_document' => $imageNameDoc,
                'updated_at' => now()
                ]);
                session::put('cat_document', $imageNameDoc);
            
        }
        
        } else {
            cat::where('cat_id', $cat_id)
                    ->update([
                    'cat_name' => $cat_name,
                    'cat_breed' => $cat_breed,
                    'cat_weight' => $cat_weight,
                    'cat_gender' => $cat_gender,
                    'cat_date' => $cat_date,
                    'updated_at' => now()
                ]);
           
        }

                
        return response()->json(200);
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

    public function SubmitRoomEdit(Request $request) {
        $room_name = ($request->has('room_name')) ? trim($request->input('room_name')) : null;
        $room_cat = ($request->has('room_cat')) ? trim($request->input('room_cat')) : null;
        $room_size = ($request->has('room_size')) ? trim($request->input('room_size')) : null;
        $room_hight = ($request->has('room_hight')) ? trim($request->input('room_hight')) : null;
        $room_price = ($request->has('room_price')) ? trim($request->input('room_price')) : null;
        $room_detail = ($request->has('room_detail')) ? trim($request->input('room_detail')) : null;
        $image64 = ($request->has('image64')) ? trim($request->input('image64')) : null;
        
        if(!$image64) {
            $status = 'กรุณาแนบรูป';
            return response()->json(['status' => $status], 401);
        }

        @list($type, $file_data) = explode(';', $image64);
        @list(, $file_data) = explode(',', $file_data); 
        $imageName = Str::random(10).'.'.'png';   
        file_put_contents(config('pathImage.uploads_path') . '/' . $imageName, base64_decode($file_data));
        
        $InsertRow = new room;
        $InsertRow->room_name = $room_name;
        $InsertRow->room_cat = $room_cat;
        $InsertRow->room_size = $room_size;
        $InsertRow->room_hight = $room_hight;
        $InsertRow->room_price = $room_price;
        $InsertRow->room_detail = $room_detail;
        $InsertRow->room_pic = $imageName;
        $InsertRow->save();
           
        return response()->json(200);
    }

    public function SubmitRoomDelete(Request $request) {
        $room_id = ($request->has('room_id')) ? trim($request->input('room_id')) : null;

        room::where('room_id', $room_id)->delete();

        return response()->json(200);
    }
    public function SubmitCat(Request $request) {
        $cat_name = ($request->has('cat_name')) ? trim($request->input('cat_name')) : null;
        $cat_breed = ($request->has('cat_breed')) ? trim($request->input('cat_breed')) : null;
        $cat_weight = ($request->has('cat_weight')) ? trim($request->input('cat_weight')) : null;
        $cat_gender = ($request->has('cat_gender')) ? trim($request->input('cat_gender')) : null;
        $cat_date = ($request->has('cat_date')) ? trim($request->input('cat_date')) : null;
        $image64_cat = ($request->has('image64_cat')) ? trim($request->input('image64_cat')) : null;
        $image64_doc = ($request->has('image64_doc')) ? trim($request->input('image64_doc')) : null;
        
            @list($type, $file_data) = explode(';', $image64_cat);
            @list(, $file_data) = explode(',', $file_data); 
            $imageNameCat = Str::random(10).'.'.'png';   
            file_put_contents(config('pathImage.uploads_path') . '/' . $imageNameCat, base64_decode($file_data));

            @list($type, $file_data) = explode(';', $image64_cat);
            @list(, $file_data) = explode(',', $file_data); 
            $imageNameDoc = Str::random(10).'.'.'png';   
            file_put_contents(config('pathImage.uploads_path') . '/' . $imageNameDoc, base64_decode($file_data));
        
   
            $InsertRow = new cat;
            $InsertRow->cat_name = $cat_name;
            $InsertRow->cat_breed = $cat_breed;
            $InsertRow->cat_weight = $cat_weight;
            $InsertRow->cat_gender = $cat_gender;
            $InsertRow->cat_date = $cat_date;
            $InsertRow->cat_pic = $imageNameCat;
            $InsertRow->cat_document = $imageNameDoc;
            $InsertRow->save();
        return response()->json(200);
    }
    public function SubmitCatDelete(Request $request) {
        $cat_id = ($request->has('cat_id')) ? trim($request->input('cat_id')) : null;

        cat::where('cat_id', $cat_id)->delete();

        return response()->json(200);
    }
    
}