<?php


namespace App\Services;


use App\Models\Media;
use Illuminate\Http\Request;

class MediaService
{
    public function store(Request $req) {
        $mediaFile = new Media;
        $fileName = $req->file->getClientOriginalName();
        $filePath = $req->file('file')->storeAs('uploads', $fileName);

        $mediaFile->name = $req->file->getClientOriginalName();
        $mediaFile->file_path = '/storage/' . $filePath;
        $mediaFile->save();
        return $filePath;
    }
}
