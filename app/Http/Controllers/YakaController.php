<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Yaka;

class YakaController extends Controller
{
    public function index(){

        $yakas=Yaka::all();

        return view("shop", compact('yakas'));
    }
    //
}
