<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello world</title>
</head>

<body>
@for ($i = 0; $i <= $count; $i++)
Hello world <br/>
@endfor

</body>
</html>