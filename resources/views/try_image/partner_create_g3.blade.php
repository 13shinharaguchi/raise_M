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
        <div>{{ $user}}</div>
        <form action="{{ route('partner_image.subg3_store') }}" method="POST">
            @csrf
            <div>
                <x-input-label for="image" :value="__('3つ目の質問')" />
                <div>質問：{{$question3}}</div>
                <input name='image' required autofocus></input>
            </div>
            <x-primary-button>
                {{ __('ランダム一覧の表示') }}
            </x-primary-button>
        </form>
    </div>
</body>
</html>