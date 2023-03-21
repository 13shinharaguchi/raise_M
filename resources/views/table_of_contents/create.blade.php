<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raise</title>
</head>
<body>
    <h1>ここにはボタンをおいて、クリックされたらランダムで目次を作成する</h1>
    <form action="{{ route('content.index') }}" method="GET">
        <x-primary-button class="ml-3">
            {{ __('ランダムに目次を作成、一覧へ') }}
        </x-primary-button>
    </form> 
</body>
</html>