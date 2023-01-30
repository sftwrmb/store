<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FileFormRequest;

use Illuminate\Support\Facades\Storage;


use App\Models\File;



class FileController extends Controller
{


    public function store(FileFormRequest $request) {



        $contents = file_get_contents($request->_file);

        $original = $request->file('_file')->getClientOriginalName();

        $size = $request->file('_file')->getSize();

        $extension = $request->file('_file')->extension();


        $uploaded = Storage::putFile('public', $request->file('_file'));
    

        if ($uploaded) {

            $insert = File::create([

                'file_name' => $original,

                'file_content' => $contents,

                'file_size' => $size,

                'file_extension' => $extension

            ]);


            if ($insert) {

                return redirect()->back()->with(['upload' => 'Başarılı!']);

            } else {

                return redirect()->back()->with(['fail' => 'Başarısız!']);
            }


        } else {

            return redirect()->back()->with(['result' => 'Yükleme hatası!']);
        }


    }
}
