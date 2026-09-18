@include("partials.language-switcher")
@php($lang = session('locale', 'ar'))
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>شركات النقل الإسبانية | Edriouche Truck Job</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f6f9;
            color: #17212b;
        }

        header {
            background: linear-gradient(135deg, #102a43, #1f4e79);
            color: white;
            padding: 35px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0 0 10px;
            font-size: 30px;
        }

        header p {
            margin: 0;
            font-size: 17px;
        }

        .container {
            max-width: 1050px;
            margin: 25px auto;
            padding: 0 16px;
        }

        .intro,
        .company {
            background: white;
            border-radius: 16px;
            padding: 22px;
            margin-bottom: 20px;
            box-shadow: 0 5px 18px rgba(0,0,0,0.08);
        }

        .intro h2 {
            color: #102a43;
            margin-top: 0;
        }

        .company {
            position: relative;
            border-right: 6px solid #1f4e79;
        }

        .company h2 {
            margin-top: 0;
            color: #102a43;
        }

        .status {
            display: inline-block;
            padding: 7px 12px;
            border-radius: 20px;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .active {
            background: #e8f5e9;
            color: #176b2c;
        }

        .open {
            background: #e8f1fb;
            color: #155a91;
        }

        .info {
            line-height: 1.9;
        }

        .label {
            font-weight: bold;
            color: #334e68;
        }

        .button {
            display: inline-block;
            background: #102a43;
            color: white;
            text-decoration: none;
            padding: 11px 18px;
            border-radius: 8px;
            margin-top: 12px;
        }

        .button:hover {
            opacity: 0.9;
        }

        .warning {
            background: #fff8e1;
            border-right: 6px solid #d4a72c;
        }

        .legend {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 15px;
        }

        .back {
            background: #52606d;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #52606d;
        }
@media (max-width:600px){.intro div[style*="grid-template-columns"]{grid-template-columns:repeat(2,1fr)!important;}.intro div[style*="grid-template-columns"] .button{width:auto!important;box-sizing:border-box;}}
.button{display:inline-flex;align-items:center;justify-content:center;min-height:50px;padding:11px 18px;border-radius:12px;text-decoration:none;font-weight:700;color:#fff!important;background:linear-gradient(135deg,#1f4e79,#2e75b6);box-shadow:0 4px 10px rgba(0,0,0,.15);transition:.25s;box-sizing:border-box;border:1px solid rgba(255,255,255,.25);}.button:hover{transform:translateY(-2px);box-shadow:0 7px 16px rgba(0,0,0,.22);filter:brightness(1.08);}.button:active{transform:scale(.97);}
.company-card{background:#fff;border-radius:16px;padding:20px;margin-bottom:18px;box-shadow:0 5px 15px rgba(0,0,0,.12);border:1px solid #e5e5e5;transition:.25s;}
.company-card:hover{transform:translateY(-3px);box-shadow:0 9px 22px rgba(0,0,0,.18);}
.company-card h3{margin-top:0;color:#1f4e79;font-size:22px;}
.company-card p{line-height:1.8;margin:8px 0;}

    </style>
</head>

<body>

<header>
    <h1>🇪🇸 شركات النقل الإسبانية</h1>
    <p>فرص السائقين المهنيين والتقديم المباشر للشركات</p>
</header>

<div class="container">
<div style="text-align:center;margin:20px 0;">
    <a class="button" href="/spain-jobs">🚛 🇪🇸 عروض العمل في إسبانيا</a>
<a class="button" href="/spain-law">⚖️ 🇪🇸 القانون الإسباني للسائق المهني</a>
</div>

    <div class="intro">
        <div class="intro" style="border-top:6px solid #d4af37;background:linear-gradient(135deg,#ffffff,#f8fafc);">
            @if($lang === 'es')
                <h2>🚛 No mires solo el camión… mira a la persona que está detrás del volante.</h2>
                <h3>Detrás de cada camión hay una historia.</h3>
                <p>El conductor no conduce solamente un camión… lleva una responsabilidad y una vida entera sobre sus hombros.</p>
                <p>A veces no pudo estar en celebraciones ni en funerales… porque la carretera lo llamaba y detrás de él había una carga, una responsabilidad y un deber profesional.</p>
                <p><strong>Honestidad • Confianza • Responsabilidad • Deber profesional</strong></p>
                <p><strong>Detrás de cada camión que llega a su destino, hay una persona que ha hecho muchos sacrificios para que llegue con seguridad.</strong></p>
                <p>Por eso creamos <strong>Edriouche Truck Job</strong>: no solo para buscar trabajo, sino para defender el respeto por la profesión de conductor, ayudar al conductor a encontrar una oportunidad real, conocer sus derechos y protegerse de intermediarios y falsas promesas.</p>
                <p><strong>🇲🇦 De Marruecos a Europa… queremos que el conductor llegue con dignidad, igual que su camión llega con seguridad.</strong></p>
                <p style="font-size:22px;"><strong>El conductor profesional merece respeto. 🚛❤️</strong></p>
            @elseif($lang === 'fr')
                <h2>🚛 Ne regardez pas seulement le camion… regardez la personne qui est derrière le volant.</h2>
                <h3>Derrière chaque camion, il y a une histoire.</h3>
                <p>Le conducteur ne conduit pas seulement un camion… il porte une responsabilité et toute une vie sur ses épaules.</p>
                <p>Parfois, il n'a pas pu être présent aux fêtes ni aux funérailles… parce que la route l'appelait et qu'il avait derrière lui une cargaison, une responsabilité et un devoir professionnel.</p>
                <p><strong>Honnêteté • Confiance • Responsabilité • Devoir professionnel</strong></p>
                <p><strong>Derrière chaque camion qui arrive à destination, il y a une personne qui a fait de nombreux sacrifices pour qu'il arrive en toute sécurité.</strong></p>
                <p>C'est pourquoi nous avons créé <strong>Edriouche Truck Job</strong> : non seulement pour chercher un emploi, mais pour défendre le respect de la profession de conducteur, aider le conducteur à trouver une véritable opportunité, connaître ses droits et se protéger des intermédiaires et des fausses promesses.</p>
                <p><strong>🇲🇦 Du Maroc vers l'Europe… nous voulons que le conducteur arrive avec dignité, tout comme son camion arrive en toute sécurité.</strong></p>
                <p style="font-size:22px;"><strong>Le conducteur professionnel mérite le respect. 🚛❤️</strong></p>
            @else
                <h2>🚛 لا تنظر فقط إلى الشاحنة… انظر إلى الإنسان الذي يجلس خلف المقود.</h2>
                <h3>خلف كل شاحنة قصة.</h3>
                <p>السائق لا يقود شاحنة فقط… بل يحمل على كتفيه مسؤولية وحياة كاملة.</p>
                <p>أحيانًا لم يستطع أن يكون حاضرًا في المناسبات أو الجنازات… لأن الطريق كان يناديه، وخلفه حمولة ومسؤولية وواجب مهني.</p>
                <p><strong>الأمانة • الثقة • المسؤولية • الواجب المهني</strong></p>
                <p><strong>خلف كل شاحنة تصل إلى وجهتها، هناك إنسان قدّم الكثير من التضحيات حتى تصل بأمان.</strong></p>
                <p>لهذا أنشأنا <strong>Edriouche Truck Job</strong>: ليس فقط للبحث عن عمل، بل للدفاع عن احترام مهنة السائق، ومساعدة السائق على العثور على فرصة حقيقية، ومعرفة حقوقه، وحمايته من الوسطاء والوعود الكاذبة.</p>
                <p><strong>🇲🇦 من المغرب إلى أوروبا… نريد أن يصل السائق بكرامة، كما تصل شاحنته بأمان.</strong></p>
                <p style="font-size:22px;"><strong>السائق المهني يستحق الاحترام. 🚛❤️</strong></p>
            @endif
        </div>

        <h2>🚛 شركات موثوقة للسائقين</h2>

        <p>
            {{ $lang === 'es' ? 'Hemos reunido esta lista para ayudar al conductor marroquí a contactar directamente con empresas españolas, lejos de intermediarios y ofertas poco fiables.' : ($lang === 'fr' ? 'Nous avons réuni cette liste pour aider le conducteur marocain à contacter directement les entreprises espagnoles, loin des intermédiaires et des offres peu fiables.' : 'جمعنا هذه القائمة لمساعدة السائق المغربي على الوصول إلى الشركات الإسبانية مباشرة، بعيدًا عن الوسطاء والعروض غير الموثوقة.') }}
        </p>

        <p>
            {{ $lang === 'es' ? 'Distinguimos claramente entre una contratación activa y una empresa que solo acepta candidaturas.' : ($lang === 'fr' ? 'Nous distinguons clairement entre un recrutement actif et une entreprise qui accepte uniquement les candidatures.' : 'نميز بوضوح بين الوظيفة النشطة وبين الشركة التي تستقبل الترشيحات فقط.') }}
        </p>

        <div class="legend">
            <span class="status active">🟢 {{ $lang === 'es' ? 'Contratación activa' : ($lang === 'fr' ? 'Recrutement actif' : 'توظيف نشط حاليًا') }}</span>
            <span class="status open">🔵 {{ $lang === 'es' ? 'Candidatura abierta' : ($lang === 'fr' ? 'Candidature ouverte' : 'ترشيح مفتوح') }}</span>
        </div>
    </div>

    @php($lang = app()->getLocale())

    <!-- 1 JCARRION -->
    <div class="company-card">
        <span class="status active">🟢 {{ $lang === 'es' ? 'Contratación activa' : ($lang === 'fr' ? 'Recrutement actif' : 'توظيف نشط حاليًا') }}</span>
        <h2>🏢 JCARRION</h2>
        <div class="info">
            <p><span class="label">📍 {{ $lang === 'es' ? 'Ámbito:' : ($lang === 'fr' ? 'Domaine :' : 'المجال:') }}</span> {{ $lang === 'es' ? 'España – transporte nacional e internacional' : ($lang === 'fr' ? 'Espagne – transport national et international' : 'إسبانيا – نقل وطني ودولي') }}</p>
            <p><span class="label">🚛 {{ $lang === 'es' ? 'Requisito:' : ($lang === 'fr' ? 'Permis requis :' : 'المطلوب:') }}</span> C+E</p>
            <p><span class="label">🎓 {{ $lang === 'es' ? 'Requisitos:' : ($lang === 'fr' ? 'Exigences :' : 'المتطلبات:') }}</span> CAP + {{ $lang === 'es' ? 'tarjeta de tacógrafo digital' : ($lang === 'fr' ? 'carte tachygraphe numérique' : 'بطاقة التاكغراف الرقمي') }}</p>
            <p><span class="label">⭐ {{ $lang === 'es' ? 'Nota:' : ($lang === 'fr' ? 'Note :' : 'ملاحظة:') }}</span> {{ $lang === 'es' ? 'Hay ofertas actuales y algunas aceptan conductores sin experiencia, según la oferta.' : ($lang === 'fr' ? 'Des offres sont disponibles et certaines acceptent les conducteurs sans expérience, selon l’offre.' : 'توجد عروض حالية، وبعضها يقبل السائقين دون خبرة حسب العرض.') }}</p>
        </div>
        <a class="button" href="https://ofertas.jcarrion.es/jobs" target="_blank">🔗 {{ $lang === 'es' ? 'Candidatura oficial' : ($lang === 'fr' ? 'Candidature officielle' : 'التقديم الرسمي') }}</a>
    </div>

    <!-- 2 Doseguer -->
    <div class="company-card">
        <span class="status active">🟢 {{ $lang === 'es' ? 'Contratación activa' : ($lang === 'fr' ? 'Recrutement actif' : 'توظيف نشط حاليًا') }}</span>
        <h2>🏢 Doseguer</h2>
        <div class="info">
            <p><span class="label">📍 {{ $lang === 'es' ? 'Zonas:' : ($lang === 'fr' ? 'Zones :' : 'المناطق:') }}</span> Almería · Granada · Murcia</p>
            <p><span class="label">🚛 {{ $lang === 'es' ? 'Actividad:' : ($lang === 'fr' ? 'Activité :' : 'المجال:') }}</span> {{ $lang === 'es' ? 'Transporte frigorífico y mercancía general' : ($lang === 'fr' ? 'Transport frigorifique et marchandises générales' : 'نقل مبرد وبضائع عامة') }}</p>
            <p><span class="label">🌍 {{ $lang === 'es' ? 'Rutas:' : ($lang === 'fr' ? 'Itinéraires :' : 'المسارات:') }}</span> {{ $lang === 'es' ? 'Nacionales e internacionales' : ($lang === 'fr' ? 'Nationales et internationales' : 'وطنية ودولية') }}</p>
            <p><span class="label">🎓 {{ $lang === 'es' ? 'Requisitos:' : ($lang === 'fr' ? 'Exigences :' : 'المتطلبات:') }}</span> C+E + CAP + {{ $lang === 'es' ? 'tarjeta de tacógrafo digital' : ($lang === 'fr' ? 'carte tachygraphe numérique' : 'بطاقة تاكوغراف رقمي') }}</p>
        </div>
        <a class="button" href="https://www.doseguer.com/trabaja-con-nosotros/" target="_blank">🔗 {{ $lang === 'es' ? 'Candidatura oficial' : ($lang === 'fr' ? 'Candidature officielle' : 'التقديم الرسمي') }}</a>
    </div>

    <!-- 3 STEF -->
    <div class="company-card">
        <span class="status active">🟢 {{ $lang === 'es' ? 'Contratación activa' : ($lang === 'fr' ? 'Recrutement actif' : 'توظيف نشط حاليًا') }}</span>
        <h2>🏢 STEF</h2>
        <div class="info">
            <p><span class="label">🚛 {{ $lang === 'es' ? 'Actividad:' : ($lang === 'fr' ? 'Activité :' : 'المجال:') }}</span> {{ $lang === 'es' ? 'Transporte y logística, especialmente productos alimentarios refrigerados' : ($lang === 'fr' ? 'Transport et logistique, notamment produits alimentaires réfrigérés' : 'النقل واللوجستيك، خصوصًا المنتجات الغذائية المبردة') }}</p>
            <p><span class="label">🚚 {{ $lang === 'es' ? 'Puestos:' : ($lang === 'fr' ? 'Postes :' : 'الوظائف:') }}</span> {{ $lang === 'es' ? 'Conductores C+E según el centro de trabajo' : ($lang === 'fr' ? 'Chauffeurs C+E selon le site' : 'سائقو C+E حسب مركز العمل') }}</p>
            <p><span class="label">🎓 {{ $lang === 'es' ? 'Requisitos:' : ($lang === 'fr' ? 'Exigences :' : 'المتطلبات:') }}</span> {{ $lang === 'es' ? 'Según la oferta' : ($lang === 'fr' ? 'Selon l’offre' : 'تختلف حسب الإعلان') }}</p>
        </div>
        <a class="button" href="https://www.stef.jobs/" target="_blank">🔗 {{ $lang === 'es' ? 'Empleos oficiales STEF' : ($lang === 'fr' ? 'Emplois officiels STEF' : 'وظائف STEF الرسمية') }}</a>
    </div>

    <!-- 4 CONTANK -->
    <div class="company-card">
        <span class="status active">🟢 {{ $lang === 'es' ? 'Contratación activa' : ($lang === 'fr' ? 'Recrutement actif' : 'توظيف نشط حاليًا') }}</span>
        <h2>🏢 CONTANK</h2>
        <div class="info">
            <p><span class="label">🚛 {{ $lang === 'es' ? 'Actividad:' : ($lang === 'fr' ? 'Activité :' : 'المجال:') }}</span> {{ $lang === 'es' ? 'Transporte de mercancías y remolques' : ($lang === 'fr' ? 'Transport de marchandises et remorques' : 'نقل البضائع والمقطورات') }}</p>
            <p><span class="label">🚚 {{ $lang === 'es' ? 'Requisito:' : ($lang === 'fr' ? 'Permis requis :' : 'المطلوب:') }}</span> C+E</p>
            <p><span class="label">🎓 {{ $lang === 'es' ? 'Requisitos:' : ($lang === 'fr' ? 'Exigences :' : 'المتطلبات:') }}</span> CAP + {{ $lang === 'es' ? 'tarjeta de tacógrafo' : ($lang === 'fr' ? 'carte tachygraphe' : 'بطاقة تاكوغراف') }}</p>
        </div>
        <a class="button" href="https://contank.com/career/" target="_blank">🔗 {{ $lang === 'es' ? 'Candidatura oficial' : ($lang === 'fr' ? 'Candidature officielle' : 'التقديم الرسمي') }}</a>
    </div>

    <!-- 5 Grupo SGT -->
    <div class="company-card">
        <span class="status open">🔵 {{ $lang === 'es' ? 'Candidatura abierta' : ($lang === 'fr' ? 'Candidature ouverte' : 'ترشيح مفتوح') }}</span>
        <h2>🏢 Grupo SGT</h2>
        <div class="info">
            <p><span class="label">🚛 {{ $lang === 'es' ? 'Actividad:' : ($lang === 'fr' ? 'Activité :' : 'المجال:') }}</span> {{ $lang === 'es' ? 'Transporte nacional e internacional y logística' : ($lang === 'fr' ? 'Transport national et international et logistique' : 'النقل الوطني والدولي واللوجستيك') }}</p>
            <p><span class="label">🚚 {{ $lang === 'es' ? 'Requisito:' : ($lang === 'fr' ? 'Permis requis :' : 'المطلوب:') }}</span> C+E {{ $lang === 'es' ? 'según el puesto' : ($lang === 'fr' ? 'selon le poste' : 'حسب الوظيفة') }}</p>
            <p><span class="label">🎓 {{ $lang === 'es' ? 'Requisitos:' : ($lang === 'fr' ? 'Exigences :' : 'المتطلبات:') }}</span> CAP + {{ $lang === 'es' ? 'experiencia según el puesto' : ($lang === 'fr' ? 'expérience selon le poste' : 'خبرة حسب الوظيفة') }}</p>
        </div>
        <a class="button" href="https://www.gruposgt.com/trabaja-con-nosotros" target="_blank">🔗 {{ $lang === 'es' ? 'Candidatura oficial' : ($lang === 'fr' ? 'Candidature officielle' : 'التقديم الرسمي') }}</a>
    </div>

    <!-- 6 Primafrio -->
    <div class="company-card">
        <span class="status open">🔵 {{ $lang === 'es' ? 'Candidatura abierta' : ($lang === 'fr' ? 'Candidature ouverte' : 'ترشيح مفتوح') }}</span>
        <h2>🏢 Primafrio</h2>
        <div class="info">
            <p><span class="label">🚛 {{ $lang === 'es' ? 'Actividad:' : ($lang === 'fr' ? 'Activité :' : 'المجال:') }}</span> {{ $lang === 'es' ? 'Transporte frigorífico y logística' : ($lang === 'fr' ? 'Transport frigorifique et logistique' : 'النقل المبرد واللوجستيك') }}</p>
            <p><span class="label">🌍 {{ $lang === 'es' ? 'Ámbito geográfico:' : ($lang === 'fr' ? 'Zone géographique :' : 'المجال الجغرافي:') }}</span> {{ $lang === 'es' ? 'España y Europa' : ($lang === 'fr' ? 'Espagne et Europe' : 'إسبانيا وأوروبا') }}</p>
            <p><span class="label">👨‍✈️ {{ $lang === 'es' ? 'Para conductores:' : ($lang === 'fr' ? 'Pour les chauffeurs :' : 'للسائق:') }}</span> {{ $lang === 'es' ? 'Se puede enviar una candidatura directa a la empresa.' : ($lang === 'fr' ? 'Une candidature directe peut être envoyée à l’entreprise.' : 'يمكن إرسال طلب ترشيح مباشر عبر الشركة.') }}</p>
        </div>
        <a class="button" href="https://www.primafrio.com/trabajo/" target="_blank">🔗 {{ $lang === 'es' ? 'Candidatura oficial' : ($lang === 'fr' ? 'Candidature officielle' : 'التقديم الرسمي') }}</a>
    </div>

    <!-- 7 Logista -->
    <div class="company-card">
        <span class="status open">🔵 {{ $lang === 'es' ? 'Candidatura abierta' : ($lang === 'fr' ? 'Candidature ouverte' : 'ترشيح مفتوح') }}</span>
        <h2>🏢 Logista</h2>
        <div class="info">
            <p><span class="label">🚛 {{ $lang === 'es' ? 'Actividad:' : ($lang === 'fr' ? 'Activité :' : 'المجال:') }}</span> {{ $lang === 'es' ? 'Transporte, logística y distribución' : ($lang === 'fr' ? 'Transport, logistique et distribution' : 'النقل واللوجستيك والتوزيع') }}</p>
            <p><span class="label">👨‍✈️ {{ $lang === 'es' ? 'Para conductores:' : ($lang === 'fr' ? 'Pour les chauffeurs :' : 'للسائقين:') }}</span> {{ $lang === 'es' ? 'Canales oficiales de contacto y candidatura según la actividad.' : ($lang === 'fr' ? 'Canaux officiels de contact et de candidature selon l’activité.' : 'توجد قنوات رسمية للتواصل والترشيح حسب النشاط.') }}</p>
        </div>
        <a class="button" href="https://www.logista.com/" target="_blank">🔗 {{ $lang === 'es' ? 'Sitio oficial' : ($lang === 'fr' ? 'Site officiel' : 'الموقع الرسمي') }}</a>
    </div>

    <!-- 8 Grupo Hiemesa -->
    <div class="company-card">
        <span class="status active">🟢 {{ $lang === 'es' ? 'Contratación activa' : ($lang === 'fr' ? 'Recrutement actif' : 'توظيف نشط حاليًا') }}</span>
        <h2>🏢 Grupo Hiemesa</h2>
        <div class="info">
            <p><span class="label">🚛 {{ $lang === 'es' ? 'Actividad:' : ($lang === 'fr' ? 'Activité :' : 'المجال:') }}</span> {{ $lang === 'es' ? 'Transporte de mercancías y remolques' : ($lang === 'fr' ? 'Transport de marchandises et remorques' : 'نقل البضائع والمقطورات') }}</p>
            <p><span class="label">🚚 {{ $lang === 'es' ? 'Requisito:' : ($lang === 'fr' ? 'Permis requis :' : 'المطلوب:') }}</span> C+E</p>
            <p><span class="label">🎓 {{ $lang === 'es' ? 'Requisitos:' : ($lang === 'fr' ? 'Exigences :' : 'المتطلبات:') }}</span> CAP + {{ $lang === 'es' ? 'tarjeta de tacógrafo' : ($lang === 'fr' ? 'carte tachygraphe' : 'بطاقة تاكوغراف') }}</p>
        </div>
        <a class="button" href="https://www.hiemesa.com/Trabaja" target="_blank">🔗 {{ $lang === 'es' ? 'Candidatura oficial' : ($lang === 'fr' ? 'Candidature officielle' : 'التقديم الرسمي') }}</a>
    </div>

    <!-- 9 Disfrimur -->
    <div class="company-card">
        <span class="status open">🔵 {{ $lang === 'es' ? 'Candidatura abierta' : ($lang === 'fr' ? 'Candidature ouverte' : 'ترشيح مفتوح') }}</span>
        <h2>🏢 Disfrimur</h2>
        <div class="info">
            <p><span class="label">🚛 {{ $lang === 'es' ? 'Actividad:' : ($lang === 'fr' ? 'Activité :' : 'المجال:') }}</span> {{ $lang === 'es' ? 'Transporte frigorífico y logística' : ($lang === 'fr' ? 'Transport frigorifique et logistique' : 'النقل المبرد واللوجستيك') }}</p>
            <p><span class="label">🎓 {{ $lang === 'es' ? 'Ventaja:' : ($lang === 'fr' ? 'Avantage :' : 'ميزة مهمة:') }}</span> {{ $lang === 'es' ? 'La empresa cuenta con un programa Escuela de Conductores para formar conductores.' : ($lang === 'fr' ? 'L’entreprise dispose d’un programme Escuela de Conductores pour former les chauffeurs.' : 'لدى الشركة برنامج Escuela de Conductores لتكوين السائقين.') }}</p>
            <p><span class="label">🚚 {{ $lang === 'es' ? 'Categorías:' : ($lang === 'fr' ? 'Catégories :' : 'الفئات:') }}</span> C y C+E {{ $lang === 'es' ? 'según el programa y las oportunidades disponibles.' : ($lang === 'fr' ? 'selon le programme et les opportunités disponibles.' : 'حسب البرنامج والفرص المتاحة.') }}</p>
        </div>
        <a class="button" href="https://disfrimur.com/rrhh/trabaja-con-nosotros/" target="_blank">🔗 {{ $lang === 'es' ? 'Sitio oficial' : ($lang === 'fr' ? 'Site officiel' : 'الموقع الرسمي') }}</a>
    </div>

    <div class="intro" style="border-top:5px solid #1f4e79;">
        <h2>🇪🇸 دليل السائق المغربي في إسبانيا</h2>
        <p>كل ما يحتاجه السائق للبحث عن عمل وتكوين ومعلومات موثوقة في مكان واحد.</p>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:15px;margin-top:20px;">
            <a class="button" href="/jobs">💼 عروض العمل</a>
            <a class="button" href="/training">🎓 التكوين والتدريب</a>
            <a class="button" href="/cap">🇪🇸 مراكز CAP</a>
            <a class="button" href="/spain">🇪🇸 دليل العمل في إسبانيا</a>
            <a class="button" href="/driver-documents">🪪 وثائق السائق</a>
            <a class="button" href="/europe-documents">📑 وثائق أوروبا</a>
            <a class="button" href="/europe-rules">🕐 قوانين القيادة والراحة</a>
            <a class="button" href="/tachograph-guide">⏱️ دليل التاكوغراف</a>
            <a class="button" href="/cv-builder">📝 إنشاء CV للسائق</a>
        </div>
    </div>

    <div class="intro" style="border-top:5px solid #d4af37;">
        <h2>🚛 أنواع النقل التي يبحث عنها السائقون</h2>
        <p>النقل الدولي • النقل الوطني • النقل المبرد • اللوجستيك • مواد البناء • الحاويات • نقل البضائع • النقل المتخصص</p>
        <p><strong>ملاحظة:</strong> نضيف كل نوع من النقل عندما تتوفر لدينا معلومات موثوقة ورابط رسمي.</p>
    </div>

    <div class="intro" style="border-top:5px solid #2e7d32;">
        <h2>🏙️ مدن ومناطق النقل في إسبانيا</h2>
        <p>مدريد • برشلونة • فالنسيا • سرقسطة • مورسيا • مالقة • إشبيلية • بلباو • ألميريا • هويلفا • مدريد والمناطق اللوجستية الأخرى</p>
        <p>يمكنك البحث عن الشركة حسب المدينة من خلال صفحات التوظيف الرسمية للشركات.</p>
    </div>

    <div class="intro" style="border-top:5px solid #7b1fa2;">
        <h2>🔗 مصادر رسمية للسائق</h2>
        <p>نعتمد قدر الإمكان على المصادر الرسمية، وليس على الوسطاء أو الحسابات المجهولة.</p>
        <p>
            <a class="button" href="https://sede.transportes.gob.es/" target="_blank">🇪🇸 وزارة النقل الإسبانية</a>
            <a class="button" href="https://eures.europa.eu/" target="_blank">🇪🇺 EURES</a>
        </p>
    </div>


    <div class="intro warning">
        <h2>⚠️ تنبيه للسائق المغربي</h2>

        <p>
            Edriouche Truck Job لا يبيع عقود العمل ولا يطلب من السائق
            دفع المال مقابل الحصول على وظيفة.
        </p>

        <p>
            قبل إرسال وثائقك أو دفع أي مبلغ، تحقق من الشركة ومن رابط
            التقديم الرسمي. لا تعتمد على وسيط مجهول أو حساب شخصي في
            مواقع التواصل الاجتماعي.
        </p>

        <a class="button back" href="/spain">
            🇪🇸 العودة إلى دليل إسبانيا
        </a>

        <a class="button back" href="/cap">
            🎓 مراكز CAP
        </a>

        <a class="button back" href="/">
            🏠 الرئيسية
        </a>
    </div>

</div>

<footer>
    © 2026 Edriouche Truck Job — من السائق إلى السائق 🚛
</footer>

</body>
</html>
