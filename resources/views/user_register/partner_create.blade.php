
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
        <h1>パートナー名の登録</h1>         
        <div>
            <form action="{{ route('partner_register_store') }}" method="POST">
                @csrf
                <div>
                     <x-text-input name='name' class="form-control" required autofocus />
                </div>
                <x-primary-button>
                 {{ __('登録する') }}
                 </x-primary-button>
            </form>
        </div>
    </div>
</body>
</html>