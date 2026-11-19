<?php

namespace App\Http\Controllers;

use App\Models\AcademyImage;

class TrainingController extends Controller
{
    public function index()
    {
        $academyImages = AcademyImage::orderBy('lesson_number')
            ->orderBy('sort_order')
            ->latest('id')
            ->get();

        return view('training', compact('academyImages'));
    }
}
