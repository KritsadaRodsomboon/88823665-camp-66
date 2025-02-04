<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function myfunction(Request $req)
    {
        $data = [];//ตัวแปร
        $data['myinput'] = $req->input('myinput'); //ส่วนกำหนดว่า myinput มีค่าเท่ากับ input 
        return view('myview', $data);
    }
}
