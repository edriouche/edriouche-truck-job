<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>للشركات | Edriouche Truck Job</title>
    <style>
        body{font-family:Arial,sans-serif;max-width:900px;margin:auto;padding:20px;line-height:1.8}
        .box{padding:20px;border-radius:15px;background:#f5f5f5;margin:20px 0}
        input,textarea{box-sizing:border-box;border:1px solid #ccc;border-radius:8px}
        .btn{display:inline-block;padding:12px 22px;border-radius:10px;background:#222;color:white;text-decoration:none;border:0;cursor:pointer}
    </style>
</head>
<body>

<h1>🚛 Edriouche Truck Job</h1>

<h2>للشركات — أعلن عن فرص العمل</h2>

<p>
هل شركتك تبحث عن سائقين مهنيين؟
يمكنك إرسال طلبك لنشر فرصة العمل أمام جمهور السائقين المهنيين.
</p>

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

</body>
</html>
