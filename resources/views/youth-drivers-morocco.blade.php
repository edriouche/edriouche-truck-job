@include("partials.language-switcher")
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ app()->getLocale() === 'es' ? 'Jóvenes conductores | Edriouche Truck Job' : (app()->getLocale() === 'fr' ? 'Jeunes conducteurs | Edriouche Truck Job' : 'الشباب وبداية المسار المهني | Edriouche Truck Job') }}</title>
<meta name="description" content="معلومات وروابط رسمية تساعد الشباب في المغرب على بدء مسارهم في النقل الطرقي واللوجستيك.">
<style>
*{box-sizing:border-box}body{margin:0;font-family:Arial,Tahoma,sans-serif;background:#f4f7fb;color:#172033;line-height:1.85}
header{background:#0b3a68;color:#fff;padding:24px 16px;text-align:center}header h1{margin:0 0 8px;font-size:clamp(24px,4vw,34px)}header p{margin:0;color:#e5eef8}
main{max-width:1000px;margin:auto;padding:24px 16px 48px}.back{display:inline-block;background:#fff;color:#0b3a68;padding:10px 16px;border-radius:10px;font-weight:bold;text-decoration:none;border:1px solid #dbe4ee}
.intro,.card,.warning{background:#fff;border:1px solid #e1e8f0;border-radius:16px;padding:22px;margin-top:18px;box-shadow:0 4px 14px rgba(15,23,42,.05)}
h2{color:#0b3a68;margin-top:0}.grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px}.card p{margin:8px 0;color:#475569}.action{display:inline-block;margin-top:10px;background:#0b3a68;color:#fff;padding:10px 14px;border-radius:9px;text-decoration:none;font-weight:bold}.action:hover{background:#f4b324;color:#172033}
.warning{background:#fff8e7;border-color:#e9c66c}.small{font-size:14px;color:#64748b}
@media(max-width:650px){.grid{grid-template-columns:1fr}main{padding:18px 12px 36px}.intro,.card,.warning{padding:18px}}
</style></head><body>
<header>
@if(app()->getLocale() === 'es')
<h1>🇲🇦 Jóvenes conductores: empieza tu camino profesional</h1><p>Formación, contactos directos e información fiable para entrar en el transporte por carretera.</p>
@elseif(app()->getLocale() === 'fr')
<h1>🇲🇦 Jeunes conducteurs : commencez votre parcours professionnel</h1><p>Formation, contacts directs et informations fiables pour entrer dans le transport routier.</p>
@else
<h1>🇲🇦 الشباب السائقون: بداية المسار المهني</h1><p>التكوين، التواصل المباشر، ومعلومات موثوقة لدخول مهنة النقل الطرقي.</p>
@endif
</header><main>
<a class="back" href="/">⬅️ {{ app()->getLocale() === 'es' ? 'Volver al inicio' : (app()->getLocale() === 'fr' ? 'Retour à l’accueil' : 'العودة إلى الصفحة الرئيسية') }}</a>
<section class="intro">
@if(app()->getLocale() === 'es')
<h2>Un camino realista para empezar</h2><p>Antes de solicitar un empleo, comprueba que tu permiso, tarjeta profesional, formación y experiencia corresponden al puesto. Si estás empezando, consulta las vías oficiales de formación y pregunta a las empresas por puestos iniciales o procesos de selección.</p>
@elseif(app()->getLocale() === 'fr')
<h2>Un parcours réaliste pour débuter</h2><p>Avant de postuler, vérifiez que votre permis, carte professionnelle, formation et expérience correspondent au poste. Si vous débutez, consultez les formations officielles et demandez aux entreprises s’il existe des postes débutants ou des procédures de recrutement.</p>
@else
<h2>كيف يبدأ الشاب طريقه نحو مهنة السياقة؟</h2><p>قبل طلب العمل، تأكد من أن رخصة السياقة والبطاقة المهنية والتكوين والخبرة تتناسب مع المنصب. وإذا كنت في بداية الطريق، استفسر عن التكوين المعتمد، ثم تواصل مباشرة مع الشركات واسأل عن فرص المبتدئين وشروط الانتقاء.</p>
@endif
</section>
<div class="grid">
<section class="card"><div style="font-size:30px">🎓</div>
@if(app()->getLocale() === 'es')
<h2>IFTL — Formación en transporte y logística</h2><p>Consulta los itinerarios y requisitos oficiales, incluidos los programas de cualificación de conductor de transporte de mercancías por carretera. Comprueba las fechas y condiciones antes de inscribirte.</p><a class="action" href="https://iftl.ma/inscription-en-ligne/" target="_blank" rel="noopener noreferrer">Consultar formación oficial ↗</a>
@elseif(app()->getLocale() === 'fr')
<h2>IFTL — Formation transport et logistique</h2><p>Consultez les filières et conditions officielles, notamment la qualification de conducteur routier de marchandises. Vérifiez les dates et conditions avant l’inscription.</p><a class="action" href="https://iftl.ma/inscription-en-ligne/" target="_blank" rel="noopener noreferrer">Voir les formations officielles ↗</a>
@else
<h2>معهد IFTL — التكوين في النقل واللوجستيك</h2><p>اطّلع على المسارات والشروط الرسمية، ومنها التأهيل في سياقة نقل البضائع عبر الطرق. تحقق من مواعيد التسجيل وشروطه الحالية قبل تقديم الطلب.</p><a class="action" href="https://iftl.ma/inscription-en-ligne/" target="_blank" rel="noopener noreferrer">الاطلاع على التكوين والتسجيل ↗</a>
@endif
</section>
<section class="card"><div style="font-size:30px">🚚</div>
@if(app()->getLocale() === 'es')
<h2>CTM Messagerie — Empleo y candidatura</h2><p>Consulta las carreras, ofertas y candidaturas espontáneas publicadas por la empresa. Lee los requisitos y utiliza los canales oficiales.</p><a class="action" href="https://ctm.eleven.ma/fr/nous-rejoindre/carrieres" target="_blank" rel="noopener noreferrer">Empleo y candidaturas ↗</a>
@elseif(app()->getLocale() === 'fr')
<h2>CTM Messagerie — Emploi et candidature</h2><p>Consultez les carrières, offres et candidatures spontanées de la société. Lisez les conditions et utilisez les canaux officiels.</p><a class="action" href="https://ctm.eleven.ma/fr/nous-rejoindre/carrieres" target="_blank" rel="noopener noreferrer">Offres et candidatures ↗</a>
@else
<h2>CTM Messagerie — التوظيف والترشيح</h2><p>تعرض الشركة معلومات عن المسارات المهنية وعروض العمل والترشيحات التلقائية. اقرأ شروط كل منصب وقدّم طلبك عبر القنوات الرسمية فقط.</p><a class="action" href="https://ctm.eleven.ma/fr/nous-rejoindre/carrieres" target="_blank" rel="noopener noreferrer">صفحة التوظيف والترشيح ↗</a>
@endif
</section>
<section class="card"><div style="font-size:30px">🚌</div>
@if(app()->getLocale() === 'es')
<h2>ALSA — Centro de formación</h2><p>Consulta la formación profesional de ALSA Marruecos y confirma con el centro qué programas están abiertos actualmente.</p><a class="action" href="https://www.alsa.ma/en/training-center" target="_blank" rel="noopener noreferrer">Centro de formación ↗</a>
@elseif(app()->getLocale() === 'fr')
<h2>ALSA — Centre de formation</h2><p>Consultez les formations professionnelles d’ALSA Maroc et confirmez auprès du centre les programmes actuellement ouverts.</p><a class="action" href="https://www.alsa.ma/centre-de-formation" target="_blank" rel="noopener noreferrer">Centre de formation ↗</a>
@else
<h2>ALSA المغرب — مركز تكوين السائقين</h2><p>تعرّف على برامج التكوين المهني التي تنشرها ألزا المغرب. اتصل بالمركز للتأكد من البرامج المفتوحة حاليًا.</p><a class="action" href="https://www.alsa.ma/ar/centre-de-formation" target="_blank" rel="noopener noreferrer">مركز تكوين السائقين ↗</a>
@endif
</section>
<section class="card"><div style="font-size:30px">🏢</div>
@if(app()->getLocale() === 'es')
<h2>Empresas de transporte en Marruecos</h2><p>Consulta la lista de empresas y pregunta directamente por puestos, requisitos, experiencia y proceso de selección.</p><a class="action" href="/companies">Ver empresas y oportunidades ↗</a>
@elseif(app()->getLocale() === 'fr')
<h2>Entreprises de transport au Maroc</h2><p>Consultez la liste et demandez directement les postes disponibles, les conditions, l’expérience requise et le recrutement.</p><a class="action" href="/companies">Voir les entreprises et opportunités ↗</a>
@else
<h2>تواصل مع شركات النقل المغربية</h2><p>تصفّح قائمة الشركات في موقعنا، واسألها مباشرة عن مناصب السائقين والشروط والخبرة المطلوبة وطريقة الانتقاء.</p><a class="action" href="/companies">عرض الشركات وفرص العمل ↗</a>
@endif
</section></div>
<section class="warning">
@if(app()->getLocale() === 'es')
<h2>⚠️ Información importante</h2><p>La presencia de una empresa o centro no significa que tenga vacantes abiertas ni garantiza empleo. No pagues a intermediarios por promesas de contrato o visado; verifica cada oferta con la entidad oficial.</p><p class="small">El proyecto europeo SDM4EU II contempla una vía profesional Marruecos–Italia para conductores seleccionados y preparados; no es una oferta abierta a todos ni garantiza selección.</p><a href="https://www.iru.org/what-we-do/being-trusted-voice-mobility-and-logistics/eu-research-innovation-projects/SDM4EU-II" target="_blank" rel="noopener noreferrer">Información oficial de IRU ↗</a>
@elseif(app()->getLocale() === 'fr')
<h2>⚠️ Information importante</h2><p>La présence d’une entreprise ou d’un centre ne signifie pas qu’un poste est vacant et ne garantit aucun emploi. Ne payez pas d’intermédiaire pour une promesse de contrat ou de visa; vérifiez chaque offre auprès de l’organisme officiel.</p><p class="small">Le projet européen SDM4EU II prévoit une voie professionnelle Maroc–Italie pour des conducteurs sélectionnés et préparés ; il ne s’agit pas d’une offre ouverte à tous et la sélection n’est pas garantie.</p><a href="https://www.iru.org/what-we-do/being-trusted-voice-mobility-and-logistics/eu-research-innovation-projects/SDM4EU-II" target="_blank" rel="noopener noreferrer">Informations officielles de l’IRU ↗</a>
@else
<h2>⚠️ تنبيه مهم لحماية الشباب</h2><p>وجود شركة أو مركز هنا لا يعني أن لديه منصبًا شاغرًا الآن، ولا يضمن التوظيف. لا تدفع المال لأي وسيط مقابل وعد بعقد عمل أو تأشيرة. تحقق من كل إعلان مباشرة لدى الشركة أو المؤسسة الرسمية.</p><p class="small">أعلنت منظمة النقل البري الدولية IRU عن مشروع أوروبي SDM4EU II يتضمن مسارًا مهنيًا بين المغرب وإيطاليا لسائقين يتم اختيارهم وإعدادهم؛ لكنه ليس عرضًا مفتوحًا للجميع ولا يضمن القبول.</p><a href="https://www.iru.org/what-we-do/being-trusted-voice-mobility-and-logistics/eu-research-innovation-projects/SDM4EU-II" target="_blank" rel="noopener noreferrer">المصدر الرسمي لمنظمة IRU ↗</a>
@endif
</section>
</main>
</body>
</html>
