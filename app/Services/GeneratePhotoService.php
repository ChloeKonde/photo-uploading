<?php


namespace App\Services;

use Illuminate\Http\Request;

class GeneratePhotoService
{
    public function generate(Request $req) {
        return $req['pathToFile'];
    }
}
