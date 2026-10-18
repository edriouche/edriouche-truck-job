@php
$lang = session('locale', request()->query('lang', 'ar'));
if (!in_array($lang, ['ar', 'es', 'fr', 'en'], true)) $lang = 'ar';
$dir = $lang === 'ar' ? 'rtl' : 'ltr';
$text = [
'ar' => ['title'=>'معرض الصور والفيديوهات','home'=>'العودة إلى الصفحة الرئيسية','login'=>'دخول إدارة المعرض','logout'=>'تسجيل الخروج','intro'=>'صور وفيديوهات من عالم النقل والشاحنات.','upload'=>'رفع صور وفيديوهات','limit'=>'يمكنك اختيار 20 ملفًا كحد أقصى، بحد أقصى 100 ميغابايت للملف.','upload_btn'=>'رفع الملفات','video_error'=>'متصفحك لا يدعم تشغيل الفيديو.','caption'=>'اكتب وصفًا أو نصًا للصورة...','save'=>'حفظ الكتابة','delete'=>'حذف','confirm'=>'هل تريد حذف هذه الصورة أو الفيديو؟','empty'=>'لا توجد صور أو فيديوهات حالياً','empty_text'=>'ستُضاف محتويات المعرض هنا.','alt'=>'صورة من Edriouche Truck Job','languages'=>'اللغات'],
'es' => ['title'=>'Galería de fotos y vídeos','home'=>'Volver a la página principal','login'=>'Acceso a la gestión de la galería','logout'=>'Cerrar sesión','intro'=>'Fotos y vídeos del mundo del transporte y los camiones.','upload'=>'Subir fotos y vídeos','limit'=>'Puedes seleccionar hasta 20 archivos. Máximo 100 MB por archivo.','upload_btn'=>'Subir archivos','video_error'=>'Tu navegador no admite la reproducción de vídeo.','caption'=>'Escribe una descripción para la imagen...','save'=>'Guardar texto','delete'=>'Eliminar','confirm'=>'¿Quieres eliminar esta imagen o vídeo?','empty'=>'No hay fotos ni vídeos por ahora','empty_text'=>'Aquí se añadirá contenido a la galería.','alt'=>'Foto de Edriouche Truck Job','languages'=>'Idiomas'],
'fr' => ['title'=>'Galerie de photos et vidéos','home'=>'Retour à la page d’accueil','login'=>'Accès à la gestion de la galerie','logout'=>'Déconnexion','intro'=>'Photos et vidéos du monde du transport et des camions.','upload'=>'Ajouter des photos et vidéos','limit'=>'Vous pouvez choisir jusqu’à 20 fichiers. Maximum 100 Mo par fichier.','upload_btn'=>'Envoyer les fichiers','video_error'=>'Votre navigateur ne prend pas en charge la lecture vidéo.','caption'=>'Écrivez une description de l’image...','save'=>'Enregistrer le texte','delete'=>'Supprimer','confirm'=>'Voulez-vous supprimer cette image ou cette vidéo ?','empty'=>'Aucune photo ou vidéo pour le moment','empty_text'=>'Le contenu de la galerie sera ajouté ici.','alt'=>'Photo de Edriouche Truck Job','languages'=>'Langues'],
'en' => ['title'=>'Photo and Video Gallery','home'=>'Back to Home','login'=>'Gallery Admin Login','logout'=>'Log out','intro'=>'Photos and videos from the world of transport and trucks.','upload'=>'Upload Photos and Videos','limit'=>'You can select up to 20 files. Maximum 100 MB per file.','upload_btn'=>'Upload Files','video_error'=>'Your browser does not support video playback.','caption'=>'Write a caption or description...','save'=>'Save Caption','delete'=>'Delete','confirm'=>'Do you want to delete this photo or video?','empty'=>'No photos or videos yet','empty_text'=>'Gallery content will be added here.','alt'=>'Photo from Edriouche Truck Job','languages'=>'Languages']
];
$t = $text[$lang];
@endphp
<!DOCTYPE html>
<html lang="{{ $lang }}" dir="{{ $dir }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $t["title"] }} - Edriouche Truck Job</title>

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

    <h1>📸 {{ $t['title'] }}</h1>

    <nav class="actions" aria-label="{{ $t['languages'] }}">
        <a class="button login" href="{{ url('/lang/ar') }}?redirect={{ urlencode(request()->path()) }}">🇲🇦 العربية</a>
        <a class="button login" href="{{ url('/lang/es') }}?redirect={{ urlencode(request()->path()) }}">🇪🇸 Español</a>
        <a class="button login" href="{{ url('/lang/fr') }}?redirect={{ urlencode(request()->path()) }}">🇫🇷 Français</a>
        <a class="button login" href="{{ url('/lang/en') }}?redirect={{ urlencode(request()->path()) }}">🇬🇧 English</a>
    </nav>

    <div class="actions">
        <a href="{{ url('/') }}" class="button home">
            🏠 {{ $t["home"] }}
        </a>

        @auth
            <form action="{{ route('gallery.logout') }}" method="POST">
                @csrf
                <button type="submit" class="button logout">
                    🚪 {{ $t["logout"] }}
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" class="button login">
                🔐 {{ $t["login"] }}
            </a>
        @endauth
    </div>

    <p class="intro">{{ $t["intro"] }}</p>

    @if(auth()->check() && auth()->user()->is_admin)
        <div class="upload-box">
            <h2>📤 {{ $t["upload"] }}</h2>

            <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <input
                    type="file"
                    name="media[]"
                    accept="image/*,video/mp4,video/quicktime,video/webm"
                    multiple
                    required
                >

                <p class="help">
                    {{ $t["limit"] }}
                </p>

                @if ($errors->any())
                    <div style="color:#dc3545;margin-bottom:10px;">
                        {{ $errors->first() }}
                    </div>
                @endif

                <button type="submit" class="button upload-button">
                    📤 {{ $t["upload_btn"] }}
                </button>
            </form>
        </div>
    @endif

    @if($items->count())
        <div class="gallery">

            @foreach($items as $item)
                <div class="item">

                    @if($item->type === 'video')
                        <video controls preload="metadata">
                            <source src="{{ route('gallery.media', $item) }}">
                            {{ $t["video_error"] }}
                        </video>
                    @else
                        <a href="{{ route('gallery.media', $item) }}" target="_blank">
                            <img
                                src="{{ route('gallery.media', $item) }}"
                                alt="{{ $t["alt"] }}"
                                loading="lazy"
                            >
                        </a>
                    @endif

                    @if(auth()->check() && auth()->user()->is_admin)
                        <div class="caption-box">

                            <form action="{{ route('gallery.caption', $item) }}" method="POST">
                                @csrf

                                <textarea
                                    name="caption"
                                    rows="2"
                                    maxlength="500"
                                    placeholder="✏️ {{ $t["caption"] }}"
                                >{{ $item->caption }}</textarea>

                                <button type="submit" class="button save-button">
                                    ✏️ {{ $t["save"] }}
                                </button>
                            </form>

                            <form
                                action="{{ route('gallery.destroy', $item) }}"
                                method="POST"
                                onsubmit="return confirm(@json($t['confirm']));"
                            >
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="button delete-button">
                                    🗑️ {{ $t["delete"] }}
                                </button>
                            </form>

                        </div>
                    @endif

                </div>
            @endforeach

        </div>
    @else
        <div class="empty">
            <h2>📷 {{ $t["empty"] }}</h2>
            <p>{{ $t["empty_text"] }}</p>
        </div>
    @endif

</div>
</body>
</html>
