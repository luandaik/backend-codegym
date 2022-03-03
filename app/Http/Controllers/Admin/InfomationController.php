<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Infomation;
use Illuminate\Http\Request;

class InfomationController extends Controller
{
    public function getInfomation(){
        $result = Infomation::all();
        return $result;
    }
}
