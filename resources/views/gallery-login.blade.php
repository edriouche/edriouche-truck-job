<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دخول إدارة المعرض</title>
</head>
<body>
    <h1>🔐 دخول إدارة المعرض</h1>

    @if ($errors->any())
        <p>{{ $errors->first() }}</p>
    @endif

    <form method="POST" action="{{ route('gallery.authenticate') }}">
        @csrf

        <label>البريد الإلكتروني</label><br>
        <input type="email" name="email" required><br><br>

        <label>كلمة المرور</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">دخول</button>
    </form>
</body>
</html>
