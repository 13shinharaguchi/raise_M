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
    <div class="p-6 max-w-md mx-auto bg-white shadow-md overflow-hidden sm:rounded-lg">
        <h1 class="text-lg font-semibold">ニックネームをおしえてね</h1>
        <form action="{{ route('user_register.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="border-black border-2 rounded-md w-full">
                <input name="game_user" class="w-full py-2 px-3 border-none focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1 mt-4">
                {{ __('登録する') }}
            </button>
        </form>
    </div>
</div>


</body>
</html>