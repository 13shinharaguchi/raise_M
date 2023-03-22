<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raise</title>
</head>
<body>
    <!--書き方は他にもありそう-->
    <form action="{{ route('content.index') }}" method="GET">
        <x-primary-button>
            {{ __('ランダムに目次を作成、一覧へ') }}
        </x-primary-button>
    </form> 
</body>
</html>