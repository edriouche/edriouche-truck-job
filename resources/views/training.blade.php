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
    @elseif(app()->getLocale() === 'en')
        <title>Professional Driver Training | Edriouche Truck Job</title>
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
        .academy-nav{display:flex;flex-wrap:wrap;gap:9px;margin:0 0 20px;padding:16px;background:#eaf3fb;border:1px solid #cbdceb;border-radius:14px}
        .academy-nav a{display:inline-block;padding:8px 12px;background:#fff;border:1px solid #cbdceb;border-radius:9px;color:#0b3a68;text-decoration:none;font-weight:700;font-size:.92rem}
        .academy-nav a:hover{background:#dceeff}
        .card[id^="lesson-"]{scroll-margin-top:18px}
        @media(max-width:600px){.container{padding:12px}.intro,.card,.warning{padding:16px}.academy-nav a{flex:1 1 42%;text-align:center}}


        .sign-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(145px,1fr));gap:12px;margin:18px 0}
        .sign-card{background:#f8fafc;border:1px solid #dbe3ec;border-radius:12px;padding:14px;text-align:center}
        .sign-sample{width:72px;height:72px;margin:0 auto 10px;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:1.5rem}
        .sign-danger{background:#c62828;color:#c62828;clip-path:polygon(50% 2%,2% 96%,98% 96%);position:relative}
        .sign-danger:before{content:"";position:absolute;inset:8px;background:#fff;clip-path:polygon(50% 2%,2% 96%,98% 96%)}
        .sign-danger span{position:relative;color:#222;margin-top:18px}
        .sign-ban{border:7px solid #c62828;border-radius:50%;background:#fff;color:#222}
        .sign-mandatory{border-radius:50%;background:#1769aa;color:#fff}
        .sign-stop{background:#c62828;color:#fff;clip-path:polygon(30% 0,70% 0,100% 30%,100% 70%,70% 100%,30% 100%,0 70%,0 30%);font-size:1.05rem}
        .sign-limit{border:7px solid #c62828;border-radius:50%;background:#fff;color:#222;font-size:1.1rem}
        .sign-temporary{background:#f4c542;color:#222;clip-path:polygon(50% 2%,2% 96%,98% 96%);font-size:1.35rem}
        .sign-note{background:#eef6ff;border-inline-start:4px solid #0b3a68;padding:14px;border-radius:8px;margin:14px 0}
        .signs-quiz{border:2px solid #287a52;border-radius:12px;padding:18px;margin:20px 0}
        .signs-quiz label{display:block;margin:8px 0}
        .sign-reference-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:12px;margin:16px 0}
        .sign-reference-card{background:#f8fafc;border:1px solid #dbe3ec;border-radius:12px;padding:16px}
        .sign-reference-card h4{margin:0 0 8px;color:#0b3a68}
        .sign-reference-card a{display:inline-block;margin:5px 4px 0 0;color:#0b3a68;font-weight:700}
        .sign-reference-card p{margin:6px 0}
        .sign-illustration{margin:18px 0;text-align:center}
        .sign-illustration img{display:block;width:100%;height:auto;border:1px solid #d6e0ea;border-radius:16px;background:#f4f7fb}
        .sign-illustration figcaption{margin-top:8px;color:#526273;font-size:.92rem}


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
@elseif(app()->getLocale() === 'en')
    <h1>🚛 Professional Driver Training and Development</h1>
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
@elseif(app()->getLocale() === 'en') ⬅️ Back to homepage
@else ⬅️ العودة إلى الرئيسية
@endif
</a>

@if(app()->getLocale() === 'es')

<div class="intro">
<h2>🎓 Formación profesional para conductores</h2>
<p>Esta sección ofrece conocimientos prácticos para conductores principiantes y profesionales. El objetivo es mejorar la seguridad, el control del vehículo, el ahorro de combustible y la responsabilidad profesional.</p>
<a class="button" href="https://www.ofppt.ma/" target="_blank">🌐 Sitio oficial OFPPT</a>
<a class="button" href="{{ url('/training-centers') }}">🏫 Centros de formación para conductores</a>
</div>


<div class="card">
@if(app()->getLocale() === 'es')
    <h2>🏫 Centros y empresas de formación para conductores</h2>
    <p>Además de OFPPT, aquí encontrarás centros y empresas especializados en la formación de conductores profesionales.</p>

    <div class="center">
        <h3>🚛 GENADEC</h3>
        <p>Formación para conductores profesionales de transporte de mercancías y viajeros, además de módulos de conducción defensiva, conducción económica y ADR.</p>
        <p>📍 Centro en Tánger: Gueznaya</p>
        <a class="button" href="https://genadec.com/" target="_blank">🌐 Sitio oficial GENADEC</a>
        <a class="button" href="https://genadec.com/pf/conducteurs-professionnels/" target="_blank">📚 Formación de conductores</a>
    </div>

@elseif(app()->getLocale() === 'fr')
    <h2>🏫 Centres et entreprises de formation des conducteurs</h2>
    <p>En plus de l'OFPPT, vous trouverez ici des centres et entreprises spécialisés dans la formation des conducteurs professionnels.</p>

    <div class="center">
        <h3>🚛 GENADEC</h3>
        <p>Formation des conducteurs professionnels de transport de marchandises et de voyageurs, avec des modules de conduite défensive, éco-conduite et ADR.</p>
        <p>📍 Centre à Tanger : Gueznaya</p>
        <a class="button" href="https://genadec.com/" target="_blank">🌐 Site officiel GENADEC</a>
        <a class="button" href="https://genadec.com/pf/conducteurs-professionnels/" target="_blank">📚 Formation des conducteurs</a>
    </div>

@elseif(app()->getLocale() === 'en')
    <h2>🏫 Driver training centres and organisations</h2>
    <p>Alongside OFPPT, you can contact specialist organisations offering professional driver training.</p>
    <div class="center">
        <h3>🚛 GENADEC</h3>
        <p>Professional driver training in goods and passenger transport, with modules that may include defensive driving, economical driving and ADR. Confirm current courses directly.</p>
        <p>📍 Training centre: Gueznaya, Tangier</p>
        <a class="button" href="https://genadec.com/" target="_blank" rel="noopener noreferrer">🌐 Official GENADEC website</a>
        <a class="button" href="https://genadec.com/pf/conducteurs-professionnels/" target="_blank" rel="noopener noreferrer">📚 Driver training</a>
    </div>
@else
    <h2>🏫 شركات ومراكز تكوين السائقين</h2>
    <p>بالإضافة إلى OFPPT، تجد هنا مراكز وشركات متخصصة في تكوين السائقين المهنيين.</p>

    <div class="center">
        <h3>🚛 GENADEC</h3>
        <p>تكوين السائقين المهنيين في نقل البضائع والمسافرين، إضافة إلى التكوين في القيادة الدفاعية والقيادة الاقتصادية ونقل المواد الخطرة ADR.</p>
        <p>📍 مركز طنجة: كزناية</p>
        <a class="button" href="https://genadec.com/" target="_blank">🌐 الموقع الرسمي GENADEC</a>
        <a class="button" href="https://genadec.com/pf/conducteurs-professionnels/" target="_blank">📚 تكوين السائقين</a>
    </div>
@endif
</div>

<div class="training-note">
@if(app()->getLocale() === 'es')
<strong>Importante:</strong> Esta página tiene fines educativos. Respete siempre las leyes, las instrucciones del fabricante, las normas de la empresa y las condiciones reales de la carretera.
@elseif(app()->getLocale() === 'fr')
<strong>Important :</strong> Cette page est destinée à la formation. Respectez toujours les lois, les instructions du constructeur, les règles de l'entreprise et les conditions réelles de la route.
@elseif(app()->getLocale() === 'en')
<strong>Important:</strong> This page is for educational purposes. Always follow the law, manufacturer instructions, company procedures and actual road conditions.
@else
<strong>مهم:</strong> هذه الصفحة للتكوين والتوعية. يجب احترام القوانين وتعليمات المصنّع وقواعد الشركة وظروف الطريق الفعلية.
@endif
</div>

<nav class="academy-nav" aria-label="Academy lesson index">
@if(app()->getLocale() === 'es')
<a href="#lesson-1">1. Seguridad</a><a href="#lesson-2">2. Ahorro</a><a href="#lesson-3">3. Maniobras</a><a href="#lesson-4">4. Frenado</a><a href="#lesson-5">5. Carga</a><a href="#lesson-6">6. Inspección</a><a href="#lesson-7">7. Clima</a><a href="#lesson-8">8. Ángulos muertos</a><a href="#lesson-9">9. Documentos</a><a href="#lesson-10">10. Semirremolque</a><a href="#lesson-11">11. Examen</a><a href="#lesson-12">12. Señales</a><a href="#lesson-13">13. ADR</a>
@elseif(app()->getLocale() === 'fr')
<a href="#lesson-1">1. Sécurité</a><a href="#lesson-2">2. Économie</a><a href="#lesson-3">3. Manœuvres</a><a href="#lesson-4">4. Freinage</a><a href="#lesson-5">5. Chargement</a><a href="#lesson-6">6. Inspection</a><a href="#lesson-7">7. Météo</a><a href="#lesson-8">8. Angles morts</a><a href="#lesson-9">9. Documents</a><a href="#lesson-10">10. Semi-remorque</a><a href="#lesson-11">11. Test</a><a href="#lesson-12">12. Signalisation</a><a href="#lesson-13">13. ADR</a>
@elseif(app()->getLocale() === 'en')
<a href="#lesson-1">1. Safety</a><a href="#lesson-2">2. Economy</a><a href="#lesson-3">3. Manoeuvres</a><a href="#lesson-4">4. Braking</a><a href="#lesson-5">5. Loads</a><a href="#lesson-6">6. Inspection</a><a href="#lesson-7">7. Weather</a><a href="#lesson-8">8. Blind spots</a><a href="#lesson-9">9. Documents</a><a href="#lesson-10">10. Semi-trailer</a><a href="#lesson-11">11. Test</a><a href="#lesson-12">12. Road signs</a><a href="#lesson-13">13. ADR</a>
@else
<a href="#lesson-1">1. السلامة</a><a href="#lesson-2">2. الاقتصاد</a><a href="#lesson-3">3. المناورات</a><a href="#lesson-4">4. الفرملة</a><a href="#lesson-5">5. الحمولة</a><a href="#lesson-6">6. الفحص</a><a href="#lesson-7">7. الطقس</a><a href="#lesson-8">8. النقاط العمياء</a><a href="#lesson-9">9. الوثائق</a><a href="#lesson-10">10. نصف المقطورة</a><a href="#lesson-11">11. الاختبار</a><a href="#lesson-12">12. التشوير</a><a href="#lesson-13">13. ADR</a>
@endif
</nav>
<div class="cards">

<div class="card" id="lesson-1"><h2>🛡️ 1. Conducción defensiva</h2>
<p>La conducción defensiva consiste en anticiparse a los riesgos y no depender de que los demás usuarios actúen correctamente.</p>
<!-- academy-image:es:1 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/defensive-driving.svg') }}" alt="Ilustración de conducción defensiva: anticipación, distancia de seguridad y observación." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Ilustración de conducción defensiva: anticipación, distancia de seguridad y observación.</figcaption></figure>

<ul><li>Mantener una distancia de seguridad suficiente.</li><li>Adaptar la velocidad a la carga, carretera, tráfico y meteorología.</li><li>Controlar regularmente los espejos y los ángulos muertos.</li><li>Anticipar frenadas, cambios de carril y errores de otros usuarios.</li><li>No conducir con fatiga, somnolencia o distracciones.</li><li>En una situación peligrosa, reducir la velocidad y buscar una salida segura.</li></ul>
</div>

<section class="card quiz-card" data-quiz="es" style="margin:20px 0;padding:18px;border:2px solid #287a52;border-radius:12px;">
<h2>📝 اختبار القيادة الدفاعية</h2>
<p>Elige una respuesta para cada pregunta y pulsa el botón para corregir.</p>
<fieldset data-correct="b" style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;">
<legend><strong>1. ¿Por qué debemos mantener una distancia de seguridad?</strong></legend>
<label style="display:block;margin:9px 0;"><input type="radio" name="es_q1" value="a"> Para ahorrar combustible</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="es_q1" value="b"> Para poder detenernos con seguridad</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="es_q1" value="c"> Para conducir más rápido</label>
</fieldset>
<fieldset data-correct="a" style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;">
<legend><strong>2. ¿Qué hacemos cuando cambian el clima o las condiciones de la carretera?</strong></legend>
<label style="display:block;margin:9px 0;"><input type="radio" name="es_q2" value="a"> Adaptamos la velocidad</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="es_q2" value="b"> Mantenemos siempre la misma velocidad</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="es_q2" value="c"> Aceleramos</label>
</fieldset>
<fieldset data-correct="b" style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;">
<legend><strong>3. ¿Qué debemos comprobar antes de cambiar de carril?</strong></legend>
<label style="display:block;margin:9px 0;"><input type="radio" name="es_q3" value="a"> Solo el velocímetro</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="es_q3" value="b"> Los espejos y los ángulos muertos</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="es_q3" value="c"> La radio</label>
</fieldset>
<fieldset data-correct="c" style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;">
<legend><strong>4. ¿Qué hacemos si sentimos sueño al conducir?</strong></legend>
<label style="display:block;margin:9px 0;"><input type="radio" name="es_q4" value="a"> Seguimos conduciendo</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="es_q4" value="b"> Abrimos la ventana y continuamos</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="es_q4" value="c"> Paramos en un lugar seguro y descansamos</label>
</fieldset>
<button type="button" class="button quiz-submit" style="cursor:pointer;padding:10px 18px;">Corregir respuestas</button>
<p class="quiz-result" aria-live="polite" style="font-weight:bold;margin-top:14px;"></p>
</section>
<div class="card" id="lesson-2"><h2>⛽ 2. Conducción económica</h2>
<p>La conducción económica busca reducir el consumo y el desgaste sin comprometer la seguridad.</p>
<!-- academy-image:es:2 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/eco-driving.svg') }}" alt="Ilustración de conducción económica: aceleración suave y velocidad constante." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Ilustración de conducción económica: aceleración suave y velocidad constante.</figcaption></figure>
<p class="academy-source-link" style="margin:6px 0 18px;text-align:center;font-size:0.9em;"><a href="https://www.ontario.ca/document/official-ministry-transportation-mto-truck-handbook/driving-efficiently" target="_blank" rel="noopener noreferrer">Fuente educativa sobre conducción eficiente</a></p>

<ul><li>Acelerar progresivamente y evitar aceleraciones innecesarias.</li><li>Mantener una velocidad estable cuando las condiciones lo permitan.</li><li>Usar correctamente las marchas y los sistemas de retención.</li><li>Evitar frenadas y aceleraciones repetidas que podrían anticiparse.</li><li>Comprobar la presión de los neumáticos.</li><li>Realizar el mantenimiento correctamente.</li><li>No buscar ahorro mediante una conducción peligrosa.</li></ul>
</div>

<div class="card" id="lesson-3"><h2>↩️ 3. Marcha atrás con camión y remolque</h2>
<p>La marcha atrás requiere paciencia, velocidad muy baja y control constante.</p>
<!-- academy-image:es:3 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/reversing-trailer.svg') }}" alt="Ilustración de marcha atrás con camión y remolque: maniobra lenta y guiada." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Ilustración de marcha atrás con camión y remolque: maniobra lenta y guiada.</figcaption></figure>
<p class="academy-source-link" style="margin:6px 0 18px;text-align:center;font-size:0.9em;"><a href="https://riggys.com/sight-side-backing/" target="_blank" rel="noopener noreferrer">Guía educativa para maniobrar marcha atrás</a></p>

<ul><li>Comprobar la zona antes de comenzar.</li><li>Ajustar los espejos y conocer los ángulos muertos.</li><li>Comprender que el remolque puede desplazarse en dirección contraria al movimiento inicial del volante.</li><li>Hacer maniobras pequeñas y corregir progresivamente.</li><li>Usar un señalista cuando sea necesario.</li><li>Detenerse inmediatamente si se pierde la visibilidad o existe duda.</li><li>No sacrificar la seguridad para terminar rápidamente la maniobra.</li></ul>
</div>

<div class="card" id="lesson-4"><h2>🛑 4. Frenado y control del camión</h2>
<p>El peso y la carga influyen directamente en la distancia de frenado y el comportamiento del vehículo.</p>
<!-- academy-image:es:4 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/braking-distance.svg') }}" alt="Ilustración de frenado: distancia de parada y control del vehículo pesado." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Ilustración de frenado: distancia de parada y control del vehículo pesado.</figcaption></figure>

<ul><li>Mantener una distancia suficiente.</li><li>Anticipar las situaciones que requieren frenado.</li><li>Usar correctamente el freno motor o retarder cuando el vehículo disponga de ellos.</li><li>En descensos prolongados, evitar depender únicamente del freno de servicio.</li><li>Controlar la velocidad antes de entrar en una curva o descenso.</li></ul>
</div>

<div class="card" id="lesson-5"><h2>⚖️ 5. Carga y distribución del peso</h2>
<p>Una carga mal distribuida puede afectar a la estabilidad, frenado y comportamiento del conjunto.</p>
<!-- academy-image:es:5 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/load-securing.svg') }}" alt="Ilustración de carga: distribución del peso y sujeción de mercancías." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Ilustración de carga: distribución del peso y sujeción de mercancías.</figcaption></figure>
<p class="academy-source-link" style="margin:6px 0 18px;text-align:center;font-size:0.9em;"><a href="https://www.gov.uk/guidance/securing-loads-on-hgvs-and-goods-vehicles/4-ways-to-secure-a-load-in-an-hgv-or-goods-vehicle" target="_blank" rel="noopener noreferrer">Fuente oficial sobre sujeción de cargas</a></p>

<ul><li>Respetar los límites legales de peso.</li><li>Distribuir la carga correctamente.</li><li>Asegurar la mercancía según su naturaleza.</li><li>Comprobar puertas, cierres y elementos de sujeción.</li><li>Volver a comprobar la carga después de una parada cuando sea necesario.</li></ul>
</div>

<div class="card" id="lesson-6"><h2>🔧 6. Inspección antes de salir</h2>
<p>Antes de iniciar un viaje, el conductor debe comprobar que el vehículo y el remolque están en condiciones adecuadas.</p>
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/truck-pretrip-inspection.svg') }}" alt="Inspección visual: neumáticos, frenos, luces, espejos, fugas y acoplamiento." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Inspección visual: neumáticos, frenos, luces, espejos, fugas y acoplamiento.</figcaption></figure>
<ul><li>Neumáticos y posibles daños.</li><li>Frenos y conexiones.</li><li>Luces e indicadores.</li><li>Niveles y posibles fugas.</li><li>Espejos, puertas y elementos de seguridad.</li><li>Conexiones entre tractor y remolque.</li></ul>
</div>

<div class="card" id="lesson-7"><h2>🌧️ 7. Conducción en condiciones difíciles</h2>
<p>La lluvia, niebla, viento, nieve y carreteras de montaña requieren adaptación de velocidad y distancia.</p>
<!-- academy-image:es:7 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/adverse-weather.svg') }}" alt="Ilustración de conducción con lluvia, niebla y viento." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Ilustración de conducción con lluvia, niebla y viento.</figcaption></figure>

<ul><li>Reducir la velocidad cuando disminuye la visibilidad o adherencia.</li><li>Aumentar la distancia de seguridad.</li><li>Prestar especial atención al viento lateral con vehículos altos.</li><li>Evitar maniobras bruscas.</li><li>En condiciones peligrosas, detenerse en un lugar seguro si continuar no es razonable.</li></ul>
</div>

<div class="card" id="lesson-8"><h2>🪞 8. Espejos y ángulos muertos</h2>
<p>Los vehículos pesados tienen zonas que el conductor no puede observar directamente.</p>
<ul><li>Revisar los espejos antes de cambiar de dirección o carril.</li><li>No confiar únicamente en un espejo.</li><li>Comprobar cuidadosamente antes de girar a la derecha.</li><li>Recordar que motocicletas, bicicletas y peatones pueden quedar ocultos.</li><li>Utilizar correctamente los sistemas de asistencia disponibles.</li></ul>

<figure><img src="{{ asset('images/blind-spots-truck.svg') }}" alt="Zonas de visibilidad y puntos ciegos de un camión" loading="lazy" style="width:100%;height:auto;"><figcaption>Ilustración educativa: las zonas ocultas varían según el camión, el remolque y los espejos.</figcaption></figure>
<h3>Cómo prevenir los riesgos</h3>
<p>Ajusta los espejos según el fabricante. Comprueba el entorno antes de girar, cambiar de carril o dar marcha atrás. Presta especial atención al lado derecho y a peatones, ciclistas y vehículos pequeños. Señaliza con antelación y maniobra lentamente. Las cámaras ayudan, pero no sustituyen la observación del conductor. Si pierdes visibilidad o tienes dudas, detente en un lugar seguro y pide ayuda si es necesario. El dibujo es orientativo: consulta el manual del vehículo y respeta las normas locales.</p>

</div>

<div class="card" id="lesson-9"><h2>📋 9. Documentos y responsabilidad profesional</h2>
<p>El conductor profesional debe conocer y controlar la documentación necesaria para su viaje.</p>
<!-- academy-image:es:9 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/transport-documents.svg') }}" alt="Ilustración de documentos profesionales para el transporte por carretera." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Ilustración de documentos profesionales para el transporte por carretera.</figcaption></figure>

<ul><li>Documentación personal y permiso de conducción.</li><li>Documentos del vehículo y remolque.</li><li>Documentos relacionados con la mercancía.</li><li>Documentación exigida para el transporte internacional cuando corresponda.</li><li>Comprobar la información antes de salir y comunicar cualquier irregularidad.</li></ul>
</div>

@include('partials.semi-trailer-coupling-lesson')

<div class="card" id="lesson-11"><h2>🎓 11. Test del conductor</h2>
<p>Después de estudiar los temas, el conductor puede comprobar sus conocimientos con preguntas sobre seguridad, frenado, carga, marcha atrás, consumo y documentación.</p>
<ol><li>¿Qué debe hacer si pierde la visión durante una maniobra marcha atrás?</li><li>¿Por qué es importante aumentar la distancia de seguridad con un vehículo pesado?</li><li>¿Qué elementos deben revisarse antes de iniciar un viaje?</li><li>¿Cómo influye una carga mal distribuida?</li><li>¿Por qué no debe buscarse el ahorro de combustible mediante una conducción peligrosa?</li></ol><div class="driver-test" data-driver-test style="margin-top:18px;padding:16px;border:2px solid #287a52;border-radius:12px;">
<h3>📝 Examen interactivo — 5 puntos</h3>
<p>Elige una respuesta por pregunta. Cada respuesta correcta vale 1 punto.</p>
<fieldset data-correct="b" data-explanation="Detenerse evita atropellos y golpes cuando el conductor ya no puede ver la zona." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>1. Si pierde la visibilidad al dar marcha atrás, ¿qué debe hacer?</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="es_driver_1" value="a"> Continuar lentamente</label><label style="display:block;margin:9px 0;"><input type="radio" name="es_driver_1" value="b"> Detenerse, asegurar el vehículo y pedir ayuda si es necesario</label><label style="display:block;margin:9px 0;"><input type="radio" name="es_driver_1" value="c"> Acelerar para terminar</label><p class="driver-feedback" hidden></p></fieldset><fieldset data-correct="a" data-explanation="La masa y las condiciones de la vía influyen en la distancia de frenado." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>2. ¿Por qué necesita más distancia de seguridad un vehículo pesado?</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="es_driver_2" value="a"> Para disponer de tiempo y espacio para detenerse con seguridad</label><label style="display:block;margin:9px 0;"><input type="radio" name="es_driver_2" value="b"> Para ahorrar combustible</label><label style="display:block;margin:9px 0;"><input type="radio" name="es_driver_2" value="c"> Para permitir que otros adelanten</label><p class="driver-feedback" hidden></p></fieldset><fieldset data-correct="c" data-explanation="La inspección previa debe incluir los elementos esenciales de seguridad y la carga." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>3. ¿Qué debe revisar antes de iniciar un viaje?</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="es_driver_3" value="a"> Solo el nivel de combustible</label><label style="display:block;margin:9px 0;"><input type="radio" name="es_driver_3" value="b"> Solo los documentos</label><label style="display:block;margin:9px 0;"><input type="radio" name="es_driver_3" value="c"> Neumáticos, frenos, luces, espejos, fugas, conexiones y carga</label><p class="driver-feedback" hidden></p></fieldset><fieldset data-correct="c" data-explanation="Una distribución incorrecta puede alterar el equilibrio y el comportamiento del conjunto." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>4. ¿Qué puede causar una carga mal distribuida?</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="es_driver_4" value="a"> Mejor estabilidad</label><label style="display:block;margin:9px 0;"><input type="radio" name="es_driver_4" value="b"> Menor consumo siempre</label><label style="display:block;margin:9px 0;"><input type="radio" name="es_driver_4" value="c"> Inestabilidad, peor frenado y riesgo de vuelco</label><p class="driver-feedback" hidden></p></fieldset><fieldset data-correct="a" data-explanation="El ahorro nunca justifica una conducta que aumente el riesgo." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>5. ¿Cómo debe ahorrar combustible un conductor profesional?</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="es_driver_5" value="a"> Con conducción suave y mantenimiento correcto, sin reducir la seguridad</label><label style="display:block;margin:9px 0;"><input type="radio" name="es_driver_5" value="b"> Conduciendo demasiado cerca del vehículo delantero</label><label style="display:block;margin:9px 0;"><input type="radio" name="es_driver_5" value="c"> Apagando sistemas de seguridad</label><p class="driver-feedback" hidden></p></fieldset>
<button type="button" class="driver-test-submit" style="padding:10px 18px;cursor:pointer;">Corregir respuestas</button>
<p class="driver-test-result" aria-live="polite" style="font-weight:bold;"></p>
<button type="button" class="driver-test-reset" style="padding:10px 18px;cursor:pointer;">Repetir el examen</button>
</div>
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

<div class="card" id="lesson-1"><h2>🛡️ 1. Conduite défensive</h2>
<p>La conduite défensive consiste à anticiper les risques et à ne pas supposer que les autres usagers agiront toujours correctement.</p>
<!-- academy-image:fr:1 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/defensive-driving.svg') }}" alt="Illustration de conduite défensive : anticipation, distance de sécurité et observation." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Illustration de conduite défensive : anticipation, distance de sécurité et observation.</figcaption></figure>

<ul><li>Maintenir une distance de sécurité suffisante.</li><li>Adapter la vitesse à la charge, à la route, au trafic et à la météo.</li><li>Contrôler régulièrement les rétroviseurs et les angles morts.</li><li>Anticiper les freinages, changements de voie et erreurs des autres usagers.</li><li>Ne pas conduire en cas de fatigue, somnolence ou distraction.</li><li>En situation dangereuse, ralentir et rechercher une solution sûre.</li></ul>
</div>

<section class="card quiz-card" data-quiz="fr" style="margin:20px 0;padding:18px;border:2px solid #287a52;border-radius:12px;">
<h2>📝 Quiz de conduite défensive</h2>
<p>Choisissez une réponse par question, puis cliquez sur le bouton de correction.</p>
<fieldset data-correct="b" style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;">
<legend><strong>1. Pourquoi garder une distance de sécurité ?</strong></legend>
<label style="display:block;margin:9px 0;"><input type="radio" name="fr_q1" value="a"> Pour économiser du carburant</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="fr_q1" value="b"> Pour pouvoir s'arrêter en sécurité</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="fr_q1" value="c"> Pour rouler plus vite</label>
</fieldset>
<fieldset data-correct="a" style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;">
<legend><strong>2. Que faire si la météo ou la route change ?</strong></legend>
<label style="display:block;margin:9px 0;"><input type="radio" name="fr_q2" value="a"> Adapter sa vitesse</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="fr_q2" value="b"> Garder toujours la même vitesse</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="fr_q2" value="c"> Accélérer</label>
</fieldset>
<fieldset data-correct="b" style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;">
<legend><strong>3. Que vérifier avant de changer de voie ?</strong></legend>
<label style="display:block;margin:9px 0;"><input type="radio" name="fr_q3" value="a"> Seulement le compteur</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="fr_q3" value="b"> Les rétroviseurs et les angles morts</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="fr_q3" value="c"> La radio</label>
</fieldset>
<fieldset data-correct="c" style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;">
<legend><strong>4. Que faire en cas de somnolence ?</strong></legend>
<label style="display:block;margin:9px 0;"><input type="radio" name="fr_q4" value="a"> Continuer à conduire</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="fr_q4" value="b"> Ouvrir la fenêtre et continuer</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="fr_q4" value="c"> S'arrêter en sécurité et se reposer</label>
</fieldset>
<button type="button" class="button quiz-submit" style="cursor:pointer;padding:10px 18px;">Corriger les réponses</button>
<p class="quiz-result" aria-live="polite" style="font-weight:bold;margin-top:14px;"></p>
</section>
<div class="card" id="lesson-2"><h2>⛽ 2. Conduite économique</h2>
<p>La conduite économique vise à réduire la consommation et l'usure sans compromettre la sécurité.</p>
<!-- academy-image:fr:2 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/eco-driving.svg') }}" alt="Illustration d'éco-conduite : accélération souple et vitesse régulière." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Illustration d'éco-conduite : accélération souple et vitesse régulière.</figcaption></figure>
<p class="academy-source-link" style="margin:6px 0 18px;text-align:center;font-size:0.9em;"><a href="https://www.ontario.ca/document/official-ministry-transportation-mto-truck-handbook/driving-efficiently" target="_blank" rel="noopener noreferrer">Source pédagogique sur l'éco-conduite</a></p>

<ul><li>Accélérer progressivement.</li><li>Maintenir une vitesse régulière lorsque les conditions le permettent.</li><li>Utiliser correctement les rapports et les systèmes de ralentissement.</li><li>Éviter les accélérations et freinages inutiles.</li><li>Contrôler la pression des pneus.</li><li>Respecter l'entretien du véhicule.</li><li>Ne jamais rechercher l'économie au détriment de la sécurité.</li></ul>
</div>

<div class="card" id="lesson-3"><h2>↩️ 3. Marche arrière avec camion et remorque</h2>
<p>La marche arrière exige patience, très faible vitesse et contrôle permanent.</p>
<!-- academy-image:fr:3 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/reversing-trailer.svg') }}" alt="Illustration de marche arrière avec camion et remorque : manœuvre lente et guidée." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Illustration de marche arrière avec camion et remorque : manœuvre lente et guidée.</figcaption></figure>
<p class="academy-source-link" style="margin:6px 0 18px;text-align:center;font-size:0.9em;"><a href="https://riggys.com/sight-side-backing/" target="_blank" rel="noopener noreferrer">Guide pédagogique pour la marche arrière</a></p>

<ul><li>Vérifier la zone avant de commencer.</li><li>Régler les rétroviseurs et connaître les angles morts.</li><li>Comprendre la réaction de la remorque aux mouvements du volant.</li><li>Effectuer de petites corrections progressives.</li><li>Utiliser un guide lorsque cela est nécessaire.</li><li>S'arrêter immédiatement en cas de perte de visibilité ou de doute.</li><li>Ne jamais privilégier la rapidité au détriment de la sécurité.</li></ul>
</div>

<div class="card" id="lesson-4"><h2>🛑 4. Freinage et contrôle du camion</h2>
<p>Le poids et la charge influencent directement la distance de freinage et le comportement du véhicule.</p>
<!-- academy-image:fr:4 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/braking-distance.svg') }}" alt="Illustration du freinage : distance d'arrêt et contrôle du poids lourd." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Illustration du freinage : distance d'arrêt et contrôle du poids lourd.</figcaption></figure>

<ul><li>Conserver une distance suffisante.</li><li>Anticiper les situations nécessitant un freinage.</li><li>Utiliser correctement le frein moteur ou le ralentisseur lorsque le véhicule en est équipé.</li><li>Dans les longues descentes, ne pas dépendre uniquement du frein de service.</li><li>Contrôler la vitesse avant les virages et les descentes.</li></ul>
</div>

<div class="card" id="lesson-5"><h2>⚖️ Charge et répartition du poids</h2>
<p>Une charge mal répartie peut affecter la stabilité, le freinage et le comportement de l'ensemble routier.</p>
<!-- academy-image:fr:5 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/load-securing.svg') }}" alt="Illustration du chargement : répartition du poids et arrimage des marchandises." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Illustration du chargement : répartition du poids et arrimage des marchandises.</figcaption></figure>
<p class="academy-source-link" style="margin:6px 0 18px;text-align:center;font-size:0.9em;"><a href="https://www.gov.uk/guidance/securing-loads-on-hgvs-and-goods-vehicles/4-ways-to-secure-a-load-in-an-hgv-or-goods-vehicle" target="_blank" rel="noopener noreferrer">Source officielle sur l'arrimage des charges</a></p>

<ul><li>Respecter les limites légales de poids.</li><li>Répartir correctement la charge.</li><li>Arrimer la marchandise selon sa nature.</li><li>Contrôler les portes, fermetures et dispositifs d'arrimage.</li><li>Vérifier la charge après un arrêt lorsque cela est nécessaire.</li></ul>
</div>

<div class="card" id="lesson-6"><h2>🔧 Contrôle avant le départ</h2>
<p>Avant un trajet, le conducteur doit vérifier que le véhicule et la remorque sont en état approprié.</p>
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/truck-pretrip-inspection.svg') }}" alt="Contrôle visuel : pneus, freins, feux, rétroviseurs, fuites et attelage." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Contrôle visuel : pneus, freins, feux, rétroviseurs, fuites et attelage.</figcaption></figure>
<ul><li>Pneus et dommages éventuels.</li><li>Freins et connexions.</li><li>Feux et indicateurs.</li><li>Niveaux et éventuelles fuites.</li><li>Rétroviseurs, portes et éléments de sécurité.</li><li>Connexions entre le tracteur et la remorque.</li></ul>
</div>

<div class="card" id="lesson-7"><h2>🌧️ Conduite dans des conditions difficiles</h2>
<p>La pluie, le brouillard, le vent, la neige et les routes montagneuses nécessitent une adaptation de la vitesse et des distances.</p>
<!-- academy-image:fr:7 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/adverse-weather.svg') }}" alt="Illustration de conduite sous la pluie, le brouillard et le vent." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Illustration de conduite sous la pluie, le brouillard et le vent.</figcaption></figure>

<ul><li>Réduire la vitesse lorsque la visibilité ou l'adhérence diminuent.</li><li>Augmenter la distance de sécurité.</li><li>Être particulièrement attentif au vent latéral avec les véhicules hauts.</li><li>Éviter les manœuvres brusques.</li><li>Si les conditions deviennent dangereuses, s'arrêter dans un endroit sûr.</li></ul>
</div>

<div class="card" id="lesson-8"><h2>🪞 Rétroviseurs et angles morts</h2>
<p>Les véhicules lourds possèdent des zones qui ne peuvent pas être observées directement par le conducteur.</p>
<ul><li>Vérifier les rétroviseurs avant un changement de direction ou de voie.</li><li>Ne pas dépendre d'un seul rétroviseur.</li><li>Être particulièrement prudent lors des virages à droite.</li><li>Se rappeler que les motos, vélos et piétons peuvent être masqués.</li><li>Utiliser correctement les systèmes d'assistance disponibles.</li></ul>

<figure><img src="{{ asset('images/blind-spots-truck.svg') }}" alt="Zones de visibilité et angles morts autour d'un camion" loading="lazy" style="width:100%;height:auto;"><figcaption>Illustration pédagogique : les zones masquées varient selon le camion, la remorque et les rétroviseurs.</figcaption></figure>
<h3>Comment prévenir les risques</h3>
<p>Réglez les rétroviseurs selon les instructions du constructeur. Vérifiez l'environnement avant de tourner, de changer de voie ou de reculer. Soyez particulièrement vigilant à droite et envers les piétons, cyclistes et petits véhicules. Signalez vos intentions à l'avance et manœuvrez lentement. Les caméras aident, mais ne remplacent pas l'observation du conducteur. En cas de perte de visibilité ou de doute, arrêtez-vous en sécurité et demandez de l'aide si nécessaire. Le dessin est indicatif : consultez le manuel et respectez les règles locales.</p>

</div>

<div class="card" id="lesson-9"><h2>📋 Documents et responsabilité professionnelle</h2>
<p>Le conducteur professionnel doit connaître et contrôler les documents nécessaires à son trajet.</p>
<!-- academy-image:fr:9 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/transport-documents.svg') }}" alt="Illustration des documents professionnels du transport routier." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Illustration des documents professionnels du transport routier.</figcaption></figure>

<ul><li>Documents personnels et permis de conduire.</li><li>Documents du véhicule et de la remorque.</li><li>Documents liés à la marchandise.</li><li>Documents requis pour le transport international lorsque cela s'applique.</li><li>Vérifier les informations avant le départ et signaler toute anomalie.</li></ul>
</div>

@include('partials.semi-trailer-coupling-lesson')

<div class="card" id="lesson-11"><h2>🎓 11. Test du conducteur</h2>
<p>Après l'étude des thèmes, le conducteur peut vérifier ses connaissances avec des questions sur la sécurité, le freinage, la charge, la marche arrière, la consommation et les documents.</p>
<ol><li>Que faire si la visibilité est perdue pendant une marche arrière ?</li><li>Pourquoi augmenter la distance de sécurité avec un poids lourd ?</li><li>Quels éléments contrôler avant un trajet ?</li><li>Comment une mauvaise répartition de la charge influence-t-elle le véhicule ?</li><li>Pourquoi ne faut-il jamais économiser du carburant au détriment de la sécurité ?</li></ol><div class="driver-test" data-driver-test style="margin-top:18px;padding:16px;border:2px solid #287a52;border-radius:12px;"><h3>📝 Test interactif — 5 points</h3><p>Choisissez une réponse par question. Chaque bonne réponse vaut 1 point.</p>
<fieldset data-correct="b" data-explanation="S'arrêter évite les collisions lorsque le conducteur ne voit plus la zone." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>1. Que faire si la visibilité disparaît pendant une marche arrière ?</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="fr_driver_1" value="a"> Continuer lentement</label><label style="display:block;margin:9px 0;"><input type="radio" name="fr_driver_1" value="b"> S'arrêter, sécuriser le véhicule et demander de l'aide si nécessaire</label><label style="display:block;margin:9px 0;"><input type="radio" name="fr_driver_1" value="c"> Accélérer pour terminer</label><p class="driver-feedback" hidden></p></fieldset><fieldset data-correct="a" data-explanation="La masse et l'état de la route influencent la distance de freinage." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>2. Pourquoi un poids lourd doit-il garder une plus grande distance de sécurité ?</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="fr_driver_2" value="a"> Pour avoir le temps et l'espace nécessaires pour s'arrêter</label><label style="display:block;margin:9px 0;"><input type="radio" name="fr_driver_2" value="b"> Pour économiser du carburant</label><label style="display:block;margin:9px 0;"><input type="radio" name="fr_driver_2" value="c"> Pour faciliter les dépassements</label><p class="driver-feedback" hidden></p></fieldset><fieldset data-correct="c" data-explanation="Le contrôle avant départ couvre les éléments essentiels de sécurité et le chargement." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>3. Que faut-il contrôler avant le départ ?</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="fr_driver_3" value="a"> Seulement le carburant</label><label style="display:block;margin:9px 0;"><input type="radio" name="fr_driver_3" value="b"> Seulement les documents</label><label style="display:block;margin:9px 0;"><input type="radio" name="fr_driver_3" value="c"> Pneus, freins, feux, rétroviseurs, fuites, raccordements et chargement</label><p class="driver-feedback" hidden></p></fieldset><fieldset data-correct="c" data-explanation="Une mauvaise répartition modifie l'équilibre et le comportement du véhicule." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>4. Quel est le risque d'une charge mal répartie ?</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="fr_driver_4" value="a"> Une meilleure stabilité</label><label style="display:block;margin:9px 0;"><input type="radio" name="fr_driver_4" value="b"> Une consommation toujours plus faible</label><label style="display:block;margin:9px 0;"><input type="radio" name="fr_driver_4" value="c"> Instabilité, freinage dégradé et risque de renversement</label><p class="driver-feedback" hidden></p></fieldset><fieldset data-correct="a" data-explanation="Les économies ne justifient jamais une conduite dangereuse." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>5. Comment économiser du carburant sans compromettre la sécurité ?</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="fr_driver_5" value="a"> Conduite souple et entretien correct</label><label style="display:block;margin:9px 0;"><input type="radio" name="fr_driver_5" value="b"> Rouler trop près du véhicule précédent</label><label style="display:block;margin:9px 0;"><input type="radio" name="fr_driver_5" value="c"> Désactiver les systèmes de sécurité</label><p class="driver-feedback" hidden></p></fieldset>
<button type="button" class="driver-test-submit" style="padding:10px 18px;cursor:pointer;">Corriger les réponses</button><p class="driver-test-result" aria-live="polite" style="font-weight:bold;"></p><button type="button" class="driver-test-reset" style="padding:10px 18px;cursor:pointer;">Recommencer le test</button></div>
</div>

</div>

<div class="card">
<h2>🏫 Formation OFPPT</h2>
<p>L'OFPPT propose des formations liées au transport routier et à la logistique. Il faut vérifier directement les spécialités et les places disponibles.</p>
</div>

@elseif(app()->getLocale() === 'en')

<div class="intro">
<h2>🎓 Professional training for truck drivers</h2>
<p>Practical learning for new and experienced drivers, focused on road safety, vehicle control, fuel efficiency and professional responsibility.</p>
<a class="button" href="https://www.ofppt.ma/" target="_blank" rel="noopener noreferrer">🌐 Official OFPPT website</a>
<a class="button" href="{{ url('/training-centers') }}">🏫 Training centres</a>
</div>

<div class="training-note"><strong>Important:</strong> This page is for education and awareness. Always follow applicable laws, vehicle manufacturer instructions, company procedures and actual road conditions.</div>

<div class="cards">
<div class="card" id="lesson-1"><h2>🛡️ 1. Defensive driving</h2>
<p>Anticipate hazards and drive safely without assuming that other road users will always act correctly.</p>
<!-- academy-image:en:1 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/defensive-driving.svg') }}" alt="Defensive driving illustration: anticipation, safe distance and observation." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Defensive driving illustration: anticipation, safe distance and observation.</figcaption></figure>

<ul><li>Maintain a safe following distance.</li><li>Adjust speed to the load, road, traffic and weather.</li><li>Check mirrors and blind spots regularly.</li><li>Anticipate braking and lane changes.</li><li>Never drive when fatigued, sleepy or distracted.</li></ul></div>

<section class="card quiz-card" data-quiz="en" style="margin:20px 0;padding:18px;border:2px solid #287a52;border-radius:12px;">
<h2>📝 Defensive Driving Quiz</h2>
<p>Select one answer for each question, then click the check answers button.</p>
<fieldset data-correct="b" style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;">
<legend><strong>1. Why should we keep a safe following distance?</strong></legend>
<label style="display:block;margin:9px 0;"><input type="radio" name="en_q1" value="a"> To save fuel</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="en_q1" value="b"> To stop safely when needed</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="en_q1" value="c"> To drive faster</label>
</fieldset>
<fieldset data-correct="a" style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;">
<legend><strong>2. What should we do when weather or road conditions change?</strong></legend>
<label style="display:block;margin:9px 0;"><input type="radio" name="en_q2" value="a"> Adjust our speed</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="en_q2" value="b"> Always keep the same speed</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="en_q2" value="c"> Accelerate</label>
</fieldset>
<fieldset data-correct="b" style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;">
<legend><strong>3. What should we check before changing lanes?</strong></legend>
<label style="display:block;margin:9px 0;"><input type="radio" name="en_q3" value="a"> Only the speedometer</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="en_q3" value="b"> Mirrors and blind spots</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="en_q3" value="c"> The radio</label>
</fieldset>
<fieldset data-correct="c" style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;">
<legend><strong>4. What should we do if we feel sleepy while driving?</strong></legend>
<label style="display:block;margin:9px 0;"><input type="radio" name="en_q4" value="a"> Keep driving</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="en_q4" value="b"> Open the window and continue</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="en_q4" value="c"> Stop somewhere safe and rest</label>
</fieldset>
<button type="button" class="button quiz-submit" style="cursor:pointer;padding:10px 18px;">Check answers</button>
<p class="quiz-result" aria-live="polite" style="font-weight:bold;margin-top:14px;"></p>
</section>
<div class="card" id="lesson-2"><h2>⛽ 2. Economical driving</h2>
<p>Reduce fuel consumption and vehicle wear without compromising safety.</p>
<!-- academy-image:en:2 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/eco-driving.svg') }}" alt="Eco-driving illustration: smooth acceleration and steady speed." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Eco-driving illustration: smooth acceleration and steady speed.</figcaption></figure>
<p class="academy-source-link" style="margin:6px 0 18px;text-align:center;font-size:0.9em;"><a href="https://www.ontario.ca/document/official-ministry-transportation-mto-truck-handbook/driving-efficiently" target="_blank" rel="noopener noreferrer">Educational source: efficient driving</a></p>

<ul><li>Accelerate smoothly.</li><li>Maintain a steady speed when conditions allow.</li><li>Use gears and retarders correctly.</li><li>Avoid unnecessary braking and acceleration.</li><li>Check tyre pressure and maintain the vehicle regularly.</li></ul></div>

<div class="card" id="lesson-3"><h2>↩️ 3. Reversing with a truck and trailer</h2>
<p>Reversing requires patience, low speed and constant observation.</p>
<!-- academy-image:en:3 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/reversing-trailer.svg') }}" alt="Truck and trailer reversing illustration: slow, guided manoeuvring." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Truck and trailer reversing illustration: slow, guided manoeuvring.</figcaption></figure>
<p class="academy-source-link" style="margin:6px 0 18px;text-align:center;font-size:0.9em;"><a href="https://riggys.com/sight-side-backing/" target="_blank" rel="noopener noreferrer">Educational guide to reversing</a></p>

<ul><li>Inspect the area before manoeuvring.</li><li>Adjust mirrors and identify blind spots.</li><li>Understand how the trailer responds to steering.</li><li>Make small, gradual corrections.</li><li>Use a guide when necessary.</li><li>Stop immediately if you lose sight or are unsure.</li></ul></div>

<div class="card" id="lesson-4"><h2>🛑 4. Braking and vehicle control</h2>
<p>Vehicle weight and load directly affect stopping distance and stability.</p>
<!-- academy-image:en:4 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/braking-distance.svg') }}" alt="Braking illustration: stopping distance and heavy vehicle control." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Braking illustration: stopping distance and heavy vehicle control.</figcaption></figure>

<ul><li>Keep a sufficient safety distance.</li><li>Anticipate situations requiring braking.</li><li>Use engine braking or a retarder correctly when fitted.</li><li>Do not rely only on service brakes on long descents.</li><li>Reduce speed before bends and downhill sections.</li></ul></div>

<div class="card" id="lesson-5"><h2>⚖️ 5. Cargo and weight distribution</h2>
<p>Poorly distributed cargo can affect stability, braking and vehicle control.</p>
<!-- academy-image:en:5 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/load-securing.svg') }}" alt="Cargo illustration: weight distribution and load securing." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Cargo illustration: weight distribution and load securing.</figcaption></figure>
<p class="academy-source-link" style="margin:6px 0 18px;text-align:center;font-size:0.9em;"><a href="https://www.gov.uk/guidance/securing-loads-on-hgvs-and-goods-vehicles/4-ways-to-secure-a-load-in-an-hgv-or-goods-vehicle" target="_blank" rel="noopener noreferrer">Official guide to securing loads</a></p>

<ul><li>Respect legal weight limits.</li><li>Distribute the load correctly.</li><li>Secure cargo according to its type.</li><li>Check doors, locks and securing equipment.</li><li>Recheck the load when necessary during the journey.</li></ul></div>

<div class="card" id="lesson-6"><h2>🔧 6. Pre-trip vehicle inspection</h2>
<p>Check that the truck and trailer are safe and roadworthy before departure.</p>
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/truck-pretrip-inspection.svg') }}" alt="Visual check: tyres, brakes, lights, mirrors, leaks and trailer coupling." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Visual check: tyres, brakes, lights, mirrors, leaks and trailer coupling.</figcaption></figure>
<ul><li>Tyres and visible damage.</li><li>Brakes and connections.</li><li>Lights and indicators.</li><li>Fluid levels and possible leaks.</li><li>Mirrors, doors and safety equipment.</li><li>Coupling between truck and trailer.</li></ul></div>

<div class="card" id="lesson-7"><h2>🌧️ 7. Driving in difficult conditions</h2>
<p>Rain, fog, wind, snow and mountain roads require adjusted speed and safety distance.</p>
<!-- academy-image:en:7 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/adverse-weather.svg') }}" alt="Driving in rain, fog and wind illustration." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Driving in rain, fog and wind illustration.</figcaption></figure>

<ul><li>Reduce speed when visibility or grip is poor.</li><li>Increase the following distance.</li><li>Watch for crosswinds, especially with high-sided vehicles.</li><li>Avoid sudden manoeuvres.</li><li>Stop in a safe place if conditions become dangerous.</li></ul></div>

<div class="card" id="lesson-8"><h2>🪞 8. Mirrors and blind spots</h2>
<p>Trucks and trailers have areas that the driver cannot see directly.</p>
<ul><li>Check mirrors before changing direction or lane.</li><li>Never rely on only one mirror.</li><li>Pay special attention when turning right.</li><li>Look out for cyclists, pedestrians and small vehicles.</li><li>Use vehicle assistance systems correctly.</li></ul>

<figure><img src="{{ asset('images/blind-spots-truck.svg') }}" alt="Truck visibility areas and blind spots" loading="lazy" style="width:100%;height:auto;"><figcaption>Educational illustration: blind areas vary with the truck, trailer and mirror adjustment.</figcaption></figure>
<h3>How to prevent risks</h3>
<p>Adjust mirrors according to the manufacturer's instructions. Check the surroundings before turning, changing lanes or reversing. Take extra care on the right and watch for pedestrians, cyclists and small vehicles. Signal early and manoeuvre slowly. Cameras can help but never replace the driver's own observations. If visibility is lost or you are unsure, stop safely and ask for assistance if needed. This drawing is illustrative: consult the vehicle manual and follow local traffic rules.</p>
</div>

<div class="card" id="lesson-9"><h2>📋 9. Documents and professional responsibility</h2>
<p>Professional drivers must know and check the documents required for each journey.</p>
<!-- academy-image:en:9 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/transport-documents.svg') }}" alt="Professional road transport documents illustration." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">Professional road transport documents illustration.</figcaption></figure>

<ul><li>Personal documents and driving licence.</li><li>Truck and trailer documents.</li><li>Cargo documents.</li><li>International transport documents where applicable.</li><li>Check details before departure and report irregularities.</li></ul></div>

@include('partials.semi-trailer-coupling-lesson')

<div class="card" id="lesson-11"><h2>🎓 11. Driver knowledge test</h2>
<p>Test your knowledge of safety, braking, cargo, reversing, fuel consumption and documents.</p>
<ol><li>What should you do if you lose sight while reversing?</li><li>Why does a heavy vehicle need a greater safety distance?</li><li>What should be checked before a journey?</li><li>How can poorly distributed cargo affect a vehicle?</li><li>Why must fuel saving never come at the expense of safety?</li></ol><div class="driver-test" data-driver-test style="margin-top:18px;padding:16px;border:2px solid #287a52;border-radius:12px;"><h3>📝 Interactive driver test — 5 points</h3><p>Choose one answer for each question. Each correct answer earns 1 point.</p>
<fieldset data-correct="b" data-explanation="Stopping prevents collisions when the driver can no longer see the area." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>1. What should you do if you lose visibility while reversing?</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="en_driver_1" value="a"> Continue slowly</label><label style="display:block;margin:9px 0;"><input type="radio" name="en_driver_1" value="b"> Stop, secure the vehicle and ask for help if needed</label><label style="display:block;margin:9px 0;"><input type="radio" name="en_driver_1" value="c"> Accelerate to finish</label><p class="driver-feedback" hidden></p></fieldset><fieldset data-correct="a" data-explanation="Vehicle mass and road conditions affect stopping distance." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>2. Why does a heavy vehicle need a greater safety distance?</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="en_driver_2" value="a"> To allow enough time and space to stop safely</label><label style="display:block;margin:9px 0;"><input type="radio" name="en_driver_2" value="b"> To save fuel</label><label style="display:block;margin:9px 0;"><input type="radio" name="en_driver_2" value="c"> To help others overtake</label><p class="driver-feedback" hidden></p></fieldset><fieldset data-correct="c" data-explanation="A pre-trip inspection covers essential safety items and the load." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>3. What should be checked before a journey?</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="en_driver_3" value="a"> Fuel level only</label><label style="display:block;margin:9px 0;"><input type="radio" name="en_driver_3" value="b"> Documents only</label><label style="display:block;margin:9px 0;"><input type="radio" name="en_driver_3" value="c"> Tyres, brakes, lights, mirrors, leaks, connections and load</label><p class="driver-feedback" hidden></p></fieldset><fieldset data-correct="c" data-explanation="Incorrect load distribution can affect balance and vehicle handling." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>4. What can an unevenly distributed load cause?</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="en_driver_4" value="a"> Better stability</label><label style="display:block;margin:9px 0;"><input type="radio" name="en_driver_4" value="b"> Always lower fuel use</label><label style="display:block;margin:9px 0;"><input type="radio" name="en_driver_4" value="c"> Instability, poorer braking and rollover risk</label><p class="driver-feedback" hidden></p></fieldset><fieldset data-correct="a" data-explanation="Fuel savings never justify unsafe driving." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>5. How should a professional driver save fuel?</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="en_driver_5" value="a"> Use smooth driving and proper maintenance without reducing safety</label><label style="display:block;margin:9px 0;"><input type="radio" name="en_driver_5" value="b"> Drive too close to the vehicle ahead</label><label style="display:block;margin:9px 0;"><input type="radio" name="en_driver_5" value="c"> Switch off safety systems</label><p class="driver-feedback" hidden></p></fieldset>
<button type="button" class="driver-test-submit" style="padding:10px 18px;cursor:pointer;">Check answers</button><p class="driver-test-result" aria-live="polite" style="font-weight:bold;"></p><button type="button" class="driver-test-reset" style="padding:10px 18px;cursor:pointer;">Retake the test</button></div></div>
</div>

<div class="card">
<h2>🏫 OFPPT vocational training</h2>
<p>OFPPT offers training related to road transport and logistics. Check available courses and places directly with the institution before registering.</p>
</div>

@else

<div class="intro">
<h2>🎓 التكوين المهني للسائقين</h2>
<p>هذه الصفحة تقدم معلومات عملية للسائقين المبتدئين والمهنيين بهدف تحسين السلامة، التحكم في الشاحنة، الاقتصاد في الوقود والمسؤولية المهنية.</p>
<a class="button" href="https://www.ofppt.ma/" target="_blank">🌐 الموقع الرسمي لـ OFPPT</a>
</div>

<div class="training-note"><strong>مهم:</strong> هذه المعلومات للتكوين والتوعية. يجب دائمًا احترام القوانين، وتعليمات الشركة والمُصنّع، وظروف الطريق الفعلية.</div>

<div class="cards">

<div class="card" id="lesson-1"><h2>🛡️ 1. السياقة الدفاعية</h2>
<p>السياقة الدفاعية تعني توقع المخاطر وعدم افتراض أن مستعملي الطريق الآخرين سيتصرفون دائمًا بالشكل الصحيح.</p>
<!-- academy-image:ar:1 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/defensive-driving.svg') }}" alt="رسم توضيحي للسياقة الدفاعية: توقع المخاطر ومسافة الأمان والمراقبة." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">رسم توضيحي للسياقة الدفاعية: توقع المخاطر ومسافة الأمان والمراقبة.</figcaption></figure>

<ul><li>الحفاظ على مسافة أمان مناسبة.</li><li>تكييف السرعة مع الحمولة والطريق والمرور والطقس.</li><li>مراقبة المرايا والنقاط العمياء باستمرار.</li><li>توقع الفرملة وتغيير المسار وأخطاء الآخرين.</li><li>عدم القيادة مع التعب أو النعاس أو التشتت.</li><li>عند الخطر: تخفيف السرعة والبحث عن تصرف آمن.</li></ul>
</div>

<section class="card quiz-card" data-quiz="ar" style="margin:20px 0;padding:18px;border:2px solid #287a52;border-radius:12px;">
<h2>📝 اختبار السياقة الدفاعية</h2>
<p>اختر إجابة واحدة لكل سؤال، ثم اضغط على زر التصحيح.</p>
<fieldset data-correct="b" style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;">
<legend><strong>1. لماذا نترك مسافة أمان بين الشاحنات؟</strong></legend>
<label style="display:block;margin:9px 0;"><input type="radio" name="ar_q1" value="a"> لتوفير الوقود</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="ar_q1" value="b"> لإتاحة التوقف بأمان</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="ar_q1" value="c"> للقيادة بسرعة أكبر</label>
</fieldset>
<fieldset data-correct="a" style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;">
<legend><strong>2. ماذا نفعل عندما يتغير الطقس أو وضع الطريق؟</strong></legend>
<label style="display:block;margin:9px 0;"><input type="radio" name="ar_q2" value="a"> نكيّف السرعة مع الظروف</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="ar_q2" value="b"> نحافظ دائماً على السرعة نفسها</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="ar_q2" value="c"> نزيد السرعة</label>
</fieldset>
<fieldset data-correct="b" style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;">
<legend><strong>3. ماذا نفحص قبل تغيير المسار؟</strong></legend>
<label style="display:block;margin:9px 0;"><input type="radio" name="ar_q3" value="a"> عداد السرعة فقط</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="ar_q3" value="b"> المرايا والنقاط العمياء</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="ar_q3" value="c"> جهاز الراديو</label>
</fieldset>
<fieldset data-correct="c" style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;">
<legend><strong>4. ماذا نفعل إذا شعرنا بالنعاس أثناء القيادة؟</strong></legend>
<label style="display:block;margin:9px 0;"><input type="radio" name="ar_q4" value="a"> نواصل القيادة</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="ar_q4" value="b"> نفتح النافذة ونواصل</label>
<label style="display:block;margin:9px 0;"><input type="radio" name="ar_q4" value="c"> نتوقف في مكان آمن ونأخذ قسطاً من الراحة</label>
</fieldset>
<button type="button" class="button quiz-submit" style="cursor:pointer;padding:10px 18px;">تصحيح الإجابات</button>
<p class="quiz-result" aria-live="polite" style="font-weight:bold;margin-top:14px;"></p>
</section>
<div class="card" id="lesson-2"><h2>⛽ 2. السياقة الاقتصادية</h2>
<p>السياقة الاقتصادية تهدف إلى تقليل استهلاك الوقود وتآكل الشاحنة دون التضحية بالسلامة.</p>
<!-- academy-image:ar:2 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/eco-driving.svg') }}" alt="رسم توضيحي للسياقة الاقتصادية: التسارع السلس والسرعة المستقرة." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">رسم توضيحي للسياقة الاقتصادية: التسارع السلس والسرعة المستقرة.</figcaption></figure>
<p class="academy-source-link" style="margin:6px 0 18px;text-align:center;font-size:0.9em;"><a href="https://www.ontario.ca/document/official-ministry-transportation-mto-truck-handbook/driving-efficiently" target="_blank" rel="noopener noreferrer">مصدر تعليمي حول السياقة الاقتصادية</a></p>

<ul><li>التسارع تدريجيًا وتجنب التسارع غير الضروري.</li><li>الحفاظ على سرعة مستقرة عندما تسمح الظروف.</li><li>استعمال السرعات وأنظمة التباطؤ بطريقة صحيحة.</li><li>تجنب الفرملة والتسارع المتكرر الذي يمكن توقعه.</li><li>فحص ضغط الإطارات.</li><li>الالتزام بالصيانة الدورية.</li><li>عدم محاولة توفير الوقود بطريقة تعرض السائق أو الآخرين للخطر.</li></ul>
</div>

<div class="card" id="lesson-3"><h2>↩️ 3. الرجوع إلى الخلف بالشاحنة والمقطورة</h2>
<p>الرجوع إلى الخلف يحتاج إلى الصبر والسرعة البطيئة والتحكم المستمر.</p>
<!-- academy-image:ar:3 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/reversing-trailer.svg') }}" alt="رسم توضيحي للرجوع بالشاحنة والمقطورة: مناورة بطيئة ومراقبة." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">رسم توضيحي للرجوع بالشاحنة والمقطورة: مناورة بطيئة ومراقبة.</figcaption></figure>
<p class="academy-source-link" style="margin:6px 0 18px;text-align:center;font-size:0.9em;"><a href="https://riggys.com/sight-side-backing/" target="_blank" rel="noopener noreferrer">دليل تعليمي لمناورة الرجوع بالمقطورة</a></p>

<ul><li>فحص المنطقة قبل بداية المناورة.</li><li>ضبط المرايا ومعرفة النقاط العمياء.</li><li>فهم حركة المقطورة عند تحريك المقود.</li><li>إجراء تصحيحات صغيرة وتدريجية.</li><li>الاستعانة بمراقب عند الحاجة.</li><li>التوقف فورًا عند فقدان الرؤية أو وجود شك.</li><li>عدم التضحية بالسلامة من أجل إنهاء المناورة بسرعة.</li></ul>
</div>

<div class="card" id="lesson-4"><h2>🛑 4. الفرملة والتحكم في الشاحنة</h2>
<p>وزن الشاحنة والحمولة يؤثران مباشرة على مسافة التوقف وسلوك المركبة.</p>
<!-- academy-image:ar:4 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/braking-distance.svg') }}" alt="رسم توضيحي للفرملة: مسافة التوقف والتحكم في الشاحنة الثقيلة." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">رسم توضيحي للفرملة: مسافة التوقف والتحكم في الشاحنة الثقيلة.</figcaption></figure>

<ul><li>الحفاظ على مسافة أمان كافية.</li><li>توقع الحالات التي تحتاج إلى الفرملة.</li><li>استعمال فرامل المحرك أو الريتاردر بطريقة صحيحة إذا كانت الشاحنة مجهزة بهما.</li><li>في المنحدرات الطويلة لا تعتمد فقط على فرامل الخدمة.</li><li>التحكم في السرعة قبل المنعطفات والمنحدرات.</li></ul>
</div>

<div class="card" id="lesson-5"><h2>⚖️ 5. الحمولة وتوزيع الوزن</h2>
<p>الحمولة غير المتوازنة قد تؤثر على الثبات والفرملة والتحكم في الشاحنة والمقطورة.</p>
<!-- academy-image:ar:5 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/load-securing.svg') }}" alt="رسم توضيحي للحمولة: توزيع الوزن وتثبيت البضائع." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">رسم توضيحي للحمولة: توزيع الوزن وتثبيت البضائع.</figcaption></figure>
<p class="academy-source-link" style="margin:6px 0 18px;text-align:center;font-size:0.9em;"><a href="https://www.gov.uk/guidance/securing-loads-on-hgvs-and-goods-vehicles/4-ways-to-secure-a-load-in-an-hgv-or-goods-vehicle" target="_blank" rel="noopener noreferrer">مصدر رسمي حول تثبيت الحمولة</a></p>

<ul><li>احترام حدود الوزن القانونية.</li><li>توزيع الحمولة بشكل صحيح.</li><li>تثبيت البضائع حسب طبيعتها.</li><li>فحص الأبواب وأدوات الإغلاق والتثبيت.</li><li>إعادة فحص الحمولة بعد التوقف عند الحاجة.</li></ul>
</div>

<div class="card" id="lesson-6"><h2>🔧 6. فحص الشاحنة قبل الانطلاق</h2>
<p>قبل الرحلة يجب التأكد من أن الشاحنة والمقطورة في حالة مناسبة وآمنة للسير.</p>
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/truck-pretrip-inspection.svg') }}" alt="افحص بصرياً الإطارات والفرامل والأضواء والمرايا والتسربات ووصلات المقطورة." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">افحص بصرياً الإطارات والفرامل والأضواء والمرايا والتسربات ووصلات المقطورة.</figcaption></figure>
<ul><li>الإطارات وأي أضرار ظاهرة.</li><li>الفرامل والوصلات.</li><li>الأضواء والإشارات.</li><li>مستويات السوائل وأي تسرب.</li><li>المرايا والأبواب وعناصر السلامة.</li><li>وصلات الجر بين الشاحنة والمقطورة.</li></ul>
</div>

<div class="card" id="lesson-7"><h2>🌧️ 7. القيادة في الظروف الصعبة</h2>
<p>المطر والضباب والرياح والثلوج والطرق الجبلية تحتاج إلى تكييف السرعة ومسافة الأمان.</p>
<!-- academy-image:ar:7 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/adverse-weather.svg') }}" alt="رسم توضيحي للقيادة أثناء المطر والضباب والرياح." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">رسم توضيحي للقيادة أثناء المطر والضباب والرياح.</figcaption></figure>

<ul><li>تخفيض السرعة عند انخفاض الرؤية أو تماسك الطريق.</li><li>زيادة مسافة الأمان.</li><li>الانتباه بشكل خاص للرياح الجانبية مع المركبات المرتفعة.</li><li>تجنب المناورات المفاجئة.</li><li>إذا أصبحت الظروف خطيرة، التوقف في مكان آمن عند الحاجة.</li></ul>
</div>

<div class="card" id="lesson-8"><h2>🪞 8. المرايا والنقاط العمياء</h2>
<p>الشاحنات والمقطورات تحتوي على مناطق لا يستطيع السائق رؤيتها مباشرة.</p>
<ul><li>فحص المرايا قبل تغيير الاتجاه أو المسار.</li><li>عدم الاعتماد على مرآة واحدة فقط.</li><li>الانتباه بشكل خاص عند الانعطاف إلى اليمين.</li><li>تذكر أن الدراجات والراجلين والسيارات الصغيرة قد تختفي في النقاط العمياء.</li><li>استعمال أنظمة المساعدة الموجودة في المركبة بشكل صحيح.</li></ul>

<figure><img src="{{ asset('images/blind-spots-truck.svg') }}" alt="رسم توضيحي لمناطق الرؤية والنقاط العمياء حول الشاحنة" loading="lazy" style="width:100%;height:auto;"><figcaption>رسم تعليمي: تختلف المناطق المحجوبة حسب الشاحنة والمقطورة وضبط المرايا.</figcaption></figure>
<h3>كيف تتجنب المخاطر؟</h3>
<p>اضبط المرايا وفق تعليمات الشركة المصنعة. افحص المحيط قبل الانعطاف أو تغيير المسار أو الرجوع إلى الخلف. انتبه خصوصاً إلى الجانب الأيمن وإلى الراجلين والدراجات والسيارات الصغيرة. استعمل الإشارات مسبقاً ونفّذ المناورات ببطء. الكاميرات تساعد لكنها لا تعوض مراقبة السائق بنفسه. إذا فقدت الرؤية أو ساورك الشك، توقف في مكان آمن واطلب المساعدة عند الحاجة. الرسم توضيحي فقط؛ ارجع إلى دليل المركبة واحترم قواعد السير المحلية.</p>

</div>

<div class="card" id="lesson-9"><h2>📋 9. الوثائق والمسؤولية المهنية</h2>
<p>السائق المهني مسؤول عن معرفة ومراقبة الوثائق المطلوبة لرحلته.</p>
<!-- academy-image:ar:9 -->
<figure style="margin:16px 0;text-align:center;"><img src="{{ asset('images/transport-documents.svg') }}" alt="رسم توضيحي لوثائق النقل المهني على الطرق." loading="lazy" style="display:block;width:100%;height:auto;border-radius:12px;border:1px solid #dbe3ec;"><figcaption style="margin-top:8px;font-size:0.92em;">رسم توضيحي لوثائق النقل المهني على الطرق.</figcaption></figure>

<ul><li>الوثائق الشخصية ورخصة السياقة.</li><li>وثائق الشاحنة والمقطورة.</li><li>الوثائق المتعلقة بالحمولة.</li><li>الوثائق المطلوبة للنقل الدولي عندما تنطبق.</li><li>التحقق من المعلومات قبل الانطلاق وإبلاغ المسؤول عن أي خلل.</li></ul>
</div>

@include('partials.semi-trailer-coupling-lesson')

<div class="card" id="lesson-11"><h2>🎓 11. اختبار السائق</h2>
<p>بعد دراسة المحاور يمكن للسائق اختبار معلوماته بأسئلة حول السلامة والفرملة والحمولة والرجوع إلى الخلف والاستهلاك والوثائق.</p>
<ol><li>ماذا تفعل إذا فقدت الرؤية أثناء الرجوع إلى الخلف؟</li><li>لماذا يجب زيادة مسافة الأمان مع الشاحنة؟</li><li>ما العناصر التي يجب فحصها قبل الرحلة؟</li><li>كيف تؤثر الحمولة غير المتوازنة على المركبة؟</li><li>لماذا لا يجب توفير الوقود على حساب السلامة؟</li></ol><div class="driver-test" data-driver-test style="margin-top:18px;padding:16px;border:2px solid #287a52;border-radius:12px;"><h3>📝 اختبار تفاعلي للسائق — 5 نقاط</h3><p>اختر إجابة واحدة لكل سؤال. كل إجابة صحيحة تمنحك نقطة واحدة.</p>
<fieldset data-correct="b" data-explanation="التوقف يمنع الاصطدام عندما لا تعود المنطقة مرئية للسائق." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>1. ماذا تفعل إذا فقدت الرؤية أثناء الرجوع إلى الخلف؟</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="ar_driver_1" value="a"> تواصل ببطء</label><label style="display:block;margin:9px 0;"><input type="radio" name="ar_driver_1" value="b"> تتوقف وتؤمّن المركبة وتطلب المساعدة عند الحاجة</label><label style="display:block;margin:9px 0;"><input type="radio" name="ar_driver_1" value="c"> تزيد السرعة لإنهاء المناورة</label><p class="driver-feedback" hidden></p></fieldset><fieldset data-correct="a" data-explanation="وزن المركبة وظروف الطريق يؤثران في مسافة التوقف." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>2. لماذا تحتاج الشاحنة الثقيلة إلى مسافة أمان أكبر؟</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="ar_driver_2" value="a"> لإتاحة الوقت والمسافة اللازمين للتوقف بأمان</label><label style="display:block;margin:9px 0;"><input type="radio" name="ar_driver_2" value="b"> لتوفير الوقود</label><label style="display:block;margin:9px 0;"><input type="radio" name="ar_driver_2" value="c"> لتسهيل تجاوز الآخرين</label><p class="driver-feedback" hidden></p></fieldset><fieldset data-correct="c" data-explanation="يشمل فحص ما قبل الانطلاق عناصر السلامة الأساسية والحمولة." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>3. ما الذي يجب فحصه قبل الرحلة؟</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="ar_driver_3" value="a"> مستوى الوقود فقط</label><label style="display:block;margin:9px 0;"><input type="radio" name="ar_driver_3" value="b"> الوثائق فقط</label><label style="display:block;margin:9px 0;"><input type="radio" name="ar_driver_3" value="c"> الإطارات والفرامل والأضواء والمرايا والتسربات والوصلات والحمولة</label><p class="driver-feedback" hidden></p></fieldset><fieldset data-correct="c" data-explanation="التوزيع غير الصحيح يغيّر توازن المركبة وسلوكها." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>4. ما نتيجة توزيع الحمولة بشكل غير متوازن؟</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="ar_driver_4" value="a"> ثبات أفضل</label><label style="display:block;margin:9px 0;"><input type="radio" name="ar_driver_4" value="b"> استهلاك أقل دائماً</label><label style="display:block;margin:9px 0;"><input type="radio" name="ar_driver_4" value="c"> اختلال الثبات وضعف الفرملة وزيادة خطر الانقلاب</label><p class="driver-feedback" hidden></p></fieldset><fieldset data-correct="a" data-explanation="لا يجوز أن يكون توفير الوقود سبباً في قيادة خطرة." style="margin:14px 0;padding:12px;border:1px solid #bbb;border-radius:8px;"><legend><strong>5. كيف يوفر السائق الوقود دون تعريض السلامة للخطر؟</strong></legend><label style="display:block;margin:9px 0;"><input type="radio" name="ar_driver_5" value="a"> قيادة سلسة وصيانة صحيحة دون التنازل عن السلامة</label><label style="display:block;margin:9px 0;"><input type="radio" name="ar_driver_5" value="b"> السير قريباً جداً من المركبة الأمامية</label><label style="display:block;margin:9px 0;"><input type="radio" name="ar_driver_5" value="c"> تعطيل أنظمة السلامة</label><p class="driver-feedback" hidden></p></fieldset>
<button type="button" class="driver-test-submit" style="padding:10px 18px;cursor:pointer;">تصحيح الإجابات</button><p class="driver-test-result" aria-live="polite" style="font-weight:bold;"></p><button type="button" class="driver-test-reset" style="padding:10px 18px;cursor:pointer;">إعادة الاختبار</button></div>
</div>

</div>

<div class="card">
<h2>🏫 التكوين المهني OFPPT</h2>
<p>يوفر OFPPT تكوينات مرتبطة بالنقل الطرقي واللوجستيك. يجب التأكد مباشرة من الشعب والمقاعد المتاحة قبل التسجيل.</p>
</div>



@endif


<div class="cards">
<section class="card" id="lesson-12">
@if(app()->getLocale() === 'es')
<div class="sign-note"><strong>📷 Aprende con señales reales:</strong> abre los catálogos visuales de las autoridades. Las ilustraciones de esta lección son esquemas didácticos; las fuentes siguientes muestran la señalización publicada.</div><h3>📚 Guías visuales y fuentes oficiales</h3>
<div class="sign-reference-grid"><div class="sign-reference-card"><h4>🇲🇦 Marruecos</h4><p>Consulta el texto publicado en el Boletín Oficial y una guía ilustrada de las familias de señales marroquíes.</p><a href="https://www.sgg.gov.ma/BO/bo_fr/2015/BO_6332_Fr.pdf" target="_blank" rel="noopener noreferrer">Boletín Oficial: orden 2805-14 (PDF)</a><br><a href="https://maroctl.com/routier/code-de-la-route/signaux-routiers/comprendre-la-signalisation-routiere/" target="_blank" rel="noopener noreferrer">Ver señales marroquíes con imágenes</a></div><div class="sign-reference-card"><h4>🇪🇸 España</h4><p>La DGT muestra señales R-107, R-201, R-202 y límites de dimensiones para vehículos pesados. El BOE publica fichas oficiales de señales.</p><a href="https://www.dgt.es/muevete-con-seguridad/viaja-seguro/tractor/" target="_blank" rel="noopener noreferrer">DGT: señales de peso y dimensiones</a><br><a href="https://www.boe.es/eli/es/rd/2025/06/10/465/dof/spa/pdf" target="_blank" rel="noopener noreferrer">BOE: catálogo y fichas oficiales (PDF)</a></div><div class="sign-reference-card"><h4>🇪🇺 Europa</h4><p>Consulta el marco internacional de señalización; cada país conserva sus propias normas y catálogos.</p><a href="https://unece.org/road-traffic-and-road-signs-and-signals-agreements-and-conventions" target="_blank" rel="noopener noreferrer">UNECE: acuerdos sobre señales viales</a></div></div>
@elseif(app()->getLocale() === 'fr')
<div class="sign-note"><strong>📷 Apprendre avec des panneaux réels :</strong> consultez les catalogues visuels des autorités. Les dessins de cette leçon sont des schémas pédagogiques ; les sources ci-dessous présentent la signalisation publiée.</div><h3>📚 Guides illustrés et sources officielles</h3>
<div class="sign-reference-grid"><div class="sign-reference-card"><h4>🇲🇦 Maroc</h4><p>Consultez le texte publié au Bulletin officiel et un guide illustré des principales familles de panneaux marocains.</p><a href="https://www.sgg.gov.ma/BO/bo_fr/2015/BO_6332_Fr.pdf" target="_blank" rel="noopener noreferrer">Bulletin officiel : arrêté 2805-14 (PDF)</a><br><a href="https://maroctl.com/routier/code-de-la-route/signaux-routiers/comprendre-la-signalisation-routiere/" target="_blank" rel="noopener noreferrer">Voir les panneaux marocains illustrés</a></div><div class="sign-reference-card"><h4>🇪🇸 Espagne</h4><p>La DGT présente les panneaux R-107, R-201, R-202 et les limites dimensionnelles des poids lourds. Le BOE publie des fiches officielles.</p><a href="https://www.dgt.es/muevete-con-seguridad/viaja-seguro/tractor/" target="_blank" rel="noopener noreferrer">DGT : poids et dimensions</a><br><a href="https://www.boe.es/eli/es/rd/2025/06/10/465/dof/spa/pdf" target="_blank" rel="noopener noreferrer">BOE : catalogue et fiches officielles (PDF)</a></div><div class="sign-reference-card"><h4>🇪🇺 Europe</h4><p>Consultez le cadre international ; chaque pays conserve certaines règles et catalogues nationaux.</p><a href="https://unece.org/road-traffic-and-road-signs-and-signals-agreements-and-conventions" target="_blank" rel="noopener noreferrer">UNECE : accords sur la signalisation routière</a></div></div>
@elseif(app()->getLocale() === 'en')
<div class="sign-note"><strong>📷 Learn from real road signs:</strong> open the authorities' visual catalogues. The drawings in this lesson are teaching diagrams; the sources below show published road signs.</div><h3>📚 Illustrated guides and official sources</h3>
<div class="sign-reference-grid"><div class="sign-reference-card"><h4>🇲🇦 Morocco</h4><p>Read the regulation published in the Official Bulletin and an illustrated guide to Moroccan road-sign families.</p><a href="https://www.sgg.gov.ma/BO/bo_fr/2015/BO_6332_Fr.pdf" target="_blank" rel="noopener noreferrer">Official Bulletin: Order 2805-14 (PDF)</a><br><a href="https://maroctl.com/routier/code-de-la-route/signaux-routiers/comprendre-la-signalisation-routiere/" target="_blank" rel="noopener noreferrer">View illustrated Moroccan signs</a></div><div class="sign-reference-card"><h4>🇪🇸 Spain</h4><p>DGT illustrates R-107, R-201, R-202 and heavy-vehicle dimension limits. The BOE publishes official sign specification sheets.</p><a href="https://www.dgt.es/muevete-con-seguridad/viaja-seguro/tractor/" target="_blank" rel="noopener noreferrer">DGT: weight and dimension signs</a><br><a href="https://www.boe.es/eli/es/rd/2025/06/10/465/dof/spa/pdf" target="_blank" rel="noopener noreferrer">BOE: official catalogue sheets (PDF)</a></div><div class="sign-reference-card"><h4>🇪🇺 Europe</h4><p>Read the international framework; individual countries may retain national rules and catalogues.</p><a href="https://unece.org/road-traffic-and-road-signs-and-signals-agreements-and-conventions" target="_blank" rel="noopener noreferrer">UNECE: road-sign agreements</a></div></div>
@else
<div class="sign-note"><strong>📷 تعلّم من العلامات الحقيقية:</strong> افتح المراجع المصوّرة للجهات المختصة. الرسومات الموجودة في هذا الدرس تخطيطية للتعليم، أما الروابط التالية فتعرض التشوير المنشور في المراجع.</div><h3>📚 أدلة مصوّرة ومصادر رسمية</h3>
<div class="sign-reference-grid"><div class="sign-reference-card"><h4>🇲🇦 المغرب</h4><p>اطّلع على القرار المنشور في الجريدة الرسمية، وعلى دليل مصوّر يشرح أشكال وفئات علامات التشوير المغربية.</p><a href="https://www.sgg.gov.ma/BO/bo_fr/2015/BO_6332_Fr.pdf" target="_blank" rel="noopener noreferrer">الجريدة الرسمية: القرار 2805-14 (PDF)</a><br><a href="https://maroctl.com/routier/code-de-la-route/signaux-routiers/comprendre-la-signalisation-routiere/" target="_blank" rel="noopener noreferrer">مشاهدة علامات المغرب بالصور</a></div><div class="sign-reference-card"><h4>🇪🇸 إسبانيا</h4><p>تعرض DGT علامات R-107 وR-201 وR-202 وقيود أبعاد الشاحنات، كما ينشر BOE رسومات ومواصفات العلامات الرسمية.</p><a href="https://www.dgt.es/muevete-con-seguridad/viaja-seguro/tractor/" target="_blank" rel="noopener noreferrer">DGT: علامات الوزن والأبعاد للشاحنات</a><br><a href="https://www.boe.es/eli/es/rd/2025/06/10/465/dof/spa/pdf" target="_blank" rel="noopener noreferrer">BOE: كتالوج ورسومات العلامات الرسمية (PDF)</a></div><div class="sign-reference-card"><h4>🇪🇺 أوروبا</h4><p>اطّلع على الإطار الدولي للتشوير، مع الانتباه إلى أن لكل دولة بعض القواعد والكتالوجات الوطنية الخاصة بها.</p><a href="https://unece.org/road-traffic-and-road-signs-and-signals-agreements-and-conventions" target="_blank" rel="noopener noreferrer">UNECE: اتفاقيات علامات الطرق</a></div></div>
@endif
@if(app()->getLocale() === 'es')
<h2>🚦 12. Señales de tráfico para camiones: Marruecos y Europa</h2>
<p>Las señales advierten, prohíben, obligan o informan. Para un camión, una señal de peso, altura, anchura o longitud puede determinar si una ruta es segura y legal.</p>
<figure class="sign-illustration"><img src="{{ asset('images/truck-road-signs-gallery.svg') }}" alt="Six educational road sign illustrations: danger, no trucks, mandatory direction, priority, truck weight and height limits, and road works." loading="lazy"><figcaption>Seis ejemplos visuales para reconocer las principales familias de señales. Consulta siempre la señal oficial y la normativa local.</figcaption></figure><h3>Reconoce las familias principales</h3>
<div class="sign-grid">
<div class="sign-card"><div class="sign-sample sign-danger"><span>!</span></div><strong>Peligro</strong><p>Triángulo: alerta y adapta la velocidad.</p></div>
<div class="sign-card"><div class="sign-sample sign-ban">🚛</div><strong>Prohibición</strong><p>Círculo rojo: comprueba a qué vehículos afecta.</p></div>
<div class="sign-card"><div class="sign-sample sign-mandatory">↑</div><strong>Obligación</strong><p>Círculo azul: sigue la dirección u obligación indicada.</p></div>
<div class="sign-card"><div class="sign-sample sign-stop">STOP</div><strong>Prioridad</strong><p>Detente por completo y respeta la prioridad.</p></div>
<div class="sign-card"><div class="sign-sample sign-limit">t / m</div><strong>Límites</strong><p>Peso total, carga por eje y dimensiones.</p></div>
<div class="sign-card"><div class="sign-sample sign-temporary">⚒</div><strong>Obras</strong><p>Señalización temporal y desvíos.</p></div>
</div>
<h3>🇲🇦 En Marruecos</h3>
<p>La señalización se organiza en señales de peligro, intersección y prioridad, prescripción (prohibición y obligación) e indicación. La referencia normativa incluye el arrêté conjunto 2805-14 y su modificación 3106-19. Lee siempre los paneles complementarios: pueden precisar categoría de vehículo, tonelaje, horario, distancia o excepción.</p>
<h3>🇪🇺 En Europa</h3>
<p>La Convención de Viena establece un marco común para muchas señales, pero cada país conserva su catálogo y algunas reglas o restricciones propias. No supongas que todos los países usan los mismos códigos o aplican idénticas prohibiciones.</p>
<h3>🇪🇸 Ejemplos oficiales de España: límites para vehículos pesados</h3>
<ul>
<li><strong>R-107:</strong> prohíbe el acceso a vehículos destinados al transporte de mercancías cuya masa máxima autorizada supere la cifra indicada, incluso si circulan vacíos.</li>
<li><strong>R-201:</strong> limita la masa real en carga; <strong>R-202</strong> limita la masa transmitida por un eje.</li>
<li><strong>R-203, R-204 y R-205:</strong> limitan, respectivamente, longitud, anchura y altura; se incluye la carga.</li>
<li>También debes reconocer las restricciones de adelantamiento para camiones y las señales de mercancías peligrosas cuando correspondan.</li>
</ul>
<h3>Antes de entrar con el camión</h3>
<ol><li>Comprueba la masa máxima autorizada y el peso real del conjunto.</li><li>Calcula altura y anchura totales con la carga; comprueba también longitud y cargas por eje.</li><li>Lee los paneles adicionales, horarios, excepciones y distancia a la restricción.</li><li>Si la ruta no permite el paso, utiliza el desvío indicado antes de llegar; nunca improvises una maniobra marcha atrás peligrosa.</li></ol>
<div class="sign-note"><strong>Prioridad en España:</strong> las órdenes de los agentes prevalecen; después, la señalización circunstancial o temporal, los semáforos, las señales verticales y las marcas viales. Esta jerarquía se cita aquí como regla española: comprueba la normativa del país en el que conduces.</div>
<div class="sign-note"><strong>Importante:</strong> estos dibujos son esquemas educativos, no reproducciones oficiales a escala. Respeta siempre la señal real y la legislación local.</div>
<div class="academy-source-link">
<strong>Fuentes para consultar:</strong>
<a href="https://maroctl.com/routier/code-de-la-route/lois-et-reglements-de-code-de-la-route/arrete-n-2805-14-la-signalisation-routiere/" target="_blank" rel="noopener noreferrer">Normativa de señalización de Marruecos (2805-14 y 3106-19)</a> ·
<a href="https://unece.org/road-traffic-and-road-signs-and-signals-agreements-and-conventions" target="_blank" rel="noopener noreferrer">Convención de Viena – UNECE</a> ·
<a href="https://www.dgt.es/muevete-con-seguridad/viaja-seguro/tractor/" target="_blank" rel="noopener noreferrer">DGT: señales de peso y dimensiones</a> ·
<a href="https://www.boe.es/buscar/act.php?id=BOE-A-2015-11722" target="_blank" rel="noopener noreferrer">Ley de tráfico española, artículos 53–54</a>
</div>
@elseif(app()->getLocale() === 'fr')
<h2>🚦 12. Signalisation routière des poids lourds : Maroc et Europe</h2>
<p>Les panneaux avertissent, interdisent, imposent ou renseignent. Pour un camion, une limite de poids, de hauteur, de largeur ou de longueur peut déterminer si un itinéraire est autorisé.</p>
<figure class="sign-illustration"><img src="{{ asset('images/truck-road-signs-gallery.svg') }}" alt="Six educational road sign illustrations: danger, no trucks, mandatory direction, priority, truck weight and height limits, and road works." loading="lazy"><figcaption>Six exemples visuels pour reconnaître les principales familles de panneaux. Référez-vous toujours au panneau officiel et à la réglementation locale.</figcaption></figure><h3>Reconnaître les principales familles</h3>
<div class="sign-grid">
<div class="sign-card"><div class="sign-sample sign-danger"><span>!</span></div><strong>Danger</strong><p>Triangle : vigilance et vitesse adaptée.</p></div>
<div class="sign-card"><div class="sign-sample sign-ban">🚛</div><strong>Interdiction</strong><p>Cercle rouge : vérifier les véhicules concernés.</p></div>
<div class="sign-card"><div class="sign-sample sign-mandatory">↑</div><strong>Obligation</strong><p>Cercle bleu : respecter la direction imposée.</p></div>
<div class="sign-card"><div class="sign-sample sign-stop">STOP</div><strong>Priorité</strong><p>Arrêt complet et respect de la priorité.</p></div>
<div class="sign-card"><div class="sign-sample sign-limit">t / m</div><strong>Limites</strong><p>Masse totale, charge par essieu et dimensions.</p></div>
<div class="sign-card"><div class="sign-sample sign-temporary">⚒</div><strong>Travaux</strong><p>Signalisation temporaire et déviations.</p></div>
</div>
<h3>🇲🇦 Au Maroc</h3>
<p>La signalisation comprend les panneaux de danger, d'intersection et de priorité, de prescription (interdiction et obligation) et d'indication. La référence réglementaire comprend l'arrêté conjoint 2805-14, modifié par 3106-19. Lisez les panonceaux : ils peuvent préciser le type de véhicule, le tonnage, les horaires, la distance ou une exception.</p>
<h3>🇪🇺 En Europe</h3>
<p>La Convention de Vienne fournit un cadre commun pour de nombreux panneaux, mais chaque pays conserve son catalogue et certaines règles nationales. Ne supposez pas que les codes et les restrictions sont identiques partout.</p>
<h3>🇪🇸 Exemples officiels en Espagne : restrictions des poids lourds</h3>
<ul>
<li><strong>R-107 :</strong> interdit l'accès aux véhicules de transport de marchandises dont la masse maximale autorisée dépasse la valeur indiquée, même à vide.</li>
<li><strong>R-201 :</strong> limite la masse réelle en charge ; <strong>R-202</strong> limite la masse transmise par un essieu.</li>
<li><strong>R-203, R-204 et R-205 :</strong> limitent respectivement la longueur, la largeur et la hauteur ; le chargement est inclus.</li>
<li>Repérez aussi les interdictions de dépassement propres aux camions et les panneaux relatifs aux marchandises dangereuses, lorsqu'ils s'appliquent.</li>
</ul>
<h3>Avant de vous engager avec le camion</h3>
<ol><li>Vérifiez la masse maximale autorisée et la masse réelle de l'ensemble.</li><li>Calculez la hauteur et la largeur totales avec le chargement ; contrôlez aussi la longueur et les charges par essieu.</li><li>Lisez les panonceaux, horaires, exceptions et distances.</li><li>Si l'itinéraire est interdit, prenez la déviation avant d'atteindre la restriction ; n'improvisez jamais une marche arrière dangereuse.</li></ol>
<div class="sign-note"><strong>Priorité en Espagne :</strong> les ordres des agents prévalent, puis la signalisation temporaire, les feux, les panneaux verticaux et le marquage au sol. Cette hiérarchie est citée comme règle espagnole ; vérifiez celle du pays où vous conduisez.</div>
<div class="sign-note"><strong>Important :</strong> ces dessins sont des schémas pédagogiques et non des reproductions officielles à l'échelle. Respectez toujours le panneau réel et la législation locale.</div>
<div class="academy-source-link"><strong>Sources :</strong>
<a href="https://maroctl.com/routier/code-de-la-route/lois-et-reglements-de-code-de-la-route/arrete-n-2805-14-la-signalisation-routiere/" target="_blank" rel="noopener noreferrer">Signalisation au Maroc (2805-14 et 3106-19)</a> ·
<a href="https://unece.org/road-traffic-and-road-signs-and-signals-agreements-and-conventions" target="_blank" rel="noopener noreferrer">Convention de Vienne – UNECE</a> ·
<a href="https://www.dgt.es/muevete-con-seguridad/viaja-seguro/tractor/" target="_blank" rel="noopener noreferrer">DGT : poids et dimensions</a> ·
<a href="https://www.boe.es/buscar/act.php?id=BOE-A-2015-11722" target="_blank" rel="noopener noreferrer">Loi espagnole sur la circulation, articles 53–54</a></div>
@elseif(app()->getLocale() === 'en')
<h2>🚦 12. Road signs for trucks: Morocco and Europe</h2>
<p>Road signs warn, prohibit, require or inform. For a truck, a weight, height, width or length restriction can determine whether a route is legal and safe.</p>
<figure class="sign-illustration"><img src="{{ asset('images/truck-road-signs-gallery.svg') }}" alt="Six educational road sign illustrations: danger, no trucks, mandatory direction, priority, truck weight and height limits, and road works." loading="lazy"><figcaption>Six visual examples of key road-sign families. Always follow the official sign and local traffic rules.</figcaption></figure><h3>Recognise the main sign families</h3>
<div class="sign-grid">
<div class="sign-card"><div class="sign-sample sign-danger"><span>!</span></div><strong>Warning</strong><p>Triangle: take care and adjust speed.</p></div>
<div class="sign-card"><div class="sign-sample sign-ban">🚛</div><strong>Prohibition</strong><p>Red circle: check which vehicles are covered.</p></div>
<div class="sign-card"><div class="sign-sample sign-mandatory">↑</div><strong>Mandatory</strong><p>Blue circle: follow the required direction.</p></div>
<div class="sign-card"><div class="sign-sample sign-stop">STOP</div><strong>Priority</strong><p>Stop completely and give way as required.</p></div>
<div class="sign-card"><div class="sign-sample sign-limit">t / m</div><strong>Limits</strong><p>Gross mass, axle load and dimensions.</p></div>
<div class="sign-card"><div class="sign-sample sign-temporary">⚒</div><strong>Roadworks</strong><p>Temporary signs and diversions.</p></div>
</div>
<h3>🇲🇦 In Morocco</h3>
<p>The sign system includes warning, intersection and priority, regulatory (prohibition and mandatory) and information signs. The regulatory reference includes joint order 2805-14, amended by 3106-19. Read supplementary plates carefully: they may specify vehicle type, tonnage, times, distance or an exception.</p>
<h3>🇪🇺 In Europe</h3>
<p>The Vienna Convention provides a common framework for many signs, but each country keeps its own catalogue and some national rules. Do not assume that sign codes and restrictions are identical in every country.</p>
<h3>🇪🇸 Official Spanish examples: heavy-vehicle restrictions</h3>
<ul>
<li><strong>R-107:</strong> prohibits goods vehicles whose maximum authorised mass exceeds the displayed figure, even when travelling empty.</li>
<li><strong>R-201:</strong> limits actual laden mass; <strong>R-202</strong> limits the mass transmitted through an axle.</li>
<li><strong>R-203, R-204 and R-205:</strong> limit length, width and height respectively; the load is included.</li>
<li>Also recognise truck overtaking restrictions and dangerous-goods signs where applicable.</li>
</ul>
<h3>Before entering a restricted road</h3>
<ol><li>Check the vehicle's maximum authorised mass and the actual mass of the combination.</li><li>Calculate total height and width including the load; also check length and axle loads.</li><li>Read supplementary plates, time limits, exceptions and distances.</li><li>If the route is restricted, take the signed diversion before reaching it; never improvise a dangerous reverse manoeuvre.</li></ol>
<div class="sign-note"><strong>Priority in Spain:</strong> instructions from traffic officers take precedence, followed by temporary signs, traffic lights, vertical signs and road markings. This order is stated as a Spanish rule; check the rules of the country where you drive.</div>
<div class="sign-note"><strong>Important:</strong> these drawings are educational sketches, not official scale reproductions. Always obey the actual sign and local law.</div>
<div class="academy-source-link"><strong>Sources:</strong>
<a href="https://maroctl.com/routier/code-de-la-route/lois-et-reglements-de-code-de-la-route/arrete-n-2805-14-la-signalisation-routiere/" target="_blank" rel="noopener noreferrer">Morocco sign rules (2805-14 and 3106-19)</a> ·
<a href="https://unece.org/road-traffic-and-road-signs-and-signals-agreements-and-conventions" target="_blank" rel="noopener noreferrer">Vienna Convention – UNECE</a> ·
<a href="https://www.dgt.es/muevete-con-seguridad/viaja-seguro/tractor/" target="_blank" rel="noopener noreferrer">DGT: weight and dimensions</a> ·
<a href="https://www.boe.es/buscar/act.php?id=BOE-A-2015-11722" target="_blank" rel="noopener noreferrer">Spanish Traffic Law, Articles 53–54</a></div>
@else
<h2>🚦 12. علامات التشوير الطرقي للشاحنات: المغرب وأوروبا</h2>
<p>علامات الطريق تحذر أو تمنع أو تفرض أو تقدم معلومات. وبالنسبة للشاحنة، قد تحدد علامة الوزن أو الارتفاع أو العرض أو الطول ما إذا كان المرور في طريق معين مسموحاً وآمناً.</p>
<figure class="sign-illustration"><img src="{{ asset('images/truck-road-signs-gallery.svg') }}" alt="Six educational road sign illustrations: danger, no trucks, mandatory direction, priority, truck weight and height limits, and road works." loading="lazy"><figcaption>ستة أمثلة بصرية للتعرّف على أهم فئات علامات التشوير. اعتمد دائماً على العلامة الرسمية وقواعد البلد الذي تقود فيه.</figcaption></figure><h3>تعرف على الفئات الأساسية</h3>
<div class="sign-grid">
<div class="sign-card"><div class="sign-sample sign-danger"><span>!</span></div><strong>علامات الخطر</strong><p>مثلث: انتبه وخفّض السرعة حسب الخطر.</p></div>
<div class="sign-card"><div class="sign-sample sign-ban">🚛</div><strong>علامات المنع</strong><p>دائرة حمراء: تحقق من المركبات المعنية بالمنع.</p></div>
<div class="sign-card"><div class="sign-sample sign-mandatory">↑</div><strong>علامات الإلزام</strong><p>دائرة زرقاء: اتبع الاتجاه أو الأمر المفروض.</p></div>
<div class="sign-card"><div class="sign-sample sign-stop">قف</div><strong>الأسبقية</strong><p>توقف تماماً واحترم حق المرور.</p></div>
<div class="sign-card"><div class="sign-sample sign-limit">طن / م</div><strong>حدود المرور</strong><p>الوزن الإجمالي، حمولة المحور، والأبعاد.</p></div>
<div class="sign-card"><div class="sign-sample sign-temporary">⚒</div><strong>الأشغال</strong><p>علامات مؤقتة وتحويلات الطريق.</p></div>
</div>
<h3>🇲🇦 في المغرب</h3>
<p>تشمل الفئات علامات الخطر، والتقاطع والأسبقية، وعلامات التعليمات (المنع والإلزام)، وعلامات الإرشاد. من المراجع التنظيمية القرار المشترك 2805.14 المعدل بالقرار 3106.19. اقرأ اللوحات الإضافية بعناية؛ فقد تحدد نوع المركبة أو الحمولة أو أوقات المنع أو المسافة أو الاستثناء.</p>
<h3>🇪🇺 في أوروبا</h3>
<p>توفر اتفاقية فيينا إطاراً مشتركاً لكثير من علامات التشوير، لكن لكل دولة كتالوجها وبعض قواعدها الوطنية. لا تفترض أن أرقام العلامات أو قيود الشاحنات متطابقة في جميع البلدان.</p>
<h3>🇪🇸 أمثلة رسمية من إسبانيا: قيود مرور الشاحنات</h3>
<ul>
<li><strong>R-107:</strong> يمنع مرور مركبات نقل البضائع التي تتجاوز كتلتها القصوى المرخصة الرقم المحدد، حتى إن كانت تسير فارغة.</li>
<li><strong>R-201:</strong> يحدد الحد الأقصى للكتلة الفعلية أثناء السير محمّلة؛ أما <strong>R-202</strong> فيحدد الحمولة المنقولة على محور.</li>
<li><strong>R-203 وR-204 وR-205:</strong> تحدد على التوالي الطول والعرض والارتفاع؛ وتُحتسب الحمولة ضمن الأبعاد.</li>
<li>تعرف أيضاً على منع التجاوز الخاص بالشاحنات وعلامات نقل البضائع الخطرة عندما تنطبق.</li>
</ul>
<h3>قبل دخول طريق عليه قيود</h3>
<ol><li>تحقق من الكتلة القصوى المرخصة والوزن الفعلي لمجموعة الشاحنة والمقطورة.</li><li>احسب الارتفاع والعرض الإجماليين مع الحمولة، وتحقق كذلك من الطول وحمولة كل محور.</li><li>اقرأ اللوحات الإضافية وأوقات المنع والاستثناءات والمسافة.</li><li>إذا كان المرور ممنوعاً، اتبع التحويلة قبل الوصول إلى نقطة المنع؛ ولا ترتجل الرجوع إلى الخلف بطريقة خطرة.</li></ol>
<div class="sign-note"><strong>ترتيب الأولوية في إسبانيا:</strong> تعليمات أعوان المرور أولاً، ثم التشوير المؤقت، فالأضواء، فالعلامات العمودية، ثم علامات الطريق الأرضية. هذا الترتيب مذكور هنا كقاعدة إسبانية؛ تحقق من قواعد البلد الذي تقود فيه.</div>
<div class="sign-note"><strong>مهم:</strong> الرسوم هنا نماذج تعليمية مبسطة وليست نسخاً رسمية بالحجم أو التصميم الدقيق. احترم دائماً العلامة الحقيقية والقانون المحلي.</div>
<div class="academy-source-link"><strong>مصادر للمراجعة:</strong>
<a href="https://maroctl.com/routier/code-de-la-route/lois-et-reglements-de-code-de-la-route/arrete-n-2805-14-la-signalisation-routiere/" target="_blank" rel="noopener noreferrer">تنظيم التشوير بالمغرب (2805.14 و3106.19)</a> ·
<a href="https://unece.org/road-traffic-and-road-signs-and-signals-agreements-and-conventions" target="_blank" rel="noopener noreferrer">اتفاقية فيينا – UNECE</a> ·
<a href="https://www.dgt.es/muevete-con-seguridad/viaja-seguro/tractor/" target="_blank" rel="noopener noreferrer">DGT: حدود الوزن والأبعاد</a> ·
<a href="https://www.boe.es/buscar/act.php?id=BOE-A-2015-11722" target="_blank" rel="noopener noreferrer">قانون السير الإسباني، المادتان 53 و54</a></div>
@endif



<div class="sign-note" style="margin-top:22px;">
@if(app()->getLocale() === 'es')
<h3>🔄 Caso práctico: glorieta y señales azules de dirección</h3>
<p>La fotografía muestra una señal circular azul que obliga a circular alrededor de la isleta central en el sentido indicado por las flechas. Los paneles rectangulares azules y blancos con chevrones señalan la dirección de la curva y ayudan a reconocer su trazado. No indican por sí solos quién tiene prioridad.</p>
<h4>Cómo actuar con un camión y semirremolque</h4>
<ol><li>Reduce la velocidad antes de llegar y selecciona con antelación el carril adecuado para tu salida.</li><li>Observa las señales de prioridad, el tráfico que ya circula, los espejos y los ángulos muertos.</li><li>En España, cede el paso a quienes ya circulan por la glorieta cuando así lo indiquen las señales y la regla general aplicable; obedece siempre semáforos y agentes.</li><li>Recuerda que las ruedas del semirremolque siguen una trayectoria más interior y pueden acercarse al bordillo. Deja espacio suficiente sin invadir otro carril ni poner en peligro a otros usuarios.</li><li>Señaliza la salida y evita cruzar carriles bruscamente. Si no puedes salir con seguridad, continúa alrededor y vuelve a intentarlo.</li></ol>
<div class="sign-note"><strong>Atención:</strong> la señal azul obliga a seguir el sentido indicado; los chevrones orientan sobre la curva. La prioridad se determina por las señales, semáforos, agentes y normas del país.</div>
@elseif(app()->getLocale() === 'fr')
<h3>🔄 Cas pratique : giratoire et panneaux bleus directionnels</h3>
<p>La photo montre un panneau rond bleu qui impose de contourner l'îlot central dans le sens indiqué par les flèches. Les panneaux rectangulaires bleus et blancs à chevrons indiquent la direction du virage et rendent son tracé plus visible. À eux seuls, ils ne déterminent pas la priorité.</p>
<h4>Conduite d'un camion avec semi-remorque</h4>
<ol><li>Ralentissez avant d'arriver et choisissez à l'avance la voie adaptée à votre sortie.</li><li>Observez les panneaux de priorité, les véhicules déjà engagés, les rétroviseurs et les angles morts.</li><li>En Espagne, cédez le passage aux véhicules déjà engagés lorsque la signalisation et la règle générale l'exigent ; respectez toujours les feux et les agents.</li><li>Les roues de la semi-remorque suivent une trajectoire plus intérieure et peuvent se rapprocher du bord. Gardez une marge suffisante sans empiéter dangereusement sur une autre voie.</li><li>Signalez la sortie et évitez de couper brusquement les voies. Si vous ne pouvez pas sortir en sécurité, poursuivez le tour et réessayez.</li></ol>
<div class="sign-note"><strong>Attention :</strong> le panneau bleu impose le sens indiqué ; les chevrons orientent dans le virage. La priorité dépend des panneaux, feux, agents et règles du pays.</div>
@elseif(app()->getLocale() === 'en')
<h3>🔄 Practical example: roundabout and blue direction signs</h3>
<p>The photograph shows a blue circular sign requiring traffic to circulate around the central island in the direction shown by its arrows. The blue-and-white rectangular chevron boards mark the direction of the bend and make its alignment easier to see. They do not, by themselves, establish who has priority.</p>
<h4>How to drive a truck and semi-trailer through it</h4>
<ol><li>Slow down before arrival and choose the lane for your exit in good time.</li><li>Check priority signs, traffic already circulating, mirrors and blind spots.</li><li>In Spain, give way to vehicles already on the roundabout where the signs and general rule require it; always obey traffic lights and officers.</li><li>The semi-trailer's wheels follow a tighter, more inward path and may come close to the kerb. Leave enough room without dangerously entering another lane.</li><li>Signal your exit and do not cut across lanes suddenly. If you cannot exit safely, continue around and try again.</li></ol>
<div class="sign-note"><strong>Remember:</strong> the blue circular sign makes the indicated circulation direction compulsory; chevrons guide drivers through the bend. Priority is determined by signs, signals, officers and the rules of the country.</div>
@else
<h3>🔄 تطبيق عملي: الدوّار وعلامات الاتجاه الزرقاء</h3>
<p>تُظهر الصورة علامة دائرية زرقاء تُلزم السائق بالسير حول الجزيرة الوسطية في اتجاه الأسهم المرسومة. أما اللوحات المستطيلة الزرقاء والبيضاء ذات الأسهم المتتابعة (الشيفرونات) فتوضح اتجاه المنعطف وتساعد على رؤية مساره. هذه اللوحات لا تحدد وحدها من له حق الأسبقية.</p>
<h4>كيف يتصرف سائق الشاحنة ونصف المقطورة؟</h4>
<ol><li>خفّض السرعة قبل الوصول، واختر مبكراً المسار المناسب للمخرج الذي تريده.</li><li>راقب علامات الأسبقية والمركبات الموجودة داخل الدوار والمرايا والنقاط العمياء.</li><li>في إسبانيا، أعطِ الأسبقية للمركبات الموجودة داخل الدوار عندما تفرض العلامات والقاعدة العامة ذلك، واحترم دائماً الأضواء وتعليمات أعوان المرور.</li><li>تسير عجلات نصف المقطورة في مسار داخلي أضيق وقد تقترب من الرصيف. اترك مساحة كافية دون التعدي بشكل خطر على مسار آخر.</li><li>استعمل مؤشر الخروج وتجنب قطع المسارات فجأة. إذا لم تستطع الخروج بأمان، أكمل دورة أخرى ثم حاول من جديد.</li></ol>
<div class="sign-note"><strong>انتبه:</strong> العلامة الدائرية الزرقاء تُلزم باتباع اتجاه الدوران المرسوم، والشيفرونات توجه السائق خلال المنعطف. أما الأسبقية فتحددها العلامات والأضواء وأعوان المرور وقواعد البلد.</div>
@endif
<figure class="sign-illustration">
<img src="{{ asset('images/roundabout-signs-photo.jpg') }}" alt="Real roadside roundabout sign and blue-white chevron direction boards" loading="lazy">
<figcaption>
@if(app()->getLocale() === 'es') Fotografía real de señales de glorieta y paneles direccionales.
@elseif(app()->getLocale() === 'fr') Photo réelle d'un panneau de giratoire et de panneaux directionnels à chevrons.
@elseif(app()->getLocale() === 'en') Real photograph of a roundabout sign and chevron direction boards.
@else صورة حقيقية لعلامة الدوار ولوحات تحديد اتجاه المنعطف.
@endif
</figcaption>
</figure>
</div>

<section class="quiz-card signs-quiz" data-quiz="{{ app()->getLocale() }}">
@if(app()->getLocale() === 'es')
<h3>📝 Test práctico: glorietas para camiones</h3><p>Responde las cinco preguntas y pulsa «Corregir respuestas».</p>
<fieldset data-correct="b"><legend><strong>1. ¿Qué obliga a hacer la señal circular azul de la fotografía?</strong></legend><label><input type="radio" name="roundabout_q1" value="a"> Detenerse siempre</label><label><input type="radio" name="roundabout_q1" value="b"> Circular en el sentido indicado por las flechas</label><label><input type="radio" name="roundabout_q1" value="c"> Salir por la primera salida</label></fieldset>
<fieldset data-correct="a"><legend><strong>2. ¿Cuándo debe reducir la velocidad un camión?</strong></legend><label><input type="radio" name="roundabout_q2" value="a"> Antes de llegar a la glorieta</label><label><input type="radio" name="roundabout_q2" value="b"> Solo después de entrar</label><label><input type="radio" name="roundabout_q2" value="c"> Nunca si el límite lo permite</label></fieldset>
<fieldset data-correct="c"><legend><strong>3. En España, ¿a quién se cede el paso normalmente al entrar?</strong></legend><label><input type="radio" name="roundabout_q3" value="a"> A los vehículos que esperan detrás</label><label><input type="radio" name="roundabout_q3" value="b"> A nadie</label><label><input type="radio" name="roundabout_q3" value="c"> A los vehículos que ya circulan, cuando así lo establece la prioridad</label></fieldset>
<fieldset data-correct="b"><legend><strong>4. ¿Qué riesgo presentan las ruedas del semirremolque?</strong></legend><label><input type="radio" name="roundabout_q4" value="a"> Siempre siguen exactamente la huella del camión</label><label><input type="radio" name="roundabout_q4" value="b"> Cortan la trayectoria y pueden acercarse al bordillo</label><label><input type="radio" name="roundabout_q4" value="c"> No afectan al giro</label></fieldset>
<fieldset data-correct="a"><legend><strong>5. Si no puede colocarse con seguridad para salir, ¿qué debe hacer?</strong></legend><label><input type="radio" name="roundabout_q5" value="a"> Continuar alrededor y volver a intentarlo</label><label><input type="radio" name="roundabout_q5" value="b"> Cruzar los carriles de golpe</label><label><input type="radio" name="roundabout_q5" value="c"> Detenerse en medio de la glorieta</label></fieldset>
<button type="button" class="button quiz-submit">Corregir respuestas</button><p class="quiz-result" aria-live="polite"></p>
@elseif(app()->getLocale() === 'fr')
<h3>📝 Test pratique : giratoires pour poids lourds</h3><p>Répondez aux cinq questions puis cliquez sur « Corriger les réponses ».</p>
<fieldset data-correct="b"><legend><strong>1. Que impose le panneau rond bleu de la photo ?</strong></legend><label><input type="radio" name="roundabout_q1" value="a"> S'arrêter systématiquement</label><label><input type="radio" name="roundabout_q1" value="b"> Circuler dans le sens indiqué par les flèches</label><label><input type="radio" name="roundabout_q1" value="c"> Prendre la première sortie</label></fieldset>
<fieldset data-correct="a"><legend><strong>2. Quand un camion doit-il ralentir ?</strong></legend><label><input type="radio" name="roundabout_q2" value="a"> Avant d'arriver au giratoire</label><label><input type="radio" name="roundabout_q2" value="b"> Seulement après être entré</label><label><input type="radio" name="roundabout_q2" value="c"> Jamais si la limite le permet</label></fieldset>
<fieldset data-correct="c"><legend><strong>3. En Espagne, à qui faut-il normalement céder le passage à l'entrée ?</strong></legend><label><input type="radio" name="roundabout_q3" value="a"> Aux véhicules qui attendent derrière</label><label><input type="radio" name="roundabout_q3" value="b"> À personne</label><label><input type="radio" name="roundabout_q3" value="c"> Aux véhicules déjà engagés lorsque la priorité le prévoit</label></fieldset>
<fieldset data-correct="b"><legend><strong>4. Quel risque présentent les roues de la semi-remorque ?</strong></legend><label><input type="radio" name="roundabout_q4" value="a"> Elles suivent toujours exactement les roues du tracteur</label><label><input type="radio" name="roundabout_q4" value="b"> Elles coupent la trajectoire et peuvent se rapprocher du bord</label><label><input type="radio" name="roundabout_q4" value="c"> Elles ne changent rien au virage</label></fieldset>
<fieldset data-correct="a"><legend><strong>5. Si vous ne pouvez pas vous placer en sécurité pour sortir, que faire ?</strong></legend><label><input type="radio" name="roundabout_q5" value="a"> Continuer le tour et réessayer</label><label><input type="radio" name="roundabout_q5" value="b"> Couper brusquement les voies</label><label><input type="radio" name="roundabout_q5" value="c"> S'arrêter au milieu du giratoire</label></fieldset>
<button type="button" class="button quiz-submit">Corriger les réponses</button><p class="quiz-result" aria-live="polite"></p>
@elseif(app()->getLocale() === 'en')
<h3>📝 Practical test: roundabouts for truck drivers</h3><p>Answer all five questions, then select “Check answers”.</p>
<fieldset data-correct="b"><legend><strong>1. What does the blue circular sign in the photo require?</strong></legend><label><input type="radio" name="roundabout_q1" value="a"> Always stop</label><label><input type="radio" name="roundabout_q1" value="b"> Circulate in the direction shown by the arrows</label><label><input type="radio" name="roundabout_q1" value="c"> Take the first exit</label></fieldset>
<fieldset data-correct="a"><legend><strong>2. When should a truck slow down?</strong></legend><label><input type="radio" name="roundabout_q2" value="a"> Before reaching the roundabout</label><label><input type="radio" name="roundabout_q2" value="b"> Only after entering</label><label><input type="radio" name="roundabout_q2" value="c"> Never if the speed limit allows it</label></fieldset>
<fieldset data-correct="c"><legend><strong>3. In Spain, who normally has priority when you enter?</strong></legend><label><input type="radio" name="roundabout_q3" value="a"> Vehicles waiting behind you</label><label><input type="radio" name="roundabout_q3" value="b"> Nobody</label><label><input type="radio" name="roundabout_q3" value="c"> Vehicles already circulating, where the priority rules require it</label></fieldset>
<fieldset data-correct="b"><legend><strong>4. What is important about semi-trailer wheels?</strong></legend><label><input type="radio" name="roundabout_q4" value="a"> They always follow exactly the truck's wheel path</label><label><input type="radio" name="roundabout_q4" value="b"> They cut inside the turn and may approach the kerb</label><label><input type="radio" name="roundabout_q4" value="c"> They do not affect turning</label></fieldset>
<fieldset data-correct="a"><legend><strong>5. If you cannot position safely to exit, what should you do?</strong></legend><label><input type="radio" name="roundabout_q5" value="a"> Continue around and try again</label><label><input type="radio" name="roundabout_q5" value="b"> Cut across lanes suddenly</label><label><input type="radio" name="roundabout_q5" value="c"> Stop in the middle of the roundabout</label></fieldset>
<button type="button" class="button quiz-submit">Check answers</button><p class="quiz-result" aria-live="polite"></p>
@else
<h3>📝 اختبار تطبيقي: الدوارات لسائقي الشاحنات</h3><p>أجب عن الأسئلة الخمسة، ثم اضغط على زر تصحيح الإجابات.</p>
<fieldset data-correct="b"><legend><strong>1. ماذا تُلزم به العلامة الدائرية الزرقاء في الصورة؟</strong></legend><label><input type="radio" name="roundabout_q1" value="a"> التوقف دائماً</label><label><input type="radio" name="roundabout_q1" value="b"> السير في اتجاه الأسهم المرسومة</label><label><input type="radio" name="roundabout_q1" value="c"> الخروج من أول مخرج</label></fieldset>
<fieldset data-correct="a"><legend><strong>2. متى يجب على سائق الشاحنة تخفيف السرعة؟</strong></legend><label><input type="radio" name="roundabout_q2" value="a"> قبل الوصول إلى الدوار</label><label><input type="radio" name="roundabout_q2" value="b"> بعد الدخول فقط</label><label><input type="radio" name="roundabout_q2" value="c"> لا يخففها ما دام حد السرعة يسمح</label></fieldset>
<fieldset data-correct="c"><legend><strong>3. في إسبانيا، لمن تُعطى الأسبقية عادة عند الدخول؟</strong></legend><label><input type="radio" name="roundabout_q3" value="a"> للمركبات المنتظرة خلفك</label><label><input type="radio" name="roundabout_q3" value="b"> لا أحد</label><label><input type="radio" name="roundabout_q3" value="c"> للمركبات الموجودة داخل الدوار عندما تفرض قواعد الأسبقية ذلك</label></fieldset>
<fieldset data-correct="b"><legend><strong>4. ما الذي يجب الانتباه إليه في عجلات نصف المقطورة؟</strong></legend><label><input type="radio" name="roundabout_q4" value="a"> تسير دائماً في المسار نفسه لعجلات الجرار</label><label><input type="radio" name="roundabout_q4" value="b"> تقطع المنعطف من الداخل وقد تقترب من الرصيف</label><label><input type="radio" name="roundabout_q4" value="c"> لا تؤثر في الانعطاف</label></fieldset>
<fieldset data-correct="a"><legend><strong>5. إذا لم تستطع التمركز بأمان للخروج، ماذا تفعل؟</strong></legend><label><input type="radio" name="roundabout_q5" value="a"> تكمل دورة أخرى ثم تحاول من جديد</label><label><input type="radio" name="roundabout_q5" value="b"> تقطع المسارات فجأة</label><label><input type="radio" name="roundabout_q5" value="c"> تتوقف وسط الدوار</label></fieldset>
<button type="button" class="button quiz-submit">تصحيح الإجابات</button><p class="quiz-result" aria-live="polite"></p>
@endif
</section>


<div class="sign-note" style="margin-top:22px;">
@if(app()->getLocale() === 'es')
<h3>🚦 Caso práctico: ATENCIÓN GLORIETA – límite 40 km/h</h3>
<p>Este panel luminoso combina una advertencia de glorieta con una limitación de velocidad. El texto <strong>ATENCIÓN GLORIETA</strong> avisa de una glorieta próxima; el triángulo con flechas circulares advierte de circulación giratoria y el círculo rojo con <strong>40</strong> establece una velocidad máxima de 40 km/h en el tramo al que se aplica la señal.</p>
<p>Los dos elementos luminosos de color ámbar refuerzan la advertencia: no sustituyen la señal ni autorizan a ignorar el límite. Respeta también cualquier señal posterior que modifique o termine la limitación.</p>
<h4>Cómo actuar con un camión y semirremolque</h4>
<ol><li>Reduce progresivamente la velocidad antes de llegar; evita frenar bruscamente dentro de la glorieta.</li><li>Observa a la izquierda, los espejos y los ángulos muertos. No entres hasta que sea seguro.</li><li>En España, cede el paso a los vehículos que ya circulan por la glorieta, salvo que señales, semáforos o agentes indiquen otra cosa.</li><li>Ten en cuenta que las ruedas del remolque cortan la trayectoria y pasan más cerca del bordillo; deja espacio y evita cambios bruscos de carril.</li><li>Prepara la salida con antelación, señaliza y sal normalmente desde el carril exterior derecho. Si no puedes colocarte con seguridad, da otra vuelta.</li></ol>
<p><strong>Regla profesional:</strong> 40 km/h es un máximo, no una velocidad que debas mantener. Con carga alta, pavimento mojado, visibilidad limitada o una curva cerrada, circula más despacio si es necesario.</p>
@elseif(app()->getLocale() === 'fr')
<h3>🚦 Situation pratique : ATENCIÓN GLORIETA – limitation à 40 km/h</h3>
<p>Ce panneau lumineux combine un avertissement de giratoire et une limitation de vitesse. <strong>ATENCIÓN GLORIETA</strong> annonce un giratoire proche ; le triangle avec flèches circulaires avertit d'une circulation giratoire et le cercle rouge <strong>40</strong> fixe une vitesse maximale de 40 km/h sur la section concernée.</p>
<p>Les deux éléments lumineux orange renforcent l'alerte : ils ne remplacent pas le panneau et ne permettent pas d'ignorer la limitation. Respectez tout panneau ultérieur qui la modifie ou y met fin.</p>
<h4>Conduite d'un poids lourd avec semi-remorque</h4>
<ol><li>Ralentissez progressivement avant le giratoire ; évitez les freinages brusques dans le giratoire.</li><li>Contrôlez la gauche, les rétroviseurs et les angles morts. N'entrez que lorsque la manœuvre est sûre.</li><li>En Espagne, cédez le passage aux véhicules déjà engagés, sauf indication contraire d'un panneau, d'un feu ou d'un agent.</li><li>Les roues de la remorque coupent la trajectoire et passent plus près du bord : gardez une marge et évitez les changements brusques de voie.</li><li>Préparez la sortie à l'avance, signalez-la et sortez normalement depuis la voie extérieure droite. Si le placement n'est pas sûr, faites un tour supplémentaire.</li></ol>
<p><strong>Règle professionnelle :</strong> 40 km/h est une vitesse maximale, pas une vitesse à maintenir. Avec un chargement haut, une chaussée mouillée, une visibilité réduite ou un virage serré, ralentissez davantage si nécessaire.</p>
@elseif(app()->getLocale() === 'en')
<h3>🚦 Practical example: ATENCIÓN GLORIETA – 40 km/h limit</h3>
<p>This illuminated panel combines a roundabout warning with a speed limit. <strong>ATENCIÓN GLORIETA</strong> warns of an approaching roundabout; the triangle with circular arrows warns of circulating traffic, and the red circle showing <strong>40</strong> sets a maximum speed of 40 km/h on the section covered by the sign.</p>
<p>The two amber warning lights reinforce the warning. They do not replace the sign or allow the speed limit to be ignored. Follow any later sign that changes or ends the restriction.</p>
<h4>How to approach in a truck and semi-trailer</h4>
<ol><li>Slow down progressively before reaching the roundabout; avoid harsh braking while turning.</li><li>Check to the left, mirrors and blind spots. Do not enter until it is safe.</li><li>In Spain, give way to vehicles already circulating in the roundabout unless signs, traffic lights or an officer direct otherwise.</li><li>The trailer wheels cut inside the tractor's path and may pass close to the kerb; leave room and avoid sudden lane changes.</li><li>Plan the exit early, signal and normally leave from the outer right lane. If you cannot position safely, go around again.</li></ol>
<p><strong>Professional rule:</strong> 40 km/h is a maximum, not a target speed. With a high load, wet pavement, poor visibility or a tight curve, go slower when needed.</p>
@else
<h3>🚦 تطبيق عملي: ATENCIÓN GLORIETA – الحد الأقصى 40 كلم/ساعة</h3>
<p>تجمع هذه اللوحة المضيئة بين التحذير من دوّار وتحديد السرعة. عبارة <strong>ATENCIÓN GLORIETA</strong> تعني: انتبه، دوّار أمامك. المثلث الذي يحمل أسهماً دائرية يحذّر من تقاطع ذي حركة دائرية، أما الدائرة الحمراء وبداخلها الرقم <strong>40</strong> فتحدد السرعة القصوى بـ40 كلم/ساعة في المقطع الذي تسري عليه العلامة.</p>
<p>العنصران البرتقاليان المضيئان يزيدان وضوح التنبيه، لكنهما لا يلغيان العلامة ولا يسمحان بتجاوز حد السرعة. احترم أي علامة لاحقة تغيّر هذا الحد أو تنهيه.</p>
<h4>كيف يتصرف سائق الشاحنة ونصف المقطورة؟</h4>
<ol><li>خفّض السرعة تدريجياً قبل الوصول إلى الدوّار، وتجنب الفرملة القوية أثناء الانعطاف.</li><li>راقب جهة اليسار والمرايا والنقاط العمياء، ولا تدخل حتى تتأكد أن الدخول آمن.</li><li>في إسبانيا، أعطِ الأسبقية للمركبات الموجودة داخل الدوّار، إلا إذا نظمت العلامات أو الأضواء أو تعليمات عون المرور الأمر بشكل مختلف.</li><li>انتبه: عجلات المقطورة تقطع مساراً أقصر من عجلات الجرار وقد تقترب من الرصيف؛ اترك مساحة كافية وتجنب تغيير المسار فجأة.</li><li>خطط للخروج مبكراً، واستعمل مؤشر الاتجاه، واخرج عادة من المسار الخارجي الأيمن. إذا لم تستطع التمركز بأمان، أكمل دورة أخرى.</li></ol>
<p><strong>قاعدة مهنية:</strong> 40 كلم/ساعة حد أقصى وليست سرعة يجب الحفاظ عليها. إذا كانت الحمولة مرتفعة أو الطريق مبللاً أو الرؤية ضعيفة أو المنعطف حاداً، خفّض السرعة أكثر عند الحاجة.</p>
@endif
<figure class="sign-illustration">
<img src="{{ asset('images/atencion-glorieta-40.svg') }}" alt="Esquema didáctico del panel ATENCIÓN GLORIETA con advertencia de glorieta y límite de 40 km/h" loading="lazy">
<figcaption>
@if(app()->getLocale() === 'es') Esquema didáctico del panel. No sustituye la señalización oficial instalada en la vía.
@elseif(app()->getLocale() === 'fr') Schéma pédagogique du panneau. Il ne remplace pas la signalisation officielle sur la route.
@elseif(app()->getLocale() === 'en') Educational diagram of the sign panel. It does not replace official roadside signs.
@else رسم تعليمي توضيحي للوحة، ولا يعوّض علامات التشوير الرسمية المثبتة على الطريق.
@endif
</figcaption>
</figure>
<div class="sign-note">
@if(app()->getLocale() === 'es')
<strong>Fuente oficial:</strong> <a href="https://www.dgt.es/comunicacion/noticias/glorietas-como-circular-de-forma-segura" target="_blank" rel="noopener noreferrer">DGT – Cómo circular de forma segura en glorietas</a>.
@elseif(app()->getLocale() === 'fr')
<strong>Source officielle :</strong> <a href="https://www.dgt.es/comunicacion/noticias/glorietas-como-circular-de-forma-segura" target="_blank" rel="noopener noreferrer">DGT – Circuler en sécurité dans les giratoires</a>.
@elseif(app()->getLocale() === 'en')
<strong>Official source:</strong> <a href="https://www.dgt.es/comunicacion/noticias/glorietas-como-circular-de-forma-segura" target="_blank" rel="noopener noreferrer">DGT – Safe roundabout driving</a>.
@else
<strong>المصدر الرسمي:</strong> <a href="https://www.dgt.es/comunicacion/noticias/glorietas-como-circular-de-forma-segura" target="_blank" rel="noopener noreferrer">المديرية العامة للمرور الإسبانية DGT – القيادة الآمنة في الدوارات</a>.
@endif
</div>
</div>

<section class="quiz-card signs-quiz" data-quiz="{{ app()->getLocale() }}">
@if(app()->getLocale() === 'es')
<h3>📝 Examen correctivo de señales para camiones</h3><p>Responde las 9 preguntas. Al corregir, verás tu puntuación y la respuesta correcta de cada error.</p>
@elseif(app()->getLocale() === 'fr')
<h3>📝 Examen de correction : signalisation des poids lourds</h3><p>Répondez aux 9 questions. La correction affiche votre score et la bonne réponse à chaque erreur.</p>
@elseif(app()->getLocale() === 'en')
<h3>📝 Truck road-sign correction test</h3><p>Answer all 9 questions. The correction shows your score and the correct answer for each mistake.</p>
@else
<h3>📝 امتحان تصحيحي في علامات التشوير للشاحنات</h3><p>أجب عن الأسئلة التسعة. بعد التصحيح ستظهر نتيجتك والإجابة الصحيحة لكل خطأ.</p>
@endif
@if(app()->getLocale() === 'es')
<fieldset data-correct="b"><legend><strong>1. ¿Qué indica normalmente una señal triangular con borde rojo?</strong></legend><label><input type="radio" name="signs_q1" value="a"> Una obligación</label><label><input type="radio" name="signs_q1" value="b"> Un peligro o advertencia</label><label><input type="radio" name="signs_q1" value="c"> Una zona de aparcamiento</label></fieldset>
<fieldset data-correct="a"><legend><strong>2. Una señal circular roja con el símbolo de un camión indica:</strong></legend><label><input type="radio" name="signs_q2" value="a"> Una prohibición de paso para los vehículos afectados</label><label><input type="radio" name="signs_q2" value="b"> Una recomendación de aparcamiento</label><label><input type="radio" name="signs_q2" value="c"> Una entrada obligatoria a la autopista</label></fieldset>
<fieldset data-correct="c"><legend><strong>3. En España, la señal R-107 con una cifra de tonelaje:</strong></legend><label><input type="radio" name="signs_q3" value="a"> Solo se aplica si el camión va cargado</label><label><input type="radio" name="signs_q3" value="b"> Indica la altura máxima</label><label><input type="radio" name="signs_q3" value="c"> Puede prohibir el paso aunque el vehículo vaya vacío, según su masa máxima autorizada (MMA)</label></fieldset>
<fieldset data-correct="b"><legend><strong>4. ¿Qué limita la señal española R-202?</strong></legend><label><input type="radio" name="signs_q4" value="a"> La altura total</label><label><input type="radio" name="signs_q4" value="b"> La masa transmitida por un eje</label><label><input type="radio" name="signs_q4" value="c"> La velocidad mínima</label></fieldset>
<fieldset data-correct="a"><legend><strong>5. La señal R-205 limita:</strong></legend><label><input type="radio" name="signs_q5" value="a"> La altura, incluida la carga</label><label><input type="radio" name="signs_q5" value="b"> La longitud sin carga</label><label><input type="radio" name="signs_q5" value="c"> El peso por eje</label></fieldset>
<fieldset data-correct="c"><legend><strong>6. La señal R-203 limita:</strong></legend><label><input type="radio" name="signs_q6" value="a"> La anchura</label><label><input type="radio" name="signs_q6" value="b"> La altura</label><label><input type="radio" name="signs_q6" value="c"> La longitud del vehículo o conjunto, incluida la carga</label></fieldset>
<fieldset data-correct="b"><legend><strong>7. Una señal circular azul con una flecha blanca suele indicar:</strong></legend><label><input type="radio" name="signs_q7" value="a"> Peligro</label><label><input type="radio" name="signs_q7" value="b"> Dirección obligatoria</label><label><input type="radio" name="signs_q7" value="c"> Prohibición de entrada</label></fieldset>
<fieldset data-correct="a"><legend><strong>8. Ante una señal STOP, el conductor debe:</strong></legend><label><input type="radio" name="signs_q8" value="a"> Detenerse completamente y respetar la prioridad</label><label><input type="radio" name="signs_q8" value="b"> Reducir un poco la velocidad sin detenerse</label><label><input type="radio" name="signs_q8" value="c"> Detenerse solo si ve otro vehículo</label></fieldset>
<fieldset data-correct="c"><legend><strong>9. En España, ¿qué señalización tiene prioridad sobre las señales verticales permanentes?</strong></legend><label><input type="radio" name="signs_q9" value="a"> Las marcas viales</label><label><input type="radio" name="signs_q9" value="b"> Ninguna</label><label><input type="radio" name="signs_q9" value="c"> Las órdenes de los agentes, la señalización temporal y los semáforos, según el orden legal</label></fieldset>
<button type="button" class="button quiz-submit">Corregir respuestas</button><p class="quiz-result" aria-live="polite"></p>
@elseif(app()->getLocale() === 'fr')
<fieldset data-correct="b"><legend><strong>1. Que signifie généralement un panneau triangulaire à bord rouge ?</strong></legend><label><input type="radio" name="signs_q1" value="a"> Une obligation</label><label><input type="radio" name="signs_q1" value="b"> Un danger ou un avertissement</label><label><input type="radio" name="signs_q1" value="c"> Un parking</label></fieldset>
<fieldset data-correct="a"><legend><strong>2. Un panneau rond rouge avec un camion indique :</strong></legend><label><input type="radio" name="signs_q2" value="a"> Une interdiction d'accès pour les véhicules concernés</label><label><input type="radio" name="signs_q2" value="b"> Un conseil de stationnement</label><label><input type="radio" name="signs_q2" value="c"> Une entrée obligatoire sur autoroute</label></fieldset>
<fieldset data-correct="c"><legend><strong>3. En Espagne, le panneau R-107 avec un tonnage :</strong></legend><label><input type="radio" name="signs_q3" value="a"> S'applique seulement lorsque le camion est chargé</label><label><input type="radio" name="signs_q3" value="b"> Indique la hauteur maximale</label><label><input type="radio" name="signs_q3" value="c"> Peut interdire le passage même à vide, selon la masse maximale autorisée</label></fieldset>
<fieldset data-correct="b"><legend><strong>4. Que limite le panneau espagnol R-202 ?</strong></legend><label><input type="radio" name="signs_q4" value="a"> La hauteur totale</label><label><input type="radio" name="signs_q4" value="b"> La masse supportée par un essieu</label><label><input type="radio" name="signs_q4" value="c"> La vitesse minimale</label></fieldset>
<fieldset data-correct="a"><legend><strong>5. Le panneau R-205 limite :</strong></legend><label><input type="radio" name="signs_q5" value="a"> La hauteur, chargement compris</label><label><input type="radio" name="signs_q5" value="b"> La longueur à vide</label><label><input type="radio" name="signs_q5" value="c"> La masse par essieu</label></fieldset>
<fieldset data-correct="c"><legend><strong>6. Le panneau R-203 limite :</strong></legend><label><input type="radio" name="signs_q6" value="a"> La largeur</label><label><input type="radio" name="signs_q6" value="b"> La hauteur</label><label><input type="radio" name="signs_q6" value="c"> La longueur du véhicule ou de l'ensemble, chargement compris</label></fieldset>
<fieldset data-correct="b"><legend><strong>7. Un panneau rond bleu avec une flèche blanche indique généralement :</strong></legend><label><input type="radio" name="signs_q7" value="a"> Un danger</label><label><input type="radio" name="signs_q7" value="b"> Une direction obligatoire</label><label><input type="radio" name="signs_q7" value="c"> Une interdiction d'accès</label></fieldset>
<fieldset data-correct="a"><legend><strong>8. Devant un panneau STOP, le conducteur doit :</strong></legend><label><input type="radio" name="signs_q8" value="a"> S'arrêter complètement et respecter la priorité</label><label><input type="radio" name="signs_q8" value="b"> Ralentir sans s'arrêter</label><label><input type="radio" name="signs_q8" value="c"> S'arrêter uniquement s'il voit un véhicule</label></fieldset>
<fieldset data-correct="c"><legend><strong>9. En Espagne, quelle signalisation prévaut sur les panneaux verticaux permanents ?</strong></legend><label><input type="radio" name="signs_q9" value="a"> Le marquage au sol</label><label><input type="radio" name="signs_q9" value="b"> Aucune</label><label><input type="radio" name="signs_q9" value="c"> Les ordres des agents, la signalisation temporaire et les feux, selon l'ordre légal</label></fieldset>
<button type="button" class="button quiz-submit">Corriger les réponses</button><p class="quiz-result" aria-live="polite"></p>
@elseif(app()->getLocale() === 'en')
<fieldset data-correct="b"><legend><strong>1. What does a triangular sign with a red border normally indicate?</strong></legend><label><input type="radio" name="signs_q1" value="a"> An obligation</label><label><input type="radio" name="signs_q1" value="b"> A hazard or warning</label><label><input type="radio" name="signs_q1" value="c"> A parking area</label></fieldset>
<fieldset data-correct="a"><legend><strong>2. A red circular sign showing a truck indicates:</strong></legend><label><input type="radio" name="signs_q2" value="a"> Entry is prohibited for the vehicles covered by the sign</label><label><input type="radio" name="signs_q2" value="b"> Recommended parking</label><label><input type="radio" name="signs_q2" value="c"> A mandatory motorway entrance</label></fieldset>
<fieldset data-correct="c"><legend><strong>3. In Spain, an R-107 sign showing a tonnage:</strong></legend><label><input type="radio" name="signs_q3" value="a"> Applies only when the truck is loaded</label><label><input type="radio" name="signs_q3" value="b"> Shows the maximum height</label><label><input type="radio" name="signs_q3" value="c"> Can prohibit entry even when empty, according to the vehicle's maximum authorised mass</label></fieldset>
<fieldset data-correct="b"><legend><strong>4. What does Spanish sign R-202 limit?</strong></legend><label><input type="radio" name="signs_q4" value="a"> Overall height</label><label><input type="radio" name="signs_q4" value="b"> The mass carried by an axle</label><label><input type="radio" name="signs_q4" value="c"> Minimum speed</label></fieldset>
<fieldset data-correct="a"><legend><strong>5. Sign R-205 limits:</strong></legend><label><input type="radio" name="signs_q5" value="a"> Height, including the load</label><label><input type="radio" name="signs_q5" value="b"> Unladen length</label><label><input type="radio" name="signs_q5" value="c"> Axle mass</label></fieldset>
<fieldset data-correct="c"><legend><strong>6. Sign R-203 limits:</strong></legend><label><input type="radio" name="signs_q6" value="a"> Width</label><label><input type="radio" name="signs_q6" value="b"> Height</label><label><input type="radio" name="signs_q6" value="c"> The length of the vehicle or combination, including the load</label></fieldset>
<fieldset data-correct="b"><legend><strong>7. A blue circular sign with a white arrow usually indicates:</strong></legend><label><input type="radio" name="signs_q7" value="a"> A hazard</label><label><input type="radio" name="signs_q7" value="b"> A mandatory direction</label><label><input type="radio" name="signs_q7" value="c"> No entry</label></fieldset>
<fieldset data-correct="a"><legend><strong>8. At a STOP sign, the driver must:</strong></legend><label><input type="radio" name="signs_q8" value="a"> Come to a complete stop and give way as required</label><label><input type="radio" name="signs_q8" value="b"> Slow down without stopping</label><label><input type="radio" name="signs_q8" value="c"> Stop only when another vehicle is visible</label></fieldset>
<fieldset data-correct="c"><legend><strong>9. In Spain, which has priority over permanent vertical signs?</strong></legend><label><input type="radio" name="signs_q9" value="a"> Road markings</label><label><input type="radio" name="signs_q9" value="b"> Nothing</label><label><input type="radio" name="signs_q9" value="c"> Traffic officers' orders, temporary signs and traffic lights, in the legal order</label></fieldset>
<button type="button" class="button quiz-submit">Check answers</button><p class="quiz-result" aria-live="polite"></p>
@else
<fieldset data-correct="b"><legend><strong>1. ماذا تعني عادة علامة مثلثة ذات حافة حمراء؟</strong></legend><label><input type="radio" name="signs_q1" value="a"> أمر إلزامي</label><label><input type="radio" name="signs_q1" value="b"> خطر أو تحذير</label><label><input type="radio" name="signs_q1" value="c"> موقف للسيارات</label></fieldset>
<fieldset data-correct="a"><legend><strong>2. علامة دائرية حمراء تحمل صورة شاحنة تعني:</strong></legend><label><input type="radio" name="signs_q2" value="a"> منع مرور المركبات التي تشملها العلامة</label><label><input type="radio" name="signs_q2" value="b"> موقف مستحسن للشاحنات</label><label><input type="radio" name="signs_q2" value="c"> مدخل إجباري للطريق السيار</label></fieldset>
<fieldset data-correct="c"><legend><strong>3. في إسبانيا، علامة R-107 التي تحمل رقماً للوزن:</strong></legend><label><input type="radio" name="signs_q3" value="a"> تطبق فقط عندما تكون الشاحنة محملة</label><label><input type="radio" name="signs_q3" value="b"> تحدد الارتفاع الأقصى</label><label><input type="radio" name="signs_q3" value="c"> قد تمنع المرور حتى للشاحنة الفارغة حسب كتلتها القصوى المرخصة</label></fieldset>
<fieldset data-correct="b"><legend><strong>4. ماذا تحدد العلامة الإسبانية R-202؟</strong></legend><label><input type="radio" name="signs_q4" value="a"> الارتفاع الإجمالي</label><label><input type="radio" name="signs_q4" value="b"> الكتلة المنقولة على أحد المحاور</label><label><input type="radio" name="signs_q4" value="c"> السرعة الدنيا</label></fieldset>
<fieldset data-correct="a"><legend><strong>5. العلامة R-205 تحدد:</strong></legend><label><input type="radio" name="signs_q5" value="a"> الارتفاع بما في ذلك الحمولة</label><label><input type="radio" name="signs_q5" value="b"> الطول دون حمولة</label><label><input type="radio" name="signs_q5" value="c"> وزن المحور</label></fieldset>
<fieldset data-correct="c"><legend><strong>6. العلامة R-203 تحدد:</strong></legend><label><input type="radio" name="signs_q6" value="a"> العرض</label><label><input type="radio" name="signs_q6" value="b"> الارتفاع</label><label><input type="radio" name="signs_q6" value="c"> طول المركبة أو مجموعة المركبات بما في ذلك الحمولة</label></fieldset>
<fieldset data-correct="b"><legend><strong>7. علامة دائرية زرقاء تحمل سهماً أبيض تعني عادة:</strong></legend><label><input type="radio" name="signs_q7" value="a"> وجود خطر</label><label><input type="radio" name="signs_q7" value="b"> اتجاه إلزامي</label><label><input type="radio" name="signs_q7" value="c"> منع الدخول</label></fieldset>
<fieldset data-correct="a"><legend><strong>8. عند رؤية علامة قف STOP يجب على السائق:</strong></legend><label><input type="radio" name="signs_q8" value="a"> التوقف التام واحترام حق الأسبقية</label><label><input type="radio" name="signs_q8" value="b"> تخفيض السرعة دون التوقف</label><label><input type="radio" name="signs_q8" value="c"> التوقف فقط إذا رأى مركبة أخرى</label></fieldset>
<fieldset data-correct="c"><legend><strong>9. في إسبانيا، ما الذي له أولوية على العلامات العمودية الدائمة؟</strong></legend><label><input type="radio" name="signs_q9" value="a"> علامات الطريق الأرضية</label><label><input type="radio" name="signs_q9" value="b"> لا شيء</label><label><input type="radio" name="signs_q9" value="c"> تعليمات أعوان المرور والتشوير المؤقت والأضواء، وفق الترتيب القانوني</label></fieldset>
<button type="button" class="button quiz-submit">تصحيح الإجابات</button><p class="quiz-result" aria-live="polite"></p>
@endif
</section>
</section>
</div>

<div class="card">
@if(app()->getLocale() === 'es')
<h2>🚛 Formación e integración de conductores principiantes en Marruecos</h2>

<h3>🟢 JEB Training Center</h3>
<p>🌐 <a href="https://www.jebtrainingcenter.com/" target="_blank" rel="noopener noreferrer">Sitio web oficial de JEB Training Center</a></p>
<p>Centro de formación profesional en transporte y logística. Sus programas internacionales se dirigen principalmente a personas que entran por primera vez en el sector del transporte profesional.</p>
<p><strong>Ciudad:</strong> Casablanca</p>
<p><strong>Estado:</strong> Formación para principiantes. La integración laboral debe verificarse según el programa disponible.</p>

<h3>🟢 ALSA – Centro de Formación</h3>
<p>🌐 <a href="https://www.alsa.ma/ar/centre-de-formation" target="_blank" rel="noopener noreferrer">Sitio web oficial de ALSA – Centro de Formación</a></p>
<p>Centro reconocido por el Ministerio de Equipamiento y Transporte para la formación de conductores profesionales. Ofrece FQIMO y FCO, incluida la formación para el transporte de mercancías.</p>
<p><strong>Estado:</strong> Formación profesional. No presentamos el empleo posterior como garantizado.</p>

<h3>🟢 Toogo + EFE-Maroc</h3>
<p>En 2026 se anunció un programa para identificar, formar y acompañar a más de 500 jóvenes hacia la profesión de conductor, con preparación para el empleo e integración profesional. Confirme directamente las condiciones y la disponibilidad del programa.</p>
<p><strong>Ciudades iniciales:</strong> Casablanca, Rabat, Salé y Kénitra.</p>
<p>🌐 <a href="https://toogo.ma/" target="_blank" rel="noopener noreferrer">Sitio oficial de Toogo</a> | <a href="https://efemaroc.org/" target="_blank" rel="noopener noreferrer">Sitio oficial de EFE-Maroc</a></p>

<h3>🔵 OFPPT / IFTL</h3>
<p>Formación profesional relacionada con el transporte por carretera y la logística. Compruebe directamente las plazas, condiciones y programas disponibles.</p>
<p>🌐 <a href="https://www.ofppt.ma/" target="_blank" rel="noopener noreferrer">Sitio oficial de OFPPT</a></p>

@elseif(app()->getLocale() === 'fr')
<h2>🚛 Formation et intégration des chauffeurs débutants au Maroc</h2>

<h3>🟢 JEB Training Center</h3>
<p>🌐 <a href="https://www.jebtrainingcenter.com/" target="_blank" rel="noopener noreferrer">Site officiel de JEB Training Center</a></p>
<p>Centre de formation professionnelle dans le transport et la logistique. Ses programmes internationaux s'adressent principalement aux personnes qui entrent pour la première fois dans le secteur du transport professionnel.</p>
<p><strong>Ville :</strong> Casablanca</p>
<p><strong>Statut :</strong> Formation pour débutants. L'insertion professionnelle doit être vérifiée selon le programme disponible.</p>

<h3>🟢 ALSA – Centre de Formation</h3>
<p>🌐 <a href="https://www.alsa.ma/ar/centre-de-formation" target="_blank" rel="noopener noreferrer">Site officiel d’ALSA – Centre de Formation</a></p>
<p>Centre reconnu par le Ministère de l'Équipement et du Transport pour la formation des conducteurs professionnels. Il propose la FQIMO et la FCO, notamment pour le transport de marchandises.</p>
<p><strong>Statut :</strong> Formation professionnelle. Nous ne présentons pas l'emploi après formation comme garanti.</p>

<h3>🟢 Toogo + EFE-Maroc</h3>
<p>En 2026, un programme a été annoncé pour identifier, former et accompagner plus de 500 jeunes vers le métier de chauffeur, avec préparation à l'emploi et parcours d'intégration professionnelle.</p>
<p><strong>Premières villes :</strong> Casablanca, Rabat, Salé et Kénitra.</p>

<h3>🔵 OFPPT / IFTL</h3>
<p>Formation professionnelle liée au transport routier et à la logistique. Vérifiez directement les places, conditions et programmes disponibles.</p>

@elseif(app()->getLocale() === 'en')
<h2>🚛 Beginner driver training and professional integration in Morocco</h2>

<h3>🟢 JEB Training Center</h3>
<p>🌐 <a href="https://www.jebtrainingcenter.com/" target="_blank" rel="noopener noreferrer">Official JEB Training Center website</a></p>
<p>Professional training centre in transport and logistics. Contact the centre directly to confirm current courses and admission conditions.</p>
<p><strong>City:</strong> Casablanca</p>

<h3>🟢 ALSA – Training Centre</h3>
<p>🌐 <a href="https://www.alsa.ma/ar/centre-de-formation" target="_blank" rel="noopener noreferrer">Official ALSA training centre page</a></p>
<p>Contact the centre directly to confirm available professional driver courses, eligibility and current recognition status.</p>

<h3>🟢 Toogo + EFE-Maroc</h3>
<p>These organisations may publish training and employment-support programmes. Check their current announcements, locations and eligibility directly before applying.</p>
<p>🌐 <a href="https://toogo.ma/" target="_blank" rel="noopener noreferrer">Official Toogo website</a> | <a href="https://efemaroc.org/" target="_blank" rel="noopener noreferrer">Official EFE-Maroc website</a></p>

<h3>🔵 OFPPT / IFTL</h3>
<p>Training related to road transport and logistics. Check available courses and places directly with the institutions.</p>

@else
<h2>🚛 تكوين وإدماج السائقين المبتدئين في المغرب</h2>

<h3>🟢 JEB Training Center</h3>
<p>🌐 <a href="https://www.jebtrainingcenter.com/" target="_blank" rel="noopener noreferrer">الموقع الرسمي لـ JEB Training Center</a></p>
<p>مركز للتكوين المهني في النقل واللوجستيك. برامجه الدولية موجهة أيضًا للأشخاص الذين يدخلون قطاع النقل المهني لأول مرة.</p>
<p><strong>المدينة:</strong> الدار البيضاء</p>
<p><strong>الحالة:</strong> تكوين مناسب للمبتدئين. يجب التحقق من الإدماج المهني حسب البرنامج المتاح.</p>

<h3>🟢 ALSA – مركز التكوين</h3>
<p>🌐 <a href="https://www.alsa.ma/ar/centre-de-formation" target="_blank" rel="noopener noreferrer">الموقع الرسمي لـ ALSA – مركز التكوين</a></p>
<p>مركز معترف به من وزارة التجهيز والنقل لتكوين السائقين المهنيين. يقدم FQIMO وFCO، بما في ذلك تكوين نقل البضائع.</p>
<p><strong>الحالة:</strong> تكوين مهني. لا نعتبر التوظيف بعد التكوين مضمونًا.</p>

<h3>🟢 Toogo + EFE-Maroc</h3>
<p>أُعلن في سنة 2026 عن برنامج لتحديد وتكوين ومواكبة أكثر من 500 شاب نحو مهنة السائق، مع التحضير للعمل ومسار للإدماج المهني.</p>
<p><strong>المدن الأولى:</strong> الدار البيضاء، الرباط، سلا والقنيطرة.</p>

<h3>🔵 OFPPT / IFTL</h3>
<p>تكوين مهني مرتبط بالنقل الطرقي واللوجستيك. يجب التأكد مباشرة من المقاعد والشروط والبرامج المتاحة.</p>
@endif

<div class="warning">
@if(app()->getLocale() === 'es')
<p>⚠️ Edriouche Truck Job no garantiza la contratación. Compruebe siempre la información directamente con la institución antes de desplazarse o enviar documentos.</p>
@elseif(app()->getLocale() === 'fr')
<p>⚠️ Edriouche Truck Job ne garantit pas l'embauche. Vérifiez toujours les informations directement auprès de l'organisme avant de vous déplacer ou d'envoyer des documents.</p>
@elseif(app()->getLocale() === 'en')
<p>⚠️ Edriouche Truck Job does not guarantee employment. Always verify information directly with the institution before travelling or sending documents.</p>
@else
<p>⚠️ Edriouche Truck Job لا يضمن التوظيف. تحقق دائمًا من المعلومات مباشرة مع المؤسسة قبل التنقل أو إرسال الوثائق.</p>
@endif
</div>
</div>

@if(app()->getLocale() === 'ar')
<div class="card"><h2>📚 ماذا يتعلم سائق نقل البضائع؟</h2>
<ul><li>🛡️ السلامة المهنية والوقاية من المخاطر</li><li>🔧 فحص المركبة والتعامل مع الأعطال البسيطة</li><li>📦 تحميل وتثبيت البضائع</li><li>🌍 النقل الدولي والأنظمة الجمركية</li><li>🇫🇷 الفرنسية و🇪🇸 الإسبانية المطبقتان في المهنة</li><li>⚠️ أساسيات نقل المواد الخطرة</li><li>⛽ السياقة الاقتصادية</li><li>💼 الإدماج في وسط العمل</li></ul></div>
<div class="warning"><h2>🛡️ تنبيه مهم للسائقين</h2><p>Edriouche Truck Job لا يطلب من السائق دفع أموال مقابل وعد بالتوظيف. تحقق دائمًا من الشركة والعنوان ورقم الهاتف والبريد الإلكتروني قبل إرسال وثائقك أو دفع أي مبلغ.</p></div>
@elseif(app()->getLocale() === 'es')
<div class="warning"><h2>🛡️ Aviso importante</h2><p>Edriouche Truck Job no pide dinero a los conductores a cambio de una promesa de empleo. Verifique siempre la empresa, dirección, teléfono y correo electrónico antes de enviar documentos o realizar cualquier pago.</p></div>
@elseif(app()->getLocale() === 'en')
<div class="warning"><h2>🛡️ Important warning</h2><p>Edriouche Truck Job never asks drivers to pay money in exchange for a promise of employment. Always verify the company, address, phone number and email before sending documents or making any payment.</p></div>
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
@elseif(app()->getLocale() === 'en')
<a class="button" href="/jobs">🚛 Job offers</a>
<a class="button" href="/companies">🏢 Transport companies</a>
<a class="button" href="/">🏠 Home</a>
@else
<a class="button" href="/jobs">🚛 عروض العمل</a>
<a class="button" href="/companies">🏢 شركات النقل</a>
<a class="button" href="/">🏠 الرئيسية</a>
@endif
</div>


<section class="card" id="lesson-13">
@if(app()->getLocale() === 'es')
<h2>⚠️ 13. Transporte de mercancías peligrosas (ADR)</h2>
<p>Esta lección distingue la normativa y los procedimientos aplicables en Marruecos de los requisitos ADR utilizados en el transporte internacional por Europa. No debe suponerse que un certificado nacional se convierte automáticamente en un certificado ADR europeo.</p>
<h3>🇲🇦 A. Formación y reglas en Marruecos</h3>
<ul>
<li>La Ley marroquí 30-05 regula el transporte por carretera de mercancías peligrosas y las obligaciones de los participantes.</li>
<li>Para las categorías de vehículos determinadas por la normativa, el conductor debe disponer del certificado de formación especial. La ley prevé una formación de reciclaje cada cinco años, durante el último año del período.</li>
<li>Los vehículos sujetos a aprobación deben llevar el certificado de homologación/aptitud correspondiente; la Ley 30-05 establece una validez anual para este certificado del vehículo.</li>
<li>Antes de salir, compruebe la declaración de expedición, la ficha de seguridad, los documentos del vehículo y la señalización exigida para la carga concreta.</li>
<li>El conductor debe conocer los riesgos, las instrucciones de emergencia y el equipo requerido; no debe abrir bultos o cisternas durante el transporte ni fumar o utilizar llamas durante las operaciones.</li>
</ul>
<h3>🇪🇺 B. Formación ADR en Europa</h3>
<ul>
<li>La referencia internacional vigente es ADR 2025, aplicable desde el 1 de enero de 2025; compruebe siempre las correcciones y disposiciones nacionales vigentes.</li>
<li>La formación básica y el examen conducen al certificado ADR de conductor. Según la mercancía y el vehículo, pueden requerirse especializaciones para cisternas, clase 1 (explosivos) o clase 7 (radiactivos).</li>
<li>El certificado ADR de conductor tiene una validez de cinco años; la renovación exige la formación y el examen correspondientes antes de su vencimiento.</li>
<li>La documentación, el equipo, las placas y las condiciones del vehículo dependen de la mercancía, su embalaje, cantidades y modalidad de transporte.</li>
</ul>
<h3>🔎 C. Diferencias que debe recordar el conductor</h3>
<table style="width:100%;border-collapse:collapse"><tr><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Tema</th><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Marruecos</th><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Europa / ADR</th></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">Base legal</td><td style="padding:8px;border:1px solid #ccd5df">Ley 30-05 y sus textos de aplicación</td><td style="padding:8px;border:1px solid #ccd5df">ADR vigente y normativa nacional</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">Formación del conductor</td><td style="padding:8px;border:1px solid #ccd5df">Certificado marroquí de formación especial para las categorías sujetas</td><td style="padding:8px;border:1px solid #ccd5df">Certificado ADR y especializaciones aplicables</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">Vehículo</td><td style="padding:8px;border:1px solid #ccd5df">Certificado de aprobación cuando sea exigible</td><td style="padding:8px;border:1px solid #ccd5df">Aprobación y controles ADR según el tipo de vehículo</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">Validez</td><td style="padding:8px;border:1px solid #ccd5df">La ley prevé reciclaje del conductor cada cinco años y validez anual del certificado del vehículo</td><td style="padding:8px;border:1px solid #ccd5df">Certificado ADR del conductor: cinco años</td></tr></table>
<p><strong>Importante:</strong> antes de aceptar un transporte internacional, confirme con la autoridad competente y la empresa qué certificado de conductor y qué aprobación del vehículo se reconocen para esa operación. No dé por hecho que basta con mostrar un certificado marroquí.</p>
@elseif(app()->getLocale() === 'fr')
<h2>⚠️ 13. Transport des marchandises dangereuses (ADR)</h2>
<p>Cette leçon distingue les règles et procédures applicables au Maroc des exigences ADR utilisées pour le transport international en Europe. Un certificat national ne devient pas automatiquement un certificat ADR européen.</p>
<h3>🇲🇦 A. Formation et règles au Maroc</h3>
<ul>
<li>La loi marocaine 30-05 encadre le transport routier des marchandises dangereuses et les obligations des intervenants.</li>
<li>Pour les catégories de véhicules déterminées par la réglementation, le conducteur doit détenir une attestation de formation spéciale. La loi prévoit un recyclage tous les cinq ans, au cours de la dernière année de cette période.</li>
<li>Les véhicules soumis à agrément doivent disposer du certificat d’agrément correspondant. La loi 30-05 prévoit une validité annuelle de ce certificat du véhicule.</li>
<li>Avant le départ, vérifiez la déclaration d’expédition, la fiche de sécurité, les documents du véhicule et la signalisation exigée pour le chargement concerné.</li>
<li>Le conducteur doit connaître les risques, les consignes d’urgence et les équipements requis. Il ne doit pas ouvrir les colis ou citernes pendant le transport, ni fumer ou utiliser une flamme pendant les opérations.</li>
</ul>
<h3>🇪🇺 B. Formation ADR en Europe</h3>
<ul>
<li>La référence internationale en vigueur est l’ADR 2025, applicable depuis le 1er janvier 2025. Vérifiez également les rectificatifs et les règles nationales applicables.</li>
<li>La formation de base et l’examen permettent d’obtenir le certificat ADR conducteur. Selon la cargaison et le véhicule, des spécialisations peuvent être nécessaires pour les citernes, la classe 1 (explosifs) ou la classe 7 (radioactifs).</li>
<li>Le certificat ADR conducteur est valable cinq ans. Son renouvellement exige la formation et l’examen requis avant son expiration.</li>
<li>Les documents, équipements, plaques et conditions du véhicule dépendent de la marchandise, de son emballage, des quantités et du mode de transport.</li>
</ul>
<h3>🔎 C. Différences à retenir</h3>
<table style="width:100%;border-collapse:collapse"><tr><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Sujet</th><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Maroc</th><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Europe / ADR</th></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">Base juridique</td><td style="padding:8px;border:1px solid #ccd5df">Loi 30-05 et textes d’application</td><td style="padding:8px;border:1px solid #ccd5df">ADR en vigueur et règles nationales</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">Formation conducteur</td><td style="padding:8px;border:1px solid #ccd5df">Attestation marocaine de formation spéciale pour les catégories concernées</td><td style="padding:8px;border:1px solid #ccd5df">Certificat ADR et spécialisations nécessaires</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">Véhicule</td><td style="padding:8px;border:1px solid #ccd5df">Certificat d’agrément lorsqu’il est exigé</td><td style="padding:8px;border:1px solid #ccd5df">Agrément et contrôles ADR selon le véhicule</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">Validité</td><td style="padding:8px;border:1px solid #ccd5df">Recyclage conducteur quinquennal et certificat du véhicule valable un an selon la loi</td><td style="padding:8px;border:1px solid #ccd5df">Certificat ADR conducteur : cinq ans</td></tr></table>
<p><strong>Important :</strong> avant un transport international, confirmez auprès de l’autorité compétente et de l’entreprise quels certificats conducteur et agréments de véhicule sont reconnus pour l’opération. Ne supposez pas qu’un certificat marocain suffit automatiquement.</p>
@elseif(app()->getLocale() === 'en')
<h2>⚠️ 13. Dangerous goods transport (ADR)</h2>
<p>This lesson separates the rules and procedures applicable in Morocco from ADR requirements used for international transport in Europe. A national certificate does not automatically become a European ADR certificate.</p>
<h3>🇲🇦 A. Training and rules in Morocco</h3>
<ul>
<li>Moroccan Law 30-05 regulates road transport of dangerous goods and the duties of the parties involved.</li>
<li>For vehicle categories specified by the regulations, the driver must hold a special-training certificate. The law provides for refresher training every five years, during the final year of that period.</li>
<li>Vehicles subject to approval must carry the relevant vehicle approval certificate. Law 30-05 provides for annual validity of this vehicle certificate.</li>
<li>Before departure, check the consignment declaration, safety sheet, vehicle documents and the signs required for the specific load.</li>
<li>The driver must understand the hazards, emergency instructions and required equipment. Packages or tanks must not be opened during carriage, and smoking or open flames are prohibited during the relevant operations.</li>
</ul>
<h3>🇪🇺 B. ADR training in Europe</h3>
<ul>
<li>The current international reference is ADR 2025, applicable from 1 January 2025. Always check current corrigenda and national rules as well.</li>
<li>Basic training and an examination lead to an ADR driver certificate. Depending on the load and vehicle, additional specialisations may be required for tanks, Class 1 (explosives) or Class 7 (radioactive material).</li>
<li>The ADR driver certificate is valid for five years. Renewal requires the relevant training and examination before expiry.</li>
<li>Documents, equipment, plates and vehicle conditions depend on the substance, packaging, quantities and type of carriage.</li>
</ul>
<h3>🔎 C. Key differences</h3>
<table style="width:100%;border-collapse:collapse"><tr><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Topic</th><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Morocco</th><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Europe / ADR</th></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">Legal basis</td><td style="padding:8px;border:1px solid #ccd5df">Law 30-05 and implementing texts</td><td style="padding:8px;border:1px solid #ccd5df">Current ADR and national rules</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">Driver training</td><td style="padding:8px;border:1px solid #ccd5df">Moroccan special-training certificate for covered categories</td><td style="padding:8px;border:1px solid #ccd5df">ADR certificate and applicable specialisations</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">Vehicle</td><td style="padding:8px;border:1px solid #ccd5df">Vehicle approval certificate where required</td><td style="padding:8px;border:1px solid #ccd5df">ADR approval and checks according to vehicle type</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">Validity</td><td style="padding:8px;border:1px solid #ccd5df">Five-year driver refresher cycle and one-year vehicle certificate under the law</td><td style="padding:8px;border:1px solid #ccd5df">ADR driver certificate: five years</td></tr></table>
<p><strong>Important:</strong> before accepting an international load, confirm with the competent authority and the employer which driver certificate and vehicle approval are recognised for that operation. Do not assume a Moroccan certificate is automatically sufficient.</p>
@else
<h2>⚠️ 13. نقل البضائع الخطرة (ADR)</h2>
<p>يفصل هذا الدرس بين القواعد والإجراءات المعمول بها في المغرب ومتطلبات ADR الخاصة بالنقل الدولي في أوروبا. ولا تتحول الشهادة الوطنية تلقائيًا إلى شهادة ADR أوروبية.</p>
<h3>🇲🇦 أ. التكوين والقواعد في المغرب</h3>
<ul>
<li>ينظم القانون المغربي رقم 30.05 النقل الطرقي للبضائع الخطرة، ويحدد التزامات مختلف المتدخلين.</li>
<li>بالنسبة إلى أصناف المركبات التي تحددها النصوص التنظيمية، يجب أن يتوفر السائق على شهادة تثبت متابعة تكوين خاص. وينص القانون على إعادة التأهيل كل خمس سنوات خلال السنة الأخيرة من هذه المدة.</li>
<li>المركبات الخاضعة للاعتماد يجب أن تتوفر على شهادة الاعتماد الخاصة بها. وينص القانون 30.05 على صلاحية سنوية لشهادة اعتماد المركبة.</li>
<li>قبل الانطلاق، تحقق من تصريح الإرسال وبطاقة السلامة ووثائق المركبة والإشارات المطلوبة للشحنة المعنية.</li>
<li>يجب على السائق معرفة طبيعة الأخطار وتعليمات الطوارئ والتجهيزات المطلوبة. ويمنع فتح الطرود أو الصهاريج أثناء النقل، كما يمنع التدخين أو استعمال النار أثناء العمليات المعنية.</li>
</ul>
<h3>🇪🇺 ب. تكوين ADR في أوروبا</h3>
<ul>
<li>المرجع الدولي المعمول به هو ADR 2025، الساري ابتداءً من 1 يناير 2025، مع ضرورة مراجعة التصحيحات والقواعد الوطنية السارية.</li>
<li>يؤدي التكوين الأساسي والامتحان إلى الحصول على شهادة سائق ADR. وقد تلزم تخصصات إضافية حسب الشحنة والمركبة، مثل الصهاريج، الصنف 1 (المتفجرات)، أو الصنف 7 (المواد المشعة).</li>
<li>صلاحية شهادة سائق ADR خمس سنوات، ويستلزم تجديدها متابعة التكوين والامتحان المطلوبين قبل انتهاء الصلاحية.</li>
<li>تختلف الوثائق والتجهيزات واللوحات وشروط المركبة حسب المادة وتغليفها وكميتها وطريقة نقلها.</li>
</ul>
<h3>🔎 ج. أهم الاختلافات التي يجب على السائق معرفتها</h3>
<table style="width:100%;border-collapse:collapse"><tr><th style="text-align:start;padding:8px;border:1px solid #ccd5df">الموضوع</th><th style="text-align:start;padding:8px;border:1px solid #ccd5df">المغرب</th><th style="text-align:start;padding:8px;border:1px solid #ccd5df">أوروبا / ADR</th></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">المرجع القانوني</td><td style="padding:8px;border:1px solid #ccd5df">القانون 30.05 ونصوصه التطبيقية</td><td style="padding:8px;border:1px solid #ccd5df">اتفاق ADR الساري والقواعد الوطنية</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">تكوين السائق</td><td style="padding:8px;border:1px solid #ccd5df">شهادة التكوين الخاص المغربية للأصناف المعنية</td><td style="padding:8px;border:1px solid #ccd5df">شهادة ADR والتخصصات المطلوبة</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">المركبة</td><td style="padding:8px;border:1px solid #ccd5df">شهادة اعتماد المركبة عند وجوبها</td><td style="padding:8px;border:1px solid #ccd5df">اعتماد ومراقبة ADR حسب نوع المركبة</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">الصلاحية</td><td style="padding:8px;border:1px solid #ccd5df">إعادة تأهيل السائق كل خمس سنوات وصلاحية سنوية لشهادة المركبة وفق القانون</td><td style="padding:8px;border:1px solid #ccd5df">شهادة سائق ADR: خمس سنوات</td></tr></table>
<p><strong>مهم:</strong> قبل قبول نقل دولي، تأكد من السلطة المختصة والشركة من الشهادة المطلوبة للسائق واعتماد المركبة المقبولين لهذه العملية. لا تفترض أن الشهادة المغربية وحدها كافية تلقائيًا.</p>
@endif

<figure class="sign-illustration">
<img src="{{ asset('images/adr-hazard-placards.svg') }}" alt="أمثلة لملصقات الخطر ADR ولوحة برتقالية نموذجية تحمل رقم الخطر 33 ورقم الأمم المتحدة 1203 للبنزين." loading="lazy">
<figcaption>
@if(app()->getLocale() === 'es') Ejemplos didácticos de etiquetas ADR y panel naranja: 33 / UN 1203 (gasolina).
@elseif(app()->getLocale() === 'fr') Exemples de quelques étiquettes ADR et de panneau orange : 33 / UN 1203 (essence).
@elseif(app()->getLocale() === 'en') Selected ADR hazard label examples and an orange plate: 33 / UN 1203 (petrol).
@else أمثلة تعليمية لبعض ملصقات الخطر ولوحة برتقالية: 33 / UN 1203 (بنزين).
@endif
</figcaption>
</figure>
<div class="sign-note">
@if(app()->getLocale() === 'es')
<strong>Cómo leer el panel:</strong> el número superior identifica el peligro y el inferior es el número ONU de la sustancia. 33 / UN 1203 es un ejemplo para gasolina, no un código universal. La colocación y el número de paneles dependen del tipo de transporte y de las disposiciones ADR aplicables.
@elseif(app()->getLocale() === 'fr')
<strong>Lecture du panneau :</strong> le numéro supérieur identifie le danger et le numéro inférieur est le numéro ONU de la matière. 33 / UN 1203 est un exemple pour l’essence, pas un code universel. L’emplacement et le nombre de panneaux dépendent du transport et des dispositions ADR applicables.
@elseif(app()->getLocale() === 'en')
<strong>Reading the plate:</strong> the upper number identifies the hazard and the lower number is the substance’s UN number. 33 / UN 1203 is an example for petrol, not a universal code. Plate placement and quantity depend on the type of carriage and applicable ADR provisions.
@else
<strong>طريقة قراءة اللوحة:</strong> الرقم العلوي يحدد نوع الخطر، والرقم السفلي هو رقم الأمم المتحدة للمادة. 33 / UN 1203 مثال خاص بالبنزين وليس رمزًا عامًا لكل المواد. ويتحدد موضع اللوحات وعددها حسب طريقة النقل وأحكام ADR المنطبقة.
@endif
</div>
<h3>
@if(app()->getLocale() === 'es') Fuentes oficiales y consulta
@elseif(app()->getLocale() === 'fr') Sources officielles et références
@elseif(app()->getLocale() === 'en') Official sources and references
@else المصادر والمراجع
@endif
</h3>
<ul>
<li><a href="https://unece.org/adr-2025-files" target="_blank" rel="noopener noreferrer">UNECE – texto oficial ADR 2025</a></li>
<li><a href="https://www.mindop.sk/fileadmin/documents/doprava/nebezpecnetovary/cesta/ADR_2025_Vol._II._EN.pdf" target="_blank" rel="noopener noreferrer">ADR 2025, volumen II – señalización y paneles naranjas</a></li>
<li><a href="https://maloi.ma/ar/law/loi-transport-marchandises-dangereuses" target="_blank" rel="noopener noreferrer">Marruecos – Ley 30-05 (texto legal)</a></li>
</ul>
<p><small>Contenido educativo. No sustituye la formación homologada, la documentación oficial ni las instrucciones de la autoridad competente.</small></p>

<h3 id="adr-fire-risks">
@if(app()->getLocale() === 'es') 🔥 D. Riesgos, clases de fuego y actuación segura
@elseif(app()->getLocale() === 'fr') 🔥 D. Risques, classes de feu et conduite à tenir
@elseif(app()->getLocale() === 'en') 🔥 D. Hazards, fire classes and safe response
@else 🔥 د. المخاطر وأنواع الحرائق والتصرف الآمن
@endif
</h3>
@if(app()->getLocale() === 'es')
<p><strong>Riesgos principales en el transporte ADR:</strong> incendio y explosión; intoxicación o asfixia por gases y vapores; quemaduras químicas y corrosión; reacciones peligrosas por mezcla de sustancias incompatibles; contaminación del suelo y del agua; y desplazamiento de la carga o daños en cisternas tras un accidente.</p>
<p>La gasolina y el gasóleo pueden producir vapores inflamables; el propano y el butano pueden formar nubes de gas explosivas; los gases tóxicos pueden causar intoxicación; los corrosivos pueden quemar piel y ojos; y algunas sustancias reaccionan con agua, calor u otros productos.</p>
<table style="width:100%;border-collapse:collapse"><tr><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Clase de fuego (EN 2)</th><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Qué arde</th><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Agente adecuado, si el fuego es pequeño y es seguro intervenir</th></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">A</td><td style="padding:8px;border:1px solid #ccd5df">Sólidos: madera, papel, tejidos, neumáticos</td><td style="padding:8px;border:1px solid #ccd5df">Agua o espuma adecuados; polvo ABC según etiqueta</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">B</td><td style="padding:8px;border:1px solid #ccd5df">Líquidos inflamables: gasolina, gasóleo, disolventes</td><td style="padding:8px;border:1px solid #ccd5df">Espuma compatible, polvo BC/ABC o CO₂ según el riesgo</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">C</td><td style="padding:8px;border:1px solid #ccd5df">Gases inflamables: propano, butano, gas natural</td><td style="padding:8px;border:1px solid #ccd5df">Cortar el suministro solo si puede hacerse sin peligro. No apagar la llama si la fuga continúa</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">D</td><td style="padding:8px;border:1px solid #ccd5df">Metales combustibles: magnesio, sodio, litio y ciertos polvos metálicos</td><td style="padding:8px;border:1px solid #ccd5df">Polvo especial clase D específico para el metal; intervención especializada</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">F</td><td style="padding:8px;border:1px solid #ccd5df">Aceites y grasas de cocina</td><td style="padding:8px;border:1px solid #ccd5df">Extintor químico húmedo clase F</td></tr></table>
<p><strong>Incendio eléctrico:</strong> en la clasificación europea EN 2 no es una clase de fuego independiente. Es un incendio con equipo bajo tensión. Si es posible, corte la corriente sin acercarse al peligro y utilice únicamente un extintor cuya etiqueta autorice expresamente su uso en equipos eléctricos bajo tensión, como CO₂ o polvo adecuado. Nunca use agua ni espuma convencional sobre equipos energizados.</p>
<h4>Cómo actuar ante un incendio en un camión</h4>
<ol><li>Deténgase en un lugar seguro si es posible, active las luces de emergencia, apague el motor y accione el freno de estacionamiento.</li><li>Evacúe la cabina y aleje a las personas del tráfico, del humo y de la carga. Sitúese a barlovento (contra el viento) y, si es posible, en una zona elevada cuando haya vapores densos.</li><li>Llame a los servicios de emergencia. Comunique el número ONU, los paneles naranjas, la clase de peligro, la ubicación y si hay fuga, fuego o personas heridas.</li><li>No toque el producto ni camine sobre un derrame. Evite chispas, llamas, fumar y arrancar el motor.</li><li>Use un extintor solo ante un fuego incipiente, con formación, una vía de escape libre y el agente correcto. Si el fuego crece, hay humo intenso, una cisterna está calentándose o existe fuga de gas/producto, aléjese y espere a los bomberos.</li><li>No vuelva a la cabina ni mueva el vehículo salvo indicación de los servicios de emergencia.</li></ol>
<p><strong>Regla esencial:</strong> en una fuga de gas inflamable, apagar la llama sin detener la fuga puede crear una nube explosiva. No intente apagarla; el corte del suministro solo debe hacerlo personal capacitado cuando sea seguro.</p>
@elseif(app()->getLocale() === 'fr')
<p><strong>Principaux risques du transport ADR :</strong> incendie et explosion ; intoxication ou asphyxie par les gaz et vapeurs ; brûlures chimiques et corrosion ; réactions dangereuses entre produits incompatibles ; pollution des sols et de l’eau ; déplacement du chargement ou détérioration d’une citerne après un accident.</p>
<p>L’essence et le gazole peuvent dégager des vapeurs inflammables ; le propane et le butane peuvent former des nuages explosifs ; les gaz toxiques peuvent intoxiquer ; les produits corrosifs peuvent brûler la peau et les yeux ; certaines matières réagissent avec l’eau, la chaleur ou d’autres produits.</p>
<table style="width:100%;border-collapse:collapse"><tr><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Classe de feu (EN 2)</th><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Combustible</th><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Agent adapté, uniquement si le feu est limité et l’intervention sûre</th></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">A</td><td style="padding:8px;border:1px solid #ccd5df">Solides : bois, papier, textiles, pneus</td><td style="padding:8px;border:1px solid #ccd5df">Eau ou mousse adaptées ; poudre ABC selon l’étiquette</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">B</td><td style="padding:8px;border:1px solid #ccd5df">Liquides inflammables : essence, gazole, solvants</td><td style="padding:8px;border:1px solid #ccd5df">Mousse compatible, poudre BC/ABC ou CO₂ selon le risque</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">C</td><td style="padding:8px;border:1px solid #ccd5df">Gaz inflammables : propane, butane, gaz naturel</td><td style="padding:8px;border:1px solid #ccd5df">Couper l’alimentation uniquement sans danger. Ne pas éteindre la flamme si la fuite continue</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">D</td><td style="padding:8px;border:1px solid #ccd5df">Métaux combustibles : magnésium, sodium, lithium et certaines poudres métalliques</td><td style="padding:8px;border:1px solid #ccd5df">Poudre spéciale classe D adaptée au métal ; intervention spécialisée</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">F</td><td style="padding:8px;border:1px solid #ccd5df">Huiles et graisses de cuisson</td><td style="padding:8px;border:1px solid #ccd5df">Extincteur chimique humide classe F</td></tr></table>
<p><strong>Feu d’origine électrique :</strong> dans la classification européenne EN 2, ce n’est pas une classe de feu indépendante. Il s’agit d’un feu impliquant un équipement sous tension. Si cela peut être fait sans danger, coupez l’alimentation et utilisez uniquement un extincteur dont l’étiquette autorise explicitement l’usage sur des équipements électriques sous tension, par exemple CO₂ ou poudre adaptée. Jamais d’eau ni de mousse ordinaire sur un équipement sous tension.</p>
<h4>Conduite à tenir en cas d’incendie d’un camion</h4>
<ol><li>Arrêtez-vous dans un endroit sûr si possible, allumez les feux de détresse, coupez le moteur et serrez le frein de stationnement.</li><li>Évacuez la cabine et éloignez les personnes de la circulation, de la fumée et du chargement. Placez-vous au vent (du côté d’où vient le vent) et, si possible, en hauteur en présence de vapeurs lourdes.</li><li>Appelez les secours. Communiquez le numéro ONU, les panneaux orange, la classe de danger, le lieu et la présence éventuelle d’une fuite, d’un feu ou de blessés.</li><li>Ne touchez pas le produit et ne marchez pas dans un déversement. Évitez étincelles, flammes, cigarettes et démarrage du moteur.</li><li>N’utilisez un extincteur que sur un départ de feu, avec formation, une sortie libre et l’agent adapté. Si le feu se développe, si la fumée est dense, si une citerne chauffe ou s’il y a une fuite de gaz/produit, éloignez-vous et attendez les pompiers.</li><li>Ne retournez pas dans la cabine et ne déplacez pas le véhicule sauf instruction des secours.</li></ol>
<p><strong>Règle essentielle :</strong> éteindre une flamme de gaz inflammable sans arrêter la fuite peut créer un nuage explosif. N’essayez pas de l’éteindre ; seule une personne formée doit couper l’alimentation si cela peut être fait sans danger.</p>
@elseif(app()->getLocale() === 'en')
<p><strong>Main ADR transport hazards:</strong> fire and explosion; poisoning or asphyxiation from gases and vapours; chemical burns and corrosion; dangerous reactions between incompatible substances; soil and water contamination; and shifting cargo or tanker damage after a collision.</p>
<p>Petrol and diesel can release flammable vapours; propane and butane can form explosive gas clouds; toxic gases can poison; corrosives can burn skin and eyes; and some substances react dangerously with water, heat or other products.</p>
<table style="width:100%;border-collapse:collapse"><tr><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Fire class (EN 2)</th><th style="text-align:start;padding:8px;border:1px solid #ccd5df">What is burning</th><th style="text-align:start;padding:8px;border:1px solid #ccd5df">Suitable agent, only for a small fire when safe to act</th></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">A</td><td style="padding:8px;border:1px solid #ccd5df">Solids: wood, paper, textiles, tyres</td><td style="padding:8px;border:1px solid #ccd5df">Suitable water or foam; ABC powder as labelled</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">B</td><td style="padding:8px;border:1px solid #ccd5df">Flammable liquids: petrol, diesel, solvents</td><td style="padding:8px;border:1px solid #ccd5df">Compatible foam, BC/ABC powder or CO₂ depending on the risk</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">C</td><td style="padding:8px;border:1px solid #ccd5df">Flammable gases: propane, butane, natural gas</td><td style="padding:8px;border:1px solid #ccd5df">Isolate the supply only if safe. Do not extinguish the flame while the leak continues</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">D</td><td style="padding:8px;border:1px solid #ccd5df">Combustible metals: magnesium, sodium, lithium and certain metal powders</td><td style="padding:8px;border:1px solid #ccd5df">Special Class D powder designed for that metal; specialist response</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">F</td><td style="padding:8px;border:1px solid #ccd5df">Cooking oils and fats</td><td style="padding:8px;border:1px solid #ccd5df">Class F wet-chemical extinguisher</td></tr></table>
<p><strong>Electrical fire:</strong> under European EN 2 classification, this is not a separate fire class. It is a fire involving energised electrical equipment. If safe, isolate the power and use only an extinguisher whose label explicitly permits use on live electrical equipment, such as suitable CO₂ or powder. Never use water or ordinary foam on energised equipment.</p>
<h4>What to do if a truck catches fire</h4>
<ol><li>Stop in a safe place if possible, switch on hazard lights, turn off the engine and apply the parking brake.</li><li>Evacuate the cab and move people away from traffic, smoke and the load. Stay upwind and, where possible, on higher ground if heavy vapours may be present.</li><li>Call emergency services. Give the UN number, orange-plate information, hazard class, location, and whether there is a leak, fire or injury.</li><li>Do not touch the product or walk through a spill. Avoid sparks, flames, smoking and restarting the engine.</li><li>Use an extinguisher only on an incipient fire, if trained, with a clear escape route and the correct agent. If the fire grows, smoke is heavy, a tank is heating, or gas/product is leaking, withdraw and wait for firefighters.</li><li>Do not return to the cab or move the vehicle unless emergency services instruct you to do so.</li></ol>
<p><strong>Essential rule:</strong> extinguishing a flammable-gas flame without stopping the leak can create an explosive cloud. Do not attempt to put it out; only trained personnel should isolate the supply when it is safe.</p>
@else
<p><strong>أهم مخاطر نقل المواد الخطرة:</strong> الحريق والانفجار؛ التسمم أو الاختناق بسبب الغازات والأبخرة؛ الحروق الكيميائية والتآكل؛ التفاعلات الخطيرة بين المواد غير المتوافقة؛ تلوث التربة والمياه؛ وانزياح الحمولة أو تضرر الصهريج بعد حادث.</p>
<p>قد يطلق البنزين والغازوال أبخرة قابلة للاشتعال؛ وقد يشكل البروبان والبيوتان سحباً غازية قابلة للانفجار؛ وقد تسبب الغازات السامة التسمم؛ وتحرق المواد الأكّالة الجلد والعينين؛ كما تتفاعل بعض المواد بشكل خطير مع الماء أو الحرارة أو مواد أخرى.</p>
<table style="width:100%;border-collapse:collapse"><tr><th style="text-align:start;padding:8px;border:1px solid #ccd5df">صنف الحريق (EN 2)</th><th style="text-align:start;padding:8px;border:1px solid #ccd5df">المادة المشتعلة</th><th style="text-align:start;padding:8px;border:1px solid #ccd5df">وسيلة الإطفاء المناسبة، فقط إذا كان الحريق محدوداً والتدخل آمناً</th></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">A</td><td style="padding:8px;border:1px solid #ccd5df">مواد صلبة: الخشب والورق والأقمشة والإطارات</td><td style="padding:8px;border:1px solid #ccd5df">الماء أو الرغوة المناسبة؛ أو مسحوق ABC حسب ملصق المطفأة</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">B</td><td style="padding:8px;border:1px solid #ccd5df">سوائل قابلة للاشتعال: البنزين والغازوال والمذيبات</td><td style="padding:8px;border:1px solid #ccd5df">رغوة متوافقة أو مسحوق BC/ABC أو CO₂ بحسب الخطر</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">C</td><td style="padding:8px;border:1px solid #ccd5df">غازات قابلة للاشتعال: البروبان والبيوتان والغاز الطبيعي</td><td style="padding:8px;border:1px solid #ccd5df">قطع مصدر الغاز فقط إذا كان ذلك آمناً. لا تطفئ اللهب ما دام التسرب مستمراً</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">D</td><td style="padding:8px;border:1px solid #ccd5df">معادن قابلة للاشتعال: المغنيسيوم والصوديوم والليثيوم وبعض مساحيق المعادن</td><td style="padding:8px;border:1px solid #ccd5df">مسحوق خاص بالصنف D ومناسب لنوع المعدن؛ تدخل متخصص</td></tr>
<tr><td style="padding:8px;border:1px solid #ccd5df">F</td><td style="padding:8px;border:1px solid #ccd5df">زيوت ودهون الطهي</td><td style="padding:8px;border:1px solid #ccd5df">مطفأة كيميائية رطبة مخصصة للصنف F</td></tr></table>
<p><strong>الحريق الكهربائي:</strong> في التصنيف الأوروبي EN 2 لا يعتبر صنفاً مستقلاً للحرائق، بل هو حريق يشمل معدات كهربائية تحت التوتر. إذا أمكن بأمان، افصل التيار واستعمل فقط مطفأة يصرح ملصقها صراحة باستعمالها على المعدات الكهربائية تحت التوتر، مثل CO₂ أو مسحوق مناسب. لا تستعمل الماء أو الرغوة العادية على معدات ما زالت تحت التوتر.</p>
<h4>كيف يتصرف سائق الشاحنة عند نشوب حريق؟</h4>
<ol><li>توقف في مكان آمن إن أمكن، شغّل أضواء التحذير، أطفئ المحرك وشد فرامل التثبيت.</li><li>أخلِ المقصورة وأبعد الأشخاص عن حركة المرور والدخان والحمولة. ابتعد باتجاه عكس مسار الدخان (عكس اتجاه الريح)، ويفضل إلى مكان مرتفع عند احتمال وجود أبخرة ثقيلة.</li><li>اتصل بفرق الطوارئ. أبلغهم برقم الأمم المتحدة UN، ومعلومات اللوحة البرتقالية، وصنف الخطر، والموقع، وهل يوجد تسرب أو حريق أو مصابون.</li><li>لا تلمس المادة ولا تمش فوق الانسكاب. تجنب الشرر واللهب والتدخين وإعادة تشغيل المحرك.</li><li>لا تستعمل المطفأة إلا في بداية حريق محدود، إذا كنت مدرباً، وطريق الخروج مفتوح، والمادة المطفئة مناسبة. إذا انتشر الحريق أو اشتد الدخان أو سخن الصهريج أو حدث تسرب، ابتعد وانتظر رجال الإطفاء.</li><li>لا تعد إلى المقصورة ولا تحرك الشاحنة إلا بتعليمات فرق الطوارئ.</li></ol>
<p><strong>قاعدة أساسية:</strong> إطفاء لهب الغاز القابل للاشتعال دون إيقاف التسرب قد يؤدي إلى تكوّن سحابة غازية قابلة للانفجار. لا تحاول إطفاء اللهب؛ ولا يقطع مصدر الغاز إلا شخص مؤهل إذا كان ذلك آمناً.</p>
@endif
</section>

</div>

<footer>© 2026 Edriouche Truck Job</footer>


<script>
document.querySelectorAll('.quiz-card').forEach(function(card) {
    const button = card.querySelector('.quiz-submit');
    const result = card.querySelector('.quiz-result');
    const lang = card.dataset.quiz || 'ar';
    const messages = {
        ar: {missing:'يرجى الإجابة عن جميع الأسئلة أولاً.', score:'النتيجة', of:'من', perfect:'ممتاز! جميع إجاباتك صحيحة.', review:'راجع الإجابات الصحيحة الموضحة أدناه ثم حاول مرة أخرى.', correct:'الإجابة الصحيحة: ', right:'إجابة صحيحة.', wrong:'إجابة غير صحيحة.'},
        es: {missing:'Responde primero a todas las preguntas.', score:'Resultado', of:'de', perfect:'¡Excelente! Todas tus respuestas son correctas.', review:'Revisa las respuestas correctas indicadas y vuelve a intentarlo.', correct:'Respuesta correcta: ', right:'Respuesta correcta.', wrong:'Respuesta incorrecta.'},
        fr: {missing:'Veuillez répondre à toutes les questions.', score:'Résultat', of:'sur', perfect:'Excellent ! Toutes vos réponses sont correctes.', review:'Consultez les bonnes réponses indiquées puis réessayez.', correct:'Bonne réponse : ', right:'Bonne réponse.', wrong:'Réponse incorrecte.'},
        en: {missing:'Please answer all questions first.', score:'Score', of:'out of', perfect:'Excellent! All your answers are correct.', review:'Review the correct answers shown below and try again.', correct:'Correct answer: ', right:'Correct answer.', wrong:'Incorrect answer.'}
    };
    const msg = messages[lang] || messages.ar;

    button.addEventListener('click', function() {
        const questions = Array.from(card.querySelectorAll('fieldset'));
        let score = 0;
        let unanswered = false;

        questions.forEach(function(question) {
            const selected = question.querySelector('input[type="radio"]:checked');
            const correct = question.dataset.correct;
            const correctInput = question.querySelector('input[value="' + correct + '"]');
            const correctLabel = correctInput ? correctInput.closest('label') : null;
            let feedback = question.querySelector('.quiz-feedback');
            if (!feedback) {
                feedback = document.createElement('p');
                feedback.className = 'quiz-feedback';
                feedback.style.marginTop = '10px';
                feedback.style.fontWeight = 'bold';
                question.appendChild(feedback);
            }
            if (!selected) {
                unanswered = true;
                question.style.borderColor = '#c58b24';
                feedback.textContent = msg.correct + (correctLabel ? correctLabel.textContent.trim() : '');
                feedback.style.color = '#9a6700';
                return;
            }
            if (selected.value === correct) {
                score++;
                question.style.borderColor = '#287a52';
                feedback.textContent = msg.right;
                feedback.style.color = '#287a52';
            } else {
                question.style.borderColor = '#c0392b';
                feedback.textContent = msg.wrong + ' ' + msg.correct + (correctLabel ? correctLabel.textContent.trim() : '');
                feedback.style.color = '#c0392b';
            }
        });

        if (unanswered) {
            result.textContent = msg.missing;
            return;
        }
        result.textContent = msg.score + ': ' + score + ' ' + msg.of + ' ' + questions.length +
            ' (' + Math.round(score / questions.length * 100) + '%). ' +
            (score === questions.length ? msg.perfect : msg.review);
    });
});
</script>

<script>
document.querySelectorAll('[data-driver-test]').forEach(function(card) {
 const submit=card.querySelector('.driver-test-submit');
 const reset=card.querySelector('.driver-test-reset');
 const result=card.querySelector('.driver-test-result');
 submit.addEventListener('click', function() {
  const questions=Array.from(card.querySelectorAll('fieldset'));
  let score=0, unanswered=false;
  questions.forEach(function(q) {
   const selected=q.querySelector('input[type="radio"]:checked');
   const feedback=q.querySelector('.driver-feedback');
   feedback.hidden=false;
   if(!selected){ unanswered=true; q.style.borderColor='#c58b24'; feedback.textContent='لم تتم الإجابة عن هذا السؤال.'; return; }
   const correct=selected.value===q.dataset.correct;
   if(correct) score++;
   q.style.borderColor=correct?'#287a52':'#c0392b';
   feedback.textContent=(correct?'✓ ':'✗ ')+(correct?'إجابة صحيحة. ':'إجابة غير صحيحة. ')+q.dataset.explanation;
  });
  if(unanswered){ result.textContent='أكمل جميع الأسئلة أولاً؛ لم تُحتسب النتيجة بعد.'; return; }
  result.textContent='النتيجة: '+score+' من '+questions.length+' ('+Math.round(score/questions.length*100)+'%). '+(score===5?'ممتاز!':'راجع الشروحات ثم أعد الاختبار.');
 });
 reset.addEventListener('click', function(){
  card.querySelectorAll('input[type="radio"]').forEach(function(input){input.checked=false;});
  card.querySelectorAll('fieldset').forEach(function(q){q.style.borderColor='#bbb';const f=q.querySelector('.driver-feedback');f.hidden=true;f.textContent='';});
  result.textContent='';
 });
});
</script>

</body>
</html>
