<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Год: {{$year?? Date('Y')}}</p>
<p>Месяц: {{$month?? Date('m')}}</p>
<p>День: {{$day?? Date('d')}}</p>  
</body>
</html>