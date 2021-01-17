<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Gmail;
use Illuminate\Support\Facades\Mail;


class gmail_controller extends Controller
{
    public function sendgmail(){
        $details = [
            'title' => 'Email gửi từ web của Trung Hiếu',
            'body' => 'Cảm ơn bạn đã đăng ký thành viên.'
        ];
        Mail::to('vlkh00volam14@gmail.com')->send(new Gmail($details));
        return "Email sent";
    }
}
