<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;

class controllerAuth extends Controller
{
    function auth(request $request){
         // dd($request);
          $email=$request->email;
          $password=$request->password;
          $user=[
            "email"=>$email,
            "password"=>$password
          ];
          if(auth::attempt($user)){
            $request->session()->regenerate();
            return redirect()->route('interface');
          }
          else{
            return back()->witherrors([
                "emai"=>"email ou mot de pas est incorrect "
            ]);
          }
    }
}
