<?php

namespace App\Http\Controllers;

use App\Services\GeneratePhotoService;
use App\Services\MediaService;
use Illuminate\Http\Request;

class UploadMediaController extends Controller
{
    private $mediaService;


    public function __construct()
    {
        $this->mediaService = app(MediaService::class);
    }

    public function upload() {
        return view('input');
    }

    public function store(Request $req) {
        if($req->file()) {
            $path = $this->mediaService->store($req);
            return (new GeneratePhotoService())->generate($path);
        }
    }
}
