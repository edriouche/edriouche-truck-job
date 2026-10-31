<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دخول الإدارة</title>
</head>
<body>
    <h1>دخول الإدارة</h1>

    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <form method="POST" action="/admin/login">
        @csrf

        <label>اسم المستخدم</label><br>
        <input type="text" name="username" required><br><br>

        <label>كلمة المرور</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">دخول</button>
    </form>
</body>
</html>
