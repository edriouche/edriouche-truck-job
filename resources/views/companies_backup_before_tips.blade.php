@include("partials.language-switcher")
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شركات النقل - Edriouche Truck Job</title>

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
            text-align: center;
            padding: 25px 15px;
        }

        header h1 {
            margin: 0;
            font-size: 26px;
        }

        header p {
            margin: 8px 0 0;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 20px 15px;
        }

        .search {
            width: 100%;
            box-sizing: border-box;
            padding: 14px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 16px;
        }

        .companies {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 16px;
        }

        .company {
            background: white;
            padding: 18px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .company h2 {
            margin-top: 0;
            font-size: 19px;
        }

        .verified {
            color: #166534;
            font-weight: bold;
        }

        .links a {
            display: inline-block;
            margin: 8px 5px 0 0;
            padding: 8px 12px;
            background: #e5e7eb;
            color: #111827;
            text-decoration: none;
            border-radius: 7px;
        }

        .back {
            display: inline-block;
            margin-bottom: 18px;
            color: #111827;
            text-decoration: none;
            font-weight: bold;
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
    <h1>🚛 Edriouche Truck Job</h1>
    <p>🏢 شركات النقل</p>
</header>

<div class="container">

    <a class="back" href="/">⬅️ العودة إلى الرئيسية</a>

    <input
        class="search"
        id="search"
        type="text"
        placeholder="🔎 ابحث عن شركة أو مدينة..."
        onkeyup="searchCompanies()"
    >

    <div class="companies">

        @foreach($companies as $company)

            <div class="company">

                <h2>🏢 {{ $company->name }}</h2>

                @if($company->verified)
                    <div class="verified">✅ تم التحقق</div>
                @endif

                @if($company->city)
                    <p>📍 {{ $company->city }}</p>
                @endif

                @if($company->country)
                    <p>🌍 {{ $company->country }}</p>
                @endif

                @if($company->phone)
                    <p>📞 {{ $company->phone }}</p>
                @endif

                @if($company->email)
                    <p>📧 {{ $company->email }}</p>
                @endif

                <div class="links">

                    @if($company->website)
                        <a href="{{ $company->website }}" target="_blank">
                            🌐 موقع الشركة
                        </a>
                    @endif

                    @if($company->job_link)
                        <a href="{{ $company->job_link }}" target="_blank">
                            💼 فرص العمل
                        </a>
                    @endif

                </div>

            </div>

        @endforeach

    </div>

</div>

<footer>
    © 2026 Edriouche Truck Job
</footer>

<script>
function searchCompanies() {
    let value = document.getElementById("search").value.toLowerCase();

    document.querySelectorAll(".company").forEach(function(company) {
        company.style.display =
            company.innerText.toLowerCase().includes(value) ? "" : "none";
    });
}
</script>

</body>
</html>
