@php $locale = app()->getLocale(); @endphp
<div class="container my-5" dir="{{ $locale == 'ar' ? 'rtl' : 'ltr' }}">

    <!-- هيدر الصفحة -->
    <div class="text-center mb-5 p-4 rounded-4 bg-light shadow-sm">
        <h1 class="fw-bold text-primary mb-3">
            @if($locale == 'es') 🎓 Academia del Conductor Profesional
            @elseif($locale == 'fr') 🎓 Académie du Chauffeur Professionnel
            @elseif($locale == 'en') 🎓 Professional Driver Academy
            @else 🎓 أكاديمية السائق المهني وتطوير المهارات
            @endif
        </h1>
        <p class="text-muted leading-relaxed">
            @if($locale == 'es') Guías visuales y formación práctica para conductores profesionales en rutas nacionales e internacionales.
            @elseif($locale == 'fr') Guides visuels et formation pratique pour conducteurs professionnels sur lignes nationales et internationales.
            @elseif($locale == 'en') Visual guides and practical training for professional drivers on national and international routes.
            @else دليل بصري وتكوين تطبيقي مخصص للسائقين المهنيين على المحاور الوطنية والدولية.
            @endif
        </p>
    </div>

    <div class="row g-4">
        <!-- المحور الأول: النقاط العمياء -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0 rounded-4 p-4 bg-white">
                <div class="text-center mb-3">
                    <img src="{{ asset('images/blind-spots-truck.svg') }}" alt="Truck Blind Spots" class="img-fluid rounded shadow-sm" style="max-height: 260px; width: 100%; object-fit: contain;">
                </div>
                <h3 class="text-primary fw-bold fs-4 mb-2">
                    @if($locale == 'es') ⚠️ Puntos Ciegos del Camión
                    @elseif($locale == 'fr') ⚠️ Angles Morts du Poids Lourds
                    @elseif($locale == 'en') ⚠️ Truck Blind Spots Guide
                    @else ⚠️ دليلك الشامل للنقاط العمياء
                    @endif
                </h3>
                <p class="text-secondary small leading-relaxed">
                    @if($locale == 'es') Visualiza las zonas de riesgo a la derecha, frontal y posterior de la articulación para evitar colisiones.
                    @elseif($locale == 'fr') Visualisez les zones à risque à droite, à l'avant et à l'arrière de l'ensemble routier.
                    @elseif($locale == 'en') Identify high-risk blind spots on the right side, front, and rear of the trailer setup.
                    @else توضيح بصري شامل للأماكن التي تختفي فيها السيارات والمارة عن مرأى السائق في الجانب الأيمن والأمام والخلف.
                    @endif
                </p>
            </div>
        </div>

        <!-- المحور الثاني: الفحص قبل الانطلاق -->
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0 rounded-4 p-4 bg-white">
                <div class="text-center mb-3 p-3 bg-light rounded-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                </div>
                <h3 class="text-primary fw-bold fs-4 mb-2">
                    @if($locale == 'es') 🔍 Inspección Previa al Viaje
                    @elseif($locale == 'fr') 🔍 Inspection Avant le Départ
                    @elseif($locale == 'en') 🔍 Pre-Trip Inspection Checklist
                    @else 🔍 قائمة الفحص اليومي قبل الانطلاق
                    @endif
                </h3>
                <p class="text-secondary small leading-relaxed">
                    @if($locale == 'es') Comprobación de neumáticos, luces, conectores de freno y enganche antes de la ruta.
                    @elseif($locale == 'fr') Vérification des pneus, freins, câbles et sellette d'attelage avant le départ.
                    @elseif($locale == 'en') Essential check of tires, brake lines, electrical connectors, and fifth-wheel lock before travel.
                    @else فحص بصري وعملي للإطارات، الفرامل، الكابلات، والصلات بين الحصان والمقطورة لتفادي الأعطال والحوادث.
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>
