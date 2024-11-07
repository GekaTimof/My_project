
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
</head>
<body>
    <header>
        <h1>Логотип и Меню</h1>
        <nav>
            <a href="/">Главная</a>
            <a href="/form">Форма</a>
            <a href="/data">Данные</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Laravel App</p>
    </footer>
</body>
</html>

