@php
    $lessonImages = isset($academyImages)
        ? $academyImages->where('lesson_number', $lessonNumber)
        : collect();
    $locale = app()->getLocale();
@endphp

@if($lessonImages->isNotEmpty())
    <div class="academy-lesson-images" style="margin:16px 0;padding:14px;background:#f8fafc;border:1px solid #dbe3ec;border-radius:12px;">
        @if($locale === 'es')
            <h3>🖼️ Imágenes de apoyo</h3>
        @elseif($locale === 'fr')
            <h3>🖼️ Illustrations pédagogiques</h3>
        @elseif($locale === 'en')
            <h3>🖼️ Learning illustrations</h3>
        @else
            <h3>🖼️ صور توضيحية للدرس</h3>
        @endif
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(210px,1fr));gap:14px;">
            @foreach($lessonImages as $lessonImage)
                @php
                    $caption = $lessonImage->{'title_'.$locale} ?: $lessonImage->title_ar;
                @endphp
                <figure style="margin:0;background:#fff;padding:10px;border:1px solid #e2e8f0;border-radius:10px;">
                    <img src="{{ route('academy.images.media', $lessonImage) }}"
                         alt="{{ $caption }}"
                         loading="lazy"
                         style="display:block;width:100%;height:auto;max-height:300px;object-fit:contain;">
                    <figcaption style="margin-top:8px;text-align:center;font-weight:700;">{{ $caption }}</figcaption>
                </figure>
            @endforeach
        </div>
    </div>
@endif
