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
<div class="min-h-screen bg-green-100">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <h2 class="text-2xl font-bold text-gray-800 mb-8">{{$wanna_try}}</h2>
    <div class="text-2xl font-bold text-gray-800 mb-8 text-center">について以下から話して深ぼってみよう</div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <div class="bg-white rounded-lg shadow-md p-4">
        <p>{{$random_image1}}</p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-4">
        <p>{{$random_image2}}</p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-4">
        <p>{{$random_image3}}</p>
      </div>
    </div>
    <div class="text-center text-xl pt-20">話に困ったら以下をクリック</div>
    <form action="{{ route('content.all') }}" method="GET" class=" text-center">
      <button class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-full">質問と回答を表示</button>
    </form>
  </div>
</div>

</body>
</html>