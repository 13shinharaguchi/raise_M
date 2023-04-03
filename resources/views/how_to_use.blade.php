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
        <div>
            <h1>
                やってみたいことを入力しよう！！
            </h1>
            <p>
               やってみたいことに対して、３つの質問に答えてみよう！
               回答するときは、考えすぎないようにして
               今思っていることを回答してね！
            </p>
        </div>
        <div class="flex justify-center">
            <a href="{{ URL::previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2">戻る</a>
        </div>
    </div>

</body>
</html>