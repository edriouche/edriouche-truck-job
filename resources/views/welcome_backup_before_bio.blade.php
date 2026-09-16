@include("partials.language-switcher")
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edriouche Truck Job</title>
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
            padding: 30px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0 0 10px;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
        }

        .box {
            background: white;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 12px;
            text-align: center;
        }

        .father-photo { display:block; width:100%; max-width:300px; height:auto; margin:20px auto; border-radius:16px; border:4px solid #d4af37; box-shadow:0 8px 24px rgba(0,0,0,.25); object-fit:cover; }
        .founder-photo { width:180px; max-width:180px; }

        .button {
            display: inline-block;
            margin: 8px;
            padding: 12px 22px;
            background: #111827;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .button:hover {
            background: #1f2937;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #666;
        }
    </style>
</head>

<body>

<header>
    <div style="text-align:center;margin:10px 0;font-size:18px;">
        <a href="/lang/ar" style="margin:0 8px;">🇲🇦 العربية</a>
        <a href="/lang/es" style="margin:0 8px;">🇪🇸 Español</a>
        <a href="/lang/fr" style="margin:0 8px;">🇫🇷 Français</a>
    </div>
    <h1>🚛 {{ __("messages.site_name") }}</h1>
    <p>{{ __('messages.job_intro') }}</p>
</header>

<div class="container">
    <div class="box" style="border-top:6px solid #d4af37;background:linear-gradient(135deg,#ffffff,#f8fafc);">
        <h2 style="font-size:28px;line-height:1.5;">🚛 {{ __('messages.driver_message') }}</h2>
        <h3>{{ __('messages.driver_story_title') }}</h3>
        <p style="line-height:2;font-size:20px;font-weight:bold;">{!! __('messages.driver_absence') !!}</p>
        <p style="line-height:2;font-size:20px;font-weight:bold;">{{ __('messages.driver_values') }}</p>
        <p style="line-height:2;font-size:18px;font-weight:bold;">{{ __('messages.driver_sacrifice') }}</p>
        <p style="line-height:2;font-size:17px;">{!! __('messages.driver_mission') !!}</p>
        <p style="line-height:2;font-size:19px;font-weight:bold;">{!! __('messages.driver_morocco_europe') !!}</p>
        <p style="font-size:22px;font-weight:bold;">{{ __('messages.driver_respect') }}</p>
    </div>


    <div class="box">
        <img src="{{ asset("storage/images/founder.jpg") }}" alt="محمد الدريوش - مؤسس الموقع" class="father-photo founder-photo">
        <h2>🚛 محمد الدريوش — مؤسس Edriouche Truck Job</h2>
    </div>

    <div class="box">
        <img
            src="{{ asset('storage/images/father.jpg') }}"
            alt="{{ __('messages.father_alt') }}"
            class="father-photo"
        >

        <h2>🤲 {{ __('messages.father_memory') }}</h2>

        <p>{{ __('messages.father_teacher') }}</p>

        <p>
            {{ __('messages.father_story') }}
            {{ __('messages.father_legacy') }}
        </p>
    </div>

    <div class="box">
        <h2>{{ __('messages.jobs_title') }}</h2>

        <p>
            {{ __('messages.jobs_description') }}
        </p>

        <a href="/jobs" class="button">{{ __("messages.jobs") }}</a>
        <a href="/companies" class="button">{{ __("messages.companies") }}</a>
        <a href="/training" class="button">{{ __("messages.training") }}</a>
        <div style="margin-top:25px;padding:18px;background:#f5f7fa;border-radius:16px;">
            <h2 style="margin-top:0;">🇪🇺 {{ __('messages.professional_driver_services') }}</h2>
            <a href="/spain" class="button">🇪🇸 {{ __('messages.work_in_spain') }}</a>
            <a href="/spanish-companies" class="button">🇪🇸 {{ __('messages.spanish_companies') }}</a>
            <a href="/spain-law" class="button">⚖️ {{ __('messages.spain_law_short') }}</a>
            <a href="/driver-documents" class="button">📄 {{ __('messages.driver_documents_short') }}</a>
            <a href="/cv-builder" class="button">📝 {{ __('messages.cv_create') }}</a>
            <a href="/truck-checklist" class="button">🚛 {{ __('messages.truck_check') }}</a>
            <a href="/cmr" class="button">📄 النقل الدولي — CMR</a>
        </div>
    </div>

</div>

<footer>
    Edriouche Truck Job © 2026
</footer>

</body>
</html>
