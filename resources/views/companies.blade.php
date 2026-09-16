@	
ķ            text-align: center;
            padding: 25px;
            color: #666;
        }
.links{display:flex;flex-wrap:wrap;gap:10px;margin-top:15px;}
.links a{display:inline-flex;align-items:center;justify-content:center;min-height:46px;padding:10px 16px;border-radius:12px;text-decoration:none;font-weight:700;color:#fff!important;background:linear-gradient(135deg,#1f4e79,#2e75b6);box-shadow:0 4px 10px rgba(0,0,0,.15);transition:.25s;box-sizing:border-box;}
.links a:hover{transform:translateY(-2px);box-shadow:0 7px 16px rgba(0,0,0,.22);filter:brightness(1.08);}
.links a:active{transform:scale(.97);}
@media(max-width:600px){.links a{flex:1 1 100%;}}
    
/* Companies page readability improvement */
body{font-size:18px;line-height:1.7}
h1{font-size:clamp(28px,5vw,38px)}
h2{font-size:clamp(24px,4vw,32px)}
h3{font-size:clamp(21px,3.5vw,27px)}
p{font-size:18px;line-height:1.8}
.links a{font-size:18px;min-height:52px;padding:12px 18px}
input,button{font-size:18px}
@media(max-width:600px){
body{font-size:17px}
p{font-size:17px;line-height:1.75}
.links a{font-size:18px;min-height:54px}
}

</style>

<style>
body{
    font-size:18px;
}
.container{
    font-size:18px;
}
.company{
    font-size:18px;
}
.company h3{
    font-size:21px;
    line-height:1.5;
    margin-bottom:10px;
}
.company .meta{
    font-size:18px;
    line-height:1.9;
}
.company .badge{
    font-size:16px;
}
.company .actions a,
.links a{
    font-size:17px;
}
#companies p,
section p{
    font-size:18px;
    line-height:2;
}
section h2{
    font-size:26px;
    line-height:1.6;
}
section h3{
    font-size:21px;
    line-height:1.6;
}
.note{
    font-size:18px;
    line-height:2;
}
@media(max-width:600px){
    body,
    .container{
        font-size:18px;
    }
    .company h3{
        font-size:20px;
    }
    .company .meta,
    #companies p,
    section p,
    .note{
        font-size:18px;
        line-height:2;
    }
    section h2{
        font-size:24px;
    }
    section h3{
        font-size:20px;
    }
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
    
    <div id="companies">
<h2>🚛 {{ __('شركات النقل المغربية') }}</h2>
<p class="directory-intro">{{ __('دليل عملي لشركات النقل واللوجستيك المغربية. اضغط على الموقع الرسمي للتحقق من معلومات الشركة وفرص العمل المتاحة.') }}</p>
<div class="grid">
<article class="company">
<h3>🚛 FTA LOGISTICS</h3>
<span class="badge">🇲🇦 طنجة</span>
<p class="meta">نقل دولي ونقل بري ولوجستيك</p>
<div class="actions">
<a href="https://www.fta.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 FSR – Fret Service Rood</h3>
<span class="badge">🇲🇦 طنجة</span>
<p class="meta">نقل بري وطني ودولي ولوجستيك ونقل بحري</p>
<div class="actions">
<a href="https://www.fsr.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 TDL LOGISTICS</h3>
<span class="badge">🇲🇦 الدار البيضاء</span>
<p class="meta">نقل بري للبضائع وتوزيع وطني</p>
<div class="actions">
<a href="https://tdl.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 SLINE</h3>
<span class="badge">🇲🇦 الدار البيضاء</span>
<p class="meta">نقل بري FTL/LTL ونقل مبرد وADR ومسارات المغرب–أوروبا</p>
<div class="actions">
<a href="https://www.sline.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 IRONLOG</h3>
<span class="badge">🇲🇦 طنجة</span>
<p class="meta">نقل وطني ودولي بري ولوجستيك</p>
<div class="actions">
<a href="https://www.ironlog.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 TRANSUNIVERS</h3>
<span class="badge">🇲🇦 طنجة / الدار البيضاء</span>
<p class="meta">نقل وطني ودولي ولوجستيك</p>
<div class="actions">
<a href="https://www.transunivers.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 LOGIC TRANSPORT</h3>
<span class="badge">🇲🇦 المغرب</span>
<p class="meta">نقل بري وترانزيت وخدمات لوجستية</p>
<div class="actions">
<a href="https://www.logictransport.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 LIFEROAD LOGITRANS</h3>
<span class="badge">🇲🇦 طنجة</span>
<p class="meta">نقل بري دولي المغرب–أوروبا</p>
<div class="actions">
<a href="https://liferoadlogitrans.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 MA LOGISTICS</h3>
<span class="badge">🇲🇦 المغرب</span>
<p class="meta">نقل بري دولي ولوجستيك</p>
<div class="actions">
<a href="https://www.malogistics.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 M2TC</h3>
<span class="badge">🇲🇦 المغرب</span>
<p class="meta">نقل بري وبحري وجوي ونقل استثنائي</p>
<div class="actions">
<a href="https://m2tc.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 TRANSLOAD</h3>
<span class="badge">🇲🇦 المغرب</span>
<p class="meta">نقل بري وخدمات لوجستية</p>
<div class="actions">
<a href="https://www.transload.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 MABYA</h3>
<span class="badge">🇲🇦 المغرب / أوروبا</span>
<p class="meta">مجموعة نقل وعمليات نقل وطني ودولي</p>
<div class="actions">
<a href="https://mabya.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 TRANSINES</h3>
<span class="badge">🇲🇦 الدار البيضاء</span>
<p class="meta">ترانزيت ونقل وتسليم للبضائع</p>
<div class="actions">
<a href="https://transines.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 SNTC</h3>
<span class="badge">🇲🇦 أكادير / الدار البيضاء / طنجة</span>
<p class="meta">ترانزيت ونقل دولي ولوجستيك</p>
<div class="actions">
<a href="https://sntctransit.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 CHRONO TRUCK</h3>
<span class="badge">🇲🇦 المغرب</span>
<p class="meta">نقل دولي بري وبحري وجوي</p>
<div class="actions">
<a href="https://chronotruck.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 ENERGICO TRAVAUX & TRANSPORT</h3>
<span class="badge">🇲🇦 طنجة</span>
<p class="meta">نقل مهني ونقل حاويات</p>
<div class="actions">
<a href="https://energico.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 M&M RAG TRANS</h3>
<span class="badge">🇲🇦 الدار البيضاء / طنجة</span>
<p class="meta">لوجستيك دولي وشحن ونقل وترانزيت</p>
<div class="actions">
<a href="https://mmragtrans.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 FWM TRANSIT</h3>
<span class="badge">🇲🇦 طنجة</span>
<p class="meta">ترانزيت ونقل دولي ونقل بري</p>
<div class="actions">
<a href="https://fwmtransit.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 AFRICA LOGISTICS PARTNER</h3>
<span class="badge">🇲🇦 الدار البيضاء / طنجة</span>
<p class="meta">نقل بري وخدمات لوجستية وطنية ودولية</p>
<div class="actions">
<a href="https://www.alp.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
<article class="company">
<h3>🚛 TRANSIT EL MAROIZY</h3>
<span class="badge">🇲🇦 الدار البيضاء</span>
<p class="meta">ترانزيت ونقل بري وبحري وجوي</p>
<div class="actions">
<a href="https://elmaroizygroupe.ma" target="_blank" rel="noopener">🌐 {{ __('الموقع الرسمي') }}</a>
</div>
</article>
</div>
</div>

<div class="note">
<strong>🛡️ {{ __('مهم للسائق:') }}</strong>
{{ __('وجود الشركة في هذا الدليل لا يعني وجود وظيفة شاغرة حاليًا.') }}
{{ __('تحقق دائمًا من الموقع الرسمي أو قسم التوظيف قبل إرسال CV أو وثائق شخصية.') }}
{{ __('لا تدفع المال لأي وسيط مقابل وعد بالتوظيف.') }}
</div>

<div class="companies">
</div>

</div>


<section style="margin-top:40px;padding:28px;background:#f7f9fc;border-radius:20px;">
<h2 style="text-align:center;">🚛 {{ __('دليل السائق المغربي: من المبتدئ إلى الاحتراف') }}</h2>
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

<div style="text-align:center;margin-top:25px;"><a href="/cv-builder" style="display:inline-block;padding:14px 24px;background:#0b7a75;color:white;text-decoration:none;border-radius:12px;font-weight:bold;font-size:17px;">📝 {{ __('إنشاء CV للسائق') }}</a></div>

    <p style="text-align:center;font-weight:bold;font-size:18px;margin-top:25px;">Edriouche Truck Job — نساعد السائق على تجهيز ملفه والوصول إلى فرصة عمل حقيقية بطريقة مهنية.</p>
</div>
</section>

<section style="margin-top:30px;padding:25px;background:#f5f9fc;border-radius:20px;"><h2 style="text-align:center;">🇲🇦 شركات مغربية تبحث عن سائقين</h2><p style="text-align:center;line-height:1.9;">فرص منشورة أو حديثة — تحقق من توفر المنصب قبل إرسال الوثائق.</p><div class="company" style="background:white;padding:20px;margin:15px 0;border-radius:15px;"><h3>🚛 MAROTRANS — طنجة والقنيطرة</h3><p>سائقو شاحنات ثقيلة — رخصة EC وخبرة مهنية.</p><p>🟢 إعلان حديث</p></div><div class="company" style="background:white;padding:20px;margin:15px 0;border-radius:15px;"><h3>🚛 Group Inter Five — طنجة</h3><p>سائق مهني دولي.</p><p>📧 contact@groupinterfive.com</p><p>🟢 إعلان حديث</p></div><div class="company" style="background:white;padding:20px;margin:15px 0;border-radius:15px;"><h3>🚛 GRAVILIS — طنجة</h3><p>سائق شاحنة ثقيلة.</p><p>🟡 تحقق من توفر المنصب قبل التقديم.</p></div></section>
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


<style id="companies-readability">
body{font-size:18px!important;line-height:1.7!important}
p{font-size:18px!important;line-height:1.8!important}
h1{font-size:clamp(28px,5vw,38px)!important}
h2{font-size:clamp(24px,4vw,32px)!important}
h3{font-size:clamp(21px,3.5vw,27px)!important}
.links a{font-size:18px!important;min-height:52px!important;padding:12px 18px!important}
@media(max-width:600px){
body{font-size:17px!important}
p{font-size:17px!important;line-height:1.75!important}
.links a{font-size:18px!important;min-height:54px!important}
}
</style>

</body>
</html>
('
