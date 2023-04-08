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
    <div class="p-4 sm:p-12 mx-auto bg-white shadow-md overflow-hidden mb-8">
        <h1 class="text-3xl font-bold mb-4">遊び方</h1>
        <div class="text-base mb-4 font-bold">
            <p>夢ややってみたいことについて、質問に答え、作成される目次を基に２人ではなしてみよう！</p>
        </div>
        <div class="text-base mb-4 font-bold">
            <p>プレーヤーはメインユーザーとパートナーの２人です</p>
            <p>夢ややってみたいことを話したい方がメインユーザーになろう</p>
            <p>質問には考えすぎず、今思っていることを回答してみよう！</p>
        </div>
        <div class="bg-gray-200 rounded-lg p-4 mb-4">
            <h2 class="text-lg font-bold mb-2">メインユーザー操作</h2>
            <div class="text-base">
                <p>①ニックネームを登録しよう</p>
                <p>②夢ややってみたいことを入力しよう</p>
                <p>③一問一答で３つの質問に答えよう</p>
                <p>④パートナーにチェンジしよう</p>
                <p>⑤作成された目次を基に話を展開しよう</p>
            </div>
        </div>
        <div class="bg-gray-200 rounded-lg p-4">
            <h2 class="text-lg font-bold mb-2">パートナー操作</h2>
            <div class="text-base">
                <p>①ニックネームを登録しよう</p>
                <p>②メインユーザーのやってみたいことを自分ごととなりきってみよう</p>
                <p>③一問一答で３つの質問に答えよう</p>
                <p>④メインユーザーに返そう</p>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <a href="{{ URL::previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-full">戻る</a>
    </div>
</div>



</body>
</html>