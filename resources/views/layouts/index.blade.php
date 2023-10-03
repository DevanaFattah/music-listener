<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Ambasing</title>
</head>
<body>
    <div class="app-container flex flex-row">

        @yield('content')

    </div>
</body>
</html>