<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        Day la trang DEMO {{$a}} - {{$b}}
    </div>
    <form action="demo1/postLogin" method="post">
        @csrf
        <input type="text" name="user">
        <input type="password" name="pass">
        <button type="submit">SEND</button>
    </form>
</body>
</html>