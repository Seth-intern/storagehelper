<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POS</title>
</head>
<body>
    <h1>POS Homepage</h1>
    <form action="{{route('pos.store')}}" method="post">
        {{csrf_field()}}
        <input type="text" placeholder="name" name="name">
        <input type="submit" value="Save">
    </form>
</body>
</html>