<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <script src="{{ URL::asset('js/app.js') }}"></script>

    <script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
    <title>Document</title>
</head>
<body>
    @include('inc.header')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright &copy; 2017 Todolist</p>
    </footer>
</body>
</html>