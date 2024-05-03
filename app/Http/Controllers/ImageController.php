<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadCKEditorImage(Request $request)
    {

        $stored = $request->file('upload')->store('public/images');
        $url      = Storage::url($stored);

        return response()->json(['url' => $url]);

    }

}
