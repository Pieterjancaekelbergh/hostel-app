<?php
namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadsFile
{
    public function uploadFile(UploadedFile $file, string $folder = null) : string {
        // get extension of the file
        $ext = $file->getClientOriginalExtension();

        // generate a unique filename
        $fileName = uniqid() . '.' . $ext;

        // move the file to the uploads folder
        $filePath = 'uploads/' . date('Y/m/');
        $fullPath = $filePath  . $fileName;

        $fileSystem = Storage::disk('public');
        $fileSystem->putFileAs($filePath, $file, $fileName);

        return $fullPath;
    }
}
