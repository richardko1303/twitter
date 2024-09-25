<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to Twitter</h1>
    <h2>Profile</h2>
    <p>Here is your profile</p>

@foreach($users as $user)
    @if($user['age'] >= 18)
        <p>Pouzivatel {{$user['name']}} ma {{$user['age']}} rokov a moze soferovat</p>
    @endif
    @if($user['age'] < 18)
        <p>Pouzivatel {{$user['name']}} ma {{$user['age']}} rokov a nemoze soferovat</p>
    @endif
@endforeach



</body>
</html>
