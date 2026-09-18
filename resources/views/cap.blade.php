@include("partials.language-switcher")
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === "ar" ? "rtl" : "ltr" }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __("messages.cap_title") }} | Edriouche Truck Job</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fa;
            color: #17212b;
        }

        header {
            background: #102a43;
            color: white;
            padding: 28px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0 0 10px;
            font-size: 28px;
        }

        header p {
            margin: 0;
            font-size: 17px;
        }

        .container {
            max-width: 1000px;
            margin: 25px auto;
            padding: 0 16px;
        }

        .card {
            background: white;
            border-radius: 14px;
            padding: 22px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .card h2 {
            color: #102a43;
            margin-top: 0;
        }

        .official {
            border-right: 5px solid #d4a72c;
        }

        .button {
            display: inline-block;
            background: #102a43;
            color: white;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 8px;
            margin-top: 10px;
        }

        .button:hover {
            opacity: 0.9;
        }

        .back {
            background: #52606d;
        }

        ul {
            line-height: 2;
        }

        .warning {
            background: #fff8e1;
            border-right: 5px solid #d4a72c;
        }
    </style>
</head>

<body>

<header>
    <h1>{{ __("messages.cap_title") }}</h1>
    <p>{{ __("messages.cap_subtitle") }}</p>
</header>

<div class="container">

    <div class="card">
        <h2>{{ __("messages.cap_what") }}</h2>
        <p>
            CAP هو التأهيل المهني المطلوب للسائقين المهنيين في إسبانيا
            وفق الحالات التي ينص عليها القانون، ويشمل تكوين السائقين
            في نقل البضائع ونقل الركاب.
        </p>
    </div>

    <div class="card official">
        <h2>{{ __("messages.cap_official") }}</h2>

        <p>
            تنشر وزارة النقل والتنقل المستدام الإسبانية قائمة بالمراكز
            المصرح لها بتقديم دورات CAP.
        </p>

        <p>
            يمكن للسائق استعمال القائمة الرسمية للتحقق من المركز قبل
            التسجيل أو دفع أي مبلغ.
        </p>

        <a class="button"
           href="https://cdn.transportes.gob.es/portal-web-transportes/transporte-terrestre/estadisticas-tt/webcentros.pdf"
           target="_blank">
            {{ __("messages.cap_official_link") }}
        </a>
    </div>

    <div class="card">
        <h2>{{ __("messages.cap_types") }}</h2>

        <ul>
            <li>{{ __("messages.cap_initial") }}</li>
            <li>{{ __("messages.cap_continuous") }}</li>
            <li>{{ __("messages.cap_goods") }}</li>
            <li>{{ __("messages.cap_passengers") }}</li>
            <li>{{ __("messages.cap_safety") }}</li>
            <li>{{ __("messages.cap_driving_rest") }}</li>
            <li>{{ __("messages.cap_tachograph") }}</li>
            <li>{{ __("messages.cap_load") }}</li>
        </ul>
    </div>

    <div class="card warning">
        <h2>{{ __("messages.cap_warning") }}</h2>

        <p>
            لا تدفع لأي شخص يدعي أنه يستطيع بيعك CAP أو عقد عمل أو
            ضمان وظيفة في إسبانيا.
        </p>

        <p>
            تحقق دائماً من المركز من خلال المصادر الرسمية، وتأكد من
            شروط التسجيل والتكوين قبل دفع أي مبلغ.
        </p>
    </div>

    <div class="card">
        <h2>{{ __("messages.cap_goal") }}</h2>

        <p>
            هدفنا هو مساعدة السائق المغربي على الوصول إلى المعلومات
            الرسمية، وتجنب الوسطاء والعروض الوهمية.
        </p>

        <a class="button back" href="/spain">{{ __("messages.back_spain") }}</a>
        <a class="button back" href="/">{{ __("messages.home") }}</a>
    </div>

</div>

</body>
</html>
