<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>
{{ app()->getLocale() === 'es' ? 'Carta abierta al Ministerio de Transporte y Logística' : (app()->getLocale() === 'fr' ? 'Lettre ouverte au Ministère du Transport et de la Logistique' : 'رسالة مفتوحة إلى وزارة النقل واللوجستيك') }}
</title>

<style>
body{font-family:Arial,sans-serif;line-height:2.1;margin:0;background:#f7f7f7;color:#222}
main{max-width:900px;margin:30px auto;padding:30px;background:white;border-radius:16px;box-shadow:0 2px 12px #ccc}
h1{text-align:center;font-size:38px;line-height:1.7}
h2{font-size:28px;margin-top:30px}
p,li{font-size:21px}
.btn{display:block;width:fit-content;margin:35px auto 5px;padding:14px 28px;background:#c9a227;color:white;text-decoration:none;border-radius:10px;font-size:21px}
</style>
</head>

<body>
<main>
<div style="text-align:center;margin-bottom:25px;font-size:20px;"><a href="/lang/ar?redirect=/open-letter">🇲🇦 العربية</a> | <a href="/lang/es?redirect=/open-letter">🇪🇸 Español</a> | <a href="/lang/fr?redirect=/open-letter">🇫🇷 Français</a></div>

@if(app()->getLocale() === 'es')

<h1>📜 Carta abierta al Ministerio de Transporte y Logística</h1>

<h2>Por la dignidad, la justicia y los derechos del conductor profesional marroquí</h2>

<p>Al Señor Ministro de Transporte y Logística:</p>

<p>Nos dirigimos respetuosamente a usted para exponer algunas de las preocupaciones que afectan a numerosos conductores profesionales marroquíes que han dedicado años de su vida al sector del transporte y al traslado de mercancías dentro y fuera de Marruecos.</p>

<p>El conductor profesional no es simplemente una persona que conduce un camión. Es un elemento esencial del sistema de transporte y asume importantes responsabilidades profesionales, así como condiciones de trabajo que requieren reconocimiento, protección y un marco jurídico y administrativo claro.</p>

<h2>Principales preocupaciones</h2>

<ul>
<li>Aclarar la situación del conductor después de perder su empleo, especialmente en relación con las cotizaciones y la protección social.</li>
<li>Establecer un procedimiento claro para revisar las cotizaciones o deudas cuando los datos o la situación administrativa no sean correctos.</li>
<li>Estudiar mecanismos legales para reconocer la experiencia profesional adquirida anteriormente.</li>
<li>Simplificar los procedimientos de formación y renovación de la tarjeta profesional, aclarando los plazos y documentos necesarios.</li>
<li>Proporcionar información clara sobre las autoridades competentes para presentar reclamaciones y recursos, así como sobre los medios para hacer seguimiento de estos procedimientos.</li>
</ul>

<h2>Nuestras solicitudes</h2>

<p>Solicitamos respetuosamente que se abra un diálogo con los conductores profesionales y los actores del sector, que se estudien estas dificultades, que se aclaren los procedimientos y que exista coordinación entre las autoridades competentes para que el conductor pueda conocer sus derechos y obligaciones y corregir su situación cuando sea necesario.</p>

<p>No solicitamos la eliminación de la regulación de la profesión. Solicitamos que esta regulación se aplique de manera clara y justa, teniendo en cuenta la realidad profesional y social de los conductores y manteniendo al mismo tiempo las exigencias de seguridad y de la ley.</p>

<p>Señor Ministro, la dignidad del conductor profesional forma parte de la dignidad del sector nacional del transporte. Esperamos que esta carta sea escuchada y que pueda constituir el inicio de un diálogo práctico y de la búsqueda de soluciones legales que protejan los derechos de todos.</p>

<p>Reciba, Señor Ministro, nuestra más alta consideración y respeto.</p>

<p><strong>En nombre de la iniciativa Edriouche Truck Job</strong><br>
Mohammed Edriouche<br>
Conductor profesional marroquí e interesado en las cuestiones de los conductores profesionales</p>

<a class="btn" href="/">⬅️ Volver a la página principal</a>

@elseif(app()->getLocale() === 'fr')

<h1>📜 Lettre ouverte au Ministère du Transport et de la Logistique</h1>

<h2>Pour la dignité, la justice et les droits du conducteur professionnel marocain</h2>

<p>À Monsieur le Ministre du Transport et de la Logistique,</p>

<p>Nous nous adressons respectueusement à vous afin de présenter certaines préoccupations auxquelles sont confrontés de nombreux conducteurs professionnels marocains, qui ont consacré des années de leur vie au secteur du transport et au transport de marchandises au Maroc et à l'étranger.</p>

<p>Le conducteur professionnel n'est pas simplement une personne qui conduit un camion. Il constitue un élément essentiel du système de transport et assume d'importantes responsabilités professionnelles ainsi que des conditions de travail qui nécessitent reconnaissance, protection et un cadre juridique et administratif clair.</p>

<h2>Principales préoccupations</h2>

<ul>
<li>Clarifier la situation du conducteur après la perte de son emploi, notamment en ce qui concerne les cotisations et la protection sociale.</li>
<li>Mettre en place une procédure claire permettant de réexaminer les cotisations ou les dettes lorsque les données ou la situation administrative ne correspondent pas à la réalité.</li>
<li>Étudier des mécanismes légaux permettant la reconnaissance de l'expérience professionnelle antérieure.</li>
<li>Simplifier les procédures de formation et de renouvellement de la carte professionnelle, en précisant les délais et les documents nécessaires.</li>
<li>Fournir des informations claires sur les autorités compétentes pour les réclamations et les recours, ainsi que sur les moyens de suivre ces démarches.</li>
</ul>

<h2>Nos demandes</h2>

<p>Nous demandons respectueusement l'ouverture d'un dialogue avec les conducteurs professionnels et les acteurs du secteur, l'étude de ces difficultés, la clarification des procédures et la coordination entre les autorités compétentes afin que le conducteur puisse connaître ses droits et ses obligations et régulariser sa situation lorsque cela est nécessaire.</p>

<p>Nous ne demandons pas la suppression de la réglementation de la profession. Nous demandons que cette réglementation soit appliquée de manière claire et équitable, en tenant compte de la réalité professionnelle et sociale des conducteurs, tout en respectant les exigences de sécurité et de la loi.</p>

<p>Monsieur le Ministre, la dignité du conducteur professionnel fait partie de la dignité du secteur national du transport. Nous espérons que cette lettre sera entendue et qu'elle pourra constituer le début d'un dialogue pratique et de la recherche de solutions légales permettant de protéger les droits de tous.</p>

<p>Veuillez agréer, Monsieur le Ministre, l'expression de notre haute considération et de notre profond respect.</p>

<p><strong>Au nom de l'initiative Edriouche Truck Job</strong><br>
Mohammed Edriouche<br>
Conducteur professionnel marocain et intéressé par les questions des conducteurs professionnels</p>

<a class="btn" href="/">⬅️ Retour à la page d’accueil</a>

@else

<h1>📜 رسالة مفتوحة إلى وزارة النقل واللوجستيك</h1>

<h2>من أجل إنصاف السائق المهني المغربي وصون كرامته وحقوقه</h2>

<p>إلى السيد وزير النقل واللوجستيك المحترم،</p>

<p>نتوجه إليكم بهذه الرسالة لعرض بعض الانشغالات التي يعيشها عدد من السائقين المهنيين المغاربة، الذين أفنوا سنوات من حياتهم في خدمة قطاع النقل ونقل البضائع داخل المغرب وخارجه.</p>

<p>إن السائق المهني ليس مجرد شخص يقود شاحنة، بل هو عنصر أساسي في منظومة النقل، ويتحمل مسؤوليات مهنية كبيرة وظروفًا تتطلب الاعتراف بمجهوده وتوفير إطار قانوني وإداري واضح.</p>

<h2>أبرز الانشغالات</h2>

<ul>
<li>توضيح وضعية السائق بعد فقدان العمل، خصوصًا فيما يتعلق بالاشتراكات والتغطية الاجتماعية.</li>
<li>توفير آلية واضحة لمراجعة الاشتراكات أو الديون عندما تكون البيانات أو الوضعية غير مطابقة.</li>
<li>دراسة سبل الاعتراف بالخبرة المهنية السابقة وفق شروط قانونية واضحة.</li>
<li>تبسيط إجراءات التكوين وتجديد البطاقة المهنية وتوضيح المواعيد والوثائق المطلوبة.</li>
<li>توفير معلومات واضحة حول الجهات المختصة بالشكايات والتظلمات وطرق تتبعها.</li>
</ul>

<h2>مطالبنا</h2>

<p>نلتمس فتح حوار مع السائقين المهنيين والفاعلين في القطاع، ودراسة هذه الصعوبات، وتوضيح المساطر، والتنسيق بين الجهات المعنية حتى يتمكن السائق من معرفة حقوقه وواجباته وتصحيح وضعيته عند الحاجة.</p>

<p>إننا لا نطالب بإلغاء تنظيم المهنة، وإنما نطالب بتطبيقه بصورة واضحة وعادلة، تراعي الواقع المهني والاجتماعي للسائقين وتحافظ في الوقت نفسه على متطلبات السلامة والقانون.</p>

<p>السيد الوزير المحترم، إن كرامة السائق المهني جزء من كرامة قطاع النقل الوطني. ونأمل أن تجد هذه الرسالة آذانًا صاغية، وأن تكون بداية لحوار عملي والبحث عن حلول قانونية تحفظ حقوق الجميع.</p>

<p>وتفضلوا بقبول فائق عبارات التقدير والاحترام.</p>

<p><strong>عن مبادرة Edriouche Truck Job</strong><br>
محمد الدريوش<br>
سائق مهني مغربي ومهتم بقضايا السائقين المهنيين</p>

<a class="btn" href="/">⬅️ العودة إلى الصفحة الرئيسية</a>

@endif

</main>
</body>
</html>
