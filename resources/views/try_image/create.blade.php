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
    <div>{{ $user->name }}</div>
    <div>やってみたいこと：{{$wanna_try}}</div>
     <form action="{{ route('image.store') }}" method="POST">
        @csrf
        <div>
            <!--inputlabwlは削除する-->
            <x-input-label for="image" :value="__('1つ目の質問')" />
            <div>{{$question1}}</div>
            <input name='image'  required autofocus></input>
            <div style="display:none;">
            <input name='granularity_number' class="hidden" value="{{ $granularity }}"></input>
            <input name='game_user_number' class="hidden" value="{{ $user->id }}"></input>
            </div>
        </div>
        <x-primary-button>
            {{ __('登録') }}
        </x-primary-button>
    </form>
</body>
</html>
