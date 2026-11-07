@php
$locale = app()->getLocale();
$rtl = $locale === 'ar';
$copy = [
'ar' => [
'title' => 'فرص سائقي الشاحنات في أوروبا',
'intro' => 'دليل مستقل لفرص فرنسا وبلجيكا وهولندا وألمانيا والبرتغال. هذه الصفحة منفصلة عن عروض إسبانيا، وتفرّق بين إعلان وظيفة محدد وبوابة بحث وترشيح عام.',
'date' => 'آخر مراجعة للمصادر: 7 نوفمبر 2026',
'notice_title' => 'تنبيه قبل التقديم',
'notice' => 'وجود إعلان أو بوابة توظيف لا يعني أن صاحب العمل يقبل مرشحاً من المغرب أو يوفر تصريح عمل. لا تعتبر أي فرصة مؤكدة من المغرب إلا إذا ذكر صاحب العمل ذلك صراحةً. لا تدفع أموالاً لوسيط مقابل عقد أو تأشيرة.',
'lic_title' => 'افهم الوثائق قبل التقديم',
'lic' => 'الرخصة المغربية C+E ليست تلقائياً رخصة أوروبية. وCAP أو Code 95 هو التأهيل المهني، وبطاقة التاكوغراف وثيقة منفصلة، وتصريح العمل/الإقامة إجراء قانوني مستقل. لا تفترض أن أحدها يعوّض الآخر.',
'status' => 'حالة التحقق',
'not_confirmed' => 'قبول المتقدمين من المغرب: غير مؤكد',
'fr' => 'فرنسا',
'fr_text' => 'ابدأ ببوابة France Travail الرسمية وابحث عن Conducteur routier / poids lourd. راجع كل إعلان لمعرفة نوع الرخصة وFIMO/FCO أو التأهيل المطلوب، ومكان العمل، وهل يقبل صاحب العمل طلباً من خارج الاتحاد الأوروبي. لا يوجد في رابط البحث العام ضمان لتأشيرة أو توظيف دولي.',
'fr_link' => 'البحث الرسمي عن وظائف النقل الثقيل في فرنسا',
'be' => 'بلجيكا',
'be_text' => 'بلجيكا لديها أربع خدمات توظيف عامة حسب الإقليم: VDAB في فلاندرز، Forem في والونيا، Actiris في بروكسل، وADG في المجتمع الناطق بالألمانية. ابحث عن Chauffeur CE أو vrachtwagenchauffeur في الخدمة المناسبة لمنطقة العمل. بعض الوظائف تتطلب Code 95 واللغة المحلية. اسأل صاحب العمل صراحةً عن تصريح العمل لمقيم في المغرب.',
'be_link' => 'خدمات التوظيف العامة: VDAB وForem وActiris وADG',
'nl' => 'هولندا',
'nl_text' => 'استعمل Werk.nl التابعة لخدمة التوظيف العامة وابحث عن vrachtwagenchauffeur أو chauffeur CE. تحقق من شرط رخصة CE المعترف بها وCode 95 وبطاقة السائق، واسأل كتابةً عن رعاية تصريح الإقامة والعمل. بعض وكالات التوظيف تقبل مواطني الاتحاد الأوروبي فقط.',
'nl_link' => 'بوابة Werk.nl الرسمية',
'de' => 'ألمانيا',
'de_text' => 'ألمانيا لديها قواعد خاصة لتوظيف سائقي الدول الثالثة. قد يسمح المسار القانوني بالدخول لاستكمال الرخصة الألمانية والتأهيل المهني خلال مدة محددة، إذا وفر صاحب العمل عقداً وخطة تأهيل واستوفى موافقة وكالة العمل. كما ظهرت صفحة توظيف لدى Spedition ELAS تذكر صراحةً دعم إجراءات التأشيرة للمتقدمين من خارج الاتحاد الأوروبي؛ لكن شروطها تتضمن رخصة CE أوروبية، لذلك يجب تأكيد قبول وضع الرخصة المغربية قبل التقديم.',
'de_link' => 'الشرح الحكومي الألماني لمسار سائقي الدول الثالثة',
'de_employer' => 'Spedition ELAS: تعلن دعم التأشيرة، لكن صفحة غير الأوروبيين تفيد بأنها لا تستقبل طلبات جديدة حالياً.',
'de_age' => 'في 2026، من تجاوز 45 سنة يحتاج في مسار التوظيف ذي الصلة إلى راتب إجمالي سنوي لا يقل عن 55,770 يورو أو إثبات كافٍ لتأمين التقاعد. ينطبق الشرط بحسب نوع المسار القانوني؛ تحقق من الجهة الرسمية قبل التقديم.',
'pt' => 'البرتغال',
'pt_text' => 'لدى IEFP صفحة رسمية بعنوان وظائف لغير المقيمين من دول خارج الاتحاد الأوروبي، وموجهة صراحةً لمن يعيش خارج البرتغال. يشترط وجود عقد أو وعد بعقد من شركة برتغالية؛ وإذا اختارك صاحب العمل يمكنك طلب تأشيرة العمل. افحص كل إعلان لمعرفة ما إذا كان يقبل سائق شاحنة ومؤهلاته.',
'pt_link' => 'بوابة IEFP للتوظيف الدولي من خارج الاتحاد الأوروبي',
'agency_title' => 'وكالة توظيف أوروبية – ليست صاحب العمل',
'agency_text' => 'تعرض Arktis وظائف سائقين في عدة دول أوروبية وتذكر شروط كل إعلان وأجره وآخر أجل. لكنها تعرض أيضاً إعلانات بآجال تقديم سابقة؛ لذلك تحقق من أن الإعلان ما زال مفتوحاً قبل التقديم. تعامل معها كوسيط توظيف، ولا يوجد تأكيد عام بأنها تقبل المتقدمين من المغرب أو توفر التأشيرة.',
'agency_link' => 'قائمة وظائف سائقي الشاحنات لدى Arktis',
'how_title' => 'ما الذي نتحقق منه في كل إعلان؟',
'how' => ['اسم صاحب العمل ومصدر الإعلان الأصلي','تاريخ النشر وآخر أجل للتقديم','C أو C+E والاعتراف بالرخصة المغربية','CAP / Code 95 وبطاقة التاكوغراف','اللغة والخبرة ونوع العقد والأجر الإجمالي','قبول المتقدم من خارج الاتحاد الأوروبي ودعم تصريح العمل كتابةً'],
'footer' => 'Edriouche Truck Job لا يبيع عقود العمل ولا يضمن التوظيف أو التأشيرة. تحقق دائماً من صاحب العمل والجهة الحكومية قبل إرسال الوثائق.'
],
'es' => [
'title' => 'Ofertas para conductores de camión en Europa',
'intro' => 'Guía independiente para Francia, Bélgica, Países Bajos, Alemania y Portugal. Esta página está separada de las ofertas de España y distingue entre vacantes concretas, portales de empleo y candidaturas generales.',
'date' => 'Última revisión de las fuentes: 7 de noviembre de 2026',
'notice_title' => 'Aviso antes de solicitar',
'notice' => 'Que exista una oferta o un portal de empleo no significa que la empresa acepte candidatos desde Marruecos ni que tramite un permiso de trabajo. No consideres confirmada una oportunidad para Marruecos salvo que la empresa lo indique expresamente. No pagues a intermediarios por contratos o visados.',
'lic_title' => 'Documentación: no confundir requisitos',
'lic' => 'El permiso marroquí C+E no se convierte automáticamente en un permiso europeo. CAP o Code 95 es la cualificación profesional; la tarjeta de tacógrafo es un documento distinto; y el permiso de trabajo/residencia es un procedimiento legal independiente.',
'status' => 'Estado de verificación',
'not_confirmed' => 'Aceptación de candidatos desde Marruecos: no confirmada',
'fr' => 'Francia',
'fr_text' => 'Consulta France Travail y busca Conducteur routier / poids lourd. Revisa cada anuncio para comprobar el permiso, FIMO/FCO o cualificación exigida, ubicación y aceptación de solicitudes desde fuera de la UE. El portal general no garantiza visado ni contratación internacional.',
'fr_link' => 'Buscar empleos de transporte pesado en France Travail',
'be' => 'Bélgica',
'be_text' => 'Bélgica tiene cuatro servicios públicos de empleo regionales: VDAB en Flandes, Forem en Valonia, Actiris en Bruselas y ADG en la comunidad germanófona. Busca Chauffeur CE o vrachtwagenchauffeur en la región correspondiente. Algunas vacantes exigen Code 95 y el idioma local. Pregunta expresamente por el permiso de trabajo para residentes en Marruecos.',
'be_link' => 'Servicios públicos de empleo: VDAB, Forem, Actiris y ADG',
'nl' => 'Países Bajos',
'nl_text' => 'Consulta Werk.nl, el servicio público de empleo, con las palabras vrachtwagenchauffeur o chauffeur CE. Comprueba el reconocimiento del permiso CE, Code 95 y tarjeta de conductor, y pregunta por escrito si ofrecen patrocinio del permiso de residencia y trabajo. Algunas agencias solo aceptan ciudadanos de la UE.',
'nl_link' => 'Portal oficial Werk.nl',
'de' => 'Alemania',
'de_text' => 'Alemania dispone de normas específicas para contratar conductores de terceros países. En determinadas condiciones, la vía legal permite entrar para obtener el permiso alemán y la cualificación profesional dentro de un plazo establecido, si el empleador ofrece contrato y plan de formación y se obtiene la aprobación laboral. Spedition ELAS publica una página de contratación que menciona apoyo con el visado para candidatos de fuera de la UE; sin embargo, exige permiso CE europeo, por lo que hay que confirmar si acepta un permiso marroquí.',
'de_link' => 'Información oficial alemana para conductores profesionales de terceros países',
'de_employer' => 'Spedition ELAS: anuncia apoyo para el visado, pero su página para candidatos extracomunitarios indica que ahora no acepta nuevas solicitudes.',
'de_age' => 'En 2026, para la vía de empleo correspondiente, las personas mayores de 45 años necesitan un salario bruto anual mínimo de 55.770 euros o acreditar una previsión de jubilación suficiente. El requisito depende de la vía legal concreta; confirma tu caso con la autoridad oficial.',
'pt' => 'Portugal',
'pt_text' => 'IEFP dispone de una página oficial de vacantes para no residentes de países terceros, dirigida expresamente a personas que viven fuera de Portugal. Se exige un contrato o una promesa de contrato de una empresa portuguesa; si el empleador te selecciona, puedes solicitar el visado de trabajo. Comprueba en cada anuncio si admite conductores de camión y qué cualificaciones exige.',
'pt_link' => 'Portal IEFP para contratación internacional desde terceros países',
'agency_title' => 'Agencia de contratación europea – no es el empleador',
'agency_text' => 'Arktis publica puestos de conductor en varios países europeos e indica condiciones, salario y plazo. Sin embargo, también muestra anuncios cuyo plazo ya ha vencido; comprueba que cada vacante siga abierta antes de solicitarla. Es una agencia de contratación y no hay confirmación general de que acepte candidatos desde Marruecos o tramite visados.',
'agency_link' => 'Ofertas de conductores en Arktis',
'how_title' => 'Qué comprobamos en cada oferta',
'how' => ['Nombre del empleador y fuente original','Fecha de publicación y plazo de solicitud','C o C+E y reconocimiento del permiso marroquí','CAP / Code 95 y tarjeta de tacógrafo','Idioma, experiencia, contrato y salario bruto','Aceptación de candidatos extracomunitarios y apoyo escrito para el permiso de trabajo'],
'footer' => 'Edriouche Truck Job no vende contratos ni garantiza empleo o visados. Verifica siempre al empleador y a la autoridad pública antes de enviar documentos.'
],
'fr' => [
'title' => 'Offres pour conducteurs routiers en Europe',
'intro' => 'Guide indépendant pour la France, la Belgique, les Pays-Bas, l’Allemagne et le Portugal. Cette page est distincte des offres en Espagne et différencie les postes précis, les portails d’emploi et les candidatures spontanées.',
'date' => 'Dernière vérification des sources : 7 novembre 2026',
'notice_title' => 'Avertissement avant de postuler',
'notice' => 'La présence d’une annonce ou d’un portail ne signifie pas que l’employeur accepte les candidats résidant au Maroc ou prend en charge un permis de travail. Une possibilité depuis le Maroc n’est confirmée que si l’employeur le précise explicitement. Ne payez aucun intermédiaire pour un contrat ou un visa.',
'lic_title' => 'Documents : ne pas confondre',
'lic' => 'Le permis marocain C+E ne devient pas automatiquement un permis européen. Le CAP ou Code 95 correspond à la qualification professionnelle ; la carte tachygraphe est un document distinct ; le permis de travail et de séjour constitue une procédure légale séparée.',
'status' => 'État de vérification',
'not_confirmed' => 'Acceptation de candidats depuis le Maroc : non confirmée',
'fr' => 'France',
'fr_text' => 'Consultez France Travail avec les mots Conducteur routier / poids lourd. Vérifiez chaque annonce : permis, FIMO/FCO ou qualification exigée, lieu de travail et acceptation des candidatures hors UE. Le portail général ne garantit ni visa ni recrutement international.',
'fr_link' => 'Rechercher des emplois poids lourds sur France Travail',
'be' => 'Belgique',
'be_text' => 'La Belgique dispose de quatre services publics régionaux : VDAB en Flandre, Forem en Wallonie, Actiris à Bruxelles et ADG dans la communauté germanophone. Recherchez Chauffeur CE ou vrachtwagenchauffeur dans la région concernée. Certaines offres exigent le Code 95 et la langue locale. Demandez explicitement si l’employeur peut obtenir un permis de travail pour une personne résidant au Maroc.',
'be_link' => 'Services publics de l’emploi : VDAB, Forem, Actiris et ADG',
'nl' => 'Pays-Bas',
'nl_text' => 'Consultez Werk.nl, le service public de l’emploi, avec vrachtwagenchauffeur ou chauffeur CE. Vérifiez la reconnaissance du permis CE, le Code 95 et la carte conducteur, puis demandez par écrit si l’employeur accompagne la demande de séjour et de travail. Certaines agences n’acceptent que les citoyens de l’UE.',
'nl_link' => 'Portail officiel Werk.nl',
'de' => 'Allemagne',
'de_text' => 'L’Allemagne prévoit des règles spécifiques pour recruter des conducteurs de pays tiers. Sous certaines conditions, la voie légale permet une entrée afin d’obtenir le permis allemand et la qualification professionnelle dans un délai défini, avec un contrat, un plan de formation de l’employeur et l’accord de l’autorité du travail. Spedition ELAS indique soutenir les démarches de visa des candidats hors UE ; toutefois, l’entreprise demande un permis CE européen. Il faut donc confirmer l’acceptation d’un permis marocain.',
'de_link' => 'Informations officielles allemandes pour les conducteurs de pays tiers',
'de_employer' => 'Spedition ELAS : annonce une aide au visa, mais sa page destinée aux candidats hors UE indique qu’elle ne reçoit actuellement plus de nouvelles candidatures.',
'de_age' => 'En 2026, pour la voie d’emploi concernée, les personnes de plus de 45 ans doivent percevoir au moins 55 770 euros bruts par an ou justifier d’une prévoyance retraite suffisante. Cette condition dépend de la voie juridique ; vérifiez votre situation auprès de l’autorité officielle.',
'pt' => 'Portugal',
'pt_text' => 'L’IEFP dispose d’une page officielle d’offres pour les non-résidents de pays tiers, destinée aux personnes vivant hors du Portugal. Un contrat de travail ou une promesse de contrat d’une entreprise portugaise est requis ; en cas de sélection, vous pouvez demander un visa de travail. Vérifiez dans chaque annonce si elle concerne les conducteurs routiers et quelles qualifications sont exigées.',
'pt_link' => 'Portail IEFP de recrutement international depuis les pays tiers',
'agency_title' => 'Agence de recrutement européenne – pas l’employeur',
'agency_text' => 'Arktis publie des postes de conducteurs dans plusieurs pays européens avec les conditions, le salaire et la date limite. Toutefois, certaines annonces affichent déjà une date limite dépassée ; vérifiez que chaque poste est encore ouvert avant de postuler. Il s’agit d’une agence et rien ne confirme que toutes ses offres acceptent les candidats du Maroc ou prennent en charge un visa.',
'agency_link' => 'Offres de conducteurs chez Arktis',
'how_title' => 'Points vérifiés pour chaque annonce',
'how' => ['Nom de l’employeur et source originale','Date de publication et date limite','C ou C+E et reconnaissance du permis marocain','CAP / Code 95 et carte tachygraphe','Langue, expérience, contrat et salaire brut','Acceptation hors UE et aide écrite pour le permis de travail'],
'footer' => 'Edriouche Truck Job ne vend aucun contrat et ne garantit ni emploi ni visa. Vérifiez toujours l’employeur et l’autorité publique avant d’envoyer des documents.'
],
'en' => [
'title' => 'Truck Driver Opportunities in Europe',
'intro' => 'An independent guide to France, Belgium, the Netherlands, Germany and Portugal. This page is separate from Spain jobs and distinguishes specific vacancies, job portals and general applications.',
'date' => 'Sources last reviewed: 7 November 2026',
'notice_title' => 'Important before applying',
'notice' => 'A vacancy or job portal does not mean the employer accepts applicants from Morocco or sponsors a work permit. Treat an opportunity as open to applicants in Morocco only when the employer explicitly confirms this. Never pay an intermediary for a job contract or visa.',
'lic_title' => 'Understand the documents',
'lic' => 'A Moroccan C+E licence does not automatically become an EU licence. CAP or Code 95 is the professional qualification; the tachograph driver card is a separate document; and a work/residence permit is a separate legal process.',
'status' => 'Verification status',
'not_confirmed' => 'Applicants from Morocco accepted: not confirmed',
'fr' => 'France',
'fr_text' => 'Use the official France Travail portal and search for Conducteur routier / poids lourd. Check each vacancy for the licence, FIMO/FCO or qualification required, location and whether applications from outside the EU are accepted. A general search page does not guarantee a visa or international recruitment.',
'fr_link' => 'Search heavy-goods driving jobs on France Travail',
'be' => 'Belgium',
'be_text' => 'Belgium has four regional public employment services: VDAB in Flanders, Forem in Wallonia, Actiris in Brussels and ADG in the German-speaking Community. Search for Chauffeur CE or vrachtwagenchauffeur in the relevant region. Some roles require Code 95 and the local language. Ask explicitly whether the employer can arrange a work permit for an applicant living in Morocco.',
'be_link' => 'Regional public employment services: VDAB, Forem, Actiris and ADG',
'nl' => 'Netherlands',
'nl_text' => 'Use Werk.nl, the public employment service, and search for vrachtwagenchauffeur or chauffeur CE. Check recognition of the CE licence, Code 95 and driver card, and ask in writing whether the employer sponsors residence and work permission. Some agencies accept EU citizens only.',
'nl_link' => 'Official Werk.nl job portal',
'de' => 'Germany',
'de_text' => 'Germany has specific rules for hiring professional drivers from non-EU countries. Under certain conditions, a legal route allows entry to obtain a German driving licence and professional qualification within a defined period, if the employer provides a contract and qualification plan and the labour authority approves it. Spedition ELAS has a recruitment page explicitly mentioning visa support for non-EU applicants; however, it requires an EU CE licence, so acceptance of a Moroccan licence must be confirmed first.',
'de_link' => 'Official German guidance for professional drivers from third countries',
'de_employer' => 'Spedition ELAS: advertises visa support, but its non-EU applicant page currently says it is not accepting new applications.',
'de_age' => 'In 2026, under the relevant employment route, applicants over 45 need an gross annual salary of at least €55,770 or proof of adequate pension provision. The rule depends on the specific legal route; confirm the individual case with the official authority.',
'pt' => 'Portugal',
'pt_text' => 'IEFP has an official vacancies page specifically for non-residents from non-EU countries, aimed at people living outside Portugal. It requires an employment contract or promise of contract from a Portuguese company; if selected, you can apply for a work visa. Check each listing to see whether it is for truck drivers and what qualifications it requires.',
'pt_link' => 'IEFP portal for international recruitment from third countries',
'agency_title' => 'European recruitment agency – not the employer',
'agency_text' => 'Arktis lists driver jobs in several European countries with requirements, pay and deadlines. However, some listings show application deadlines that have already passed; verify that each role is still open before applying. It is a recruitment agency, and there is no blanket confirmation that its roles accept applicants from Morocco or provide visa sponsorship.',
'agency_link' => 'Truck driver vacancies listed by Arktis',
'how_title' => 'What we check for every vacancy',
'how' => ['Employer name and original source','Publication date and application deadline','C or C+E and recognition of the Moroccan licence','CAP / Code 95 and tachograph driver card','Language, experience, contract and gross pay','Non-EU eligibility and written work-permit support'],
'footer' => 'Edriouche Truck Job does not sell job contracts or guarantee employment or visas. Always verify the employer and public authority before sending documents.'
]
];
$c = $copy[$locale] ?? $copy['ar'];
$items = [
['flag'=>'🇫🇷','key'=>'fr','url'=>'https://candidat.francetravail.fr/offres/recherche?libMetier=conducteur+poids+lourds&offresPartenaires=true'],
['flag'=>'🇧🇪','key'=>'be','url'=>'https://www.vdab.be/vindeenjob/jobs/truck-driver'],
['flag'=>'🇳🇱','key'=>'nl','url'=>'https://www.werk.nl/werkzoekenden/vacatures/'],
['flag'=>'🇩🇪','key'=>'de','url'=>'https://www.make-it-in-germany.com/en/looking-for-foreign-professionals/entering/admission-labour-market/professional-drivers'],
['flag'=>'🇵🇹','key'=>'pt','url'=>'https://iefponline.iefp.pt/IEFP/ofertas/emprego/recrutamento-internacional/estados-terceiros.jsp']
];
@endphp
<!doctype html>
<html lang="{{ $locale }}" dir="{{ $rtl ? 'rtl' : 'ltr' }}">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $c['title'] }} | Edriouche Truck Job</title>
<style>
*{box-sizing:border-box}body{margin:0;background:#f3f6fa;color:#202b38;font:16px/1.8 Arial,sans-serif}.wrap{max-width:960px;margin:auto;padding:18px}.hero,.country,.notice,.docs,.agency,.checks{background:#fff;border-radius:14px;padding:20px;margin:16px 0;box-shadow:0 3px 12px #10243a12}h1,h2{color:#0756a8;line-height:1.4}.hero{text-align:center}.notice{border-inline-start:6px solid #d99a16;background:#fffaf0}.country{border-inline-start:5px solid #168b58}.status{display:inline-block;background:#fff1d6;color:#805300;padding:3px 10px;border-radius:20px;font-size:14px}.links a{display:inline-block;margin:6px 0;color:#0756a8;font-weight:bold}.lang{display:flex;gap:12px;flex-wrap:wrap;justify-content:center;padding:12px}.lang a{color:#0756a8}li{margin:5px 0}footer{text-align:center;color:#586575;padding:25px}
</style>
</head>
<body>
@include('partials.language-switcher')
<main class="wrap">
<section class="hero"><h1>🚛 {{ $c['title'] }}</h1><p>{{ $c['intro'] }}</p><small>{{ $c['date'] }}</small></section>
<section class="notice"><h2>⚠️ {{ $c['notice_title'] }}</h2><p>{{ $c['notice'] }}</p></section>
<section class="docs"><h2>📄 {{ $c['lic_title'] }}</h2><p>{{ $c['lic'] }}</p></section>
@foreach($items as $item)
<section class="country">
<h2>{{ $item['flag'] }} {{ $c[$item['key']] }}</h2>
<p>{{ $c[$item['key'].'_text'] }}</p>
<p><span class="status">{{ $c['status'] }}: {{ $c['not_confirmed'] }}</span></p>
<div class="links"><a href="{{ $item['url'] }}" target="_blank" rel="noopener">{{ $c[$item['key'].'_link'] }} ↗</a></div>
@if($item['key']==='be')
<div class="links">
<a href="https://www.leforem.be/" target="_blank" rel="noopener">Forem – Wallonia ↗</a> ·
<a href="https://www.actiris.brussels/" target="_blank" rel="noopener">Actiris – Brussels ↗</a> ·
<a href="https://adg.be/" target="_blank" rel="noopener">ADG – German-speaking Community ↗</a>
</div>
@endif
@if($item['key']==='de')
<p>{{ $c['de_age'] }}</p>
<div class="links"><a href="https://spedition-elas.com/en/karriere/nicht-eu-fahrer" target="_blank" rel="noopener">{{ $c['de_employer'] }} ↗</a></div>
@endif
</section>
@endforeach
<section class="agency"><h2>🌍 {{ $c['agency_title'] }}</h2><p>{{ $c['agency_text'] }}</p><div class="links"><a href="https://arktis.group/jobs/drive/" target="_blank" rel="noopener">{{ $c['agency_link'] }} ↗</a></div></section>
<section class="checks"><h2>✔️ {{ $c['how_title'] }}</h2><ul>@foreach($c['how'] as $line)<li>{{ $line }}</li>@endforeach</ul></section>
<footer>{{ $c['footer'] }}<br>© 2026 Edriouche Truck Job</footer>
</main>
</body></html>
