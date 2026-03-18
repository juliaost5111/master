<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Страна: {{$location['country']?? 'Россия'}}</p>
<p>Город: {{$location['city']?? 'Москва'}}</p>
</body>
</html>