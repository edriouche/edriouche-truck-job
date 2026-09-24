<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>معرض الصور والفيديوهات - Edriouche Truck Job</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            color: #222;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 8px;
        }

        .intro {
            text-align: center;
            color: #666;
            margin-bottom: 25px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 15px;
        }

        .item {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,.12);
        }

        .item img,
        .item video {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
            background: #111;
        }

        .empty {
            text-align: center;
            background: #fff;
            padding: 35px 20px;
            border-radius: 12px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 12px;
            }

            .gallery {
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }

            .item img,
            .item video {
                height: 170px;
            }
        }
    </style>
</head>

<body>
<div class="container">

    <h1>📸 معرض الصور والفيديوهات</h1>
    <p class="intro">صور وفيديوهات من عالم النقل والشاحنات.</p>

    @auth
    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data" style="background:#fff;padding:18px;border-radius:12px;margin-bottom:25px;text-align:center;">
        @csrf
        <h3>📤 إضافة صور أو فيديوهات</h3>
        <input type="file" name="media[]" accept="image/*,video/*" multiple required>
        <br><br>
        <button type="submit" style="padding:10px 20px;border:0;border-radius:8px;cursor:pointer;">
            رفع الملفات
        </button>
    </form>
    @endauth

    @if($items->count())
        <div class="gallery">

            @foreach($items as $item)
                <div class="item">
                    @auth
                    <div style="padding:10px;text-align:center;">
                        <form action="{{ route('gallery.caption', $item) }}" method="POST">
                            @csrf
                            <textarea name="caption"
                                      rows="2"
                                      maxlength="500"
                                      placeholder="✏️ اكتب وصفًا أو نصًا للصورة..."
                                      style="width:100%;box-sizing:border-box;padding:8px;border:1px solid #ddd;border-radius:8px;resize:vertical;">{{ $item->caption }}</textarea>
                            <button type="submit"
                                    style="margin-top:8px;background:#198754;color:white;border:0;padding:8px 14px;border-radius:8px;cursor:pointer;">
                                ✏️ حفظ الكتابة
                            </button>
                        </form>

                        <form action="{{ route('gallery.destroy', $item) }}" method="POST" style="margin-top:8px;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    onclick="return confirm('هل تريد حذف هذا الملف؟');"
                                    style="background:#dc3545;color:white;border:0;padding:8px 14px;border-radius:8px;cursor:pointer;">
                                🗑️ حذف
                            </button>
                        </form>
                    </div>
                    @endauth

                    @if($item->type === 'video')
                        <video controls preload="metadata">
                            <source src="{{ asset('storage/' . $item->path) }}">
                            متصفحك لا يدعم تشغيل الفيديو.
                        </video>
                    @else
                        <a href="{{ asset('storage/' . $item->path) }}" target="_blank">
                            <img
                                src="{{ asset('storage/' . $item->path) }}"
                                alt="صورة من Edriouche Truck Job"
                                loading="lazy"
                            >
                        </a>
                    @endif

                </div>
            @endforeach

        </div>
    @else
        <div class="empty">
            <h2>📷 لا توجد صور أو فيديوهات حالياً</h2>
            <p>سيتم إضافة محتوى المعرض هنا.</p>
        </div>
    @endif

</div>
</body>
</html>
