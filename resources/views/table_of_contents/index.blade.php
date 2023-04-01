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
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <p>{{$wanna_try}}に対するイメージだ！</p>
        <p>{{$random_image1}}</p>
        <p>{{$random_image2}}</p>
        <p>{{$random_image3}}</p>
        <form action="{{ route('content.all') }}" method="GET">
            <x-primary-button class="ml-3">
                {{ __('すべて表示へ') }}
            </x-primary-button>
        </form>
    </div>
</body>
</html>