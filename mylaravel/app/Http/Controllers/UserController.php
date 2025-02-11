<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{

    function index(){
        $users = User::all();
        return view('User',['users'=>$users]);
    }
    function edit($id){
        $user = User::find($id);
        return view('user_edit',['user'=>$user]);
    }
    function saveEdit(Request $req){
        $user = User::find($req->id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = ($req->password)==null?$user->password:$req->password;
        $user->save();
        return redirect('user');
    }
    function delete(Request $req){
        $user = User::find($req->id);
        $user->delete();
        return redirect('/user');
    }
}
