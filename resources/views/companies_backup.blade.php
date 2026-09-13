<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شركات النقل - Edriouche Truck Job</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f5f6f8;
            color: #222;
        }

        header {
            background: #111827;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 1100px;
            margin: 25px auto;
            padding: 0 15px;
        }

        .company {
            background: white;
            border-radius: 12px;
            padding: 18px;
            margin-bottom: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,.08);
        }

        .company h2 {
            margin-top: 0;
        }

        .info {
            color: #555;
            line-height: 1.8;
        }

        .back {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<header>
    <h1>🚛 Edriouche Truck Job</h1>
    <p>شركات النقل</p>
</header>

<div class="container">

    <a href="/" class="back">⬅️ العودة إلى الرئيسية</a>

    <h1>🏢 شركات النقل</h1>
    <p>شركات النقل المسجلة في منصة Edriouche Truck Job</p>

    @foreach($companies as $company)
        <div class="company">
            <h2>🏢 {{ $company->name }}</h2>

            <div class="info">
                @if($company->city)
                    📍 المدينة: {{ $company->city }}<br>
                @endif

                @if($company->country)
                    🌍 الدولة: {{ $company->country }}<br>
                @endif

                @if($company->phone)
                    📞 الهاتف: {{ $company->phone }}<br>
                @endif

                @if($company->email)
                    📧 البريد: {{ $company->email }}<br>
                @endif

                @if($company->website)
                    🌐 الموقع:
                    <a href="{{ $company->website }}" target="_blank">
                        زيارة موقع الشركة
                    </a>
                @endif
            </div>
        </div>
    @endforeach

</div>

</body>
</html>
