<html>
    <body>
        <div>名前を記入する</div>
        <from action="{{route('user_register.store')}}" method="POST">
            @csrf
            <input type="text" name="user1">
            <button type="submit">送信</button>
        </from>
    </body>
</html>

