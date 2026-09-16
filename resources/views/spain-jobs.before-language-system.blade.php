<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === "ar" ? "rtl" : "ltr" }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>شركات النقل الإسبانية | Edriouche Truck Job</title>
<style>
body{font-family:Arial,sans-serif;background:#f5f7fa;margin:0;color:#222;line-height:1.8}
.container{max-width:900px;margin:auto;padding:15px}
.hero,.card,.warning{background:#fff;border-radius:14px;padding:20px;margin:15px 0;box-shadow:0 3px 12px rgba(0,0,0,.08)}
h1,h2{color:#0756a8}
h1{text-align:center}
.hero-es{direction:ltr;text-align:left;border-right:5px solid #0756a8}
.card{border-right:6px solid #18a957}
.open{color:#138a43;font-weight:bold}
.openbox{color:#0756a8;font-weight:bold}
.badge{display:inline-block;padding:3px 10px;border-radius:20px;background:#e9f7ee}
a.button{display:inline-block;background:#0756a8;color:#fff;text-decoration:none;padding:8px 16px;border-radius:8px;margin-top:8px}
.warning{border-right:6px solid #e0a000;background:#fffaf0}
footer{text-align:center;padding:25px;color:#666}
</style>
</head>

<body>
@include("partials.language-switcher")
<div class="container">

<div class="hero">
<h1>🇪🇸 {{ __("messages.spanish_companies") }}</h1>
<p style="text-align:center"><strong>{{ __("messages.jobs_intro") }}</strong></p>
</div>

<div class="hero-es">
<h2>{{ __("messages.driver_message") }}</h2>
<p>{{ __("messages.driver_story_title") }}</p>
<p>{{ __("messages.driver_sacrifice") }}</p>
<p>A veces no pudo estar en celebraciones ni en funerales… porque la carretera lo llamaba y detrás de él había una carga, una responsabilidad y un deber profesional.</p>
<p><strong>{{ __("messages.driver_values") }}</strong></p>
<p>Detrás de cada camión que llega a su destino, hay una persona que ha hecho muchos sacrificios para que llegue con seguridad.</p>
<p>{!! __("messages.driver_mission") !!}</p>
<p>{!! __("messages.driver_morocco_europe") !!}</p>
<p><strong>{{ __("messages.driver_respect") }}</strong></p>
</div>

<div class="hero">
<h2>🚛 {{ __("messages.jobs_title") }}</h2>
<p>{{ __("messages.jobs_description") }}</p>
<p>{{ __("messages.recruitment_info") }}</p>
</div>

<div class="card">
<h2>🟢 JCARRION</h2>
<p><span class="badge">{{ __("messages.recruitment_info") }}</span></p>
<p>📍 إسبانيا – نقل وطني ودولي</p>
<p>🚛 المطلوب: C+E</p>
<p>🎓 المتطلبات: CAP + بطاقة التاكغراف الرقمي</p>
<p>⭐ توجد حاليًا عروض للسائقين، ومنها عروض لا تشترط الخبرة حسب الإعلان.</p>
<a class="button" href="https://jobs.jcarrion.es/reclutamiento/" target="_blank">{{ __("messages.official_recruitment") }}</a>
</div>

<div class="card">
<h2>🟢 Doseguer</h2>
<p><span class="badge">توظيف نشط حاليًا</span></p>
<p>📍 Almería · Granada · Murcia</p>
<p>🚛 نقل مبرد وبضائع عامة – وطني ودولي</p>
<p>🎓 C+E + CAP + بطاقة تاكوغراف رقمي</p>
<p>⭐ تقبل الشركة الترشيحات، وتذكر إمكانية تكوين السائق في النقل المبرد عند توفر المتطلبات الأساسية.</p>
<a class="button" href="https://www.doseguer.com/trabaja-con-nosotros/" target="_blank">🔗 التقديم الرسمي</a>
</div>

<div class="card">
<h2>🟢 STEF</h2>
<p><span class="badge">توظيف نشط حاليًا</span></p>
<p>🚛 النقل واللوجستيك، خصوصًا المنتجات الغذائية المبردة.</p>
<p>🚚 توجد وظائف سائق C+E في إسبانيا، ومنها Alcalá de Henares.</p>
<p>🎓 المتطلبات تختلف حسب الإعلان.</p>
<a class="button" href="https://stef.jobs/es/envia-mi-solicitud/" target="_blank">🔗 وظائف STEF الرسمية</a>
</div>

<div class="card">
<h2>🟢 CONTANK</h2>
<p><span class="badge">توظيف نشط حاليًا</span></p>
<p>🚛 نقل البضائع والمقطورات</p>
<p>🚚 C+E</p>
<p>🎓 CAP + بطاقة تاكوغراف حسب الوظيفة</p>
<p>🔗 تحقق دائمًا من الإعلان الرسمي قبل إرسال الوثائق.</p>
</div>

<div class="card">
<h2>🔵 Grupo SGT</h2>
<p><span class="badge">ترشيح مفتوح</span></p>
<p>🚛 النقل الوطني والدولي واللوجستيك</p>
<p>🚚 C+E حسب الوظيفة</p>
<p>🎓 CAP وخبرة حسب الوظيفة</p>
<p>🔗 التقديم يكون عبر قنوات الشركة الرسمية فقط.</p>
</div>

<div class="card">
<h2>🔵 Primafrio</h2>
<p><span class="badge">ترشيح مفتوح</span></p>
<p>🚛 النقل المبرد واللوجستيك</p>
<p>🌍 إسبانيا وأوروبا</p>
<p>👨‍✈️ يمكن إرسال طلب ترشيح مباشر عبر قنوات الشركة الرسمية.</p>
</div>

<div class="card">
<h2>🔵 Logista</h2>
<p><span class="badge">ترشيح مفتوح</span></p>
<p>🚛 النقل واللوجستيك والتوزيع</p>
<p>👨‍✈️ توجد قنوات رسمية للتوظيف والترشيح حسب النشاط.</p>
</div>

<div class="card">
<h2>🟢 Grupo Hiemesa</h2>
<p><span class="badge">توظيف نشط حاليًا</span></p>
<p>🚛 نقل البضائع والمقطورات</p>
<p>🚚 C+E</p>
<p>🎓 CAP + بطاقة تاكوغراف حسب الوظيفة.</p>
</div>

<div class="card">
<h2>🔵 Disfrimur</h2>
<p><span class="badge">ترشيح مفتوح</span></p>
<p>🚛 النقل المبرد واللوجستيك</p>
<p>🎓 لدى الشركة برنامج Escuela de Conductores لتكوين السائقين.</p>
<p>🚚 الفئات: C و C+E حسب البرنامج والفرص المتاحة.</p>
</div>

<div class="hero">
<h2>🇪🇸 دليل السائق المغربي في إسبانيا</h2>
<p>كل ما يحتاجه السائق للبحث عن عمل وتكوين ومعلومات موثوقة في مكان واحد.</p>
<p>💼 عروض العمل</p>
<p>🎓 التكوين والتدريب</p>
<p>🇪🇸 مراكز CAP</p>
<p>🇪🇸 دليل العمل في إسبانيا</p>
<p>🪪 وثائق السائق</p>
<p>📑 وثائق أوروبا</p>
<p>🕐 قوانين القيادة والراحة</p>
<p>⏱️ دليل التاكوغراف</p>
<p>📝 إنشاء CV للسائق</p>
</div>

<div class="hero">
<h2>🚛 أنواع النقل</h2>
<p>النقل الدولي • النقل الوطني • النقل المبرد • اللوجستيك • مواد البناء • الحاويات • نقل البضائع • النقل المتخصص</p>
<p>ملاحظة: نضيف كل نوع من النقل عندما تتوفر لدينا معلومات موثوقة ورابط رسمي.</p>
</div>

<div class="hero">
<h2>🏙️ مدن ومناطق النقل في إسبانيا</h2>
<p>مدريد • برشلونة • فالنسيا • سرقسطة • مورسيا • مالقة • إشبيلية • بلباو • ألميريا • هويلفا والمناطق اللوجستية الأخرى.</p>
</div>

<div class="hero">
<h2>💶 رواتب السائقين في الشركات الإسبانية</h2>
<p>نذكر الراتب فقط عندما يكون منشورًا بوضوح في إعلان موثوق أو من الشركة نفسها.</p>
<p>🟢 <strong>JCARRION:</strong> الراتب غير معلن برقم محدد في صفحة التوظيف الرسمية.</p>
<p>🟢 <strong>Doseguer:</strong> الراتب غير معلن برقم محدد؛ الشركة تؤكد وجود وظائف C+E وطنية ودولية وشروطًا واضحة للتوظيف.</p>
<p>🟢 <strong>STEF:</strong> الراتب غير معلن برقم محدد في الصفحة الرسمية التي راجعناها.</p>
<p>🔵 <strong>Primafrio:</strong> الراتب يختلف حسب الوظيفة والمسار والعقد، ولم نجد رقمًا رسميًا ثابتًا للسائق.</p>
<p>🟢 <strong>Grupo Hiemesa:</strong> توجد عروض لسائقي الشاحنات، لكن الراتب غير منشور برقم محدد.</p>
<p>🔵 <strong>Disfrimur:</strong> بعض إعلانات الوظائف تذكر أن الأجر يكون حسب الاتفاقية الجماعية (según convenio).</p>
<p><strong>⚠️ ملاحظة:</strong> لا تعتبر أي رقم راتب منشور خارج الإعلان الرسمي وعدًا بالتوظيف أو راتبًا مضمونًا.</p>
</div>
<div class="warning">
<h2>⚠️ تنبيه مهم للسائق المغربي</h2>
<p><strong>Edriouche Truck Job لا يبيع عقود العمل ولا يطلب من السائق دفع المال مقابل الحصول على وظيفة.</strong></p>
<p>قبل إرسال وثائقك أو دفع أي مبلغ، تحقق من الشركة ومن رابط التقديم الرسمي.</p>
<p>لا تعتمد على وسيط مجهول أو حساب شخصي في مواقع التواصل الاجتماعي.</p>
<p>حالة التوظيف قد تتغير، لذلك يجب فتح الإعلان الرسمي والتحقق منه قبل التقديم.</p>
</div>

<div class="hero">
<h2>🇪🇸 مصادر رسمية للسائق</h2>
<p>نعتمد قدر الإمكان على المصادر الرسمية، وليس على الوسطاء أو الحسابات المجهولة.</p>
<p>🇪🇸 وزارة النقل الإسبانية 🇪🇺 EURES</p>
</div>

<footer>
🇪🇸 العودة إلى دليل إسبانيا · 🎓 مراكز CAP · 🏠 الرئيسية
<br><br>
© 2026 Edriouche Truck Job — من السائق إلى السائق 🚛
</footer>

</div>
</body>
</html>
