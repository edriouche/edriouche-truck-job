@include("partials.language-switcher")
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
@if(app()->getLocale() === 'ar')
🇲🇦 كيفية ملء المعاينة الودية بعد حادث سير
@elseif(app()->getLocale() === 'es')
🇲🇦 Cómo rellenar el parte amistoso después de un accidente
@else
🇲🇦 Comment remplir le constat amiable après un accident
@endif
</title>

<style>
body{font-family:Arial,sans-serif;background:#f3f6f9;margin:0;color:#222;line-height:1.8}
header{background:linear-gradient(135deg,#075985,#2563eb);color:#fff;text-align:center;padding:28px 15px}
.container{max-width:1000px;margin:auto;padding:20px}
.card{background:#fff;border-radius:16px;padding:20px;margin:18px 0;box-shadow:0 4px 14px rgba(0,0,0,.12)}
h2{color:#075985}
.info{background:#eef7ff;border-left:5px solid #1976d2;padding:14px;margin:12px 0;border-radius:8px}
[dir="rtl"] .info{border-left:0;border-right:5px solid #1976d2}
.warning{background:#fff7ed;border:1px solid #fb923c;padding:16px;border-radius:12px}
li{margin:7px 0}
strong{color:#075985}
</style>
</head>

<body>

<header>
@if(app()->getLocale() === 'ar')
<h1>🇲🇦 كيفية ملء المعاينة الودية بعد حادث سير</h1>
<p>شرح مبسط للسائق المغربي، خانة بخانة من 1 إلى 14.</p>

@elseif(app()->getLocale() === 'es')
<h1>🇲🇦 Cómo rellenar el parte amistoso después de un accidente</h1>
<p>Guía sencilla para el conductor marroquí, casilla por casilla del 1 al 14.</p>

@else
<h1>🇲🇦 Comment remplir le constat amiable après un accident</h1>
<p>Guide simple pour le conducteur marocain, case par case de 1 à 14.</p>
@endif
</header>

<div class="container">

<div class="card">
@if(app()->getLocale() === 'ar')
<h2>🚛 دليل المعاينة الودية في المغرب</h2>
<p>هذه الصفحة تشرح للسائق كيف يجمع المعلومات ويملأ المعاينة الودية بعد حادث سير مادي.</p>

<div class="info">
<strong>⚠️ قبل التوقيع:</strong>
راجع جميع المعلومات، ظروف الحادث، الرسم والأضرار مع الطرف الآخر. لا توقّع على معلومات غير صحيحة أو غير واضحة.
</div>

<h2>1️⃣ تاريخ ووقت الحادث — Date et heure</h2>
<p>اكتب تاريخ وقوع الحادث والساعة التي وقع فيها.</p>

<h2>2️⃣ مكان الحادث — Lieu</h2>
<p>اكتب المدينة، الشارع أو الطريق، والاتجاه أو أقرب نقطة واضحة.</p>

<h2>3️⃣ الإصابات — Blessés</h2>
<p>حدد هل توجد إصابات جسدية أم لا. عند وجود إصابات، يجب التعامل مع الحادث وفق الإجراءات الرسمية وعدم الاكتفاء بالمعاينة الودية.</p>

<h2>4️⃣ الأضرار المادية الأخرى — Dégâts matériels autres que véhicules</h2>
<p>اذكر الأضرار التي لحقت بأشياء غير المركبات، مثل حاجز أو إشارة أو عمود أو ممتلكات أخرى.</p>

<h2>5️⃣ الشهود — Témoins</h2>
<p>إذا شاهد أشخاص الحادث، سجّل أسماءهم وبيانات الاتصال بهم إن أمكن.</p>

<h2>6️⃣ المؤمن له — Assuré</h2>
<p>اكتب بيانات صاحب أو حامل عقد التأمين كما هي في وثائق التأمين.</p>

<h2>7️⃣ المركبة — Véhicule</h2>
<p>أدخل بيانات المركبة المطلوبة في النموذج، وخاصة رقم التسجيل والمعلومات الموجودة في وثائقها.</p>

<h2>8️⃣ شركة التأمين — Société d'assurance</h2>
<p>انقل اسم شركة التأمين ورقم العقد والبيانات المطلوبة من شهادة التأمين.</p>

<h2>9️⃣ السائق — Conducteur</h2>
<p>اكتب بيانات الشخص الذي كان يقود المركبة وقت وقوع الحادث، وفق رخصة السياقة.</p>

<h2>🔟 نقطة الاصطدام الأولى — Point de choc initial</h2>
<p>حدد على رسم المركبة المكان الذي وقع فيه أول اصطدام، وليس بالضرورة كل الأضرار التي ظهرت بعده.</p>

<h2>1️⃣1️⃣ الأضرار الظاهرة — Dégâts apparents</h2>
<p>صف الأضرار التي يمكن ملاحظتها بعد الحادث، دون إضافة أضرار غير مؤكدة.</p>

<h2>1️⃣2️⃣ ظروف الحادث — Circonstances</h2>
<p>ضع علامة فقط أمام الظروف التي حدثت فعلاً. لا تختَر خانة بهدف تحميل المسؤولية للطرف الآخر.</p>

<h2>1️⃣3️⃣ الرسم التخطيطي — Croquis</h2>
<p>ارسم الطريق واتجاه حركة المركبات وموقع المركبة A والمركبة B ومكان الاصطدام وأي إشارات أو تقاطعات مهمة.</p>

<h2>1️⃣4️⃣ الملاحظات والتوقيع — Observations / Signature</h2>
<p>اكتب أي ملاحظة ضرورية لم يتم توضيحها في الخانات السابقة، ثم راجع النموذج كاملاً قبل التوقيع.</p>

<div class="warning">
<strong>🚨 مهم جداً:</strong>
لا توقّع قبل قراءة النموذج كاملاً والتأكد من أن المعلومات والرسم والظروف تعكس ما وقع فعلاً. احتفظ بنسختك من المعاينة.
</div>

@elseif(app()->getLocale() === 'es')
<h2>🚛 Guía del parte amistoso en Marruecos</h2>
<p>Esta página explica cómo recopilar la información y rellenar el parte amistoso después de un accidente con daños materiales.</p>

<div class="info">
<strong>⚠️ Antes de firmar:</strong>
Revisa toda la información, las circunstancias, el croquis y los daños con la otra parte.
</div>

<h2>1️⃣ Fecha y hora — Date et heure</h2>
<p>Indica la fecha y la hora del accidente.</p>

<h2>2️⃣ Lugar — Lieu</h2>
<p>Indica la ciudad, calle o carretera y, si es posible, una referencia clara.</p>

<h2>3️⃣ Heridos — Blessés</h2>
<p>Indica si existen lesiones corporales. Si hay heridos, deben seguirse los procedimientos oficiales correspondientes.</p>

<h2>4️⃣ Otros daños materiales — Dégâts matériels autres que véhicules</h2>
<p>Indica los daños causados a objetos distintos de los vehículos.</p>

<h2>5️⃣ Testigos — Témoins</h2>
<p>Si hubo testigos, anota sus datos de contacto cuando sea posible.</p>

<h2>6️⃣ Asegurado — Assuré</h2>
<p>Introduce los datos del titular o asegurado según los documentos del seguro.</p>

<h2>7️⃣ Vehículo — Véhicule</h2>
<p>Introduce los datos solicitados del vehículo, especialmente la matrícula.</p>

<h2>8️⃣ Compañía de seguros — Société d'assurance</h2>
<p>Copia los datos de la compañía y del contrato desde el certificado de seguro.</p>

<h2>9️⃣ Conductor — Conducteur</h2>
<p>Indica los datos de la persona que conducía en el momento del accidente.</p>

<h2>🔟 Punto de choque inicial — Point de choc initial</h2>
<p>Indica dónde se produjo el primer impacto.</p>

<h2>1️⃣1️⃣ Daños visibles — Dégâts apparents</h2>
<p>Describe los daños visibles sin añadir daños que no estén comprobados.</p>

<h2>1️⃣2️⃣ Circunstancias — Circonstances</h2>
<p>Marca solamente las circunstancias que realmente ocurrieron.</p>

<h2>1️⃣3️⃣ Croquis — Croquis</h2>
<p>Dibuja la carretera, el sentido de circulación, los vehículos, el punto de impacto y las señales importantes.</p>

<h2>1️⃣4️⃣ Observaciones y firma — Observations / Signature</h2>
<p>Añade las observaciones necesarias y revisa todo antes de firmar.</p>

<div class="warning">
<strong>🚨 Importante:</strong>
No firmes antes de comprobar que la información, el croquis y las circunstancias corresponden a lo ocurrido.
</div>

@else
<h2>🚛 Guide du constat amiable au Maroc</h2>
<p>Cette page explique comment recueillir les informations et remplir le constat amiable après un accident avec dommages matériels.</p>

<div class="info">
<strong>⚠️ Avant de signer :</strong>
Vérifiez toutes les informations, les circonstances, le croquis et les dommages avec l'autre partie.
</div>

<h2>1️⃣ Date et heure</h2>
<p>Indiquez la date et l'heure de l'accident.</p>

<h2>2️⃣ Lieu</h2>
<p>Indiquez la ville, la rue ou la route et, si possible, un point de repère précis.</p>

<h2>3️⃣ Blessés</h2>
<p>Indiquez s'il existe des blessures corporelles. En cas de blessés, les procédures officielles doivent être suivies.</p>

<h2>4️⃣ Dégâts matériels autres que véhicules</h2>
<p>Indiquez les dommages causés à des biens autres que les véhicules.</p>

<h2>5️⃣ Témoins</h2>
<p>Si des personnes ont été témoins de l'accident, notez leurs coordonnées lorsque cela est possible.</p>

<h2>6️⃣ Assuré</h2>
<p>Indiquez les informations du titulaire ou de l'assuré selon les documents d'assurance.</p>

<h2>7️⃣ Véhicule</h2>
<p>Indiquez les informations demandées sur le véhicule, notamment son immatriculation.</p>

<h2>8️⃣ Société d'assurance</h2>
<p>Recopiez les informations de l'assureur et du contrat depuis le certificat d'assurance.</p>

<h2>9️⃣ Conducteur</h2>
<p>Indiquez les informations de la personne qui conduisait au moment de l'accident.</p>

<h2>🔟 Point de choc initial</h2>
<p>Indiquez l'endroit où le premier choc s'est produit.</p>

<h2>1️⃣1️⃣ Dégâts apparents</h2>
<p>Décrivez les dommages visibles sans ajouter de dommages non constatés.</p>

<h2>1️⃣2️⃣ Circonstances</h2>
<p>Cochez uniquement les circonstances qui se sont réellement produites.</p>

<h2>1️⃣3️⃣ Croquis</h2>
<p>Dessinez la route, le sens de circulation, les véhicules, le point de choc et les éléments importants.</p>

<h2>1️⃣4️⃣ Observations et signature</h2>
<p>Ajoutez les observations nécessaires et vérifiez l'ensemble du document avant de signer.</p>

<div class="warning">
<strong>🚨 Important :</strong>
Ne signez pas avant de vérifier que les informations, le croquis et les circonstances correspondent aux faits.
</div>
@endif
</div>

</div>

<section style="margin:30px 0;padding:20px;border-radius:18px;background:#f8fafc;border:1px solid #dbe3ea;text-align:center;">
    <h2 style="margin-bottom:18px;">📐 مثال توضيحي للرسم التخطيطي في المعاينة الودية</h2>

    <div dir="ltr" style="max-width:700px;margin:auto;padding:25px;border-radius:15px;background:white;border:2px solid #cbd5e1;overflow:hidden;">

        <div style="font-size:20px;font-weight:bold;margin-bottom:15px;">
            🚛 A — المركبة A
        </div>

        <div style="font-size:32px;line-height:1;">⬇️</div>
        <div style="font-size:14px;margin-bottom:12px;">اتجاه السير</div>

        <div style="height:90px;background:#555;position:relative;border-top:8px solid #ddd;border-bottom:8px solid #ddd;">
            <div style="position:absolute;top:39px;left:0;right:0;border-top:3px dashed #fff;"></div>

            <div style="position:absolute;left:48%;top:25px;font-size:34px;">✦</div>
            <div style="position:absolute;left:50%;top:62px;transform:translateX(-50%);background:white;padding:3px 8px;border-radius:8px;font-size:13px;color:#b91c1c;font-weight:bold;white-space:nowrap;">
                نقطة الاصطدام الأولى
            </div>
        </div>

        <div style="font-size:34px;margin-top:15px;">↗️</div>

        <div style="font-size:20px;font-weight:bold;margin-top:8px;">
            🚗 B — المركبة B
        </div>

        <div style="margin-top:18px;padding:12px;border-radius:10px;background:#eef6ff;font-weight:bold;">
            📍 مكان الحادث: تقاطع طرق
        </div>
    </div>

    <p style="margin-top:15px;color:#475569;">
        الرسم مجرد مثال تعليمي. ارسم اتجاه سير المركبات، مكان الاصطدام الأول، ومكان الحادث بوضوح.
    </p>
</section>

</body>
</html>
