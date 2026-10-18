@php
$locale = app()->getLocale();
$emptyCaption = match ($locale) {
    'es' => 'Descripción aún no añadida',
    'fr' => 'Description non encore ajoutée',
    'en' => 'Description not added yet',
    default => 'لم يُضف الوصف بعد',
};
@endphp

<section class="home-gallery" aria-labelledby="home-gallery-title">
    <style>
        .home-gallery {
            max-width: 1100px;
            margin: 0 auto;
            padding: 38px 20px;
        }
        .home-gallery h2 {
            text-align: center;
            color: #0b3a68;
            margin: 0 0 8px;
        }
        .home-gallery-intro {
            text-align: center;
            color: #64748b;
            margin: 0 0 24px;
        }
        .home-gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }
        .home-gallery-item {
            min-width: 0;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 4px 14px rgba(15,23,42,.07);
        }
        .home-gallery-item img,
        .home-gallery-item video {
            display: block;
            width: 100%;
            height: 230px;
            object-fit: contain;
            background: #111827;
        }
        .home-gallery-admin {
            max-width: 700px;
            margin: 0 auto 24px;
            padding: 16px;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            background: #f8fafc;
        }
        .home-gallery-admin h3 { margin-top: 0; }
        .home-gallery-admin input[type="file"] {
            display: block;
            width: 100%;
            margin: 12px 0;
        }
        .home-gallery-admin button,
        .home-gallery-item-admin button {
            border: 0;
            border-radius: 7px;
            padding: 9px 13px;
            color: white;
            background: #166534;
            cursor: pointer;
        }
        .home-gallery-help { color: #64748b; font-size: 14px; }
        .home-gallery-item-admin {
            padding: 12px;
            border-top: 1px solid #e5e7eb;
        }
        .home-gallery-item-admin textarea {
            box-sizing: border-box;
            width: 100%;
            min-height: 64px;
            padding: 8px;
            border: 1px solid #cbd5e1;
            border-radius: 7px;
            font: inherit;
        }
        .home-gallery-item-admin .delete-button { background: #b91c1c; margin-top: 8px; }
        .home-gallery-caption {
            padding: 12px 14px;
            margin: 0;
            color: #334155;
            white-space: pre-line;
            overflow-wrap: anywhere;
        }
        @media (max-width: 760px) {
            .home-gallery-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 12px;
            }
            .home-gallery-item img,
            .home-gallery-item video {
                height: 180px;
            }
        }
        @media (max-width: 480px) {
            .home-gallery {
                padding: 28px 12px;
            }
            .home-gallery-grid {
                grid-template-columns: 1fr;
            }
            .home-gallery-item img,
            .home-gallery-item video {
                height: 230px;
            }
        }
    </style>

    <h2 id="home-gallery-title">
        @if($locale === 'es')
            📸 Galería de fotos y vídeos
        @elseif($locale === 'fr')
            📸 Galerie photos et vidéos
        @elseif($locale === 'en')
            📸 Photo and video gallery
        @else
            📸 معرض الصور والفيديوهات
        @endif
    </h2>

    <p class="home-gallery-intro">
        @if($locale === 'es')
            Las publicaciones más recientes del mundo del transporte.
        @elseif($locale === 'fr')
            Les dernières publications du monde du transport.
        @elseif($locale === 'en')
            The latest photos and videos from the world of transport.
        @else
            أحدث الصور والفيديوهات من عالم النقل والشاحنات.
        @endif
    </p>


    @if(auth()->check() && auth()->user()->is_admin)
        <div class="home-gallery-admin">
            <h3>
                @if($locale === 'en') Manage gallery
                @elseif($locale === 'es') Gestionar la galería
                @elseif($locale === 'fr') Gérer la galerie
                @else إدارة المعرض
                @endif
            </h3>
            <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="return_to" value="/">
                <label for="home-gallery-media">
                    @if($locale === 'en') Select photos or videos
                    @elseif($locale === 'es') Selecciona fotos o vídeos
                    @elseif($locale === 'fr') Choisir des photos ou vidéos
                    @else اختر الصور أو الفيديوهات
                    @endif
                </label>
                <input id="home-gallery-media" type="file" name="media[]" accept="image/*,video/mp4,video/quicktime,video/webm" multiple required>
                <p class="home-gallery-help">
                    @if($locale === 'en') Up to 20 files; maximum 100 MB per file.
                    @elseif($locale === 'es') Hasta 20 archivos; máximo 100 MB por archivo.
                    @elseif($locale === 'fr') Jusqu’à 20 fichiers ; 100 Mo maximum par fichier.
                    @else حتى 20 ملفًا، بحد أقصى 100 ميغابايت لكل ملف.
                    @endif
                </p>
                <button type="submit">
                    @if($locale === 'en') Upload files
                    @elseif($locale === 'es') Subir archivos
                    @elseif($locale === 'fr') Envoyer les fichiers
                    @else رفع الملفات
                    @endif
                </button>
            </form>
        </div>
    @endif

    @if(isset($galleryItems) && $galleryItems->isNotEmpty())
        <div class="home-gallery-grid">
            @foreach($galleryItems as $item)
                <article class="home-gallery-item">
                    @if($item->type === 'video')
                        <video controls preload="metadata" playsinline>
                            <source src="{{ route('gallery.media', $item) }}">
                            @if($locale === 'en')
                                Your browser does not support video playback.
                            @elseif($locale === 'es')
                                Tu navegador no admite la reproducción de vídeo.
                            @elseif($locale === 'fr')
                                Votre navigateur ne prend pas en charge la lecture vidéo.
                            @else
                                متصفحك لا يدعم تشغيل الفيديو.
                            @endif
                        </video>
                    @else
                        <img
                            src="{{ route('gallery.media', $item) }}"
                            alt="{{ $item->caption ?: 'Edriouche Truck Job' }}"
                            loading="lazy"
                        >
                    @endif

                    <p class="home-gallery-caption">{{ $item->caption ?: $emptyCaption }}</p>

                    @if(auth()->check() && auth()->user()->is_admin)
                        <div class="home-gallery-item-admin">
                            <form action="{{ route('gallery.caption', $item) }}" method="POST">
                                @csrf
                                <input type="hidden" name="return_to" value="/">
                                <label>
                                    @if($locale === 'en') Caption / text
                                    @elseif($locale === 'es') Descripción / texto
                                    @elseif($locale === 'fr') Légende / texte
                                    @else وصف الصورة أو النص
                                    @endif
                                </label>
                                <textarea name="caption" maxlength="500" placeholder="{{ $emptyCaption }}">{{ $item->caption }}</textarea>
                                <button type="submit">
                                    @if($locale === 'en') Save text
                                    @elseif($locale === 'es') Guardar texto
                                    @elseif($locale === 'fr') Enregistrer le texte
                                    @else حفظ النص
                                    @endif
                                </button>
                            </form>
                            <form action="{{ route('gallery.destroy', $item) }}" method="POST"
                                  onsubmit="return confirm(@json(match($locale) {'en' => 'Delete this photo or video?', 'es' => '¿Eliminar esta foto o vídeo?', 'fr' => 'Supprimer cette photo ou vidéo ?', default => 'هل تريد حذف هذه الصورة أو الفيديو؟'}));">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="return_to" value="/">
                                <button type="submit" class="delete-button">
                                    @if($locale === 'en') Delete
                                    @elseif($locale === 'es') Eliminar
                                    @elseif($locale === 'fr') Supprimer
                                    @else حذف
                                    @endif
                                </button>
                            </form>
                        </div>
                    @endif
                </article>
            @endforeach
        </div>
    @else
        <p class="home-gallery-intro">
            @if($locale === 'en')
                No photos or videos have been added yet.
            @elseif($locale === 'es')
                Todavía no se han añadido fotos ni vídeos.
            @elseif($locale === 'fr')
                Aucune photo ou vidéo n’a encore été ajoutée.
            @else
                لم تتم إضافة صور أو فيديوهات بعد.
            @endif
        </p>
    @endif
</section>
