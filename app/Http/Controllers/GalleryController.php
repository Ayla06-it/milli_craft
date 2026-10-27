<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Yaka;


class GalleryController extends Controller
{
    public function showImages(){
        $directory = public_path('Images');
        $files = File::files($directory);

        $images = [];
        foreach($files as $file){
            $images[] = asset('Images/' . $file->getFilename());
        }
        $yakas=Yaka::all();

        return view('shop', compact('yakas','images'));
    }
    //
}
