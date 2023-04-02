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
    <div class="flex flex-col justify-center items-center h-screen">
        <div>すべての結果を表示する</div>
                <div>{{$user}}</div>
                <div>{{ $image1}}</div>
                <div>{{ $image2}}</div>
                <div>{{ $image3}}</div>
                <p>{{$partner_user}}</p>
                <p>{{ $p_image1}}</p>
                <p>{{ $p_image2}}</p>
                <p>{{ $p_image3}}</p>
    </div>
        <div class="flex justify-center"><a href="{{ URL::previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white">戻る</a></div>
    </div>
</body>
</html>