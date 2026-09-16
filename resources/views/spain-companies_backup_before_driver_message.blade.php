@include("partials.language-switcher")
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شركات النقل الإسبانية | Edriouche Truck Job</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fa;
            color: #17212b;
        }

        header {
            background: #102a43;
            color: white;
            text-align: center;
            padding: 30px 18px;
        }

        header h1 {
            margin: 0 0 10px;
            font-size: 29px;
        }

        header p {
            margin: 0;
            font-size: 17px;
        }

        .container {
            max-width: 1100px;
            margin: 25px auto;
            padding: 0 15px;
        }

        .intro {
            background: white;
            padding: 22px;
            border-radius: 14px;
            margin-bottom: 22px;
            box-shadow: 0 4px 15px rgba(0,0,0,.08);
        }

        .intro h2 {
            margin-top: 0;
            color: #102a43;
        }

        .status-box {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 18px;
        }

        .status {
            padding: 10px 15px;
            border-radius: 8px;
            font-weight: bold;
        }

        .active {
            background: #e8f5e9;
            color: #1b5e20;
        }

        .open {
            background: #e3f2fd;
            color: #0d47a1;
        }

        .companies {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
            gap: 20px;
        }

        .company {
            background: white;
            border-radius: 14px;
            padding: 22px;
            box-shadow: 0 4px 15px rgba(0,0,0,.08);
            border-top: 5px solid #102a43;
        }

        .company h3 {
            margin: 0 0 15px;
            color: #102a43;
            font-size: 21px;
        }

        .badge {
            display: inline-block;
            padding: 7px 11px;
            border-radius: 7px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .info {
            line-height: 1.9;
        }

        .apply {
            display: inline-block;
            margin-top: 15px;
            padding: 11px 16px;
            background: #102a43;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .apply:hover {
            opacity: .9;
        }

        .warning {
            margin-top: 25px;
            background: #fff8e1;
            border-right: 5px solid #d4a72c;
            padding: 20px;
            border-radius: 10px;
        }

        .warning h2 {
            margin-top: 0;
        }

        .buttons {
            text-align: center;
            margin: 30px 0;
        }

        .back {
            display: inline-block;
            background: #52606d;
            color: white;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 8px;
            margin: 5px;
        }

        footer {
            background: #102a43;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }
    </style>
</head>

<body>

<header>
    <h1>🇪🇸 شركات النقل الإسبانية</h1>
    <p>فرص السائقين المهنيين | Edriouche Truck Job</p>
</header>

<div class="container">

    <div class="intro">
        <h2>🚛 شركات موثوقة للسائقين</h2>

        <p>
            نجمع هنا شركات النقل الإسبانية التي لديها فرص توظيف
            أو تستقبل ترشيحات السائقين من خلال قنوات رسمية.
        </p>

        <p>
            لا نعتبر وجود اسم الشركة وحده دليلاً على وجود وظيفة.
            لذلك نستخدم تصنيفاً واضحاً حتى يعرف السائق حالة كل فرصة.
        </p>

        <div class="status-box">
            <div class="status active">🟢 وظيفة نشطة</div>
            <div class="status open">🔵 ترشيح مفتوح</div>
        </div>
    </div>

    <div class="companies">

        <div class="company">
            <h3>JCARRION</h3>
            <div class="badge active">🟢 وظيفة نشطة</div>
            <div class="info">
                🚛 نقل وطني ودولي<br>
                👨‍✈️ C+E<br>
                🎓 CAP + بطاقة تاكوغراف<br>
                ⭐ توجد عروض تشمل فرصاً بدون خبرة في بعض الحالات
            </div>
            <a class="apply" href="https://jobs.jcarrion.es/reclutamiento/" target="_blank">
                🔗 التقديم الرسمي
            </a>
        </div>

        <div class="company">
            <h3>Doseguer</h3>
            <div class="badge active">🟢 وظيفة نشطة</div>
            <div class="info">
                🚛 نقل وطني ودولي<br>
                ❄️ نقل مبرد وبضائع عامة<br>
                👨‍✈️ C+E<br>
                🎓 CAP + بطاقة تاكوغراف<br>
                ⭐ تدريب للسائقين في النقل المبرد
            </div>
            <a class="apply" href="https://www.doseguer.com/trabaja-con-nosotros/" target="_blank">
                🔗 التقديم الرسمي
            </a>
        </div>

        <div class="company">
            <h3>STEF</h3>
            <div class="badge active">🟢 وظيفة نشطة</div>
            <div class="info">
                🚛 نقل المنتجات الغذائية والمبردة<br>
                👨‍✈️ C+E<br>
                🎓 CAP<br>
                📍 فرص في عدة مناطق بإسبانيا
            </div>
            <a class="apply" href="https://apply.stef.jobs/" target="_blank">
                🔗 التوظيف الرسمي
            </a>
        </div>

        <div class="company">
            <h3>CONTANK</h3>
            <div class="badge open">🔵 ترشيح مفتوح</div>
            <div class="info">
                🚛 نقل البضائع والصهاريج<br>
                👨‍✈️ C+E<br>
                🎓 CAP<br>
                ⚠️ ADR حسب الوظيفة
            </div>
            <a class="apply" href="https://contank.com/career/" target="_blank">
                🔗 التقديم الرسمي
            </a>
        </div>

        <div class="company">
            <h3>Grupo Hiemesa</h3>
            <div class="badge open">🔵 ترشيح مفتوح</div>
            <div class="info">
                🚛 نقل بالمقطورات<br>
                👨‍✈️ C+E<br>
                🎓 CAP<br>
                📟 بطاقة تاكوغراف<br>
                ⭐ خبرة سابقة مطلوبة حسب الوظيفة
            </div>
            <a class="apply" href="https://www.hiemesa.com/Trabaja" target="_blank">
                🔗 التقديم الرسمي
            </a>
        </div>

        <div class="company">
            <h3>Grupo SGT</h3>
            <div class="badge open">🔵 ترشيح مفتوح</div>
            <div class="info">
                🚛 نقل وطني ودولي<br>
                👨‍✈️ C+E<br>
                🎓 CAP<br>
                ⚓ خدمات النقل واللوجستيك
            </div>
            <a class="apply" href="https://www.gruposgt.com/trabaja-con-nosotros" target="_blank">
                🔗 التقديم الرسمي
            </a>
        </div>

        <div class="company">
            <h3>Primafrio</h3>
            <div class="badge open">🔵 ترشيح مفتوح</div>
            <div class="info">
               
cat > resources/views/spanish_companies.blade.php <<'EOF'
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
    </style>
</head>

<body>

<header>
    <h1>🇪🇸 شركات النقل الإسبانية</h1>
    <p>فرص السائقين المهنيين والتقديم المباشر للشركات</p>
</header>

<div class="container">

    <div class="intro">
        <h2>🚛 شركات موثوقة للسائقين</h2>

        <p>
            جمعنا هذه القائمة لمساعدة السائق المغربي على الوصول إلى
            الشركات الإسبانية مباشرة، بعيدًا عن الوسطاء والعروض
            غير الموثوقة.
        </p>

        <p>
            نميز بوضوح بين الوظيفة النشطة وبين الشركة التي تستقبل
            الترشيحات فقط.
        </p>

        <div class="legend">
            <span class="status active">🟢 وظيفة نشطة</span>
            <span class="status open">🔵 ترشيح مفتوح</span>
        </div>
    </div>

    <!-- 1 -->
    <div class="company">
        <span class="status active">🟢 وظيفة نشطة</span>

        <h2>🏢 JCARRION</h2>

        <div class="info">
            <p><span class="label">📍 المجال:</span> إسبانيا – نقل وطني ودولي</p>
            <p><span class="label">🚛 المطلوب:</span> C+E</p>
            <p><span class="label">🎓 المتطلبات:</span> CAP + بطاقة التاكغراف الرقمي</p>
            <p><span class="label">⭐ ملاحظة:</span> توجد عروض حالية، وبعضها يقبل السائقين دون خبرة حسب العرض.</p>
        </div>

        <a class="button"
           href="https://ofertas.jcarrion.es/jobs"
           target="_blank">
            🔗 التقديم الرسمي
        </a>
    </div>

    <!-- 2 -->
    <div class="company">
        <span class="status active">🟢 وظيفة نشطة</span>

        <h2>🏢 Doseguer</h2>

        <div class="info">
            <p><span class="label">📍 المناطق:</span> Almería · Granada · Murcia</p>
            <p><span class="label">🚛 المجال:</span> نقل مبرد وبضائع عامة</p>
            <p><span class="label">🌍 المسارات:</span> وطنية ودولية</p>
            <p><span class="label">🎓 المتطلبات:</span> C+E + CAP + بطاقة تاكوغراف رقمي</p>
            <p><span class="label">⭐ ملاحظة:</span> الشركة تذكر إمكانية تدريب السائق الذي لا يملك خبرة في النقل المبرد.</p>
        </div>

        <a class="button"
           href="https://www.doseguer.com/trabaja-con-nosotros/"
           target="_blank">
            🔗 التقديم الرسمي
        </a>
    </div>

    <!-- 3 -->
    <div class="company">
        <span class="status active">🟢 وظيفة نشطة</span>

        <h2>🏢 STEF</h2>

        <div class="info">
            <p><span class="label">🚛 المجال:</span> النقل واللوجستيك، خصوصًا المنتجات الغذائية المبردة</p>
            <p><span class="label">🚚 الوظائف:</span> سائقو C+E حسب مركز العمل</p>
            <p><span class="label">🎓 المتطلبات:</span> تختلف حسب الإعلان</p>
        </div>

        <a class="button"
           href="https://www.stef.jobs/"
           target="_blank">
            🔗 وظائف STEF الرسمية
        </a>
    </div>

    <!-- 4 -->
    <div class="company">
        <span class="status open">🔵 ترشيح مفتوح</span>

        <h2>🏢 CONTANK</h2>

        <div class="info">
            <p><span class="label">📍 الموقع:</span> Castellbisbal – Barcelona</p>
            <p><span class="label">🚛 المجال:</span> النقل ADR والصهاريج والنقل الوطني والدولي</p>
            <p><span class="label">🚚 المطلوب:</span> C+E</p>
            <p><span class="label">🎓 المتطلبات:</span> CAP + ADR أساسي وصهاريج</p>
            <p><span class="label">⭐ الخبرة:</span> مفضلة حسب الوظيفة.</p>
        </div>

        <a class="button"
           href="https://contank.com/career/"
           target="_blank">
            🔗 التقديم الرسمي
        </a>
    </div>

    <!-- 5 -->
    <div class="company">
        <span class="status open">🔵 ترشيح مفتوح</span>

        <h2>🏢 Grupo Hiemesa</h2>

        <div class="info">
            <p><span class="label">🚛 المجال:</span> نقل البضائع والمقطورات</p>
            <p><span class="label">🚚 المطلوب:</span> C+E</p>
            <p><span class="label">🎓 المتطلبات:</span> CAP + بطاقة تاكوغراف</p>
        </div>

        <a class="button"
           href="https://www.hiemesa.com/Trabaja"
           target="_blank">
            🔗 التقديم الرسمي
        </a>
    </div>

    <!-- 6 -->
    <div class="company">
        <span class="status open">🔵 ترشيح مفتوح</span>

        <h2>🏢 Grupo SGT</h2>

        <div class="info">
            <p><span class="label">🚛 المجال:</span> النقل الوطني والدولي واللوجستيك</p>
            <p><span class="label">🚚 المطلوب:</span> C+E حسب الوظيفة</p>
            <p><span class="label">🎓 المتطلبات:</span> CAP وخبرة حسب الوظيفة</p>
        </div>

        <a class="button"
           href="https://www.gruposgt.com/trabaja-con-nosotros"
           target="_blank">
            🔗 التقديم الرسمي
        </a>
    </div>

    <!-- 7 -->
    <div class="company">
        <span class="status open">🔵 ترشيح مفتوح</span>

        <h2>🏢 Primafrio</h2>

        <div class="info">
            <p><span class="label">🚛 المجال:</span> النقل المبرد واللوجستيك</p>
            <p><span class="label">🌍 المجال الجغرافي:</span> إسبانيا وأوروبا</p>
            <p><span class="label">👨‍✈️ للسائق:</span> يمكن إرسال طلب ترشيح مباشر عبر الشركة.</p>
        </div>

        <a class="button"
           href="https://www.primafrio.com/trabajo/"
           target="_blank">
            🔗 التقديم الرسمي
        </a>
    </div>

    <!-- 8 -->
    <div class="company">
        <span class="status open">🔵 ترشيح مفتوح</span>

        <h2>🏢 Logista</h2>

        <div class="info">
            <p><span class="label">🚛 المجال:</span> النقل واللوجستيك والتوزيع</p>
            <p><span class="label">👨‍✈️ للسائقين:</span> توجد قنوات رسمية للتواصل والترشيح حسب النشاط.</p>
        </div>

        <a class="button"
           href="https://www.logista.com/"
           target="_blank">
            🔗 الموقع الرسمي
        </a>
    </div>

    <!-- 9 -->
    <div class="company">
        <span class="status open">🔵 ترشيح مفتوح</span>

        <h2>🏢 ONTIME</h2>

        <div class="info">
            <p><span class="label">🚛 المجال:</span> النقل واللوجستيك الوطني والدولي</p>
            <p><span class="label">👨‍✈️ للسائقين:</span> بوابة توظيف رسمية وفرص حسب مراكز العمل.</p>
        </div>

        <a class="button"
           href="https://empleo.ontime.es/"
           target="_blank">
            🔗 بوابة التوظيف الرسمية
        </a>
    </div>

    <!-- 10 -->
    <div class="company">
        <span class="status open">🔵 ترشيح مفتوح</span>

        <h2>🏢 Disfrimur</h2>

        <div class="info">
            <p><span class="label">🚛 المجال:</span> النقل المبرد واللوجستيك</p>
            <p><span class="label">🎓 ميزة مهمة:</span> لدى الشركة برنامج Escuela de Conductores لتكوين السائقين.</p>
            <p><span class="label">🚚 الفئات:</span> C و C+E حسب البرنامج والفرص المتاحة.</p>
        </div>

        <a class="button"
           href="https://www.disfrimur.com/"
           target="_blank">
            🔗 الموقع الرسمي
        </a>
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
