<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>DASHBOARD</title>
    </head>
    <body>
    @csrf
        <h1 >Вы вошли как:{{$name}} </h1>
        <form action="{{route('logout')}}" method="get">
            <button type="submit">Выйти с аккаунта</button>
        </form>
    </body>

</html>