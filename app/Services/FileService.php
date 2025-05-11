<?php
namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class FileService
{

    public function storeFile(UploadedFile $file, string $fileNamePrefix = 'default', string $path = 'images')
    {
        $fileName = $fileNamePrefix . '-' . time() . $file->getClientOriginalName();
        $file->move(public_path($path), $fileName);
        return $fileName; 
    }

    public function deleteFile($fullPath)
    {
        if (File::exists($fullPath)) {
            File::delete($fullPath);
        }
    }
}
