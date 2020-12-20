<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageUploadRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilepondUploadsController extends Controller
{
    protected $disk = 'upload';

    public function process(ImageUploadRequest $request)
    {
        $path = $request->file('image')->store('images', $this->disk);

        return response()->json($path);
    }

    public function load(Request $request)
    {
        $path = $request->get('load');

        return Storage::disk($this->disk)->download($path);
    }

    public function revert(Request $request)
    {
        Storage::disk($this->disk)->delete($request->getContent());

        return response(null, 204);
    }
}
