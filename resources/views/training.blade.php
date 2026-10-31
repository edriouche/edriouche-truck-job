@php $locale = app()->getLocale(); @endphp
<div class="container my-5" dir="{{ $locale == 'ar' ? 'rtl' : 'ltr' }}">

    <!-- هيدر الصفحة -->
    <div class="text-center mb-5 p-4 rounded-4 bg-light shadow-sm">
        <h1 class="fw-bold text-primary mb-3">
            @if($locale == 'es') 🎓 Academia del Conductor Profesional y Desarrollo de Habilidades
            @elseif($locale == 'fr') 🎓 Académie du Chauffeur Professionnel et Développement des Compétences
            @elseif($locale == 'en') 🎓 Professional Driver Academy & Skill Development
            @else 🎓 أكاديمية السائق المهني وتطوير المهارات
            @endif
        </h1>
        <p class="text-muted leading-relaxed fs-5">
            @if($locale == 'es') Guías visuales y formación práctica para conductores profesionales en rutas nacionales e internacionales.
            @elseif($locale == 'fr') Guides visuels et formation pratique pour conducteurs professionnels sur lignes nationales et internationales.
            @elseif($locale == 'en') Visual guides and practical training for professional drivers on national and international routes.
            @else هذه الصفحة تقدم معلومات عملية للسائقين المبتدئين والمهنيين بهدف تحسين السلامة، التحكم في الشاحنة، الاقتصاد في الوقود والمسؤولية المهنية.
            @endif
        </p>
    </div>

    <!-- بطاقات الإنفوغرافيك البصرية -->
    <div class="row g-4 mb-5">
        <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0 rounded-4 p-4 bg-white text-center">
                <img src="{{ asset('images/blind-spots-truck.svg') }}" alt="Truck Blind Spots" class="img-fluid rounded mb-3" style="max-height: 220px; object-fit: contain;">
                <h3 class="text-primary fw-bold fs-4 mb-2">
                    @if($locale == 'es') ⚠️ Puntos Ciegos del Camión
                    @elseif($locale == 'fr') ⚠️ Angles Morts du Poids Lourds
                    @elseif($locale == 'en') ⚠️ Truck Blind Spots Guide
                    @else ⚠️ دليلك الشامل للنقاط العمياء
                    @endif
                </h3>
                <p class="text-secondary small">
                    @if($locale == 'es') Zonas de riesgo a la derecha, frontal y posterior del camión y remolque.
                    @elseif($locale == 'fr') Zones à risque à droite, à l'avant et à l'arrière du poids lourd.
                    @elseif($locale == 'en') Risk areas on the right, front, and rear of the truck.
                    @else توضيح بصري شامل للأماكن التي تختفي فيها السيارات والمارة عن مرأى السائق.
                    @endif
                </p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0 rounded-4 p-4 bg-white text-center">
                <div class="p-3 bg-light rounded-3 d-inline-block mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                <p class="text-secondary small">
                    @if($locale == 'es') Control de neumáticos, frenos, luces y enganche (quinta rueda).
                    @elseif($locale == 'fr') Contrôle des pneus, freins, feux et sellette d'attelage.
                    @elseif($locale == 'en') Checking tires, brakes, lights, and fifth-wheel coupling.
                    @else فحص بصري وعملي للإطارات، الفرامل، الكابلات، والصلات بين الحصان والمقطورة.
                    @endif
                </p>
            </div>
        </div>
    </div>

    <!-- أقسام التكوين الكاملة (المحاور الـ 10) -->
    <div class="bg-white p-4 rounded-4 shadow-sm">
        
        <!-- 1. السياقة الدفاعية -->
        <div class="mb-4">
            <h3 class="text-primary fw-bold">🛡️ 1. السياقة الدفاعية (Conducción Defensiva)</h3>
            <p class="text-muted">السياقة الدفاعية تعني توقع المخاطر وعدم افتراض أن مستعملي الطريق الآخرين سيتصرفون دائمًا بالشكل الصحيح.</p>
            <ul>
                <li>الحفاظ على مسافة أمان مناسبة.</li>
                <li>تكييف السرعة مع الحمولة والطريق والمرور والطقس.</li>
                <li>مراقبة المرايا والنقاط العمياء باستمرار.</li>
                <li>توقع الفرملة وتغيير المسار وأخطاء الآخرين.</li>
                <li>عدم القيادة مع التعب أو النعاس أو التشتت.</li>
            </ul>
        </div>

        <hr class="my-4">

        <!-- 2. السياقة الاقتصادية -->
        <div class="mb-4">
            <h3 class="text-primary fw-bold">⛽ 2. السياقة الاقتصادية (Conducción Eficiente)</h3>
            <p class="text-muted">السياقة الاقتصادية تهدف إلى تقليل استهلاك الوقود وتآكل الشاحنة دون التضحية بالسلامة.</p>
            <ul>
                <li>التسارع تدريجيًا وتجنب التسارع غير الضروري.</li>
                <li>الحفاظ على سرعة مستقرة عندما تسمح الظروف.</li>
                <li>استعمال السرعات وأنظمة التباطؤ (Retardeur) بطريقة صحيحة.</li>
                <li>فحص ضغط الإطارات والصيانة الدورية.</li>
            </ul>
        </div>

        <hr class="my-4">

        <!-- 3. الرجوع إلى الخلف -->
        <div class="mb-4">
            <h3 class="text-primary fw-bold">↩️ 3. الرجوع إلى الخلف بالشاحنة والمقطورة</h3>
            <p class="text-muted">الرجوع إلى الخلف يحتاج إلى الصبر والسرعة البطيئة والتحكم المستمر.</p>
            <ul>
                <li>فحص المنطقة قبل بداية المناورة.</li>
                <li>إجراء تصحيحات صغيرة وتدريجية بالمقود.</li>
                <li>الاستعانة بمراقب والتوقف فورًا عند فقدان الرؤية.</li>
            </ul>
        </div>

        <hr class="my-4">

        <!-- 4. الفرملة والتحكم -->
        <div class="mb-4">
            <h3 class="text-primary fw-bold">🛑 4. الفرملة والتحكم في الشاحنة</h3>
            <p class="text-muted">وزن الشاحنة والحمولة يؤثران مباشرة على مسافة التوقف وسلوك المركبة.</p>
            <ul>
                <li>استعمال فرامل المحرك أو الريتاردر في المنحدرات الطويلة.</li>
                <li>التحكم في السرعة قبل المنعطفات.</li>
            </ul>
        </div>

        <hr class="my-4">

        <!-- 5. الحمولة وتوزيع الوزن -->
        <div class="mb-4">
            <h3 class="text-primary fw-bold">⚖️ 5. الحمولة وتوزيع الوزن</h3>
            <ul>
                <li>احترام حدود الوزن القانونية وتوزيع الحمولة بشكل متوازن.</li>
                <li>تثبيت البضائع جيداً وإعادة فحص التثبيت بعد التوقف.</li>
            </ul>
        </div>

        <hr class="my-4">

        <!-- 6. مراكز التكوين بالمغرب -->
        <div class="mb-4">
            <h3 class="text-primary fw-bold">🏫 مراكز وتكوينات السائقين المهنيين</h3>
            <p class="text-muted">تكوينات وإدماج السائقين المبتدئين في المغرب (OFPPT, JEB Training Center, ALSA, Toogo + EFE-Maroc).</p>
        </div>

    </div>

</div>
