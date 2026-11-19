<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademyImage extends Model
{
    protected $fillable = [
        'lesson_number',
        'path',
        'mime_type',
        'original_name',
        'title_ar',
        'title_es',
        'title_fr',
        'title_en',
        'sort_order',
    ];
}
