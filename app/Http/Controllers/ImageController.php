<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('image-view');
    }

    public function store(Request $request){
        $imageName = $request->file->getClientOriginalName();
        $request->file->move(public_path('upload'),$imageName);

        return response()->json(['uploaded'=>'/upload/'.$imageName]);
    }
}
