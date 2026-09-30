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


    <!-- MOROCCO DIRECT COMPANIES -->
    <div class="intro">
        <h2>{{ __('messages.morocco_direct_title') }}</h2>
        <p>{{ __('messages.morocco_direct_intro') }}</p>
    </div>

    <div class="job">
        <span class="badge">{{ __('messages.morocco') }}</span>
        <h2>DACHSER Morocco</h2>
        <p>{{ __('messages.dachser_desc') }}</p>
        <p>📞 +212 522 675 850</p>
        <a href="https://www.dachser.ma/fr/" class="official" target="_blank" rel="noopener">
            {{ __('messages.website') }}
        </a>
    </div>

    <div class="job">
        <span class="badge">{{ __('messages.morocco') }}</span>
        <h2>Calsina Carré</h2>
        <p>{{ __('messages.calsina_desc') }}</p>
        <p>📞 +212 539 39 06 73 / +212 539 32 17 21</p>
        <p>✉️ info.ccm@calsina-carre.com</p>
        <a href="https://www.calsina-carre.com/" class="official" target="_blank" rel="noopener">
            {{ __('messages.website') }}
        </a>
    </div>

    <div class="job">
        <span class="badge">{{ __('messages.morocco') }}</span>
        <h2>Julia Trans</h2>
        <p>{{ __('messages.julia_desc') }}</p>
        <p>📍 Casablanca</p>
        <p>📞 +212 522 47 50 35</p>
        <p>✉️ contact@juliatransport.com</p>
        <a href="https://juliatransport.com/" class="official" target="_blank" rel="noopener">
            {{ __('messages.website') }}
        </a>
    </div>

    <div class="job">
        <span class="badge">{{ __('messages.morocco') }}</span>
        <h2>JL Transit</h2>
        <p>{{ __('messages.jl_desc') }}</p>
        <p>📍 Casablanca</p>
        <p>📞 +212 522 304 655</p>
        <p>✉️ contact@jltransit.ma</p>
        <a href="https://www.jltransit.ma/" class="official" target="_blank" rel="noopener">
            {{ __('messages.website') }}
        </a>
    </div>

    <div class="job">
        <span class="badge">{{ __('messages.morocco') }}</span>
        <h2>Gold Bridge Express</h2>
        <p>{{ __('messages.gbe_desc') }}</p>
        <p>📍 Casablanca</p>
        <p>📞 +212 522 247 373</p>
        <p>✉️ marketing@gbe.ma</p>
        <a href="https://gbe.ma/" class="official" target="_blank" rel="noopener">
            {{ __('messages.website') }}
        </a>
    </div>

    <div class="job">
        <span class="badge">{{ __('messages.morocco') }}</span>
        <h2>DISTRANS Express Maroc</h2>
        <p>{{ __('messages.distrans_desc') }}</p>
        <p>📞 +212 522 353 650</p>
        <a href="https://www.distransexpress.com/" class="official" target="_blank" rel="noopener">
            {{ __('messages.website') }}
        </a>
    </div>

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
