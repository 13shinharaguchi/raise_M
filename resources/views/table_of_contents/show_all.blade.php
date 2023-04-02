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
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-green-100">
　<div class="p-12 mx-auto bg-white shadow-md overflow-hidden sm:rounded-lg" style="width: 700px;">
  <div class="mb-8">
    <h1 class="text-xl font-bold">{{$question1}}</h1>
    <div class="pl-5 flex flex-col">
      <div class="mb-4 mt-2 flex flex-col">
        <p class="font-bold">{{$user}}</p>
        <p>{{$image1}}</p>
      </div>
      <div class="flex flex-col">
        <p class="font-bold">{{$partner_user}}</p>
        <p>{{$p_image1}}</p>
      </div>
    </div>
  </div>
  <div class="mb-8">
    <h1 class="text-xl font-bold">{{$question2}}</h1>
    <div class="pl-5 flex flex-col">
      <div class="mb-4 mt-2 flex flex-col">
        <p class="font-bold">{{$user}}</p>
        <p>{{$image2}}</p>
      </div>
      <div class="mb-4 md:mb-0 flex flex-col">
        <p class="font-bold">{{$partner_user}}</p>
        <p>{{$p_image2}}</p>
      </div>
    </div>
  </div>
  <div class="mb-8">
    <h1 class="text-xl font-bold">{{$question3}}</h1>
    <div class="pl-5 flex flex-col">
      <div class="mb-4 mt-2 flex flex-col">
        <p class="font-bold">{{$user}}</p>
        <p>{{$image3}}</p>
      </div>
      <div class="mb-4 md:mb-0 flex flex-col">
        <p class="font-bold">{{$partner_user}}</p>
        <p>{{$p_image3}}</p>
      </div>
    </div>
  </div>
  <div class="flex justify-center">
    <a href="{{ URL::previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2">戻る</a>
  </div>
  </div>
</div>

</body>
</html>