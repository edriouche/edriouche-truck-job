@include("partials.language-switcher")
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @if(app()->getLocale() === 'es')
            Centros y empresas de formación de conductores | Edriouche Truck Job
        @elseif(app()->getLocale() === 'fr')
            Centres et entreprises de formation des conducteurs | Edriouche Truck Job
        @else
            شركات ومراكز تكوين السائقين | Edriouche Truck Job
        @endif
    </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 950px;
            margin: auto;
            padding: 20px;
            line-height: 1.8;
            background: #f7f9fc;
            color: #222;
        }
        h1 {
            color: #075aaa;
            text-align: center;
            margin-bottom: 25px;
        }
        .intro {
            background: white;
            padding: 18px;
            border-radius: 12px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,.06);
        }
        .card {
            background: white;
            padding: 20px;
            margin: 18px 0;
            border-radius: 14px;
            box-shadow: 0 2px 10px rgba(0,0,0,.08);
            border-right: 5px solid #075aaa;
        }
        .card h2 {
            color: #075aaa;
            margin-top: 0;
        }
        .card ul {
            padding-right: 22px;
        }
        html[dir="ltr"] .card {
            border-right: none;
            border-left: 5px solid #075aaa;
        }
        html[dir="ltr"] .card ul {
            padding-right: 0;
            padding-left: 22px;
        }
        .button {
            display: inline-block;
            background: #075aaa;
            color: white;
            padding: 9px 15px;
            border-radius: 8px;
            text-decoration: none;
            margin: 5px 3px;
        }
        .button:hover {
            opacity: .9;
        }
        .back {
            display: inline-block;
            margin-top: 20px;
            color: #075aaa;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

@if(app()->getLocale() === 'es')

    <h1>🏫 Centros y empresas de formación de conductores</h1>

    <div class="intro">
        <p>
            Esta página reúne instituciones y centros que ofrecen formación
            relacionada con la conducción profesional, el transporte y la logística en Marruecos.
        </p>
    </div>

    <div class="card">
        <h2>🚛 GENADEC</h2>
        <p>Formación para conductores profesionales de transporte de mercancías y pasajeros.</p>
        <ul>
            <li>FQIMO – Formación inicial obligatoria</li>
            <li>FCO – Formación continua obligatoria</li>
            <li>Transporte de mercancías y pasajeros</li>
            <li>ADR – Transporte de mercancías peligrosas</li>
            <li>Conducción económica y defensiva</li>
            <li>Formación para conductores que desean trabajar en Europa</li>
        </ul>
        <p>📍 Centro de Tánger: RN. 1, PK 14, Station Gueznaya</p>
        <p>📍 Centro de Aïn Atiq: Zone Industrielle Aïn Atig</p>
        <p>📞 Tánger: 05 39 42 44 14</p>
        <a class="button" href="https://genadec.com/" target="_blank">🌐 Sitio oficial GENADEC</a>
        <a class="button" href="https://genadec.com/inscription/" target="_blank">📚 Inscripción / formación</a>
    </div>

    <div class="card">
        <h2>🚚 IFTL – Institut de Formation aux Métiers du Transport et de la Logistique</h2>
        <p>
            Instituto especializado en transporte y logística que ofrece formación
            profesional para conductores de transporte por carretera.
        </p>
        <ul>
            <li>Conductor de transporte por carretera de mercancías</li>
            <li>Conductor de transporte por carretera de pasajeros</li>
            <li>Formación FQIMO y FCO</li>
            <li>Conducción preventiva y eco-conducción</li>
            <li>Reglamentación social europea</li>
            <li>Transporte de mercancías peligrosas</li>
            <li>Técnicas de amarre y seguridad de la carga</li>
        </ul>
        <p>📍 Polo Urbano de Nouaceur – LOT P'41</p>
        <p>📞 +212 522 07 87 05</p>
        <p>💬 WhatsApp: 06 66 04 71 53</p>
        <a class="button" href="https://iftl.ma/" target="_blank">🌐 Sitio oficial IFTL</a>
        <a class="button" href="https://iftl.ma/candidature-en-ligne/" target="_blank">📚 Inscripción</a>
    </div>

    <div class="card">
        <h2>🏫 OFPPT – Formación profesional</h2>
        <p>
            El OFPPT ofrece programas relacionados con el transporte por carretera,
            incluido el perfil de conductor profesional.
        </p>
        <ul>
            <li>Conductor de transporte por carretera de mercancías</li>
            <li>Conductor de transporte por carretera de pasajeros</li>
            <li>Seguridad y conducción económica</li>
            <li>Carga, sujeción y entrega de mercancías</li>
            <li>Transporte internacional</li>
            <li>Transporte de mercancías peligrosas</li>
        </ul>
        <a class="button" href="https://www.ofppt.ma/" target="_blank">🌐 Sitio oficial OFPPT</a>
        <a class="button" href="https://www.ofppt.ma/" target="_blank">📚 Formación conductor de mercancías</a>
    </div>

@elseif(app()->getLocale() === 'fr')

    <h1>🏫 Centres et entreprises de formation des conducteurs</h1>

    <div class="intro">
        <p>
            Cette page rassemble des institutions et des centres proposant des formations
            liées à la conduite professionnelle, au transport et à la logistique au Maroc.
        </p>
    </div>

    <div class="card">
        <h2>🚛 GENADEC</h2>
        <p>Formation des conducteurs professionnels dans le transport de marchandises et de voyageurs.</p>
        <ul>
            <li>FQIMO – Formation Qualifiante Initiale Minimale Obligatoire</li>
            <li>FCO – Formation Continue Obligatoire</li>
            <li>Transport de marchandises et de voyageurs</li>
            <li>ADR – Transport de matières dangereuses</li>
            <li>Éco-conduite et conduite défensive</li>
            <li>Formation pour conducteurs souhaitant travailler en Europe</li>
        </ul>
        <p>📍 Centre de Tanger : RN. 1, PK 14, Station Gueznaya</p>
        <p>📍 Centre d'Aïn Atiq : Zone Industrielle Aïn Atig</p>
        <p>📞 Tanger : 05 39 42 44 14</p>
        <a class="button" href="https://genadec.com/" target="_blank">🌐 Site officiel GENADEC</a>
        <a class="button" href="https://genadec.com/inscription/" target="_blank">📚 Inscription / formation</a>
    </div>

    <div class="card">
        <h2>🚚 IFTL – Institut de Formation aux Métiers du Transport et de la Logistique</h2>
        <p>
            Institut spécialisé dans le transport et la logistique proposant des formations
            professionnelles pour les conducteurs routiers.
        </p>
        <ul>
            <li>Conducteur(trice) en transport routier de marchandises</li>
            <li>Conducteur(trice) en transport routier de personnes</li>
            <li>Formation FQIMO et FCO</li>
            <li>Conduite préventive et éco-conduite</li>
            <li>Réglementation sociale européenne</li>
            <li>Transport de matières dangereuses</li>
            <li>Techniques d'arrimage et sécurité du chargement</li>
        </ul>
        <p>📍 Pôle Urbain de Nouaceur – LOT P'41</p>
        <p>📞 +212 522 07 87 05</p>
        <p>💬 WhatsApp : 06 66 04 71 53</p>
        <a class="button" href="https://iftl.ma/" target="_blank">🌐 Site officiel IFTL</a>
        <a class="button" href="https://iftl.ma/candidature-en-ligne/" target="_blank">📚 Inscription</a>
    </div>

    <div class="card">
        <h2>🏫 OFPPT – Formation professionnelle</h2>
        <p>
            L'OFPPT propose des formations liées au transport routier,
            notamment dans le domaine de la conduite professionnelle.
        </p>
        <ul>
            <li>Conducteur routier de marchandises</li>
            <li>Conducteur routier de voyageurs</li>
            <li>Sécurité et conduite économique</li>
            <li>Chargement, calage et arrimage des marchandises</li>
            <li>Transport international</li>
            <li>Transport de matières dangereuses</li>
        </ul>
        <a class="button" href="https://www.ofppt.ma/" target="_blank">🌐 Site officiel OFPPT</a>
        <a class="button" href="https://www.ofppt.ma/" target="_blank">📚 Formation conducteur de marchandises</a>
    </div>

@else

    <h1>🏫 شركات ومراكز تكوين السائقين</h1>

    <div class="intro">
        <p>
            هذه الصفحة تجمع مؤسسات ومراكز تقدم تكوينات مرتبطة بالسياقة المهنية
            والنقل واللوجستيك في المغرب.
        </p>
    </div>

    <div class="card">
        <h2>🚛 GENADEC</h2>
        <p>تكوين السائقين المهنيين في نقل البضائع والمسافرين.</p>
        <ul>
            <li>FQIMO – التكوين الأولي الإلزامي للسائق المهني</li>
            <li>FCO – التكوين المستمر الإلزامي</li>
            <li>نقل البضائع ونقل المسافرين</li>
            <li>ADR – نقل المواد الخطرة</li>
            <li>السياقة الاقتصادية والسياقة الدفاعية</li>
            <li>تكوين السائقين الراغبين في العمل في أوروبا</li>
        </ul>
        <p>📍 مركز طنجة: RN. 1, PK 14, محطة كزناية</p>
        <p>📍 مركز عين عتيق: المنطقة الصناعية عين عتيق</p>
        <p>📞 طنجة: 05 39 42 44 14</p>
        <a class="button" href="https://genadec.com/" target="_blank">🌐 الموقع الرسمي GENADEC</a>
        <a class="button" href="https://genadec.com/inscription/" target="_blank">📚 التسجيل والتكوين</a>
    </div>

    <div class="card">
        <h2>🚚 IFTL – معهد التكوين في مهن النقل واللوجستيك</h2>
        <p>
            مؤسسة متخصصة في النقل واللوجستيك وتقدم تكوينات مهنية للسائقين
            في النقل الطرقي.
        </p>
        <ul>
            <li>سائق في النقل الطرقي للبضائع</li>
            <li>سائق في النقل الطرقي للمسافرين</li>
            <li>تكوين FQIMO وFCO</li>
            <li>السياقة الوقائية والسياقة الاقتصادية</li>
            <li>التشريعات الاجتماعية الأوروبية</li>
            <li>نقل المواد الخطرة</li>
            <li>تقنيات تثبيت وتأمين الحمولة</li>
        </ul>
        <p>📍 القطب الحضري للنواصر – LOT P'41</p>
        <p>📞 +212 522 07 87 05</p>
        <p>💬 واتساب: 06 66 04 71 53</p>
        <a class="button" href="https://iftl.ma/" target="_blank">🌐 الموقع الرسمي IFTL</a>
        <a class="button" href="https://iftl.ma/candidature-en-ligne/" target="_blank">📚 التسجيل</a>
    </div>

    <div class="card">
        <h2>🏫 OFPPT – التكوين المهني</h2>
        <p>
            يقدم OFPPT تكوينات مرتبطة بالنقل الطرقي، من بينها تكوينات
            السائقين المهنيين.
        </p>
        <ul>
            <li>سائق نقل البضائع</li>
            <li>سائق نقل المسافرين</li>
            <li>السلامة والسياقة الاقتصادية</li>
            <li>تحميل وتثبيت وتأمين البضائع</li>
            <li>النقل الدولي</li>
            <li>نقل المواد الخطرة</li>
        </ul>
        <a class="button" href="https://www.ofppt.ma/" target="_blank">🌐 الموقع الرسمي OFPPT</a>
        <a class="button" href="https://www.ofppt.ma/" target="_blank">📚 تكوين سائق نقل البضائع</a>
    </div>

@endif

<a class="back" href="/training">⬅️
@if(app()->getLocale() === 'es')
    Volver a formación
@elseif(app()->getLocale() === 'fr')
    Retour à la formation
@else
    العودة إلى التكوين
@endif
</a>

</body>
</html>
