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
        <div class="p-4 sm:p-12 mx-auto bg-white shadow-md overflow-hidden mb-8">
            <div>
                <p> やってみたいことに対して、３つの質問に答えてみよう！</p>
                <p>今思いついたことを回答しよう！</p>
                <p>考えすぎないようにしてね!</p>
            </div>
        </div>
        <div class="flex justify-center">
            <a href="{{ URL::previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-full">戻る</a>
        </div>
    </div>
</div>

</body>
</html>