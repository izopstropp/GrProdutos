<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{URL::to('dist/css/bootstrap.min.css')}}">
    <title>Nosso Site - @yield('title')</title>
</head>
<body>
    <div class="container">
            @if(Session::has('message'))
            <div class="alert alert-success">
                {!! Session::get('message') !!}
            </div>
        @endif
        @yield('content')
    </div>
    <script type="text/javascript" src="{{URL::to('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
