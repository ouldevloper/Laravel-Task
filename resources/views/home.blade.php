<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - task</title>
    <link rel="stylesheet" href="{{url('app.css')}}">

</head>
<body>
    <div class="topnav">
        <a class="active" href="/junior">Junior Level</a>
        <a href="/itunes">Medelle Level</a>
    </div>

    <div style="padding: 10px;margin: 10px;">
        @yield('name')    
    </div>
</body>
</html>