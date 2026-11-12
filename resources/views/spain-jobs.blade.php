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


@php($locale = app()->getLocale())
<div class="card">
<h2>🟢 {{ $locale === 'es' ? 'Asistencias Carter — conductor C+E de grúa de asistencia' : ($locale === 'fr' ? 'Asistencias Carter — conducteur C+E de dépannage routier' : ($locale === 'en' ? 'Asistencias Carter — C+E roadside-assistance driver' : 'Asistencias Carter — سائق C+E لشاحنة المساعدة على الطريق')) }}</h2>
<p><span class="badge">{{ $locale === 'es' ? 'Oferta en la página oficial · revisada 11/11/2026' : ($locale === 'fr' ? 'Offre sur le portail officiel · vérifiée le 11/11/2026' : ($locale === 'en' ? 'Official careers listing · checked 11 Nov 2026' : 'إعلان في بوابة الشركة الرسمية · تمت مراجعته 11 نوفمبر 2026')) }}</span></p>
<p>📍 {{ $locale === 'es' ? 'Base Chafiras, sur de Tenerife' : ($locale === 'fr' ? 'Base Chafiras, sud de Tenerife' : ($locale === 'en' ? 'Chafiras base, southern Tenerife' : 'قاعدة Chafiras، جنوب جزيرة تينيريفي')) }}</p>
<p>🚛 {{ $locale === 'es' ? 'Rescate y remolque de vehículos averiados o accidentados; conducción de camión rígido y tráiler.' : ($locale === 'fr' ? 'Dépannage et remorquage de véhicules en panne ou accidentés ; conduite de camion rigide et de semi-remorque.' : ($locale === 'en' ? 'Roadside recovery and towing of broken-down or accident-damaged vehicles; rigid truck and trailer driving.' : 'إنقاذ وجر المركبات المعطلة أو المتضررة في الحوادث؛ قيادة شاحنة صلبة ومقطورة.')) }}</p>
<p>🎓 {{ $locale === 'es' ? 'Requisitos: permiso C+E y CAP. Se valora experiencia con grúas de asistencia y conocimientos de mecánica básica. La empresa indica que ofrece formación para manejar la grúa.' : ($locale === 'fr' ? 'Exigences : permis C+E et CAP. L’expérience des dépanneuses et des notions de mécanique de base sont appréciées. L’entreprise indique qu’elle assure la formation à l’utilisation de la dépanneuse.' : ($locale === 'en' ? 'Requirements: C+E licence and CAP. Roadside-recovery crane experience and basic mechanical knowledge are valued. The employer says it provides training on the recovery crane.' : 'المتطلبات: رخصة C+E وشهادة CAP. تُفضّل خبرة شاحنات المساعدة على الطريق ومعرفة أساسية بالميكانيك. وتذكر الشركة أنها توفر تدريباً على تشغيل شاحنة الإنقاذ.')) }}</p>
<p>📄 {{ $locale === 'es' ? 'Contrato indefinido, turnos rotativos y formación continua. Salario: se confirma en la entrevista.' : ($locale === 'fr' ? 'Contrat à durée indéterminée, horaires en rotation et formation continue. Salaire : à confirmer lors de l’entretien.' : ($locale === 'en' ? 'Permanent contract, rotating shifts and ongoing training. Salary: confirmed at interview.' : 'عقد غير محدد المدة، ونظام مناوبات متناوبة، وتكوين مستمر. الراتب يُحدد أثناء المقابلة.')) }}</p>
<p>⚠️ {{ $locale === 'es' ? 'El anuncio no confirma contratación desde Marruecos ni apoyo para permisos de trabajo.' : ($locale === 'fr' ? 'L’annonce ne confirme ni le recrutement depuis le Maroc ni l’aide à l’obtention d’un permis de travail.' : ($locale === 'en' ? 'The listing does not confirm recruitment from Morocco or support with work permits.' : 'الإعلان لا يؤكد قبول التوظيف من المغرب أو المساعدة في تصريح العمل.')) }}</p>
<a class="button" href="https://empleo.asistenciascarter.com/jobs/8683043-conductor-con-carnet-c-e-chuto-trailer-sur-tenerife" target="_blank" rel="noopener">{{ $locale === 'es' ? '🔗 Oferta y solicitud oficiales' : ($locale === 'fr' ? '🔗 Offre et candidature officielles' : ($locale === 'en' ? '🔗 Official vacancy and application' : '🔗 الإعلان والتقديم الرسمي')) }}</a>
</div>

