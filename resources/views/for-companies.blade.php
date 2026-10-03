<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @if(app()->getLocale() === 'es')
        <title>Para empresas | Edriouche Truck Job</title>
    @elseif(app()->getLocale() === 'fr')
        <title>Pour les entreprises | Edriouche Truck Job</title>
    @else
        <title>للشركات | Edriouche Truck Job</title>
    @endif

    <style>
        body{font-family:Arial,sans-serif;max-width:900px;margin:auto;padding:20px;line-height:1.8}
        .languages{text-align:center;margin:10px 0 25px}
        .languages a{display:inline-block;padding:8px 13px;margin:4px;border-radius:8px;background:#222;color:white;text-decoration:none}
        .box{padding:20px;border-radius:15px;background:#f5f5f5;margin:20px 0}
        input,textarea{box-sizing:border-box;border:1px solid #ccc;border-radius:8px}
        .btn{display:inline-block;padding:12px 22px;border-radius:10px;background:#222;color:white;text-decoration:none;border:0;cursor:pointer}
    </style>
</head>
<body>

<div class="languages">
    <a href="/lang/ar">🇲🇦 العربية</a>
    <a href="/lang/es">🇪🇸 Español</a>
    <a href="/lang/fr">🇫🇷 Français</a>
</div>

<h1>🚛 Edriouche Truck Job</h1>

@if(app()->getLocale() === 'es')

    <h2>Para empresas — Publica tus ofertas de empleo</h2>
    <p>
        ¿Su empresa en Marruecos, Europa o cualquier otro país busca conductores profesionales?
        Puede enviar su solicitud para publicar una oferta de empleo ante nuestra comunidad de conductores profesionales.
    </p>

    <div class="box">
        <h3>🆓 Para conductores y visitantes</h3>
        <p><strong>Los servicios básicos para conductores y visitantes son totalmente gratuitos.</strong></p>
        <p>Las tarifas comerciales corresponden únicamente a las empresas y a la publicidad.</p>
    </div>

    <div class="box">
        <h3>💼 Paquetes publicitarios para empresas</h3>

        <p><strong>🥉 Anuncio estándar — 100 DH</strong><br>
        Publicación de la oferta de empleo ante conductores profesionales.</p>

        <p><strong>🥈 Anuncio destacado — 250 DH</strong><br>
        Mayor visibilidad de la oferta dentro de la plataforma.</p>

        <p><strong>🥇 Paquete empresa — 500 DH / mes</strong><br>
        Visibilidad destacada de la empresa y sus anuncios durante un mes.</p>

        <p><small>El precio y la duración del anuncio se confirman con la empresa antes de la publicación.</small></p>
    </div>

    <div class="box">
        <h3>📩 Solicitud para publicar una oferta</h3>

        @if(session('success'))
            <p><strong>{{ session('success') }}</strong></p>
        @endif

        <form method="POST" action="{{ route('company.request') }}">
            @csrf

            <p>
                <label>Nombre de la empresa</label><br>
                <input name="company" required style="width:100%;padding:12px">
            </p>

            <p>
                <label>Nombre del responsable</label><br>
                <input name="contact" required style="width:100%;padding:12px">
            </p>

            <p>
                <label>Teléfono</label><br>
                <input name="phone" required style="width:100%;padding:12px">
            </p>

            <p>
                <label>Correo electrónico</label><br>
                <input type="email" name="email" style="width:100%;padding:12px">
            </p>

            <p>
                <label>Detalles de la oferta</label><br>
                <textarea name="message" required rows="6" style="width:100%;padding:12px"></textarea>
            </p>

            <button class="btn" type="submit">Enviar solicitud de la empresa</button>
        </form>
    </div>

    <a class="btn" href="/">Volver al sitio</a>

@elseif(app()->getLocale() === 'fr')

    <h2>Pour les entreprises — Publiez vos offres d’emploi</h2>
    <p>
        Votre entreprise au Maroc, en Europe ou dans un autre pays recherche des conducteurs professionnels ?
        Vous pouvez envoyer votre demande afin de publier une offre d’emploi auprès de notre communauté de conducteurs professionnels.
    </p>

    <div class="box">
        <h3>🆓 Pour les conducteurs et les visiteurs</h3>
        <p><strong>Les services essentiels destinés aux conducteurs et aux visiteurs sont entièrement gratuits.</strong></p>
        <p>Les frais commerciaux concernent uniquement les entreprises et la publicité.</p>
    </div>

    <div class="box">
        <h3>💼 Formules publicitaires pour les entreprises</h3>

        <p><strong>🥉 Annonce standard — 100 DH</strong><br>
        Publication de l’offre d’emploi auprès des conducteurs professionnels.</p>

        <p><strong>🥈 Annonce mise en avant — 250 DH</strong><br>
        Meilleure visibilité de l’offre au sein de la plateforme.</p>

        <p><strong>🥇 Formule entreprise — 500 DH / mois</strong><br>
        Visibilité renforcée de l’entreprise et de ses annonces pendant un mois.</p>

        <p><small>Le prix et la durée de l’annonce sont confirmés avec l’entreprise avant la publication.</small></p>
    </div>

    <div class="box">
        <h3>📩 Demande de publication d’une offre</h3>

        @if(session('success'))
            <p><strong>{{ session('success') }}</strong></p>
        @endif

        <form method="POST" action="{{ route('company.request') }}">
            @csrf

            <p>
                <label>Nom de l’entreprise</label><br>
                <input name="company" required style="width:100%;padding:12px">
            </p>

            <p>
                <label>Nom du responsable</label><br>
                <input name="contact" required style="width:100%;padding:12px">
            </p>

            <p>
                <label>Téléphone</label><br>
                <input name="phone" required style="width:100%;padding:12px">
            </p>

            <p>
                <label>Adresse e-mail</label><br>
                <input type="email" name="email" style="width:100%;padding:12px">
            </p>

            <p>
                <label>Détails de l’offre</label><br>
                <textarea name="message" required rows="6" style="width:100%;padding:12px"></textarea>
            </p>

            <button class="btn" type="submit">Envoyer la demande de l’entreprise</button>
        </form>
    </div>

    <a class="btn" href="/">Retour au site</a>

@else

    <h2>للشركات — أعلن عن فرص العمل</h2>
    <p>
        هل شركتك في المغرب أو أوروبا أو أي دولة أخرى تبحث عن سائقين مهنيين؟
        يمكنك إرسال طلبك لنشر فرصة العمل أمام جمهور السائقين المهنيين.
    </p>

    <div class="box">
        <h3>🆓 للسائقين والزوار</h3>
        <p><strong>الخدمات الأساسية للسائقين والزوار مجانية.</strong></p>
        <p>الرسوم التجارية تخص الشركات والإعلانات فقط.</p>
    </div>

    <div class="box">
        <h3>💼 باقات الإعلان للشركات</h3>

        <p><strong>🥉 الإعلان العادي — 100 DH</strong><br>
        نشر فرصة العمل أمام السائقين المهنيين.</p>

        <p><strong>🥈 الإعلان المميز — 250 DH</strong><br>
        إبراز إعلان الوظيفة بشكل أوضح داخل المنصة.</p>

        <p><strong>🥇 باقة الشركة — 500 DH / شهر</strong><br>
        ظهور مميز للشركة وإعلاناتها لمدة شهر.</p>

        <p><small>يتم تأكيد السعر ومدة الإعلان مع الشركة قبل النشر.</small></p>
    </div>

    <div class="box">
        <h3>📩 طلب نشر إعلان وظيفة</h3>

        @if(session('success'))
            <p><strong>{{ session('success') }}</strong></p>
        @endif

        <form method="POST" action="{{ route('company.request') }}">
            @csrf

            <p>
                <label>اسم الشركة</label><br>
                <input name="company" required style="width:100%;padding:12px">
            </p>

            <p>
                <label>اسم المسؤول</label><br>
                <input name="contact" required style="width:100%;padding:12px">
            </p>

            <p>
                <label>الهاتف</label><br>
                <input name="phone" required style="width:100%;padding:12px">
            </p>

            <p>
                <label>البريد الإلكتروني</label><br>
                <input type="email" name="email" style="width:100%;padding:12px">
            </p>

            <p>
                <label>تفاصيل الوظيفة</label><br>
                <textarea name="message" required rows="6" style="width:100%;padding:12px"></textarea>
            </p>

            <button class="btn" type="submit">إرسال طلب الشركة</button>
        </form>
    </div>

    <a class="btn" href="/">العودة إلى الموقع</a>

@endif

</body>
</html>
