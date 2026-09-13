<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>التكوين وإدماج السائقين | Edriouche Truck Job</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
            line-height: 1.8;
        }

        header {
            background: #111827;
            color: white;
            text-align: center;
            padding: 30px 20px;
        }

        header h1 {
            margin: 0 0 10px;
        }

        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
        }

        .back {
            display: inline-block;
            margin-bottom: 20px;
            color: #111827;
            text-decoration: none;
            font-weight: bold;
        }

        .intro,
        .card,
        .warning {
            background: white;
            padding: 22px;
            margin-bottom: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .card h2 {
            margin-top: 0;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 16px;
        }

        .center {
            background: #fff;
            padding: 18px;
            margin-bottom: 12px;
            border-radius: 10px;
        }

        .button {
            display: inline-block;
            margin: 8px 0;
            padding: 11px 18px;
            background: #111827;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .warning {
            border-right: 5px solid #d4af37;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #666;
        }
    </style>
</head>

<body>

<header>
    <h1>🚛 التكوين وإدماج السائقين</h1>
    <p>Edriouche Truck Job</p>
</header>

<div class="container">

    <a class="back" href="/">⬅️ العودة إلى الرئيسية</a>

    <div class="intro">
        <h2>🎓 التكوين المهني للسائقين</h2>

        <p>
            نساعد السائقين المهنيين والمبتدئين على التعرف على مسارات
            التكوين في مجال النقل الطرقي واللوجستيك، مع الاعتماد على
            المعلومات الرسمية كلما كانت متاحة.
        </p>

        <a class="button" href="https://www.ofppt.ma/" target="_blank">
            🌐 الموقع الرسمي لـ OFPPT
        </a>
    </div>

    <div class="cards">

        <div class="card">
            <h2>🚚 Conducteur Routier de Marchandises</h2>
            <p>
                تكوين مهني لسائقي نقل البضائع بالشاحنات، ويشمل السلامة
                المهنية، فحص المركبة، تحميل وتثبيت البضائع، التسليم،
                النقل الدولي، المواد الخطرة، السياقة الاقتصادية
                والإدماج في وسط العمل.
            </p>
        </div>

        <div class="card">
            <h2>🚌 Conducteur Routier de Voyageurs</h2>
            <p>
                تكوين مهني لسائقي نقل المسافرين، مع مواضيع مرتبطة
                بالسلامة، التعامل مع المسافرين، النقل الدولي
                والإدماج في وسط العمل.
            </p>
        </div>

        <div class="card">
            <h2>🌱 Eco-Conducteur du Transport Routier de Marchandises</h2>
            <p>
                تكوين يركز على فحص الشاحنة والمقطورة، المناورات والربط
                والفصل بأمان، السياقة العقلانية والاقتصادية،
                الوقاية من المخاطر والتعامل مع البضائع.
            </p>
        </div>

    </div>

    <div class="card">
        <h2>🏫 مراكز OFPPT المتخصصة</h2>

        <p>
            فيما يلي مراكز OFPPT المتخصصة في مهن النقل الطرقي واللوجستيك
            التي تم التحقق منها. يجب التأكد من الشعب والمقاعد المتاحة
            مباشرة مع المؤسسة قبل التسجيل.
        </p>

        <div class="center">
            <h3>📍 طنجة</h3>
            <p>المعهد المتخصص في مهن النقل الطرقي واللوجستيك – طنجة</p>
        </div>

        <div class="center">
            <h3>📍 الدار البيضاء</h3>
            <p>المعهد المتخصص في مهن النقل الطرقي واللوجستيك – الدار البيضاء</p>
        </div>

        <div class="center">
            <h3>📍 أكادير</h3>
            <p>المعهد المتخصص في مهن النقل الطرقي – أكادير</p>
        </div>

        <div class="center">
            <h3>📍 تاوريرت</h3>
            <p>المعهد المتخصص في مهن النقل الطرقي واللوجستيك – تاوريرت</p>
        </div>

        <div class="center">
            <h3>📍 فاس</h3>
            <p>المعهد المتخصص للتكوين في مهن النقل الطرقي واللوجستيك – فاس</p>
        </div>

        <div class="center">
            <h3>📍 القنيطرة</h3>
            <p>المعهد المتخصص في مهن النقل الطرقي واللوجستيك – القنيطرة</p>
        </div>

        <p>
            🌐 للمعلومات الرسمية والتسجيل، يرجى الرجوع إلى موقع OFPPT.
        </p>
    </div>

    <div class="card">
        <h2>🟢 كيف يبدأ المبتدئ؟</h2>

        <ol>
            <li>📄 التأكد من توفر رخصة السياقة المطلوبة.</li>
            <li>🎓 البحث عن تكوين مهني مناسب في النقل الطرقي.</li>
            <li>🛡️ تعلم قواعد السلامة وفحص المركبة.</li>
            <li>🚛 اكتساب التدريب والخبرة العملية.</li>
            <li>💼 البحث عن أول فرصة عمل لدى شركة موثوقة.</li>
            <li>📚 الاستمرار في التكوين والتطوير المهني.</li>
        </ol>
    </div>

    <div class="card">
        <h2>📚 ماذا يتعلم سائق نقل البضائع؟</h2>

        <ul>
            <li>🛡️ السلامة المهنية والوقاية من المخاطر</li>
            <li>🔧 فحص المركبة والتعامل مع الأعطال البسيطة</li>
            <li>📦 تحميل وتثبيت البضائع</li>
            <li>🌍 النقل الدولي والأنظمة الجمركية</li>
            <li>🇫🇷 الفرنسية و🇪🇸 الإسبانية المطبقتان في المهنة</li>
            <li>⚠️ أساسيات نقل المواد الخطرة</li>
            <li>⛽ السياقة الاقتصادية</li>
            <li>💼 الإدماج في وسط العمل</li>
        </ul>
    </div>

    <div class="warning">
        <h2>🛡️ تنبيه مهم للسائقين</h2>

        <p>
            Edriouche Truck Job لا يطلب من السائق دفع أموال مقابل وعد
            بالتوظيف. تحقق دائمًا من الشركة والعنوان ورقم الهاتف والبريد
            الإلكتروني قبل إرسال وثائقك أو دفع أي مبلغ.
        </p>
    </div>

    <div style="text-align:center;">
        <a class="button" href="/jobs">🚛 عروض العمل</a>
        <a class="button" href="/companies">🏢 شركات النقل</a>
        <a class="button" href="/">🏠 الرئيسية</a>
    </div>

</div>

<footer>
    © 2026 Edriouche Truck Job
</footer>

</body>
</html>