<div class="card">
<h2>🟢 {{ $locale === 'es' ? 'Trans Musos S.L. — conductor internacional C+E' : ($locale === 'fr' ? 'Trans Musos S.L. — conducteur international C+E' : ($locale === 'en' ? 'Trans Musos S.L. — international C+E driver' : 'Trans Musos S.L. — سائق دولي C+E')) }}</h2>
<p><span class="badge">{{ $locale === 'es' ? 'Vacante publicada en la web oficial · revisada 11/11/2026' : ($locale === 'fr' ? 'Poste publié sur le site officiel · vérifié le 11/11/2026' : ($locale === 'en' ? 'Official company vacancy · checked 11 Nov 2026' : 'وظيفة منشورة على الموقع الرسمي للشركة · تمت مراجعتها 11 نوفمبر 2026')) }}</span></p>
<p>📍 {{ $locale === 'es' ? 'Los Cánovas, Fuente Álamo, Murcia' : ($locale === 'fr' ? 'Los Cánovas, Fuente Álamo, Murcie' : ($locale === 'en' ? 'Los Cánovas, Fuente Álamo, Murcia' : 'Los Cánovas، Fuente Álamo، مورسيا')) }}</p>
<p>🌍 {{ $locale === 'es' ? 'Rutas internacionales por Francia, Alemania, Países Bajos y Dinamarca.' : ($locale === 'fr' ? 'Liaisons internationales vers la France, l’Allemagne, les Pays-Bas et le Danemark.' : ($locale === 'en' ? 'International routes through France, Germany, the Netherlands and Denmark.' : 'رحلات دولية عبر فرنسا وألمانيا وهولندا والدنمارك.')) }}</p>
<p>🎓 {{ $locale === 'es' ? 'Requisitos: C+E, CAP/CPC vigente y tarjeta digital de tacógrafo.' : ($locale === 'fr' ? 'Exigences : permis C+E, CAP/CPC en cours de validité et carte numérique de tachygraphe.' : ($locale === 'en' ? 'Requirements: C+E licence, valid CAP/CPC and digital tachograph driver card.' : 'المتطلبات: رخصة C+E، وشهادة CAP/CPC سارية، وبطاقة سائق رقمية للتاكوغراف.')) }}</p>
<p>📄 {{ $locale === 'es' ? 'Contrato indefinido y jornada completa; flota con semirremolques frigoríficos. El salario no aparece indicado.' : ($locale === 'fr' ? 'Contrat à durée indéterminée et temps plein ; flotte avec semi-remorques frigorifiques. Le salaire n’est pas indiqué.' : ($locale === 'en' ? 'Permanent, full-time contract; fleet includes refrigerated trailers. No salary is stated.' : 'عقد دائم ودوام كامل؛ أسطول بمقطورات مبردة. الراتب غير مذكور.')) }}</p>
<p>⚠️ {{ $locale === 'es' ? 'La página no confirma contratación desde Marruecos ni apoyo para permisos de trabajo.' : ($locale === 'fr' ? 'La page ne confirme ni le recrutement depuis le Maroc ni l’aide pour les permis de travail.' : ($locale === 'en' ? 'The page does not confirm recruitment from Morocco or work-permit support.' : 'الصفحة لا تؤكد قبول التوظيف من المغرب أو المساعدة في تصاريح العمل.')) }}</p>
<p>📞 +34 678 986 850 · ✉️ transmusos@gmail.com</p>
<a class="button" href="https://transmusos.es/en/careers" target="_blank" rel="noopener">{{ $locale === 'es' ? '🔗 Página oficial y candidatura' : ($locale === 'fr' ? '🔗 Site officiel et candidature' : ($locale === 'en' ? '🔗 Official careers page' : '🔗 صفحة التوظيف الرسمية')) }}</a>
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
