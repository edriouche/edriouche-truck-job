@php $locale = app()->getLocale(); @endphp
<div class="container py-4" dir="{{ $locale == 'ar' ? 'rtl' : 'ltr' }}">

    <!-- هيدر الصفحة بخط واضح وكبير للهاتف -->
    <div class="text-center mb-4 p-4 rounded-4 bg-primary text-white shadow">
        <h1 class="fw-bold mb-3 fs-3">
            @if($locale == 'es') 🎓 Academia del Conductor Profesional
            @elseif($locale == 'fr') 🎓 Académie du Chauffeur Professionnel
            @elseif($locale == 'en') 🎓 Professional Driver Academy
            @else 🎓 أكاديمية السائق المهني وتطوير المهارات
            @endif
        </h1>
        <p class="mb-0 fs-6 opacity-90">
            @if($locale == 'es') Guía práctica y seguridad vial para conductores profesionales.
            @elseif($locale == 'fr') Guide pratique et sécurité routière pour chauffeurs professionnels.
            @elseif($locale == 'en') Practical guide and road safety for professional drivers.
            @else دليل عملي ومبسط لتعزيز السلامة، الاقتصاد في الوقود، والتحكم في الشاحنة والمقطورة.
            @endif
        </p>
    </div>

    <!-- الأقسام التعليمية في بطاقات واضحة ومتباعدة للقراءة المريحة -->
    <div class="row g-4">
        
        <!-- 1. السياقة الدفاعية -->
        <div class="col-12">
            <div class="card shadow-sm border-0 rounded-4 p-3 p-md-4 bg-white">
                <h3 class="text-primary fw-bold fs-4 mb-3">🛡️ 1. السياقة الدفاعية (Conducción Defensiva)</h3>
                <p class="text-dark fs-6">توقع المخاطر وعدم افتراض أن مستعملي الطريق الآخرين سيتصرفون بالشكل الصحيح.</p>
                <ul class="text-secondary fs-6 ps-3">
                    <li class="mb-2">الحفاظ على مسافة أمان كافية مع المركبة الأمامية.</li>
                    <li class="mb-2">تكييف السرعة حسب الحمولة، الطقس، وحالة الطريق.</li>
                    <li class="mb-2">مراقبة المرايا والنقاط العمياء باستمرار قبل أي مناورة.</li>
                    <li>تجنب القيادة أثناء التعب أو التشتت.</li>
                </ul>
            </div>
        </div>

        <!-- 2. السياقة الاقتصادية -->
        <div class="col-12">
            <div class="card shadow-sm border-0 rounded-4 p-3 p-md-4 bg-white">
                <h3 class="text-primary fw-bold fs-4 mb-3">⛽ 2. السياقة الاقتصادية (Conducción Eficiente)</h3>
                <p class="text-dark fs-6">تقليل استهلاك الوقود وتآكل الشاحنة دون التأثير على السلامة.</p>
                <ul class="text-secondary fs-6 ps-3">
                    <li class="mb-2">التسارع بشكل تدريجي وتجنب الضغط المفاجئ على الوقود.</li>
                    <li class="mb-2">الحفاظ على سرعة مستقرة واستخدام نظام التباطؤ (Retardeur).</li>
                    <li>فحص ضغط الإطارات بانتظام لتقليل استهلاك الوقود.</li>
                </ul>
            </div>
        </div>

        <!-- 3. النقاط العمياء -->
        <div class="col-12">
            <div class="card shadow-sm border-0 rounded-4 p-3 p-md-4 bg-white">
                <h3 class="text-primary fw-bold fs-4 mb-3">⚠️ 3. دليلك الشامل للنقاط العمياء</h3>
                <p class="text-dark fs-6">هي الأماكن المحيطة بالشاحنة والمقطورة التي لا يراها السائق في المرايا مباشرة.</p>
                <ul class="text-secondary fs-6 ps-3">
                    <li class="mb-2">الانتباه الخاص للجانب الأيمن عند الانعطاف أو تغيير المسار.</li>
                    <li class="mb-2">التحقق دائماً من خلو محيط الشاحنة من السيارات الصغيرة والدراجات والمارة.</li>
                </ul>
            </div>
        </div>

        <!-- 4. الفحص قبل الانطلاق -->
        <div class="col-12">
            <div class="card shadow-sm border-0 rounded-4 p-3 p-md-4 bg-white">
                <h3 class="text-primary fw-bold fs-4 mb-3">🔍 4. قائمة الفحص اليومي (Pre-trip)</h3>
                <p class="text-dark fs-6">التأكد من جاهزية الشاحنة والمقطورة قبل الشروع في الرحلة.</p>
                <ul class="text-secondary fs-6 ps-3">
                    <li class="mb-2">فحص الإطارات والتأكد من عدم وجود أضرار ظاهرة أو نقص في الهواء.</li>
                    <li class="mb-2">فحص الفرامل، الأضواء، ووصلات الجر بين الحصان والمقطورة.</li>
                    <li>التأكد من إحكام إغلاق الأبواب وتثبيت الحمولة بشكل صحيح.</li>
                </ul>
            </div>
        </div>

        <!-- 5. مراكز التكوين المهني -->
        <div class="col-12">
            <div class="card shadow-sm border-0 rounded-4 p-3 p-md-4 bg-light">
                <h3 class="text-primary fw-bold fs-4 mb-3">🏫 مراكز وتكوينات السائقين المهنيين بالمغرب</h3>
                <p class="text-dark fs-6">معلومات عن مؤسسات التكوين والإدماج (OFPPT, JEB Training Center, ALSA, Toogo + EFE-Maroc).</p>
                <p class="text-muted small mb-0">⚠️ تحقق دائماً من الشروط والمقاعد المتاحة مباشرة مع المؤسسات قبل التنقل.</p>
            </div>
        </div>

    </div>
</div>
