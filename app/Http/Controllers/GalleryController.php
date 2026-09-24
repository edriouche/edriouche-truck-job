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
            'media.*' => ['file', 'mimes:jpg,jpeg,png,webp,mp4,mov,webm', 'max:51200'],
        ]);

        foreach ($request->file('media') as $file) {
            $type = str_starts_with($file->getMimeType(), 'video/') ? 'video' : 'image';
            $path = $file->store('gallery', 'public');

            GalleryItem::create([
                'type' => $type,
                'path' => $path,
            ]);
        }

        return redirect()->route('gallery');
    }

    public function updateCaption(Request $request, GalleryItem $galleryItem)
    {
        $request->validate([
            'caption' => ['nullable', 'string', 'max:500'],
        ]);

        $galleryItem->update([
            'caption' => $request->input('caption'),
        ]);

        return redirect()->route('gallery');
    }

    public function destroy(GalleryItem $galleryItem)
    {
        Storage::disk('public')->delete($galleryItem->path);
        $galleryItem->delete();

        return redirect()->route('gallery');
    }
}
