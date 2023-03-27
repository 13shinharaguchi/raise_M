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
    <div>
        <h1 class="bg-red-500">ユーザー登録名</h1>
        <form action="{{ route('user_register.store') }}" method="POST">
                @csrf
                <div>
                     <x-text-input name='name' required autofocus />
                </div>
                <x-primary-button>
                 {{ __('登録する') }}
                 </x-primary-button>
        </form>
    </div>
</body>
</html>