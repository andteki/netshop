<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;
use Validator;

class ImageController extends Controller
{
    public function store (Request $request) {
    //     $validator = Validator::make($request->all(),[ 
    //         'file' => 'required',
    //   ]);   

    //   if($validator->fails()) {          
           
    //       return response()->json(['error'=>$validator->errors()], 401);                        
    //    }

    // dd($request);
    
      if ($request->hasFile('file')) {
        // $name = $request->file->getClientOriginalName();
        
        $path = $request->file->store('images', 'public');

        //   $path = $file->store('public/images');
        //   $name = $file->getClientOriginalName();
        //   if($file)
            
        echo "<pre>";
        print_r($request->file());
        //   print_r($name);
          //store your file into directory and db
        //   $save = new Image();
        //   $save->name = $file;
        //   $save->path= $path;
        //   $save->save();
             
        //   return response()->json([
        //       "success" => true,
        //       "message" => "File successfully uploaded",
        //       "file" => $file
        //   ]);
 
      }
    }
}
