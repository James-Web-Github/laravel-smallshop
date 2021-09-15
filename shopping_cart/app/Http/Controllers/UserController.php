<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserController extends Controller

{
    function login(Request $request){
        $user = DB::table('users')->where(['email' => $request->email])->first();
        //  $user = User::where(['email'=>$request->email])->first();
        if (!$user || !Hash::check($request->password,$user->password)){
            return "Username or passwoed is wrong!";
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/');
            
        }
         // return request()->input();
    } 
}
