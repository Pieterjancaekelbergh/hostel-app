<?php

namespace App\Http\Controllers\Dashboard\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    use \App\Traits\UploadsFile;

    //
    public function store(Request $r) {
        $rules = [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $this->validate($r, $rules);

        $file = $r->file('file');
        $path = $this->uploadFile($file);

        return response()->json([
            'message' => 'File uploaded successfully',
            'path' => $path,
        ]);

    }
}
