@php
    $locale = app()->getLocale();
    $lessonNames = [
        1 => 'القيادة الدفاعية', 2 => 'القيادة الاقتصادية', 3 => 'الرجوع بالمقطورة',
        4 => 'الفرملة ومسافة التوقف', 5 => 'الحمولة وتوزيع الوزن',
        6 => 'الفحص قبل الانطلاق', 7 => 'الطقس والظروف الصعبة',
        8 => 'المرايا والنقاط العمياء', 9 => 'وثائق النقل',
        10 => 'ربط وفصل نصف المقطورة', 11 => 'اختبار السائق',
        12 => 'علامات الطريق', 13 => 'المواد الخطرة ADR',
    ];
@endphp
<!DOCTYPE html>
<html lang="{{ $locale }}" dir="{{ $locale === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>إدارة الصور التعليمية | Edriouche Truck Job</title>
    <style>
        *{box-sizing:border-box}body{margin:0;background:#f3f6fa;color:#1f2937;font-family:Arial,sans-serif;line-height:1.7}
        .wrap{max-width:1050px;margin:24px auto;padding:16px}.panel,.item{background:#fff;border:1px solid #dbe3ec;border-radius:14px;padding:20px;margin-bottom:18px}
        h1,h2{margin-top:0}.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px}
        label{display:block;font-weight:700;margin:10px 0 4px}input,select{width:100%;padding:11px;border:1px solid #cbd5e1;border-radius:8px;background:#fff}
        button,.btn{display:inline-block;border:0;border-radius:8px;background:#0b3a68;color:#fff;padding:11px 17px;text-decoration:none;cursor:pointer;margin-top:12px}
        .danger{background:#b42318}.muted{color:#64748b;font-size:.92rem}.success{background:#e8f7ed;padding:12px;border-radius:8px;margin-bottom:14px}
        .error{color:#b42318;font-size:.9rem}.items{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px}
        .item img{width:100%;height:165px;object-fit:contain;background:#f8fafc;border-radius:8px;border:1px solid #e2e8f0}
        .item form{display:inline-block}.top{display:flex;justify-content:space-between;gap:12px;flex-wrap:wrap}
    </style>
</head>
<body>
<div class="wrap">
    <div class="top">
        <h1>🖼️ إدارة الصور التعليمية للأكاديمية</h1>
        <a class="btn" href="{{ url('/training') }}">العودة إلى الأكاديمية</a>
    </div>

    @if(session('success'))<div class="success">{{ session('success') }}</div>@endif

    <section class="panel">
        <h2>إضافة صورة إلى درس</h2>
        <p class="muted">اختر الدرس، ارفع صورة واضحة، ثم أضف وصفاً مناسباً. الصيغ المدعومة: JPG وPNG وWebP وAVIF وGIF، والحد الأقصى 5 ميغابايت.</p>
        <form method="POST" action="{{ route('admin.academy-images.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="grid">
                <div>
                    <label for="lesson_number">الدرس</label>
                    <select id="lesson_number" name="lesson_number" required>
                        @foreach($lessonNames as $number => $name)
                            <option value="{{ $number }}" @selected(old('lesson_number') == $number)>الدرس {{ $number }} — {{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="image">الصورة التعليمية</label>
                    <input id="image" type="file" name="image" accept="image/jpeg,image/png,image/webp,image/avif,image/gif" required>
                </div>
            </div>
            <div class="grid">
                <div><label>الوصف بالعربية *</label><input name="title_ar" value="{{ old('title_ar') }}" maxlength="180" required></div>
                <div><label>الوصف بالإسبانية</label><input name="title_es" value="{{ old('title_es') }}" maxlength="180"></div>
                <div><label>الوصف بالفرنسية</label><input name="title_fr" value="{{ old('title_fr') }}" maxlength="180"></div>
                <div><label>الوصف بالإنجليزية</label><input name="title_en" value="{{ old('title_en') }}" maxlength="180"></div>
            </div>
            @if($errors->any())
                <div class="error">@foreach($errors->all() as $error)<div>{{ $error }}</div>@endforeach</div>
            @endif
            <button type="submit">رفع الصورة وربطها بالدرس</button>
        </form>
    </section>

    <section class="panel">
        <h2>الصور المضافة ({{ $images->count() }})</h2>
        @if($images->isEmpty())
            <p class="muted">لم تتم إضافة صور تعليمية بعد.</p>
        @else
            <div class="items">
                @foreach($images as $image)
                    <article class="item">
                        <img src="{{ route('academy.images.media', $image) }}" alt="{{ $image->title_ar }}" loading="lazy">
                        <strong>الدرس {{ $image->lesson_number }} — {{ $lessonNames[$image->lesson_number] ?? '' }}</strong>
                        <div>{{ $image->title_ar }}</div>
                        <form method="POST" action="{{ route('admin.academy-images.destroy', $image) }}" onsubmit="return confirm('هل تريد حذف هذه الصورة؟')">
                            @csrf
                            @method('DELETE')
                            <button class="danger" type="submit">حذف الصورة</button>
                        </form>
                    </article>
                @endforeach
            </div>
        @endif
    </section>
</div>
</body>
</html>
