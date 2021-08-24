<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class Usercontroller extends Controller
{

    function login(Request $request)
    {

        // $user = User::where(['email' => $request->email])->first();
        $user = DB::table('users')->where(['email' => $request->email])->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                //if password match,then redirect user a profile
                $request->session()->put('user', $user);
                return redirect('/'); //this profile name relate to controller name profile function

            } else {
                return "Email or Password is not matched";
            }
        }
    }
}
