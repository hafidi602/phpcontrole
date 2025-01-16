<?php

namespace App\Http\Controllers;
use App\Models\films;
use Illuminate\Http\Request;
class controllerInterface extends Controller
{
    function interface(){
        $films=films::paginate(12);
        return view('interface',compact('films'));
    }

    function detail(request $request){
          $id=$request->id;
          $film=films::findorfail($id);
          return view('film_detail',compact('film'));
    }
    function watch(request $request){
        $id=$request->id;
        $video=films::find($id);
        return view('watch',compact('video'));
    }
    function recherche(request $request){
        //dd($request);
        $films=films::where('nom','like',"%$request->nom%")->get();
        return view('recherche',compact('films'));
    }
    function historique(){
        $films=films::where('type','like',"%historique%")->get();
        return view('recherche',compact('films'));
    }
    function horreur(){
        $films=films::where('type','like',"%horreur%")->get();
        return view('recherche',compact('films'));
    }
    function action(){
        $films=films::where('type','like',"%action%")->get();
        return view('recherche',compact('films'));
    }
    function romantique(){
        $films=films::where('type','like',"%romantique%")->get();
        return view('recherche',compact('films'));
    }
}
