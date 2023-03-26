<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raise</title>
</head>
<body>
    <h1>やってみたいことを登録する</h1>
    <form action="{{ route('wanna_try.store') }}" method="POST">
    @csrf
        <div>
            <x-text-input name='wanna_try' class="form-control" required autofocus />
        </div>
    <x-primary-button>
        {{ __('登録する') }}
    </x-primary-button>
</body>
</html>

