<?php

namespace App\\Http\\Controllers;

use App\\Models\\AcademyImage;
use Illuminate\\Http\\Request;
use Illuminate\\Support\\Facades\\Storage;

class AcademyImageController extends Controller
{
    public function index()
    {
        $images = AcademyImage::orderBy('lesson_number')
            ->orderBy('sort_order')
            ->latest('id')
            ->get();

        return view('admin.academy-images', compact('images'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'lesson_number' => ['required', 'integer', 'between:1,13'],
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp,avif,gif', 'max:5120'],
            'title_ar' => ['required', 'string', 'max:180'],
            'title_es' => ['nullable', 'string', 'max:180'],
            'title_fr' => ['nullable', 'string', 'max:180'],
            'title_en' => ['nullable', 'string', 'max:180'],
        ]);

        $file = $request->file('image');
        $path = $file->store('academy', 'public');

        AcademyImage::create([
            'lesson_number' => $data['lesson_number'],
            'path' => $path,
            'mime_type' => $file->getMimeType(),
            'original_name' => $file->getClientOriginalName(),
            'title_ar' => $data['title_ar'],
            'title_es' => $data['title_es'] ?? null,
            'title_fr' => $data['title_fr'] ?? null,
            'title_en' => $data['title_en'] ?? null,
        ]);

        return redirect()->route('admin.academy-images')
            ->with('success', 'تم رفع الصورة وربطها بالدرس بنجاح.');
    }

    public function media(Request $request, AcademyImage $academyImage)
    {
        abort_unless(Storage::disk('public')->exists($academyImage->path), 404);

        return Storage::disk('public')->serve($request, $academyImage->path, [
            'Content-Type' => $academyImage->mime_type,
            'X-Content-Type-Options' => 'nosniff',
            'Cache-Control' => 'public, max-age=86400',
        ]);
    }

    public function destroy(AcademyImage $academyImage)
    {
        Storage::disk('public')->delete($academyImage->path);
        $academyImage->delete();

        return redirect()->route('admin.academy-images')
            ->with('success', 'تم حذف الصورة التعليمية.');
    }
}
