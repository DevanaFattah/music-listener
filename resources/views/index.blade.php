<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ambasing</title>
</head>
<body>
    @include('partials.sidebar')

    @foreach($recents as $recent)

        <p>{{ $recent }}</p>

    @endforeach
</body>
</html>