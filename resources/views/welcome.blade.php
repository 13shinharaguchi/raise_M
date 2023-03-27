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
    <div class="bg-red-500">文字</div>
    <div>
        <form action="{{ route('user_register.create') }}" method="GET">
        <x-primary-button class="ml-3">
          {{ __('クリックして始める') }}
        </x-primary-button>
        </form>
    </div>
</body>
</html>