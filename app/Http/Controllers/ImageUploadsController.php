<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageUploadRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadsController extends Controller
{
    protected $disk = 'upload';

    public function process(ImageUploadRequest $request)
    {
        $path = $request->file('filepond')->store('images', $this->disk);

        return response()->json($path);
    }

    public function restore(Request $request)
    {
        $path = $request->get('restore');

        return Storage::disk($this->disk)->download($path);
    }

    public function revert(Request $request)
    {
        $path = trim($request->getContent(), '"');

        Storage::disk($this->disk)->delete($path);

        return response(null, 204);
    }
}
