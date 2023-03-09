<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>最初の画面</h1>
        <form action="{{ route('user_register.create') }}" method="GET">
        <x-primary-button class="ml-3">
          {{ __('Start') }}
        </x-primary-button>
        </form>
    </div>
    
</body>
</html>