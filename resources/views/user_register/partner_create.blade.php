
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
        <h1>パートナー名の登録</h1> 
        <p>{{$user}}のやってみたいことは、{{$wanna_try}}　です</p>
        <p>あなたもなりきって答えみよう！</p>
        <div>
            <form action="{{ route('partner_register_store') }}" method="POST" class="x-4 py-2 border-2 border-gray-400">
                @csrf
                <div>
                     <input name='partner_game_user' class="form-control" required autofocus />
                </div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1">
                 {{ __('登録する') }}
                </button>
            </form>
        </div>
    </div>
</body>
</html>