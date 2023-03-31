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
        <div>
            <h1 class="bg-red-500">ニックネームをおしえてね</h1>
            <form action="{{ route('user_register.store') }}" method="POST" class="x-4 py-2">
                @csrf
                <div>
                     <input name='game_user' class="h-16 bg-white " required autofocus />
                </div>
                <x-primary-button>
                 {{ __('登録する') }}
                 </x-primary-button>
            </form>
        </div>
    </div>
</body>
</html>