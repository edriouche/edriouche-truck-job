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

<div class="card">
<h2>🟡 AMAEXCO — Conductor de camión articulado volquete</h2>
<p><span class="badge">إعلان منشور 13 نوفمبر 2026 — قيد التحقق</span></p>
<p>📍 مدريد · 20 منصباً معلناً عبر بوابة Gala Conductores.</p>
<p>🚛 الرخصة الظاهرة في ملخص الإعلان: C+E.</p>
<p>📄 التفاصيل الكاملة للإعلان تتطلب الدخول إلى حساب السائق في Gala Conductores؛ لم نتمكن من التحقق من CAP أو بطاقة التاكوغراف أو الراتب أو نوع العقد.</p>
<p>⚠️ AMAEXCO جمعية لقطاع الحفر ونقل مواد البناء وليست بالضرورة صاحب العمل المباشر. لا يوجد تأكيد بقبول مرشحين من خارج إسبانيا أو بتوفير تصريح عمل.</p>
<a class="button" href="https://galaconductores.com/ofertas/" target="_blank" rel="noopener">🔗 قائمة عروض Gala Conductores</a>
<a class="button" href="https://amaexco.com/" target="_blank" rel="noopener">🌐 الموقع الرسمي لـ AMAEXCO</a>
</div>

<!-- New verified Spain driver vacancies — 20 November 2026 -->
<div class="card">
<h2>🟢 Trans Musos S.L. — International C+E driver</h2>
<p><strong>@if(app()->getLocale()==='en')Current recruitment information @elseif(app()->getLocale()==='fr')Recrutement en cours selon la page officielle @elseif(app()->getLocale()==='es')Información de contratación vigente @else معلومات توظيف حالية حسب الصفحة الرسمية @endif</strong></p>
<p>@if(app()->getLocale()==='en')📍 Fuente Álamo (Murcia) — international refrigerated transport to France, Germany, the Netherlands and Denmark.@elseif(app()->getLocale()==='fr')📍 Fuente Álamo (Murcie) — transport frigorifique international vers la France, l’Allemagne, les Pays-Bas et le Danemark.@elseif(app()->getLocale()==='es')📍 Fuente Álamo (Murcia) — transporte frigorífico internacional hacia Francia, Alemania, Países Bajos y Dinamarca.@else 📍 فوينتي ألامو (مورسيا) — نقل دولي مبرد نحو فرنسا وألمانيا وهولندا والدنمارك. @endif</p>
<p>@if(app()->getLocale()==='en')Requirements: C+E, valid Spanish CAP and digital tachograph card. Permanent full-time contract. Overseas visa sponsorship is not stated.@elseif(app()->getLocale()==='fr')Exigences : C+E, CAP espagnol valide et carte de tachygraphe numérique. CDI à temps plein. Aucun parrainage de visa depuis l’étranger n’est annoncé.@elseif(app()->getLocale()==='es')Requisitos: C+E, CAP en vigor y tarjeta de tacógrafo digital. Contrato indefinido a jornada completa. No se anuncia patrocinio de visado desde el extranjero.@else المتطلبات: C+E وCAP إسباني ساري وبطاقة تاكوغراف رقمية. عقد دائم ودوام كامل. لا يوجد إعلان عن توفير تأشيرة للمرشحين من الخارج. @endif</p>
<p>+34 678 986 850 · transmusos@gmail.com</p>
<a class="button" href="https://transmusos.es/en/careers" target="_blank" rel="noopener">@if(app()->getLocale()==='en')Official application @elseif(app()->getLocale()==='fr')Candidature officielle @elseif(app()->getLocale()==='es')Inscripción oficial @else التقديم الرسمي @endif</a>
</div>
<div class="card">
<h2>🟢 ESP Solutions — International C+E driver</h2>
<p><strong>@if(app()->getLocale()==='en')Listing checked 20 November 2026 @elseif(app()->getLocale()==='fr')Annonce vérifiée le 20 novembre 2026 @elseif(app()->getLocale()==='es')Oferta comprobada el 20 de noviembre de 2026 @else إعلان تمت مراجعته في 20 نوفمبر 2026 @endif</strong></p>
<p>@if(app()->getLocale()==='en')📍 Ceutí / Murcia — international freight transport; permanent full-time role.@elseif(app()->getLocale()==='fr')📍 Ceutí / Murcie — transport international de marchandises ; CDI à temps plein.@elseif(app()->getLocale()==='es')📍 Ceutí / Murcia — transporte internacional de mercancías; contrato indefinido a jornada completa.@else 📍 سيوتي / مورسيا — نقل دولي للبضائع؛ عقد دائم ودوام كامل. @endif</p>
<p>@if(app()->getLocale()==='en')Requirements: C+E, digital tachograph card, CAP and previous international-route experience. No overseas sponsorship is stated.@elseif(app()->getLocale()==='fr')Exigences : C+E, carte de tachygraphe numérique, CAP et expérience préalable en transport international. Aucun parrainage depuis l’étranger n’est indiqué.@elseif(app()->getLocale()==='es')Requisitos: C+E, tarjeta de tacógrafo, CAP y experiencia previa en rutas internacionales. No se indica patrocinio desde el extranjero.@else المتطلبات: C+E وبطاقة تاكوغراف وCAP وخبرة سابقة في النقل الدولي. لا يوجد ما يثبت توفير التأشيرة من الخارج. @endif</p>
<a class="button" href="https://espsolutions.eu/unete-al-equipo/" target="_blank" rel="noopener">@if(app()->getLocale()==='en')Company recruitment page @elseif(app()->getLocale()==='fr')Page de recrutement @elseif(app()->getLocale()==='es')Página de empleo @else صفحة التوظيف الرسمية @endif</a>
<a class="button" href="https://es.linkedin.com/jobs/view/conductor-a-de-cami%C3%B3n-internacional-c%2Be-at-esp-solutions-group-4472794383" target="_blank" rel="noopener">@if(app()->getLocale()==='en')Specific job advert @elseif(app()->getLocale()==='fr')Annonce précise @elseif(app()->getLocale()==='es')Anuncio específico @else الإعلان المحدد @endif</a>
</div>
<div class="card">
<h2>🟢 Servicio Regional de Empleo y Formación (SEF) — C+E driver</h2>
<p><strong>@if(app()->getLocale()==='en')Open until 2 December 2026 @elseif(app()->getLocale()==='fr')Ouvert jusqu’au 2 décembre 2026 @elseif(app()->getLocale()==='es')Abierta hasta el 2 de diciembre de 2026 @else آخر أجل 2 ديسمبر 2026 @endif</strong></p>
<p>@if(app()->getLocale()==='en')📍 Lorquí, Murcia — 2 positions, regional supermarket deliveries. Gross salary €2,100/month in 12 payments. Full-time temporary contract with possible permanent conversion.@elseif(app()->getLocale()==='fr')📍 Lorquí, Murcie — 2 postes, livraisons régionales pour une chaîne de supermarchés. Salaire brut : 2 100 €/mois sur 12 paiements. Temps plein, contrat temporaire avec possibilité de CDI.@elseif(app()->getLocale()==='es')📍 Lorquí, Murcia — 2 puestos para reparto regional a una cadena de supermercados. Salario bruto: 2.100 €/mes en 12 pagas. Jornada completa, contrato temporal con posibilidad de indefinido.@else 📍 لوركي، مورسيا — منصبان لتوزيع السلع على سلسلة متاجر. الأجر الإجمالي 2100 يورو شهرياً على 12 دفعة. دوام كامل وعقد مؤقت مع إمكانية التحول إلى دائم. @endif</p>
<p>@if(app()->getLocale()==='en')Requirements: C+E, valid CAP and digital tachograph card; 12 months’ experience is an advantage. Applicants must be registered with an employment office in Spain. Candidates registered outside Murcia but within Spain may email their CV to sef-molina-seleccion@carm.es. Not an overseas recruitment offer.@elseif(app()->getLocale()==='fr')Exigences : C+E, CAP valide et carte de tachygraphe numérique ; 12 mois d’expérience appréciés. Inscription obligatoire auprès d’un service public de l’emploi en Espagne. Les candidats inscrits hors de Murcie mais en Espagne peuvent envoyer leur CV à sef-molina-seleccion@carm.es. Cette offre ne concerne pas le recrutement depuis l’étranger.@elseif(app()->getLocale()==='es')Requisitos: C+E, CAP vigente y tarjeta de tacógrafo digital; se valoran 12 meses de experiencia. Es obligatorio estar inscrito en una oficina de empleo en España. Quienes estén inscritos fuera de Murcia pero dentro de España pueden enviar el CV a sef-molina-seleccion@carm.es. No es una oferta de contratación desde el extranjero.@else المتطلبات: C+E وCAP ساري وبطاقة تاكوغراف رقمية؛ خبرة 12 شهراً ميزة. يجب التسجيل في مكتب تشغيل داخل إسبانيا. يمكن للمسجلين خارج مورسيا ولكن داخل إسبانيا إرسال السيرة الذاتية إلى sef-molina-seleccion@carm.es. هذا ليس عرض توظيف من خارج إسبانيا. @endif</p>
<a class="button" href="https://sefoficinavirtual.carm.es/sefoficinavirtual/public/oferta/detalle-oferta.xhtml?faces-redirect=true&amp;id=58191" target="_blank" rel="noopener">@if(app()->getLocale()==='en')Official SEF listing @elseif(app()->getLocale()==='fr')Annonce officielle SEF @elseif(app()->getLocale()==='es')Oferta oficial SEF @else الإعلان الرسمي SEF @endif</a>
</div>
<!-- New official SEPE vacancies checked 23 November 2026 -->
<div class="card">
<h2>🟢 SEPE 052026008024 — سائق توزيع شاحنة C1</h2>
<p><strong>@if(app()->getLocale()==='en')Official vacancy · checked 23 November 2026 @elseif(app()->getLocale()==='fr')Offre officielle · vérifiée le 23 novembre 2026 @elseif(app()->getLocale()==='es')Oferta oficial · verificada el 23 de noviembre de 2026 @else إعلان رسمي · آخر تحقق 23 نوفمبر 2026 @endif</strong></p>
<p>📍 لاس تشافيراس، سان ميغيل دي أبونا، تينيريفي. النشر 18 نوفمبر؛ آخر أجل 28 نوفمبر 2026.</p>
<p>الرخصة C1 وCAP ساري إلزاميان. عقد دائم ودوام كامل من الاثنين إلى الجمعة، 07:00–15:00. الراتب 1,500 يورو صافياً شهرياً. عدد المناصب وبطاقة التاكوغراف غير مذكورين.</p>
<p><strong>التوظيف من المغرب وتصريح العمل غير مذكورين. وظيفة توزيع محلي وليست نقلاً دولياً.</strong></p>
<a class="button" href="https://www.sistemanacionalempleo.es/OfertaDifusionWEB/detalleOferta.do?id=052026008024&amp;modo=inicio&amp;origen=ultimasOfertas&amp;ret=A" target="_blank" rel="noopener">🔗 الإعلان الرسمي SEPE</a>
</div>
<div class="card">
<h2>🟢 SEPE 052026008009 — سائق شاحنة C</h2>
<p><strong>إعلان رسمي · آخر تحقق 23 نوفمبر 2026</strong></p>
<p>📍 لوس رياليخوس، تينيريفي. النشر 17 نوفمبر؛ آخر أجل 27 نوفمبر 2026.</p>
<p>الرخصة C/C1 وCAP ساري إلزاميان؛ خبرة 12 شهراً مطلوبة. عقد دائم ودوام كامل من الاثنين إلى الجمعة 08:00–13:00 و15:00–18:00. الراتب وعدد المناصب وبطاقة التاكوغراف غير مذكورة.</p>
<p><strong>التوظيف من المغرب وتصريح العمل غير مذكورين. وظيفة توزيع محلي.</strong></p>
<a class="button" href="https://www.sistemanacionalempleo.es/OfertaDifusionWEB/detalleOferta.do?CA=05&amp;id=052026008009&amp;modo=inicio&amp;origen=ultimasOfertas&amp;ret=A" target="_blank" rel="noopener">🔗 الإعلان الرسمي SEPE</a>
</div>
<div class="warning"><p><strong>تنبيه: هذان المنصبان محليان في تينيريفي؛ لا يذكر الإعلان قبول المقيمين في المغرب أو توفير تصريح عمل. تحقق من المصدر الأصلي قبل التقديم.</strong></p></div>

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
