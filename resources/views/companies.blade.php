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
.links{display:flex;flex-wrap:wrap;gap:10px;margin-top:15px;}
.links a{display:inline-flex;align-items:center;justify-content:center;min-height:46px;padding:10px 16px;border-radius:12px;text-decoration:none;font-weight:700;color:#fff!important;background:linear-gradient(135deg,#1f4e79,#2e75b6);box-shadow:0 4px 10px rgba(0,0,0,.15);transition:.25s;box-sizing:border-box;}
.links a:hover{transform:translateY(-2px);box-shadow:0 7px 16px rgba(0,0,0,.22);filter:brightness(1.08);}
.links a:active{transform:scale(.97);}
@media(max-width:600px){.links a{flex:1 1 100%;}}
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


<section style="margin-top:40px;padding:28px;background:#f7f9fc;border-radius:20px;">
<h2 style="text-align:center;">🚛 دليل السائق المغربي: من المبتدئ إلى الاحتراف</h2>
<p style="text-align:center;line-height:1.9;font-size:17px;">هذا الدليل يساعد السائق على تجهيز نفسه للبحث عن العمل والتقدم إلى الشركات بطريقة مهنية ومنظمة.</p>

<div style="margin-top:25px;">
<h3>🟢 1. كيف تبدأ كسائق شاحنة؟</h3>
<p style="line-height:2;">ابدأ بالتأكد من فئة رخصة السياقة المناسبة، ثم اكتسب التكوين والخبرة تدريجيًا. لا تبحث عن أول وظيفة فقط؛ ابحث عن المكان الذي يساعدك على بناء خبرة مهنية حقيقية.</p>

<h3>📄 2. جهّز ملفك المهني</h3>
<p style="line-height:2;">جهّز ملفًا مرتبًا يحتوي على السيرة الذاتية، صورة مهنية، رخصة السياقة، بطاقة السائق المهنية، شهادات التكوين والخبرة، وأي شهادات إضافية مطلوبة لنوع النقل الذي تريد العمل فيه.</p>

<h3>📝 3. كيف تكتب CV احترافيًا؟</h3>
<p style="line-height:2;">اكتب الاسم ووسائل الاتصال والمدينة، فئات الرخص، سنوات الخبرة، أنواع الشاحنات التي قدتها، أنواع النقل التي مارستها، الشهادات والتكوينات، واللغات. اجعل المعلومات واضحة وصادقة ومختصرة.</p>

<h3>📸 4. الصورة المهنية</h3>
<p style="line-height:2;">استعمل صورة حديثة وواضحة وملائمة للعمل، بخلفية بسيطة وملابس محترمة. تجنب الصور العائلية أو الصور غير الواضحة داخل CV.</p>

<h3>📑 5. رتّب وثائقك</h3>
<p style="line-height:2;">احتفظ بنسخ واضحة ومنظمة من وثائقك. وعند طلب الشركة ملف PDF، اجمع الوثائق المطلوبة فقط وبترتيب واضح.</p>

<h3>🔎 6. كيف تبحث عن شركة مناسبة؟</h3>
<p style="line-height:2;">ابدأ بموقع الشركة الرسمي وصفحة التوظيف الرسمية. تحقق من اسم الشركة ونشاطها ومعلومات الاتصال قبل إرسال طلبك. لا تعتمد على إعلان مجهول المصدر.</p>

<h3>📧 7. كيف ترسل طلب العمل؟</h3>
<p style="line-height:2;">اكتب رسالة قصيرة ومحترمة، اذكر فيها الوظيفة التي ترغب فيها، وأرفق CV والوثائق المطلوبة. استعمل البريد الإلكتروني أو منصة التوظيف الرسمية للشركة متى كانت متاحة.</p>

<h3>🤝 8. كيف تستعد لمقابلة العمل؟</h3>
<p style="line-height:2;">راجع معلومات الشركة، واعرف نوع الشاحنة والعمل والمسار المتوقع. حضّر وثائقك، وأجب بصدق عن خبرتك وقدرتك على تحمل مسؤولية الشاحنة والحمولة.</p>

<h3>🚚 9. نصائح للسائق في أول عمل</h3>
<p style="line-height:2;">افحص الشاحنة قبل الانطلاق، اهتم بالسلامة وتثبيت الحمولة، احترم تعليمات الشركة وقواعد الطريق، وسجّل الأعطال والملاحظات وأبلغ المسؤول عنها.</p>

<h3>⚠️ 10. أخطاء يجب تجنبها</h3>
<p style="line-height:2;">لا تضع خبرة غير حقيقية في CV، ولا ترسل وثائقك إلى أشخاص مجهولين، ولا تقبل شروطًا لا تفهمها. لا تدفع المال لشخص مقابل وعد بالتوظيف.</p>

<h3>🛡️ 11. احمِ نفسك من السماسرة</h3>
<p style="line-height:2;">تعامل مباشرة مع الشركة كلما أمكن. تحقق من البريد الإلكتروني والموقع الرسمي واسم الشركة قبل أي خطوة، ولا تعتبر العقد أو العرض حقيقيًا إلا بعد التحقق من مصدره.</p>

<div style="margin-top:25px;padding:20px;background:#ffffff;border-radius:15px;">
<h3 style="text-align:center;">📋 نموذج مختصر لمعلومات CV السائق</h3>
<p style="line-height:2;">الاسم الكامل — الهاتف — المدينة — فئات الرخص — سنوات الخبرة — أنواع الشاحنات — نوع النقل — الشهادات والتكوين — اللغات — معلومات إضافية مفيدة للعمل.</p>
</div>

<div style="text-align:center;margin-top:25px;"><a href="/cv-builder" style="display:inline-block;padding:14px 24px;background:#0b7a75;color:white;text-decoration:none;border-radius:12px;font-weight:bold;font-size:17px;">📝 إنشاء CV للسائق</a></div>

    <p style="text-align:center;font-weight:bold;font-size:18px;margin-top:25px;">Edriouche Truck Job — نساعد السائق على تجهيز ملفه والوصول إلى فرصة عمل حقيقية بطريقة مهنية.</p>
</div>
</section>

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
