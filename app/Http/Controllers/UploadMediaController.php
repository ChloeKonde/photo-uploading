<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadMediaController extends Controller
{

    public function upload() {
        return view('input');
    }

    public function store(Request $req) {
        $mediaFile = new Media;
        if($req->file()) {
            $fileName = $req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName);

            $mediaFile->name = $req->file->getClientOriginalName();
            $mediaFile->file_path = '/storage/' . $filePath;
            $mediaFile->save();

            //Storage::put('uploads/', $req->file('file'));

        }
    }
}
