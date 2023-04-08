
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">

    <!-- Scripts -->
    
    <title>ひだね</title>
</head>
<body>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-12 sm:pt-0 bg-purple-100">
    <div class="p-12 mx-auto bg-white shadow-md overflow-hidden sm:rounded-lg max-w-md sm:max-w-full md:max-w-2xl lg:max-w-4xl xl:max-w-6xl">
    <p class="py-2">{{$user}}のやってみたいことは</P>
    <p class="text-lg font-semibold py-2">{{$wanna_try}}です</p>
    <p class="py-2">あなたもなりきって答えみよう！</p>
    <p class="py-2">ニックネームをおしえてね</p>
        <form action="{{ route('partner_register_store') }}" method="POST" class="mt-4">
            @csrf
            <div class="border-black border-2 rounded-md w-full">
                <input name="partner_game_user" class="w-full py-2 px-3 border-none focus:outline-none focus:ring-2 focus:ring-blue-500" 
                 placeholder="10文字以内" maxlength="10"required autofocus>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1 mt-4 w-full rounded-full">
                {{ __('登録する') }}
            </button>
        </form>
    </div>
</div>
</body>
</html>