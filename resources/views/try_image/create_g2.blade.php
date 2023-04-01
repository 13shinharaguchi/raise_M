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
    <div>{{ $user}}</div>
    <div>やってみたいこと：{{$wanna_try}}</div>
        <form action="{{ route('image.sub_store') }}" method="POST">
            @csrf
            <div>
                <x-input-label for="image" :value="__('2つ目の質問')" />
                <div>{{$question2}}</div>
                <input name='image' required autofocus></input>
                <div style="display:none;">
                </div>
            </div>
            <x-primary-button>
                {{ __('登録する') }}
            </x-primary-button>
        </form>
</body>
</html>