<!DOCTYPE html>
<html lang="ar" dir="rtl">
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
            font-size: 22px;
            font-weight: 800;
            color: #0b3a68;
        }

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
        <a class="brand" href="/">🚛 Edriouche <span>Truck Job</span></a>

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
            <h1>من <span>الطريق</span> إلى خدمة السائق</h1>

            <p>
                منصة أنشأها سائق مهني لمساعدة السائقين،
                وخاصة الشباب المغاربة، على الوصول إلى فرص العمل
                والمعلومات المهنية في النقل الطرقي، بعيدًا عن السماسرة
                والوعود الكاذبة.
            </p>

            <div class="buttons">
                <a class="btn" href="/jobs">🔎 عروض العمل</a>
                <a class="btn secondary" href="/companies">🏢 شركات النقل</a>
                <a class="btn secondary" href="/spain-jobs">🇪🇸 العمل في إسبانيا</a>
            </div>
        </div>

        <div class="hero-photo">
            <img src="{{ asset('images/founder.jpg').'?v=2' }}" alt="محمد الدريوش مؤسس Edriouche Truck Job">
        </div>

    </div>
</section>

<section class="section">

    <div class="section-title">
        <h2>🚛 خدمات السائق المهني</h2>
        <p>أدوات ومعلومات تساعدك في مسيرتك المهنية</p>
    </div>

    <div class="cards">

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

    </div>
</section>

<section class="section">

<section class="section">
    <div class="section-title">
        <h2>🚛 تطور الشاحنات عبر الزمن</h2>
        <p>من شاحنات السبعينيات إلى الشاحنات الحديثة، رحلة تطور القوة والراحة والسلامة والتكنولوجيا في مهنة النقل الطرقي.</p>
    </div>
    <div class="cards">
        <div class="card"><img src="{{ asset('images/truck-volvo-f88-1970.jpg') }}" alt="Volvo F88 1970" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>1970 — Volvo F88</h3><p>شاحنة من جيل السبعينيات، عُرفت بالقوة والبساطة ومثّلت مرحلة مهمة في تطور النقل الثقيل.</p></div>
        <div class="card"><img src="{{ asset('images/truck-volvo-f10.jpg') }}" alt="Volvo F10" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>الثمانينيات — Volvo F10</h3><p>من شاحنات الثمانينيات، جمعت بين قوة المحرك وتحسين راحة السائق في الرحلات الطويلة.</p></div>
        <div class="card"><img src="{{ asset('images/truck-volvo-fh-1993.jpg') }}" alt="Volvo FH 1993" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>1993 — Volvo FH</h3><p>ظهر عام 1993، وبدأ معه جيل جديد من Volvo FH مع تطور واضح في الأداء والراحة والسلامة.</p></div>
        <div class="card"><img src="{{ asset('images/truck-volvo-fh-tanker-2009.jpg') }}" alt="Volvo FH 400 مع ناقلة صهريجية 2009" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>2009 — Volvo FH 400 ومقطورة صهريجية</h3><p>شاحنة مهيأة للنقل الدولي، ومعها أصبحت المقطورات الصهريجية جزءًا مهمًا من نقل المحروقات لمسافات طويلة.</p></div>
        <div class="card"><img src="{{ asset('images/truck-volvo-fh-tanker-2022.jpg') }}" alt="Volvo FH 460 مع مقطورة صهريجية 2022" style="width:100%;height:220px;object-fit:cover;border-radius:14px;"><h3>2022–اليوم — Volvo FH مع مقطورة صهريجية</h3><p>جيل حديث يجمع بين الراحة والتكنولوجيا والسلامة، ويخدم النقل الدولي مع المقطورات الصهريجية.</p></div>
    </div>
</section>

    <div class="spain">

        <div class="section-title">
            <h2>🇪🇸 العمل في إسبانيا</h2>
            <p>قسم خاص بالسائقين الراغبين في فهم الطريق المهني نحو إسبانيا</p>
        </div>

        <div class="spain-grid">
            <a href="/spain-jobs">🇪🇸 عروض العمل في إسبانيا</a>
            <a href="/spanish-companies">🏢 الشركات الإسبانية</a>
            <a href="/spain-law">⚖️ قانون النقل في إسبانيا</a>
        </div>

    </div>
</section>

<section class="section">

    <div class="story">

        <img src="{{ asset('images/founder.jpg').'?v=2' }}" alt="محمد الدريوش">

        <div>
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
        </div>

    </div>

</section>

<section class="section">

    <div class="father">

        <img src="{{ asset('images/father.jpg') }}" alt="ذكرى والد محمد الدريوش">

        <div>
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
        </div>

    </div>

</section>

<section class="section">

    <div class="message">

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

    </div>

</section>

<footer>

    <strong>🚛 Edriouche Truck Job</strong>

    <div class="footer-links">
        <a href="/">الرئيسية</a>
        <a href="/jobs">عروض العمل</a>
        <a href="/companies">شركات النقل</a>
        <a href="/training">التكوين</a>
        <a href="/spain-jobs">إسبانيا</a>
        <a href="/cmr">CMR</a>
    </div>

    <div>السائق المحترف يستحق الاحترام.</div>
    <div>© 2026 Edriouche Truck Job</div>

</footer>

</body>
</html>
