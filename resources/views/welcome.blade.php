<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">


    <title>raise</title>
</head>
<body>
<div class="min-h-screen flex flex-col justify-center items-center bg-green-100">
  <div class="flex justify-center">
    <a href="{{ route('how_to_use') }}" class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1">使い方</a>
  </div>
  <form action="{{ route('user_register.create') }}" method="GET">
    <button class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1">始める</button>
  </form>
</div>

</body>
</html>