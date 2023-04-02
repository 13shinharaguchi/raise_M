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
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-green-100">
        <div class="p-12 mx-auto bg-white shadow-md overflow-hidden sm:rounded-lg" style="width: 700px;">
        <p>{{$user}}</p>
        <div>やってみたいこと：{{$wanna_try}}</div>
        <div>{{$question1}}</div>
        <form action="{{ route('image.store') }}" method="POST" >
            @csrf
            <div class="border-black border-2 rounded-md w-full">
               
                <input name='image' class="w-full py-2 px-3 border-none focus:outline-none focus:ring-2 focus:ring-blue-500" required autofocus></input>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1 mt-4">登録する</button>
        </form>
    </div>
</body>
</html>
