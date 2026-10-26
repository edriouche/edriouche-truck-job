@php
$locale = app()->getLocale();
$rtl = $locale === 'ar';
$content = [
'ar' => [
'title' => 'العمل في كندا لسائقي الشاحنات',
'intro' => 'دليل عملي للسائق المغربي: البحث عن عروض رسمية، فهم قانون العمل والهجرة، والتحقق من شروط رخصة القيادة قبل اتخاذ أي قرار.',
'jobs' => '🔎 البحث عن عروض سائقي الشاحنات',
'jobs_text' => 'استخدم المصادر الحكومية، وتحقق من اسم صاحب العمل ومكان العمل والأجر وشروط التقديم. اختر الإعلانات التي تقبل المرشحين الدوليين.',
'foreign' => 'عروض مفتوحة للمرشحين من خارج كندا',
'temporary' => 'عروض برنامج العمال الأجانب المؤقتين',
'law' => '⚖️ قانون العمل والهجرة في كندا',
'permit' => '1. تصريح العمل',
'permit_text' => 'عرض العمل وحده لا يمنحك الحق في العمل. قد تحتاج إلى تصريح عمل خاص بصاحب العمل، وقد يحتاج صاحب العمل إلى LMIA إيجابي قبل تقديم طلبك. توجد استثناءات حسب البرنامج والحالة.',
'lmia' => '2. ما هو LMIA؟',
'lmia_text' => 'هو تقييم لسوق العمل قد يحتاجه صاحب العمل لتوظيف عامل أجنبي. عبارة LMIA requested تعني أن الطلب قُدّم أو طُلب، ولا تعني أن الموافقة صدرت أو أن تصريح العمل مضمون.',
'rights' => '3. حقوق العامل الأجنبي',
'rights_text' => 'تحمي القوانين الكندية العمال الأجانب. يجب دفع الأجر المتفق عليه واحترام قواعد السلامة. لا يجوز لصاحب العمل أخذ جواز سفرك أو تحميلك رسوم التوظيف المحظورة. احتفظ بنسخة من العقد والمراسلات.',
'licence' => '4. رخصة قيادة الشاحنات الثقيلة',
'licence_text' => 'الرخصة المغربية لا تمنح تلقائيًا حق قيادة شاحنة تجارية في كندا. شروط الفئة المهنية والتدريب والاختبارات والاعتراف بالرخصة تختلف حسب المقاطعة أو الإقليم. تحقق من الجهة الحكومية للمقاطعة التي ستعمل فيها.',
'fraud' => '🛡️ كيف تتجنب الاحتيال؟',
'fraud_text' => 'لا تدفع لوسيط مقابل وعد بعقد أو تأشيرة أو LMIA. تحقق من الشركة عبر قنواتها الرسمية، واقرأ الإعلان كاملًا، ولا ترسل وثائق حساسة قبل التأكد من الجهة المستقبلة.',
'official' => '📚 المصادر الحكومية الرسمية',
'disclaimer' => 'تنبيه: هذه الصفحة للتوعية والمعلومات العامة وليست استشارة قانونية أو ضمانًا للحصول على وظيفة أو تصريح عمل. تحقق من أحدث الشروط لدى الجهات الكندية الرسمية قبل دفع أي رسوم أو تقديم أي طلب.',
'updated' => 'آخر مراجعة للروابط',
'home' => 'العودة إلى الصفحة الرئيسية',
],
'es' => [
'title' => 'Trabajar en Canadá como camionero',
'intro' => 'Guía práctica para conductores marroquíes: ofertas oficiales, legislación laboral e inmigración y requisitos de conducción.',
'jobs' => '🔎 Buscar ofertas de camionero',
'jobs_text' => 'Utiliza fuentes oficiales y comprueba la empresa, el lugar de trabajo, el salario y quién puede solicitar el puesto.',
'foreign' => 'Ofertas para candidatos desde fuera de Canadá',
'temporary' => 'Ofertas para trabajadores extranjeros temporales',
'law' => '⚖️ Legislación laboral y migratoria',
'permit' => '1. Permiso de trabajo',
'permit_text' => 'Una oferta de empleo por sí sola no autoriza a trabajar. Puede ser necesario un permiso vinculado al empleador y, en muchos casos, una LMIA positiva.',
'lmia' => '2. ¿Qué es una LMIA?',
'lmia_text' => 'Es una evaluación del mercado laboral que puede necesitar el empleador. “LMIA requested” no significa que esté aprobada ni garantiza un permiso de trabajo.',
'rights' => '3. Derechos del trabajador extranjero',
'rights_text' => 'La legislación canadiense protege a los trabajadores extranjeros. El empleador debe pagar lo acordado y respetar la seguridad laboral. No puede quedarse con tu pasaporte ni cobrarte las tasas de contratación prohibidas.',
'licence' => '4. Licencia para camiones pesados',
'licence_text' => 'El permiso marroquí no autoriza automáticamente a conducir un camión comercial en Canadá. Los requisitos de licencia, formación y exámenes varían según la provincia o territorio.',
'fraud' => '🛡️ Evitar estafas',
'fraud_text' => 'No pagues a intermediarios por promesas de contrato, visado o LMIA. Verifica la empresa por canales oficiales y conserva una copia del contrato y de las comunicaciones.',
'official' => '📚 Fuentes oficiales',
'disclaimer' => 'Aviso: información general, no asesoramiento jurídico ni garantía de empleo o permiso. Comprueba siempre los requisitos vigentes en fuentes oficiales.',
'updated' => 'Última revisión de los enlaces',
'home' => 'Volver al inicio',
],
'fr' => [
'title' => 'Travailler au Canada comme chauffeur routier',
'intro' => 'Guide pratique pour les conducteurs marocains : offres officielles, droit du travail, immigration et permis de conduire.',
'jobs' => '🔎 Rechercher des offres de chauffeur routier',
'jobs_text' => 'Utilisez les sources officielles et vérifiez l’employeur, le lieu de travail, le salaire et les conditions de candidature.',
'foreign' => 'Offres ouvertes aux candidats de l’étranger',
'temporary' => 'Offres pour travailleurs étrangers temporaires',
'law' => '⚖️ Droit du travail et immigration',
'permit' => '1. Permis de travail',
'permit_text' => 'Une offre d’emploi ne donne pas à elle seule le droit de travailler. Un permis lié à l’employeur peut être nécessaire, ainsi qu’une EIMT/LMIA positive dans de nombreux cas.',
'lmia' => '2. Qu’est-ce qu’une EIMT/LMIA ?',
'lmia_text' => 'Il s’agit d’une évaluation du marché du travail que l’employeur peut devoir obtenir. « LMIA requested » ne signifie pas que la demande est approuvée ni que le permis est garanti.',
'rights' => '3. Droits du travailleur étranger',
'rights_text' => 'La loi canadienne protège les travailleurs étrangers. L’employeur doit payer le salaire convenu et respecter la sécurité au travail. Il ne peut pas garder votre passeport ni vous facturer les frais de recrutement interdits.',
'licence' => '4. Permis de conduire poids lourds',
'licence_text' => 'Le permis marocain ne donne pas automatiquement le droit de conduire un camion commercial au Canada. Les exigences de permis, de formation et d’examen varient selon la province ou le territoire.',
'fraud' => '🛡️ Éviter les arnaques',
'fraud_text' => 'Ne payez pas un intermédiaire pour une promesse de contrat, de visa ou de LMIA. Vérifiez l’entreprise par ses canaux officiels et conservez une copie du contrat et des échanges.',
'official' => '📚 Sources officielles',
'disclaimer' => 'Avis : informations générales, sans valeur de conseil juridique ni garantie d’emploi ou de permis. Vérifiez toujours les exigences actuelles auprès des autorités canadiennes.',
'updated' => 'Dernière vérification des liens',
'home' => 'Retour à l’accueil',
],
'en' => [
'title' => 'Canada Truck Driver Jobs and Work Rules',
'intro' => 'A practical guide for Moroccan drivers: official job searches, employment and immigration rules, and commercial driving licence requirements.',
'jobs' => '🔎 Search truck driver jobs',
'jobs_text' => 'Use official sources and verify the employer, work location, pay and who is eligible to apply.',
'foreign' => 'Jobs open to candidates outside Canada',
'temporary' => 'Temporary foreign worker job listings',
'law' => '⚖️ Canadian employment and immigration rules',
'permit' => '1. Work permit',
'permit_text' => 'A job offer alone does not authorize you to work. You may need an employer-specific work permit, and in many cases the employer needs a positive LMIA first.',
'lmia' => '2. What is an LMIA?',
'lmia_text' => 'A Labour Market Impact Assessment may be required for an employer to hire a foreign worker. “LMIA requested” does not mean it was approved or that a work permit is guaranteed.',
'rights' => '3. Foreign worker rights',
'rights_text' => 'Canadian law protects foreign workers. Employers must pay agreed wages and respect workplace safety. They cannot keep your passport or charge prohibited recruitment fees. Keep a copy of your contract and communications.',
'licence' => '4. Commercial truck driving licence',
'licence_text' => 'A Moroccan licence does not automatically authorize commercial truck driving in Canada. Licence classes, training, tests and recognition requirements vary by province or territory.',
'fraud' => '🛡️ Avoid recruitment scams',
'fraud_text' => 'Do not pay an intermediary for a promise of a job contract, visa or LMIA. Verify the employer through official channels and keep copies of contracts and communications.',
'official' => '📚 Official government sources',
'disclaimer' => 'Notice: General information only, not legal advice and not a guarantee of employment or a work permit. Always check current requirements with Canadian authorities.',
'updated' => 'Links last reviewed',
'home' => 'Back to homepage',
],
];
$t = $content[$locale] ?? $content['ar'];
@endphp
<!DOCTYPE html>
<html lang="{{ in_array($locale, ['ar','es','fr','en']) ? $locale : 'ar' }}" dir="{{ $rtl ? 'rtl' : 'ltr' }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $t['title'] }} | Edriouche Truck Job</title>
<meta name="description" content="{{ $t['intro'] }}">
<style>
body{margin:0;background:#f4f7fb;color:#172033;font-family:Arial,sans-serif;line-height:1.8}
header{background:#15304b;color:#fff;padding:24px 16px;text-align:center}
header a{color:#fff}main{max-width:960px;margin:22px auto;padding:0 14px}
.card{background:#fff;border:1px solid #dbe4ee;border-radius:14px;padding:20px;margin:16px 0}
h1,h2{line-height:1.4}h2{color:#15304b}
.links a{display:block;padding:10px 12px;margin:8px 0;background:#eef5fc;border-radius:8px;color:#064f91;text-decoration:none;overflow-wrap:anywhere}
.warning{background:#fff7e6;border-color:#f2d08a}
small{color:#526174}.toplinks a{margin:0 8px;color:white}
footer{text-align:center;padding:22px;color:#526174}
</style>
</head>
<body>
<header>
<div class="toplinks">
<a href="/lang/ar?redirect=%2Fcanada-jobs">🇲🇦 العربية</a>
<a href="/lang/es?redirect=%2Fcanada-jobs">🇪🇸 Español</a>
<a href="/lang/fr?redirect=%2Fcanada-jobs">🇫🇷 Français</a>
<a href="/lang/en?redirect=%2Fcanada-jobs">🇬🇧 English</a>
</div>
<h1>🇨🇦 {{ $t['title'] }}</h1>
<p>{{ $t['intro'] }}</p>
</header>
<main>
<section class="card">
<h2>{{ $t['jobs'] }}</h2>
<p>{{ $t['jobs_text'] }}</p>
<div class="links">
<a href="https://www.jobbank.gc.ca/findajob/foreign-candidates" target="_blank" rel="noopener">{{ $t['foreign'] }}</a>
<a href="https://www.jobbank.gc.ca/jobsearch/jobsearch?searchstring=truck+driver+lmia" target="_blank" rel="noopener">{{ $t['temporary'] }}</a>
</div>
</section>
<section class="card">
<h2>{{ $t['law'] }}</h2>
<h3>{{ $t['permit'] }}</h3><p>{{ $t['permit_text'] }}</p>
<h3>{{ $t['lmia'] }}</h3><p>{{ $t['lmia_text'] }}</p>
<h3>{{ $t['rights'] }}</h3><p>{{ $t['rights_text'] }}</p>
<h3>{{ $t['licence'] }}</h3><p>{{ $t['licence_text'] }}</p>
</section>
<section class="card">
<h2>🧭
@if($locale === 'ar') خطوات التقديم من خارج كندا
@elseif($locale === 'es') Pasos para solicitar empleo desde el extranjero
@elseif($locale === 'fr') Étapes pour postuler depuis l’étranger
@else Practical steps for applying from abroad
@endif
</h2>
<p>
@if($locale === 'ar')
جهّز سيرة ذاتية دقيقة ووثائق خبرتك، وابحث عن إعلان واضح في Job Bank. تحقق من صاحب العمل والأجر وقبول المرشحين من الخارج، واسأل عن تصريح العمل وLMIA عند الحاجة. تحقق من شروط رخصة الشاحنات في المقاطعة. لا تدفع مقابل وعد بعقد أو تأشيرة.
@elseif($locale === 'es')
Prepara un CV veraz y documentos de experiencia. Busca anuncios claros en Job Bank y verifica al empleador, el salario y si acepta candidatos del extranjero. Pregunta por el permiso de trabajo y la LMIA cuando corresponda. Comprueba la licencia exigida en la provincia. No pagues por promesas de contrato o visado.
@elseif($locale === 'fr')
Préparez un CV exact et des justificatifs d’expérience. Recherchez des annonces claires sur Job Bank et vérifiez l’employeur, le salaire et l’admissibilité des candidats étrangers. Renseignez-vous sur le permis de travail et l’EIMT/LMIA si nécessaire. Vérifiez le permis poids lourd exigé dans la province. Ne payez pas pour une promesse de contrat ou de visa.
@else
Prepare an accurate CV and evidence of experience. Search clear Job Bank listings and verify the employer, pay and eligibility for overseas applicants. Ask about the work permit and LMIA where required. Check the commercial licence rules in the province. Never pay for a promise of a job contract or visa.
@endif
</p>
</section>
<section class="card warning">
<h2>{{ $t['fraud'] }}</h2>
<p>{{ $t['fraud_text'] }}</p>
</section>
<section class="card">
<h2>{{ $t['official'] }}</h2>
<div class="links">
<a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/work-canada/employer-specific.html" target="_blank" rel="noopener">Canada.ca — Employer-specific work permits</a>
<a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/work-canada/worker-rights.html" target="_blank" rel="noopener">Canada.ca — Foreign worker rights</a>
<a href="https://www.jobbank.gc.ca/temporary-foreign-workers" target="_blank" rel="noopener">Job Bank — Temporary foreign workers</a>
</div>
</section>
<section class="card warning">
<strong>{{ $t['disclaimer'] }}</strong>
<p><small>{{ $t['updated'] }}: {{ now()->format('d/m/Y') }}</small></p>
</section>
<p><a href="/">{{ $t['home'] }}</a></p>
</main>
<footer>Edriouche Truck Job · Information for professional drivers</footer>
</body>
</html>
