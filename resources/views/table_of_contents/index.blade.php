<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>raise</title>
</head>
<body>
    <h1>ここにランダム結果を表示する</h1>
    <p>{{$user}}</p>
    <p>{{$image1}}</p>
    <p>{{$image2}}</p>
    <p>{{$image3}}</p>
    <form action="{{ route('content.all') }}" method="GET">
        <x-primary-button class="ml-3">
            {{ __('すべて表示へ') }}
        </x-primary-button>
    </form>
</body>
</html>