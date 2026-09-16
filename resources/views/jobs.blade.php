@include("partials.language-switcher")
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.jobs_heading') }} - Edriouche Truck Job</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
        

        header {
            text-align: center;
            padding: 25px 15px;
        

        header h1 {
            margin: 0;
            font-size: 28px;
        

        .container {
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
        
    </style>
</head>

<body>

<header>
    <h1>🚛 {{ __('messages.jobs_heading') }}</h1>
    <p>Edriouche Truck Job</p>
</header>

<div class="container">

    <a href="/" class="back">{{ __('messages.back_home') }}</a>

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

</div>

<footer>
    © 2026 Edriouche Truck Job
</footer>

</body>
</html>
