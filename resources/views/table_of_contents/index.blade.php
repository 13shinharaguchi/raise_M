<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raise</title>
</head>
<body>
    <h1>ここにランダム結果を表示する</h1>
    <p>{{$user -> name}}</p>
    <p>{{$image1 -> image}}</p>
    <p>{{$image2 -> image}}</p>
    <p>{{$image3 -> image}}</p>
    <form action="{{ route('content.all') }}" method="GET">
        <x-primary-button class="ml-3">
            {{ __('すべて表示へ') }}
        </x-primary-button>
    </form>
</body>
</html>