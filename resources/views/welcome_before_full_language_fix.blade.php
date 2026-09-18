@include("partials.language-switcher")
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === "ar" ? "rtl" : "ltr" }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edriouche Truck Job</title>
    <meta name="description" content="Edriouche Truck Job - فرص العمل والمعلومات المهنية للسائقين من المغرب إلى أوروبا.">

    <style>
        * { box-sizing: border-box; }

        html { scroll-behavior: smooth; }

        body {
            margin: 0;
            font-family: Arial, "Tahoma", sans-serif;
            background: #f5f7fa;
            color: #172033;
            line-height: 1.8;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .topbar {
            background: #0b3a68;
            color: #fff;
            text-align: center;
            padding: 8px 15px;
            font-size: 14px;
        }

        header {
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .nav {
            max-width: 1150px;
            margin: auto;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            display: flex; align-items: center; gap: 8px;
            font-size: 22px;
            font-weight: 800;
            color: #0b3a68;
        }

        .brand img { width: 42px; height: 42px; object-fit: cover; border-radius: 8px; }
        .brand span { color: #f59e0b; }

        .languages {
            display: flex;
            gap: 7px;
            flex-wrap: wrap;
        }

        .languages a {
            background: #f1f5f9;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 13px;
        }

        .hero {
            background: linear-gradient(135deg, #0b3a68, #145b91);
            color: #fff;
            padding: 65px 20px;
        }

        .hero-inner {
            max-width: 1100px;
            margin: auto;
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 40px;
            align-items: center;
        }

        .hero h1 {
            font-size: 42px;
            line-height: 1.25;
            margin: 0 0 15px;
        }

        .hero h1 span { color: #fbbf24; }

        .hero p {
            font-size: 19px;
            margin: 0 0 25px;
            color: #e5eef8;
        }

        .hero-photo img {
            width: 100%;
            max-width: 330px;
            display: block;
            margin: auto;
            border-radius: 22px;
            border: 5px solid rgba(255,255,255,.2);
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .btn {
            display: inline-block;
            padding: 11px 18px;
            border-radius: 10px;
            font-weight: 700;
            background: #f59e0b;
            color: #172033;
        }

        .btn.secondary {
            background: #fff;
            color: #0b3a68;
        }

        .section {
            max-width: 1100px;
            margin: auto;
            padding: 55px 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .section-title h2 {
            margin: 0 0 8px;
            font-size: 30px;
            color: #0b3a68;
        }

        .section-title p {
            margin: 0;
            color: #64748b;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 22px;
            box-shadow: 0 5px 18px rgba(15,23,42,.06);
            transition: transform .2s;
        }

        .card:hover { transform: translateY(-3px); }

        .card .icon {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .card h3 {
            margin: 0 0 7px;
            color: #0b3a68;
            font-size: 19px;
        }

        .card p {
            margin: 0 0 12px;
            color: #64748b;
            font-size: 15px;
        }

        .card a {
            color: #0b3a68;
            font-weight: 700;
        }

        .spain {
            background: #eaf3fb;
            border-radius: 22px;
            padding: 35px;
        }

        .spain-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .spain a {
            background: #fff;
            padding: 18px;
            border-radius: 12px;
            font-weight: 700;
            color: #0b3a68;
            border: 1px solid #dbe7f2;
        }

        .story {
            background: #fff;
            border-radius: 22px;
            padding: 35px;
            display: grid;
            grid-template-columns: 230px 1fr;
            gap: 30px;
            align-items: center;
            box-shadow: 0 5px 20px rgba(15,23,42,.06);
        }

        .story img {
            width: 210px;
            height: 210px;
            object-fit: cover;
            border-radius: 50%;
            display: block;
            margin: auto;
        }

        .story h2 {
            color: #0b3a68;
            margin-top: 0;
        }

        .story p { color: #475569; }

        .father {
            background: #172033;
            color: #fff;
            border-radius: 22px;
            padding: 35px;
            display: grid;
            grid-template-columns: 200px 1fr;
            gap: 30px;
            align-items: center;
        }

        .father img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 16px;
            margin: auto;
        }

        .father h2 { margin-top: 0; color: #fbbf24; }

        .message {
            text-align: center;
            background: #fff;
            border-radius: 22px;
            padding: 40px 25px;
            border: 1px solid #e5e7eb;
        }

        .message blockquote {
            margin: 20px auto;
            max-width: 800px;
            font-size: 23px;
            font-weight: 700;
            color: #0b3a68;
        }

        footer {
            background: #0b1627;
            color: #cbd5e1;
            padding: 35px 20px;
            text-align: center;
        }

        footer strong { color: #fff; }

        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 18px;
            margin: 15px 0;
            font-size: 14px;
        }

        @media (max-width: 800px) {
            .hero-inner,
            .story,
            .father {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero h1 { font-size: 32px; }

            .buttons { justify-content: center; }

            .cards,
            .spain-grid {
                grid-template-columns: 1fr 1fr;
            }

            .story img,
            .father img {
                width: 170px;
                height: 170px;
            }
        }

        @media (max-width: 520px) {
            .nav {
                flex-direction: column;
                gap: 10px;
            }

            .cards,
            .spain-grid {
                grid-template-columns: 1fr;
            }

            .hero { padding: 45px 18px; }

            .section { padding: 40px 15px; }

            .hero p { font-size: 17px; }

            .spain,
            .story,
            .father {
                padding: 25px 18px;
            }
        }
    </style>
</head>

<body>

<div class="topbar">
    🚛 من المغرب إلى أوروبا — خدمة السائق بالمعلومة المهنية الموثوقة
</div>

<header>
    <div class="nav">
        <a class="brand" href="/"><img src="{{ asset('images/truck-volvo-fh-tanker-2022.jpg') }}" alt="Truck"> Edriouche <span>Truck Job</span></a>

        <div class="languages">
            <a href="/lang/ar">🇲🇦 العربية</a>
            <a href="/lang/es">🇪🇸 Español</a>
            <a href="/lang/fr">🇫🇷 Français</a>
        </div>
    </div>
</header>

<section class="hero">
    <div class="hero-inner">
        <div>
            @if(app()->getLocale() === "es")
                <h1>Del <span>camino</span> al servicio del conductor</h1>
                <p>Plataforma creada por un conductor profesional para ayudar a los conductores, especialmente a los jóvenes marroquíes, a encontrar oportunidades de trabajo e información profesional en el transporte por carretera, lejos de intermediarios y falsas promesas.</p>
                <div class="buttons">
                    <a class="btn" href="/jobs">🔎 Ofertas de trabajo</a>
                    <a class="btn secondary" href="/companies">🏢 Empresas de transporte</a>
                    <a class="btn secondary" href="/spain-jobs">🇪🇸 Trabajo en España</a>
                </div>
            @elseif(app()->getLocale() === "fr")
                <h1>De la <span>route</span> au service du conducteur</h1>
                <p>Une plateforme créée par un conducteur professionnel pour aider les conducteurs, notamment les jeunes Marocains, à accéder aux opportunités d’emploi et aux informations professionnelles dans le transport routier, loin des intermédiaires et des fausses promesses.</p>
                <div class="buttons">
                    <a class="btn" href="/jobs">🔎 Offres d’emploi</a>
                    <a class="btn secondary" href="/companies">🏢 Entreprises de transport</a>
                    <a class="btn secondary" href="/spain-jobs">🇪🇸 Travail en Espagne</a>
                </div>
            @else
                <h1>من <span>الطريق</span> إلى خدمة السائق</h1>
                <p>منصة أنشأها سائق مهني لمساعدة السائقين، وخاصة الشباب المغاربة، على الوصول إلى فرص العمل والمعلومات المهنية في النقل الطرقي، بعيدًا عن السماسرة والوعود الكاذبة.</p>
                <div class="buttons">
                    <a class="btn" href="/jobs">🔎 عروض العمل</a>
                    <a class="btn secondary" href="/companies">🏢 شركات النقل</a>
                    <a class="btn secondary" href="/spain-jobs">🇪🇸 العمل في إسبانيا</a>
                </div>
            @endif
        </div>
        <div class="hero-photo">
            <img src="{{ asset('images/founder.jpg').'?v=2' }}" alt="محمد الدريوش مؤسس Edriouche Truck Job">
        </div>
    </div>
</section>

<section class="section">

    <div class="section-title">
        @if(app()->getLocale() === "es")
            <h2>🚛 Servicios para conductores profesionales</h2>
            <p>Herramientas e información para ayudarte en tu carrera profesional.</p>
        @elseif(app()->getLocale() === "fr")
            <h2>🚛 Services pour conducteurs professionnels</h2>
            <p>Outils et informations pour vous accompagner dans votre parcours professionnel.</p>
        @else
            <h2>🚛 خدمات السائق المهني</h2>
            <p>أدوات ومعلومات تساعدك في مسيرتك المهنية.</p>
        @endif
    </div>

    <div class="cards">

        @if(app()->getLocale() === "es")

        <div class="card">
            <div class="icon">🔎</div>
            <h3>Ofertas de trabajo</h3>
            <p>Oportunidades e información para ayudar al conductor a contactar con empresas.</p>
            <a href="/jobs">Ver ofertas ←</a>
        </div>

        <div class="card">
            <div class="icon">🏢</div>
            <h3>Empresas de transporte</h3>
            <p>Conoce empresas de transporte y sus medios oficiales de contacto.</p>
            <a href="/companies">Empresas ←</a>
        </div>

        <div class="card">
            <div class="icon">🎓</div>
            <h3>Formación y capacitación</h3>
            <p>Formación y desarrollo profesional para conductores.</p>
            <a href="/training">Formación ←</a>
        </div>

        <div class="card">
            <div class="icon">📄</div>
            <h3>Documentos del conductor</h3>
            <p>Información sobre los documentos profesionales necesarios.</p>
            <a href="/driver-documents">Documentos ←</a>
        </div>

        <div class="card">
            <div class="icon">📝</div>
            <h3>Crear CV</h3>
            <p>Presenta tu experiencia profesional de forma organizada.</p>
            <a href="/cv-builder">Crear CV ←</a>
        </div>

        <div class="card">
            <div class="icon">🚛</div>
            <h3>Inspección del camión</h3>
            <p>Lista práctica para revisar el camión antes de salir.</p>
            <a href="/truck-checklist">Empezar inspección ←</a>
        </div>

        <div class="card">
            <div class="icon">📄</div>
            <h3>Transporte internacional — CMR</h3>
            <p>Información básica sobre el documento de transporte internacional de mercancías.</p>
            <a href="/cmr">Conocer el CMR ←</a>
        </div>

        <div class="card">
            <div class="icon">🌍</div>
            <h3>Documentos de Europa</h3>
            <p>Información para comprender los documentos necesarios para el transporte internacional.</p>
            <a href="/europe-documents">Documentos de Europa ←</a>
        </div>

        <div class="card">
            <div class="icon">📚</div>
            <h3>Reglas del transporte en Europa</h3>
            <p>Información práctica sobre las normas y obligaciones profesionales.</p>
            <a href="/europe-rules">Reglas ←</a>
        </div>

        @elseif(app()->getLocale() === "fr")

        <div class="card">
            <div class="icon">🔎</div>
            <h3>Offres d’emploi</h3>
            <p>Des opportunités et des informations pour aider le conducteur à contacter les entreprises.</p>
            <a href="/jobs">Voir les offres ←</a>
        </div>

        <div class="card">
            <div class="icon">🏢</div>
            <h3>Entreprises de transport</h3>
            <p>Découvrez les entreprises de transport et leurs moyens de contact officiels.</p>
            <a href="/companies">Entreprises ←</a>
        </div>

        <div class="card">
            <div class="icon">🎓</div>
            <h3>Formation et perfectionnement</h3>
            <p>Formation et développement professionnel pour les conducteurs.</p>
            <a href="/training">Formation ←</a>
        </div>

        <div class="card">
            <div class="icon">📄</div>
            <h3>Documents du conducteur</h3>
            <p>Informations sur les documents professionnels nécessaires.</p>
            <a href="/driver-documents">Documents ←</a>
        </div>

        <div class="card">
            <div class="icon">📝</div>
            <h3>Créer un CV</h3>
            <p>Présentez votre expérience professionnelle de manière organisée.</p>
            <a href="/cv-builder">Créer un CV ←</a>
        </div>

        <div class="card">
            <div class="icon">🚛</div>
            <h3>Inspection du camion</h3>
            <p>Liste pratique pour vérifier le camion avant le départ.</p>
            <a href="/truck-checklist">Commencer l’inspection ←</a>
        </div>

        <div class="card">
            <div class="icon">📄</div>
            <h3>Transport international — CMR</h3>
            <p>Informations essentielles sur le document de transport international des marchandises.</p>
            <a href="/cmr">Découvrir le CMR ←</a>
        </div>

        <div class="card">
            <div class="icon">🌍</div>
            <h3>Documents pour l’Europe</h3>
            <p>Informations pour comprendre les documents nécessaires au transport international.</p>
            <a href="/europe-documents">Documents Europe ←</a>
        </div>

        <div class="card">
            <div class="icon">📚</div>
            <h3>Règles du transport en Europe</h3>
            <p>Informations pratiques sur les règles et obligations professionnelles.</p>
            <a href="/europe-rules">Règles ←</a>
        </div>

        @else

        <div class="card">
            <div class="icon">🔎</div>
            <h3>عروض العمل</h3>
            <p>فرص عمل ومعلومات تساعد السائق على الوصول إلى الشركات.</p>
            <a href="/jobs">اكتشف العروض ←</a>
        </div>

        <div class="card">
            <div class="icon">🏢</div>
            <h3>شركات النقل</h3>
            <p>التعرف على شركات النقل وطرق التواصل الرسمية.</p>
            <a href="/companies">الشركات ←</a>
        </div>

        <div class="card">
            <div class="icon">🎓</div>
            <h3>التكوين والتدريب</h3>
            <p>مسارات التكوين والتطوير المهني للسائقين.</p>
            <a href="/training">التكوين ←</a>
        </div>

        <div class="card">
            <div class="icon">📄</div>
            <h3>وثائق السائق</h3>
            <p>معلومات حول الوثائق المهنية المطلوبة للسائق.</p>
            <a href="/driver-documents">الوثائق ←</a>
        </div>

        <div class="card">
            <div class="icon">📝</div>
            <h3>إنشاء CV</h3>
            <p>ساعد نفسك على تقديم خبرتك المهنية بطريقة منظمة.</p>
            <a href="/cv-builder">إنشاء CV ←</a>
        </div>

        <div class="card">
            <div class="icon">🚛</div>
            <h3>فحص الشاحنة</h3>
            <p>قائمة عملية للمساعدة في فحص الشاحنة قبل الانطلاق.</p>
            <a href="/truck-checklist">ابدأ الفحص ←</a>
        </div>

        <div class="card">
            <div class="icon">📄</div>
            <h3>النقل الدولي — CMR</h3>
            <p>معلومات أساسية حول وثيقة النقل الدولي للبضائع.</p>
            <a href="/cmr">تعرف على CMR ←</a>
        </div>

        <div class="card">
            <div class="icon">🌍</div>
            <h3>وثائق أوروبا</h3>
            <p>معلومات تساعد السائق في فهم الوثائق المطلوبة للنقل الدولي.</p>
            <a href="/europe-documents">وثائق أوروبا ←</a>
        </div>

        <div class="card">
            <div class="icon">📚</div>
            <h3>قواعد النقل في أوروبا</h3>
            <p>معلومات عملية حول القواعد والالتزامات المهنية.</p>
            <a href="/europe-rules">القواعد ←</a>
        </div>

        @endif
    </div>

<section class="section">

<section class="section">
    <div class="section-title">
        @if(app()->getLocale() === "es")
            <h2>🚛 Servicios para conductores profesionales</h2>
            <p>Herramientas e información para ayudarte en tu carrera profesional.</p>
        @elseif(app()->getLocale() === "fr")
            <h2>🚛 Services pour conducteurs professionnels</h2>
            <p>Outils et informations pour vous accompagner dans votre parcours professionnel.</p>
        @else
            <h2>🚛 خدمات السائق المهني</h2>
            <p>أدوات ومعلومات تساعدك في مسيرتك المهنية.</p>
        @endif
    </div>
    <div class="cards">

        @if(app()->getLocale() === "es")

        <div class="card"><img src="{{ asset('images/truck-volvo-f88-1970.jpg') }}" alt="Volvo F88 1970" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>1970 — Volvo F88</h3><p>Camión de los años setenta, conocido por su fuerza y sencillez, y que representó una etapa importante en la evolución del transporte pesado.</p></div>

        <div class="card"><img src="{{ asset('images/truck-volvo-f10.jpg') }}" alt="Volvo F10" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>Años 80 — Volvo F10</h3><p>Camión de los años ochenta que combinó la potencia del motor con una mayor comodidad para el conductor en los viajes largos.</p></div>

        <div class="card"><img src="{{ asset('images/truck-volvo-fh-1993.jpg') }}" alt="Volvo FH 1993" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>1993 — Volvo FH</h3><p>Apareció en 1993 e inició una nueva generación del Volvo FH, con importantes avances en rendimiento, comodidad y seguridad.</p></div>

        <div class="card"><img src="{{ asset('images/truck-volvo-fh-tanker-2009.jpg') }}" alt="Volvo FH 400 con cisterna 2009" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>2009 — Volvo FH 400 con semirremolque cisterna</h3><p>Camión preparado para el transporte internacional, acompañado por cisternas importantes para el transporte de combustibles a larga distancia.</p></div>

        <div class="card"><img src="{{ asset('images/truck-volvo-fh-tanker-2022.jpg') }}" alt="Volvo FH con cisterna 2022" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>2022–hoy — Volvo FH con semirremolque cisterna</h3><p>Generación moderna que combina comodidad, tecnología y seguridad para el transporte internacional con semirremolques cisterna.</p></div>

        @elseif(app()->getLocale() === "fr")

        <div class="card"><img src="{{ asset('images/truck-volvo-f88-1970.jpg') }}" alt="Volvo F88 1970" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>1970 — Volvo F88</h3><p>Camion des années 1970, connu pour sa puissance et sa simplicité, représentant une étape importante dans l’évolution du transport lourd.</p></div>

        <div class="card"><img src="{{ asset('images/truck-volvo-f10.jpg') }}" alt="Volvo F10" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>Années 1980 — Volvo F10</h3><p>Camion des années 1980 qui associait la puissance du moteur à un meilleur confort du conducteur lors des longs trajets.</p></div>

        <div class="card"><img src="{{ asset('images/truck-volvo-fh-1993.jpg') }}" alt="Volvo FH 1993" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>1993 — Volvo FH</h3><p>Apparu en 1993, il a marqué une nouvelle génération du Volvo FH avec des progrès importants en performance, confort et sécurité.</p></div>

        <div class="card"><img src="{{ asset('images/truck-volvo-fh-tanker-2009.jpg') }}" alt="Volvo FH 400 avec citerne 2009" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>2009 — Volvo FH 400 avec semi-remorque citerne</h3><p>Camion adapté au transport international, avec des citernes importantes pour le transport des carburants sur de longues distances.</p></div>

        <div class="card"><img src="{{ asset('images/truck-volvo-fh-tanker-2022.jpg') }}" alt="Volvo FH avec citerne 2022" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>2022–aujourd’hui — Volvo FH avec semi-remorque citerne</h3><p>Génération moderne combinant confort, technologie et sécurité pour le transport international avec des semi-remorques citernes.</p></div>

        @else

        <div class="card"><img src="{{ asset('images/truck-volvo-f88-1970.jpg') }}" alt="Volvo F88 1970" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>1970 — Volvo F88</h3><p>شاحنة من جيل السبعينيات، عُرفت بالقوة والبساطة ومثّلت مرحلة مهمة في تطور النقل الثقيل.</p></div>

        <div class="card"><img src="{{ asset('images/truck-volvo-f10.jpg') }}" alt="Volvo F10" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>الثمانينيات — Volvo F10</h3><p>من شاحنات الثمانينيات، جمعت بين قوة المحرك وتحسين راحة السائق في الرحلات الطويلة.</p></div>

        <div class="card"><img src="{{ asset('images/truck-volvo-fh-1993.jpg') }}" alt="Volvo FH 1993" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>1993 — Volvo FH</h3><p>ظهر عام 1993، وبدأ معه جيل جديد من Volvo FH مع تطور واضح في الأداء والراحة والسلامة.</p></div>

        <div class="card"><img src="{{ asset('images/truck-volvo-fh-tanker-2009.jpg') }}" alt="Volvo FH 400 مع ناقلة صهريجية 2009" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>2009 — Volvo FH 400 ومقطورة صهريجية</h3><p>شاحنة مهيأة للنقل الدولي، ومعها أصبحت المقطورات الصهريجية جزءًا مهمًا من نقل المحروقات لمسافات طويلة.</p></div>

        <div class="card"><img src="{{ asset('images/truck-volvo-fh-tanker-2022.jpg') }}" alt="Volvo FH 460 مع مقطورة صهريجية 2022" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>2022–اليوم — Volvo FH مع مقطورة صهريجية</h3><p>جيل حديث يجمع بين الراحة والتكنولوجيا والسلامة، ويخدم النقل الدولي مع المقطورات الصهريجية.</p></div>

        @endif
    </div>
    </div>
</section>

    <div class="spain">

    <div class="section-title">
        @if(app()->getLocale() === "es")
            <h2>🚛 Servicios para conductores profesionales</h2>
            <p>Herramientas e información para ayudarte en tu carrera profesional.</p>
        @elseif(app()->getLocale() === "fr")
            <h2>🚛 Services pour conducteurs professionnels</h2>
            <p>Outils et informations pour vous accompagner dans votre parcours professionnel.</p>
        @else
            <h2>🚛 خدمات السائق المهني</h2>
            <p>أدوات ومعلومات تساعدك في مسيرتك المهنية.</p>
        @endif
    </div>

        <div class="spain-grid">
            @if(app()->getLocale() === "es")
                <a href="/spain-jobs">🇪🇸 Ofertas de trabajo en España</a>
                <a href="/spanish-companies">🏢 Empresas españolas</a>
                <a href="/spain-law">⚖️ Ley del transporte en España</a>
            @elseif(app()->getLocale() === "fr")
                <a href="/spain-jobs">🇪🇸 Offres d’emploi en Espagne</a>
                <a href="/spanish-companies">🏢 Entreprises espagnoles</a>
                <a href="/spain-law">⚖️ Loi du transport en Espagne</a>
            @else
                <a href="/spain-jobs">🇪🇸 عروض العمل في إسبانيا</a>
                <a href="/spanish-companies">🏢 الشركات الإسبانية</a>
                <a href="/spain-law">⚖️ قانون النقل في إسبانيا</a>
            @endif
        </div>

    </div>
</section>

<section class="section">

    <div class="story">

        <img src="{{ asset('images/founder.jpg').'?v=2' }}" alt="محمد الدريوش">

        <div>
            @if(app()->getLocale() === "es")
                <h2>Mohammed Edriouche — Fundador de Edriouche Truck Job</h2>

                <p>
                    Soy Mohammed Edriouche, conductor profesional marroquí.
                    Comencé mi trayectoria en el mundo de los camiones en 1994.
                    Aprendí esta profesión en la carretera, a través de la responsabilidad
                    y de mi primer maestro en esta profesión: mi padre, que en paz descanse.
                </p>

                <p>
                    Después de años trabajando en el transporte de combustibles en Marruecos,
                    desde 2020 trabajo en el transporte internacional entre Marruecos y Europa.
                </p>

                <p>
                    Hoy comparto mi experiencia para ayudar a los conductores,
                    especialmente a los jóvenes marroquíes, a entrar en el mundo
                    del transporte profesional de forma correcta, lejos de intermediarios
                    y falsas promesas.
                </p>

                <strong>De la experiencia en la carretera al servicio del conductor.</strong>

            @elseif(app()->getLocale() === "fr")
                <h2>Mohammed Edriouche — Fondateur d’Edriouche Truck Job</h2>

                <p>
                    Je suis Mohammed Edriouche, conducteur professionnel marocain.
                    J’ai commencé ma carrière dans le monde du camion en 1994.
                    J’ai appris ce métier sur la route, à travers la responsabilité
                    et auprès de mon premier maître dans ce métier : mon père, qu’il repose en paix.
                </p>

                <p>
                    Après des années dans le transport des carburants au Maroc,
                    je travaille depuis 2020 dans le transport international entre le Maroc et l’Europe.
                </p>

                <p>
                    Aujourd’hui, je partage mon expérience pour aider les conducteurs,
                    notamment les jeunes Marocains, à entrer correctement dans le monde
                    du transport professionnel, loin des intermédiaires et des fausses promesses.
                </p>

                <strong>De l’expérience de la route au service du conducteur.</strong>

            @else
                <h2>محمد الدريوش — مؤسس Edriouche Truck Job</h2>

                <p>
                    أنا محمد الدريوش، سائق مهني مغربي بدأت مسيرتي في عالم
                    الشاحنات سنة 1994. تعلمت المهنة من الطريق، ومن المسؤولية،
                    ومن أستاذي الأول في المهنة: والدي رحمه الله.
                </p>

                <p>
                    بعد سنوات من العمل في نقل المحروقات بالمغرب، انتقلت منذ
                    سنة 2020 إلى النقل الدولي بين المغرب وأوروبا.
                </p>

                <p>
                    اليوم أشارك خبرتي لمساعدة السائقين، وخاصة الشباب المغاربة،
                    على دخول عالم النقل المهني بطريقة صحيحة، بعيدًا عن السماسرة
                    والوعود الكاذبة.
                </p>

                <strong>من تجربة الطريق إلى خدمة السائق.</strong>
            @endif
        </div>

    </div>

</section>

<section class="section">

    <div class="father">

        <img src="{{ asset('images/father.jpg') }}" alt="ذكرى والد محمد الدريوش">

        <div>
            @if(app()->getLocale() === "es")
                <h2>🤲 En memoria de mi padre</h2>

                <p>
                    Mi padre fue uno de los conductores de la antigua generación
                    dedicados al transporte de combustibles y gas. Fue mi primer
                    maestro y guía en esta profesión. De él aprendí a respetar
                    la carretera, la seguridad, la responsabilidad y el compromiso con el trabajo.
                </p>

                <p>
                    Falleció en un accidente de tráfico en 2002, pero todo lo que
                    me enseñó permanece conmigo hasta hoy.
                </p>

                <strong>Mi primer maestro en la profesión del transporte y los camiones.</strong>

            @elseif(app()->getLocale() === "fr")
                <h2>🤲 En mémoire de mon père</h2>

                <p>
                    Mon père faisait partie de l’ancienne génération de conducteurs
                    dans le transport des carburants et du gaz. Il a été mon premier
                    maître et mon guide dans ce métier. De lui, j’ai appris à respecter
                    la route, la sécurité, la responsabilité et l’engagement professionnel.
                </p>

                <p>
                    Il est décédé dans un accident de la route en 2002, mais tout ce
                    qu’il m’a enseigné reste avec moi jusqu’à aujourd’hui.
                </p>

                <strong>Mon premier maître dans le métier du transport et des camions.</strong>

            @else
                <h2>🤲 ذكرى والدي رحمه الله</h2>

                <p>
                    كان والدي من سائقي الجيل القديم في نقل المحروقات والغاز،
                    وكان أستاذي ومرشدي في المهنة. منه تعلمت احترام الطريق،
                    والسلامة، والمسؤولية والالتزام بالعمل.
                </p>

                <p>
                    رحل في حادثة سير سنة 2002، لكن ما علّمني إياه بقي معي
                    إلى اليوم.
                </p>

                <strong>أستاذي الأول في مهنة النقل والشاحنات.</strong>
            @endif
        </div>

    </div>

</section>

<section class="section">

    <div class="message">

        @if(app()->getLocale() === "es")
            <h2>🛡️ El mensaje de Edriouche Truck Job</h2>

            <blockquote>
                Detrás de cada camión que llega a su destino hay una persona, una responsabilidad y una familia esperando que regrese sana y salva.
            </blockquote>

            <p>
                Nuestro objetivo no es solamente buscar empleo, sino ayudar al conductor
                a conocer sus derechos, acceder a información correcta y contactar con
                las empresas de forma clara.
            </p>

            <p>
                <strong>Edriouche Truck Job no pide al conductor dinero a cambio de una promesa de empleo.</strong>
            </p>

            <p>
                De Marruecos a Europa… queremos que el conductor llegue con dignidad,
                igual que su camión llega con seguridad.
            </p>

            <div class="buttons" style="justify-content:center;">
                <a class="btn" href="/jobs">🔎 Empezar por las ofertas de trabajo</a>
                <a class="btn secondary" href="/training">🎓 Empezar por la formación</a>
            </div>

        @elseif(app()->getLocale() === "fr")
            <h2>🛡️ Le message d’Edriouche Truck Job</h2>

            <blockquote>
                Derrière chaque camion qui arrive à destination, il y a une personne, une responsabilité et une famille qui attend son retour en sécurité.
            </blockquote>

            <p>
                Notre objectif n’est pas seulement de rechercher un emploi, mais d’aider
                le conducteur à connaître ses droits, accéder aux bonnes informations
                et contacter les entreprises de manière claire.
            </p>

            <p>
                <strong>Edriouche Truck Job ne demande pas au conducteur de payer de l’argent en échange d’une promesse d’emploi.</strong>
            </p>

            <p>
                Du Maroc vers l’Europe… nous voulons que le conducteur arrive avec dignité,
                tout comme son camion arrive en sécurité.
            </p>

            <div class="buttons" style="justify-content:center;">
                <a class="btn" href="/jobs">🔎 Commencer par les offres d’emploi</a>
                <a class="btn secondary" href="/training">🎓 Commencer par la formation</a>
            </div>

        @else
            <h2>🛡️ رسالة Edriouche Truck Job</h2>

            <blockquote>
                خلف كل شاحنة تصل إلى وجهتها، هناك إنسان ومسؤولية وعائلة تنتظر عودته سالمًا.
            </blockquote>

            <p>
                هدفنا ليس فقط البحث عن وظيفة، بل مساعدة السائق على معرفة حقوقه،
                الوصول إلى المعلومات الصحيحة، والتواصل مع الشركات بطريقة واضحة.
            </p>

            <p>
                <strong>Edriouche Truck Job لا يطلب من السائق دفع أموال مقابل وعد بالتوظيف.</strong>
            </p>

            <p>
                من المغرب إلى أوروبا… نريد أن يصل السائق بكرامته،
                كما تصل شاحنته بسلام.
            </p>

            <div class="buttons" style="justify-content:center;">
                <a class="btn" href="/jobs">🔎 ابدأ من عروض العمل</a>
                <a class="btn secondary" href="/training">🎓 ابدأ من التكوين</a>
            </div>
        @endif

    </div>

</section>

<footer>

    <strong>🚛 Edriouche Truck Job</strong>

    <div class="footer-links">
        @if(app()->getLocale() === "es")
            <a href="/">Inicio</a>
            <a href="/jobs">Ofertas de trabajo</a>
            <a href="/companies">Empresas de transporte</a>
            <a href="/training">Formación</a>
            <a href="/spain-jobs">España</a>
            <a href="/cmr">CMR</a>
        @elseif(app()->getLocale() === "fr")
            <a href="/">Accueil</a>
            <a href="/jobs">Offres d’emploi</a>
            <a href="/companies">Entreprises de transport</a>
            <a href="/training">Formation</a>
            <a href="/spain-jobs">Espagne</a>
            <a href="/cmr">CMR</a>
        @else
            <a href="/">الرئيسية</a>
            <a href="/jobs">عروض العمل</a>
            <a href="/companies">شركات النقل</a>
            <a href="/training">التكوين</a>
            <a href="/spain-jobs">إسبانيا</a>
            <a href="/cmr">CMR</a>
        @endif
    </div>

    @if(app()->getLocale() === "es")
        <div>El conductor profesional merece respeto.</div>
    @elseif(app()->getLocale() === "fr")
        <div>Le conducteur professionnel mérite le respect.</div>
    @else
        <div>السائق المحترف يستحق الاحترام.</div>
    @endif

    <div>© 2026 Edriouche Truck Job</div>

</footer>

</body>
</html>
