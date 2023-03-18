<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raise</title>
</head>
<body>
    <h1>ここにイメージや妄想を記入していく3</h1>
    <div>ここにはユーザー名も表示する</div>
            <form action="{{ route('image.subg3_store') }}" method="POST">
            @csrf
            <div>
                <x-input-label for="Granularity" :value="__('2つ目の質問')" />
                <input name='Granularity' class="form-control"></input>
            </div>
            <x-primary-button class="ml-3">
                {{ __('3つ目の質問に移動') }}
            </x-primary-button>
        </form>
</body>
</html>