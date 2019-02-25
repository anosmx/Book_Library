<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    //
    public function index(){

        $files = Storage::disk('public')->files('books');

        // Convert array to string
//        $strFile = implode('|', $files);

        // To get file name without extension. used in foreach loop
//        $ext = pathinfo($strFile, PATHINFO_EXTENSION);
//        $filename = basename($strFile,'.'.$ext);

        return view('books.index', compact(['files']));
    }

    public function writings(){

        $files = Storage::disk('public')->files('writings');

        return view('books.writings', compact(['files']));
    }

}
