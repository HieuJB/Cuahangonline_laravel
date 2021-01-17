<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Gmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Model_table_users;
use Illuminate\Support\Facades\Hash;


class Auth_controller extends Controller
{
    public function dangky(Request $req){
        $data = Model_table_users::where('email','=',$req->email)->first();
        if($data){
            return response()->json(array("exists" => true));
        }else{
            $data = new Model_table_users;
            $data_name = $req->name;
            $data->name = $req->name;
            $data->email = $req->email;
            $data->phone = "";
            $data->password = Hash::make($req->password);
            $data->phanquyen = "nguoidung";
            $data->active = "1";
            $data->save();
            $details = [
                'title' => 'Email gửi từ web của Trung Hiếu',
                'name' => $data_name,
                'body' => 'Cảm ơn bạn đã đăng ký thành viên.'
            ];
            Mail::to($req->email)->send(new Gmail($details));
        }
    }
    public function dangnhap(Request $req){
        $data = Model_table_users::where('email','=',$req->email)->first();
        if(!$data || !Hash::check($req->password,$data->password)){
            return response()->json(array("err" => true));
        }else{
            Session()->put('taikhoan',$data->name);
        }
    }
}
