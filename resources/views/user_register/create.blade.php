<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raise</title>
</head>
<body>
    <div>
        <form action="{{ route('user_register.store') }}" method="POST">
                @csrf
                <div>
                     <x-text-input name='name' required autofocus />
                </div>
                <x-primary-button>
                 {{ __('やってみたいことの登録に進む') }}
                 </x-primary-button>
        </form>
    </div>
</body>
</html>