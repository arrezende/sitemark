<!DOCTYPE html>
<html lang="{{config('app.locale')}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-dark h-full text-white">

    {{ $slot }}
</body>

</html>