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
    <h1>すべての結果を表示する</h1>
    <p>{{$user}}</p>
    <p>{{$partner_user}}</p>
    <div>{{ $image1}}</div>
    <div>{{ $image2}}</div>
    <div>{{ $image3}}</div>
    <div>{{ $p_image1}}</div>
    <div>{{ $p_image2}}</div>
    <div>{{ $p_image3}}</div>
</body>
</html>