<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === "ar" ? "rtl" : "ltr" }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>{{ __("messages.spain_jobs_title") }} | Edriouche Truck Job</title>
<style>
body{font-family:Arial,sans-serif;background:#f5f7fa;margin:0;color:#222;line-height:1.8}
.container{max-width:900px;margin:auto;padding:15px}
.hero,.card,.warning{background:#fff;border-radius:14px;padding:20px;margin:15px 0;box-shadow:0 3px 12px rgba(0,0,0,.08)}
h1,h2{color:#0756a8}
h1{text-align:center}
.hero-es{direction:ltr;text-align:left;border-right:5px solid #0756a8}
.card{border-right:6px solid #18a957}
.open{color:#138a43;font-weight:bold}
.openbox{color:#0756a8;font-weight:bold}
.badge{display:inline-block;padding:3px 10px;border-radius:20px;background:#e9f7ee}
a.button{display:inline-block;background:#0756a8;color:#fff;text-decoration:none;padding:8px 16px;border-radius:8px;margin-top:8px}
.warning{border-right:6px solid #e0a000;background:#fffaf0}
footer{text-align:center;padding:25px;color:#666}
</style>
</head>

<body>
@include("partials.language-switcher")
<div class="container">

<div class="hero">
<h1>🇪🇸 {{ __("messages.spain_jobs_title") }}</h1>
<p style="text-align:center"><strong>{{ __("messages.jobs_intro") }}</strong></p>
</div>

<div class="hero-es">
<h2>{{ __("messages.driver_message") }}</h2>
<p>{{ __("messages.driver_story_title") }}</p>
<p>{{ __("messages.driver_family_sacrifice") }}</p>
<p>{{ __("messages.driver_sacrifice") }}</p>
<p><strong>{{ __("messages.driver_values") }}</strong></p>
<p>{!! __("messages.driver_mission") !!}</p>
<p>{!! __("messages.driver_morocco_europe") !!}</p>
<p><strong>{{ __("messages.driver_respect") }}</strong></p>
</div>

<div class="hero">
<h2>🚛 {{ __("messages.jobs_title") }}</h2>
<p>{{ __("messages.jobs_description") }}</p>
<p>{{ __("messages.recruitment_info") }}</p>
</div>

<div class="card">
<h2>🟢 JCARRION</h2>
<p><span class="badge">{{ __("messages.recruitment_info") }}</span></p>
<p>📍 إسبانيا – نقل وطني ودولي</p>
<p>🚛 المطلوب: C+E</p>
<p>🎓 المتطلبات: CAP + بطاقة التاكغراف الرقمي</p>
<p>⭐ توجد حاليًا عروض للسائقين، ومنها عروض لا تشترط الخبرة حسب الإعلان.</p>
<a class="button" href="https://ofertas.jcarrion.es/jobs/conductor-a-c-e-ruta-internacional-fcabfd30-bbdb-4edd-9740-d20be90443fd?displayed_form=true" target="_blank" rel="noopener">🔗 إعلان سائق C+E</a>
<a class="button" href="https://jobs.jcarrion.es/reclutamiento/" target="_blank" rel="noopener">{{ __("messages.official_recruitment") }}</a>
</div>

<div class="card">
<h2>🟢 Doseguer</h2>
<p><span class="badge">توظيف نشط حاليًا</span></p>
<p>📍 Almería · Granada · Murcia</p>
<p>🚛 نقل مبرد وبضائع عامة – وطني ودولي</p>
<p>🎓 C+E + CAP + بطاقة تاكوغراف رقمي</p>
<p>⭐ تقبل الشركة الترشيحات، وتذكر إمكانية تكوين السائق في النقل المبرد عند توفر المتطلبات الأساسية.</p>
<a class="button" href="https://www.doseguer.com/trabaja-con-nosotros/" target="_blank">🔗 التقديم الرسمي</a>
</div>

@php
$viaAugustaCopy = [
    'ar' => [
        'title' => 'Vía Augusta — سائق شاحنة C+E مع ADR في سرقسطة',
        'source' => 'إعلان عبر TDR Jobs؛ ليس إعلاناً من صفحة التوظيف الرسمية للشركة',
        'location' => 'سرقسطة، إسبانيا',
        'posted' => 'تاريخ النشر: 6 نوفمبر 2026',
        'deadline' => 'آخر أجل المعلن: 8 يناير 2027',
        'requirements' => 'رخصة C+E وCAP وADR الأساسي + صهاريج (Cisternas) إلزامية.',
        'experience' => 'خبرة من سنة إلى 3 سنوات في الشاحنة نصف المقطورة؛ وتُفضّل خبرة سنتين أو أكثر. النقل وطني ودولي.',
        'salary' => '32,000–36,000 يورو إجمالي سنوياً؛ عقد مؤقت مع إمكانية الاستقرار حسب الكفاءة.',
        'status' => 'لم تؤكد الشركة قبول مرشحين من خارج الاتحاد الأوروبي أو دعم تصريح العمل. تحقق مباشرة ولا تدفع لأي وسيط.',
        'apply' => 'تفاصيل الإعلان والتقديم عبر TDR Jobs',
        'company' => 'الموقع الرسمي للشركة للتحقق'
    ],
    'es' => [
        'title' => 'Vía Augusta — Conductor/a C+E con ADR en Zaragoza',
        'source' => 'Oferta publicada en TDR Jobs; no es una publicación en la página oficial de empleo de la empresa.',
        'location' => 'Zaragoza, España',
        'posted' => 'Publicada: 6 de noviembre de 2026',
        'deadline' => 'Plazo indicado: 8 de enero de 2027',
        'requirements' => 'Permiso C+E, CAP y ADR básico + cisternas obligatorios.',
        'experience' => 'Experiencia de 1 a 3 años con tráiler; se valoran 2 años o más. Transporte nacional e internacional.',
        'salary' => '32.000–36.000 € brutos/año; contrato eventual con posibilidad de estabilidad según la valía.',
        'status' => 'La empresa no ha confirmado que acepte candidatos de fuera de la UE ni que tramite permisos de trabajo. Verifica directamente y no pagues a intermediarios.',
        'apply' => 'Ver la oferta y solicitar en TDR Jobs',
        'company' => 'Web oficial de la empresa (verificación)'
    ],
    'fr' => [
        'title' => 'Vía Augusta — Conducteur/trice C+E avec ADR à Saragosse',
        'source' => 'Annonce publiée sur TDR Jobs ; ce n’est pas une offre publiée sur la page officielle de recrutement de l’entreprise.',
        'location' => 'Saragosse, Espagne',
        'posted' => 'Publication : 6 novembre 2026',
        'deadline' => 'Date limite indiquée : 8 janvier 2027',
        'requirements' => 'Permis C+E, CAP et ADR de base + citernes obligatoires.',
        'experience' => 'Expérience de 1 à 3 ans en semi-remorque ; 2 ans ou plus appréciés. Transport national et international.',
        'salary' => '32 000–36 000 € brut/an ; contrat temporaire avec possibilité de stabilité selon le profil.',
        'status' => 'L’entreprise n’a pas confirmé accepter les candidats hors UE ni prendre en charge un permis de travail. Vérifiez directement et ne payez aucun intermédiaire.',
        'apply' => 'Voir l’annonce et postuler sur TDR Jobs',
        'company' => 'Site officiel de l’entreprise (vérification)'
    ],
    'en' => [
        'title' => 'Vía Augusta — C+E truck driver with ADR in Zaragoza',
        'source' => 'Listing published on TDR Jobs; not posted on the company’s official recruitment page.',
        'location' => 'Zaragoza, Spain',
        'posted' => 'Published: 6 November 2026',
        'deadline' => 'Advertised deadline: 8 January 2027',
        'requirements' => 'C+E licence, CAP and basic ADR + tankers are required.',
        'experience' => '1–3 years of articulated-truck experience; 2+ years preferred. National and international transport.',
        'salary' => '€32,000–€36,000 gross/year; temporary contract with possible stable employment depending on suitability.',
        'status' => 'The company has not confirmed accepting non-EU applicants or sponsoring work permits. Verify directly and never pay an intermediary.',
        'apply' => 'View listing and apply through TDR Jobs',
        'company' => 'Official company website (verification)'
    ]
];
$v = $viaAugustaCopy[app()->getLocale()] ?? $viaAugustaCopy['ar'];
@endphp

<div class="card">
<h2>🟢 {{ $v['title'] }}</h2>
<p><span class="badge">{{ $v['source'] }}</span></p>
<p>📍 {{ $v['location'] }}</p>
<p>📅 {{ $v['posted'] }}</p>
<p>⏳ {{ $v['deadline'] }}</p>
<p>🚛 {{ $v['requirements'] }}</p>
<p>⭐ {{ $v['experience'] }}</p>
<p>💶 {{ $v['salary'] }}</p>
<p><strong>⚠️ {{ $v['status'] }}</strong></p>
<a class="button" href="https://www.tdrjobs.com/es/ofertas-empleo/conductor-ce-adr-zaragoza-camion-trailer-cisternas-ruta-nacional-internacional-4635" target="_blank" rel="noopener">{{ $v['apply'] }}</a>
<a class="button" href="https://www.via-augusta.com/" target="_blank" rel="noopener">{{ $v['company'] }}</a>
</div>

<div class="card">
<h2>🟢 STEF</h2>
<p><span class="badge">{{ __("messages.stef_offer_badge") }}</span></p>
<p>{{ __("messages.stef_company_intro") }}</p>
<p>🚚 {{ __("messages.stef_offer_title") }}</p>
<p>📍 {{ __("messages.stef_offer_location") }}</p>
<p>📅 {{ __("messages.stef_offer_date") }}</p>
<p>📄 {{ __("messages.stef_offer_contract") }}</p>
<p>{{ __("messages.stef_offer_notice") }}</p>
<a class="button" href="https://apply.stef.jobs/go/CDI-CDD-%28ES%29/4509901/40/?q=&amp;sortColumn=sort_shifttype&amp;sortDirection=asc" target="_blank" rel="noopener">{{ __("messages.stef_offer_button") }}</a>
<a class="button" href="https://stef.jobs/es/envia-mi-solicitud/" target="_blank" rel="noopener">{{ __("messages.official_recruitment") }}</a>
</div>

<div class="card">
<h2>🟢 CONTANK</h2>
<p><span class="badge">تحقق من الشروط في الإعلان الرسمي</span></p>
<p>🚛 إعلان سائق شاحنة/مقطورة.</p>
<p>🎓 قد يشترط الإعلان C+E وCAP وADR الأساسي والخزانات، مع أقدمية رخصة C+E لثلاث سنوات؛ والخبرة لسنتين على الأقل مفضّلة حسب الإعلان. تحقق من الشروط الحالية.</p>
<a class="button" href="https://contank.com/career/" target="_blank" rel="noopener">🔗 عروض CONTANK الرسمية</a>
</div>

<div class="card">
<h2>🔵 Grupo SGT</h2>
<p><span class="badge">ترشيح مفتوح</span></p>
<p>🚛 النقل الوطني والدولي واللوجستيك</p>
<p>🚚 C+E حسب الوظيفة</p>
<p>🎓 CAP وخبرة حسب الوظيفة</p>
<p>🔗 نموذج الشركة الرسمي للتوظيف والترشيح؛ لا يضمن وجود شاغر محدد.</p>
<a class="button" href="https://www.gruposgt.com/trabaja-con-nosotros" target="_blank" rel="noopener">🔗 التقديم الرسمي لدى Grupo SGT</a>
</div>

<div class="card">
<h2>🔵 Primafrio</h2>
<p><span class="badge">ترشيح مفتوح</span></p>
<p>🚛 النقل المبرد واللوجستيك</p>
<p>🌍 إسبانيا وأوروبا</p>
<p>👨‍✈️ يمكن إرسال طلب ترشيح عبر القناة الرسمية؛ وهذا لا يؤكد وجود وظيفة شاغرة محددة.</p>
<a class="button" href="https://www.primafrio.com/trabaja-con-nosotros//" target="_blank" rel="noopener">🔗 التقديم الرسمي لدى Primafrio</a>
</div>

<div class="card">
<h2>🔵 Logista</h2>
<p><span class="badge">ترشيح مفتوح</span></p>
<p>🚛 النقل واللوجستيك والتوزيع</p>
<p>👨‍✈️ نموذج رسمي مرتبط بالسائقين والتوصيل؛ تحقق من نوع العمل وشروطه قبل التقديم.</p>
<a class="button" href="https://www.logista.com/es/home/pages/contacta-parcel-drivers.html" target="_blank" rel="noopener">🔗 نموذج السائق الرسمي لدى Logista</a>
</div>

<div class="card">
<h2>🟢 Grupo Hiemesa</h2>
<p><span class="badge">راجع عروض الشركة الرسمية</span></p>
<p>🚛 تحقق من المدينة والمتطلبات في كل إعلان سائق.</p>
<a class="button" href="https://www.hiemesa.com/Trabaja" target="_blank" rel="noopener">🔗 عروض Grupo Hiemesa الرسمية</a>
</div>

<div class="card">
<h2>🔵 Disfrimur</h2>
<p><span class="badge">تحقق من العروض الحالية</span></p>
<p>🚛 النقل بالشاحنات والنقل المبرد.</p>
<p>🎓 توجد معلومات رسمية عن برنامج Escuela de Conductores؛ تحقق من شروط التسجيل وتوفره حاليًا.</p>
<a class="button" href="https://www.disfrimur.com/en/86-la-empresa/232-oferta-de-empleo" target="_blank" rel="noopener">🔗 عروض Disfrimur الرسمية</a>
<a class="button" href="https://www.disfrimur.com/es/blog/noticias/367-disfrimur-incorpora-a-los-primeros-profesionales-del-programa-escuela-de-conductores" target="_blank" rel="noopener">🔗 معلومات برنامج تكوين السائقين</a>
</div>

<div class="hero">
<h2>🇪🇸 دليل السائق المغربي في إسبانيا</h2>
<p>كل ما يحتاجه السائق للبحث عن عمل وتكوين ومعلومات موثوقة في مكان واحد.</p>
<p>💼 عروض العمل</p>
<p>🎓 التكوين والتدريب</p>
<p>🇪🇸 مراكز CAP</p>
<p>🇪🇸 دليل العمل في إسبانيا</p>
<p>🪪 وثائق السائق</p>
<p>📑 وثائق أوروبا</p>
<p>🕐 قوانين القيادة والراحة</p>
<p>⏱️ دليل التاكوغراف</p>
<p>📝 إنشاء CV للسائق</p>
</div>

<div class="hero">
<h2>🚛 أنواع النقل</h2>
<p>النقل الدولي • النقل الوطني • النقل المبرد • اللوجستيك • مواد البناء • الحاويات • نقل البضائع • النقل المتخصص</p>
<p>ملاحظة: نضيف كل نوع من النقل عندما تتوفر لدينا معلومات موثوقة ورابط رسمي.</p>
</div>

<div class="hero">
<h2>🏙️ مدن ومناطق النقل في إسبانيا</h2>
<p>مدريد • برشلونة • فالنسيا • سرقسطة • مورسيا • مالقة • إشبيلية • بلباو • ألميريا • هويلفا والمناطق اللوجستية الأخرى.</p>
</div>

<div class="hero">
<h2>💶 رواتب السائقين في إسبانيا</h2>
<p>لا نكرر أسماء الشركات هنا؛ راجع بطاقة كل شركة أعلاه للوصول إلى معلوماتها وروابطها الرسمية.</p>
<p>ننشر الراتب فقط عندما يكون محددًا بوضوح في إعلان رسمي موثوق. إذا لم يُذكر، فلن نخمنه أو نقدمه على أنه مبلغ مضمون.</p>
<p><strong>⚠️ ملاحظة:</strong> الأجر الفعلي يعتمد على الإعلان والعقد والاتفاقية الجماعية المطبقة.</p>
</div>
<div class="warning">
<h2>⚠️ تنبيه مهم للسائق المغربي</h2>
<p><strong>Edriouche Truck Job لا يبيع عقود العمل ولا يطلب من السائق دفع المال مقابل الحصول على وظيفة.</strong></p>
<p>قبل إرسال وثائقك أو دفع أي مبلغ، تحقق من الشركة ومن رابط التقديم الرسمي.</p>
<p>لا تعتمد على وسيط مجهول أو حساب شخصي في مواقع التواصل الاجتماعي.</p>
<p>حالة التوظيف قد تتغير، لذلك يجب فتح الإعلان الرسمي والتحقق منه قبل التقديم.</p>
</div>

<div class="hero">
<h2>🇪🇸 مصادر رسمية للسائق</h2>
<p>نعتمد قدر الإمكان على المصادر الرسمية، وليس على الوسطاء أو الحسابات المجهولة.</p>
<p>🇪🇸 وزارة النقل الإسبانية 🇪🇺 EURES</p>
</div>

<footer>
🇪🇸 العودة إلى دليل إسبانيا · 🎓 مراكز CAP · 🏠 الرئيسية
<br><br>
© 2026 Edriouche Truck Job — من السائق إلى السائق 🚛
</footer>

</div>
</body>
</html>
