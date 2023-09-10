<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Cloudinary\Cloudinary;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $image = $request->file('image');

        $url = Cloudinary::upload($image->getRealPath());

        return response()->json([
            'url' => $url,
        ]);
    }
}