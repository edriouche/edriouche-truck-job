@include("partials.language-switcher")
<!DOCTYPE html>
<html lang="ar" dir="rtl">
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
    <h1>🚛 Edriouche Truck Job</h1>
    <p>فرص العمل لسائقي الشاحنات والنقل واللوجستيك</p>
</header>

<div class="container">

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

        <a href="/jobs" class="button">🚛 وظائف السائقين</a>
        <a href="/companies" class="button">🏢 شركات النقل</a>
        <a href="/training" class="button">🎓 التكوين والتدريب</a>
    </div>

</div>

<footer>
    Edriouche Truck Job © 2026
</footer>

</body>
</html>
