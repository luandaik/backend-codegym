<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePageEtc;
use Illuminate\Http\Request;

class HomePageEtcController extends Controller
{
    public function selectTitleHome(){
        $result = HomePageEtc::select('home_title','home_subtitle','text_description')->get();
        return $result;
    }
    public function selectToTalHome(){
        $result = HomePageEtc::select('total_sell','total_conscious','total_comic')->get();
        return $result;
    }
}
