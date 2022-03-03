<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getService(){
        $result = Services::latest()->get();
        return $result;
    }
}
