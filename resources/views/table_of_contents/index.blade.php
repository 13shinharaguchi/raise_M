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
    <title>raise</title>
</head>
<body>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <p>{{$wanna_try}}に対するイメージだ！</p>
        <p>{{$random_image1}}</p>
        <p>{{$random_image2}}</p>
        <p>{{$random_image3}}</p>
        <form action="{{ route('content.all') }}" method="GET">
            <button class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1 rounded-full">すべて表示へ</button>
        </form>
    </div>
</body>
</html>