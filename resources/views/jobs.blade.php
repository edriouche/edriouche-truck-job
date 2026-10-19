@include("partials.language-switcher")
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.jobs_heading') }} - Edriouche Truck Job</title>

    <style>
        * {
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            max-width: 100%;
            overflow-x: hidden;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
            word-wrap: break-word;
            overflow-wrap: anywhere;
        

        header {
            text-align: center;
            padding: 25px 15px;
        

        header h1 {
            margin: 0;
            font-size: 28px;
        

        .container {
            width: 100%;
            max-width: 1000px;
            margin: auto;
            padding: 30px 20px;
        

        .intro {
            background: white;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 25px;
        

        .job {
            background: white;
            padding: 25px;
            margin-bottom: 18px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0,0,0,.08);
        

        .job h2 {
            margin-top: 0;
        

        .job p {
            line-height: 1.8;
        

        .badge {
            background: #dc2626;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
        

        .official { display:inline-block; margin-top:12px; padding:11px 18px; background:#111827; color:white; text-decoration:none; border-radius:8px; box-shadow:0 4px 10px rgba(0,0,0,.15); font-weight:700; transition:.25s; }
        

        .back { display:inline-block; margin-bottom:20px; padding:10px 14px; text-decoration:none; color:#111827; font-weight:bold; border-radius:10px; background:#fff; box-shadow:0 2px 8px rgba(0,0,0,.08); }
        

        footer {
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        

        @media (max-width: 600px) {
            header h1 {
                font-size: 23px;
            }

            .container {
                width: 100%;
                max-width: 100%;
                padding: 18px 12px;
            }

            .intro,
            .job {
                width: 100%;
                max-width: 100%;
                padding: 18px 14px;
                overflow: hidden;
            }

            .job h2 {
                font-size: 20px;
                line-height: 1.4;
            }

            .job p,
            .intro p {
                line-height: 1.8;
                overflow-wrap: anywhere;
                word-break: break-word;
            }

            .official,
            .back {
                max-width: 100%;
                overflow-wrap: anywhere;
            }
        }

    </style>
</head>

<body>

<header>
    <h1>🚛 {{ __('messages.jobs_heading') }}</h1>
    <p>Edriouche Truck Job</p>
</header>

<div class="container">

    <a href="/" class="back">{{ __('messages.back_home') }}</a>

<div style="display:flex;flex-wrap:wrap;gap:12px;justify-content:center;margin:18px 0 26px;">
<a href="/companies" class="official">{{ app()->getLocale() === 'es' ? '🏢 Directorio de empresas de transporte de Marruecos' : (app()->getLocale() === 'fr' ? '🏢 Annuaire des entreprises de transport au Maroc' : '🏢 دليل شركات النقل بالمغرب') }}</a>
<a href="/youth-drivers-morocco" class="official">{{ app()->getLocale() === 'es' ? '🎓 Guía para jóvenes conductores marroquíes' : (app()->getLocale() === 'fr' ? '🎓 Guide pour les jeunes conducteurs marocains' : '🎓 دليل الشباب السائقين المغاربة') }}</a>
</div>


    <div class="intro">
        <h2>{{ __('messages.jobs_available') }}</h2>
        <p>
            {{ __('messages.jobs_intro') }}
        </p>
    </div>

    <div class="job">
        <span class="badge">{{ __('messages.morocco') }}</span>
        <h2>{{ __('messages.naceur_title') }}</h2>
        <p>{{ __('messages.casablanca_national') }}</p>
        <p>
            {{ __('messages.naceur_licence') }}<br>
            {{ __('messages.naceur_experience') }}<br>
            {{ __('messages.naceur_adr') }}<br>
            {{ __('messages.naceur_contract') }}<br>
        </p>
        <p>{{ __('messages.naceur_classification') }}</p>
        <a href="https://www.stn.ma/recrutement.html" class="official" target="_blank">
            {{ __('messages.official_recruitment') }}
        </a>
    </div>

    <div class="job">
        <span class="badge">{{ __('messages.morocco') }}</span>
        <h2>{{ __('messages.marotrans_title') }}</h2>
        <p>{{ __('messages.tangier_kenitra') }}</p>
        <p>
            🚛 Permis EC<br>
            {{ __('messages.experience_two_years') }}<br>
            {{ __('messages.cdd_cdi') }}
        </p>
        <p>{{ __('messages.naceur_classification') }}</p>
        <p>📧 recrutement@marotrans.co.ma</p>
        <a href="https://fr.linkedin.com/posts/marotrans_marotrans-recrute-des-chauffeurs-poids-activity-7486105367849046016-MsXW"
           class="official" target="_blank">
            {{ __('messages.details_source') }}
        </a>
    </div>

    <div class="job">
        <span class="badge">{{ __('messages.morocco') }}</span>
        <h2>{{ __('messages.sntro_title') }}</h2>
        <p>{{ __('messages.morocco_sites') }}</p>
        <p>
            {{ __('messages.trucks_8_4_6_4') }}<br>
            {{ __('messages.civil_engineering_experience') }}<br>
            {{ __('messages.housing_transport') }}<br>
            {{ __('messages.experienced_driver_opportunity') }}
        </p>
        <p>{{ __('messages.naceur_classification') }}</p>
        <p>📧 rhmatsntro@gmail.com</p>
        <p>📱 WhatsApp: 06 61 39 72 57</p>
        <a href="https://www.sntro.ma/" class="official" target="_blank">
            {{ __('messages.company_website') }}
        </a>
    </div>

    <div class="job">
        <span class="badge">{{ __('messages.morocco') }}</span>
        <h2>{{ __('messages.al7_title') }}</h2>
        <p>{{ __('messages.tangier') }}</p>
        <p>
            {{ __('messages.logistics_transport_company') }}<br>
            {{ __('messages.driver_career_path') }}<br>
            {{ __('messages.recruitment_info') }}
        </p>
        <p><strong>التصنيف:</strong> {{ __('messages.variable_conditions') }}</p>
        <a href="https://www.al7.ma/" class="official" target="_blank">
            {{ __('messages.apply_official') }}
        </a>
    </div>


    <!-- LATEST VERIFIED MOROCCO DRIVER OFFERS -->
<div class="container" style="margin-top:35px;">
<div class="intro">
<h2>🇲🇦 عروض حديثة لسائقي الشاحنات في المغرب</h2>
<p>آخر تحقق: 8 أكتوبر 2026 — يجب التحقق مباشرة من الشركة قبل إرسال الوثائق أو السفر.</p>
</div>
<div class="job">
<span class="badge">المغرب</span>
<h2>LaLac – Chauffeur poids lourd</h2>
<p>📍 طنجة – تطوان – الحسيمة</p>
<p>🚛 نقل البضائع بالشاحنات</p>
<p>📄 رخصة مناسبة للشاحنات + خبرة في النقل الطرقي</p>
<p>💼 دوام كامل</p>
<a href="https://ma.linkedin.com/jobs/view/chauffeur-at-lalac-4476535337" target="_blank" rel="noopener noreferrer">المصدر</a>
</div>
<div class="job">
<span class="badge">المغرب</span>
<h2>Casagains Logistique – Chauffeur de camion</h2>
<p>📍 الدار البيضاء</p>
<p>🚛 نقل وتوزيع البضائع</p>
<p>📄 رخصة مهنية للشاحنات + خبرة مؤكدة</p>
<p>💼 دوام كامل</p>
<a href="https://ma.linkedin.com/jobs/view/chauffeur-de-camion-4472433984" target="_blank" rel="noopener noreferrer">المصدر</a>
</div>
<div class="job">
<span class="badge">المغرب</span>
<h2>Chauffeur poids lourd – Rabat</h2>
<p>📍 الرباط</p>
<p>🚛 قيادة الشاحنات والرحلات الطويلة</p>
<p>📄 رخصة الشاحنات + خبرة مؤكدة</p>
<p>💼 دوام كامل</p>
<a href="https://ma.linkedin.com/jobs/view/chauffeur-de-camion-at-chauffeur-b-c-d-4464936285" target="_blank" rel="noopener noreferrer">المصدر</a>
</div>
<div class="job">
<span class="badge">المغرب</span>
<h2>Coliaty – Chauffeur poids lourd</h2>
<p>📍 الدار البيضاء ↔ أكادير</p>
<p>🚛 نقل البضائع</p>
<p>📄 Permis C أو EC + خبرة 1 إلى 2 سنة + وثائق محدثة</p>
<p>💼 CDI / CDD – الراتب حسب الخبرة</p>
<a href="https://ma.linkedin.com/jobs/view/chauffeur-at-coliaty-4444733699" target="_blank" rel="noopener noreferrer">المصدر</a>
</div>
<div class="job">
<span class="badge">المغرب ↔ أوروبا</span>
<h2>A Plus Transport Maroc – Chauffeur routier international</h2>
<p>📍 المغرب ↔ أوروبا</p>
<p>🚛 نقل دولي بالشاحنات</p>
<p>📄 Permis CE + خبرة في النقل الدولي + معرفة القوانين الأوروبية</p>
<p>⭐ تأشيرة شنغن ميزة وليست ضماناً للتوظيف أو التأشيرة</p>
<p>📧 contact@aplustransport.ma</p>
<a href="https://ma.linkedin.com/in/amine-aztob" target="_blank" rel="noopener noreferrer">المصدر</a>
</div>
</div>

<div style="max-width:1000px;margin:30px auto;padding:24px;background:#f8f1e7;border:2px solid #d2a84a;border-radius:16px;text-align:center;direction:rtl;">
@php
$locale = app()->getLocale();
@endphp
<h2 style="margin-top:0;">🇲🇦 ANAPEC — {{ $locale === "en" ? "National Agency for the Promotion of Employment and Skills" : ($locale === "es" ? "Agencia Nacional de Promoción del Empleo y las Competencias" : ($locale === "fr" ? "Agence Nationale de Promotion de l’Emploi et des Compétences" : "الوكالة الوطنية لإنعاش التشغيل والكفاءات")) }}</h2>
<p style="font-size:18px;line-height:1.8;">{{ $locale === "en" ? "Official source for finding job opportunities and employment services in Morocco. ANAPEC services for job seekers are free." : ($locale === "es" ? "Fuente oficial para buscar oportunidades de empleo y servicios de empleo en Marruecos. Los servicios de ANAPEC para los solicitantes de empleo son gratuitos." : ($locale === "fr" ? "Source officielle pour rechercher des offres d’emploi et des services d’emploi au Maroc. Les services de l’ANAPEC pour les demandeurs d’emploi sont gratuits." : "مصدر رسمي للبحث عن فرص العمل وخدمات التشغيل في المغرب. خدمات الوكالة للباحثين عن العمل مجانية.")) }}</p>
<a href="https://www.anapec.ma/" target="_blank" rel="noopener" style="display:inline-block;background:#d2a84a;color:#111;padding:14px 28px;border-radius:10px;text-decoration:none;font-weight:bold;font-size:18px;">{{ $locale === "en" ? "🔎 Visit the official ANAPEC website" : ($locale === "es" ? "🔎 Visitar el sitio oficial de ANAPEC" : ($locale === "fr" ? "🔎 Visiter le site officiel de l’ANAPEC" : "🔎 زيارة موقع ANAPEC الرسمي")) }}</a>
<p style="font-size:14px;margin-bottom:0;">{{ $locale === "en" ? "Notice: a listing on ANAPEC does not guarantee a job contract, visa or recruitment." : ($locale === "es" ? "Aviso: una oferta publicada en ANAPEC no garantiza automáticamente un contrato, visado ni contratación." : ($locale === "fr" ? "Attention : une offre publiée par l’ANAPEC ne garantit pas automatiquement un contrat, un visa ou un recrutement." : "تنبيه: وجود عرض في ANAPEC لا يعني تلقائياً الحصول على عقد عمل أو تأشيرة أو توظيف.")) }}</p>
</div>


<!-- MOROCCO ANAPEC TRUCK OFFERS OCT 2026 -->
@php($moroccoOffers = __('morocco_jobs.offers'))
<div class="intro">
    <h2>{{ __('morocco_jobs.title') }}</h2>
    <p>{{ __('morocco_jobs.review') }}</p>
    <p>{{ __('morocco_jobs.warning') }}</p>
</div>
@foreach ($moroccoOffers as $offer)
<div class="job">
    <span class="badge">{{ $offer[0] }}</span>
    <h2>{{ $offer[1] }} — {{ __('morocco_jobs.reference') }} {{ $offer[2] }}</h2>
    <p>{{ __('morocco_jobs.date') }}: {{ $offer[3] }}</p>
    <p>👥 {{ $offer[4] }}</p>
    @if (!empty($offer[5])) <p>{{ $offer[5] }}</p> @endif
    @if (!empty($offer[6])) <p>{{ $offer[6] }}</p> @endif
    @if (!empty($offer[7])) <p>{{ $offer[7] }}</p> @endif
    <p>{{ __('morocco_jobs.salary') }}</p>
    <p>{{ __('morocco_jobs.status') }}</p>
    <a href="{{ $offer[array_key_last($offer)] }}" class="official" target="_blank" rel="noopener noreferrer">{{ __('morocco_jobs.source') }}</a>
</div>
@endforeach


<!-- MOROCCO TRANSPORT COMPANIES -->
<div class="intro">
    <h2>{{ __('jobs.direct') }}</h2>
    <p>{{ __('jobs.direct_intro') }}</p>
</div>

@foreach(__('jobs.companies') as $company)
    <div class="job">
        <span class="badge">{{ __('jobs.morocco') }}</span>
        <h2>{{ $company[0] }}</h2>
        <p>{{ $company[1] }}</p>
        @if(!empty($company[2]))
            <p>📞 {{ $company[2] }}</p>
        @endif
        @if(!empty($company[3]))
            <p>✉️ {{ $company[3] }}</p>
        @endif
        @if(!empty($company[4]))
            <a href="{{ $company[4] }}" class="official" target="_blank" rel="noopener">{{ __('jobs.website') }}</a>
        @else
            <p>📌 {{ __('jobs.call') }}</p>
        @endif
    </div>
@endforeach



    <div class="intro">
        <p><strong>{{ __('messages.no_guarantee') }}</strong></p>
        <p>{{ __('messages.last_check') }}</p>
    </div>

</div>

<footer>
    © 2026 Edriouche Truck Job
</footer>

</body>
</html>
