
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === "ar" ? "rtl" : "ltr" }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PJJ9CPZRBW"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag("js", new Date());
      gtag("config", "G-PJJ9CPZRBW");
    </script>
<title>@if(app()->getLocale() === 'es') Edriouche Truck Job | Empleo y formación para camioneros @elseif(app()->getLocale() === 'fr') Edriouche Truck Job | Emploi et formation des conducteurs routiers @elseif(app()->getLocale() === 'en') Edriouche Truck Job | Truck Driver Jobs, Training & Road Transport @else Edriouche Truck Job | فرص عمل وتكوين سائقي الشاحنات @endif</title>
    <meta name="description" content="@if(app()->getLocale() === 'es') Empleo, formación e información profesional para conductores de camión en Marruecos y Europa. @elseif(app()->getLocale() === 'fr') Emploi, formation et informations professionnelles pour les conducteurs routiers au Maroc et à l’international. @elseif(app()->getLocale() === 'en') Truck driver jobs, professional training and reliable transport information for drivers in Morocco, Europe and Canada. @else فرص العمل والتكوين والمعلومات المهنية الموثوقة لسائقي الشاحنات في المغرب وأوروبا وكندا. @endif">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://edriouchetruckjobs.ma/#organization",
          "name": "Edriouche Truck Job",
          "url": "https://edriouchetruckjobs.ma/"
        },
        {
          "@type": "WebSite",
          "@id": "https://edriouchetruckjobs.ma/#website",
          "url": "https://edriouchetruckjobs.ma/",
          "name": "Edriouche Truck Job",
          "publisher": {
            "@id": "https://edriouchetruckjobs.ma/#organization"
          },
          "inLanguage": ["ar", "es", "fr", "en"]
        }
      ]
    }
    </script>
    <link rel="canonical" href="https://edriouchetruckjobs.ma/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Edriouche Truck Job">
    <meta property="og:title" content="@if(app()->getLocale() === 'es') Edriouche Truck Job | Empleo y formación para camioneros @elseif(app()->getLocale() === 'fr') Edriouche Truck Job | Emploi et formation des conducteurs routiers @elseif(app()->getLocale() === 'en') Edriouche Truck Job | Truck Driver Jobs, Training & Road Transport @else Edriouche Truck Job | فرص عمل وتكوين سائقي الشاحنات @endif">
    <meta property="og:locale" content="@if(app()->getLocale() === 'es') es_ES @elseif(app()->getLocale() === 'fr') fr_FR @elseif(app()->getLocale() === 'en') en_US @else ar_MA @endif">
    <meta property="og:description" content="@if(app()->getLocale() === 'es') Empleo, formación e información profesional para conductores de camión. @elseif(app()->getLocale() === 'fr') Emploi, formation et informations professionnelles pour les conducteurs routiers. @elseif(app()->getLocale() === 'en') Truck driver jobs, professional training and reliable road transport information. @else فرص العمل والتكوين والمعلومات المهنية لسائقي الشاحنات. @endif">
    <meta property="og:url" content="https://edriouchetruckjobs.ma/">
    <meta property="og:image" content="https://edriouchetruckjobs.ma/images/founder.jpg?v=2">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@if(app()->getLocale() === 'es') Edriouche Truck Job | Empleo y formación @elseif(app()->getLocale() === 'fr') Edriouche Truck Job | Emploi et formation @elseif(app()->getLocale() === 'en') Edriouche Truck Job | Truck Driver Jobs & Training @else Edriouche Truck Job | فرص عمل وتكوين @endif">
    <meta name="twitter:description" content="Professional driver jobs, training and reliable road transport information.">
    <meta name="twitter:image" content="https://edriouchetruckjobs.ma/images/founder.jpg?v=2">

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
            display: block;
            margin-top: 10px;
            padding: 11px 14px;
            border-radius: 10px;
            background: #0b3a68;
            color: #fff;
            font-weight: 700;
            text-align: center;
            text-decoration: none;
            transition: .2s;
        }

        .card a:hover {
            background: #f59e0b;
            color: #172033;
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
    
        .academy-feature { padding-top: 28px; padding-bottom: 28px; }
        .academy-feature-link { position: relative; display: block; min-height: 300px; overflow: hidden; border-radius: 24px; background: #0b3152; box-shadow: 0 14px 34px rgba(11,58,104,.18); color: #fff; }
        .academy-feature-link img { display: block; width: 100%; height: 360px; object-fit: cover; transition: transform .35s ease; }
        .academy-feature-link:hover img { transform: scale(1.025); }
        .academy-feature-copy { position: absolute; inset: 0; display: flex; flex-direction: column; justify-content: center; align-items: flex-start; padding: 38px; max-width: 610px; background: linear-gradient(90deg,rgba(5,29,51,.96),rgba(5,29,51,.76) 68%,transparent); }
        .academy-kicker { display: inline-block; padding: 6px 13px; border-radius: 30px; background: #f5b735; color: #102b42; font-size: 14px; font-weight: 800; }
        .academy-feature-copy h2 { margin: 15px 0 8px; color: #fff; font-size: 32px; line-height: 1.35; }
        .academy-feature-copy p { margin: 0 0 18px; color: #e7f1f8; font-size: 17px; max-width: 480px; }
        .academy-cta { display: inline-block; padding: 10px 17px; border-radius: 10px; background: #f5b735; color: #102b42; font-weight: 800; }
        @media (max-width: 650px) { .academy-feature-link img { height: 390px; } .academy-feature-copy { padding: 24px; justify-content: flex-end; background: linear-gradient(0deg,rgba(5,29,51,.97),rgba(5,29,51,.8) 55%,rgba(5,29,51,.05)); } .academy-feature-copy h2 { font-size: 25px; } .academy-feature-copy p { font-size: 15px; } }
</style>
</head>

<body>
<div class="topbar">
    @if(app()->getLocale() === 'es')
        🚛 De Marruecos a Europa — información profesional fiable para conductores
    @elseif(app()->getLocale() === 'fr')
        🚛 Du Maroc vers l’Europe — des informations professionnelles fiables pour les conducteurs
    @elseif(app()->getLocale() === 'en')
        🚛 From Morocco to Europe — reliable professional information for drivers
    @else
        🚛 من المغرب إلى أوروبا — خدمة السائق بالمعلومة المهنية الموثوقة
    @endif
</div>

<header>
    <div class="nav">
        <a class="brand" href="/">Edriouche <span>Truck Job</span></a>

        <div class="languages">
            <a href="/lang/ar">🇲🇦 العربية</a>
            <a href="/lang/es">🇪🇸 Español</a>
            <a href="/lang/fr">🇫🇷 Français</a>
            <a href="/lang/en">🇬🇧 English</a>
        </div>
    </div>
</header>

<section class="hero">
    <div class="hero-inner">
        <div>
            @if(app()->getLocale() === "es")
                <h1>Del <span>camino</span> al servicio del conductor</h1>
                <p>Plataforma creada por un conductor profesional para ayudar a los conductores, especialmente a los jóvenes marroquíes, a encontrar oportunidades de trabajo e información profesional en el transporte por carretera, lejos de intermediarios y falsas promesas.</p>

            @elseif(app()->getLocale() === "fr")
                <h1>De la <span>route</span> au service du conducteur</h1>
                <p>Une plateforme créée par un conducteur professionnel pour aider les conducteurs, notamment les jeunes Marocains, à accéder aux opportunités d’emploi et aux informations professionnelles dans le transport routier, loin des intermédiaires et des fausses promesses.</p>

            @else
                <h1>من <span>الطريق</span> إلى خدمة السائق</h1>
                <p>منصة أنشأها سائق مهني لمساعدة السائقين، وخاصة الشباب المغاربة، على الوصول إلى فرص العمل والمعلومات المهنية في النقل الطرقي، بعيدًا عن السماسرة والوعود الكاذبة.</p>

            @endif
        </div>
        <div class="hero-photo">
            <img src="{{ asset('images/founder.jpg').'?v=2' }}" alt="محمد الدريوش مؤسس Edriouche Truck Job">


        </div>
    </div>
</section>



<section class="section academy-feature">
    <a class="academy-feature-link" href="/training" aria-label="Open the Professional Driver Academy">
        <img src="{{ asset('images/academy-training-banner.svg') }}" alt="شاحنة أوروبية داخل مركز تدريب مهني مع مدرب وسائق يتعلمان فحص الشاحنة">
        <div class="academy-feature-copy">
            @if(app()->getLocale() === 'es')
                <span class="academy-kicker">🎓 Formación profesional</span>
                <h2>Academia del Conductor Profesional</h2>
                <p>Aprende seguridad vial, inspección mecánica y habilidades prácticas para tu carrera.</p>
                <span class="academy-cta">Explorar la academia →</span>
            @elseif(app()->getLocale() === 'fr')
                <span class="academy-kicker">🎓 Formation professionnelle</span>
                <h2>Académie du Conducteur Professionnel</h2>
                <p>Développez vos compétences en sécurité, inspection mécanique et conduite professionnelle.</p>
                <span class="academy-cta">Découvrir l’académie →</span>
            @else
                <span class="academy-kicker">🎓 التكوين المهني المستمر</span>
                <h2>أكاديمية السائق المحترف</h2>
                <p>طوّر مهاراتك في السلامة الطرقية، والفحص الميكانيكي، والقيادة المهنية.</p>
                <span class="academy-cta">اكتشف الأكاديمية ←</span>
            @endif
        </div>
    </a>
</section>

    @include('partials.home-gallery')

<section class="section" style="padding-top:10px;">
    <div class="section-title">
        @if(app()->getLocale() === 'es')
            <h2>🎯 ¿Qué buscas?</h2>
            <p>Accede directamente a la información que necesitas.</p>
        @elseif(app()->getLocale() === 'fr')
            <h2>🎯 Que cherchez-vous ?</h2>
            <p>Accédez directement aux informations dont vous avez besoin.</p>
        @else
            <h2>🎯 ماذا تبحث؟</h2>
            <p>توجه مباشرة إلى المعلومة التي تحتاجها.</p>
        @endif
    </div>

    <div class="cards">
        @if(app()->getLocale() === 'es')
        <div class="card">
            <div class="icon">💼</div>
            <h3>Trabajo y empresas</h3>
            <a href="/morocco-transport-training">🇲🇦 Transporte y formación en Marruecos</a><br>
            <a href="/youth-drivers-morocco">👨‍🎓 Jóvenes conductores — inicio profesional</a><br>
            <a href="/companies">🇲🇦 Ofertas de trabajo en Marruecos</a><br>
            <a href="/spain-jobs">🇪🇸 Ofertas de trabajo en España</a><br>
            <a href="/europe-jobs">🇪🇺 Ofertas para conductores en Europa</a><br>
<a href="/canada-jobs">🇨🇦 Trabajo de camionero en Canadá</a><br>
            <a href="/for-companies">🤝 Para empresas y empleadores — Publica tus ofertas de empleo</a>
        </div>
        <div class="card">
            <div class="icon">📚</div>
            <h3>Formación y reglas</h3>
            <a href="/training">🎓 Academia del Conductor Profesional</a><br>
            <a href="/spain-law">⚖️ Ley del transporte en España</a><br>
            <a href="/cap-code95-spain">🇪🇺 CAP / Code 95 — Polonia, Lituania y trabajo en España</a><br>
            <a href="/professional-driver-card">🇲🇦 Tarjeta profesional del conductor en Marruecos</a><br>
            <a href="/open-letter" style="display:inline-block;padding:12px 22px;background:linear-gradient(135deg,#8b6914,#d4af37,#8b6914);color:white;border:2px solid #f5d76e;border-radius:12px;box-shadow:0 4px 12px rgba(0,0,0,.25);font-weight:bold;text-decoration:none;margin:8px;">📜 رسالة مفتوحة إلى وزارة النقل واللوجستيك</a><br>
            <a href="/europe-rules">📚 Reglas del transporte en Europa</a><br>
            <a href="/tachograph-guide">🧭 Guía del conductor marroquí en Europa</a>
        </div>
        <div class="card">
            <div class="icon">📄</div>
            <h3>Documentos y herramientas</h3>
            <a href="/driver-documents">📄 Documentos del conductor</a><br>
            <a href="/europe-documents">🌍 Documentos para Europa</a><br>
            <a href="/cmr">📄 Transporte internacional — CMR</a><br>
            <a href="/cv-builder">📝 Crear CV</a><br>
            <a href="/truck-checklist">🚛 Inspección del camión</a>
        </div>

        @elseif(app()->getLocale() === 'fr')
        <div class="card">
            <div class="icon">💼</div>
            <h3>Emploi et entreprises</h3>
            <a href="/morocco-transport-training">🇲🇦 Transport et formation au Maroc</a><br>
            <a href="/youth-drivers-morocco">👨‍🎓 Jeunes conducteurs — début professionnel</a><br>
            <a href="/companies">🇲🇦 Offres d’emploi au Maroc</a><br>
            <a href="/spain-jobs">🇪🇸 Offres d’emploi en Espagne</a><br>
            <a href="/europe-jobs">🇪🇺 Offres pour conducteurs en Europe</a><br>
<a href="/canada-jobs">🇨🇦 Travail de chauffeur routier au Canada</a><br>
            <a href="/for-companies">🤝 Pour les entreprises et employeurs — Publiez vos offres d’emploi</a>
        </div>
        <div class="card">
            <div class="icon">📚</div>
            <h3>Formation et règles</h3>
            <a href="/training">🎓 Académie du Conducteur Professionnel</a><br>
            <a href="/spain-law">⚖️ Loi du transport en Espagne</a><br>
            <a href="/cap-code95-spain">🇪🇺 CAP / Code 95 — Pologne, Lituanie et travail en Espagne</a><br>
            <a href="/professional-driver-card">🇲🇦 Carte professionnelle du conducteur au Maroc</a><br>
            <a href="/open-letter" style="display:inline-block;padding:12px 22px;background:linear-gradient(135deg,#8b6914,#d4af37,#8b6914);color:white;border:2px solid #f5d76e;border-radius:12px;box-shadow:0 4px 12px rgba(0,0,0,.25);font-weight:bold;text-decoration:none;margin:8px;">📜 رسالة مفتوحة إلى وزارة النقل واللوجستيك</a><br>
            <a href="/europe-rules">📚 Règles du transport en Europe</a><br>
            <a href="/tachograph-guide">🧭 Guide du conducteur marocain en Europe</a>
        </div>
        <div class="card">
            <div class="icon">📄</div>
            <h3>Documents et outils</h3>
            <a href="/driver-documents">📄 Documents du conducteur</a><br>
            <a href="/europe-documents">🌍 Documents pour l’Europe</a><br>
            <a href="/cmr">📄 Transport international — CMR</a><br>
            <a href="/cv-builder">📝 Créer un CV</a><br>
            <a href="/truck-checklist">🚛 Inspection du camion</a>
        </div>

        @else
        <div class="card">
            <div class="icon">💼</div>
            <h3>العمل والشركات</h3>
            <a href="/morocco-transport-training">🇲🇦 النقل والتكوين بالمغرب</a><br>
            <a href="/youth-drivers-morocco">👨‍🎓 الشباب السائقون — بداية المسار المهني</a><br>
            <a href="/companies">🇲🇦 عروض العمل في المغرب</a><br>
            <a href="/spain-jobs">🇪🇸 عروض العمل في إسبانيا</a><br>
            <a href="/europe-jobs">🇪🇺 فرص سائقي الشاحنات في أوروبا</a><br>
<a href="/canada-jobs">🇨🇦 العمل في كندا لسائقي الشاحنات</a><br>
            <a href="/for-companies">🤝 للشركات وأصحاب العمل — انشر فرص العمل</a>
        </div>
        <div class="card">
            <div class="icon">📚</div>
            <h3>التكوين والقواعد</h3>
            <a href="/training">🎓 أكاديمية السائق المحترف</a><br>
            <a href="/spain-law">⚖️ قانون النقل في إسبانيا</a><br>
            <a href="/cap-code95-spain">🇪🇺 CAP / Code 95 — بولونيا وليتوانيا والعمل في إسبانيا</a><br>
            <a href="/professional-driver-card">🇲🇦 البطاقة المهنية للسائق المغربي</a><br>
            <a href="/open-letter" style="display:inline-block;padding:12px 22px;background:linear-gradient(135deg,#8b6914,#d4af37,#8b6914);color:white;border:2px solid #f5d76e;border-radius:12px;box-shadow:0 4px 12px rgba(0,0,0,.25);font-weight:bold;text-decoration:none;margin:8px;">📜 رسالة مفتوحة إلى وزارة النقل واللوجستيك</a><br>
            <a href="/europe-rules">📚 قواعد النقل في أوروبا</a><br>
            <a href="/tachograph-guide">🧭 بوصلة السائق المغربي في أوروبا</a>
        </div>
        <div class="card">
            <div class="icon">📄</div>
            <h3>الوثائق والأدوات</h3>
            <a href="/driver-documents">📄 وثائق السائق</a><br>
            <a href="/europe-documents">🌍 وثائق أوروبا</a><br>
            <a href="/cmr">📄 النقل الدولي — CMR</a><br>
            <a href="/cv-builder">📝 إنشاء CV</a><br>
            <a href="/truck-checklist">🚛 فحص الشاحنة</a><br>
            <a href="/constat-amiable">🤝 المعاينة الودية</a>
        </div>
        @endif
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


            </div>
        @endif

    </div>

</section>

<footer>

    <strong>🚛 Edriouche Truck Job</strong>

    <div class="footer-links"></div>

    @if(app()->getLocale() === "es")
        <div>El conductor profesional merece respeto.</div>
    @elseif(app()->getLocale() === "fr")
        <div>Le conducteur professionnel mérite le respect.</div>
    @else
        <div>السائق المحترف يستحق الاحترام.</div>
    @endif

    <div>© 2026 Edriouche Truck Job</div>

</footer>


@php
    $homeImage = null;
    $homeImageExists = false;
    $caption = '';
@endphp

@if($homeImageExists)
<div style="text-align:center; margin:20px 0;">
    <img src="{{ asset('storage/' . $homeImage) }}" alt="Edriouche Truck Job" style="max-width:100%; height:auto;">

    @if($caption)
        <div style="margin-top:10px;">{{ $caption }}</div>
    @endif

    @auth
        <form method="POST" action="{{ route('home-image.caption') }}" style="margin-top:10px;">
            @csrf
            <input type="text" name="caption" value="{{ $caption }}" placeholder="اكتب موضوع الصورة" maxlength="200" style="width:80%;padding:8px;">
            <button type="submit">✏️ حفظ الموضوع</button>
        </form>

        <form method="POST" action="{{ route('home-image.destroy') }}" style="margin-top:8px;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('هل تريد حذف الصورة وموضوعها؟')">🗑️ حذف الصورة</button>
        </form>
    @endauth
</div>
@endif
</body>
</html>
