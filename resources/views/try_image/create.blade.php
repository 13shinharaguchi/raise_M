<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raise</title>
</head>
<body>
    <h1>ここにイメージや妄想を記入していく</h1>
    <div>ここにはユーザー名も表示する</div>
     <form action="{{ route('image.store') }}" method="POST">
        @csrf
        <div>
            <x-input-label for="Granularity_1" :value="__('1つ目の質問')" />
            <input name='Granularity_1' class="form-control"></input>
        </div>
        <div>
            <x-input-label for="Granularity_2" :value="__('2つ目の質問')" />
            <input name='Granularity_2' class="form-control"></input>
        </div>
        <div>
            <x-input-label for="Granularity_3" :value="__('3つ目の質問')" />
            <input name='Granularity_3' class="form-control"></input>
        </div>
        <x-primary-button class="ml-3">
            {{ __('相手に同じ質問をさせるに移動') }}
        </x-primary-button>
    </form>
</body>
</html>
