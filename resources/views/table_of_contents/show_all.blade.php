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
    
    @foreach ($main_records as $main_record)
        <div>{{$main_record -> image}}</div>
    @endforeach
    
    @foreach ($partner_records as $partner_record)
        <div>{{$partner_record -> image}}</div>
    @endforeach
</body>
</html>