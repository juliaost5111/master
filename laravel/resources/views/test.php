<?php 
return view('page', [
 'url' => $url,
 'params' => $params
]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Сегодня: {{date('d.M.Y')}}</p> 
</body>
</html>