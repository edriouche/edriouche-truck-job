<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $items = GalleryItem::latest()->get();

        return view('gallery', compact('items'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'media' => ['required', 'array', 'max:20'],
            'media.*' => ['file', 'mimes:jpg,jpeg,png,gif,webp,bmp,tif,tiff,avif,heic,heif,mp4,mov,webm', 'max:102400'],
        ]);

        foreach ($request->file('media') as $file) {
            $type = str_starts_with($file->getMimeType(), 'video/') ? 'video' : 'image';
            $path = $file->store('gallery', 'public');

            GalleryItem::create([
                'type' => $type,
                'path' => $path,
            ]);
        }

        return $this->redirectToSource($request);
    }

    private function redirectToSource(Request $request)
    {
        return $request->input('return_to') === '/'
            ? redirect('/')
            : redirect()->route('gallery');
    }

    public function media(\Illuminate\Http\Request $request, GalleryItem $galleryItem)
    {
        return \Illuminate\Support\Facades\Storage::disk('public')->serve(
            $request,
            $galleryItem->path
        );
    }

    public function updateCaption(Request $request, GalleryItem $galleryItem)
    {
        $request->validate([
            'caption' => ['nullable', 'string', 'max:500'],
        ]);

        $galleryItem->update([
            'caption' => $request->input('caption'),
        ]);

        return $this->redirectToSource($request);
    }

    public function destroy(Request $request, GalleryItem $galleryItem)
    {
        Storage::disk('public')->delete($galleryItem->path);
        $galleryItem->delete();

        return $this->redirectToSource($request);
    }
}
