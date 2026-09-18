@include("partials.language-switcher")
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @if(app()->getLocale() === 'es')
        <title>Formación para conductores | Edriouche Truck Job</title>
    @elseif(app()->getLocale() === 'fr')
        <title>Formation des conducteurs | Edriouche Truck Job</title>
    @else
        <title>تكوين السائقين | Edriouche Truck Job</title>
    @endif

    <style>
        body{margin:0;font-family:Arial,sans-serif;background:#f4f6f8;color:#222;line-height:1.8}
        header{background:#111827;color:white;text-align:center;padding:30px 20px}
        header h1{margin:0 0 10px}
        .container{max-width:1050px;margin:20px auto;padding:20px}
        .back{display:inline-block;margin-bottom:20px;color:#111827;text-decoration:none;font-weight:bold}
        .intro,.card,.warning{background:white;padding:22px;margin-bottom:20px;border-radius:12px;box-shadow:0 2px 8px rgba(0,0,0,.08)}
        .card h2{margin-top:0;color:#0b3a68}
        .cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:16px}
        .center{background:#fff;padding:18px;margin-bottom:12px;border-radius:10px}
        .button{display:inline-block;margin:8px 4px;padding:11px 18px;background:#111827;color:white;text-decoration:none;border-radius:8px}
        .warning{border-right:5px solid #d4af37}
        ul,ol{padding-inline-start:28px}
        .training-note{background:#eef6ff;border-right:5px solid #0b3a68;padding:18px;border-radius:10px;margin-bottom:20px}
        footer{text-align:center;padding:25px;color:#666}
    </style>
</head>

<body>

<header>
@if(app()->getLocale() === 'es')
    <h1>🚛 Formación y desarrollo profesional de conductores</h1>
    <p>Edriouche Truck Job</p>
@elseif(app()->getLocale() === 'fr')
    <h1>🚛 Formation et développement professionnel des conducteurs</h1>
    <p>Edriouche Truck Job</p>
@else
    <h1>🚛 تكوين وتطوير السائقين المهنيين</h1>
    <p>Edriouche Truck Job</p>
@endif
</header>

<div class="container">

<a class="back" href="/">
@if(app()->getLocale() === 'es') ⬅️ Volver a la página principal
@elseif(app()->getLocale() === 'fr') ⬅️ Retour à l'accueil
@else ⬅️ العودة إلى الرئيسية
@endif
</a>

@if(app()->getLocale() === 'es')

<div class="intro">
<h2>🎓 Formación profesional para conductores</h2>
<p>Esta sección ofrece conocimientos prácticos para conductores principiantes y profesionales. El objetivo es mejorar la seguridad, el control del vehículo, el ahorro de combustible y la responsabilidad profesional.</p>
<a class="button" href="https://www.ofppt.ma/" target="_blank">🌐 Sitio oficial OFPPT</a>
</div>

<div class="training-note"><strong>Importante:</strong> La formación en esta página es educativa. Siempre deben respetarse las leyes, las instrucciones del fabricante, las normas de la empresa y las condiciones reales de la carretera.</div>

<div class="cards">

<div class="card"><h2>🛡️ 1. Conducción defensiva</h2>
<p>La conducción defensiva consiste en anticiparse a los riesgos y no depender de que los demás usuarios actúen correctamente.</p>
<ul><li>Mantener una distancia de seguridad suficiente.</li><li>Adaptar la velocidad a la carga, carretera, tráfico y meteorología.</li><li>Controlar regularmente los espejos y los ángulos muertos.</li><li>Anticipar frenadas, cambios de carril y errores de otros usuarios.</li><li>No conducir con fatiga, somnolencia o distracciones.</li><li>En una situación peligrosa, reducir la velocidad y buscar una salida segura.</li></ul>
</div>

<div class="card"><h2>⛽ 2. Conducción económica</h2>
<p>La conducción económica busca reducir el consumo y el desgaste sin comprometer la seguridad.</p>
<ul><li>Acelerar progresivamente y evitar aceleraciones innecesarias.</li><li>Mantener una velocidad estable cuando las condiciones lo permitan.</li><li>Usar correctamente las marchas y los sistemas de retención.</li><li>Evitar frenadas y aceleraciones repetidas que podrían anticiparse.</li><li>Comprobar la presión de los neumáticos.</li><li>Realizar el mantenimiento correctamente.</li><li>No buscar ahorro mediante una conducción peligrosa.</li></ul>
</div>

<div class="card"><h2>↩️ 3. Marcha atrás con camión y remolque</h2>
<p>La marcha atrás requiere paciencia, velocidad muy baja y control constante.</p>
<ul><li>Comprobar la zona antes de comenzar.</li><li>Ajustar los espejos y conocer los ángulos muertos.</li><li>Comprender que el remolque puede desplazarse en dirección contraria al movimiento inicial del volante.</li><li>Hacer maniobras pequeñas y corregir progresivamente.</li><li>Usar un señalista cuando sea necesario.</li><li>Detenerse inmediatamente si se pierde la visibilidad o existe duda.</li><li>No sacrificar la seguridad para terminar rápidamente la maniobra.</li></ul>
</div>

<div class="card"><h2>🛑 4. Frenado y control del camión</h2>
<p>El peso y la carga influyen directamente en la distancia de frenado y el comportamiento del vehículo.</p>
<ul><li>Mantener una distancia suficiente.</li><li>Anticipar las situaciones que requieren frenado.</li><li>Usar correctamente el freno motor o retarder cuando el vehículo disponga de ellos.</li><li>En descensos prolongados, evitar depender únicamente del freno de servicio.</li><li>Controlar la velocidad antes de entrar en una curva o descenso.</li></ul>
</div>

<div class="card"><h2>⚖️ 5. Carga y distribución del peso</h2>
<p>Una carga mal distribuida puede afectar a la estabilidad, frenado y comportamiento del conjunto.</p>
<ul><li>Respetar los límites legales de peso.</li><li>Distribuir la carga correctamente.</li><li>Asegurar la mercancía según su naturaleza.</li><li>Comprobar puertas, cierres y elementos de sujeción.</li><li>Volver a comprobar la carga después de una parada cuando sea necesario.</li></ul>
</div>

<div class="card"><h2>🔧 6. Inspección antes de salir</h2>
<p>Antes de iniciar un viaje, el conductor debe comprobar que el vehículo y el remolque están en condiciones adecuadas.</p>
<ul><li>Neumáticos y posibles daños.</li><li>Frenos y conexiones.</li><li>Luces e indicadores.</li><li>Niveles y posibles fugas.</li><li>Espejos, puertas y elementos de seguridad.</li><li>Conexiones entre tractor y remolque.</li></ul>
</div>

<div class="card"><h2>🌧️ 7. Conducción en condiciones difíciles</h2>
<p>La lluvia, niebla, viento, nieve y carreteras de montaña requieren adaptación de velocidad y distancia.</p>
<ul><li>Reducir la velocidad cuando disminuye la visibilidad o adherencia.</li><li>Aumentar la distancia de seguridad.</li><li>Prestar especial atención al viento lateral con vehículos altos.</li><li>Evitar maniobras bruscas.</li><li>En condiciones peligrosas, detenerse en un lugar seguro si continuar no es razonable.</li></ul>
</div>

<div class="card"><h2>🪞 8. Espejos y ángulos muertos</h2>
<p>Los vehículos pesados tienen zonas que el conductor no puede observar directamente.</p>
<ul><li>Revisar los espejos antes de cambiar de dirección o carril.</li><li>No confiar únicamente en un espejo.</li><li>Comprobar cuidadosamente antes de girar a la derecha.</li><li>Recordar que motocicletas, bicicletas y peatones pueden quedar ocultos.</li><li>Utilizar correctamente los sistemas de asistencia disponibles.</li></ul>
</div>

<div class="card"><h2>📋 9. Documentos y responsabilidad profesional</h2>
<p>El conductor profesional debe conocer y controlar la documentación necesaria para su viaje.</p>
<ul><li>Documentación personal y permiso de conducción.</li><li>Documentos del vehículo y remolque.</li><li>Documentos relacionados con la mercancía.</li><li>Documentación exigida para el transporte internacional cuando corresponda.</li><li>Comprobar la información antes de salir y comunicar cualquier irregularidad.</li></ul>
</div>

<div class="card"><h2>🎓 10. Test del conductor</h2>
<p>Después de estudiar los temas, el conductor puede comprobar sus conocimientos con preguntas sobre seguridad, frenado, carga, marcha atrás, consumo y documentación.</p>
<ol><li>¿Qué debe hacer si pierde la visión durante una maniobra marcha atrás?</li><li>¿Por qué es importante aumentar la distancia de seguridad con un vehículo pesado?</li><li>¿Qué elementos deben revisarse antes de iniciar un viaje?</li><li>¿Cómo influye una carga mal distribuida?</li><li>¿Por qué no debe buscarse el ahorro de combustible mediante una conducción peligrosa?</li></ol>
</div>

</div>

<div class="card">
<h2>🏫 Formación OFPPT</h2>
<p>OFPPT ofrece formación profesional relacionada con transporte por carretera y logística. Deben comprobarse directamente las especialidades y plazas disponibles.</p>
</div>

@elseif(app()->getLocale() === 'fr')

<div class="intro">
<h2>🎓 Formation professionnelle des conducteurs</h2>
<p>Cette section présente des connaissances pratiques pour les conducteurs débutants et professionnels. L'objectif est d'améliorer la sécurité, le contrôle du véhicule, l'économie de carburant et la responsabilité professionnelle.</p>
<a class="button" href="https://www.ofppt.ma/" target="_blank">🌐 Site officiel OFPPT</a>
</div>

<div class="training-note"><strong>Important :</strong> Ces informations sont éducatives. Il faut toujours respecter la législation, les instructions du constructeur, les règles de l'entreprise et les conditions réelles de circulation.</div>

<div class="cards">

<div class="card"><h2>🛡️ 1. Conduite défensive</h2>
<p>La conduite défensive consiste à anticiper les risques et à ne pas supposer que les autres usagers agiront toujours correctement.</p>
<ul><li>Maintenir une distance de sécurité suffisante.</li><li>Adapter la vitesse à la charge, à la route, au trafic et à la météo.</li><li>Contrôler régulièrement les rétroviseurs et les angles morts.</li><li>Anticiper les freinages, changements de voie et erreurs des autres usagers.</li><li>Ne pas conduire en cas de fatigue, somnolence ou distraction.</li><li>En situation dangereuse, ralentir et rechercher une solution sûre.</li></ul>
</div>

<div class="card"><h2>⛽ 2. Conduite économique</h2>
<p>La conduite économique vise à réduire la consommation et l'usure sans compromettre la sécurité.</p>
<ul><li>Accélérer progressivement.</li><li>Maintenir une vitesse régulière lorsque les conditions le permettent.</li><li>Utiliser correctement les rapports et les systèmes de ralentissement.</li><li>Éviter les accélérations et freinages inutiles.</li><li>Contrôler la pression des pneus.</li><li>Respecter l'entretien du véhicule.</li><li>Ne jamais rechercher l'économie au détriment de la sécurité.</li></ul>
</div>

<div class="card"><h2>↩️ 3. Marche arrière avec camion et remorque</h2>
<p>La marche arrière exige patience, très faible vitesse et contrôle permanent.</p>
<ul><li>Vérifier la zone avant de commencer.</li><li>Régler les rétroviseurs et connaître les angles morts.</li><li>Comprendre la réaction de la remorque aux mouvements du volant.</li><li>Effectuer de petites corrections progressives.</li><li>Utiliser un guide lorsque cela est nécessaire.</li><li>S'arrêter immédiatement en cas de perte de visibilité ou de doute.</li><li>Ne jamais privilégier la rapidité au détriment de la sécurité.</li></ul>
</div>

<div class="card"><h2>🛑 4. Freinage et contrôle du camion</h2>
<p>Le poids et la charge influencent directement la distance de freinage et le comportement du véhicule.</p>
<ul><li>Conserver une distance suffisante.</li><li>Anticiper les situations nécessitant un freinage.</li><li>Utiliser correctement le frein moteur ou le ralentisseur lorsque le véhicule en est équipé.</li><li>Dans les longues descentes, ne pas dépendre uniquement du frein de service.</li><li>Contrôler la vitesse avant les virages et les descentes.</li></ul>
</div>

<div class="card"><h2>⚖️ Charge et répartition du poids</h2>
<p>Une charge mal répartie peut affecter la stabilité, le freinage et le comportement de l'ensemble routier.</p>
<ul><li>Respecter les limites légales de poids.</li><li>Répartir correctement la charge.</li><li>Arrimer la marchandise selon sa nature.</li><li>Contrôler les portes, fermetures et dispositifs d'arrimage.</li><li>Vérifier la charge après un arrêt lorsque cela est nécessaire.</li></ul>
</div>

<div class="card"><h2>🔧 Contrôle avant le départ</h2>
<p>Avant un trajet, le conducteur doit vérifier que le véhicule et la remorque sont en état approprié.</p>
<ul><li>Pneus et dommages éventuels.</li><li>Freins et connexions.</li><li>Feux et indicateurs.</li><li>Niveaux et éventuelles fuites.</li><li>Rétroviseurs, portes et éléments de sécurité.</li><li>Connexions entre le tracteur et la remorque.</li></ul>
</div>

<div class="card"><h2>🌧️ Conduite dans des conditions difficiles</h2>
<p>La pluie, le brouillard, le vent, la neige et les routes montagneuses nécessitent une adaptation de la vitesse et des distances.</p>
<ul><li>Réduire la vitesse lorsque la visibilité ou l'adhérence diminuent.</li><li>Augmenter la distance de sécurité.</li><li>Être particulièrement attentif au vent latéral avec les véhicules hauts.</li><li>Éviter les manœuvres brusques.</li><li>Si les conditions deviennent dangereuses, s'arrêter dans un endroit sûr.</li></ul>
</div>

<div class="card"><h2>🪞 Rétroviseurs et angles morts</h2>
<p>Les véhicules lourds possèdent des zones qui ne peuvent pas être observées directement par le conducteur.</p>
<ul><li>Vérifier les rétroviseurs avant un changement de direction ou de voie.</li><li>Ne pas dépendre d'un seul rétroviseur.</li><li>Être particulièrement prudent lors des virages à droite.</li><li>Se rappeler que les motos, vélos et piétons peuvent être masqués.</li><li>Utiliser correctement les systèmes d'assistance disponibles.</li></ul>
</div>

<div class="card"><h2>📋 Documents et responsabilité professionnelle</h2>
<p>Le conducteur professionnel doit connaître et contrôler les documents nécessaires à son trajet.</p>
<ul><li>Documents personnels et permis de conduire.</li><li>Documents du véhicule et de la remorque.</li><li>Documents liés à la marchandise.</li><li>Documents requis pour le transport international lorsque cela s'applique.</li><li>Vérifier les informations avant le départ et signaler toute anomalie.</li></ul>
</div>

<div class="card"><h2>🎓 Test du conducteur</h2>
<p>Après l'étude des thèmes, le conducteur peut vérifier ses connaissances avec des questions sur la sécurité, le freinage, la charge, la marche arrière, la consommation et les documents.</p>
<ol><li>Que faire si la visibilité est perdue pendant une marche arrière ?</li><li>Pourquoi augmenter la distance de sécurité avec un poids lourd ?</li><li>Quels éléments contrôler avant un trajet ?</li><li>Comment une mauvaise répartition de la charge influence-t-elle le véhicule ?</li><li>Pourquoi ne faut-il jamais économiser du carburant au détriment de la sécurité ?</li></ol>
</div>

</div>

<div class="card">
<h2>🏫 Formation OFPPT</h2>
<p>L'OFPPT propose des formations liées au transport routier et à la logistique. Il faut vérifier directement les spécialités et les places disponibles.</p>
</div>

@else

<div class="intro">
<h2>🎓 التكوين المهني للسائقين</h2>
<p>هذه الصفحة تقدم معلومات عملية للسائقين المبتدئين والمهنيين بهدف تحسين السلامة، التحكم في الشاحنة، الاقتصاد في الوقود والمسؤولية المهنية.</p>
<a class="button" href="https://www.ofppt.ma/" target="_blank">🌐 الموقع الرسمي لـ OFPPT</a>
</div>

<div class="training-note"><strong>مهم:</strong> هذه المعلومات للتكوين والتوعية. يجب دائمًا احترام القوانين، وتعليمات الشركة والمُصنّع، وظروف الطريق الفعلية.</div>

<div class="cards">

<div class="card"><h2>🛡️ 1. السياقة الدفاعية</h2>
<p>السياقة الدفاعية تعني توقع المخاطر وعدم افتراض أن مستعملي الطريق الآخرين سيتصرفون دائمًا بالشكل الصحيح.</p>
<ul><li>الحفاظ على مسافة أمان مناسبة.</li><li>تكييف السرعة مع الحمولة والطريق والمرور والطقس.</li><li>مراقبة المرايا والنقاط العمياء باستمرار.</li><li>توقع الفرملة وتغيير المسار وأخطاء الآخرين.</li><li>عدم القيادة مع التعب أو النعاس أو التشتت.</li><li>عند الخطر: تخفيف السرعة والبحث عن تصرف آمن.</li></ul>
</div>

<div class="card"><h2>⛽ 2. السياقة الاقتصادية</h2>
<p>السياقة الاقتصادية تهدف إلى تقليل استهلاك الوقود وتآكل الشاحنة دون التضحية بالسلامة.</p>
<ul><li>التسارع تدريجيًا وتجنب التسارع غير الضروري.</li><li>الحفاظ على سرعة مستقرة عندما تسمح الظروف.</li><li>استعمال السرعات وأنظمة التباطؤ بطريقة صحيحة.</li><li>تجنب الفرملة والتسارع المتكرر الذي يمكن توقعه.</li><li>فحص ضغط الإطارات.</li><li>الالتزام بالصيانة الدورية.</li><li>عدم محاولة توفير الوقود بطريقة تعرض السائق أو الآخرين للخطر.</li></ul>
</div>

<div class="card"><h2>↩️ 3. الرجوع إلى الخلف بالشاحنة والمقطورة</h2>
<p>الرجوع إلى الخلف يحتاج إلى الصبر والسرعة البطيئة والتحكم المستمر.</p>
<ul><li>فحص المنطقة قبل بداية المناورة.</li><li>ضبط المرايا ومعرفة النقاط العمياء.</li><li>فهم حركة المقطورة عند تحريك المقود.</li><li>إجراء تصحيحات صغيرة وتدريجية.</li><li>الاستعانة بمراقب عند الحاجة.</li><li>التوقف فورًا عند فقدان الرؤية أو وجود شك.</li><li>عدم التضحية بالسلامة من أجل إنهاء المناورة بسرعة.</li></ul>
</div>

<div class="card"><h2>🛑 4. الفرملة والتحكم في الشاحنة</h2>
<p>وزن الشاحنة والحمولة يؤثران مباشرة على مسافة التوقف وسلوك المركبة.</p>
<ul><li>الحفاظ على مسافة أمان كافية.</li><li>توقع الحالات التي تحتاج إلى الفرملة.</li><li>استعمال فرامل المحرك أو الريتاردر بطريقة صحيحة إذا كانت الشاحنة مجهزة بهما.</li><li>في المنحدرات الطويلة لا تعتمد فقط على فرامل الخدمة.</li><li>التحكم في السرعة قبل المنعطفات والمنحدرات.</li></ul>
</div>

<div class="card"><h2>⚖️ الحمولة وتوزيع الوزن</h2>
<p>الحمولة غير المتوازنة قد تؤثر على الثبات والفرملة والتحكم في الشاحنة والمقطورة.</p>
<ul><li>احترام حدود الوزن القانونية.</li><li>توزيع الحمولة بشكل صحيح.</li><li>تثبيت البضائع حسب طبيعتها.</li><li>فحص الأبواب وأدوات الإغلاق والتثبيت.</li><li>إعادة فحص الحمولة بعد التوقف عند الحاجة.</li></ul>
</div>

<div class="card"><h2>🔧 6. فحص الشاحنة قبل الانطلاق</h2>
<p>قبل الرحلة يجب التأكد من أن الشاحنة والمقطورة في حالة مناسبة وآمنة للسير.</p>
<ul><li>الإطارات وأي أضرار ظاهرة.</li><li>الفرامل والوصلات.</li><li>الأضواء والإشارات.</li><li>مستويات السوائل وأي تسرب.</li><li>المرايا والأبواب وعناصر السلامة.</li><li>وصلات الجر بين الشاحنة والمقطورة.</li></ul>
</div>

<div class="card"><h2>🌧️ 7. القيادة في الظروف الصعبة</h2>
<p>المطر والضباب والرياح والثلوج والطرق الجبلية تحتاج إلى تكييف السرعة ومسافة الأمان.</p>
<ul><li>تخفيض السرعة عند انخفاض الرؤية أو تماسك الطريق.</li><li>زيادة مسافة الأمان.</li><li>الانتباه بشكل خاص للرياح الجانبية مع المركبات المرتفعة.</li><li>تجنب المناورات المفاجئة.</li><li>إذا أصبحت الظروف خطيرة، التوقف في مكان آمن عند الحاجة.</li></ul>
</div>

<div class="card"><h2>🪞 8. المرايا والنقاط العمياء</h2>
<p>الشاحنات والمقطورات تحتوي على مناطق لا يستطيع السائق رؤيتها مباشرة.</p>
<ul><li>فحص المرايا قبل تغيير الاتجاه أو المسار.</li><li>عدم الاعتماد على مرآة واحدة فقط.</li><li>الانتباه بشكل خاص عند الانعطاف إلى اليمين.</li><li>تذكر أن الدراجات والراجلين والسيارات الصغيرة قد تختفي في النقاط العمياء.</li><li>استعمال أنظمة المساعدة الموجودة في المركبة بشكل صحيح.</li></ul>
</div>

<div class="card"><h2>📋 9. الوثائق والمسؤولية المهنية</h2>
<p>السائق المهني مسؤول عن معرفة ومراقبة الوثائق المطلوبة لرحلته.</p>
<ul><li>الوثائق الشخصية ورخصة السياقة.</li><li>وثائق الشاحنة والمقطورة.</li><li>الوثائق المتعلقة بالحمولة.</li><li>الوثائق المطلوبة للنقل الدولي عندما تنطبق.</li><li>التحقق من المعلومات قبل الانطلاق وإبلاغ المسؤول عن أي خلل.</li></ul>
</div>

<div class="card"><h2>🎓 10. اختبار السائق</h2>
<p>بعد دراسة المحاور يمكن للسائق اختبار معلوماته بأسئلة حول السلامة والفرملة والحمولة والرجوع إلى الخلف والاستهلاك والوثائق.</p>
<ol><li>ماذا تفعل إذا فقدت الرؤية أثناء الرجوع إلى الخلف؟</li><li>لماذا يجب زيادة مسافة الأمان مع الشاحنة؟</li><li>ما العناصر التي يجب فحصها قبل الرحلة؟</li><li>كيف تؤثر الحمولة غير المتوازنة على المركبة؟</li><li>لماذا لا يجب توفير الوقود على حساب السلامة؟</li></ol>
</div>

</div>

<div class="card">
<h2>🏫 التكوين المهني OFPPT</h2>
<p>يوفر OFPPT تكوينات مرتبطة بالنقل الطرقي واللوجستيك. يجب التأكد مباشرة من الشعب والمقاعد المتاحة قبل التسجيل.</p>
</div>

@endif

@if(app()->getLocale() === 'ar')
<div class="card"><h2>📚 ماذا يتعلم سائق نقل البضائع؟</h2>
<ul><li>🛡️ السلامة المهنية والوقاية من المخاطر</li><li>🔧 فحص المركبة والتعامل مع الأعطال البسيطة</li><li>📦 تحميل وتثبيت البضائع</li><li>🌍 النقل الدولي والأنظمة الجمركية</li><li>🇫🇷 الفرنسية و🇪🇸 الإسبانية المطبقتان في المهنة</li><li>⚠️ أساسيات نقل المواد الخطرة</li><li>⛽ السياقة الاقتصادية</li><li>💼 الإدماج في وسط العمل</li></ul></div>
<div class="warning"><h2>🛡️ تنبيه مهم للسائقين</h2><p>Edriouche Truck Job لا يطلب من السائق دفع أموال مقابل وعد بالتوظيف. تحقق دائمًا من الشركة والعنوان ورقم الهاتف والبريد الإلكتروني قبل إرسال وثائقك أو دفع أي مبلغ.</p></div>
@elseif(app()->getLocale() === 'es')
<div class="warning"><h2>🛡️ Aviso importante</h2><p>Edriouche Truck Job no pide dinero a los conductores a cambio de una promesa de empleo. Verifique siempre la empresa, dirección, teléfono y correo electrónico antes de enviar documentos o realizar cualquier pago.</p></div>
@else
<div class="warning"><h2>🛡️ Avertissement important</h2><p>Edriouche Truck Job ne demande pas d'argent aux conducteurs en échange d'une promesse d'emploi. Vérifiez toujours l'entreprise, l'adresse, le téléphone et l'e-mail avant d'envoyer vos documents ou d'effectuer un paiement.</p></div>
@endif

<div style="text-align:center;">
@if(app()->getLocale() === 'es')
<a class="button" href="/jobs">🚛 Ofertas de empleo</a>
<a class="button" href="/companies">🏢 Empresas de transport</a>
<a class="button" href="/">🏠 Inicio</a>
@elseif(app()->getLocale() === 'fr')
<a class="button" href="/jobs">🚛 Offres d'emploi</a>
<a class="button" href="/companies">🏢 Entreprises de transport</a>
<a class="button" href="/">🏠 Accueil</a>
@else
<a class="button" href="/jobs">🚛 عروض العمل</a>
<a class="button" href="/companies">🏢 شركات النقل</a>
<a class="button" href="/">🏠 الرئيسية</a>
@endif
</div>

</div>

<footer>© 2026 Edriouche Truck Job</footer>

</body>
</html>
