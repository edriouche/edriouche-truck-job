@php $locale = app()->getLocale(); @endphp
<div class="container py-4" dir="{{ $locale == 'ar' ? 'rtl' : 'ltr' }}" style="font-family: system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;">

    <!-- هيدر الصفحة -->
    <div class="text-center mb-4 p-4 rounded-4 bg-primary text-white shadow-sm">
        <h1 class="fw-bold mb-3 fs-2" style="line-height: 1.4;">
            🎓 أكاديمية السائق المهني وتطوير المهارات
        </h1>
        <p class="mb-0 fs-5 opacity-90" style="line-height: 1.6;">
            دليل عملي، بصري، ومبسط لتعزيز السلامة، الاقتصاد في الوقود، والتحكم في الشاحنة والمقطورة.
        </p>
    </div>

    <!-- الرسم البصري المباشر (Inline SVG) -->
    <div class="card shadow border-0 rounded-4 p-3 mb-4 bg-white text-center">
        <h3 class="text-dark fw-bold fs-4 mb-3">⚠️ رسم توضيحي: النقاط العمياء وقائمة الفحص اليومي</h3>
        
        <div class="table-responsive">
            <svg viewBox="0 0 800 400" width="100%" height="auto" xmlns="http://www.w3.org/2000/svg" style="max-width: 750px; margin: 0 auto; display: block;">
                <rect x="10" y="10" width="780" height="380" rx="15" fill="#f8f9fa" stroke="#dee2e6" stroke-width="2"/>
                
                <!-- الشاحنة -->
                <rect x="340" y="150" width="120" height="90" rx="8" fill="#0d6efd"/>
                <rect x="420" y="160" width="35" height="70" rx="4" fill="#6c757d"/>
                <rect x="140" y="140" width="190" height="110" rx="6" fill="#343a40"/>
                
                <!-- المناطق العمياء -->
                <polygon points="460,150 560,110 560,290 460,240" fill="#dc3545" opacity="0.35"/>
                <text x="480" y="205" fill="#dc3545" font-size="16" font-weight="bold">منطقة عمياء أمامية</text>
                
                <polygon points="140,140 40,100 40,300 140,250" fill="#dc3545" opacity="0.35"/>
                <text x="50" y="205" fill="#dc3545" font-size="16" font-weight="bold">منطقة عمياء خلفية</text>
                
                <polygon points="340,140 440,50 200,50 140,140" fill="#dc3545" opacity="0.35"/>
                <text x="250" y="100" fill="#dc3545" font-size="15" font-weight="bold">منطقة عمياء جانبية</text>

                <polygon points="340,240 440,330 200,330 140,240" fill="#dc3545" opacity="0.35"/>
                <text x="250" y="300" fill="#dc3545" font-size="15" font-weight="bold">منطقة عمياء جانبية</text>

                <polygon points="430,160 500,70 440,50" fill="#198754" opacity="0.4"/>
                <polygon points="430,230 500,320 440,330" fill="#198754" opacity="0.4"/>
            </svg>
        </div>
        <p class="text-muted fs-6 mt-3 mb-0">💡 المناطق باللون الأحمر هي نقاط عمياء يصعب على السائق رؤيتها بالمرايا مباشرة.</p>
    </div>

    <!-- البطاقات التعليمية -->
    <div class="row g-4">
        <div class="col-12">
            <div class="card shadow-sm border-0 rounded-4 p-4 bg-white">
                <h2 class="text-primary fw-bold fs-3 mb-3">🛡️ 1. السياقة الدفاعية (Conducción Defensiva)</h2>
                <p class="text-dark fs-5 fw-medium mb-3" style="line-height: 1.7;">
                    السياقة الدفاعية تعني توقع المخاطر وعدم افتراض أن مستعملي الطريق الآخرين سيتصرفون دائمًا بالشكل الصحيح.
                </p>
                <ul class="text-secondary fs-5 lh-lg ps-3 mb-0">
                    <li class="mb-2"><strong class="text-dark">مسافة الأمان:</strong> الحفاظ على مسافة أمان مناسبة كافية للتوقف المفاجئ.</li>
                    <li class="mb-2"><strong class="text-dark">السرعة:</strong> تكييف السرعة مع الحمولة، حالة الطريق، المرور، والطقس.</li>
                    <li class="mb-2"><strong class="text-dark">المراقبة:</strong> مراقبة المرايا والنقاط العمياء باستمرار قبل أي انعطاف أو تغيير للمسار.</li>
                    <li><strong class="text-dark">الانتباه:</strong> عدم القيادة مع التعب، النعاس، أو التشتت مع توقع أخطاء الآخرين.</li>
                </ul>
            </div>
        </div>

        <div class="col-12">
            <div class="card shadow-sm border-0 rounded-4 p-4 bg-white">
                <h2 class="text-primary fw-bold fs-3 mb-3">⛽ 2. السياقة الاقتصادية (Conducción Eficiente)</h2>
                <p class="text-dark fs-5 fw-medium mb-3" style="line-height: 1.7;">
                    تهدف إلى تقليل استهلاك الوقود وتآكل الشاحنة والمكونات الميكانيكية دون التضحية بالسلامة.
                </p>
                <ul class="text-secondary fs-5 lh-lg ps-3 mb-0">
                    <li class="mb-2"><strong class="text-dark">التسارع:</strong> التسارع تدريجيًا وتجنب الضغط المفاجئ على دواسة الوقود.</li>
                    <li class="mb-2"><strong class="text-dark">أنظمة التباطؤ:</strong> استعمال السرعات وأنظمة التباطؤ (Retardeur) بطريقة صحيحة في المنحدرات.</li>
                    <li><strong class="text-dark">الصيانة الإطارات:</strong> فحص ضغط الإطارات والصيانة الدورية لتقليل الاحتكاك واستهلاك الوقود.</li>
                </ul>
            </div>
        </div>

        <div class="col-12">
            <div class="card shadow-sm border-0 rounded-4 p-4 bg-light">
                <h2 class="text-primary fw-bold fs-3 mb-3">🏫 مراكز وتكوينات السائقين المهنيين بالمغرب</h2>
                <p class="text-dark fs-5 mb-2">تكوينات وإدماج السائقين المبتدئين والمهنيين (OFPPT, JEB Training Center, ALSA, Toogo + EFE-Maroc).</p>
                <p class="text-danger fw-bold fs-6 mb-0">⚠️ تحقق دائماً من الشروط والمقاعد المتاحة مباشرة مع المؤسسات قبل التنقل.</p>
            </div>
        </div>
    </div>
</div>
