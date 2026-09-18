@include("partials.language-switcher")
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ app()->getLocale() === 'ar' ? '🧭 بوصلة السائق المغربي في أوروبا' : (app()->getLocale() === 'es' ? '🧭 Guía del conductor marroquí en Europa' : '🧭 Guide du conducteur marocain en Europe') }}</title>
<style>
body{font-family:Arial,sans-serif;background:#f3f6f9;margin:0;color:#222;line-height:1.8}
header{background:linear-gradient(135deg,#075985,#2563eb);color:#fff;text-align:center;padding:28px 15px}
.container{max-width:1000px;margin:auto;padding:20px}
.card{background:#fff;border-radius:16px;padding:20px;margin:18px 0;box-shadow:0 4px 14px rgba(0,0,0,.12)}
h2{color:#075985}
.article{background:#f7fbff;border-left:5px solid #2563eb;padding:14px;margin:12px 0;border-radius:8px}
[dir="rtl"] .article{border-left:0;border-right:5px solid #2563eb}
.warning{background:#fff7ed;border:1px solid #fb923c;padding:16px;border-radius:12px}
.info{background:#eef7ff;border-left:5px solid #1976d2;padding:14px;margin:12px 0;border-radius:8px}
[dir="rtl"] .info{border-left:0;border-right:5px solid #1976d2}
.button{display:inline-flex;align-items:center;justify-content:center;min-height:48px;padding:10px 18px;margin:5px;border-radius:12px;text-decoration:none;font-weight:bold;color:#fff;background:#075985}
.small{font-size:14px;color:#555}
strong{color:#075985}
li{margin:7px 0}
</style>
</head>
<body>

<header>
@if(app()->getLocale() === 'ar')
<h1>🧭 بوصلة السائق المغربي في أوروبا</h1>
<p>دليل عملي للسائق الذي يعرف التاكوغراف القديم (الورقي) ويريد فهم العمل القانوني في أوروبا.</p>
@elseif(app()->getLocale() === 'es')
<h1>🧭 Guía del conductor marroquí en Europa</h1>
<p>Guía práctica para el conductor que conoce el tacógrafo antiguo de disco de papel y quiere entender el trabajo legal en Europa.</p>
@else
<h1>🧭 Guide du conducteur marocain en Europe</h1>
<p>Guide pratique pour le conducteur qui connaît l'ancien chronotachygraphe à disque papier et souhaite comprendre le travail légal en Europe.</p>
@endif
</header>

<div class="container">

@if(app()->getLocale() === 'ar')

<div class="card">
<h2>📌 مقدمة</h2>
<div class="article">إذا كنت سائقًا مغربيًا وتريد العمل أو القيام بالنقل الدولي داخل أوروبا، فمن المهم أن تفهم التاكوغراف، أوقات القيادة والراحة، وكيفية تسجيل نشاطك بشكل صحيح.</div>
<div class="info"><strong>مهم:</strong> هذا الدليل تعليمي. القواعد قد تختلف حسب نوع المركبة والعملية والدولة، لذلك يجب دائمًا احترام القواعد الأوروبية والوطنية المطبقة على رحلتك.</div>
</div>

<div class="card"><h2>1️⃣ ما هو التاكوغراف؟</h2>
<div class="article">التاكوغراف جهاز يسجل نشاط السائق والمركبة، مثل القيادة والراحة والتوقف وبعض الأنشطة الأخرى. توجد أجهزة تناظرية تعتمد على القرص الورقي، وأجهزة رقمية وذكية تعتمد على بطاقة السائق.</div></div>

<div class="card"><h2>2️⃣ التاكوغراف الورقي القديم</h2>
<div class="article">في التاكوغراف التناظري يستعمل السائق قرصًا ورقيًا مناسبًا للجهاز. يجب تسجيل المعلومات المطلوبة والأنشطة بطريقة صحيحة، والمحافظة على الأقراص التي يجب تقديمها عند التفتيش.</div>
<div class="warning"><strong>⚠️ لا تستعمل قرصًا غير مناسب ولا تغيّر بيانات التسجيل.</strong> التلاعب بالتسجيلات يمكن أن يؤدي إلى مخالفات وعقوبات.</div>
</div>

<div class="card"><h2>3️⃣ ماذا يسجل التاكوغراف؟</h2>
<div class="article">يسجل فترات القيادة، الراحة والتوقف، والعمل الآخر، والتوفر وفق نوع الجهاز وطريقة استخدامه.</div>
</div>

<div class="card"><h2>4️⃣ قاعدة 4 ساعات و30 دقيقة</h2>
<div class="article">بعد مدة قيادة تراكمية تبلغ 4 ساعات و30 دقيقة، يجب أخذ استراحة وفق القواعد الأوروبية قبل مواصلة القيادة. القاعدة العامة هي استراحة لا تقل عن 45 دقيقة، ويمكن تقسيمها بالطريقة التي تسمح بها القواعد.</div>
</div>

<div class="card"><h2>5️⃣ حدود القيادة</h2>
<div class="article">القاعدة العامة الأوروبية هي حد أقصى قدره 9 ساعات قيادة يوميًا، ويمكن تمديده إلى 10 ساعات مرتين في الأسبوع.</div>
<div class="article">كما توجد حدود أسبوعية: لا تتجاوز القيادة 56 ساعة في أسبوع واحد و90 ساعة خلال أسبوعين متتاليين.</div>
</div>

<div class="card"><h2>6️⃣ الراحة اليومية</h2>
<div class="article">يجب احترام فترات الراحة اليومية المطلوبة. القاعدة العامة هي راحة يومية منتظمة لا تقل عن 11 ساعة، مع وجود إمكانيات للتقسيم أو التخفيض في الحالات التي يسمح بها القانون.</div>
</div>

<div class="card"><h2>7️⃣ الراحة الأسبوعية</h2>
<div class="article">يجب احترام الراحة الأسبوعية المنتظمة أو المخفضة والتعويض عنها عندما يكون التعويض مطلوبًا. الراحة الأسبوعية المنتظمة تكون عادة 45 ساعة على الأقل.</div>
</div>

<div class="card"><h2>8️⃣ السائق المغربي في الطريق إلى أوروبا</h2>
<div class="article">السائق القادم من المغرب يجب أن ينتبه إلى القواعد المطبقة على الرحلة الدولية، وأن يحتفظ بالوثائق والتسجيلات المطلوبة، وأن يعرف الفرق بين القيادة والراحة والعمل الآخر والتوفر.</div>
</div>

<div class="card"><h2>9️⃣ التفتيش والطريق</h2>
<div class="article">عند التفتيش، يجب أن يستطيع السائق تقديم سجلات نشاطه والوثائق المطلوبة للفترة التي ينص عليها القانون. وفق القواعد الحالية، يجب أن تكون سجلات اليوم الحالي والأيام السابقة المطلوبة متاحة، وتشمل القاعدة الحالية 56 يومًا.</div>
</div>

<div class="card"><h2>🔟 الانتقال من الورقي إلى الرقمي</h2>
<div class="article">العمل في أوروبا أصبح يعتمد بشكل متزايد على التاكوغراف الرقمي والذكي. لذلك يجب على السائق الذي يعرف القرص الورقي أن يتعلم استعمال بطاقة السائق، إدخال الأنشطة، الطباعة، والتنزيلات عند الحاجة.</div>
</div>

<div class="card"><h2>1️⃣1️⃣ التاكوغراف الذكي</h2>
<div class="article">التاكوغراف الذكي يسجل معلومات إضافية، ومنها معلومات الموقع، ويساعد في تسجيل بعض العمليات بصورة آلية. توجد أجيال مختلفة من الأجهزة، لذلك يجب معرفة نوع الجهاز الموجود في الشاحنة.</div>
<div class="info"><strong>📅 مهم:</strong> بالنسبة للنقل الدولي، أصبحت هناك مواعيد أوروبية تدريجية لاستبدال الأجهزة القديمة بتجهيزات Smart Tachograph، وبدأت المواعيد الرئيسية من نهاية 2024 ثم أغسطس 2025.</div>
</div>

<div class="card"><h2>1️⃣2️⃣ عند عبور الحدود</h2>
<div class="article">عند عبور حدود دولة إلى أخرى، توجد قواعد لتسجيل الدولة التي دخلها السائق بحسب نوع التاكوغراف. التاكوغراف الذكي الحديث يمكنه تسجيل عبور الحدود تلقائيًا، بينما الأجهزة الأقدم قد تتطلب إدخال رمز الدولة يدويًا.</div>
</div>

<div class="card"><h2>1️⃣3️⃣ إذا تعطل التاكوغراف</h2>
<div class="article">إذا تعطل الجهاز، يجب اتباع الإجراءات القانونية الخاصة بالعطل، ومنها التسجيل اليدوي للنشاط عند الحاجة والمحافظة على المستندات المطلوبة، وإصلاح الجهاز وفق القواعد.</div>
</div>

<div class="card"><h2>1️⃣4️⃣ أخطاء شائعة للسائق</h2>
<ul>
<li>نسيان تسجيل النشاط الصحيح.</li>
<li>استعمال التاكوغراف بطريقة غير صحيحة.</li>
<li>عدم احترام استراحة 45 دقيقة.</li>
<li>الخلط بين وقت القيادة ووقت العمل الآخر.</li>
<li>عدم الاحتفاظ بالسجلات المطلوبة.</li>
<li>التلاعب بالتسجيلات أو محاولة إخفاء النشاط الحقيقي.</li>
</ul>
</div>

<div class="card"><h2>1️⃣5️⃣ مثال عملي للسائق المغربي</h2>
<div class="article">مثلاً: إذا بدأ السائق رحلته من المغرب متجهًا إلى إسبانيا ثم فرنسا، فعليه تنظيم القيادة والراحة منذ بداية الرحلة، تسجيل نشاطه بشكل صحيح، واحترام القواعد عند عبور الحدود والتوقف والتفتيش.</div>
</div>

<div class="card"><h2>1️⃣6️⃣ ماذا يجب أن يتعلم السائق المغربي؟</h2>
<ul>
<li>استعمال التاكوغراف الرقمي والذكي.</li>
<li>فهم الرموز والأنشطة المختلفة.</li>
<li>حساب أوقات القيادة والراحة.</li>
<li>التعامل مع التفتيش على الطريق.</li>
<li>معرفة قواعد عبور الحدود.</li>
<li>الاحتفاظ بالوثائق والتسجيلات المطلوبة.</li>
<li>معرفة حقوقه وواجباته كسائق مهني.</li>
</ul>
</div>

@elseif(app()->getLocale() === 'es')

<div class="card">
<h2>📌 Introducción</h2>
<div class="article">Si eres conductor marroquí y quieres trabajar o realizar transporte internacional en Europa, es importante entender el tacógrafo, los tiempos de conducción y descanso y la forma correcta de registrar tu actividad.</div>
<div class="info"><strong>Importante:</strong> Esta guía es educativa. Las reglas pueden variar según el vehículo, la operación y el país, por lo que siempre debes respetar las normas europeas y nacionales aplicables a tu viaje.</div>
</div>

<div class="card"><h2>1️⃣ ¿Qué es el tacógrafo?</h2>
<div class="article">El tacógrafo registra la actividad del conductor y del vehículo, como conducción, descanso, pausas y otras actividades. Existen tacógrafos analógicos con disco de papel y tacógrafos digitales e inteligentes que utilizan una tarjeta de conductor.</div></div>

<div class="card"><h2>2️⃣ El antiguo tacógrafo de disco</h2>
<div class="article">En el tacógrafo analógico se utiliza un disco de registro adecuado al aparato. El conductor debe introducir correctamente los datos y actividades exigidos y conservar los discos que deban presentarse durante un control.</div>
<div class="warning"><strong>⚠️ No utilices un disco incorrecto ni alteres los registros.</strong> La manipulación de los registros puede constituir una infracción.</div>
</div>

<div class="card"><h2>3️⃣ ¿Qué registra?</h2>
<div class="article">Registra los periodos de conducción, descanso, pausas y otras actividades, según el tipo de aparato y su utilización.</div></div>

<div class="card"><h2>4️⃣ La regla de 4 horas y 30 minutos</h2>
<div class="article">Después de un periodo acumulado de conducción de 4 horas y 30 minutos, el conductor debe realizar una pausa conforme a las reglas europeas antes de continuar conduciendo. La regla general es una pausa de al menos 45 minutos, con las posibilidades de fraccionamiento permitidas por la normativa.</div>
</div>

<div class="card"><h2>5️⃣ Límites de conducción</h2>
<div class="article">La regla general europea establece un máximo de 9 horas de conducción diaria, que puede ampliarse a 10 horas dos veces por semana.</div>
<div class="article">También existen límites semanales: máximo 56 horas en una semana y 90 horas durante dos semanas consecutivas.</div>
</div>

<div class="card"><h2>6️⃣ Descanso diario</h2>
<div class="article">Deben respetarse los periodos de descanso diario exigidos. La regla general es un descanso diario normal de al menos 11 horas, con posibilidades de fraccionamiento o reducción en los casos permitidos.</div>
</div>

<div class="card"><h2>7️⃣ Descanso semanal</h2>
<div class="article">Debe respetarse el descanso semanal normal o reducido y compensarlo cuando la normativa lo exige. El descanso semanal normal es generalmente de al menos 45 horas.</div>
</div>

<div class="card"><h2>8️⃣ El conductor marroquí hacia Europa</h2>
<div class="article">El conductor que llega desde Marruecos debe prestar atención a las normas aplicables al transporte internacional, conservar los documentos y registros exigidos y distinguir entre conducción, descanso, otro trabajo y disponibilidad.</div>
</div>

<div class="card"><h2>9️⃣ Controles en carretera</h2>
<div class="article">Durante un control, el conductor debe poder presentar los registros de actividad y los documentos exigidos para el periodo correspondiente. Según las reglas actuales, deben estar disponibles los registros del día actual y del periodo anterior exigido, actualmente 56 días.</div>
</div>

<div class="card"><h2>🔟 Del disco de papel al sistema digital</h2>
<div class="article">El transporte europeo utiliza cada vez más tacógrafos digitales e inteligentes. Por eso, el conductor acostumbrado al disco debe aprender a utilizar la tarjeta de conductor, introducir actividades, realizar impresiones y efectuar descargas cuando corresponda.</div>
</div>

<div class="card"><h2>1️⃣1️⃣ Tacógrafo inteligente</h2>
<div class="article">El tacógrafo inteligente registra información adicional, incluida información de localización, y puede registrar automáticamente determinadas operaciones. Existen diferentes generaciones, por lo que hay que conocer qué aparato lleva el vehículo.</div>
<div class="info"><strong>📅 Importante:</strong> En el transporte internacional existen plazos europeos progresivos para sustituir los equipos antiguos por Smart Tachograph, con fechas principales desde finales de 2024 y agosto de 2025.</div>
</div>

<div class="card"><h2>1️⃣2️⃣ Al cruzar una frontera</h2>
<div class="article">Al cruzar la frontera de un país a otro existen reglas para registrar el país en el que se entra según el tipo de tacógrafo. El Smart Tachograph moderno puede registrar automáticamente el cruce, mientras que los equipos antiguos pueden requerir la introducción manual del símbolo del país.</div>
</div>

<div class="card"><h2>1️⃣3️⃣ Si falla el tacógrafo</h2>
<div class="article">Si el aparato falla, deben seguirse los procedimientos legales correspondientes, incluido el registro manual de la actividad cuando sea necesario, conservar los documentos exigidos y reparar el aparato conforme a las reglas.</div>
</div>

<div class="card"><h2>1️⃣4️⃣ Errores frecuentes</h2>
<ul>
<li>Olvidar registrar correctamente la actividad.</li>
<li>Utilizar incorrectamente el tacógrafo.</li>
<li>No respetar la pausa de 45 minutos.</li>
<li>Confundir conducción con otro trabajo.</li>
<li>No conservar los registros exigidos.</li>
<li>Manipular los registros u ocultar la actividad real.</li>
</ul>
</div>

<div class="card"><h2>1️⃣5️⃣ Ejemplo práctico</h2>
<div class="article">Por ejemplo, si el conductor inicia un viaje desde Marruecos hacia España y después Francia, debe organizar la conducción y los descansos desde el inicio, registrar correctamente su actividad y respetar las reglas en las fronteras, paradas y controles.</div>
</div>

<div class="card"><h2>1️⃣6️⃣ ¿Qué debe aprender el conductor marroquí?</h2>
<ul>
<li>Usar el tacógrafo digital e inteligente.</li>
<li>Entender los diferentes símbolos y actividades.</li>
<li>Calcular los tiempos de conducción y descanso.</li>
<li>Actuar correctamente durante un control.</li>
<li>Conocer las reglas al cruzar fronteras.</li>
<li>Conservar los documentos y registros exigidos.</li>
<li>Conocer sus derechos y obligaciones como conductor profesional.</li>
</ul>
</div>

@else

<div class="card">
<h2>📌 Introduction</h2>
<div class="article">Si vous êtes conducteur marocain et souhaitez travailler ou effectuer du transport international en Europe, il est important de comprendre le chronotachygraphe, les temps de conduite et de repos ainsi que l'enregistrement correct de votre activité.</div>
<div class="info"><strong>Important :</strong> Ce guide est pédagogique. Les règles peuvent varier selon le véhicule, l'opération et le pays. Il faut toujours respecter les règles européennes et nationales applicables au trajet.</div>
</div>

<div class="card"><h2>1️⃣ Qu'est-ce que le chronotachygraphe ?</h2>
<div class="article">Le chronotachygraphe enregistre l'activité du conducteur et du véhicule : conduite, repos, pauses et autres activités. Il existe des appareils analogiques à disque papier ainsi que des appareils numériques et intelligents utilisant une carte conducteur.</div></div>

<div class="card"><h2>2️⃣ L'ancien chronotachygraphe à disque</h2>
<div class="article">Avec un chronotachygraphe analogique, le conducteur utilise un disque adapté à l'appareil. Il doit inscrire correctement les informations et activités exigées et conserver les disques qui doivent être présentés lors d'un contrôle.</div>
<div class="warning"><strong>⚠️ N'utilisez pas un disque incorrect et ne modifiez jamais les enregistrements.</strong> La manipulation des données peut constituer une infraction.</div>
</div>

<div class="card"><h2>3️⃣ Que mesure-t-il ?</h2>
<div class="article">Il enregistre les périodes de conduite, de repos, les pauses et les autres activités, selon le type d'appareil et son utilisation.</div></div>

<div class="card"><h2>4️⃣ La règle des 4 h 30</h2>
<div class="article">Après une période cumulée de conduite de 4 heures 30, le conducteur doit prendre une pause conformément aux règles européennes avant de continuer à conduire. La règle générale prévoit une pause d'au moins 45 minutes, avec les possibilités de fractionnement autorisées par la réglementation.</div>
</div>

<div class="card"><h2>5️⃣ Limites de conduite</h2>
<div class="article">La règle européenne générale prévoit un maximum de 9 heures de conduite par jour, pouvant être porté à 10 heures deux fois par semaine.</div>
<div class="article">Il existe également des limites hebdomadaires : 56 heures maximum sur une semaine et 90 heures sur deux semaines consécutives.</div>
</div>

<div class="card"><h2>6️⃣ Repos journalier</h2>
<div class="article">Les périodes de repos journalier exigées doivent être respectées. La règle générale prévoit un repos journalier normal d'au moins 11 heures, avec des possibilités de fractionnement ou de réduction dans les cas autorisés.</div>
</div>

<div class="card"><h2>7️⃣ Repos hebdomadaire</h2>
<div class="article">Le repos hebdomadaire normal ou réduit doit être respecté et compensé lorsque la réglementation l'exige. Le repos hebdomadaire normal est généralement d'au moins 45 heures.</div>
</div>

<div class="card"><h2>8️⃣ Le conducteur marocain vers l'Europe</h2>
<div class="article">Le conducteur venant du Maroc doit connaître les règles applicables au transport international, conserver les documents et enregistrements exigés et distinguer la conduite, le repos, les autres travaux et la disponibilité.</div>
</div>

<div class="card"><h2>9️⃣ Contrôles routiers</h2>
<div class="article">Lors d'un contrôle, le conducteur doit pouvoir présenter les enregistrements d'activité et les documents exigés pour la période concernée. Selon les règles actuelles, les enregistrements du jour en cours et de la période précédente exigée doivent être disponibles, actuellement 56 jours.</div>
</div>

<div class="card"><h2>🔟 Du disque papier au numérique</h2>
<div class="article">Le transport européen utilise de plus en plus les chronotachygraphes numériques et intelligents. Le conducteur habitué au disque doit donc apprendre à utiliser la carte conducteur, saisir les activités, effectuer les impressions et les téléchargements lorsque cela est nécessaire.</div>
</div>

<div class="card"><h2>1️⃣1️⃣ Chronotachygraphe intelligent</h2>
<div class="article">Le chronotachygraphe intelligent enregistre des informations supplémentaires, notamment des informations de localisation, et peut enregistrer automatiquement certaines opérations. Il existe plusieurs générations d'appareils : il faut donc connaître celui installé sur le véhicule.</div>
<div class="info"><strong>📅 Important :</strong> Pour le transport international, des échéances européennes progressives ont été fixées pour remplacer les anciens équipements par des Smart Tachograph, avec des dates principales à partir de fin 2024 et août 2025.</div>
</div>

<div class="card"><h2>1️⃣2️⃣ Passage d'une frontière</h2>
<div class="article">Lors du passage d'une frontière, des règles prévoient l'enregistrement du pays d'entrée selon le type de chronotachygraphe. Le Smart Tachograph moderne peut enregistrer automatiquement le passage, tandis que les anciens appareils peuvent nécessiter la saisie manuelle du symbole du pays.</div>
</div>

<div class="card"><h2>1️⃣3️⃣ En cas de panne</h2>
<div class="article">En cas de panne, il faut suivre les procédures prévues, notamment effectuer les enregistrements manuels lorsque cela est nécessaire, conserver les documents exigés et faire réparer l'appareil conformément aux règles.</div>
</div>

<div class="card"><h2>1️⃣4️⃣ Erreurs fréquentes</h2>
<ul>
<li>Oublier d'enregistrer correctement l'activité.</li>
<li>Utiliser incorrectement le chronotachygraphe.</li>
<li>Ne pas respecter la pause de 45 minutes.</li>
<li>Confondre conduite et autre travail.</li>
<li>Ne pas conserver les enregistrements exigés.</li>
<li>Manipuler les données ou cacher l'activité réelle.</li>
</ul>
</div>

<div class="card"><h2>1️⃣5️⃣ Exemple pratique</h2>
<div class="article">Par exemple, si le conducteur commence son trajet du Maroc vers l'Espagne puis la France, il doit organiser conduite et repos dès le début du trajet, enregistrer correctement son activité et respecter les règles aux frontières, lors des arrêts et des contrôles.</div>
</div>

<div class="card"><h2>1️⃣6️⃣ Que doit apprendre le conducteur marocain ?</h2>
<ul>
<li>Utiliser le chronotachygraphe numérique et intelligent.</li>
<li>Comprendre les différents symboles et activités.</li>
<li>Calculer les temps de conduite et de repos.</li>
<li>Réagir correctement lors d'un contrôle.</li>
<li>Connaître les règles de passage des frontières.</li>
<li>Conserver les documents et enregistrements exigés.</li>
<li>Connaître ses droits et obligations comme conducteur professionnel.</li>
</ul>
</div>

@endif

<div class="card">
@if(app()->getLocale() === 'ar')
<h2>✅ الخلاصة</h2>
<div class="article">السائق الذي يفهم التاكوغراف ويحترم أوقات القيادة والراحة والتسجيلات المطلوبة يكون أكثر استعدادًا للعمل بشكل قانوني وآمن في أوروبا.</div>
@elseif(app()->getLocale() === 'es')
<h2>✅ Conclusión</h2>
<div class="article">Un conductor que entiende el tacógrafo y respeta los tiempos de conducción, descanso y los registros exigidos está mejor preparado para trabajar de forma legal y segura en Europa.</div>
@else
<h2>✅ Conclusion</h2>
<div class="article">Un conducteur qui comprend le chronotachygraphe et respecte les temps de conduite, de repos et les enregistrements exigés est mieux préparé pour travailler légalement et en sécurité en Europe.</div>
@endif
</div>

<div style="text-align:center;margin:25px 0">
<a class="button" href="{{ url('/') }}">🏠 {{ app()->getLocale()==='ar'?'الرئيسية':(app()->getLocale()==='es'?'Inicio':'Accueil') }}</a>
<a class="button" href="{{ url('/europe-rules') }}">🌍 {{ app()->getLocale()==='ar'?'قواعد أوروبا':(app()->getLocale()==='es'?'Normas europeas':'Règles européennes') }}</a>
<a class="button" href="{{ url('/driver-documents') }}">📄 {{ app()->getLocale()==='ar'?'وثائق السائق':(app()->getLocale()==='es'?'Documentos del conductor':'Documents du conducteur') }}</a>
</div>

</div>
</body>
</html>
