<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edriouche Truck Job</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
        }

        header {
            background: #111827;
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0 0 10px;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
        }

        .box {
            background: white;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 12px;
            text-align: center;
        }

        .father-photo {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #d4af37;
        }

        .box h2 {
            margin-top: 15px;
        }

        .button {
            display: inline-block;
            margin: 8px;
            padding: 12px 22px;
            background: #111827;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .button:hover {
            background: #1f2937;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #666;
        }
    </style>
</head>

<body>

<header>
    <div style="text-align:center;margin:10px 0;font-size:18px;">
        <a href="/lang/ar" style="margin:0 8px;">🇲🇦 العربية</a>
        <a href="/lang/es" style="margin:0 8px;">🇪🇸 Español</a>
        <a href="/lang/fr" style="margin:0 8px;">🇫🇷 Français</a>
    </div>
    <h1>🚛 {{ __("messages.site_name") }}</h1>
    <p>فرص العمل لسائقي الشاحنات والنقل واللوجستيك</p>
</header>

<div class="container">
    <div class="box" style="border-top:6px solid #d4af37;background:linear-gradient(135deg,#ffffff,#f8fafc);">
        <h2 style="font-size:28px;line-height:1.5;">🚛 لا تنظر إلى الشاحنة فقط… انظر إلى الإنسان الذي خلف المقود.</h2>
        <h3>خلف كل شاحنة… قصة سائق</h3>
        <p style="line-height:2;font-size:20px;font-weight:bold;">لم يحضر الأفراح ولا الجنازات…<br>لأن الطريق كان يناديه، ولأن وراءه حمولة ومسؤولية وواجبًا مهنيًا.</p>
        <p style="line-height:2;font-size:20px;font-weight:bold;">الأمانة • الثقة • المسؤولية • الواجب المهني</p>
        <p style="line-height:2;font-size:18px;font-weight:bold;">خلف كل شاحنة تصل إلى وجهتها، هناك إنسان ضحّى بالكثير من أجل أن تصل شاحنته إلى وجهتها.</p>
        <p style="line-height:2;font-size:17px;">لذلك أنشأنا <strong>Edriouche Truck Job</strong>؛ ليس فقط للبحث عن وظيفة، بل من أجل احترام مهنة السائق، ومساعدة السائق على الوصول إلى فرصة حقيقية، ومعرفة حقوقه، وحماية نفسه من السماسرة والوعود الكاذبة.</p>
        <p style="line-height:2;font-size:19px;font-weight:bold;">🇲🇦 من المغرب إلى أوروبا…<br>نريد أن يصل السائق بكرامته، كما تصل شاحنته بسلام.</p>
        <p style="font-size:22px;font-weight:bold;">السائق المحترف يستحق الاحترام. 🚛❤️</p>
    </div>


    <div class="box">
        <img
            src="{{ asset('storage/images/father.jpg') }}"
            alt="المرحوم والد محمد الدريوش - أستاذه في المهنة"
            class="father-photo"
        >

        <h2>🤲 ذكرى المرحوم والدي</h2>

        <p>أستاذي الأول في مهنة النقل والشاحنات</p>

        <p>
            رحمه الله، كان له فضل كبير في تعليمي هذه المهنة
            وغرس حب العمل والمسؤولية في مسيرتي المهنية.
        </p>
    </div>

    <div class="box">
        <h2>🔎 فرص العمل</h2>

        <p>
            نساعد السائقين المهنيين على العثور على فرص عمل حقيقية
            والتواصل مع شركات النقل الموثوقة، مع تجنب عروض الاحتيال والوسطاء.
        </p>

        <a href="/jobs" class="button">{{ __("messages.jobs") }}</a>
        <a href="/companies" class="button">{{ __("messages.companies") }}</a>
        <a href="/training" class="button">{{ __("messages.training") }}</a>
        <div style="margin-top:25px;padding:18px;background:#f5f7fa;border-radius:16px;">
            <h2 style="margin-top:0;">🇪🇺 خدمات السائق المهني</h2>
            <a href="/spain" class="button">🇪🇸 العمل في إسبانيا</a>
            <a href="/spanish-companies" class="button">🇪🇸 الشركات الإسبانية</a>
            <a href="/spain-law" class="button">⚖️ قانون إسبانيا</a>
            <a href="/driver-documents" class="button">📄 وثائق السائق</a>
            <a href="/cv-builder" class="button">📝 إنشاء CV</a>
            <a href="/truck-checklist" class="button">🚛 فحص الشاحنة</a>
        </div>
    </div>

</div>

<footer>
    Edriouche Truck Job © 2026
</footer>

</body>
</html>
