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
'rights_text' => 'تحمي القوانين الكندية العمال الأجانب. يجب دفع الأجر المتفق عليه واحترام قواعد السلامة وتسليمك نسخة من عقد العمل الموقّع. لا يجوز لصاحب العمل أو وكيل التوظيف أخذ جواز سفرك أو تصريح عملك أو تحميلك رسوم التوظيف المحظورة. احتفظ بنسخة من العقد والمراسلات.',
'licence' => '4. رخصة قيادة الشاحنات الثقيلة',
'licence_text' => 'الرخصة المغربية لا تمنح تلقائيًا حق قيادة شاحنة تجارية في كندا. تختلف شروط الاعتراف بالرخصة والتدريب والاختبارات حسب المقاطعة. مثال: أونتاريو تشترط على حامل رخصة تجارية من بلد آخر إكمال تدريب إلزامي لا يقل عن 103.5 ساعة قبل اختبار الطريق للحصول على Class A. كما تتطلب إجراءات الترخيص إثبات الإقامة القانونية والأهلية للعمل في أونتاريو. تحقق من الجهة الحكومية للمقاطعة قبل السفر أو قبول العرض.',
'francophone_title' => '5. مسار Mobilité francophone (C16) خارج كيبيك',
'francophone_text' => 'قد يتيح هذا المسار تصريح عمل مرتبطاً بصاحب العمل دون LMIA إذا كانت الوظيفة خارج كيبيك. يجب إثبات مستوى NCLC 5 على الأقل في التحدث والاستماع بالفرنسية. قبل التقديم، يرسل صاحب العمل عرض التوظيف عبر Employer Portal باستخدام رمز الإعفاء C16، ويدفع رسم امتثال صاحب العمل البالغ 230 دولاراً كندياً، ثم يسلّم العامل رقم العرض المكوّن من 7 أرقام. يمكن إثبات اللغة بنتائج TEF/TCF للتحدث والاستماع أو وثائق دراسة بالفرنسية؛ وصف اللغة بأنها جيدة لا يغني عن الإثبات. هذا مسار قانوني محتمل وليس عرض عمل أو ضماناً للتوظيف.',
'family_title' => '6. مرافقة الزوجة والأطفال',
'family_text' => 'قد تكون الزوجة مؤهلة لتصريح عمل مفتوح إذا كان العامل يحمل تصريحاً صالحاً، ويعمل أو سيعمل في NOC 73300 (سائقو شاحنات النقل) المدرج ضمن قائمة محددة من وظائف TEER 3، ويعيش أو يخطط للعيش والعمل في كندا، ويبقى تصريح العامل صالحاً 16 شهراً على الأقل بعد تقديم طلب الزوجة. الأطفال القاصرون القادمون من خارج كندا يجب أن يطلبوا تصريح دراسة قبل الدخول؛ وتوضح IRCC أن خطاب القبول غير مطلوب عندما يرافق الطفل والداً يتقدم بطلب تصريح عمل. لكل فرد شروطه وموافقته الخاصة.',
'age_title' => '7. أثر العمر على الإقامة الدائمة',
'age_text' => 'في عوامل الاختيار لبرنامج العامل الماهر الفدرالي (FSW)، يحصل من يبلغ 47 سنة فأكثر على صفر نقطة للعمر. لذلك يقلل العمر 56 عاماً من نقاط مسار الإقامة الدائمة القائم على النقاط، لكنه لا يعني وحده رفض تصريح عمل مؤقت عبر C16؛ فالتصريح المؤقت له شروط منفصلة.',
'francophone_source' => 'IRCC — شروط مسار Mobilité francophone',
'francophone_apply_source' => 'IRCC — إثبات الفرنسية وخطوات التقديم',
'family_source' => 'IRCC — أهلية تصريح العمل المفتوح للزوجة',
'children_source' => 'IRCC — تصاريح دراسة الأطفال القاصرين',
'express_entry_title' => '8. تحديث نقاط عرض العمل في Express Entry منذ 3 نوفمبر 2026',
'express_entry_text' => 'منذ 3 نوفمبر 2026، لم تعد IRCC تشترط LMIA كي يُحتسب عرض العمل ضمن عامل التوظيف المرتب في برنامج العامل الماهر الفدرالي (FSW) داخل Express Entry، كما أن وجود LMIA لا يمنح نقاط CRS إضافية ولا أولوية للملف. هذا التغيير يخص نقاط الإقامة الدائمة فقط؛ ولا يلغي متطلبات تصريح العمل المؤقت، إذ قد تظل LMIA الإيجابية مطلوبة لتصريح عمل مرتبط بصاحب العمل ما لم ينطبق إعفاء قانوني مثل C16. ويجب أن يكون عرض العمل حقيقياً ومستوفياً لشروط البرنامج.',
'age_source' => 'IRCC — نقاط العمر وتغييرات عروض العمل في Express Entry',
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
'rights_text' => 'La legislación canadiense protege a los trabajadores extranjeros. El empleador debe pagar lo acordado, respetar la seguridad laboral y entregarte una copia del contrato firmado. Ni él ni el reclutador pueden retener tu pasaporte o permiso de trabajo ni cobrarte tasas de contratación prohibidas.',
'licence' => '4. Licencia para camiones pesados',
'licence_text' => 'El permiso marroquí no autoriza automáticamente a conducir un camión comercial en Canadá. Los requisitos varían según la provincia. Por ejemplo, Ontario exige a quienes poseen una licencia comercial de otro país completar al menos 103,5 horas de formación obligatoria antes del examen práctico para obtener la Class A. También exige acreditar residencia legal y autorización para trabajar en Ontario al tramitar la licencia. Comprueba las normas oficiales antes de viajar o aceptar la oferta.',
'francophone_title' => '5. Movilidad francófona (C16) fuera de Quebec',
'francophone_text' => 'Esta vía puede permitir un permiso de trabajo vinculado al empleador sin LMIA si el empleo está fuera de Quebec. El trabajador debe acreditar al menos NCLC 5 en expresión oral y comprensión auditiva en francés. Antes de la solicitud, el empleador debe presentar la oferta en el Employer Portal con la exención C16, pagar la tasa de cumplimiento del empleador de 230 CAD y entregar el número de oferta de 7 dígitos. La prueba puede incluir resultados TEF/TCF de expresión oral y comprensión auditiva o documentos de estudios en francés; decir que se habla bien francés no sustituye la prueba. Es una vía legal posible, no una oferta de empleo ni una garantía de contratación.',
'family_title' => '6. Acompañamiento de la esposa y los hijos',
'family_text' => 'La esposa puede ser elegible para un permiso de trabajo abierto si el trabajador tiene un permiso válido, trabaja o trabajará en el NOC 73300 (conductores de camiones de transporte), incluido en la lista de determinadas ocupaciones TEER 3, vive o prevé vivir y trabajar en Canadá y su permiso sigue siendo válido al menos 16 meses después de la solicitud de la esposa. Los hijos menores que lleguen desde el extranjero deben solicitar un permiso de estudios antes de entrar; IRCC indica que no se exige carta de aceptación cuando acompañan a un progenitor que solicita un permiso de trabajo. Cada familiar debe cumplir sus propios requisitos.',
'age_title' => '7. Efecto de la edad en la residencia permanente',
'age_text' => 'En los factores de selección del Programa Federal de Trabajadores Cualificados (FSW), las personas de 47 años o más reciben 0 puntos por edad. A los 56 años esto reduce la puntuación de la vía de residencia permanente basada en puntos, pero no significa por sí solo que se deniegue un permiso temporal C16, que tiene requisitos distintos.',
'francophone_source' => 'IRCC — Requisitos de Movilidad Francófona',
'francophone_apply_source' => 'IRCC — Prueba de francés y pasos para solicitar',
'family_source' => 'IRCC — Elegibilidad del permiso de trabajo abierto para el cónyuge',
'children_source' => 'IRCC — Permisos de estudio para menores',
'express_entry_title' => '8. Cambio en los puntos por oferta de empleo en Express Entry desde el 3 de noviembre de 2026',
'express_entry_text' => 'Desde el 3 de noviembre de 2026, IRCC ya no exige una LMIA para que una oferta de empleo cuente en el factor de empleo concertado del Programa Federal de Trabajadores Cualificados (FSW) dentro de Express Entry. Tener una LMIA tampoco concede puntos CRS adicionales ni prioridad. Este cambio se refiere únicamente a la puntuación de residencia permanente; no elimina los requisitos de los permisos de trabajo temporales. Un permiso de trabajo vinculado al empleador puede seguir requiriendo una LMIA positiva, salvo que se aplique una exención legal como C16. La oferta debe ser genuina y cumplir los requisitos del programa.',
'age_source' => 'IRCC — Puntos por edad y cambios en ofertas de empleo de Express Entry',
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
'rights_text' => 'La loi canadienne protège les travailleurs étrangers. L’employeur doit payer le salaire convenu et respecter la sécurité au travail. Il doit remettre une copie du contrat signé. Ni l’employeur ni le recruteur ne peuvent retenir votre passeport ou votre permis de travail ni vous facturer des frais de recrutement interdits.',
'licence' => '4. Permis de conduire poids lourds',
'licence_text' => 'Le permis marocain ne donne pas automatiquement le droit de conduire un camion commercial au Canada. Les exigences varient selon la province. Par exemple, l’Ontario exige des titulaires d’un permis commercial étranger au moins 103,5 heures de formation obligatoire avant l’examen pratique pour obtenir la classe A. La demande de permis exige aussi une preuve de résidence légale et du droit de travailler en Ontario. Vérifiez les règles officielles avant de voyager ou d’accepter une offre.',
'francophone_title' => '5. Mobilité francophone (C16) hors Québec',
'francophone_text' => 'Cette voie peut permettre un permis de travail lié à un employeur sans EIMT/LMIA si l’emploi se situe hors Québec. Le travailleur doit prouver un niveau NCLC 5 au minimum en expression orale et compréhension orale en français. Avant la demande, l’employeur doit soumettre l’offre dans le Portail des employeurs sous le code d’exemption C16, payer les frais de conformité de 230 CAD et remettre le numéro d’offre à 7 chiffres. La preuve peut comprendre les résultats TEF/TCF pour l’expression et la compréhension orales ou des documents d’études en français; dire que l’on parle bien français ne remplace pas cette preuve. Il s’agit d’une voie légale possible, pas d’une offre d’emploi ni d’une garantie d’embauche.',
'family_title' => '6. Accompagnement de l’épouse et des enfants',
'family_text' => 'L’épouse peut être admissible à un permis de travail ouvert si le travailleur détient un permis valide, travaille ou travaillera dans la profession CNP 73300 (conducteurs de camions de transport), incluse dans la liste de certaines professions TEER 3, vit ou prévoit vivre et travailler au Canada et si son permis reste valide au moins 16 mois après la demande de l’épouse. Les enfants mineurs venant de l’étranger doivent demander un permis d’études avant l’entrée; IRCC précise qu’une lettre d’acceptation n’est pas exigée lorsqu’ils accompagnent un parent qui demande un permis de travail. Chaque membre doit satisfaire à ses propres conditions.',
'age_title' => '7. Effet de l’âge sur la résidence permanente',
'age_text' => 'Dans les facteurs de sélection du Programme fédéral des travailleurs qualifiés (FSW), les personnes de 47 ans ou plus obtiennent 0 point pour l’âge. À 56 ans, cela réduit le score de la voie de résidence permanente fondée sur des points, mais ne signifie pas à lui seul un refus d’un permis temporaire C16, qui répond à des critères différents.',
'francophone_source' => 'IRCC — Conditions de Mobilité francophone',
'francophone_apply_source' => 'IRCC — Preuve de français et étapes de demande',
'family_source' => 'IRCC — Admissibilité au permis de travail ouvert du conjoint',
'children_source' => 'IRCC — Permis d’études pour les enfants mineurs',
'express_entry_title' => '8. Changement des points liés à l’offre d’emploi dans Entrée express depuis le 3 novembre 2026',
'express_entry_text' => 'Depuis le 3 novembre 2026, IRCC n’exige plus d’EIMT/LMIA pour qu’une offre d’emploi compte au titre du facteur « emploi réservé » du Programme fédéral des travailleurs qualifiés (FSW) dans Entrée express. Une EIMT ne donne pas non plus de points SCG supplémentaires ni de priorité. Ce changement concerne le calcul des points pour la résidence permanente; il ne supprime pas les exigences des permis de travail temporaires. Un permis de travail lié à un employeur peut encore exiger une EIMT positive, sauf exemption légale comme C16. L’offre doit rester authentique et satisfaire aux règles du programme.',
'age_source' => 'IRCC — Points d’âge et changements des offres d’emploi dans Entrée express',
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
'rights_text' => 'Canadian law protects foreign workers. Employers must pay agreed wages and respect workplace safety. They must provide a signed copy of the employment agreement. Neither the employer nor recruiter may keep your passport or work permit or charge prohibited recruitment fees. Keep copies of your contract and communications.',
'licence' => '4. Commercial truck driving licence',
'licence_text' => 'A Moroccan licence does not automatically authorize commercial truck driving in Canada. Requirements vary by province. For example, Ontario requires holders of a commercial licence from another country to complete at least 103.5 hours of mandatory entry-level training before the Class A road test. Applicants must also prove legal residence and eligibility to work in Ontario when applying for the licence. Check the provincial rules before travelling or accepting an offer.',
'francophone_title' => '5. Francophone Mobility (C16) outside Quebec',
'francophone_text' => 'This route may allow an employer-specific work permit without an LMIA when the job is outside Quebec. The worker must prove at least NCLC 5 in French speaking and listening. Before the application, the employer must submit the offer through the Employer Portal using exemption code C16, pay the CAD 230 employer compliance fee and give the worker the 7-digit offer number. Proof can include TEF/TCF speaking and listening results or documents showing French-language studies; describing your French as “good” is not enough without evidence. This is a possible legal route, not a job offer or a hiring guarantee.',
'family_title' => '6. Accompanying spouse and children',
'family_text' => 'The spouse may qualify for an open work permit if the worker holds a valid work permit, is or will be employed in NOC 73300 (Transport truck drivers), which appears on the selected TEER 3 occupation list, plans to live and work in Canada, and the worker’s permit remains valid for at least 16 months after the spouse applies. Minor children coming from outside Canada must apply for study permits before entering; IRCC says a letter of acceptance is not required when they accompany a parent applying for a work permit. Each family member must meet their own requirements.',
'age_title' => '7. How age affects permanent residence',
'age_text' => 'Under the Federal Skilled Worker selection factors, applicants aged 47 or older receive 0 age points. At age 56, this reduces the score in the points-based permanent-residence route, but it does not by itself mean a temporary C16 work permit will be refused; that permit has separate requirements.',
'francophone_source' => 'IRCC — Francophone Mobility eligibility',
'francophone_apply_source' => 'IRCC — French-language proof and application steps',
'family_source' => 'IRCC — Spouse open work permit eligibility',
'children_source' => 'IRCC — Study permits for minor children',
'express_entry_title' => '8. Express Entry job-offer points change from November 3, 2026',
'express_entry_text' => 'Since November 3, 2026, IRCC no longer requires an LMIA for a job offer to count under the arranged-employment factor of the Federal Skilled Worker (FSW) Program within Express Entry. Having an LMIA also no longer gives extra CRS points or priority. This change concerns permanent-residence points only; it does not remove temporary work-permit requirements. An employer-specific work permit may still require a positive LMIA unless a legal exemption such as C16 applies. The job offer must still be genuine and meet the program rules.',
'age_source' => 'IRCC — FSW age points and Express Entry job-offer changes',
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
<h2>@if($locale==='ar')🆕 فرص كندية تمت مراجعتها في 20 نوفمبر 2026 @elseif($locale==='es')🆕 Ofertas canadienses revisadas el 20 de noviembre de 2026 @elseif($locale==='fr')🆕 Offres canadiennes vérifiées le 20 novembre 2026 @else 🆕 Canadian vacancies reviewed on 20 November 2026 @endif</h2>
<div class="card">
<h3>Nu-Tech Freight Brokers — Long-haul truck driver</h3>
<p><strong>@if($locale==='ar')🇨🇦 بالينافاد، أونتاريو · منصب واحد · 37 دولاراً كندياً في الساعة · 50 ساعة أسبوعياً @elseif($locale==='es')🇨🇦 Ballinafad, Ontario · 1 puesto · 37 CAD/hora · 50 horas semanales @elseif($locale==='fr')🇨🇦 Ballinafad, Ontario · 1 poste · 37 CAD/heure · 50 heures par semaine @else 🇨🇦 Ballinafad, Ontario · 1 vacancy · CAD $37/hour · 50 hours/week @endif</strong></p>
<p>@if($locale==='ar')نُشر 14 نوفمبر 2026؛ آخر أجل 28 نوفمبر 2026. لا تشترط الخبرة (التدريب مذكور في الإعلان)، وتشترط رخصة Class 1 أو A واللغة الإنجليزية. Job Bank يذكر أن مرشحين آخرين، بمن فيهم من لا يملكون تصريح عمل كندياً حالياً، يمكنهم التقديم. حالة LMIA: طلب قيد المعالجة وليست موافقة.@elseif($locale==='es')Publicado el 14 de noviembre de 2026; cierre el 28 de noviembre de 2026. No exige experiencia (el anuncio indica formación), pero requiere licencia Class 1 o A e inglés. Job Bank permite solicitar a otros candidatos, incluso sin permiso de trabajo canadiense vigente. LMIA solicitada y en revisión, no aprobada.@elseif($locale==='fr')Publiée le 14 novembre 2026 ; clôture le 28 novembre 2026. Aucune expérience exigée (formation indiquée), mais permis Class 1 ou A et anglais requis. Guichet-Emplois autorise aussi d’autres candidats, même sans permis de travail canadien actuel. EIMT/LMIA demandée et en cours d’examen, non approuvée.@else Posted 14 November 2026; closes 28 November 2026. No experience required (training is indicated in the listing), but a Class 1 or A licence and English are required. Job Bank says other candidates, including those without a current Canadian work permit, may apply. LMIA requested and under review, not approved. @endif</p>
<a href="https://www.jobbank.gc.ca/jobsearch/jobposting/50730827" target="_blank" rel="noopener">@if($locale==='ar')الإعلان الحكومي والتقديم @elseif($locale==='es')Anuncio oficial y solicitud @elseif($locale==='fr')Annonce officielle et candidature @else Official Job Bank listing and application @endif</a>
</div>
<div class="card warning">
<h3>CADY LINES LTD — Winnipeg, Manitoba</h3>
<p>@if($locale==='ar')10 مناصب، 32.50 دولاراً/ساعة، LMIA قيد المراجعة، آخر أجل 6 ديسمبر 2026. لكن الإعلان يقبل فقط المواطنين الكنديين والمقيمين الدائمين والمقيمين المؤقتين الحاصلين على تصريح عمل صالح؛ لذلك لا يناسب المتقدم من المغرب حالياً.@elseif($locale==='es')10 puestos, 32,50 CAD/hora, LMIA en revisión, cierre 6 de diciembre de 2026. Solo acepta ciudadanos canadienses, residentes permanentes o residentes temporales con permiso de trabajo válido; no es adecuada para solicitantes desde Marruecos.@elseif($locale==='fr')10 postes, 32,50 CAD/heure, EIMT en cours d’examen, clôture le 6 décembre 2026. Seuls les citoyens canadiens, résidents permanents ou résidents temporaires titulaires d’un permis valide peuvent postuler ; cette offre ne convient pas aux candidats du Maroc.@else 10 vacancies, CAD $32.50/hour, LMIA under review, closing 6 December 2026. Only Canadian citizens, permanent residents or temporary residents with a valid work permit may apply; it is not open to applicants currently in Morocco. @endif</p>
<a href="https://www.jobbank.gc.ca/jobsearch/jobpostingtfw/50736921" target="_blank" rel="noopener">Job Bank</a>
</div>
<div class="card warning">
<h3>RAJ FREIGHTLINES LTD — Tecumseh, Ontario</h3>
<p>@if($locale==='ar')3 مناصب، 37 دولاراً/ساعة، LMIA قيد المراجعة، آخر أجل 1 ديسمبر 2026. يشترط خبرة سنة إلى أقل من سنتين ورخصة AZ / Class 1 أو A والإنجليزية. الإعلان يقبل فقط من يملك حق العمل في كندا؛ لا يُنصح بالتقديم من المغرب.@elseif($locale==='es')3 puestos, 37 CAD/hora, LMIA en revisión, cierre 1 de diciembre de 2026. Exige entre 1 y menos de 2 años de experiencia, licencia AZ/Class 1 o A e inglés. Solo acepta personas autorizadas para trabajar en Canadá; no se recomienda solicitar desde Marruecos.@elseif($locale==='fr')3 postes, 37 CAD/heure, EIMT en cours d’examen, clôture le 1er décembre 2026. Exige 1 à moins de 2 ans d’expérience, permis AZ/Class 1 ou A et anglais. Seules les personnes autorisées à travailler au Canada peuvent postuler ; candidature depuis le Maroc déconseillée.@else 3 vacancies, CAD $37/hour, LMIA under review, closing 1 December 2026. Requires 1 to less than 2 years of experience, an AZ/Class 1 or A licence and English. Only people authorized to work in Canada may apply; applying from Morocco is not recommended. @endif</p>
<a href="https://www.jobbank.gc.ca/jobsearch/jobpostingtfw/50748440" target="_blank" rel="noopener">Job Bank</a>
</div>
<p><small>@if($locale==='ar')أهلية التقديم لا تعني ضمان موافقة LMIA أو تصريح العمل. تحقق من شروط رخصة الشاحنات في المقاطعة قبل السفر.@elseif($locale==='es')Poder solicitar el puesto no garantiza la aprobación de LMIA ni el permiso de trabajo. Compruebe los requisitos provinciales antes de viajar.@elseif($locale==='fr')L’admissibilité à la candidature ne garantit ni l’approbation de l’EIMT ni le permis de travail. Vérifiez les exigences provinciales avant tout déplacement.@else Eligibility to apply does not guarantee LMIA approval or a work permit. Check provincial commercial-driving licence requirements before travelling. @endif</small></p>
</section>
<section class="card">
<h2>{{ $t['law'] }}</h2>
<h3>{{ $t['permit'] }}</h3><p>{{ $t['permit_text'] }}</p>
<h3>{{ $t['lmia'] }}</h3><p>{{ $t['lmia_text'] }}</p>
<h3>{{ $t['rights'] }}</h3><p>{{ $t['rights_text'] }}</p>
<h3>{{ $t['licence'] }}</h3><p>{{ $t['licence_text'] }}</p>
</section>
<section class="card">
<h2>{{ $t['francophone_title'] }}</h2>
<p>{{ $t['francophone_text'] }}</p>
<h3>{{ $t['family_title'] }}</h3>
<p>{{ $t['family_text'] }}</p>
<h3>{{ $t['age_title'] }}</h3>
<p>{{ $t['age_text'] }}</p>
<h3>{{ $t['express_entry_title'] }}</h3>
<p>{{ $t['express_entry_text'] }}</p>
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
<a href="https://www.ontario.ca/page/mandatory-training-class-drivers-licence-applicants" target="_blank" rel="noopener">@if($locale==='ar')أونتاريو — التدريب الإلزامي لرخصة الشاحنات Class A @elseif($locale==='es')Ontario — formación obligatoria para la licencia Class A @elseif($locale==='fr')Ontario — formation obligatoire pour le permis de classe A @else Ontario — mandatory training for a Class A truck licence @endif</a>
<a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/work-canada/special-instructions/francophone-mobility/eligibility.html" target="_blank" rel="noopener">{{ $t['francophone_source'] }}</a>
<a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/work-canada/special-instructions/francophone-mobility/apply.html" target="_blank" rel="noopener">{{ $t['francophone_apply_source'] }}</a>
<a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/work-canada/special-instructions/spouses-dependent-children/eligibility.html" target="_blank" rel="noopener">{{ $t['family_source'] }}</a>
<a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/study-canada/study-permit/prepare/minor-children.html" target="_blank" rel="noopener">{{ $t['children_source'] }}</a>
<a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/who-can-apply/federal-skilled-workers.html" target="_blank" rel="noopener">{{ $t['age_source'] }}</a>
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
