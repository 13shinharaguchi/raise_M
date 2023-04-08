<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">

    <title>ひだね</title>
</head>
<body>
<div class="min-h-screen flex flex-col justify-center items-center bg-green-100">
  <div class="w-full max-w-3xl">
    <div class="mb-8 ml-3 mr-3 shadow">
      <div class="bg-gray-100 p-2 rounded-lg">
        <div class="mb-4">
          <h1 class="text-lg font-bold ">{{$question1}}</h1>
        </div>
        <div class="mb-4 md:mb-0 mt-2 md:mt-0 flex flex-col md:flex-row justify-between">
          <div class="mb-4 md:mb-0 mr-0 md:mr-4">
            <p class="font-bold">{{$user}}</p>
            <p>{{$image1}}</p>
          </div>
          <div class="flex flex-col">
            <p class="font-bold">{{$partner_user}}</p>
            <p>{{$p_image1}}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="mb-8 ml-3 mr-3 shadow">
      <div class="bg-gray-100 p-2 rounded-lg">
        <div class="mb-4">
          <h1 class="text-lg font-bold ">{{$question2}}</h1>
        </div>
        <div class="mb-4 md:mb-0 mt-2 md:mt-0 flex flex-col md:flex-row justify-between">
          <div class="mb-4 md:mb-0 mr-0 md:mr-4">
            <p class="font-bold">{{$user}}</p>
            <p>{{$image2}}</p>
          </div>
          <div class="flex flex-col">
            <p class="font-bold">{{$partner_user}}</p>
            <p>{{$p_image2}}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="mb-8 ml-3 mr-3 shadow">
      <div class="bg-gray-100 p-2 rounded-lg">
        <div class="mb-4">
          <h1 class="text-lg font-bold ">{{$question3}}</h1>
        </div>
        <div class="mb-4 md:mb-0 mt-2 md:mt-0 flex flex-col md:flex-row justify-between">
          <div class="mb-4 md:mb-0 mr-0 md:mr-4">
            <p class="font-bold">{{$user}}</p>
            <p>{{$image3}}</p>
          </div>
          <div class="flex flex-col">
            <p class="font-bold">{{$partner_user}}</p>
            <p>{{$p_image3}}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="flex justify-center w-full">
      <a href="{{ URL::previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-full">戻る</a>
    </div>
  </div>
</div>

</body>
</html>