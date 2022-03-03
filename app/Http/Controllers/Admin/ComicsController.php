<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function getComicHomePage(){
        $result= Comics::limit(4)->orderBy('id', 'desc')->get();
        return $result;
    }
    public function getComicAll(){
        $result = Comics::all();
        return $result;
    }
    public function getComicNew(){
        $result= Comics::limit(3)->orderBy('id', 'desc')->get();
        return $result;
    }
    public function onSelectDetail(Request $request){
        $id = $request->id;
        $result = Comics::where('id',$id)->get();
        return $result;
    }
}
