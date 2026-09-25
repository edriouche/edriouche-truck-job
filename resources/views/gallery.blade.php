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

        .actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 18px;
            border: 0;
            border-radius: 8px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 15px;
        }

        .home {
            background: #198754;
        }

        .login {
            background: #0d6efd;
        }

        .logout {
            background: #6c757d;
        }

        .upload-box {
            background: #fff;
            padding: 18px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,.12);
        }

        .upload-box h2 {
            margin-top: 0;
        }

        .upload-box input[type="file"] {
            width: 100%;
            box-sizing: border-box;
            margin: 10px 0;
        }

        .upload-button {
            background: #198754;
        }

        .help {
            color: #666;
            font-size: 14px;
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

        .caption-box {
            padding: 10px;
        }

        .caption-box textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 8px;
            resize: vertical;
        }

        .save-button {
            margin-top: 8px;
            background: #198754;
        }

        .delete-button {
            margin-top: 8px;
            background: #dc3545;
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

    <div class="actions">
        <a href="{{ url('/') }}" class="button home">
            🏠 العودة إلى الصفحة الرئيسية
        </a>

        @auth
            <form action="{{ route('gallery.logout') }}" method="POST">
                @csrf
                <button type="submit" class="button logout">
                    🚪 تسجيل الخروج
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" class="button login">
                🔐 دخول إدارة المعرض
            </a>
        @endauth
    </div>

    <p class="intro">صور وفيديوهات من عالم النقل والشاحنات.</p>

    @auth
        <div class="upload-box">
            <h2>📤 رفع صور وفيديوهات</h2>

            <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <input
                    type="file"
                    name="media[]"
                    accept="image/jpeg,image/png,image/webp,video/mp4,video/quicktime,video/webm"
                    multiple
                    required
                >

                <p class="help">
                    يمكنك اختيار حتى 20 ملفًا. الحد الأقصى لكل ملف 50MB.
                </p>

                @if ($errors->any())
                    <div style="color:#dc3545;margin-bottom:10px;">
                        {{ $errors->first() }}
                    </div>
                @endif

                <button type="submit" class="button upload-button">
                    📤 رفع الملفات
                </button>
            </form>
        </div>
    @endauth

    @if($items->count())
        <div class="gallery">

            @foreach($items as $item)
                <div class="item">

                    @if($item->type === 'video')
                        <video controls preload="metadata">
                            <source src="{{ url('/storage/' . $item->path) }}">
                            متصفحك لا يدعم تشغيل الفيديو.
                        </video>
                    @else
                        <a href="{{ url('/storage/' . $item->path) }}" target="_blank">
                            <img
                                src="{{ url('/storage/' . $item->path) }}"
                                alt="صورة من Edriouche Truck Job"
                                loading="lazy"
                            >
                        </a>
                    @endif

                    @auth
                        <div class="caption-box">

                            <form action="{{ route('gallery.caption', $item) }}" method="POST">
                                @csrf

                                <textarea
                                    name="caption"
                                    rows="2"
                                    maxlength="500"
                                    placeholder="✏️ اكتب وصفًا أو نصًا للصورة..."
                                >{{ $item->caption }}</textarea>

                                <button type="submit" class="button save-button">
                                    ✏️ حفظ الكتابة
                                </button>
                            </form>

                            <form
                                action="{{ route('gallery.destroy', $item) }}"
                                method="POST"
                                onsubmit="return confirm('هل تريد حذف هذه الصورة أو الفيديو؟');"
                            >
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="button delete-button">
                                    🗑️ حذف
                                </button>
                            </form>

                        </div>
                    @endauth

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
