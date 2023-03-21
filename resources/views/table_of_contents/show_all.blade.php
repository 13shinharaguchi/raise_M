<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raise</title>
</head>
<body>
    <h1>すべての結果を表示する</h1>
    
    @foreach ($re as $e)
        <div>{{$e -> image}}</div>
    @endforeach
    
    @foreach ($ree as $ee)
        <div>{{$ee -> image}}</div>
    @endforeach
</body>
</html>