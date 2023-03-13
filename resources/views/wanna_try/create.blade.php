<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wanna_try</title>
</head>
<body>
    <h1>大元やってみたいことを登録する</h1>
    <p>ここは登録する必要がないと思うからセッションかなんかにする</p>
    <p>入力フォームの設置をする</p>
    <form action="{{ route('wanna_try.store') }}" method="POST">
    @csrf
        <div class="form-group">
            <x-text-input name='wanna_try' class="form-control" required autofocus />
        </div>
    <x-primary-button class="ml-3">
        {{ __('やってみたいことのイメージ・妄想に移動する') }}
    </x-primary-button>
</body>
</html>

