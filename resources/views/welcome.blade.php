<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('storage/css/estils.css')}}">
        <title>Home</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body >
        <div class="flex-center position-ref full-height">
        
            <div class="content">
                <div class="center links">
                <a href="{{url('login')}}"> Login</a>
            <a href="{{url('Register/create')}}">Register</a>
            </div>
                <img src="{{ asset('storage/fotos/logo2.jpg')}}" alt=""  style=" width: 1000px;height: 600px;">
            </div>
        </div>
    </body>
</html>
