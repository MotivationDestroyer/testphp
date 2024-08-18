<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Регистрация</title>
    </head>
    <body>
        <h1>Регистрация</h1>
        <form action="{{route('registracia')}}" method="post" novalidate>
            @csrf
            <label for="name">Имя пользователя:</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password"><br><br>

            <label for="email">Почта:</label>
            <input type="email" id="email" name="email"><br><br>

            <button type="submit">Зарегистрироваться</button>
        </form>
    </body>
    <!-- 
    в action указываю адрес, который будет обрабатывать нашу форму.
    registracia название моего роута-обработчика
    @csrf написал чтобы laravel не выполнял автоматическую защиту от csrf атак,
    она проверяет что этот запрос будет отправлен именно с нашего сайта.(ошибка 419)
    Выполняет она это через отправку спец токена.
    

      -->
</html>