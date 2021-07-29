<?php

namespace App\Http\Controllers;

use App\Services\GeneratePhotoService;
use Illuminate\Http\Request;

class GeneratePhotoController extends Controller
{
    private $generatePhotoService;

    public function __construct()
    {
        $this->generatePhotoService = app(GeneratePhotoService::class);
    }

    public function generate(Request $req) {
        return $this->generatePhotoService->generate($req);
    }
}
