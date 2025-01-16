<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\hash;
use App\Models\utilisateur;
class controllerStore extends Controller
{
    function store(request $request){
   // dd($request);
     $nom=$request->nom;
     $prenom=$request->prenom;
     $email=$request->email;
     $password=$request->password;
     $request->validate([
        "nom"=>"required",
        "prenom"=>"required",
        "email"=>"email | unique:utilisateurs",
        "password"=>"min:8|confirmed"
     ]);
     utilisateur::create([
           "nom"=>$nom,
           "prenom"=>$prenom,
           "email"=>$email,
           "password"=>hash::make($password)
      ]);
     return redirect()->route('login')->with("success","votre compte cree avec succee ");
    }}
