<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;

class ImageController extends Controller
{
    public function store (Request $request) {
      request()->validate([
        'file' => 'required|image|mimes:jpg,png',
      ]);
    
      if ($request->hasFile('file')) {
        // $name = $request->file->getClientOriginalName();        
        // $path = $request->file->store('images', 'public');

        /* A storage/app/public könyvtárban létrehoz
        egy images könyvtárat, abba menti a fájlokat */

        
          //store your file into directory and db
          // $save = new Image();
          // $save->name = $file;
          // $save->path= $path;
          // $save->save();


        return response()->json([
          "success" => true,
          "path" => $path,
          "name" => $name,
          "message" => "File successfully uploaded"
        ]);
      }
    }
}
